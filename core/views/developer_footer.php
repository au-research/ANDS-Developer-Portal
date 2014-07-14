<section id="k-footer" class="section-space60 text-inverted"><!-- starts footer -->
		<div id="footer-top-line"></div><!-- offsetted top line -->
		<div class="container"><!-- starts container -->
			<div class="row"><!-- starts row -->

				<ul class="list-unstyled col-lg-6 col-md-6"> 
					<li class="widget mq-box widget_categories">
						<h2 class="widget-title"><i class="icon-external-link awesome32"></i>
							<img src="<?=asset_url('img/ands_logo_white.png','base');?>" style="height:20px; vertical-align:top;" /> 

							<div style="margin-top:2px; vertical-align:top; display:inline-block; font-weight: normal;">Developer Toolbox</div></h2>
						
						<p>This is an initiative of the <a href="http://www.ands.org.au/" target="_blank">Australian National Data Service</a> (services@ands.org.au)</p>
						<p><small><em>Disclaimer: Unless otherwise stated, all ANDS software is licensed under the Apache License, Version 2.0 on an "as-is" basis, with no warranties of any kind, either express or implied.</em></small></p>

					</li>
				</ul>

				<ul class="pull-right list-unstyled col-lg-3 col-md-3"> 
					<li class="widget mq-box widget_categories">
						<h2 class="widget-title"><i class="icon-external-link awesome32"></i>Useful Links</h2>
						<ul>
							<li class="cat-item"><a href="http://ands.org.au" title="">ANDS Website</a></li>
							<li class="cat-item"><a href="<?php echo portal_url(); ?>" title="">Research Data Australia</a></li>
							<li class="cat-item"><a href="<?php echo registry_url(); ?>" title="">ANDS Online Services</a></li>
							<li class="cat-item"><a href="http://developers.ands.org.au//" title="">ANDS Community</a></li>
						</ul>
					</li>
				</ul>

				<ul class="pull-right list-unstyled col-lg-3 col-md-3"> 
					<li class="widget mq-box widget_categories">
						<h2 class="widget-title"><i class="icon-github awesome32"></i> Open Source Software</h2>
						<ul>
							<li class="cat-item"><a href="https://github.com/au-research/ANDS-Registry-Core" title="">ANDS Registry Core</a></li>
							<li class="cat-item"><a href="https://github.com/au-research/ANDS-Registry-Contrib" title="">ANDS Registry Contrib</a></li>
							<li class="cat-item"><a href="https://github.com/au-research/ANDS-Harvester" title="">ANDS Harvester</a></li>
							<li class="cat-item"><a href="https://github.com/au-research/ANDS-PIDS-Service" title="">ANDS PIDS Service</a></li>
							<li class="cat-item"><a href="https://github.com/au-research/ANDS-Developer-Portal" title="ANDS Developer Portal">ANDS Developer Portal (this site)</a></li>
						</ul>
					</li>
				</ul>

			</div><!-- ends row -->
		</div><!-- ends container -->
	</section><!-- ends footer -->
	
	<div id="k-to-top" title="Scroll to top"><i class="icon-chevron-up icon-white"></i></div>
	<!-- javascript -->
	<script src="<?php echo asset_url('js/combine.js','core');?>"></script>
	

	<script>
		var base_url = '<?php echo base_url();?>';
		var portal_url = '<?php echo portal_url();?>';
		var apps_url = '<?php echo apps_url();?>';
		var real_base_url = "<?php echo $this->config->item('default_base_url');?>";
	</script>

	<!-- dynamic include libraries -->
	<?php if(isset($js_lib)): foreach($js_lib as $lib):?>

	<?php if($lib=='orcid_widget'):?>
			<link href="<?php echo apps_url('assets/orcid_widget/css/orcid_widget.css');?>" rel="stylesheet" type="text/css">
			<script src="<?php echo apps_url('assets/orcid_widget/js/orcid_widget.js');?>" type="text/javascript"></script>
	<?php elseif($lib=='registry_widget'):?>
			<link href="<?php echo apps_url('assets/registry_widget/css/registry_widget.css');?>" rel="stylesheet" type="text/css">
			<script src="<?php echo apps_url('assets/registry_widget/js/registry_widget.js');?>" type="text/javascript"></script>
	<?php elseif($lib=='vocab_widget'):?>
			<link rel="stylesheet" type="text/css" href="<?php echo apps_url('assets/vocab_widget/css/vocab_widget.css'); ?>">
			<script src="<?php echo apps_url('assets/vocab_widget/js/vocab_widget.js'); ?>"></script>
	<?php elseif($lib=='location_capture_widget'):?>
			<script src="//maps.google.com/maps/api/js?sensor=false&libraries=drawing&v=3"></script>
			<link href="<?php echo apps_url('assets/location_capture_widget/css/location_capture_widget.css');?>" rel="stylesheet" type="text/css">
			<script src="<?php echo apps_url('assets/location_capture_widget/js/location_capture_widget.js');?>" type="text/javascript"></script>
    <?php elseif($lib=='colorbox'):?>
	    <link href="<?php echo asset_url('lib/colorbox/colorbox.css', 'base');?>" rel="stylesheet" type="text/css">
	    <script src="<?php echo asset_url('lib/colorbox/jquery.colorbox-min.js', 'base');?>" type="text/javascript"></script>


	<?php endif; endforeach; endif;?>
	<?php if (isset($scripts)): foreach($scripts as $script):?>
		<script src="<?php echo asset_url('js/' . $script);?>.js" defer></script>
	<?php endforeach; endif; ?>
</body>
</html>