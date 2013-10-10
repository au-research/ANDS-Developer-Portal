<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">ORCID Widget</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ol class="breadcrumb pull-right">
					<li><?php echo anchor('/', 'Home'); ?></li>
					<li><?php echo anchor('/documentation/widgets/', 'Widgets'); ?></li>
					<li class="active"><?php echo anchor('/documentation/widgets/orcid_widget', 'ORCID Widget'); ?></li>
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

					<form action="" class="form-inline well">
						<h3 class="k-article-title">ORCID Widget</h3>
						<input type="text" name="name" value="" size="40" class="orcid_widget"/>
					</form>

					<h2>What is this widget?</h2>
					<p>
						The ANDS ORCID Widget allows you to lookup an ORCID ID and search for one using <a href="http://support.orcid.org/knowledgebase/articles/116874-orcid-api-guide" target="_blank">ORCID JSONP API</a>
					</p>
					<p>
						This widget is a jQuery plugin with extensible options over styling and functionality. Hence the widget is dependent on the jQuery plugin to function correctly.
					</p>
					<h2>How to use this widget</h2>
					<p>
						Put the following code snippet into your document's &lt;head&gt; segment
						<pre class="prettyprint pre-scrollable">
&lt;script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js'&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="<?php echo apps_url('assets/orcid_widget/css/orcid_widget.js');?> ?>"&gt;&lt;/script&gt;
&lt;link rel="stylesheet" type="text/css" href="<?php echo apps_url('assets/orcid_widget/css/orcid_widget.css');?> ?>" /&gt;
						</pre>
					</p>
					<p>
						You can init the plugin simply by
						<pre class="prettyprint">
&lt;input type="text" class="orcid_widget"&gt;
						</pre>
						the plugin will automatically binds to all element that has the class of <code>.orcid_widget</code>
					</p>


					<p>You can also manually trigger the plugin with</p>
					<pre class="prettyprint">
$('input').orcid_widget();
					</pre>

					<h2>Demo</h2>
					
					<form action="" class="form-inline">
						<h4>Default Settings</h4>
						<pre class="prettyprint">
&lt;input type="text" name="name" id="default_settings_orcid" value="" size="40" class=""/&gt;
						</pre>
						<pre class="prettyprint">
$('#default_settings_orcid').orcid_widget();
						</pre>
						<input type="text" name="name" id="default_settings_orcid" value="" size="40" class=""/>
					</form>
					<hr>
					<form action="" class="form-inline">
						<h4>Custom Settings</h4>
						<pre class="prettyprint">
&lt;input type="text" name="name" id="custom_settings_orcid" value="0000-0002-6440-7059" size="40" class=""/&gt;
						</pre>
						<pre class="prettyprint">
$('#custom_settings_orcid').orcid_widget({
	pre_lookup: true,
	pre_open_search:true,
	lookup_text: 'Custom Lookup',
	search_text: 'Custom Search',
	before_html: 'Enter Here: ',
	auto_close_search: true
});
						</pre>
						<input type="text" name="name" id="custom_settings_orcid" value="0000-0002-6440-7059" size="40" class=""/>
					</form>

					<h2>Configurations</h2>

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
				array('lookup_success_hook', 'false', 'a function hook after a successful lookup returns <code>function()</code>'),
				array('auto_close_search', 'false', 'boolean, To automatically close the search box after a value is selected')
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

					<h2>License</h2>
					<p>
						Apache License, Version 2.0: <a href="http://www.apache.org/licenses/LICENSE-2.0">http://www.apache.org/licenses/LICENSE-2.0</a>
					</p>
					</article><!-- ends article short -->
			</div><!-- ends main content -->
			
			<aside id="k-sidebar" class="col-lg-3 col-md-4 col-sm-12 col-lg-offset-1"><!-- starts sidebar -->
				<div id="k-sidebar-splitter" class="clearfix section-space60"><span></span></div>
				<ul id="k-sidebar-list" class="list-unstyled">
					
					<li class="widget widget_categories clearfix">
						<h2 class="widget-title">Demo and Download<span class="k-widget-title-tit"></span></h2>
						<ul class="list-unstyled">
							<li class="cat-item"><?php echo anchor(apps_url('orcid_widget/download/'), '<i class="icon-white icon-download"></i> Demo', array('class'=>'btn btn-large btn-success')) ?></li>
							<li class="cat-item"><?php echo anchor(apps_url('orcid_widget/download/'), '<i class="icon-white icon-download"></i> Download minified', array('class'=>'btn btn-large btn-success')) ?></li>
							<li class="cat-item"><?php echo anchor(apps_url('orcid_widget/download/'), '<i class="icon-white icon-download"></i> Download uncompressed', array('class'=>'btn btn-large btn-success')) ?></li>
						</ul>
					</li>
				
				</ul>
			</aside><!-- ends sidebar -->
		
		</div><!-- ends row -->
		
	</div><!-- ends container -->

	</section>
<?php $this->load->view('developer_footer'); ?>