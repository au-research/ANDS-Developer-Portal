<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">ORCID Researcher Lookup Widget</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ol class="breadcrumb pull-right">
					<li><?php echo anchor('/', 'Home'); ?></li>
					<li><?php echo anchor('/documentation/widgets/', 'Widgets'); ?></li>
					<li class="active">ORCID Widget</li>
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
					<p>
						The ANDS ORCID Widget allows you to enhance your web form to include the ability to lookup and search for an ORCID ID.
					</p>
					<p>
						This widget is powered by the <a href="http://support.orcid.org/knowledgebase/articles/116874-orcid-api-guide" target="_blank">ORCID JSONP API</a> and requires jQuery to function.
					</p>
					<p><br/></p>

					<h2 class="k-fancy-title">How to use this widget</h2>
					<p>
						Put the following code snippet into your HTML document between the <code>&lt;head&gt;</code> tags.
						<pre class="prettyprint pre-scrollable pre-small">
&lt;script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="<?=remove_scheme(apps_url('assets/orcid_widget/js/orcid_widget.js'));?>"&gt;&lt;/script&gt;
&lt;link rel="stylesheet" type="text/css" href="<?=remove_scheme(apps_url('assets/orcid_widget/css/orcid_widget.css'));?>" /&gt;</pre>
					And you're done! Just 3 lines of code! Any input fields on your page which have the class <code>orcid_widget</code> will be transformed into a fully-functional ORCID lookup tool.
					</p>
					<p><br/></p>
					<h2 class="k-fancy-title">Demo</h2>
					<h2 class="widget-title">Default Settings</h2>
					<p>This example shows how to embed a Researcher Lookup tool into your webpage. <br/>
						<ul><li>if you don't know your ORCID, click <blue>Search</blue> to search for your ORCID profile</li>
						<li>if you already know your ORCID, put it into the text field and click <blue>Lookup</blue> instead</li></ul>
					</p>
					<p>&nbsp;</p>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#orcid_w-1-result" data-toggle="tab">Result</a></li>
						<li><a href="#orcid_w-1-html" data-toggle="tab">HTML</a></li>

					</ul>
					<div class="tab-content">
						<div id="orcid_w-1-result" class="tab-pane fade active in">
							<input type="text" name="name" value="" size="40" class="orcid_widget"/>
						</div>
						<div id="orcid_w-1-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;input type="text" class="orcid_widget"/&gt;
							</pre>
						</div>
					</div>

					<p><hr/></p>
					<p><br/></p>

					<h2 class="widget-title">Custom Settings</h2>
					<h5> Example 1 </h5>
					<p>In this example, we initialise the widget using some custom settings:<br/>
						<ul><li>the labels on the page have been changed (see the <code>JS</code> tab)</li>
						<li>automatically display the search box when the widget loads</li>
						<li>a default value for the ORCID has been set in the <code>HTML</code> tab (and this is displayed when the page loads)</li></ul>
					</p>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#orcid_w-2-result" data-toggle="tab">Result</a></li>
						<li><a href="#orcid_w-2-html" data-toggle="tab">HTML</a></li>
						<li><a href="#orcid_w-2-js" data-toggle="tab">JS</a></li>
					</ul>
					<div class="tab-content">
						<div id="orcid_w-2-result" class="tab-pane fade active in">
							<input type="text" name="name" id="custom_settings_orcid" value="0000-0002-6440-7059" size="40" class=""/>
						</div>
						<div id="orcid_w-2-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;input type="text" name="name" id="custom_settings_orcid" value="0000-0002-6440-7059" size="40" class=""/&gt;
							</pre>
						</div>
						<div id="orcid_w-2-js" class="tab-pane fade">
							<pre class="prettyprint">
$('#custom_settings_orcid').orcid_widget({
	pre_lookup: true,
	pre_open_search:true,
	lookup_text: 'Custom Lookup',
	search_text: 'Custom Search',
	before_html: 'Enter Here: '
});
							</pre>
						</div>
					</div>
					<p><br/></p>
					<h5>Example 2</h5>
					<p>Another example where we initialise the widget using custom settings (see the <code>JS</code> tab):<br/>
						<ul><li>Set styling of the search form div</li>
						<li>Set styling of the orcid information div</li>
						</ul>
						Note: You will need to add the supplied classes to your style sheet to apply formatting.
					</p>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#orcid_w-3-result" data-toggle="tab">Result</a></li>
						<li><a href="#orcid_w-3-html" data-toggle="tab">HTML</a></li>
						<li><a href="#orcid_w-3-js" data-toggle="tab">JS</a></li>
					</ul>
					<div class="tab-content">
						<div id="orcid_w-3-result" class="tab-pane fade active in">
							<input type="text" name="name" id="format_display_settings_orcid" size="40" class=""/>
						</div>
						<div id="orcid_w-3-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;input type="text" name="name" id="format_display_settings_orcid" size="40" class=""/&gt;
							</pre>
						</div>
						<div id="orcid_w-3-js" class="tab-pane fade">
							<pre class="prettyprint">
$('#format_display_settings_orcid').orcid_widget({
	before_html: 'Enter Here: ',
	search_div_class: 'custom_search_div',
	info_box_class:'custom_info_box',
});
							</pre>
						</div>
					</div>
<p><br/></p>
					<h5>Example 3</h5>
					<p>Another example where we initialise the widget using custom settings (see the <code>JS</code> tab)<br/>
						<ul><li>Enable tooltip of full information on mouseover of the results list</li>
						</ul>
						Note: This feature requires the qtip jquery plugin to be installed to display correctly.
					</p>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#orcid_w-4-result" data-toggle="tab">Result</a></li>
						<li><a href="#orcid_w-4-html" data-toggle="tab">HTML</a></li>
						<li><a href="#orcid_w-4-js" data-toggle="tab">JS</a></li>
					</ul>
					<div class="tab-content">
						<div id="orcid_w-4-result" class="tab-pane fade active in">
							<input type="text" name="name" id="tooltip_settings_orcid" size="40" class=""/>
						</div>
						<div id="orcid_w-4-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;input type="text" name="name" id="tooltip_settings_orcid" size="40" class=""/&gt;
							</pre>
						</div>
						<div id="orcid_w-4-js" class="tab-pane fade">
							<pre class="prettyprint">
$('#tooltip_settings_orcid').orcid_widget({
	before_html: 'Enter Here: ',
	tooltip:true,
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
						<h2 class="widget-title">Software Download<span class="k-widget-title-tit"></span></h2>
						<ul class="list-unstyled">
							<li class="cat-item"><?php echo anchor(apps_url('orcid_widget/download/'), '<i class="icon-white icon-download"></i> Download widget sourcecode', array('class'=>'btn btn-large btn-success')) ?></li>
							<li class="cat-item"><?php echo anchor(apps_url('orcid_widget/download/minified'), '<i class="icon-white icon-download"></i> Download minified widget', array('class'=>'btn btn-large btn-success')) ?></li>
					</ul>
					</li>

					<li class="widget clearfix">
						<h2 class="widget-title">License</h2>
						<p> Apache License, Version 2.0: <a href="http://www.apache.org/licenses/LICENSE-2.0">http://www.apache.org/licenses/LICENSE-2.0</a> </p>
					</li>
					</div>
				</ul>
			</aside><!-- ends sidebar -->
		
		</div><!-- ends row -->

		<div class="row">
		<div id="k-config" class="clearfix col-lg-12 col-md-12 col-sm-12">
			<article>
				<p><br/></p>
				<h2 class="k-fancy-title">Configuration</h2>
					<p>
						You can initialise the plugin by simply adding a class of <code>orcid_widget</code> to an input element
						 (<?php echo anchor(apps_url('assets/orcid_widget/dist/demo.html'), 'demo') ?>):
						<pre class="prettyprint pre-small">&lt;input type="text" class="orcid_widget"&gt;</pre>
					</p>


					<p>You can also manually trigger the plugin with Javascript:</p>
					<pre class="prettyprint pre-small">$('input').orcid_widget();</pre>
					<p>In this mode, you can pass the <code>orcid_wiget()</code> function any of the following configuration parameters:</p>


<?php 
	$config = array(
		array('search_endpoint', 'http://pub.orcid.org/search/orcid-bio?q=', 'JSONP search API for ORCID'),
		array('lookup_endpoint','http://pub.orcid.org/','JSONP API for ORCID Lookup service'),
		array('pre_lookup', 'false','Automatically Do a lookup on the current value of the input field'),
		array('search','true', 'Display Search Button, enable searching functionality'),
		array('pre_open_search','false','Open Search Box by default'),
		array('search_text','&lt;i class="icon-search"&gt;&lt;/i&gt; Search','Text to display on the open search box button'),
		array('search_class','orcid_search btn btn-small','CSS class to apply on the open search box button'),
		array('lookup','true','Display the Lookup button, enable Lookup functionality'),
		array('lookup_text', 'Look up','Text for the lookup button'),
		array('lookup_class', 'orcid_lookup btn btn-small','Lookup button CSS class'),
		array('before_html:' ,'&lt;span class="orcid_before_html"&gt;http://orcid.org/&lt;/span&gt;', 'Text to display before the input field'),
		array('wrap_html', '&lt;div class="orcid_wrapper"&gt;&lt;/div&gt;', 'The wrapping HTML to cover the input fields'),
		array('result_success_class', 'orcid_success_div', 'CSS class for the div displaying successful lookup'),
		array('result_error_class', 'orcid_error_div', 'CSS class for the div displaying error lookup'),
		array('search_div_class', 'orcid_search_div', 'CSS class for the searching div'),
		array('nohits_msg', '&lt;p&gt;No matches found&lt;br/&gt;<br/>If you wish to register for an <br/>orcid please click <br/>&lt;a href="https://orcid.org/register" target="_blank"&gt;here&lt;/a&gt;&lt;/p&gt;','Message to display when no result or an error returns'),
		array('query_text', 'Search Query:', 'Text displaying before the search query'),
		array('search_text_btn', 'Search', 'Text display for the search button'),
		array('close_search_text_btn', '[x]','Text display for the closing search div button'),
		array('lookup_error_handler', 'false', 'overwrite function for error lookup <code>function(xhr, message)</code>'),
		array('lookup_success_handler', 'false', 'overwrite function when a successful lookup returns <code>function(data, obj, settings)</code>'),
		array('post_lookup_success_handler', 'false', 'a function hook after a successful lookup returns <code>function(data, obj, settings)</code>'),
		array('auto_close_search', 'false', 'boolean, To automatically close the search box after a value is selected'),
		array('tooltip','false','boolean To enable tooltip on mouseover of result list to display details. NOTE: jquery qtip module is required to use this feature'),
		array( 'info_box_class','info-box','Text to set a class to style the individual results'),
		array('search_div_class', 'orcid_search_div', 'Text to set a class to style the search form div' )
	);
?>
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<td>Property</td><td>Description</td><td>Default</td>
					</thead>
					<tbody>
						<?php foreach($config as $c): ?>
						<tr>
							<td><code><?php echo $c[0] ?></code></td>
							<td><?php echo $c[2] ?></td>
							<td><code><?php echo $c[1] ?></code></td>
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