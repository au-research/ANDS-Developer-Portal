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
					<li class="active">Vocab Widget</li>
				</ol>
			</div>
		</div><!-- ends row -->
	</div><!-- ends container -->
</section>
<section id="k-content"><!-- starts content -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->

			<div id="k-main" class="clearfix col-lg-8 col-md-8 col-sm-12"><!-- starts main content -->
				<article><!-- starts article short -->
					

					<h2 class="k-fancy-title">What is this widget?</h2>
					<p>The ANDS Location Capture Widget allows you to instantly enrich your data capture system, adding geospatial capabilities such as custom drawings and place name resolution (using the Australian Gazetteer Service and Google Maps API).</p>
	
					<h2 class="k-fancy-title">How does it work?</h2>
					<p>Simply drop the following lines of HTML into your web form. You only need to specify the name of the form field and the widget will do the rest!</p>
					 <em>Step 1.</em> Drop this code somewhere in the &lt;head&gt;&lt;/head&gt; of your web page
					 <pre class="prettyprint">
&lt;script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false&libraries=drawing&v=3"&gt;&lt;/script&gt;
&lt;script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="<?php echo apps_url('assets/location_capture_widget/js/location_capture_widget.js');?>"&gt;&lt;/script&gt;
&lt;link rel="stylesheet" type="text/css" href="<?php echo apps_url('assets/location_capture_widget/css/location_capture_widget.css');?>" /&gt;
					</pre>

					<em>Step 2.</em> Invoke the plugin using this code towards the bottom of the page. This example invokes the plugin on an HTML element with id <code>mapContainer</code>, and stores the final coordinate data in the HTML element with id <code>coordinates</code>:
					<pre class="prettyprint">
&lt;script type="text/javascript"&gt;
  $(document).ready(function() {
	$("#mapContainer").ands_location_widget({target:'coordinates'});
  });
&lt;/script&gt;
					</pre>

					 <p><em>Step 3.</em> Load the web page and see the new widget appear! 
					 <br/>Once submitted, the coordinates of the location selected will be in the form value you chose for <code>target</code></p>

					<h2 class="k-fancy-title">Demo</h2>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#loc_w-1-result" data-toggle="tab">Result</a></li>
						<li><a href="#loc_w-1-html" data-toggle="tab">HTML</a></li>
						<li><a href="#loc_w-1-js" data-toggle="tab">JS</a></li>
					</ul>
					<div class="tab-content">
						<div id="loc_w-1-result" class="tab-pane fade active in">
							<div id="mapContainer"></div>
						</div>
						<div id="loc_w-1-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;div id=&quot;mapContainer&quot;&gt;&lt;/div&gt;
							</pre>
						</div>
						<div id="loc_w-1-js" class="tab-pane fade">
							<pre class="prettyprint">
$("#mapContainer").ands_location_widget({
	lonLat:"141.064453,-19.973349 138.251953,-24.527135 142.031250,-24.527135 146.250000,-22.512557 141.064453,-19.973349"
});
							</pre>
						</div>
					</div>

					<!-- starts FAQ wrap -->
					<h2 class="k-fancy-title">FAQs</h2>
					<div class="k-faq-wrap col-lg-12">
						<div id="accordion" class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">
										<a href="#faq1" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed">
											I'm getting an "insecure content" warning? Can the widget run under HTTPS?
										</a>
									</h3>
								</div>
								<div class="panel-collapse collapse" id="faq1">
									<div class="panel-body">
										<p>
										<i class="k-faq-icon icon-share-alt awesome16"></i>
										Yes! Ensure that all the <code>&lt;script&gt;</code> and <code>&lt;link&gt;</code> tags (from Step 1 &amp; 2) are pointing to the securely-hosted version of the resource.
			    	 	In other words, the URL starts with <b>https://</b> (such as <code>https://maps.google.com/api...</code>).
										</p>
									</div>
								</div>
							</div>

							<div class="panel panel-default"><!-- panel one -->
								<div class="panel-heading">
									<h3 class="panel-title">
										<a href="#faq2" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed">
											What service is doing the placename resolution?
										</a>
									</h3>
								</div>
								<div class="panel-collapse collapse" id="faq2">
									<div class="panel-body">
										<p>
										<i class="k-faq-icon icon-share-alt awesome16"></i>
										ANDS hosts a resolver proxy service that provides JSONP results based on the response from the Gazetteer service.
			    	 	An example of this script is included in the source code package. You can customise this proxy service yourself
			    	 	and change the location by passing <code>endpoint</code> (and optionally, <code>protocol</code>) options to the widget's <code>init</code> function.
										</p>
									</div>
								</div>
							</div>

							<div class="panel panel-default"><!-- panel one -->
								<div class="panel-heading">
									<h3 class="panel-title">
										<a href="#faq3" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed">
											How can I customise the widget / not use the ANDS-hosted resources? 
										</a>
									</h3>
								</div>
								<div class="panel-collapse collapse" id="faq3">
									<div class="panel-body">
										<p>
										<i class="k-faq-icon icon-share-alt awesome16"></i>
										Full source code for this widget is available and licensed under Apache License, Version 2.0.
										</p>
									</div>
								</div>
							</div>
						</div><!-- ends panel group -->
					
					</div>

					
				</article><!-- ends article short -->
			</div><!-- ends main content -->
			
			<aside id="k-sidebar" class="col-lg-3 col-md-4 col-sm-12 col-lg-offset-1"><!-- starts sidebar -->
				<div id="k-sidebar-splitter" class="clearfix section-space60"><span></span></div>
				<ul id="k-sidebar-list" class="list-unstyled">
					
					<li class="widget clearfix">
						<div class="alert alert-info">
							<b>Developer Zone</b>
							<p>Some basic web development knowledge may be needed to implement this widget</p>
						</div>
					</li>
					<div class="sticky">
					<li class="widget widget_categories clearfix">
						<h2 class="widget-title">Demo and Download<span class="k-widget-title-tit"></span></h2>
						<ul class="list-unstyled">
							<li class="cat-item"><?php echo anchor(apps_url('assets/location_capture_widget/dist/demo.html'), 'Demo', array('class'=>'btn btn-large btn-success')) ?></li>
							<li class="cat-item"><?php echo anchor(apps_url('location_capture_widget/download/minified'), '<i class="icon-white icon-download"></i> Download minified', array('class'=>'btn btn-large btn-success')) ?></li>
							<li class="cat-item"><?php echo anchor(apps_url('location_capture_widget/download/'), '<i class="icon-white icon-download"></i> Download uncompressed', array('class'=>'btn btn-large btn-success')) ?></li>
							<li class="cat-item"><?php echo anchor(apps_url('location_capture_widget/download/full'), '<i class="icon-white icon-download"></i> Download (full)', array('class'=>'btn btn-large btn-success')) ?></li>
						</ul>
					</li>

					<li class="widget clearfix">
						<h2 class="widget-title">License</h2>
						<p>Apache License, Version 2.0: <a href="http://www.apache.org/licenses/LICENSE-2.0">http://www.apache.org/licenses/LICENSE-2.0</a></p>
					</li>
					</div>
				
				</ul>
			</aside><!-- ends sidebar -->
		
		</div><!-- ends row -->
		
	</div><!-- ends container -->

	</section>
<?php $this->load->view('developer_footer'); ?>