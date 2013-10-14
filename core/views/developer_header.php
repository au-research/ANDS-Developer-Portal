<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Site title -->
	<title><?php echo ((isset($title)? $title: 'ANDS Developer Portal')); ?></title>
	
	<!-- Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	
	<!-- Google webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,300italic,500,700,900' rel='stylesheet' type='text/css' />

	<!-- Libraries stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url('bootstrap/css/bootstrap.min.css', 'core'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url('font-awesome/css/font-awesome.min.css', 'core');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url('js/fancybox/jquery.fancybox.css', 'core');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url('js/revolution-slider/css/settings.css', 'core');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url('js/isotope/style.css', 'core');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url('js/audioplayer/audioplayer.css', 'core');?>" />

	<!-- Page Stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/combine.min.css','core'); ?>">

	<!-- Make BS work on IE8 -->
	<!--[if lt IE 9]>
	<script src="<?php echo asset_url('js/html5shiv.js', 'core'); ?>"></script>
	<script src="<?php echo asset_url('js/respond.min.js', 'core'); ?>"></script>
	<![endif]-->
</head>

<body class="home">
	<section id="k-head" data-shrinkat="180"><!-- starts head -->
			<div class="container section-space30"><!-- starts container -->
				<div class="row menu-switch"><!-- starts row -->
				
					<div id="site-logo" class="col-lg-4 col-md-4 col-sm-12">
						<a href="index.html" title="Home Page">
							ANDS Developer Toolbox
						</a>
					</div>
					
					<div id="k-main-navig" class="col-lg-8 col-md-8 col-sm-12"><!-- begins navigation -->
					
						<a id="mobile-nav" class="menu-nav" href="#menu-nav"><span class="alter-menu-icon"></span></a><!-- alternative menu button -->
						
						<nav id="menu">
							<ul id="menu-nav" class="pull-right k-dropdown-menu">
								<li><?php echo anchor('/documentation/widgets/','Widgets'); ?>
									<ul class="sub-menu">
										<li><?php echo anchor('/documentation/widgets/registry_widget', 'Registry Widget'); ?></li>
										<li><?php echo anchor('/documentation/widgets/orcid_widget', 'ORCID Widget'); ?></li>
									</ul>
								</li>
								<li><a href="about-us.html">Services</a>
									<ul class="sub-menu">
										<li><?php echo anchor('documentation/services/grants', 'Grants API') ?></li>
									</ul>
								</li>
								<li><a href="blog.html">Registry</a></li>
								<li><a href="work.html">Support</a></li>
								<li><a href="contact.html">Communities</a></li>
							</ul>
						</nav>
					</div><!-- ends navigation -->
				</div><!-- ends row -->
			</div><!-- ends container -->
			<div id="header-bottom-line"></div><!-- offsetted bottom line -->
	</section><!-- ends head -->

