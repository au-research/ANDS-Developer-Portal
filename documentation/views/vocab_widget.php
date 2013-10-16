<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">Vocabulary Widget</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ol class="breadcrumb pull-right">
					<li><?php echo anchor('/', 'Home'); ?></li>
					<li><?php echo anchor('/documentation/widgets/', 'Widgets'); ?></li>
					<li class="active"><?php echo anchor('/documentation/widgets/vocab_widget', 'Vocabulary Widget'); ?></li>
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
					

					<h2 class="k-fancy-title">What is this widget?</h2>
					<p>The ANDS Vocabulary Widget allows you to instantly add Data Classification capabilities to your data capture tools through the ANDS Vocabulary Service.</p>
					<p>The widget has been written in the style of a jQuery plugin, allowing complete control over styling and functionality with just a few lines of javascript. The widget also ships with some UI helper modes for:</p>
					
					<ul class="k-work-features-list"><!-- features -->
						<li><span class="k-work-feature-value">Searching for vocabulary terms</span></li>
						<li><span class="k-work-feature-value">Creates a navigable "autocomplete" widget, with users able to search for the appropriate controlled vocabulary classification when inputting data.</span></li>
						<li><span class="k-work-feature-value">Narrowing on a (hierarchical) vocabulary item</span></li>
						<li><span class="k-work-feature-value">Populates a select list (or autocomplete textbox) with items comprising a base vocabulary classification URI.</span></li>
						<li><span class="k-work-feature-value">Browsing a (hierarchical) vocabulary set as a tree</span></li>
						<li><span class="k-work-feature-value">Creates a tiered term tree (such as that used in the <a href="http://researchdata.ands.org.au/browse">RDA "Browse" screen</a>)</span></li>
					</ul>
						
					<p>It is also possible to use the widget in a more programmatic manner; refer to the 'core usage' section below for more details.</p>
		 
					<h2 class="k-fancy-title">How does it work?</h2>
					<p>The widget requires jQuery; load this, and the plugin itself (and associated CSS styles) in your document's &lt;head&gt;&lt;/head&gt; segment:</p>
					<pre class="prettyprint pre-scrollable" style="min-height:5em">
&lt;script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js'&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="http://services.ands.org.au/api/resolver/vocab_widget.js"&gt;&lt;/script&gt;
&lt;link rel="stylesheet" type="text/css" href="http://services.ands.org.au/api/resolver/vocab_widget.css" /&gt;
					</pre>

					<h2 class="k-fancy-title">Demo</h2>
					<h2 class="widget-title">ANZSRC Searching</h2>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#vocab_w-1-result" data-toggle="tab">Result</a></li>
						<li><a href="#vocab_w-1-html" data-toggle="tab">HTML</a></li>
						<li><a href="#vocab_w-1-js" data-toggle="tab">JS</a></li>
					</ul>
					<div class="tab-content">
						<div id="vocab_w-1-result" class="tab-pane fade active in">
							<input type="text" id="anzsrc-vocab" name="anzsrc-for" value="" size="40" autocomplete="off"><br/>
							<small>Auto-complete: begin typing something (eg. "BIOL")</small>
						</div>
						<div id="vocab_w-1-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;input type=&quot;text&quot; id=&quot;anzsrc-vocab&quot; name=&quot;anzsrc-for&quot; value=&quot;&quot; size=&quot;40&quot; autocomplete=&quot;off&quot;&gt;
							</pre>
						</div>
						<div id="vocab_w-1-js" class="tab-pane fade">
							<pre class="prettyprint">
$("#anzsrc-vocab").vocab_widget({
	mode: 'search',
	cache: false,
	repository: 'anzsrc-for',
	target_field: 'label'
});
							</pre>
						</div>
					</div>

					<h2 class="widget-title">RIFCS Narrowing</h2>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#vocab_w-2-result" data-toggle="tab">Result</a></li>
						<li><a href="#vocab_w-2-html" data-toggle="tab">HTML</a></li>
						<li><a href="#vocab_w-2-js" data-toggle="tab">JS</a></li>
					</ul>
					<div class="tab-content">
						<div id="vocab_w-2-result" class="tab-pane fade active in">
							<select id="rifcs-idtype" name="rifcs-id-for" value=""></select>
						</div>
						<div id="vocab_w-2-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;select id=&quot;rifcs-idtype&quot; name=&quot;rifcs-id-for&quot; value=&quot;&quot;&gt;&lt;/select&gt;
							</pre>
						</div>
						<div id="vocab_w-2-js" class="tab-pane fade">
							<pre class="prettyprint">
$("#rifcs-idtype").vocab_widget({
    mode:"narrow",
    mode_params:"http://purl.org/au-research/vocabulary/RIFCS/1.4/RIFCSIdentifierType",
    repository:"rifcs",
    cache: false,
    fields: ['definition'],
    target_field: 'label'
});
							</pre>
						</div>
					</div>

					<h2 class="widget-title">RIFCS Narrowing w/autocomplete</h2>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#vocab_w-3-result" data-toggle="tab">Result</a></li>
						<li><a href="#vocab_w-3-html" data-toggle="tab">HTML</a></li>
						<li><a href="#vocab_w-3-js" data-toggle="tab">JS</a></li>
					</ul>
					<div class="tab-content">
						<div id="vocab_w-3-result" class="tab-pane fade active in">
							<input type="text" size="40" id="rifcs-idtype-input" name="rifcs-id-for-input" value="" /><br>
							<small>Auto-complete: begin typing something (eg. "ABN")</small>
						</div>
						<div id="vocab_w-3-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;input type=&quot;text&quot; size=&quot;40&quot; id=&quot;rifcs-idtype-input&quot; name=&quot;rifcs-id-for-input&quot; value=&quot;&quot; /&gt;
							</pre>
						</div>
						<div id="vocab_w-3-js" class="tab-pane fade">
							<pre class="prettyprint">
$("#rifcs-idtype-input").vocab_widget({
	mode:"narrow",
  	mode_params:"http://purl.org/au-research/vocabulary/RIFCS/1.4/RIFCSIdentifierType",
  	repository:"rifcs",
  	cache: false,
  	fields: ['label', 'definition', 'about'],
  	target_field: 'label'
});
							</pre>
						</div>
					</div>

					<h2 class="widget-title">Tree Mode</h2>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#vocab_w-4-result" data-toggle="tab">Result</a></li>
						<li><a href="#vocab_w-4-html" data-toggle="tab">HTML</a></li>
						<li><a href="#vocab_w-4-js" data-toggle="tab">JS</a></li>
					</ul>
					<div class="tab-content">
						<div id="vocab_w-4-result" class="tab-pane fade active in">
							<div id="vocab-tree"></div>
						</div>
						<div id="vocab_w-4-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;div id=&quot;vocab-tree&quot;&gt;&lt;/div&gt;
							</pre>
						</div>
						<div id="vocab_w-4-js" class="tab-pane fade">
							<pre class="prettyprint">
$("#vocab-tree").vocab_widget({
	mode:'tree',
	repository:'anzsrc-for'})
.on('treeselect.vocab.ands', function(event) {
	var target = $(event.target);
	var data = target.data('vocab');
	alert('You clicked ' + data.label + '\r\n<' + data.about + '>');
});
							</pre>
						</div>
					</div>

					<h2 class="widget-title">Core Mode</h2>
					<p>This form section is using the widget with no helpers; it outputs a list of known <code>rifcs</code> identifier types</p>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#vocab_w-5-result" data-toggle="tab">Result</a></li>
						<li><a href="#vocab_w-5-html" data-toggle="tab">HTML</a></li>
						<li><a href="#vocab_w-5-js" data-toggle="tab">JS</a></li>
					</ul>
					<div class="tab-content">
						<div id="vocab_w-5-result" class="tab-pane fade active in">
							<div id="vocab-core">
								<p>RIFCS Identifier types:</p>
						    </div>
						</div>
						<div id="vocab_w-5-html" class="tab-pane fade">
							<pre class="prettyprint">
&lt;div id=&quot;vocab-core&quot;&gt; &lt;p&gt;RIFCS Identifier types:&lt;/p&gt; &lt;/div&gt;
							</pre>
						</div>
						<div id="vocab_w-5-js" class="tab-pane fade">
							<pre class="prettyprint">
var elem = $("#vocab-core");
var widget = elem.vocab_widget({repository:'rifcs', cache: false});

//set up some handlers
elem.on('narrow.vocab.ands', function(event, data) {
	var list = elem.append('<ul />');
	$.each(data.items, function(idx, e) {
	var link = $('<a href="' + e['about'] + '">' + e['label'] + '</a>');
	var item = $('<li />');
	item.append(link).append(' (' + e.definition + ')');
	item.data('data', e);
	list.append(item);
  });
});

//error handler
elem.on('error.vocab.ands', function(event, xhr) {
  elem.addClass('error')
	.empty()
	.text('There was an error retrieving vocab data: ' + xhr);
});

//now, perform the vocab lookup
widget.vocab_widget('narrow','http://purl.org/au-research/vocabulary/RIFCS/1.4/RIFCSIdentifierType');
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
						<h2 class="widget-title">Demo and Download<span class="k-widget-title-tit"></span></h2>
						<ul class="list-unstyled">
							<li class="cat-item"><?php echo anchor(apps_url('vocab_widget/download/minified'), '<i class="icon-white icon-download"></i> Download minified', array('class'=>'btn btn-large btn-success')) ?></li>
							<li class="cat-item"><?php echo anchor(apps_url('vocab_widget/download/'), '<i class="icon-white icon-download"></i> Download uncompressed', array('class'=>'btn btn-large btn-success')) ?></li>
						</ul>
					</li>

					<li class="widget clearfix">
						<h3 class="widget-title">License</h3>
						<p>Apache License, Version 2.0: <a href="http://www.apache.org/licenses/LICENSE-2.0">http://www.apache.org/licenses/LICENSE-2.0</a></p>
					</li>
					</div>
				
				</ul>
			</aside><!-- ends sidebar -->
		
		</div><!-- ends row -->
		
	</div><!-- ends container -->

	</section>
<?php $this->load->view('developer_footer'); ?>