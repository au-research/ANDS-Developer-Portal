<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">ANDS Collections Registry API</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ol class="breadcrumb pull-right">
					<li><?php echo anchor('/', 'Home'); ?></li>
					<li><?php echo anchor('/documentation/services/', 'Web Services'); ?></li>
					<li class="active">Collections Registry APIs</li>
				</ol>
			</div>
		</div><!-- ends row -->
	</div><!-- ends container -->
</section>

<section>
	<div class="container section-space30">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mq-box">
				<dl class="k-dl-list">
					<dt class="k-dt k-fancy-icon-wrap">
						<?php echo anchor('documentation/services/getRIFCS', '<i class="icon-cloud awesome32 k-fancy-icon"></i>') ?>
                    </dt>
					<dd class="k-dd100">
						<h3 class="k-fancy-title">getRIFCS API</h3>
						<p>This API provides a simple method to retrieve RIFCS XML for one or more objects in the Registry.</p>
						<p> <small>Use this API if your system uses RIFCS internally or if you prefer being able to work with and validate XML content.</small> </p>
						<?php echo anchor('documentation/services/getRIFCS', '<i class="icon-ok"></i> LEARN ABOUT THIS API', array('class'=>'btn btn-default')); ?>
					</dd>
					
					<dt class="k-dt k-fancy-icon-wrap">
                    <?php echo anchor('documentation/services/getMetadata', '<i class="icon-cloud awesome32 k-fancy-icon"></i>') ?>
					</dt>
					<dd class="k-dd100">
						<h3 class="k-fancy-title">getMetadata API</h3>
						<p>Search and retrieve structured metadata about objects in the registry as either XML or JSON. </p>
						<p><small>Use this API if your system is compatible with XML or JSON and you do not require the full RIFCS representation of an object.</small></p>
						<?php echo anchor('documentation/services/getMetadata', '<i class="icon-ok"></i> LEARN ABOUT THIS API', array('class'=>'btn btn-default')); ?>
					</dd>

					<dt class="k-dt k-fancy-icon-wrap">
                        <?php echo anchor('documentation/services/vocabulary_api', '<i class="icon-cloud awesome32 k-fancy-icon"></i>') ?>
					</dt>
					<dd class="k-dd100">
						<h3 class="k-fancy-title">Vocabulary Service API</h3>
						<p>The ANDS Controlled Vocabularies service allows research organisations to query "controlled vocabularies".</p>
						<p><small>Use this API if your system is compatible with XML, JSON or RDF and uses a controlled vocabulary.</small></p>
						<?php echo anchor('documentation/services/vocabulary_api', '<i class="icon-ok"></i> LEARN ABOUT THIS API', array('class'=>'btn btn-default')); ?>
					</dd>
				</dl>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mq-box">
				<dl class="k-dl-list">
					<dt class="k-dt k-fancy-icon-wrap">
						<?php echo anchor('documentation/services/getExtRif', '<i class="icon-cloud awesome32 k-fancy-icon"></i>') ?>
					</dt>
					<dd class="k-dd100">
						<h3 class="k-fancy-title">getExtRif API</h3>
						<p>This API allows you to retrieve the enriched and annotated copy of records which generate pages in Research Data Australia.</p>
						<p><small>Use this API if you require more detail than what is available in the RIFCS record.</small> <br/>&nbsp;</p>
						<?php echo anchor('documentation/services/getExtRif', '<i class="icon-ok"></i> LEARN ABOUT THIS API', array('class'=>'btn btn-default')); ?>
					</dd>
					
					<dt class="k-dt k-fancy-icon-wrap">
                        <?php echo anchor('documentation/services/oai', '<i class="icon-cloud awesome32 k-fancy-icon"></i>') ?>
					</dt>
					<dd class="k-dd100">
						<h3 class="k-fancy-title">OAI-PMH Provider</h3>
						<p>A web service implementing the Open Archives Initiative Protocol for Metadata Harvesting</p>
						<p><small>Use this API if your system is a harvester which is compatible with the OAI-PMH protocol.</small></p>
						<?php echo anchor('documentation/services/oai', '<i class="icon-ok"></i> LEARN ABOUT THIS API', array('class'=>'btn btn-default')); ?>
					</dd>

					<dt class="k-dt k-fancy-icon-wrap">
                        <?php echo anchor('documentation/services/getGrants', '<i class="icon-cloud awesome32 k-fancy-icon"></i>') ?>
					</dt>
					<dd class="k-dd100">
						<h3 class="k-fancy-title">Research Grants API</h3>
						<p>The Research Grants API provides access to data relating to Australian Research Grants and Researchers.</p>
						<p> <small>A light-weight method to query the ANDS Registry for specific information about Research Grants.</small> </p>
						<?php echo anchor('documentation/services/getGrants', '<i class="icon-ok"></i> LEARN ABOUT THIS API', array('class'=>'btn btn-default')); ?>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	
</section>
<?php $this->load->view('developer_footer'); ?>