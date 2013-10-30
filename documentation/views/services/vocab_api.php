<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">Vocabulary Service API</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ol class="breadcrumb pull-right">
					<li><?php echo anchor('/', 'Home'); ?></li>
					<li><?php echo anchor('/documentation/services/', 'Web Services'); ?></li>
					<li class="active">Vocabulary Service API'</li>
				</ol>
			</div>
		</div><!-- ends row -->
	</div><!-- ends container -->
</section>
<section id="k-content"><!-- starts content -->
	<div class="container"><!-- starts container -->
		<div class="row"><!-- starts row -->

			<div id="k-main" class="clearfix col-lg-8 col-md-8 col-sm-12"><!-- starts main content -->
				<article><!-- starts article short -->
					<div><!-- starts summary -->
						<h3 id="about" class="k-fancy-title"><!-- title -->
							About the Vocabulary Service API
						</h3>
						<p><!-- text -->
							The ANDS Controlled Vocabularies service allows research organisations to publish and query "controlled vocabularies" relating to their research datasets.
							The use of controlled vocabularies in the description of research data collections improves access, findability and reuse of research data.
						</p>

						<p>
							ANDS uses a customised instance of <a href="https://www.seegrid.csiro.au/wiki/Siss/SISSvoc3Overview" target="_blank">SISSvoc 3</a> to host a number of
							commonly used controlled vocabularies. The Vocabulary Service API allows developers to integrate with the vocabulary service using HTTP and a variety of data representations
							(including XML, JSON and RDF).
						</p>

						<p>
							Example use cases for the service include:
							<ul>
								<li>Populate select lists and menus enabling users to <b>classify and link data</b> through the use of published and standardised terminologies</li>
								<li>Searching for and <b>resolving information about published terminologies</b></li>
								<li>Providing a common, globally resolveable identifier for terms and concepts</li>
							</ul>
						</p>

						<p>
							For some of these use cases, you may also consider using the easy-to-implement <a href="<?=base_url('documentation/widgets/vocab_widget/');?>">ANDS Vocabulary Widget</a>.
						</p>

						<p><br/></p>

						<h3 id="vocab_structure" class="k-fancy-title">What does a vocabulary look like?</h3>
						<p>
							Vocabularies hosted by the ANDS Vocabulary Service are modelled using the <a href="http://www.w3.org/TR/skos-reference/" target="_blank">Simple Knowledge Organization System (SKOS)</a> and
							expressed as <a href="http://www.w3.org/TR/2004/REC-rdf-primer-20040210/" target="_blank">Resource Description Framework (RDF)</a> triples.
						</p>
						<p>
							Each concept represented in a vocabulary is identified by a unique URI. These URIs can be passed as a parameter to a number of the services to retrieve specific concepts or sets of concepts.
						</p>
						<p>
							The following diagram illustrates the simple hierarchy implied by the service calls:
						</p>
						<p style="text-align:center;">
							<a href="<?=asset_url('img/misc/skos_concept_diagram.png','core');?>" class="colorbox" title="SKOS predicate explanation diagram">
								<img src="<?=asset_url('img/misc/skos_concept_diagram.png','core');?>" style="width:70%;" alt="SKOS predicate explanation diagram" />
								<br/>
								<small class="muted">SKOS predicate explanation diagram (click to enlarge)</small>
							</a>
						</p>

						<div class="alert alert-success">
						  <b>Not sure?</b> For users unfamiliar with these technologies, the ANDS Service largely abstract these details, providing a simple RESTful web service
						  with JSON and XML responses. Phew!
						</div>

						<h3 class="k-fancy-title">ANDS Vocabulary Service</h3>


						<h4 id="supported_vocabs">Supported Vocabularies:</h4>
						<?php
							$config = array(
								array('rifcs15',
									'<p>Registry Interchange Format v1.5 - Collections and Services (RIF-CS) Schema Vocabulary</p>',
									'- <a href="http://researchdata.ands.org.au/registry/vocab_service/#!/view/34" target="_blank">Vocab Catalogue Entry</a><br/>
									- <a href="http://ands.org.au/resource/rif-cs.html" target="_blank">RIF-CS vocabulary types</a>'),

								array('anzsrc-for',
									'<p>1297.0 - Australian and New Zealand Standard Research Classification (ANZSRC), 2008</p>',
									'- <a href="http://researchdata.ands.org.au/registry/vocab_service/#!/view/40" target="_blank">Vocab Catalogue Entry</a><br/>
									- <a href="http://www.abs.gov.au/Ausstats/abs@.nsf/Latestproducts/1297.0Main%20Features52008?opendocument&tabname=Summary&prodno=1297.0&issue=2008&num=&view=" target="_blank">Australian Bureau of Statistics</a>'),

								array('anzsrc-seo',
									'<p>1297.0 - Australian and New Zealand Standard Research Classification (ANZSRC), 2008 - Socio-Economic Objective Codes</p>',
									'- <a href="http://researchdata.ands.org.au/registry/vocab_service/#!/view/43" target="_blank">Vocab Catalogue Entry</a><br/>
									- <a href="http://www.abs.gov.au/Ausstats/abs@.nsf/Latestproducts/1297.0Main%20Features62008?opendocument&tabname=Summary&prodno=1297.0&issue=2008&num=&view=" target="_blank">Australian Bureau of Statistics</a>'),
							);
						?>
						<table class="table table-striped table-bordered table-hover" style="font-size:0.8em;">
							<thead>
								<td width="22%">Vocab Key</td><td width="50%">Title</td><td>More Information</td>
							</thead>
							<tbody>
								<?php foreach($config as $c): ?>
								<tr>
									<td width="15%"><code><?php echo $c[0] ?></code></td>
									<td><?php echo $c[1] ?></td>
									<td><?php echo $c[2] ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						<p>
							Research Organisations who are looking for a service to host their own controlled vocabularies should contact <a href="mailto:services@ands.org.au">services@ands.org.au</a>.
						</p>
						<p><br/></p>

							<h4><a id="service_url"></a>Service URL</h4>
						<blockquote><code><?=$this->config->item('sissvoc_url');?><blue>{vocab key}</blue>/<blue>{service call}</blue></code></blockquote>
						<p>
							<ul>
								<li>
									<small>This API is a <a href="http://net.tutsplus.com/tutorials/other/a-beginners-introduction-to-http-and-rest/" target="_blank">RESTful Web Service</a>. Simply replace the <blue>blue</blue> parameters with the appropriate values and issue a HTTP GET request.</small>
								</li>
								<li>
									<small>Replace:
										<ul>
											<li>
												<code><blue>{vocab key}</blue></code> with the key of the supported vocabulary you are interested in.
											</li>
											<li>
												<code><blue>{service call}</blue></code> with some combination of the service parameters listed below.
											</li>
											<li>
												<em>Note: all parameter values (including URIs embedded as parameters) <u>must be</u> <a href="http://www.w3schools.com/tags/ref_urlencode.asp" target="_blank">URL-encoded</a>.</em>
											</li>
										</ul>
									</small>
								</li>
							</ul>

						</p>

						<p><br/></p>
						<?php

						$config = array(
							array('Item Endpoint: /resource?uri=...',
								'Retrieve the details of the resource/concept identified by the specified URI.',
								array(
									'anzsrc-seo/resource?uri=http://purl.org/au-research/vocabulary/anzsrc-seo/2008/81',
									'rifcs15/resource.xml?uri=http://purl.org/au-research/vocabulary/RIFCS/1.5/RIFCSDatesType/dc.issued',
								),
								''
							),
							array('List Endpoint: /concepts',
								'Retrieve a listing of all the concepts contained within a vocabulary.',
								array(
									'rifcs15/concepts',
									'anzsrc-for/concepts.json',
								),
								'Optionally, pass <code>?scheme=...</code> to restrict to concepts from a specific concept scheme (identified by URI)'
							),
							array('List Endpoint: /conceptschemes',
								'Retrieve a listing of all the concept schemes contained within a vocabulary. ',
								array(
									'rifcs15/conceptschemes',
									'anzsrc-for/conceptschemes.ttl',
								),
								''
							),
							array('Search Endpoint: /concepts?anycontains=...',
								'Retrieve a listing of all the concepts where the provided text:
									<ul><li>Is contained within the <code>rdfs:label</code>, <code>skos:prefLabel</code> or <code>skos:altLabel</code> properties of a concept, or</li>
									<li>Is contained within the ‘resource URI’ of a the concept, or</li>
									<li>Exactly matches the ‘notation’ property of the concept.</li></ul>',
								array(
									'anzsrc-seo/concepts?anycontains=ENERGY',
									'rifcs15/concepts.json?anycontains=citation',
								),
								'This query is case insensitive.'
							),

							array('Search Endpoint: /concepts?anylabel=...',
								'Retrieve a listing of all the concepts where the provided text exactly matches the <code>skos:prefLabel</code> or <code>skos:altLabel</code> properties of the concept.',
								array(
									'anzsrc-for/concepts?anylabel=MATHEMATICAL%20SCIENCES',
								),
								'This query is case sensitive.'
							),

						);

						// Display service calls in the panel format
						function service_gen($id, $title, $desc, $examples, $other){
							$CI =& get_instance();
							echo '
							<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a href="#panel' . $id .'" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed">
												<i class="icon-share-alt awesome16"></i> ' . $title . '
											</a>
										</h3>
									</div>
									<div class="panel-collapse collapse" id="panel' . $id .'">
										<div class="panel-body">
											<p>
												' . $desc . '
											</p>
											<p>
												Examples:<br/>
												<small>
												<ul>';
												foreach($examples AS $ex)
												{
													echo '<li><code>.../<a href="'. $CI->config->item('sissvoc_url') . $ex .'" target="_blank">'.$ex.'</a></code></li>';
												}
								echo '
												</small></ul>

												<p><small>'.$other.'</small></p>
											</p>
										</div>
									</div>
								</div>

							';
						}
						?>


						<h3 class="k-fancy-title"><a id="calls1"></a>Service Calls &amp; Example Usage</h3>
							The Vocabulary Service also has built-in documentation. See the
										<a href="<?=$this->config->item('sissvoc_url');?>meta/">/meta/</a> service call.<br/>
						<h4>Core Services</h4>
						<div class="col-lg-12">
							<div id="accordion" class="panel-group">
								<?php
									foreach ($config AS $i => $svc)
									{
										service_gen($i, $svc[0], $svc[1], $svc[2], $svc[3]);
									}
								?>

							</div><!-- ends panel group -->
						</div>

						<?php

						$config = array(
							array('List Endpoint: /concepts/topConcepts',
								'Retrieve a listing of all the top concepts contained within a vocabulary.',
								array(
									'anzsrc-for/concepts/topConcepts',
									'anzsrc-seo/concepts/topConcepts.json',
								),
								'Also supports restricting results to those contained within a concept scheme by appending <code>?scheme=...</code>'
							),

							array('List Endpoint: /concepts/narrower?uri=...',
								'Retrieve a listing of all the concepts in a vocabulary, which are the children of (one step lower in the hierarchy), concepts with a label exactly matching the provided text.',
								array(
									'rifcs15/concepts/narrower?uri=http://purl.org/au-research/vocabulary/RIFCS/1.5/RIFCSDatesType',
									'anzsrc-for/concepts/narrower.xml?uri=http://purl.org/au-research/vocabulary/anzsrc-for/2008/04',
								),
								'Also supports matching on label matches by using <code>?anylabel=...</code> in place of <code>?uri=...</code>'
							),

							array('List Endpoint: /concepts/broader?uri=...',
								'Retrieve a listing of all the concepts in a vocabulary, which are the parents of (one step higher in the hierarchy) a concept identified by the specified URI. ',
								array(
									'rifcs15/concepts/broader?uri=http://purl.org/au-research/vocabulary/RIFCS/1.5/RIFCSDatesType/dc.issued',
									'anzsrc-seo/concepts/broader.xml?uri=http://purl.org/au-research/vocabulary/anzsrc-seo/2008/8101',
								),
								'Also supports matching on label matches by using <code>?anylabel=...</code> in place of <code>?uri=...</code>'
							),

							array('List Endpoint: /concepts/allNarrower?uri=...',
								'Retrieve all concepts narrower than a specified concept, down to and including the last concepts in each possible path.',
								array(
									'anzsrc-for/concepts/allNarrower?uri=http://purl.org/au-research/vocabulary/anzsrc-for/2008/04',
									'anzsrc-seo/concepts/allNarrower?uri=http://purl.org/au-research/vocabulary/anzsrc-seo/2008/81',
								),
								'Only supported in certain vocabularies (currently: <code>anzsrc-for</code> &amp; <code>anzsrc-seo</code>)'
							),

							array('List Endpoint: /concepts/allBroader?uri=...',
								'Retrieve all concepts broader than a specified concept, up to and including the top concepts in each possible path.',
								array(
									'anzsrc-for/concepts/allBroader?uri=http://purl.org/au-research/vocabulary/anzsrc-for/2008/019999',
									'anzsrc-seo/concepts/allBroader?uri=http://purl.org/au-research/vocabulary/anzsrc-seo/2008/810108',
								),
								'Only supported in certain vocabularies (currently: <code>anzsrc-for</code> &amp; <code>anzsrc-seo</code>)'
							),
						);

						?>
						<p><br/></p>
						<h4><a id="calls2"></a>Hierarchy-oriented Services</h4>
						<div class="col-lg-12">
							<div id="accordion" class="panel-group">
								<?php
									foreach ($config AS $i => $svc)
									{
										service_gen("h" . $i, $svc[0], $svc[1], $svc[2], $svc[3]);
									}
								?>

							</div><!-- ends panel group -->
						</div>

						<?php

						$config = array(
							array('List Endpoint: /collections',
								'Retrieve a listing of all the concept collections contained within a vocabulary. Collections are used by vocabulary managers to group concepts that share something in common, under a specific label. ',
								array(
									'rifcs15/collections',
								),
								'Only supported in certain vocabularies (currently: <code>rifcs15</code>)'
							),

							array('List Endpoint: /concepts/inCollection?uri=...',
								'Retrieve a listing of all the concepts contained within a collection identified by the specified URI.',
								array(
									'rifcs15/concepts/inCollection?uri=http://purl.org/au-research/vocabulary/RIFCS/1.5/RIFCSCollectionToCollectionRelationType',
									'rifcs15/concepts/inCollection.json?uri=http://purl.org/au-research/vocabulary/RIFCS/1.5/RIFCSCollectionToPartyRelationType',
								),
								'Only supported in certain vocabularies (currently: <code>rifcs15</code>)'
							),

						);

						?>

						<p><br/></p>
						<h4><a id="calls3"></a>Collection Services</h4>
						<div class="col-lg-12">
							<div id="accordion" class="panel-group">
								<?php
									foreach ($config AS $i => $svc)
									{
										service_gen("c" . $i, $svc[0], $svc[1], $svc[2], $svc[3]);
									}
								?>

							</div><!-- ends panel group -->
						</div>


						<p><br/></p>
						<h3 class="k-fancy-title"><a id="responses"></a>Response Format</h3>
						<small>
						<ul>
							<li>Responses from this service can be returned in a variety of popular formats. By default, the service will respond with a HTML page.</li>
							<li>To request a specific format, append the format suffix to the service call. Valid formats include:


								<?php
								$config = array(
									array('.json',
										'<p>Response in JSON format</p>',
										'concepts/inCollection.json?uri=...'),
									array('.xml',
										'<p>Response in XML format</p>',
										'concepts/topConcepts.xml'),
									array('.rdf',
										'<p>Response in RDF/XML format</p>',
										'collections.rdf?scheme_uri=...'),
									array('.ttl',
										'<p>Response in Turtle format</p>',
										'conceptschemes.ttl'),
									array('.html<br/>(default)',
										'<p>Response in HTML format</p>',
										'/concepts.html/ or /concepts/'),
								);
								?>

								<table class="table table-striped table-bordered table-hover">
									<thead>
										<td width="22%">Format Suffix</td><td width="30%">Description</td><td>Example Usage</td>
									</thead>
									<tbody>
										<?php foreach($config as $c): ?>
										<tr>
											<td width="15%"><code><?php echo $c[0] ?></code></td>
											<td><?php echo $c[1] ?></td>
											<td><code><?php echo $c[2] ?></code></td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</li>

						</ul>
						</small>

						<p><br/></p>

						<!--h4 id="questions">Common Questions</h4>
						<small>
						<ul>
							<li><u>How do I get or extract the grant number?</u>
								<p>The grant number is unique to the funding organisation. At this stage, the best way to determine both of these pieces of information is to extract them from the <code>key</code> field in the response.</li>

							<li><u>What is the <code>slug</code> field?</u>
								<p>This is a URL-friendly name we allocate to each record in Research Data Australia. Prepend this value with <code>http://researchdata.ands.org.au/<blue>{slug}</blue></code> to link to this grant in RDA.</li>

							<li><u>Why do get an error about API keys or an XML fragment about registryObjects?</u>
								<p>You haven't correctly specified your API key in the request URL. Check the Service Usage section above.<br/>
						</ul>
						</small>

						<p><br/></p>
						<p><br/></p-->
						<p><br/></p>
						<!-- <div class="k-article-meta">
							<span class="k-article-date">May 21, 2014</span>
							<span class="k-article-spacer">/</span>
							<span class="k-article-category"><a href="" title="Company News">Company News</a></span>
							<span class="k-article-spacer">/</span>
							<span class="k-article-comments"><a href="" title="21 comments">21 comments</a></span>
							<span class="k-article-more"><a href="blog-single.html" title="Read more"><i class="icon-plus"></i></a></span>
						</div> -->
					</div><!-- ends summary -->
				</article><!-- ends article short -->
			</div><!-- ends main content -->

			<aside id="k-sidebar" class="col-lg-3 col-md-4 col-sm-12 col-lg-offset-1"><!-- starts sidebar -->
				<div id="k-sidebar-splitter" class="clearfix section-space60"><span></span></div>
				<div class="sticky" style="position: fixed; top: 200px; width: 262px;">

					<ul id="k-sidebar-list" class="list-unstyled sticky">

						<!--li class="widget widget_search clearfix">
							<form action="" id="searchform" method="get" role="search">
								<div class="input-group">
									<input type="text" name="s" id="s" class="form-control" autocomplete="off" placeholder="Search...">
									<span class="input-group-btn"><button class="btn btn-default" type="button">SEARCH</button></span>
								</div>
							</form>
						</li-->

						<li class="section-space30 widget widget_categories clearfix">
							<h2 class="widget-title">Select from the menu...<span class="k-widget-title-tit"></span></h2>
							<ul class="anchor_links">
								<li class="cat-item"><a href="#about">About the Vocabulary Service API</a></li>
								<li class="cat-item"><a href="#vocab_structure">Vocabulary Structure</a></li>
								<br/>
								<li class="cat-item"><a href="#supported_vocabs">Supported Vocabularies</a></li>
								<li class="cat-item"><a href="#service_url">Service URL</a></li>
								<br/>
								<li class="cat-item"><a href="#calls1">Core Service Calls</a></li>
								<li class="cat-item"><a href="#calls2">Hierarchy Service Calls</a></li>
								<li class="cat-item"><a href="#calls3">Collection Service Calls</a></li>
								<br/>
								<li class="cat-item"><a href="#responses">Response Formats</a></li>


								<li class="cat-item"><a href="http://researchdata.ands.org.au/home/disclaimer" target="_blank">Usage Disclaimer</a></li>
							</ul>
						</li>

						<div class="clearfix">
							<div class="alert alert-warning">
						  <b>Need help?</b> <br/>
						  Visit the <?=anchor($this->config->item('developer_community_portal'),'Community Support Forum');?>
						</div>

						</div>

					</ul>
				</div>
			</aside><!-- ends sidebar -->

		</div><!-- ends row -->

	</div><!-- ends container -->

	</section>
<?php $this->load->view('developer_footer'); ?>