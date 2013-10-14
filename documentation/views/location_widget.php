<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">Location Capture Widget</h2>
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
					<p>The ANDS Location Capture Widget allows you to instantly enrich your data capture system, adding geospatial capabilities such as custom drawings and place name resolution (using the Australian Gazetteer Service and Google Maps API).</p>
		 
					<div class="k-fancy-title-wrap"><span class="k-fancy-title-tit"></span><h3 class="k-fancy-title">How does it work?</h3></div>
					<p>Simply drop the following lines of HTML into your web form. You only need to specify the name of the form field and the widget will do the rest!</p>
			    	 <em>Step 1.</em> Drop this code somewhere in the &lt;head&gt;&lt;/head&gt; of your web page
			    	 <pre class="prettyprint">
&lt;script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=drawing&v=3"&gt;&lt;/script&gt;
&lt;script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.js'&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="http://services.ands.org.au/api/resolver/location_capture_widget.js"&gt;&lt;/script&gt;
&lt;link rel="stylesheet" type="text/css" href="http://services.ands.org.au/api/resolver/location_capture_widget.css" /&gt;
					</pre>

					<em>Step 2.</em> Invoke the plugin using this code towards the bottom of the page. This example invokes the plugin on an HTML element with id <code>mapContainer</code>, and stores the final coordinate data in the HTML element with id <code>coordinates</code>:
					<pre class="prettyprint">
&lt;script type="text/javascript"&gt;
  $(document).ready(function() {
    $("#mapContainer").ands_location_widget({target:'coordinates'});
  });
 					</pre>

			    	 <p><em>Step 3.</em> Load the web page and see the new widget appear! 
			    	 <br/>Once submitted, the coordinates of the location selected will be in the form value you chose for <code>target</code></p>

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