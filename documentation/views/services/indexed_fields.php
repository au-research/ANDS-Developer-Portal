<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">ANDS Indexed Fields</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ol class="breadcrumb pull-right">
					<li><?php echo anchor('/', 'Home'); ?></li>
					<li><?php echo anchor('/documentation/services/', 'Services'); ?></li>
					<li class="active">Indexed Fields</li>
				</ol>
			</div>
		</div>
	</div>
</section>
<section id="k-content">
	<div class="container section-space60">
		<div class="row"><div id="k-main" class="clearfix col-lg-12 col-md-12 col-sm-12"><article>
			<div class="alert alert-info">Only PUBLISHED Records are currently indexed.</div>

<?php 
	$common_fields = array(
		array('key','string','The key of the record, provided in the RIFCS &lt;key&gt; element '),
		array('fulltext','text_general','A full-text search of the entire record (and ANDS-inferred values)'),
		array('display_title', 'text_en_splitting', "The title of the record (built from it's nameParts"),
		array('list_title', 'text_en_splitting', "The alternate title of the record used when the record is displayed in a list"),
		array('simplified_title', 'text_en_splitting', "The simplified title of the record used when the record has special characters and/or unicode chars"),
		array('description', 'text_en_splitting', "The description used for displaying search results."),
		array('class', 'string', "The class of the record (one of <code>collection</code>, <code>party</code>, <code>activity</code>, <code>service</code>)"),
		array('type', 'string', "The registryObject type attribute (i.e. <code>dataset</code> (collections) or <code>group</code> (for parties))"),
		array('group', 'string', "The group attribute of the registry object (usually the name of the institution/provider)"),
		array('update_timestamp', 'date', "The W3CDTF timestamp representing when the record was most recently updated"),
		array('slug', 'string', "The unique user-friendly URL <code>slug</code> which is appended to the base url of the portal."),
		array('contributor_page', 'string', "The slug of the contributor page of the data source that this record belongs to, if the slug is the same as the record, this indicate that the record is the contributor page"),
		array('logo','string','The logo of the record in the registry'),
		array('license_class','string','The license of the record'),
		array('originating_source','string','The originating source of the record'),
	);

	$vocab_fields = array(
		array('subject_value_resolved','string','The resolved value of the subject (if any) (i.e. <code>MATHEMATICAL SCIENCES</code>).'),
		array('subject_value_unresolved','text_en_splitting','The subject value provided to ANDS (usually an anzsrc code in notation form (i.e. <code>020103</code>))'),
		array('subject_type','text_en_splitting','The type value of the subject (if any) (i.e. <code>anzsrc-for</code>).'),
		array('subject_vocab_uri','text_en_splitting','The resolved URI of the subject (if it is matched in a supported vocabulary).'),
	);

	$relation_fields = array(
		array('related_object_key','string','The key of records which this record relates to (note: does NOT include inferred/reverse links)'),
		array('related_object_id','string','The id of records which this record relates to (note: does NOT include inferred/reverse links)'),
		array('related_object_class','string','The class of records which this record relates to (provided they exist in the registry) (i.e. <code>collection</code>, <code>party</code>, <code>activity</code>, <code>service</code>).'),
		array('related_object_type','string','The type of records which this record relates to (provided they exist in the registry).'),
		array('related_object_display_title','string','The title for records which this record relates to (provided they exist in the registry)'),
		array('related_object_relation','text_en_splitting','The nature of the relation (i.e. <code>isPartOf</code>)'),
	);

	$other_fields = array(
		array('id','string','The unique registry id of the record (generated internally during the ingest process)'),
		array('description_value','text_en_splitting','The values of description elements in the record.'),
		array('description_type','text_en_splitting','The types of description elements in the record.'),
		array('identifier_value','text_en_splitting','The values of identifier elements in the record.'),
		array('identifier_type','text_en_splitting','The types of identifier elements in the record.'),
		array('spatial_coverage_extents','location_rpt','The extents of spatial coverage of this registry object (a bounding box on each of the spatial_coverage_polygons)'),
		array('spatial_coverage_centres','text_en_splitting','Lat,Long pairs of the centre of each spatial region'),
		array('date_to','tdate','Dates related to the registry object indicating a "dateFrom" value'),
		array('date_from','tdate','Dates related to the registry object indicating a "dateTo" value'),
		array('earliest_year','sint','The year of the earliest date value (for temporal-based search)'),
		array('latest_year','sint','The year of the latest date value (for temporal-based search)'),
	);
?>
			<h2 class="k-fancy-title">Common Fields</h2>
			<table class="table table-striped table-bordered table-hover">
				<colgroup>
					<col class="col-lg-2"> <col class="col-lg-2"> <col class="col-lg-8">
				</colgroup>
				<thead><td>Field</td><td>Type</td><td>Description</td></thead>
				<tbody>
					<?php foreach($common_fields as $c): ?>
					<tr>
						<td><code><?php echo $c[0]; ?></code></td>
						<td><code><?php echo $c[1]; ?></code></td>
						<td><?php echo $c[2]; ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

			<h2 class="k-fancy-title">Vocabulary Fields</h2>
			<table class="table table-striped table-bordered table-hover">
				<colgroup>
					<col class="col-lg-2"> <col class="col-lg-2"> <col class="col-lg-8">
				</colgroup>
				<thead><td>Field</td><td>Type</td><td>Description</td></thead>
				<tbody>
					<?php foreach($vocab_fields as $c): ?>
					<tr>
						<td><code><?php echo $c[0]; ?></code></td>
						<td><code><?php echo $c[1]; ?></code></td>
						<td><?php echo $c[2]; ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

			<h2 class="k-fancy-title">Relationship Fields</h2>
			<table class="table table-striped table-bordered table-hover">
				<colgroup>
					<col class="col-lg-2"> <col class="col-lg-2"> <col class="col-lg-8">
				</colgroup>
				<thead><td>Field</td><td>Type</td><td>Description</td></thead>
				<tbody>
					<?php foreach($relation_fields as $c): ?>
					<tr>
						<td><code><?php echo $c[0]; ?></code></td>
						<td><code><?php echo $c[1]; ?></code></td>
						<td><?php echo $c[2]; ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

			<h2 class="k-fancy-title">Other Fields</h2>
			<table class="table table-striped table-bordered table-hover">
				<colgroup>
					<col class="col-lg-2"> <col class="col-lg-2"> <col class="col-lg-8">
				</colgroup>
				<thead><td>Field</td><td>Type</td><td>Description</td></thead>
				<tbody>
					<?php foreach($other_fields as $c): ?>
					<tr>
						<td><code><?php echo $c[0]; ?></code></td>
						<td><code><?php echo $c[1]; ?></code></td>
						<td><?php echo $c[2]; ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>


		</article></div></div><!-- end row -->
	</div><!-- end container-->
</section>
<?php $this->load->view('developer_footer'); ?>