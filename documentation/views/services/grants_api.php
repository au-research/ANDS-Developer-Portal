<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">Research Grants API</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ol class="breadcrumb pull-right">
					<li><?php echo anchor('/', 'Home'); ?></li>
					<li><?php echo anchor('/documentation/services/', 'Web Services'); ?></li>
					<li class="active">Research Grants API'</li>
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
					<div><a id="title"></a><!-- starts summary -->
						<h3 class="k-fancy-title"><!-- title -->
							<a href="#" title="Grants API Documentation">Research Grants API Documentation</a><a id="about"></a>
						</h3>
						<div style="float:right; width:200px; margin-left:40px;">
							<a href="<?=asset_url('img/grants_api_diagram.png','core');?>" class="colorbox" title="Illustrative Architecture Diagram - Research Grants API">
								<img src="<?=asset_url('img/grants_api_diagram.png','core');?>" style="width:90%;" alt="Architecture Diagram" />
								<br/><small>View Service Architecture Diagram</small>
							</a>
						</div>
						<p><!-- text -->
							The Research Grants API provides access to data relating to Australian Research Grants and Researchers.
						</p>

						<p>
							This service allows users to discover published research grants based on their title, or relationship to specific individuals or institutions.
						</p>

						<p>
							Example use cases for the service include:

							<ul>
								<li><strong>Populating a lookup form</strong> input to search for grant numbers</li>
								<li>Enabling <strong>richer RIF-CS</strong> relationship mappings</li>
								<li>Determining grants have been <strong>allocated to a particular researcher</strong></li>
							</ul>
						</p>

						<p>
						The service currently provides a searchable index for all NHMRC grants deposited into the ANDS Registry as part of the <a href="http://ands.org.au/guides/ardc-activity-infrastructure.html" target="_blank">ARDC Activity Infrastructure project</a>.
						</p>

						<p><br/></p>

						<h3 class="k-fancy-title"><a id="usage"></a>Service Usage</h3>
						<div class="alert alert-success">
						  <b>Before you start!</b> To use this service, institutions or individuals must <a href="<?=registry_url('services/register/');?>" target="_blank">register a free API key</a>.
						</div>
						<h4><a id="service"></a>Resource URL</h4>
						<blockquote><code><?=registry_url('services/');?><blue>{YOUR API KEY}</blue>/<green>getGrants</green>?<blue>{params}</blue></code></blockquote>
						<p>
							<ul>
								<li>
									<small>This API is a <a href="http://net.tutsplus.com/tutorials/other/a-beginners-introduction-to-http-and-rest/" target="_blank">RESTful Web Service</a>. Simply replace the <blue>blue</blue> parameters with the appropriate values and issue a HTTP GET request.</small>
								</li>
								<li>
									<small>Replace <code><blue>{YOUR API KEY}</blue></code> with the key your organisation registered (<a href="<?=registry_url('services/register/');?>" target="_blank">no API key? register for free</a>)</small>
								</li>
								<li>
									<small>Replace <code><blue>{params}</blue></code> with some combination of the parameters below. <em>Note: all parameter values <u>must be</u> <a href="http://www.w3schools.com/tags/ref_urlencode.asp" target="_blank">URL-encoded</a>.</em></small>
								</li>
								<li>
									<small>Results are limited to 999 rows. Use the <code>start</code> and <code>rows</code> parameters to step through results if you require more.</em></small>
								</li>
							</ul>
						</p>

						<p><br/></p>

						<h4>Service Parameters:</h4><a id="params"></a>
						<?php
							$config = array(
								array('title',
									'<p>the title of the grant (or part thereof)</p>',
									'getGrants?title=cancer'),

								array('institution',
									'<p>filter results to those grants which are managed by this institution</p>',
									'getGrants?institution=University%20of%20Sydney'),


								array('principalInvestigator',
									'<p>filter results to those grants which have this principal/lead investigator</p>',
									'getGrants?principalInvestigator=Jacob%20George'),

								array('person',
									'<p>filter results to those grants which have this person listed as a lead OR co-investigator</p>',
									'getGrants?person=Prof%20Jacob%20George'),

								array('rows',
									'limit the number of grants returned to this number (default: 999)',
									'getGrants?title=fish&rows=5'),

								array('start',
									'offset the grants returned by this number (used to "cursor" through large result sets)',
									'getGrants?title=fish&rows=15&start=75'),
							);
						?>

						<table class="table table-striped table-bordered table-hover" style="font-size:0.8em;">
							<thead>
								<td width="22%">Parameter</td><td width="30%">Description</td><td>Example Usage</td>
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

						<p><br/></p>
						<h4>Response Format</h4>
						<small>
						<ul>
							<li>Responses from this service are returned in <a href="http://www.json.org" target="_blank">JSON format</a>. See example below for response schema. </li>
							<li>Results are wrapped inside a <code>messages</code> object, which is returned when the status is <code>success</code></li>
							<li>If no grants matched your result, the <code>messages</code> object will be an empty array</li>
						</ul>
						</small>

						<p><br/></p>
						<h4 id="questions">Common Questions</h4>
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
						<p><br/></p>

						<h3 class="k-fancy-title"><a id="example1"></a>Example Usage</h3>

						<h4>1. Grants for a particular organisation and researcher</h4>
						<p>
							Return all grants whose chief investigator was "<blue>Dr Ming Tat (Patrick) Ling</blue>" and were managed by <blue>Queensland University of Technology</blue>:

							<small><ul>
								<li>HTTP GET Request: <br/>
									<code>&gt;
										<a target="_blank" href="<?=registry_url("services/api/getGrants?" .
										"institution=".
											rawurlencode("Queensland University of Technology").
										"&principalInvestigator=" .
											rawurlencode("Dr Ming Tat (Patrick) Ling"));?>">

										getGrants?institution=<blue><?=rawurlencode("Queensland University of Technology") . "</blue>" .
										 "&principalInvestigator=<blue>" . rawurlencode("Dr Ming Tat (Patrick) Ling");?></blue>

									</code><br/></a>
									<br/>
								</li>

								<li>Service Response (in JSON format):
							<pre class="prettyprint pre-scrollable pre-small">{
"status" : "success",
"message" : {
	"numFound" : 2,
	"recordData" :
	[
		{
			"title" : "To study how prostate tumor metastasizes to bone",
			"key" : "http://purl.org/au-research/grants/nhmrc/1031221",
			"relations" :
			{
				"isManagedBy" : "Queensland University of Technology",
				"isParticipantIn" : [ "Prof Judith Clements", "Prof Colleen Nelson" ],
				"isPrincipalInvestigatorOf" : "Dr Ming Tat (Patrick) Ling"
			},
			"slug" : "to-study-how-prostate-tumor-metastasizes-to-bone",
			"description" : "Bone metastasis occurs in more than 80% of cases of advanced prostate cancer (PCa), and is the major cause of morbidity and mortality in PCa patients. Understanding why PCa cells preferentially metastasize to bone may lead to the the development of novel therapy for inhibiting PCa metastasis. This project will study how the bone cell-secreted protein angiopoietin-1 promotes the metastasis of PCa cells to bone and whether inactivation of this protein can inhibit PCa bone metastasis.<br /><br />                           Lead Investigator: Dr Ming Tat (Patrick) Ling<br />                           <br />                           Co-Investigator(s): Prof Judith Clements; Prof Colleen Nelson<br />                           <br />                           Total Grant Budget: $AUD 555,400<br /><br />                           Application Year: 2011<br />                           Start Year: 2012<br />                           End Year: 2014<br /><br />                           Main Funding Group: Research Support<br />                           Grant Type (Funding Scheme): NHMRC Project Grants<br />                           Grant Sub Type: Standard Project Grant"
		},

		{
			"title" : "To identify a new therapeutic target for the treatment of prostate cancer",
			"key" : "http://purl.org/au-research/grants/nhmrc/1031228",
			"relations" :
			{
				"isManagedBy" : "Queensland University of Technology",
				"isParticipantIn" : [ "Prof Pamela Russell", "Prof Ronald Quinn" ],
				"isPrincipalInvestigatorOf" : "Dr Ming Tat (Patrick) Ling"
			},
			"slug" : "to-identify-a-new-therapeutic-target-for-the-treatment-of-prostate-cancer",
			"description" : "Advanced prostate cancer (PCa) remains the major therapeutic challenge since neither surgery nor systemic therapies are effective at this stage. Recently, we identified a protein called PACE-1 that is essential for PCa cell survival. We plan to investigate the roles of PACE-1 in the development and progression of prostate cancer. We will then test if PACE-1 inactivation alone or in combination with systemic cancer therapies will inhibit prostate tumor growth and disease progression.<br /><br />                           Lead Investigator: Dr Ming Tat (Patrick) Ling<br />                           <br />                           Co-Investigator(s): Prof Ronald Quinn; Prof Pamela Russell<br />                           <br />                           Total Grant Budget: $AUD 602,253<br /><br />                           Application Year: 2011<br />                           Start Year: 2012<br />                           End Year: 2014<br /><br />                           Main Funding Group: Research Support<br />                           Grant Type (Funding Scheme): NHMRC Project Grants<br />                           Grant Sub Type: Standard Project Grant"
		}
	]
}
}
							</pre>
							</li>
							</ul></small>
							<p><br/></p>
							<hr/>
							<br/>
						<h4>2. Grants matching a certain title by a particular researcher</h4><a id="example2"></a>
						<p>
							Return all grants involving "<blue>Prof David Cook</blue>" which contain <blue>sodium channels</blue> in the title:

							<small><ul>
								<li>HTTP GET Request: <br/>
									<code>&gt;
										<a target="_blank" href="<?=registry_url("services/api/getGrants?" .
										"person=".
											rawurlencode("David Cook").
										"&title=" .
											rawurlencode("sodium channels"));?>">

										getGrants?person=<blue><?=rawurlencode("David Cook") . "</blue>" .
										 "&title=<blue>" . rawurlencode("sodium channels");?></blue>

									</code><br/></a>
									<br/>
								</li>

								<li>Service Response (in JSON format):
							<pre class="prettyprint pre-scrollable pre-small">{
    "status": "success",
    "message": {
	"numFound": 7,
	"recordData": [
	    {
		"key": "http://purl.org/au-research/grants/nhmrc/1007447",
		"slug": "how-are-sodium-channels-in-the-kidney-and-the-gastrointestinal-tract-regulated",
		"title": "How are sodium channels in the kidney and the gastrointestinal tract regulated",
		"description": "Abnormal sodium absorption in the kidney, gut and lung is implicated in hypertension, cystic fibrosis and pulmonary oedema. Epithelial Na+ channels are a key component of the mechanism by which these organs absorb sodium. The project will investigate the mechanisms by which the activity of these channels is controlled and is intended to discover new approaches to treating abnormal sodium absorption.<br /><br /> Lead Investigator: Prof David Cook<br /> <br /> Co-Investigator(s): A/Pr Anuwat Dinudom<br /> <br /> Total Grant Budget: $AUD 408,392<br /><br /> Application Year: 2010<br /> Start Year: 2011<br /> End Year: 2013<br /><br /> Main Funding Group: Research Support<br /> Grant Type (Funding Scheme): NHMRC Project Grants<br /> Grant Sub Type: Standard Project Grant",
		"relations": {
		    "isManagedBy": "University of Sydney",
		    "isPrincipalInvestigatorOf": "Prof David Cook",
		    "isParticipantIn": "A/Pr Anuwat Dinudom"
		}
	    },
	    {
		"key": "http://purl.org/au-research/grants/nhmrc/349320",
		"slug": "regulation-of-the-epithelial-sodium-channel",
		"title": "Regulation of the epithelial sodium channel",
		"description": "The epithelial sodium channel (ENaC) is a highly specific ion channel expressed in the apical membrane of some tissues. In the kidney, ENaC activity is responsible for maintaining sodium balance, blood volume and blood pressure. In the lung ENaC function is required for fluid clearance. Abnormal regulation of ENaC is associated with conditions such as hypertension, cystic fibrosis and pulmonary oedema. Delineating the molecular basis of the regulation of ENaC is vital in understanding disease mechanisms and in defining targets for novel therapeutics for the treatment of disorders that arise due to sodium imbalance. Furthermore, ENaC and the molecules involved in the channel regulatory cascade are potential candidate genes in defining the genetic causes of human hypertension and salt wasting disorders. Previous studies from our laboratories and by other groups have shown that Nedd4 and Nedd4-2 proteins are key players in regulating ENaC activity. Our recent NHMRC supported work has identified another important protein, Grk2, as a regulator of ENaC. The work proposed in this application is an extension of our recent findings and will enable us to fully define how Nedd4-Nedd4-2 and Grk2 regulate the activity of ENaC.<br /><br /> Lead Investigator: Prof Sharad Kumar<br /> <br /> Co-Investigator(s): Prof David Cook; A/Pr Anuwat Dinudom<br /> <br /> Total Grant Budget: $AUD 471,000<br /><br /> Application Year: 2004<br /> Start Year: 2005<br /> End Year: 2007<br /><br /> Main Funding Group: Research Support<br /> Grant Type (Funding Scheme): NHMRC Project Grants<br /> Grant Sub Type: Standard Project Grant",
		"relations": {
		    "isManagedBy": "University of Adelaide",
		    "isPrincipalInvestigatorOf": "Prof Sharad Kumar",
		    "isParticipantIn": [
			"Prof David Cook",
			"A/Pr Anuwat Dinudom"
		    ]
		}
	    },
	    {
		"key": "http://purl.org/au-research/grants/nhmrc/253739",
		"slug": "how-are-epithelial-sodium-channels-controlled",
		"title": "How are epithelial sodium channels controlled?",
		"description": "The regulation of sodium transport by the epithelial sodium channel is essential for the maintenance of blood pressure and the correct amount of fluid in the respiratory tract and gut. Hyperactivity of the sodium channels leads to increased blood pressure and clogging of the gut and bronchi due to dehydration of the surface fluid. Reductions in the activity of the sodium channels lead to abnormally low blood pressure and the accumulation of fluid in the lungs such as occurs in influenza, high altitude pulmonary oedema and in cardiogenic pulmonary oedema. The present project will examine the mechanisms by which sodium channels are regulated. It will focus on the mechanisms by which cytosolic chloride and inflammatory mediators regulate the activity of the channels.<br /><br /> Lead Investigator: Dr Anuwat Dinudom<br /> <br /> Co-Investigator(s): A/Pr Anuwat Dinudom; Prof David Cook; Prof John Young<br /> <br /> Total Grant Budget: $AUD 219,750<br /><br /> Application Year: 2002<br /> Start Year: 2003<br /> End Year: 2005<br /><br /> Main Funding Group: Research Support<br /> Grant Type (Funding Scheme): NHMRC Project Grants<br /> Grant Sub Type: Standard Project Grant",
		"relations": {
		    "isManagedBy": "University of Sydney",
		    "isParticipantIn": "Prof David Cook",
		    "isPrincipalInvestigatorOf": "A/Pr Anuwat Dinudom"
		}
	    },
	    {
		"key": "http://purl.org/au-research/grants/nhmrc/207708",
		"slug": "a-new-regulator-of-sodium-ion-channel-in-epithelia",
		"title": "A new regulator of sodium ion channel in epithelia",
		"description": "The epithelial sodium channel (ENaC) is a highly specific ion channel expressed in the apical membrane of some tissues. In the distal nephron of the kidney, ENaC activity is responsible for maintaining sodium balance, blood volume and blood pressure. In the lung ENaC function is required for fluid clearance. Delineating the molecular basis of the regulation of ENaC is vital in understanding disease mechanisms and in defining targets for novel therapeutics for the treatment of disorders that arise due to sodium imbalance. Furthermore, ENaC and the molecules involved in the channel regulatory cascade are potential candidate genes in defining the genetic causes of human hypertension and salt wasting disorders. Previous studies from our laboratories and by other groups have implicated Nedd4, a protein initially cloned by us, as a key player in regulating ENaC. Our recent data suggest that KIAA0439, a close relative of Nedd4, is also involved in ENaC control mechanisms. The work proposed in this application is an extension of our recent findings and will enable us to fully define how KIAA0439 regulates the activity of ENaC.<br /><br /> Lead Investigator: Prof Sharad Kumar<br /> <br /> Co-Investigator(s): Prof David Cook; A/Pr Anuwat Dinudom<br /> <br /> Total Grant Budget: $AUD 452,640<br /><br /> Application Year: 2001<br /> Start Year: 2002<br /> End Year: 2004<br /><br /> Main Funding Group: Research Support<br /> Grant Type (Funding Scheme): NHMRC Project Grants<br /> Grant Sub Type: Standard Project Grant",
		"relations": {
		    "isManagedBy": "University of Adelaide",
		    "isPrincipalInvestigatorOf": "Prof Sharad Kumar",
		    "isParticipantIn": [
			"Prof David Cook",
			"A/Pr Anuwat Dinudom"
		    ]
		}
	    },
	    {
		"key": "http://purl.org/au-research/grants/nhmrc/211138",
		"slug": "how-sodium-channels-are-controlled",
		"title": "How sodium channels are controlled",
		"description": "The regulation of transport of salt into and out of thebody is essential for the maintenance of blood pressure, and for the maintenance of the correct amount of fluid in the respiratory passages and gut. A critical component of the mechanism by which the body transports salt are sodium channels. Overactivity of these channels leads to increased blood pressure and clogging of the gut and the bronchi due to thick and sticky secretions. Reduced activity leads to abnormally low blood pressure, as well as to accumulation of fluid in the lungs such as occurs in influenza and in altitude sickness. The present project will examine the mechanisms by which sodium channels are regulated. It will particularly focus on the mechanisms by which sodium channels are switched off when the salt content of cells is too high.<br /><br /> Lead Investigator: Prof David Cook<br /> <br /> Co-Investigator(s): Prof John Young<br /> <br /> Total Grant Budget: $AUD 466,980<br /><br /> Application Year: 2001<br /> Start Year: 2002<br /> End Year: 2004<br /><br /> Main Funding Group: Research Support<br /> Grant Type (Funding Scheme): NHMRC Project Grants<br /> Grant Sub Type: Standard Project Grant",
		"relations": {
		    "isManagedBy": "University of Sydney",
		    "isPrincipalInvestigatorOf": "Prof David Cook"
		}
	    },
	    {
		"key": "http://purl.org/au-research/grants/nhmrc/153938",
		"slug": "how-are-sodium-channels-controlled-in-the-kidney",
		"title": "How are sodium channels controlled in the kidney?",
		"description": "The transport of sodium ions by the kidney, gut and lungs not only regulates blood pressure, it also regulates the amount of fluid in the gut and in the lungs. One of the most important proteins that underlie the transport of sodium in these tissues is the so-called epithelial sodium channel. The activity of these epithelial sodium channels is regulated by a wide variety of systems. Some of these regulatory systems act in response to changes in the body's requirements for sodium transport. Others act in response to changes in capacity of cells in which the sodium channels are found to continue transporting sodium. In this project we will study the mechanisms that regulate the activity of the epithelial sodium channels, and in particular, how these mechanisms interact so as to maintain a level of sodium channel activity that is appropriate to both the needs of the organism and to the needs of the sodium transporting cells. The outcomes of this project will be improved understanding of the function of the kidney, gut and lungs in both health and disease. It may also lead to novel drug targets for treatment of major diseases in which the activity of sodium channels is abnormal. These disease include hypertension, cystic fibrosis, pulmonary oedema and influenza.<br /><br /> Lead Investigator: Prof David Cook<br /> <br /> Co-Investigator(s): Prof John Young<br /> <br /> Total Grant Budget: $AUD 227,037<br /><br /> Application Year: 2000<br /> Start Year: 2001<br /> End Year: 2003<br /><br /> Main Funding Group: Research Support<br /> Grant Type (Funding Scheme): NHMRC Project Grants<br /> Grant Sub Type: Standard Project Grant",
		"relations": {
		    "isManagedBy": "University of Sydney",
		    "isPrincipalInvestigatorOf": "Prof David Cook"
		}
	    },
	    {
		"key": "http://purl.org/au-research/grants/nhmrc/990351",
		"slug": "control-of-sodium-channels",
		"title": "Control of Sodium Channels",
		"description": "Lead Investigator: Prof David Cook<br /> <br /> Total Grant Budget: $AUD 394,485<br /><br /> Application Year: 1998<br /> Start Year: 1999<br /> End Year: 2001<br /><br /> Main Funding Group: Research Support<br /> Grant Type (Funding Scheme): NHMRC Project Grants<br /> Grant Sub Type: Standard Project Grant",
		"relations": {
		    "isManagedBy": "University of Sydney",
		    "isPrincipalInvestigatorOf": "Prof David Cook"
		}
	    }
	]
    }

}
							</pre>
						</p>
						<p><br/></p>
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
								<li class="cat-item"><a href="#about">About the Research Grants API</a></li>
								<li class="cat-item"><a href="#usage">Service Usage</a></li>
								<li class="cat-item"><a href="#params">Parameters</a></li>
								<li class="cat-item"><a href="#questions">Common Questions</a></li>

								<li class="cat-item"><a href="#example1">Example Usage #1</a></li>
								<li class="cat-item"><a href="#example2">Example Usage #2</a></li>

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