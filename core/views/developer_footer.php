<section id="k-footer" class="section-space60 text-inverted"><!-- starts footer -->
		<div id="footer-top-line"></div><!-- offsetted top line -->
		<div class="container"><!-- starts container -->
			<div class="row"><!-- starts row -->
				
				<ul class="list-unstyled col-lg-3 col-md-3"> 
					<li class="widget mq-box">
						<h2 class="widget-title">Socialize</h2>
						<ul class="k-socials clearfix list-unstyled">
							<li><a href=""><i class="hi-icon icon-twitter awesome32"></i></a></li>
							<li><a href=""><i class="hi-icon icon-facebook awesome32"></i></a></li>
							<li><a href=""><i class="hi-icon icon-github awesome32"></i></a></li>
						</ul>
					</li>
				</ul>

			</div><!-- ends row -->
		</div><!-- ends container -->
	</section><!-- ends footer -->
	
	<div id="k-to-top" title="Scroll to top"><i class="icon-chevron-up icon-white"></i></div>
	<!-- javascript -->
	<script src="<?php echo asset_url('js/combine.min.js','core');?>"></script>
	<script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script><!-- google maps -->

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

	<?php endif; endforeach; endif;?>
	<?php if (isset($scripts)): foreach($scripts as $script):?>
		<script src="<?php echo asset_url('js/' . $script);?>.js" defer></script>
	<?php endforeach; endif; ?>
</body>
</html>