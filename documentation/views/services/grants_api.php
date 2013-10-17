<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">Grants API Documentation</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ol class="breadcrumb pull-right">
					<li><?php echo anchor('/', 'Home'); ?></li>
					<li><?php echo anchor('/documentation/services/', 'Services'); ?></li>
					<li class="active"><?php echo anchor('/documentation/services/grants', 'Grants'); ?></li>
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
					<div><a id="title"></a><!-- starts summary -->
						<h3 class="k-article-title"><!-- title -->
							<a href="#" title="Grants API Documentation">Grants API Documentation</a>
						</h3>
						<p><!-- text -->
						Grants API is a services provided by ANDS to organisations who signed up to an API key.
						The service provides a searchable index for all NHMRC grants stored in the ANDS Registry.
						</p>
						<h4><a id="access"></a>Accessing the Service</h4>
						<p>Institutions and individuals who would like to have access to this services must get an API key by contacting our services manager by email: <a href="mailto:services@ands.oprg.au">services@ands.oprg.au</a></p>
						<h4><a id="service"></a>Grants Service URL</h4>
						<p>The Grants api is accessible through our service point through our services portal: <br/><code><?=registry_url('services/');?>{your API KEY}/getGrant?{params}</code></p>
						<ul><a id="parameters"></a><h5>Parameters:</h5><br/>
							there must be 1 or more parameter defined in the query <br>to reduce the size of the response and to get a more accurate list, it is recommended that API calls contain more than 1 parameters
							<li><b>title</b> (the title or part of the title of the grant)</li>
							<li><b>institution</b> (the organisation related to the record with relationship 'isManagedBy')</li>
							<li><b>principalInvestigator</b> (a party related to the record with relationship 'isPrincipalInvestigatorOf')</li>
							<li><b>person</b> (any party related to the grant)</li>
						</ul>
						<h4><a id="examples"></a>API call Examples</h4>
						<p>
							<a href="../../../registry/services/API/getGrant?institution=Queensland%20University%20of%20Technology&amp;principalInvestigator=Patrick">?institution=Queensland%20University%20of%20Technology&amp;principalInvestigator=Patrick</a>
							<pre class="prettyprint pre-scrollable">
{
  status: "success",
  message: {
  numFound: 2,
  recordData: [
    {
      key: "http://purl.org/au-research/grants/nhmrc/1031221",
      slug: "to-study-how-prostate-tumor-metastasizes-to-bone",
      title: "To study how prostate tumor metastasizes to bone",
      description: "Bone metastasis occurs in more than 80% of cases of advanced prostate cancer (PCa), and is the major cause of morbidity and mortality in PCa patients. Understanding why PCa cells preferentially metastasize to bone may lead to the the development of novel therapy for inhibiting PCa metastasis. This project will study how the bone cell-secreted protein angiopoietin-1 promotes the metastasis of PCa cells to bone and whether inactivation of this protein can inhibit PCa bone metastasis.<br /> <br /> Lead Investigator: Dr Ming Tat (Patrick) Ling<br /> <br /> Co-Investigator(s): Prof Judith Clements; Prof Colleen Nelson<br /> <br /> Total Grant Budget: $AUD 555,400<br /> <br /> Application Year: 2011<br /> Start Year: 2012<br /> End Year: 2014<br /> <br /> Main Funding Group: Research Support<br /> Grant Type (Funding Scheme): NHMRC Project Grants<br /> Grant Sub Type: Standard Project Grant",
      relations: {
	isManagedBy: "Queensland University of Technology",
	isParticipantIn: [
	  "Prof Judith Clements",
	  "Prof Colleen Nelson"
	],
	isPrincipalInvestigatorOf: "Dr Ming Tat (Patrick) Ling"
      }
    },
    {
      key: "http://purl.org/au-research/grants/nhmrc/1031228",
      slug: "to-identify-a-new-therapeutic-target-for-the-treatment-of-prostate-cancer",
      title: "To identify a new therapeutic target for the treatment of prostate cancer",
      description: "Advanced prostate cancer (PCa) remains the major therapeutic challenge since neither surgery nor systemic therapies are effective at this stage. Recently, we identified a protein called PACE-1 that is essential for PCa cell survival. We plan to investigate the roles of PACE-1 in the development and progression of prostate cancer. We will then test if PACE-1 inactivation alone or in combination with systemic cancer therapies will inhibit prostate tumor growth and disease progression.<br /> <br /> Lead Investigator: Dr Ming Tat (Patrick) Ling<br /> <br /> Co-Investigator(s): Prof Ronald Quinn; Prof Pamela Russell<br /> <br /> Total Grant Budget: $AUD 602,253<br /> <br /> Application Year: 2011<br /> Start Year: 2012<br /> End Year: 2014<br /> <br /> Main Funding Group: Research Support<br /> Grant Type (Funding Scheme): NHMRC Project Grants<br /> Grant Sub Type: Standard Project Grant",
      relations: {
	 isManagedBy: "Queensland University of Technology",
	 isParticipantIn: [
	    "Prof Pamela Russell",
	    "Prof Ronald Quinn"
	 ],
	 isPrincipalInvestigatorOf: "Dr Ming Tat (Patrick) Ling"
     }
    }
  ]
 }
}
							</pre>
							<br/>
							<a href="../../../registry/services/API/getGrant?title=sodium%20channels&amp;person=david%20cook">?title=sodium%20channels&amp;person=david%20cook</a>
							<pre class="prettyprint pre-scrollable">
{

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
				<ul id="k-sidebar-list" class="list-unstyled">

					<li class="widget widget_search clearfix">
						<form action="" id="searchform" method="get" role="search">
							<div class="input-group">
								<input type="text" name="s" id="s" class="form-control" autocomplete="off" placeholder="Search...">
								<span class="input-group-btn"><button class="btn btn-default" type="button">SEARCH</button></span>
							</div>
						</form>
					</li>

					<li class="widget widget_categories clearfix">
						<h2 class="widget-title">Select from the menu...<span class="k-widget-title-tit"></span></h2>
						<ul>
							<li class="cat-item"><a href="#title" title="Grants API Documentation">Grants API Documentation</a></li>
							<li class="cat-item"><a href="#access" title="Accessing the Service">Accessing the Service</a></li>
							<li class="cat-item"><a href="#service" title="Grants Service URL">Grants Service URL</a></li>
							<li class="cat-item"><a href="#parameters" title="Parameters">Parameters</a></li>
							<li class="cat-item"><a href="#examples" title="API call Examples">API call Examples</a></li>
						</ul>
					</li>

				</ul>
			</aside><!-- ends sidebar -->

		</div><!-- ends row -->

	</div><!-- ends container -->

	</section>
<?php $this->load->view('developer_footer'); ?>