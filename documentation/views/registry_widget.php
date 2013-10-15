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

					<h3 class="k-fancy-title">What is this widget?</h3>
					<p>The Registry Search Widget provides a quick and easy way of embedding a live Research Data Australia search within your new or existing web pages.  </p>
					<p>The flexibility of the widget allows you to configure a predefined search, or provide your end users with a text field to specify their own search.  </p>
					<p>Some use cases for the widget include:</p>
					<ul class="k-work-features-list"><!-- features -->
						<li><span class="k-work-feature-value">Predefining a search which promotes the last 5 collections published to Research Data Australia by your institution.</span></li>
						<li><span class="k-work-feature-value">Supplementing your sites search results with search results from Research Data Australia.</span></li>
						<li><span class="k-work-feature-value">Providing users with a listing of data collections related to a specific subject.</span></li>
					</ul>

					<h3 class="k-fancy-title">How to use this widget?</h3>
					<p>The widget requires jQuery; load this, and the plugin itself (and associated CSS styles) in your document's <code>&lt;head&gt;&lt;/head&gt;</code> segment:</p>
					<pre class="prettyprint pre-scrollable" style="min-height:5em">
&lt;script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js'&gt;&lt;/script&gt;
&lt;script type="text/javascript" src=""&gt;&lt;/script&gt;
&lt;link rel="stylesheet" type="text/css" href="" /&gt;
					</pre>

					<h2 class="k-fancy-title">Demo</h2>

					<h2 class="widget-title">Search Result Display Example</h2>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#registry_w-3-result" data-toggle="tab">Result</a></li>
						<li><a href="#registry_w-3-html" data-toggle="tab">HTML</a></li>
					</ul>
					<div class="tab-content">
						<div id="registry_w-3-result" class="tab-pane fade active in">
							<div id="search_display" data-query="q=fulltext:fish&rows=5" data-mode="display_result" class="registry_widget"></div>
						</div>
						<div id="registry_w-3-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;div data-query="q=fulltext:fish&rows=5" data-mode="display_result" class="registry_widget"&gt;&lt;/div&gt;
							</pre>
						</div>
					</div>

					<h2 class="widget-title">Single Display Example</h2>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#registry_w-2-result" data-toggle="tab">Result</a></li>
						<li><a href="#registry_w-2-html" data-toggle="tab">HTML</a></li>
					</ul>
					<div class="tab-content">
						<div id="registry_w-2-result" class="tab-pane fade active in">
							<div id="single_display" data-query="AODN:93f4e867-0bac-45fa-acca-2881680627f7" data-mode="display_single" class="registry_widget"></div>
						</div>
						<div id="registry_w-2-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;div data-query="AODN:93f4e867-0bac-45fa-acca-2881680627f7" data-mode="display_single" class="registry_widget"&gt;&lt;/div&gt;
							</pre>
						</div>
					</div>
				
					<h2 class="widget-title">Simple Search Example</h2>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#registry_w-1-result" data-toggle="tab">Result</a></li>
						<li><a href="#registry_w-1-html" data-toggle="tab">HTML</a></li>
					</ul>
					<div class="tab-content">
						<div id="registry_w-1-result" class="tab-pane fade active in">
							<input type="text" class="registry_widget" value="fish">
						</div>
						<div id="registry_w-1-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;input type="text" class="registry_widget" value="fish"&gt;
							</pre>
						</div>
					</div>

					<h2 class="widget-title">Advanced Search Example</h2>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#registry_w-4-result" data-toggle="tab">Result</a></li>
						<li><a href="#registry_w-4-html" data-toggle="tab">HTML</a></li>
						<li><a href="#registry_w-4-js" data-toggle="tab">JS</a></li>
					</ul>
					<div class="tab-content">
						<div id="registry_w-4-result" class="tab-pane fade active in">
							<input type="text" value="fish" id="advanced_search_example">
						</div>
						<div id="registry_w-4-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;input type="text" value="fish" id="advanced_search_example"&gt;
							</pre>
						</div>
						<div id="registry_w-4-js" class="tab-pane fade">
							<pre class="prettyprint">
$('#advanced_search_example').registry_widget({
	mode: 'search',
	lookup:false,
	auto_search:true,
	search_btn_text: '&lt;i class="icon icon-search">&lt;/i&gt; Search',
	result_template: '&lt;div id="accordion" class="panel-group rowidget_results"&gt; {{#docs}} &lt;div class="panel panel-default"&gt; &lt;div class="panel-heading"&gt; &lt;h4 class="panel-title"&gt; &lt;a href="#{{slug}}" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed"&gt; {{list_title}} &lt;/a&gt; &lt;/h4&gt; &lt;/div&gt; &lt;div class="panel-collapse collapse" id="{{slug}}"&gt; &lt;div class="panel-body"&gt; {{description}} &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; {{/docs}} &lt;/div&gt;', 
});
							</pre>
						</div>
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
						<h2 class="widget-title">Download<span class="k-widget-title-tit"></span></h2>
						<ul class="list-unstyled">
							<li class="cat-item"><?php echo anchor(apps_url('registry_widget/download/'), '<i class="icon-white icon-download"></i> Download minified', array('class'=>'btn btn-large btn-success')) ?></li>
							<li class="cat-item"><?php echo anchor(apps_url('registry_widget/download/'), '<i class="icon-white icon-download"></i> Download uncompressed', array('class'=>'btn btn-large btn-success')) ?></li>
						</ul>
					</li>

					<li class="widget clearfix">
						<h2 class="widget-title">License<span class="k-widget-title-tit"></span></h2>
						<p>Apache License, Version 2.0: <a href="http://www.apache.org/licenses/LICENSE-2.0">http://www.apache.org/licenses/LICENSE-2.0</a></p>
					</li>
					</div>
				
				</ul>
			</aside><!-- ends sidebar -->
		
		</div><!-- ends row -->
		
	</div><!-- ends container -->

	</section>
<?php $this->load->view('developer_footer'); ?>