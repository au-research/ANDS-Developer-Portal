<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
  <div class="container section-space30"><!-- starts container -->
    <div class="row"><!-- starts row -->
      <div class="col-lg-6 col-md-6 col-sm-12">
	<h2 class="k-page-title">Collections Registry API</h2>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
	<ol class="breadcrumb pull-right">
	  <li><?php echo anchor('/', 'Home'); ?></li>
	  <li><?php echo anchor('/documentation/services/registry_apis', 'Collections Registry API'); ?></li>
	  <li class="active">getMetadata</li>
	</ol>
      </div>
    </div><!-- ends row -->
  </div><!-- ends container -->
</section>
<section id="k-content"><!-- starts content -->
  <div class="container"><!-- starts container -->
    <div class="row"><!-- starts row -->

      <div id="k-main" class="clearfix col-lg-8 col-md-8 col-sm-12"><!-- starts main content -->
	<article><!-- starts article short -->
	  <div><a id="title"></a><!-- starts summary -->
	    <h3 class="k-fancy-title"><!-- title -->
	      <a href="#" title="getMetadata API Documentation">getMetadata API Documentation</a><a id="about"></a>
	    </h3>
	    <div style="float:right; width:200px; margin-left:40px;">
	      <a href="<?=asset_url('img/getMetadata-architecture.png','core');?>" class="colorbox" title="Illustrative Architecture Diagram - getMetadata API">
		<img src="<?=asset_url('img/getMetadata-architecture.png','core');?>" style="width:90%;" alt="Architecture Diagram" />
		<br/><small>View Service Architecture Diagram</small>
	      </a>
	    </div>
	    <p><!-- text -->
	      The getMetadata API provides access to the contents of the Search Index underpinning the ANDS Collections Registry. This effectively offers open access to the same infrastructure which powers the search and browsing capabilities in <a href="http://researchdata.ands.org.au" target="_blank">Research Data Australia</a>.
	    </p>

	    <p>
	      Using this powerful API, your application can perform complex search queries, retrieving the indexed data values as well as
	performing aggregations and simple spatial searches. This API also includes many of the extended metadata fields available through the <a href="<?=base_url('documentation/services/getExtRif');?>">getExtRif</a> service.
	    </p>


	    <p>
	      This service is different to the other Collection Registry APIs in that it principally returns a JSON representation of
	the metadata fields and not the original RIF-CS XML. <br/>This allows you to easily restrict what data fields you want to retrieve in
	order to optimise your application's performance.</p>
	    </p>

	    <p><br/></p>

	    <h3 class="k-fancy-title"><a id="usage"></a>Service Usage</h3>
	    <div class="alert alert-success">
	      <b>Before you start!</b> To use this service, institutions or individuals must <a href="<?=registry_url('services/register/');?>" target="_blank">register for a free API key</a>.
	    </div>
	    <h4><a id="service"></a>Resource URL</h4>
	    <blockquote><small><code><?=registry_url('services/');?><blue>{YOUR API KEY}</blue>/<green>getMetadata</green>?<blue>{params}</blue></code></small></blockquote>
	    <p>
	      <ul>
		<li>
		  <small>This API is a <a href="http://net.tutsplus.com/tutorials/other/a-beginners-introduction-to-http-and-rest/" target="_blank">RESTful Web Service</a>. Simply replace the <blue>blue</blue> parameters with the appropriate values and issue a HTTP GET request.</small>
		</li>
		<li>
		  <small>Replace <code><blue>{YOUR API KEY}</blue></code> with the key your organisation registered (<a href="<?=registry_url('services/register/');?>" target="_blank">no API key? register for free</a>)</small>
		</li>
		<li>
		  <small>Replace <code><blue>{params}</blue></code> with some combination of the parameters below. <em>Note: all parameter values <u>must be</u> <a href="http://www.w3schools.com/tags/ref_urlencode.asp" target="_blank">URL-encoded</a>.</em></small>
		</li>
		<li>
		  <small>By default, <span class="bold">results are limited to 10 records per request</span>. Use the <code>start</code> and <code>rows</code> parameters to step through additional results.</em></small>
		</li>
	      </ul>
	    </p>

	    <p><br/></p>

	    <h4>Service Parameters:</h4><a id="params"></a>
	    <p><span class="label label-warning">Useful Note</span><small> These parameters have the same meaning as defined by <a href="http://wiki.apache.org/solr/CommonQueryParameters" target="_blank">SOLR Common Query Parameters</a> (SOLR <a href="http://lucene.apache.org/solr/" target="_blank">enterprise search server</a>). </small></p>
	    <?php
	      $config = array(
    array('q',
      '<p>The q parameter is normally the main query for the request.</p>
      <p>All values of <code>q</code> <u>must be</u> URL-encoded. It is also recommended that string values are surrounded by quotes.</p>
      <p>By default, the field seperator is "OR" unless "AND" is explicitly specified (see example usage #4).',

      '<p>1. Matching all records (i.e. unrestricted search): <br/><code>q=*:*</code></p>
      <p>2. Matching records based on a particular field: <br/><code>q=class:(collection)</code></p>
      <p>3. Matching multiple field values (OR): <br/><code>q=class:(collection OR party)</code></p>
      <p>4. Matching on multiple fields (AND): <br/><code>q=class:(collection) AND group_search("Monash")</code></p>
      <p>5. Wildcard searching on string fields: <br/><code>q=title_search:(*survey*)</code></p>
      <p><span class="label label-success">Wait!</span> How do I know what fields to search? See '. anchor('documentation/services/indexed_fields', 'Indexed Fields', array('target'=>'_blank'))
    ),

    // No real need for the public to use fq -- they usually don't care about performance or edistmax
   /* array('fq',
      '<p>"fq" stands for Filter Query.</p>
      <p>This parameter can be used to specify a query that can be used to restrict the super set of documents that can be returned.</p>',
      '<p><code>q=*:*&amp;fq=+originating_source:("http://resdata.unsw.edu.au/")</code></p>'
    ),*/
    array('fl',
      '<p>Restricts the metadata fields which are returned by the search query.</p>
    <p>By default, the following fields are returned:<br/><code>id,key,slug,display_title,class</code></p>',
      '<p>1. Select only keys and record titles: <br/><code>?fl=key,display_title</code></p>
      <p>2. Select all information about related objects: <br/><code>?fl=key,related_object_*</code></p>
      <p>2. Select all fields which are indexed: <br/><code>?fl=*</code></p>'
    ),

    array('sort',
      '<p>Sorting can be done on any indexed field which only has single values. Sort can be either: <code>desc</code> or <code>asc</code>. </p>
      <p>Note: Fields which are indexed as string or integers are sortable. Other field types may produce unexpected results.</p>',
      '<p>1. Sort based on key in ascending order: <br/><code>q=*:*&amp;sort=key asc</code></p>
      <p>2. Sort based on update time in descending order (most recent first): <br/><code>q=key:*:*&amp;sort=update_timestamp desc</code></p>'
    ),

    array('<br/>start<br/><br/>rows',
      '<p>This parameter is used to paginate results from a query.</p>
      <p>When specified, it indicates the offset in the complete result set for where the set of returned documents should begin and end.</p>
      <p>By default, results <code>start</code> at <code>0</code> with <code>20</code> <code>rows</code> displayed. That is, by default only 20 rows are displayed in response to a search query.</p>',
      '<p>1. Display the first 20 records with a key starting AODN:<br/>
      <code>q=key:AODN*</code></p>
      <p>2. Display the next 20 records with a key starting AODN:<br/>
      <code>q=key:AODN*&amp;start=20</code></p>
      <p>3. Display 100 records starting from number 1000:<br/>
      <code>q=*:*&amp;start=1000&amp;rows=100</code></p>'
    ),

    array('<br/>facet<br/><br/>facet.field<br/><br/>facet.mincount',
      '<p>Faceting mode is analogous to a <code>GROUP BY</code> statement in SQL.</p>
      <p>When specified, faceting mode will retrict the resultset based on your query and then display the field value
       and count of records matching that field value.</p>',
     '<p>1. Display the number of records for each group, where the group has 10 or more records.<br/>
     <code>?facet=on&facet.field=group&facet.mincount=10</code></p>
     <p>2. Display the number of records for each group (collections only)<br/>
     <code>?facet=on&facet.field=group&q=class:(collection)</code></p>'
    ),
  );
	    ?>

	    <table class="table table-striped table-bordered table-hover" style="font-size:0.8em;">
	      <thead>
		<td width="15%">Parameter</td><td width="30%">Description</td><td>Example Usage</td>
	      </thead>
	      <tbody>
		<?php foreach($config as $c): ?>
		<tr>
		  <td width="15%"><code><?php echo $c[0] ?></code></td>
		  <td><?php echo $c[1] ?></td>
		  <td><?php echo $c[2] ?></td>
		</tr>
		<?php endforeach; ?>
	      </tbody>
	    </table>

	    <p><br/></p>
	    <h4>Response Format</h4>
	    <small>
	    <ul>
	      <li>By default, responses from this service are returned in JSON format which is almost identical to the <a href="http://wiki.apache.org/solr/SolJSON" target="_blank">SOLR JSON Response Writer</a>.
	  The service can also return a response in XML format by replacing <code><small>/getMetadata/</small></code> with <code><small>/getMetadata.xml/</small></code> in the request URI.</li>
	      <li>If the query was malformed or invalid, the service will return an error response in the content. The service does not currently support HTTP status headers.</li>
	    </ul>
	    </small>

	    <p><br/></p>
	    <h4>Common Questions</h4><a id="questions"></a>
	    <small>
	    <ul>
	      <li><u>How do I know what fields I can search?</u>
		<p>Consult the <a href="<?=base_url('documentation/services/indexed_fields');?>">Indexed Fields List</a> to see what fields you can search against.</p></li>

	      <li><u>How do I know what values those fields are likely to have?</u>
		<p>A good question! Some of the fields available to search don't actually exist in the RIF-CS schema and
		  for some use cases, knowing what their values might be can be quite tricky.
      Use <code>?q=*:*&amp;fl=*</code> to get a full list of indexed fields for all records.</p></li>
	    </ul>
	    </small>

	    <p><br/></p>
	    <p><br/></p>

	    <h3 class="k-fancy-title"><a id="example1"></a>Example Usage</h3>

	    <h4>1. Return collection records from a particular group/organisation</h4><a id="example2"></a>
	    <p>
	      Return metadata for 3 records of class "<i>collection</i>" which have the group attribute "<i>Australian Ocean Data Network</i>":

	      <small><ul>
		<li>HTTP GET Request: <br/>
		  <code>&gt;
		    <a target="_blank" href="<?=registry_url("services/api/getMetadata?" .
		    "q=".
		      rawurlencode("class:(collection) AND group_search:(\"Australian Ocean Data Network\")").
		    "&rows=" .
		      rawurlencode("3"));?>">

		    getMetadata?q=<blue><?="class:(collection) AND group_search:(\"Australian Ocean Data Network\")" . "</blue>" .
		     "&rows=<blue>" . rawurlencode("3");?></blue>

		  </code><br/></a>
		  <br/>
		</li>

		<li>Service Response:
	      <pre class="prettyprint pre-scrollable pre-small"><?php print htmlentities('{
  status: "success",
  message: {
    numFound: 30890,
    start: 0,
    docs: [
      {
	slug: "aims-weather-station-data-cleveland-bay-platform-rain-from-03-jul-1990",
	key: "AODN:c9cb7389-7af1-4e0a-8c95-6f295f1cec1e",
	id: "128152",
	display_title: "AIMS Weather Station Data - Cleveland Bay Platform - From 03 Jul 1990",
	class: "collection"
      },
      {
	slug: "temperature-logger-data-at-penguin-is-east-from-15-may-2012",
	key: "AODN:147b75a3-be17-4c7f-b12d-dbda75446fa1",
	id: "128153",
	display_title: "Temperature Logger Data at Penguin Is East, From 15 May 2012 ",
	class: "collection"
      },
      {
	slug: "assessing-habitat-damage-caused-by-the-grounding-of-the-shen-neng-1-on-douglas",
	key: "AODN:2bf0e568-935d-42fd-9e8b-d946e308d8ba",
	id: "128154",
	display_title: "Assessing habitat damage caused by the grounding of the Shen Neng 1 on Douglas Shoal, southern Great Barrier Reef, using towed video (Towvid)",
	class: "collection"
      }
    ]
  }
}') ?>

  </pre></small>

	    </p>

	    <!-- <div class="k-article-meta">
	      <span class="k-article-date">May 21, 2014</span>
	      <span class="k-article-spacer">/</span>
	      <span class="k-article-category"><a href="" title="Company News">Company News</a></span>
	      <span class="k-article-spacer">/</span>
	      <span class="k-article-comments"><a href="" title="21 comments">21 comments</a></span>
	      <span class="k-article-more"><a href="blog-single.html" title="Read more"><i class="icon-plus"></i></a></span>
	    </div> -->
	  </div><!-- ends summary -->
	  <p>&nbsp;</p>
	  <hr/>


	  <h4>2. Displaying all metadata about a particular record</h4><a id="example2"></a>
	    <p>
	      Return all the indexed metadata about a particular collection:

	      <small><ul>
		<li>HTTP GET Request: <br/>
		  <code>&gt;
		    <a target="_blank" href="<?=registry_url("services/api/getMetadata?" .
		    "q=key:(".rawurlencode('"AODN:c9cb7389-7af1-4e0a-8c95-6f295f1cec1e"').")&fl=*");?>">

		    getMetadata?q=<blue>key:("AODN%3Ac9cb7389-7af1-4e0a-8c95-6f295f1cec1e")</blue>&amp;<blue>fl=*</blue>

		  </code><br/></a>
		  <br/>
		</li>

		<li>Service Response:
	      <pre class="prettyprint pre-scrollable pre-small"><?php print htmlentities('{
  status: "success",
  message: {
  numFound: 1,
  start: 0,
  docs: [
    {
    slug: "aims-weather-station-data-cleveland-bay-platform-rain-from-03-jul-1990-to-21-oct-1992",
    key: "AODN:c9cb7389-7af1-4e0a-8c95-6f295f1cec1e",
    data_source_key: "acdata.unsw.edu.au",
    status: "PUBLISHED",
    originating_source: "http://www.aims.gov.au/adc",
    id: "128152",
    data_source_id: "135",

    group: "Australian Ocean Data Network",
    s_group: "Australian Ocean Data Network",

    display_title: "AIMS Weather Station Data - Cleveland Bay Platform Rain - From 03 Jul 1990 To 21 Oct 1992",
    list_title: "AIMS Weather Station Data - Cleveland Bay Platform Rain - From 03 Jul 1990 To 21 Oct 1992",
    simplified_title: "AIMS Weather Station Data - Cleveland Bay Platform Rain - From 03 Jul 1990 To 21 Oct 1992",

    description_value: [
      "This data set was collected by weather sensors deployed on the AIMS Weather Station site Cleveland Bay .<br /> <br /> Deployment Information for Rain<br /> Data Interval: From 03 Jul 1990 Through 21 Oct 1992<br /> Deployment Location: Cleveland Bay Platform<br /> Latitude: -19.15583 - Longitude: 146.88116",
      "Attribution 3.0 Australia",
      "Format for citation of data sourced from the Australian Institute of Marine Science (AIMS) in a list of references is as follows: &quot;Australian Institute of Marine Science. [year-of-data-download], [Title], [data-access-URL], accessed [date-of-access]&quot;.",
      "Data, products and services from AIMS are provided &quot;as is&quot; without any warranty as to fitness for a particular purpose."
    ],
    description_type: [
      "brief",
      "rights",
      "rights",
      "rights"
    ],
    spatial_coverage_polygons: [
	"146.88116,-19.15583"
    ],
    spatial_coverage_extents: [
	"146.88116 -19.15583"
    ],
    spatial_coverage_centres: [
	"146.88116 -19.15583"
    ],
    spatial_coverage_area_sum: 0,

    subject_value_unresolved: [
      "Oceans - Ocean Temperature - Water Temperature",
      "EARTH SCIENCES - Atmospheric Sciences - Meteorology",
      "0104",
      "01",
      "0105",
      "0103",
      "04",
      "9699"
    ],
    subject_type: [
      "local",
      "local",
      "anzsrc-for",
      "anzsrc-for",
      "anzsrc-for",
      "anzsrc-for",
      "anzsrc-for",
      "anzsrc-for"
    ],
    subject_value_resolved: [
      "Oceans - Ocean Temperature - Water Temperature",
      "EARTH SCIENCES - Atmospheric Sciences - Meteorology",
      "STATISTICS ",
      "MATHEMATICAL SCIENCES",
      "MATHEMATICAL PHYSICS",
      "NUMERICAL AND COMPUTATIONAL MATHEMATICS",
      "EARTH SCIENCES",
      "9699"
    ],
    subject_vocab_uri: [
      "",
      "",
      "http://purl.org/au-research/vocabulary/anzsrc-for/2008/0104",
      "http://purl.org/au-research/vocabulary/anzsrc-for/2008/01",
      "http://purl.org/au-research/vocabulary/anzsrc-for/2008/0105",
      "http://purl.org/au-research/vocabulary/anzsrc-for/2008/0103",
      "http://purl.org/au-research/vocabulary/anzsrc-for/2008/04",
    ""
    ],

    related_object_key: [
      "AODN:adc@aims.gov.au",
      "AODN:adc@aims.gov.au",
      "AODN:adc@aims.gov.au",
      "AODN:adc@aims.gov.au",
      "AODN:adc@aims.gov.au",
      "AODN:adc@aims.gov.au",
      "AODN:reception@aims.gov.au"
    ],
    related_object_id: [
      "127501",
      "128305",
      "127501",
      "128305",
      "127501",
      "128305",
      "127505"
    ],
    related_object_class: [
      "party",
      "party",
      "party",
      "party",
      "party",
      "party",
      "party"
    ],
    related_object_display_title: [
      "Data Manager, AIMS Data Centre",
      "Alongi, Daniel M, Dr",
      "Data Manager, AIMS Data Centre",
      "Alongi, Daniel M, Dr",
      "Data Manager, AIMS Data Centre",
      "Alongi, Daniel M, Dr",
      "Bainbridge, Scott, Mr"
    ],
    related_object_relation: [
      "metadataContact",
      "metadataContact",
      "pointOfContact",
      "pointOfContact",
      "isManagedBy",
      "isManagedBy",
      "custodian"
    ],

    class: "collection",
    type: "dataset",
    s_type: "dataset",
    description: "This data set was collected by weather sensors deployed on the AIMS Weather Station site Cleveland Bay .<br /> <br /> Deployment Information for Rain<br /> Data Interval: From 03 Jul 1990 Through 21 Oct 1992<br /> Deployment Location: Cleveland Bay Platform<br /> Latitude: -19.15583 - Longitude: 146.88116",

    identifier_value: [
      "AODN:c9cb7389-7af1-4e0a-8c95-6f295f1cec1e"
    ],

    identifier_type: [
      "local"
    ],

    _version_: "1448302860324306944",
    update_timestamp: "2013-10-08T05:14:00.268Z"
    }
  ]
  }
}');?>
	      </pre>
	      </li>
	      </ul></small>
	      <p><br/></p>
	      <hr/>
	      <br/>
	</article><!-- ends article short -->
      </div><!-- ends main content -->

      <aside id="k-sidebar" class="col-lg-3 col-md-4 col-sm-12 col-lg-offset-1"><!-- starts sidebar -->
	<div id="k-sidebar-splitter" class="clearfix section-space60"><span></span></div>
	<div class="sticky" style="position: fixed; top: 200px; width: 262px;">

	  <ul id="k-sidebar-list" class="list-unstyled">

	    <!--li class="widget widget_search clearfix">
	      <form action="" id="searchform" method="get" role="search">
		<div class="input-group">
		  <input type="text" name="s" id="s" class="form-control" autocomplete="off" placeholder="Search...">
		  <span class="input-group-btn"><button class="btn btn-default" type="button">SEARCH</button></span>
		</div>
	      </form>
	    </li-->

	    <li class="widget widget_categories clearfix sticky">
	      <h2 class="widget-title">Select from the menu...<span class="k-widget-title-tit"></span></h2>
	      <ul class="anchor_links">
		<li class="cat-item"><a href="#about">About the getMetadata API</a></li>
		<li class="cat-item"><a href="#usage">Service Usage</a></li>
		<li class="cat-item"><a href="#params">Parameters</a></li>
		<li class="cat-item"><a href="#questions">Common Questions</a></li>

		<li class="cat-item"><a href="#example1">Example Usage</a></li>

		<li class="cat-item"><a href="<?=base_url('documentation/services/indexed_fields');?>" target="_blank">Indexed Fields List</a></li>
		<li class="cat-item"><a href="http://researchdata.ands.org.au/home/disclaimer" target="_blank">Usage Disclaimer</a></li>
	      </ul>

	      <div class="clearfix">
		<div class="alert alert-warning">
		<b>Need help?</b> <br/>
		Visit the <?=anchor($this->config->item('developer_community_portal'),'Community Support Forum');?>
	      </div>
	    </li>


	    </div>

	  </ul>
	</div>
      </aside><!-- ends sidebar -->

    </div><!-- ends row -->

  </div><!-- ends container -->

  </section>
<?php $this->load->view('developer_footer'); ?>