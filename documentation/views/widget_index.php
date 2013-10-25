<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">Widgets</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ol class="breadcrumb pull-right">
					<li><?php echo anchor('/', 'Home'); ?></li>
					<li class="active">Widgets</li>
				</ol>
			</div>
		</div><!-- ends row -->
	</div><!-- ends container -->
</section>

<section class="section-space30 w-section">
	<div class="container"><!-- starts container -->
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-12">
			   <img src="<?php echo asset_url('img/screens/registry_widget.png', 'core'); ?>" alt="" class="img-thumbnail img-responsive img-full">
			</div>
			<div id="k-work-text" class="col-lg-5 col-md-5 col-sm-12"><!-- starts work preview -->
				<h3 class="k-fancy-title"><a href="<?=base_url('documentation/widgets/registry_widget/');?>">Collections Registry Search Widget</a></h3><!-- title -->
				<p>The Collections Registry Search Widget provides a quick and easy way of embedding a live Research Data Australia search within your new or existing web pages. The flexibility of the widget allows you to configure a predefined search, or provide your end users with a text field to specify their own search.</p>
				<?php echo anchor('documentation/widgets/registry_widget', 'Learn More', array('class'=>'btn btn-default')); ?>
			</div>
		</div><!-- ends row -->
	</div>
</section>

<section class="section-space30 w-section">
	<div class="container"><!-- starts container -->
		<div class="row">
			<div id="k-work-text" class="col-lg-5 col-md-5 col-sm-12"><!-- starts work preview -->
				<h3 class="k-fancy-title"><a href="<?=base_url('documentation/widgets/orcid_widget/');?>">ORCID Researcher Lookup Widget</a></h3><!-- title -->
				<p>The ANDS ORCID Widget allows you to lookup an ORCID ID and search for one using ORCID JSONP API. This widget is a jQuery plugin with extensible options over styling and functionality. Hence the widget is dependent on the jQuery plugin to function correctly.</p>
				<?php echo anchor('documentation/widgets/orcid_widget', 'Learn More', array('class'=>'btn btn-default')); ?>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-12">
			   <img src="<?php echo asset_url('img/screens/orcid_widget.png', 'core'); ?>" alt="" class="img-thumbnail img-responsive img-full">
			</div>
		</div><!-- ends row -->
	</div>
</section>

<section class="section-space30 w-section">
	<div class="container"><!-- starts container -->
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
			   <img src="<?php echo asset_url('img/screens/vocab_widget_2.png', 'core'); ?>" alt="" class="img-thumbnail img-responsive">
			</div>
			<div id="k-work-text" class="col-lg-8 col-md-8 col-sm-12"><!-- starts work preview -->
				<h3 class="k-fancy-title"><a href="<?=base_url('documentation/widgets/vocab_widget/');?>">Vocabulary Widget</a></h3><!-- title -->
				<p>The ANDS Vocabulary Widget allows you to instantly add Data Classification capabilities to your data capture tools through the ANDS Vocabulary Service.</p>
				<?php echo anchor('documentation/widgets/vocab_widget', 'Learn More', array('class'=>'btn btn-default')); ?>
			</div>
		</div><!-- ends row -->
	</div>
</section>

<section class="section-space30 w-section">
	<div class="container"><!-- starts container -->
		<div class="row">
			<div id="k-work-text" class="col-lg-5 col-md-5 col-sm-12"><!-- starts work preview -->
				<h3 class="k-fancy-title"><a href="<?=base_url('documentation/widgets/location_widget/');?>">Location Capture Widget</a></h3><!-- title -->
				<p>The ANDS Location Capture Widget allows you to instantly enrich your data capture system, adding geospatial capabilities such as custom drawings and place name resolution (using the Australian Gazetteer Service and Google Maps API).</p>
				<?php echo anchor('documentation/widgets/location_widget', 'Learn More', array('class'=>'btn btn-default')); ?>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-12">
			   <img src="<?php echo asset_url('img/screens/location_widget.png', 'core'); ?>" alt="" class="img-thumbnail img-responsive img-full">
			</div>
		</div><!-- ends row -->
	</div>
</section>

<?php $this->load->view('developer_footer'); ?>