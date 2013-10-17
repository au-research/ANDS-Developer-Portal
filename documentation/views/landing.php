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
						 data-x="900"
						 data-y="130"
						 data-speed="600"
						 data-start="1200"
						 data-easing="easeOutExpo" data-endspeed="200" data-endeasing="easeOutSine">Registry Widget</div>

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
						 data-easing="easeOutExpo" data-endspeed="400" data-endeasing="easeInSine" ><img src="<?php echo asset_url('img/screens/vocab_widget.png', 'core'); ?>" alt=""></div>

					<div class="caption k_mid_callout sft stb"
						 data-x="150"
						 data-y="130"
						 data-speed="600"
						 data-start="1200"
						 data-easing="easeOutExpo" data-endspeed="200" data-endeasing="easeOutSine">Vocabulary Widget</div>

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
						 data-easing="easeOutExpo" data-endspeed="400" data-endeasing="easeInSine" ><img src="<?php echo asset_url('img/screens/location_widget.png', 'core'); ?>" alt=""></div>

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
				<p>Explore the developer library of reusable and customisable widgets.<br/>&nbsp;</p>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-6 text-center k-fancy-icon-wrap mq-box">
				<?php echo anchor('documentation/services', '<i class="k-fancy-icon icon-cloud-download awesome32"></i>'); ?>
				<div class="gap10"></div>
				<h4>Services</h4>
				<p>A set of useful services to help you interact with the ANDS Registry.<br/>&nbsp;</p>
			</div>
			
			
			<div class="col-lg-3 col-md-3 col-sm-6 text-center k-fancy-icon-wrap mq-box">
				<?php echo anchor('documentation/registry', '<i class="k-fancy-icon icon-github awesome32"></i>'); ?>
				<div class="gap10"></div>
				<h4>Registry Software</h4>
				<p>Download the latest version of the ANDS Registry Software.<br/>&nbsp;</p>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-6 text-center k-fancy-icon-wrap mq-box">
				<?php echo anchor($this->config->item('developer_community_portal'), '<i class="k-fancy-icon icon-group awesome32"></i>'); ?>
				<div class="gap10"></div>
				<h4>Communities</h4>
				<p>The ANDS Developer community is a great way to get advice, find information, and meet other developers.</p>
			</div>
		
		</div><!-- ends row -->
		
	</div><!-- ends container -->
	
</section><!-- below slider ends -->
<?php $this->load->view('developer_footer'); ?>