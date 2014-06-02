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
					<li class="active">Vocabulary Widget</li>
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
					<p>The ANDS Vocabulary Widget allows you to <b>instantly add Data Classification capabilities</b> to your data capture tools through the ANDS Vocabulary Service.</p>
					<p>The widget has been written in the style of a jQuery plugin, allowing complete control over styling and functionality with just a few lines of javascript. The widget also ships with some UI helper modes for:</p>
					
					<ul><!-- features -->
						<li><span>Searching for vocabulary terms</span></li>
						<li><span>Creates a <b>navigable "autocomplete" widget</b>, with users able to search for the appropriate controlled vocabulary classification when inputting data.</span></li>
						<li><span>Narrowing on a (hierarchical) vocabulary item</span></li>
						<li><span><b>Populates a select list (or autocomplete textbox)</b> with items comprising a base vocabulary classification URI.</span></li>
						<li><span>Browsing a (hierarchical) vocabulary set as a tree</span></li>
						<li><span>Creates a <b>tiered term tree</b> (such as that used in the <a href="http://researchdata.ands.org.au/browse">RDA "Browse" screen</a>)</span></li>
					</ul>
						
					<p>It is also possible to use the widget in a more programmatic manner; refer to the 'core usage' section below for more details.</p>
					
					<p><br/></p>

					<h2 class="k-fancy-title">How do I use this plugin?</h2>
					<p>The widget requires jQuery; load this, and the plugin itself (and associated CSS styles) in your document's &lt;head&gt;&lt;/head&gt; segment:</p>
					<pre class="prettyprint pre-scrollable pre-small" style="min-height:5em">
&lt;script src='//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js'&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="<?=remove_scheme(apps_url('assets/vocab_widget/js/vocab_widget.js'));?>"&gt;&lt;/script&gt;
&lt;link rel="stylesheet" type="text/css" href="<?=remove_scheme(apps_url('assets/vocab_widget/css/vocab_widget.css'));?>" /&gt;
					</pre>

					<p><br/></p>
					<h2 class="k-fancy-title">Demo</h2>
					<h2 class="widget-title">ANZSRC Searching</h2>
					<p>Search a vocabulary for matching terms, provided in an autocomplete-style list:</p>
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


					<p><br/></p>
					<p><hr/></p>				
					<h2 class="widget-title">RIFCS Narrowing</h2>
					<p>Narrow or collection mode can be attached to a <code>select</code> element to <b>provide a drop-down</b>, or a text <code>input</code> box for an autocomplete-style list:</p>
					<ul>
						<li><code>narrow</code> mode usually expresses a direct parent-child relationship in the vocabulary (such as skos:narrower).</li>
						<li><code>collection</code> is used to express less strong groupings of concepts in a vocabulary (such as skos:Collection or even rdf:list).</li>
					</ul>
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

					<p><br/></p>
					<p><hr/></p>	
					
					<!--h2 class="widget-title">RIFCS Narrowing w/autocomplete</h2>
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
					</div-->

					<h2 class="widget-title">Tree Mode</h2>
					<p>Tree mode constructs a clickable vocabulary tree for a given repository. Bind to the <code>treeselect.vocab.ands</code> event to handle user selection.</p>
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

				

					<p><br/></p>
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
							<li class="cat-item"><?php echo anchor(apps_url('vocab_widget/download/'), '<i class="icon-white icon-download"></i> Download widget sourcecode', array('class'=>'btn btn-large btn-success')) ?></li>
							<li class="cat-item"><?php echo anchor(apps_url('vocab_widget/download/minified'), '<i class="icon-white icon-download"></i> Download minified widget', array('class'=>'btn btn-large btn-success')) ?></li>
						</ul>
					</li>
                        <li class="widget clearfix">
                            <h2 class="widget-title">Video</h2>
                            <p><a class="youtube" href="http://www.youtube.com/watch?v=B3aEoptf_5U">About this widget</a></p>
                        </li>
					<li class="widget clearfix">
						<h3 class="widget-title">License</h3>
						<p>Apache License, Version 2.0: <a href="http://www.apache.org/licenses/LICENSE-2.0">http://www.apache.org/licenses/LICENSE-2.0</a></p>
					</li>
					</div>
				
				</ul>
			</aside><!-- ends sidebar -->
		
		</div><!-- ends row -->

		<div class="row">
			<div id="k-config" class="clearfix col-lg-9 col-md-9 col-sm-9">
				<article><small>
					<h2 class="k-fancy-title">Configuration</h2>
					<p>The plugin accepts a suite of options, detailed below. Please note that some options are required, and don't have default values (such as <code>repository</code>: you must provide values for such options. Incorrectly configured plugins will result in a javascript 'alert' box being displayed, describing the nature of the configuration problem.</p>
					<p>Options are passed into the plugin using a Javascript hash/object, such as</p>
					<pre class="prettyprint">$("#vocabInput").vocab_widget({cache: false});</pre>
					<p> Be sure to quote strings, and separate multiple options with a comma (<code>,</code>). </p> 
					<p> Alternatively, options can be set after initialisation using the following form: </p>
					<pre class="prettyprint">$(...).vocab_widget('[option name]', [option value]);</pre>
					<p> This works for all options <strong>except</strong> <code>mode</code>, which must be specified at initialisation (or omitted for core usage). </p>
					<p> Some options are specific to the chosen mode; the tables below are grouped in a way that makes this easy to comprehend. Core usage of the widget exposes all "common" options. </p>
					<div class="alert"> <strong>Note:</strong> 'tree' mode has no specific configuration other than the widget's common options. </div>

					<h2 class="widget-title">Common Options</h2>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<td>Property</td><td>Defaults</td><td>Description</td>
						</thead>
						<tbody>
							<tr>
								<td><code>mode</code></td>
								<td><code>''</code></td>
								<td><span class="badge">required</span> Vocab widget mode: <code>search</code> provides an autocomplete widget on an HTML input element, while <code>narrow</code> or  <code>collection</code> populate an HTML select element with appropriate data. <code>advanced</code> mode exposes the core widget with no UI helpers.</td>
							</tr>
							<tr>
								<td><code>repository</code></td>
								<td><code>''</code></td>
								<td><span class="badge">required</span> The SISSvoc repository to query (e.g. <code>anzsrc-for</code>, <code>rifcs</code>)</td>
							</tr>
							<tr>
								<td><code>max_results</code></td>
								<td><code>100</code></td>
								<td>At most, how many results should be returned?</td>
							</tr>
							<tr>
								<td><code>cache</code></td>
								<td><code>true</code></td>
								<td>Cache SISSvoc responses?</td>
							</tr>
							<tr>
								<td><code>error_msg</code></td>
								<td><code>"ANDS Vocabulary Widget service error"</code></td>
								<td>Message title to display (via a js 'alert' call) when an error is encountered. Set to <code>false</code> to suppress such messages</td>
							</tr>
							<tr>
								<td><code>endpoint</code></td>
								<td><code>"http://services.ands.org.au/api/resolver/vocab_widget/"</code></td>
								<td>Location (absolute URL) of the (JSONP) SISSvoc provider.</td>
							</tr>
						</tbody>
					</table>

					<h2 class="widget-title">"Search" helper options</h2>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<td>Property</td><td>Defaults</td><td>Description</td>
						</thead>
						<tbody>
							<tr>
								<td><code>min_chars</code></td>
								<td><code>3</code></td>
								<td>How many characters are required before a search is executed?</td>
							</tr>
							<tr>
								<td><code>delay</code></td>
								<td><code>500</code></td>
								<td>How long to wait (after initial user input) before executing the search? Provide in milliseconds</td>
							</tr>
							<tr>
								<td><code>nohits_msg</code></td>
								<td><code>"No matches found"</code></td>
								<td>Message to display when no matching concepts are found. Set to <code>false</code> to suppress such messages</td>
							</tr>
							<tr>
								<td><code>list_class</code></td>
								<td><code>"vocab_list"</code></td>
								<td>CSS 'class' references for the dropdown list. Separate multiple classes by spaces</td>
							</tr>
							<tr>
								<td><code>fields</code></td>
								<td><code>["label", "notation", "about"]</code></td>
								<td>Which fields do you want to display? Available fields are defined by the chosen repository.</td>
							</tr>
							<tr>
								<td><code>target</code></td>
								<td><code>"notation"</code></td>
								<td>What data field should be stored upon selection?</td>
							</tr>
						</tbody>
					</table>

					<h2 class="widget-title">"Narrow" or "Collection" helper options</h2>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<td>Property</td><td>Defaults</td><td>Description</td>
						</thead>
						<tbody>
							<tr>
								<td><code>mode_params</code></td>
								<td><code>''</code></td>
								<td><span class="label">required</span>For narrow mode, <code>mode_params</code> defines the vocabulary item upon which to narrow.</td>
							</tr>
							<tr>
								<td><code>fields</code></td>
								<td><code>["label", "notation", "about"]</code></td>
								<td>In narrow mode, this option <strong>must be overridden</strong> to be a single-element array of string . This selection defines the label for the select list options.</td>
							</tr>
							<tr>
								<td><code>target</code></td>
								<td><code>"notation"</code></td>
								<td>What data field should be stored upon selection? In narrow mode, this field is used as the <code>value</code> attribute for the select list options</td>
							</tr>
						</tbody>
					</table>

					<p><br/></p>
					<p><br/></p>


					<h2 class="k-fancy-title">Advanced Configuration</h2>

					<h2 class="widget-title">Core Mode</h2>
					<p>Invoking the plugin with no 'mode' argument exposes core functionality, without having to use form input (text, select) elements or the like. Instead, you hook into javascript Events, building the UI as best fits your needs. A very basic example is shown below: it constructs a list of RIFCS identifier types.</p>
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
							<pre class="prettyprint pre-small">
&lt;div id=&quot;vocab-core&quot;&gt; &lt;p&gt;RIFCS Identifier types:&lt;/p&gt; &lt;/div&gt;
							</pre>
						</div>
						<div id="vocab_w-5-js" class="tab-pane fade">
							<pre class="prettyprint pre-small">
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

					<p><hr/></p>

					<p>Core usage exposes 3 functions</p>
					<ul>
						<li><code>search</code></li>
						<li><code>narrow</code></li>
						<li><code>top</code></li>
					</ul>
					<p>These take a single additional parameter, which can look like any of the following</p>
					<dl>
						<dt>plain string</dt>
							<dd>Search term (for search call) or narrow URI (for narrow call)</dd>
						<dt>object <code>{uri:'...', callee:'...'}</code></dt>
							<dd>'uri' works as the plain string description above, and should be set <code>false</code>.</dd>
						<dd>'callee' defines the object that will fire the subsequent javascript event. Defaults to the containing element (what you invoked the widget on)</dd>
					</dl>

					<h2 class="widget-title">Events</h2>
					<p> When run in advance mode, events are fired to allow you to hook into the workflow and implement your customisations as you see fit. </p>
					<div class="alert alert-info"> Plugin events are placed in the <code>vocab.ands</code> namespace </div>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<td>Event Name</td><td>Parameters</td><td>Description</td>
						</thead>
						<tbody>
							<tr> <td>search.vocab.ands</td> <td> <ol> <li>JS Event object</li> <li>SISSVOC data object</li> </ol> </td> <td> Hook into the plugin's <code>search</code> core function; <code>data</code> is the search response. </td> </tr>
							<tr> <td>narrow.vocab.ands</td> <td> <ol> <li>JS Event object</li> <li>SISSVOC data object</li> </ol> </td> <td> Hook into the plugin's <code>narrow</code> core function; <code>data</code> is the search response. </td></tr>
							<tr> <td>top.vocab.ands</td> <td> <ol> <li>JS Event object</li> <li>SISSVOC data object</li> </ol> </td> <td> Hook into the plugin's <code>top</code> core function; <code>data</code> is the search response. </td> </tr>
							<tr> <td>treeselect.vocab.ands</td> <td> <ol> <li>JS Event object</li> </ol> </td> <td> Fired when a tree item is clicked. The selected item is the <code>event</code> target. The target will have a 'vocab' data object, containing all the details found in a SISSVOC data object. </td> </tr>
							<tr> <td>error.vocab.ands</td> <td> <ol> <li>JS Event object</li> <li>XMLHttpRequest*</li> </ol> </td> <td> This event is fired whenever there is a problem communicating with the plugin's <code>endpoint</code>.<br> <span class="label label-warning">Note:</span> <span>If the error occurred during an AJAX call, the object will be a bona fide XMLHttpRequest / xhr. Otherwise, a dummy plain object with 'status' and 'responseText' properties will be available.</span> </td> </tr>
						</tbody>
					</table>
				

					<h2 class="widget-title">Data</h2>
					<p> The SISSVOC data object returned by the above events (and also attached to the 'treeselect' event's 'vocab' data object) is a plain javscript object with the following properties: </p>
					<dl>
						<dt>status</dt>
						<dd>'OK' if all good, something else (most likely 'ERROR' if not)</dd>
						<dt>message</dt>
						<dd>description of the underlying system call by default, or information on status when something went wrong</dd>
						<dt>limit</dt>
						<dd>the maximum number of records requested</dd>
						<dt>items</dt>
						<dd>an array of SISSVOC vocabulary items:
						  <dl class="dl-horizontal">
							<dt>definition</dt>
							<dd>item description</dd>
							<dt>label</dt>
							<dd>item label</dd>
							<dt>about</dt>
							<dd>item definition / URL</dd>
							<dt>broader</dt>
							<dd>parent term (if it exists)</dd>
							<dt>narrower</dt>
							<dd>child terms (if they exist, otherwise boolean false)</dd>
							<dt>count</dt>
							<dd>fequency of use among ANDS registry objects (experimental; works best on ANZSRC-FOR, not so well on RIFCS)</dd>
						  </dl>
						</dd>
						<dt>count</dt>
						<dd>the number of items returned</dd>
					</dl></small>
				</article>
			</div>
		</div>
		
	</div><!-- ends container -->

	</section>
<?php $this->load->view('developer_footer'); ?>