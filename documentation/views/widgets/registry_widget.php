<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">Collections Registry Search Widget</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ol class="breadcrumb pull-right">
					<li><?php echo anchor('/', 'Home'); ?></li>
					<li><?php echo anchor('/documentation/widgets/', 'Widgets'); ?></li>
					<li class="active">Collections Registry Search Widget</li>
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
					<p>The Registry Search Widget provides a quick and easy way of embedding a live Research Data Australia search or record display within your new or existing web pages.  </p>
					<p>The flexibility of the widget allows you to configure a predefined search, or provide your end users with a text field to specify their own search.  </p>
					<p>Some use cases for the Registry Object Search Widget include:</p>
					<ul class="k-work-features-list"><!-- features -->
						<li><span class="k-work-feature-value">Showcase the most recent collections contributed to Research Data Australia by institution or researcher name</span></li>
						<li><span class="k-work-feature-value">Implement a lookup function in your data capture forms/processes to search for keys or global identifiers</span></li>
						<li><span class="k-work-feature-value">Supplement your site's search results with search results from Research Data Australia</span></li>
						<li><span class="k-work-feature-value">Provide your users with a listing of data collections related to a specific subject</span></li>
					</ul>

					<h2 class="k-fancy-title">How to use this widget?</h2>
					<p>The widget requires jQuery; load this, and the plugin itself (and associated CSS styles) in your document's <code>&lt;head&gt;&lt;/head&gt;</code> segment:</p>
					<pre class="prettyprint pre-scrollable" style="min-height:5em">
&lt;script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js'&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="<?php echo apps_url('assets/registry_widget/js/registry_widget.js');?>"&gt;&lt;/script&gt;
&lt;link rel="stylesheet" type="text/css" href="<?php echo apps_url('assets/registry_widget/css/registry_widget.css');?>" /&gt;
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

					<h2 class="widget-title">Custom Search Result Display Example</h2>
					<p>This result example displays the last 5 collections added by Australian Ocean Data Network</p>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#registry_w-4-result" data-toggle="tab">Result</a></li>
						<li><a href="#registry_w-4-html" data-toggle="tab">HTML</a></li>
					</ul>
					<div class="tab-content">
						<div id="registry_w-4-result" class="tab-pane fade active in">
							<div id="search_display" data-query="q=+group:(%22Australian Ocean Data Network%22)+class:collection&rows=5&sort=update_timestamp desc" data-mode="display_result" class="registry_widget"></div>
						</div>
						<div id="registry_w-4-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;div data-query="q=group:(%22Australian Ocean Data Network%22)&rows=5&sort=update_timestamp desc" data-mode="display_result" class="registry_widget"&gt;&lt;/div&gt;
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
						<li class="active"><a href="#registry_w-5-result" data-toggle="tab">Result</a></li>
						<li><a href="#registry_w-5-html" data-toggle="tab">HTML</a></li>
						<li><a href="#registry_w-5-js" data-toggle="tab">JS</a></li>
					</ul>
					<div class="tab-content">
						<div id="registry_w-5-result" class="tab-pane fade active in">
							<input type="text" value="fish" id="advanced_search_example">
						</div>
						<div id="registry_w-5-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;input type="text" value="fish" id="advanced_search_example"&gt;
							</pre>
						</div>
						<div id="registry_w-5-js" class="tab-pane fade">
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
						<h2 class="widget-title">Demo and Download</h2>
						<ul class="list-unstyled">
							<li class="cat-item"><?php echo anchor(apps_url('assets/registry_widget/dist/demo.html'), 'Demo', array('class'=>'btn btn-large btn-success')) ?></li>
							<li class="cat-item"><?php echo anchor(apps_url('registry_widget/download/minified'), '<i class="icon-white icon-download"></i> Download minified', array('class'=>'btn btn-large btn-success')) ?></li>
							<li class="cat-item"><?php echo anchor(apps_url('registry_widget/download/'), '<i class="icon-white icon-download"></i> Download uncompressed', array('class'=>'btn btn-large btn-success')) ?></li>
							<li class="cat-item"><?php echo anchor(apps_url('registry_widget/download/full'), '<i class="icon-white icon-download"></i> Download (full)', array('class'=>'btn btn-large btn-success')) ?></li>
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

		<div class="row">
		<div id="k-config" class="clearfix col-lg-12 col-md-12 col-sm-12">
			<article>
				
					<h2 class="k-fancy-title">Configurations</h2>
	<?php 
		$config = array(
			array('proxy', 'http://researchdata.ands.org.au/apps/registry_widget/proxy/', 'JSONP proxy for the Registry Widget'),
			array('mode', 'search', 'mode can be <code>search</code>,<code>display_single</code>, <code>display_result]</code>'),
			array('search','true', 'Enable Search Functionality'),
			array('auto_search', 'false', 'Auto Search based on the target\'s value'),
			array('search_btn_text', 'Search', 'Search text displays on the button'),
			array('search_btn_class', 'rowidget_search btn btn-small btn-default', 'CSS Classes apply on the search button'),
			array('search_callback', 'false', 'Overwrite function for search result <code>function(data, obj, settings)</code>'),
			array('lookup','true', 'Enable Resolve/Lookup functionality'),
			array('auto_lookup','false', 'Enable Auto lookup based on the target\'s value'),
			array('lookup_btn_text','Resolve', 'Lookup text displays on the button'),
			array('lookup_btn_class', 'rowidget_lookup btn btn-small btn-default', 'CSS Classes apply on the lookup button'),
			array('lookup_callback', 'false', 'Overwrite function for lookup result <code>function(data, obj, settings)</code>'),
			array('result_template', htmlentities('<ul class="rowidget_results">{{#docs}}<li><a href="javascript:;" data-key="{{key}}" data-slug="{{slug}}" data-id="{{id}}">{{list_title}}</a></li>{{/docs}}</ul>'), 'Mustache/Handlebar-like template for the search result list'),
			array('single_template', htmlentities('<div class="rowidget_single"><h4><a href="{{rda_link}}" target="_blank">{{title}}</a></h4><span class="text-muted">{{group}}</span><div class="description">{{description}}</div></div>'), 'Mustache/Handlebar-like template for the single display of a registry object'),
			array('return_type','key', 'Return a <code>key</code>, <code>slug</code>, <code>title</code> or <code>id</code> to the target value'),
	
		);
	?>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<td>Property</td><td>Defaults</td><td>Description</td>
						</thead>
						<tbody>
							<?php foreach($config as $c): ?>
							<tr>
								<td><code><?php echo $c[0] ?></code></td>
								<td><code><?php echo $c[1] ?></code></td>
								<td><?php echo $c[2] ?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>	
			</article>
		</div>
		</div>
		
	</div><!-- ends container -->

	</section>
<?php $this->load->view('developer_footer'); ?>