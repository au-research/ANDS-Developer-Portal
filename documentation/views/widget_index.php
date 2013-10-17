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
<section id="k-content" class="section-space60"><!-- section common starts -->
		
	<div class="container"><!-- starts container -->

		<div class="row k-equal-height"><!-- starts row -->
		
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<dl class="k-dl-list">
					<dt class="k-dt">
						<i class="icon-code awesome32"></i>
					</dt>
					<dd class="k-dd60">
						<h3 class="first-item">Registry Widget</h3>
						<p>
						The Registry Search Widget provides a quick and easy way of embedding a live Research Data Australia search within your new or existing web pages.

The flexibility of the widget allows you to configure a predefined search, or provide your end users with a text field to specify their own search.
						</p>
					</dd>
					
					<dt class="k-dt">
						<i class="icon-code awesome32"></i>
					</dt>
					<dd class="k-dd60">
						<h3 class="first-item">ORCID Researcher Lookup Widget</h3>
						<p>
						The ANDS ORCID Widget allows you to lookup an ORCID ID and search for one using ORCID JSONP API

This widget is a jQuery plugin with extensible options over styling and functionality. Hence the widget is dependent on the jQuery plugin to function correctly.
						</p>
					</dd>
				</dl>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<dl class="k-dl-list">
						<dt class="k-dt">
							<i class="icon-code awesome32"></i>
						</dt>
						<dd class="k-dd60">
							<h3 class="first-item">Vocabulary Widget</h3>
							<p>
							The ANDS Vocabulary Widget allows you to instantly add Data Classification capabilities to your data capture tools through the ANDS Vocabulary Service.
							</p>
						</dd>
						
						<dt class="k-dt">
							<i class="icon-code awesome32"></i>
						</dt>
						<dd class="k-dd60">
							<h3 class="first-item">Location Capture Widget</h3>
							<p>
							The ANDS Location Capture Widget allows you to instantly enrich your data capture system, adding geospatial capabilities such as custom drawings and place name resolution (using the Australian Gazetteer Service and Google Maps API).
							</p>
						</dd>
					</dl>
			</div>
			
		</div><!-- ends row -->
	</div><!-- ends container -->
</section>
<?php $this->load->view('developer_footer'); ?>