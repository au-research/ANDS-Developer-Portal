<?php $this->load->view('developer_header'); ?>
	
<section id="k-slider" class="fixed-head-marger"><!-- starts revolution slider -->
	<div class="fullwidthbanner">
		<ul>
	
			<li data-transition="slotzoom-random" data-slotamount="1" data-masterspeed="300" data-delay="9000">
				
					<img src="<?php echo asset_url('img/slides/slide_bg.jpg','core') ?>" >
					
					<div class="caption sfb ltl"
						 data-x="0"
						 data-y="50"
						 data-speed="600"
						 data-start="1500"
						 data-easing="easeOutExpo" data-endspeed="400" data-endeasing="easeInSine" ><img src="<?php echo asset_url('img/screens/registry_widget.png', 'core'); ?>" alt=""></div>

					<div class="caption k_mid_callout sft stb"
						 data-x="630"
						 data-y="130"
						 data-speed="600"
						 data-start="1200"
						 data-easing="easeOutExpo" data-endspeed="200" data-endeasing="easeOutSine">Collections Registry Widget</div>

					<div class="caption k_sm_callout lfr stl"
						 data-x="630"
						 data-y="200"
						 data-speed="600"
						 data-start="1200"
						 data-easing="easeOutBack" data-endspeed="200" data-endeasing="easeOutSine">Embeddable Research Data Australia searches</div>
			</li>

			<li data-transition="slotzoom-random" data-slotamount="1" data-masterspeed="300" data-delay="9000">
				
					<img src="<?php echo asset_url('img/slides/slide_bg.jpg','core') ?>" >
					
					<div class="caption sfb ltl"
						 data-x="700"
						 data-y="50"
						 data-speed="600"
						 data-start="1500"
						 data-easing="easeOutExpo" data-endspeed="400" data-endeasing="easeInSine" ><img src="<?php echo asset_url('img/screens/vocab_widget_2.png', 'core'); ?>" alt=""></div>

					<div class="caption k_mid_callout sft stb"
						 data-x="150"
						 data-y="130"
						 data-speed="600"
						 data-start="1200"
						 data-easing="easeOutExpo" data-endspeed="200" data-endeasing="easeOutSine">Controlled Vocabulary Widget</div>

					<div class="caption k_sm_callout lfr stl"
						 data-x="150"
						 data-y="200"
						 data-speed="600"
						 data-start="1200"
						 data-easing="easeOutBack" data-endspeed="200" data-endeasing="easeOutSine">Instantly add Data Classification capabilities</div>

					<div class="caption k_sm_callout lfr stl"
						 data-x="150"
						 data-y="245"
						 data-speed="600"
						 data-start="1200"
						 data-easing="easeOutBack" data-endspeed="200" data-endeasing="easeOutSine"> to your data capture tools </div> 
			</li>

			<li data-transition="slotzoom-random" data-slotamount="1" data-masterspeed="300" data-delay="9000">
				
					<img src="<?php echo asset_url('img/slides/slide_bg.jpg','core') ?>" >
					
					<div class="caption sfb ltl"
						 data-x="150"
						 data-y="50"
						 data-speed="600"
						 data-start="1500"
						 data-easing="easeOutExpo" data-endspeed="400" data-endeasing="easeInSine" ><img src="<?php echo asset_url('img/screens/location_widget_2.png', 'core'); ?>" alt=""></div>

					<div class="caption k_mid_callout sft stb"
						 data-x="700"
						 data-y="130"
						 data-speed="600"
						 data-start="1200"
						 data-easing="easeOutExpo" data-endspeed="200" data-endeasing="easeOutSine">Location Capture Widget</div>

					<div class="caption k_sm_callout lfr stl"
						 data-x="700"
						 data-y="200"
						 data-speed="600"
						 data-start="1200"
						 data-easing="easeOutBack" data-endspeed="200" data-endeasing="easeOutSine">Geospatial Capabilities</div>

					<div class="caption k_sm_callout lfr stl"
						 data-x="700"
						 data-y="245"
						 data-speed="600"
						 data-start="1200"
						 data-easing="easeOutBack" data-endspeed="200" data-endeasing="easeOutSine">Custom Drawings &amp; Place Name Resolution</div> 
			</li>

		</ul>
	</div>
</section><!-- ends slider -->

<section id="k-intro" class="clearfix section-space60"><!-- below slider starts -->
	<div class="container"><!-- starts container -->
		<div class="row text-dark k-equal-height"><!-- starts row -->
		
			<div class="subhead-tit subhead-tit"></div>
		
			<div class="col-lg-3 col-md-3 col-sm-6 text-center k-fancy-icon-wrap mq-box">
				<?php echo anchor('documentation/widgets', '<i class="k-fancy-icon icon-code awesome32"></i>'); ?>
				<div class="gap10"></div>
				<h4>Widgets</h4>
				<p>Enhance your existing web pages and data capture systems with <u>easy to use</u> widgets.</p>
				 <p>Explore the developer library of reusable and customisable widgets for 
				 	<a href="<?=base_url('documentation/widgets/vocab_widget');?>">vocabularies</a>, 
				 	<a href="<?=base_url('documentation/widgets/orcid_widget');?>">ORCID lookups</a>, 
				 	<a href="<?=base_url('documentation/widgets/location_widget');?>">spatial search</a> and 
				 	<a href="<?=base_url('documentation/widgets/');?>">more</a>!
				 </p><br/>&nbsp;</p>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-6 text-center k-fancy-icon-wrap mq-box">
				<?php echo anchor('documentation/services', '<i class="k-fancy-icon icon-cloud-download awesome32"></i>'); ?>
				<div class="gap10"></div>
				<h4>Web Services</h4>
				<p>Tap into the Australian Research Data Commons' <u>rich network of metadata</u>.</p>
				<p>Explore the ANDS Collections Registry for 
					<a href="<?=base_url('documentation/services/registry_apis');?>">collection metadata</a> or integrate
					<a href="<?=base_url('documentation/services/vocabulary_api');?>">controlled vocabularies</a> 
					into your application using the ANDS Vocabulary Service (and 
					<a href="<?=base_url('services/getGrants');?>">more</a>!).</p>
			</div>
			
			
			<div class="col-lg-3 col-md-3 col-sm-6 text-center k-fancy-icon-wrap mq-box">
				<?php echo anchor('documentation/registry', '<i class="k-fancy-icon icon-github awesome32"></i>'); ?>
				<div class="gap10"></div>
				<h4>Registry Software</h4>
				<p>Create <u>your own metadata repository</u> and discovery portal using the code that powers our very own <a href="http://researchdata.ands.org.au">Research Data Australia</a>!</p>
				<p>Download the latest version of the <a href="<?=base_url('documentation/registry');?>">ANDS Registry Software</a> (from our Github) and follow the <a href="<?=base_url('documentation/registry');?>">simple installation guide</a>.<br/>&nbsp;</p>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-6 text-center k-fancy-icon-wrap mq-box">
				<?php echo anchor($this->config->item('developer_community_portal'), '<i class="k-fancy-icon icon-group awesome32"></i>'); ?>
				<div class="gap10"></div>
				<h4>Developer Community</h4>
				<p>The <a href="<?=$this->config->item('developer_community_portal');?>">ANDS Developer Community</a> is a great way to get advice on implementing and contributing to the open source software! Need support? This is the place to ask!</p>
			</div>
		
		</div><!-- ends row -->
		
	</div><!-- ends container -->
	
</section><!-- below slider ends -->
<?php $this->load->view('developer_footer'); ?>