<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">ANDS Collections Registry APIs</h2>
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

<section id="k-work-gallery"><!-- starts work gallery -->

	<div class="container section-space30"><!-- starts container -->

		<div class="k-work-grid masonry k-equal-height"><!-- starts row -->

			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mq-box">
				<div class="price-plan plan-common text-center">
					<h3 class="plan-title text-light">getRIFCS API<span class="plan-title-underline"></span></h3>
					<div class="plan-features">
						<p>This API provides a simple method to retrieve RIFCS XML for one or more objects in the Registry.</p>
							<p>
								<small>Use this API if your system uses RIFCS internally or if you prefer being able to work with and validate XML content.</small>
							</p>
					</div>
					<div>
						<?php echo anchor('documentation/services/getRIFCS', '<i class="icon-ok"></i> LEARN ABOUT THIS API', array('class'=>'btn btn-pricing-plan')); ?>
					</div>
					<div class="plan-footer"><span class="plan-footer-overline"></span></div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mq-box">
				<div class="price-plan plan-common text-center">
					<h3 class="plan-title text-light">getRIFCS API<span class="plan-title-underline"></span></h3>
					<div class="plan-features">
						<p>Search and retrieve structured metadata about objects in the registry as either XML or JSON. </p>
						<p><small>Use this API if your system is compatible with XML or JSON and you do not require the full RIFCS representation of an object.</small></p>
					</div>
					<div>
						<?php echo anchor('documentation/services/getMetadata', '<i class="icon-ok"></i> LEARN ABOUT THIS API', array('class'=>'btn btn-pricing-plan')); ?>
					</div>
					<div class="plan-footer"><span class="plan-footer-overline"></span></div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mq-box">
				<div class="price-plan plan-common text-center">
					<h3 class="plan-title text-light">getExtRif API<span class="plan-title-underline"></span></h3>
					<div class="plan-features">
						<p>This API allows you to retrieve the enriched and annotated copy of records which generate pages in Research Data Australia.</p>
						<p><small>Use this API if you require more detail than what is available in the RIFCS record.</small></p>
					</div>
					<div>
						<?php echo anchor('documentation/services/getExtRif', '<i class="icon-ok"></i> LEARN ABOUT THIS API', array('class'=>'btn btn-pricing-plan')); ?>
					</div>
					<div class="plan-footer"><span class="plan-footer-overline"></span></div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mq-box">
				<div class="price-plan plan-common text-center">
					<h3 class="plan-title text-light">OAI-PMH provider<span class="plan-title-underline"></span></h3>
					<div class="plan-features">
						<p>A web service implementing the Open Archives Initiative Protocol for Metadata Harvesting</p>
						<p><small>Use this API if your system is a harvester which is compatible with the OAI-PMH protocol.</small></p>
					</div>
					<div>
						<?php echo anchor('documentation/services/oai', '<i class="icon-ok"></i> LEARN ABOUT THIS API', array('class'=>'btn btn-pricing-plan')); ?>
					</div>
					<div class="plan-footer"><span class="plan-footer-overline"></span></div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mq-box">
				<div class="price-plan plan-common text-center">
					<h3 class="plan-title text-light">Research Grants API<span class="plan-title-underline"></span></h3>
					<div class="plan-features">
						<p>A special purpose API for retrieving structured information about Australian Research Grants.</p>
						<p><small>Use this API if your system is only interested in metadata relating to ARC or NH&amp;MRC Research Grants.</small></p>
					</div>
					<div>
						<?php echo anchor('documentation/services/getGrants', '<i class="icon-ok"></i> LEARN ABOUT THIS API', array('class'=>'btn btn-pricing-plan')); ?>
					</div>
					<div class="plan-footer"><span class="plan-footer-overline"></span></div>
				</div>
			</div>

		</div>

		<div class="row text-center">
			<h3>Not sure which service is right for you?</h3>
			<p>Ask us on the <?php echo anchor($this->config->item('developer_community_portal'), 'Developer Community Portal'); ?> or email us!</p>
			<div class="gap30"></div>
		</div>

	</div><!-- ends container -->

</section><!-- ends work gallery -->

<?php $this->load->view('developer_footer'); ?>