<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">Vocab Widget</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ol class="breadcrumb pull-right">
					<li><?php echo anchor('/', 'Home'); ?></li>
					<li><?php echo anchor('/documentation/widgets/', 'Widgets'); ?></li>
					<li class="active"><?php echo anchor('/documentation/widgets/vocab_widget', 'Vocab Widget'); ?></li>
				</ol>
			</div>
		</div><!-- ends row -->
	</div><!-- ends container -->
</section>
<section id="k-content"><!-- starts content -->
	<div class="container section-space60"><!-- starts container -->
		<div class="row"><!-- starts row -->

			<div id="k-main" class="clearfix col-lg-8 col-md-8 col-sm-12"><!-- starts main content -->
				<article><!-- starts article short -->
					<div class="alert alert-info">
						<b>Developer Zone</b>
						<p>Some basic web development knowledge may be needed to implement this widget</p>
					</div>

					<div class="k-fancy-title-wrap"><span class="k-fancy-title-tit"></span><h3 class="k-fancy-title">What is this widget?</h3></div>
					<p>The ANDS Vocabulary Widget allows you to instantly add Data Classification capabilities to your data capture tools through the ANDS Vocabulary Service.</p>
					<p>The widget has been written in the style of a jQuery plugin, allowing complete control over styling and functionality with just a few lines of javascript. The widget also ships with some UI helper modes for:</p>
					
					<ul class="k-work-features-list list-unstyled"><!-- features -->
						<li><span class="k-work-feature-name">Searching for vocabulary terms</span></li>
						<li><span class="k-work-feature-name">Creates a navigable "autocomplete" widget, with users able to search for the appropriate controlled vocabulary classification when inputting data.</span></li>
						<li><span class="k-work-feature-name">Narrowing on a (hierarchical) vocabulary item</span></li>
						<li><span class="k-work-feature-name">Populates a select list (or autocomplete textbox) with items comprising a base vocabulary classification URI.</span></li>
						<li><span class="k-work-feature-name">Browsing a (hierarchical) vocabulary set as a tree</span></li>
						<li><span class="k-work-feature-name">Creates a tiered term tree (such as that used in the <a href="http://researchdata.ands.org.au/browse">RDA "Browse" screen</a>)</span></li>
					</ul>
						
					<p>It is also possible to use the widget in a more programmatic manner; refer to the 'core usage' section below for more details.</p>
		
					<p>The demonstrator provides examples of all helper modes, and core usage.</p>
		 
					<div class="k-fancy-title-wrap"><span class="k-fancy-title-tit"></span><h3 class="k-fancy-title">How does it work?</h3></div>
					<p>The widget requires jQuery; load this, and the plugin itself (and associated CSS styles) in your document's &lt;head&gt;&lt;/head&gt; segment:</p>
					<pre class="prettyprint pre-scrollable" style="min-height:5em">
&lt;script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js'&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="http://services.ands.org.au/api/resolver/vocab_widget.js"&gt;&lt;/script&gt;
&lt;link rel="stylesheet" type="text/css" href="http://services.ands.org.au/api/resolver/vocab_widget.css" /&gt;
					</pre>
					<p>What happens next very much depends on what you want to achieve:</p>


					<div class="k-fancy-title-wrap"><span class="k-fancy-title-tit"></span><h3 class="k-fancy-title">License</h3></div>
					<p>Apache License, Version 2.0: <a href="http://www.apache.org/licenses/LICENSE-2.0">http://www.apache.org/licenses/LICENSE-2.0</a></p>
				</article><!-- ends article short -->
			</div><!-- ends main content -->
			
			<aside id="k-sidebar" class="col-lg-3 col-md-4 col-sm-12 col-lg-offset-1"><!-- starts sidebar -->
				<div id="k-sidebar-splitter" class="clearfix section-space60"><span></span></div>
				<ul id="k-sidebar-list" class="list-unstyled">
					
					<li class="widget widget_categories clearfix sticky">
						<h2 class="widget-title">Demo and Download<span class="k-widget-title-tit"></span></h2>
						<ul class="list-unstyled">
							<li class="cat-item"><?php echo anchor(apps_url('registry_widget/download/'), '<i class="icon-white icon-download"></i> Demo', array('class'=>'btn btn-large btn-success')) ?></li>
							<li class="cat-item"><?php echo anchor(apps_url('registry_widget/download/'), '<i class="icon-white icon-download"></i> Download minified', array('class'=>'btn btn-large btn-success')) ?></li>
							<li class="cat-item"><?php echo anchor(apps_url('registry_widget/download/'), '<i class="icon-white icon-download"></i> Download uncompressed', array('class'=>'btn btn-large btn-success')) ?></li>
						</ul>
					</li>
				
				</ul>
			</aside><!-- ends sidebar -->
		
		</div><!-- ends row -->
		
	</div><!-- ends container -->

	</section>
<?php $this->load->view('developer_footer'); ?>