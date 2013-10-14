<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">Registry Widget</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ol class="breadcrumb pull-right">
					<li><?php echo anchor('/', 'Home'); ?></li>
					<li><?php echo anchor('/documentation/widgets/', 'Widgets'); ?></li>
					<li class="active"><?php echo anchor('/documentation/widgets/registry_widget', 'Registry Widget'); ?></li>
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

					<h2 class="widget-title">Search Result Display Example</h2>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#orcid-3-result" data-toggle="tab">Result</a></li>
						<li><a href="#orcid-3-html" data-toggle="tab">HTML</a></li>
					</ul>
					<div class="tab-content">
						<div id="orcid-3-result" class="tab-pane fade active in">
							<div id="search_display" data-query="q=fulltext:fish&rows=5" data-mode="display_result" class="registry_widget"></div>
						</div>
						<div id="orcid-3-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;div id="search_display" data-query="q=fulltext:fish&rows=5" data-mode="display_result" class="registry_widget"&gt;&lt;/div&gt;
							</pre>
						</div>
					</div>

					<h2 class="widget-title">Single Display Example</h2>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#orcid-2-result" data-toggle="tab">Result</a></li>
						<li><a href="#orcid-2-html" data-toggle="tab">HTML</a></li>
					</ul>
					<div class="tab-content">
						<div id="orcid-2-result" class="tab-pane fade active in">
							<div id="single_display" data-query="AODN:93f4e867-0bac-45fa-acca-2881680627f7" data-mode="display_single" class="registry_widget"></div>
						</div>
						<div id="orcid-2-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;div id="single_display" data-query="AODN:93f4e867-0bac-45fa-acca-2881680627f7" data-mode="display_single" class="registry_widget"&gt;&lt;/div&gt;
							</pre>
						</div>
					</div>
				
					<h2 class="widget-title">Simple Search Example</h2>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#orcid-1-result" data-toggle="tab">Result</a></li>
						<li><a href="#orcid-1-html" data-toggle="tab">HTML</a></li>
					</ul>
					<div class="tab-content">
						<div id="orcid-1-result" class="tab-pane fade active in">
							<input type="text" class="registry_widget" value="fish">
						</div>
						<div id="orcid-1-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;input type="text" class="registry_widget" value="fish"&gt;
							</pre>
						</div>
					</div>

					

					
					
					<h2>License</h2>
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