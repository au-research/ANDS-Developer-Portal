<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">Grant Lookup Widget</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ol class="breadcrumb pull-right">
					<li><?php echo anchor('/', 'Home'); ?></li>
					<li><?php echo anchor('/documentation/widgets/', 'Widgets'); ?></li>
					<li class="active">Grant Widget</li>
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
                        The ANDS Grant Widget allows you to verify a research grant ID against the grant information supplied by research funders to ANDS, or alternatively to search for a grant using keywords in the following fields - Title, Lead Institution, Investigrators, Principal Investigator, Description.
					</p>
					<p>
						This widget is powered by the <a href="http://researchdata.ands.org.au/" target="_blank">ANDS Grant  API</a> and requires jQuery to function.
					</p>
					<p><br/></p>

					<h2 class="k-fancy-title">How to use this widget</h2>
					<p>
						Put the following code snippet into your HTML document between the <code>&lt;head&gt;</code> tags.
						 <pre class="prettyprint pre-scrollable">
&lt;script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js'&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="<?php echo apps_url('assets/grant_widget/css/grant_widget.js');?>"&gt;&lt;/script&gt;
&lt;link rel="stylesheet" type="text/css" href="<?php echo apps_url('assets/grant_widget/css/grant_widget.css');?>" /&gt;
                </pre>
					And you're done! Just 3 lines of code! Any input fields on your page which have the class <code>grant_widget</code> will be transformed into a fully-functional Grant id lookup tool.
					</p>
					<p><br/></p>
					<h2 class="k-fancy-title">Demo</h2>
					<h2 class="widget-title">Default Settings</h2>
					<p>This example shows how to embed a Researcher Lookup tool into your webpage. <br/>
						<ul><li>if you don't know your Grant id, click <blue>Search</blue> to search for your Grant id profile</li>
						<li>if you already know your Grant id, put it into the text field and click <blue>Lookup</blue> instead</li></ul>
					</p>
					<p>&nbsp;</p>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#grant_w-1-result" data-toggle="tab">Result</a></li>
						<li><a href="#grant_w-1-html" data-toggle="tab">HTML</a></li>

					</ul>
					<div class="tab-content">
						<div id="grant_w-1-result" class="tab-pane fade active in">
							<input type="text" name="name" value="" size="40" class="grant_widget"/>
						</div>
						<div id="grant_w-1-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;input type="text" class="grant_widget"/&gt;
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
						<li>a default value for the Grant id has been set in the <code>HTML</code> tab (and this is displayed when the page loads)</li></ul>
					</p>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#grant_w-2-result" data-toggle="tab">Result</a></li>
						<li><a href="#grant_w-2-html" data-toggle="tab">HTML</a></li>
						<li><a href="#grant_w-2-js" data-toggle="tab">JS</a></li>
					</ul>
					<div class="tab-content">
						<div id="grant_w-2-result" class="tab-pane fade active in">
							<input type="text" name="name" id="custom_settings_grant" value="1031221" size="40" class=""/>
						</div>
						<div id="grant_w-2-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;input type="text" name="name" id="custom_settings_grant" value="1031221" size="40" class=""/&gt;
							</pre>
						</div>
						<div id="grant_w-2-js" class="tab-pane fade">
							<pre class="prettyprint">
$('#custom_settings_grant').grant_widget({
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
						<li>Set styling of the grant information div</li>
						</ul>
						Note: You will need to add the supplied classes to your style sheet to apply formatting.
					</p>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#grant_w-3-result" data-toggle="tab">Result</a></li>
						<li><a href="#grant_w-3-html" data-toggle="tab">HTML</a></li>
						<li><a href="#grant_w-3-js" data-toggle="tab">JS</a></li>
					</ul>
					<div class="tab-content">
						<div id="grant_w-3-result" class="tab-pane fade active in">
							<input type="text" name="name" id="format_display_settings_grant" size="40" class=""/>
						</div>
						<div id="grant_w-3-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;input type="text" name="name" id="format_display_settings_grant" size="40" class=""/&gt;
							</pre>
						</div>
						<div id="grant_w-3-js" class="tab-pane fade">
							<pre class="prettyprint">
$('#format_display_settings_grant').grant_widget({
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
                        <li>Over write default funder list to search against</li>
                        <li>Over write default search fields to search against</li>
						</ul>
						Note: This tooltip feature requires the qtip jquery plugin to be installed to display correctly.
					</p>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#grant_w-4-result" data-toggle="tab">Result</a></li>
						<li><a href="#grant_w-4-html" data-toggle="tab">HTML</a></li>
						<li><a href="#grant_w-4-js" data-toggle="tab">JS</a></li>
					</ul>
					<div class="tab-content">
						<div id="grant_w-4-result" class="tab-pane fade active in">
							<input type="text" name="name" id="tooltip_settings_grant" size="40" class=""/>
						</div>
						<div id="grant_w-4-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;input type="text" name="name" id="tooltip_settings_grant" size="40" class=""/&gt;
							</pre>
						</div>
						<div id="grant_w-4-js" class="tab-pane fade">
							<pre class="prettyprint">
$('#tooltip_settings_grant').grant_widget({
	before_html: 'Enter Here: ',
	tooltip:true,
    funder_lists: true,
    funders: '{"funder_list":["Australian Research Council","National Health and Medical Research Council"]}',
    search_fields: '{"search_fields":["title","person","institution","description","id"]}'
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
							<li class="cat-item"><?php echo anchor(apps_url('grant_widget/download/'), '<i class="icon-white icon-download"></i> Download widget sourcecode', array('class'=>'btn btn-large btn-success')) ?></li>
							<li class="cat-item"><?php echo anchor(apps_url('grant_widget/download/minified'), '<i class="icon-white icon-download"></i> Download minified widget', array('class'=>'btn btn-large btn-success')) ?></li>
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
						You can initialise the plugin by simply adding a class of <code>grant_widget</code> to an input element
						 (<?php echo anchor(apps_url('assets/grant_widget/dist/demo.html'), 'demo') ?>):
						<pre class="prettyprint pre-small">&lt;input type="text" class="grant_widget"&gt;</pre>
					</p>


					<p>You can also manually trigger the plugin with Javascript:</p>
					<pre class="prettyprint pre-small">$('input').grant_widget();</pre>
					<p>In this mode, you can pass the <code>grant_wiget()</code> function any of the following configuration parameters:</p>


<?php
    $config = array(
    array('search_endpoint', 'http://researchdata.ands.org.au/registry/services/api/getGrants/', 'JSONP search API for Grants'),
    array('lookup_endpoint','http://researchdata.ands.org.au/registry/services/api/getGrants/?id=','JSONP API for Grants Lookup service'),
    array('pre_lookup', 'false','Automatically Do a lookup on the current value of the input field'),
    array('search','true', 'Display Search Button, enable searching functionality'),
    array('pre_open_search','false','Open Search Box by default'),
    array('search_text','&lt;i class="icon-search"&gt;&lt;/i&gt; Search','Text to display on the open search box button'),
    array('search_class','grant_search btn btn-small','CSS class to apply on the open search box button'),
    array('lookup','true','Display the Lookup button, enable Lookup functionality'),
    array('lookup_text', 'Look up','Text for the lookup button'),
    array('lookup_class', 'grant_lookup btn btn-small','Lookup button CSS class'),
    array('before_html:' ,'&lt;span class="grant_before_html"&gt;grant title &lt;/span&gt;', 'Text to display before the input field'),
    array('wrap_html', '&lt;div class="grant_wrapper"&gt;&lt;/div&gt;', 'The wrapping HTML to cover the input fields'),
    array('result_success_class', 'grant_success_div', 'CSS class for the div displaying successful lookup'),
    array('result_error_class', 'grant_error_div', 'CSS class for the div displaying error lookup'),
    array('search_div_class', 'grant_search_div', 'CSS class for the searching div'),
    array('nohits_msg', '&lt;p&gt;No matches found &lt;p&gt;','Message to display when no result or an error returns'),
    array('query_text', 'Search Query:', 'Text displaying before the search query'),
    array('search_text_btn', 'Search', 'Text display for the search button'),
    array('close_search_text_btn', '[x]','Text display for the closing search div button'),
    array('lookup_error_handler', 'false', 'overwrite function for error lookup <code>function(xhr, message)</code>'),
    array('lookup_success_handler', 'false', 'overwrite function when a successful lookup returns <code>function(data, obj, settings)</code>'),
    array('lookup_success_hook', 'false', 'a function hook after a successful lookup returns <code>function()</code>'),
    array('auto_close_search', 'false', 'boolean, To automatically close the search box after a value is selected'),
    array('funder_lists', 'false', 'boolean, To allow for user provided lists of funders to search against'),
    array('funders','', 'json string providing list of funders in the funding_list element eg. funders: &#39;{"funder_list":["Australian Research Council","National Health and Medical Research Council"]}&#39;'),
    array('search_fields','', 'json string providing list of searchable fields of the api &#39;{"search_fields":["title","person","institution","description","id"]} &#39;')
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