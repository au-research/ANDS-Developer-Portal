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
					<li><?php echo anchor('/documentation/services/', 'Services'); ?></li>
				</ol>
			</div>
		</div><!-- ends row -->
	</div><!-- ends container -->
</section>

<section id="k-work-gallery"><!-- starts work gallery -->

    <div class="container section-space60"><!-- starts container -->

	<div class="row"><!-- starts row -->


	    <div id="k-work-items" class="k-work-grid masonry">

		<figure class="panel-figure product-box-hover col-lg-3 col-md-4 col-sm-6 col-xs-12 f--web-design"><!-- ITEM 9 -->
		    <a href="<?=base_url('documentation/services/getRIFCS');?>" class="product-box-link">
		      <h3>getRIFCS API</h3>
		      <span class="tit"></span>
		      <p>This API provides a simple method to retrieve RIFCS XML for one or more objects in the Registry.</p>
		      <p><small>Use this API if your system uses RIFCS internally or if you prefer
		      being able to work with and validate XML content.</small></p>
			<i class="product-box-overlay-icon icon-plus"></i>
		    </a>
		    <figcaption class="product-title"><a href="" title="Learn about the getRIFCS API">Learn about this API</a></figcaption>
		</figure>

		<figure class="panel-figure product-box-hover col-lg-3 col-md-4 col-sm-6 col-xs-12 f--web-design"><!-- ITEM 9 -->
		    <a href="<?=base_url('documentation/services/getMetadata');?>" class="product-box-link">
		      <h3>getMetadata API</h3>
		      <span class="tit"></span>
		      <p>Search and retrieve structured metadata about objects in the registry as either XML or JSON. </p>
		      <p><small>Use this API if your system is compatible with XML or JSON and you do not require the full RIFCS representation of an object.</small></p>
			<i class="product-box-overlay-icon icon-plus"></i>
		    </a>
		    <figcaption class="product-title"><a href="" title="Learn about the getRIFCS API">Learn about this API</a></figcaption>
		</figure>

		<figure class="panel-figure product-box-hover col-lg-3 col-md-4 col-sm-6 col-xs-12 f--web-design"><!-- ITEM 9 -->
		    <a href="<?=base_url('documentation/services/getExtRif');?>" class="product-box-link">
		      <h3>getExtRif API</h3>
		      <span class="tit"></span>
		      <p>This API allows you to retrieve the enriched and annotated copy of records which generate pages in Research Data Australia.</p>
		      <p><small>Use this API if you require more detail than what is available in the RIFCS record.</small></p>
			<i class="product-box-overlay-icon icon-plus"></i>
		    </a>
		    <figcaption class="product-title"><a href="" title="Learn about the getRIFCS API">Learn about this API</a></figcaption>
		</figure>

		<figure class="panel-figure product-box-hover col-lg-3 col-md-4 col-sm-6 col-xs-12 f--web-design"><!-- ITEM 9 -->
		    <a href="<?=base_url('documentation/services/oai');?>" class="product-box-link">
		      <h3>OAI-PMH provider</h3>
		      <span class="tit"></span>
		      <p>A web service implementing the Open Archives Initiative Protocol for Metadata Harvesting</p>
		      <p><small>Use this API if your system is a harvester which is compatible with the OAI-PMH protocol.</small></p>
			<i class="product-box-overlay-icon icon-plus"></i>
		    </a>
		    <figcaption class="product-title"><a href="" title="Learn about the getRIFCS API">Learn about this API</a></figcaption>
		</figure>

		<figure class="panel-figure product-box-hover col-lg-3 col-md-4 col-sm-6 col-xs-12 f--web-design"><!-- ITEM 9 -->
		    <a href="<?=base_url('documentation/services/getGrants');?>" class="product-box-link">
		      <h3>getGrants API</h3>
		      <span class="tit"></span>
		      <p>A special purpose API for retrieving structured information about Australian Research Grants.</p>
		      <p><small>Use this API if your system is only interested in metadata relating to ARC or NH&amp;MRC Research Grants.</small></p>
			<i class="product-box-overlay-icon icon-plus"></i>
		    </a>
		    <figcaption class="product-title"><a href="" title="Learn about the getRIFCS API">Learn about this API</a></figcaption>
		</figure>

		<figure class="panel-figure col-lg-3 col-md-4 col-sm-6 col-xs-12 f--web-design"><!-- ITEM 9 -->
		    <h4>Not sure which service is right for you?</h4> Ask us on the <?=anchor($this->config->item('developer_community_portal'),'Developer Community Portal');?> or email us!
		</figure>

	    </div>

	</div><!-- ends row -->

    </div><!-- ends container -->

</section><!-- ends work gallery -->

<?php $this->load->view('developer_footer'); ?>