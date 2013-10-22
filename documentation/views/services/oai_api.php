<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
  <div class="container section-space30"><!-- starts container -->
    <div class="row"><!-- starts row -->
      <div class="col-lg-6 col-md-6 col-sm-12">
  <h2 class="k-page-title">Collections Registry API</h2>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
  <ol class="breadcrumb pull-right">
    <li><?php echo anchor('/', 'Home'); ?></li>
    <li><?php echo anchor('/documentation/services/registry_apis', 'Collections Registry API'); ?></li>
    <li class="active">OAI-PMH Provider</li>
  </ol>
      </div>
    </div><!-- ends row -->
  </div><!-- ends container -->
</section>
<section id="k-content"><!-- starts content -->
  <div class="container"><!-- starts container -->
    <div class="row"><!-- starts row -->
<a id="about"></a>
      <div id="k-main" class="clearfix col-lg-8 col-md-8 col-sm-12"><!-- starts main content -->
  <article><!-- starts article short -->
    <div><a id="title"></a><!-- starts summary -->
      <h3 class="k-fancy-title"><!-- title -->
        <a href="#" title="OAI-PMH Provider Documentation">OAI-PMH Provider Documentation</a>
      </h3>
 
      <p><!-- text -->
        OAI-PMH is a standard <a href="http://www.openarchives.org/OAI/openarchivesprotocol.html" target="_blank">protocol for metadata harvesting</a> 
        published by the <a href="http://www.openarchives.org/" target="_blank">Open Archives Initiative</a>. It is commonly used as a protocol to 
        harvest metadata from Data Providers (such as the ANDS Registry) to Service Providers (such as your application).
      </p>

      <p>
        OAI-PMH is a good choice when your software system already implements a "harvester" (a software application that can extract and collate metadata records from the OAI provider). 
      </p>
      <p>
      	Unlike the other the <?=anchor('services/registry_apis','Collection Registry APIs');?>, the OAI-PMH provider only supports a few methods of selective harvesting (based on group, data source and record class). There are no
      	complex search capabilities. 
      </p>

      <p>One significant advantage of using OAI-PMH is the ability to harvest "incrementally", based on timestamp. This allows you to only retrieve records that have changed
      	since the last time your harvest successfully executed. Further, the OAI-PMH metadata also indicates when a record has been deleted from the registry (a feature not
      	supported in any of the other <?=anchor('services/registry_apis','Collection Registry APIs');?>).<p>

      <p><br/></p>

      <h3 class="k-fancy-title"><a id="usage"></a>Service Usage</h3>

      <h4><a id="service"></a>Resource URL</h4>
      <blockquote><code><?=registry_url('services/');?><green>oai</green></code></blockquote>

      <div class="alert alert-success">
      	This API is an implementation of the <a href="http://www.openarchives.org/pmh/" target="_blank">OAI-PMH protocol</a>. Please consult the specification for implementation details.
 	  </div>

      <!--h4><a id="parameters"></a>Supported parameters:</h4>
							there must be 1 or more parameters defined in the query <br />
							<ul><li><b>verb</b><br />
								   <label> Identify</label>	<em>(Description of Repository)</em><br />
								   <label> ListSets</label>	<em>(Sets defined by Repository)</em><br />
								   <label> ListMetadataFormats</label> <em>(Metadata formats supported by Repository)</em><br />
								   <label> ListIdentifiers</label> <em>(OAI unique ids contained in Repository)</em><br />
								   <label> ListRecords</label> <em>(Listing of N records in Repository)</em><br />
								   <label> GetRecord</label> <em>(Listing of a single record from Repository</em><br />
								</li>
								<li><b>metadataPrefix</b> <br />
									<label> rif </label>  <em> (To receive rif-cs xml records)</em> (<a href="http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">schema</a>)<br />
									<label> extRif </label> <em> (To receive extended rif-cs xml records)</em><br />
									<label> oai_dc </label> <em> (To receive Dublin Core xml records)</em>  (<a href="http://www.openarchives.org/OAI/2.0/oai_dc.xsd">schema</a>)<br />
								</li>
								<li><b>identifier</b><br />
								<label>&ltrecord key&gt</label>	<em> (To obtain 1 record with the given key)</em>	</li>	
								<li><b>set</b><br />
								<label>&ltsetName&gt:&ltsetSpec&gt</label>	<em> (To selectively harvest by set group, datasource or class)</em>	</li>
								<li><b>from</b><br />
								<label>&ltYYYY-MM-DD&gt</label>	<em> (To selectively harvest by date)</em>	</li>	
								<li><b>until</b><br />
								<label>&ltYYYY-MM-DD&gt</label>	<em> (To selectively harvest by date)</em>	</li>	
								<li><b>resumptionToken</b><br />
								<label>&ltservice_provided_token&gt</label>	<em> (To obtain next list of records)</em>	</li>					
						</ul-->

      <!--h4>Common Questions</h4><a id="questions"></a>
      <small>
      <ul>
        <li><u>What do the fields in <code>extRif:extendedMetadata</code> actually mean?</u>
    <p>We are still working on documenting the extRif namespace properly, however, we suggest you refer to the <a href="<?=base_url('documentation/services/indexed_fields');?>">Indexed Fields List</a> as many of these are mapped directly out of the extended metadata.</p></li>

      </ul>
      </small>

      <p><br/></p-->
      <p><br/></p>

      <h3 class="k-fancy-title"><a id="example1"></a>Example Usage</h3>

   


    <h4>1. Retrieving information about this OAI-PMH provider</h4><a id="example2"></a>
      <p>
        <small><ul>
    <li>HTTP GET Request: <br/>
    
      <code>&gt;
        <a target="_blank" href="<?=registry_url("services/oai?verb=Identify");?>">

        services/oai?<blue>verb=Identify</blue>

      </code><br/></a>
      <br/>
    </li>

    <li>Service Response:
      <pre class="prettyprint pre-scrollable pre-small"><?=htmlentities('<?xml version="1.0" encoding="UTF-8"?>
<OAI-PMH xmlns="http://www.openarchives.org/OAI/2.0/"
         xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	 xsi:schemaLocation="http://www.openarchives.org/OAI/2.0/ http://www.openarchives.org/OAI/2.0/OAI-PMH.xsd">	<responseDate>2013-10-16T01:21:18Z</responseDate>
	<request verb="Identify">http://researchdata.ands.org.au/registry/services/oai</request>
	<Identify>
		<repositoryName>Australian National Data Service (ANDS)</repositoryName>
		<baseUrl>http://researchdata.ands.org.au/registry/</baseUrl>
		<protocolVersion>2.0</protocolVersion>
		<earliestTimestamp>2010-01-12T05:03:58+Z</earliestTimestamp>
		<deletedRecord>transient</deletedRecord>
		<granularity>YYYY-MM-DDThh:mm:ssZ</granularity>
		<adminEmail>services@ands.org.au</adminEmail>
	</Identify>
</OAI-PMH>');?></pre>
        </li>
        </ul></small>
        <p><br/></p>
        <hr/>

    <h4>2. Retrieving which sets are available for selective harvesting</h4><a id="example2"></a>
      <p>
        <small><ul>
    <li>HTTP GET Request: <br/>
    
      <code>&gt;
        <a target="_blank" href="<?=registry_url("services/oai?verb=ListSets");?>">

        services/oai?<blue>verb=ListSets</blue>

      </code><br/></a>
      <br/>
    </li>

    <li>Service Response:
      <pre class="prettyprint pre-scrollable pre-small"><?=htmlentities('<?xml version="1.0" encoding="UTF-8"?>
<OAI-PMH xmlns="http://www.openarchives.org/OAI/2.0/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.openarchives.org/OAI/2.0/ http://www.openarchives.org/OAI/2.0/OAI-PMH.xsd">
<responseDate>2013-10-22T01:49:52Z</responseDate>
<request verb="ListSets">http://researchdata.ands.org.au/registry/services/oai</request>
<ListSets>
	<set>
	<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
	<setName>Breast Cancer Tissue Bank</setName>
	</set>
	<set>
	<setSpec>datasource:Australian-Institute-of-Marine-Science-Metadata-Catalogue</setSpec>
	<setName>Australian Institute of Marine Science Metadata Catalogue</setName>
	</set>
	<set>
	<setSpec>datasource:Australian-Centre-for-Microscopy-Microanalysis</setSpec>
	<setName>Australian Centre for Microscopy Microanalysis</setName>
	</set>
	<set>
	<setSpec>datasource:Australian-Historical-Archaeology-Database</setSpec>
	<setName>Australian Historical Archaeology Database</setName>
	</set>
	<set>
	<setSpec>datasource:UTS-Seeding-the-Commons</setSpec>
	<setName>UTS – Seeding the Commons</setName>
	</set>
	<set>
	<setSpec>datasource:University-of-Western-Australia-Harvester</setSpec>
	<setName>University of Western Australia Harvester</setName>
	</set>
	<set>
	<setSpec>datasource:Victoria-University</setSpec>
	<setName>Victoria University</setName>
	</set>
	<set>
	<setSpec>datasource:QFAB2</setSpec>
	<setName>QFAB2</setName>
	</set>
	<set>
	<setSpec>datasource:Australian-Supersite-Network</setSpec>
	<setName>Australian Supersite Network</setName>
	</set>

	<set>
	<setSpec>class:collection</setSpec>
	<setName>collection</setName>
	</set>
	<set>
	<setSpec>class:service</setSpec>
	<setName>service</setName>
	</set>
	<set>
	<setSpec>class:activity</setSpec>
	<setName>activity</setName>
	</set>
	<set>
	<setSpec>class:party</setSpec>
	<setName>party</setName>
	</set>

	<set>
	<setSpec>group:Australian0x20Ocean0x20Data0x20Network</setSpec>
	<setName>Australian0x20Ocean0x20Data0x20Network</setName>
	</set>
	<set>
	<setSpec>group:Commonwealth0x20Scientific0x20and0x20Industrial0x20Research0x20Organisation</setSpec>
	<setName>Commonwealth0x20Scientific0x20and0x20Industrial0x20Research0x20Organisation</setName>
	</set>
	<set>
	<setSpec>group:Curtin0x20University</setSpec>
	<setName>Curtin0x20University</setName>
	</set>
	<set>
	<setSpec>group:Integrated0x20Marine0x20Observing0x20System</setSpec>
	<setName>Integrated0x20Marine0x20Observing0x20System</setName>
	</set>
	<set>
	<setSpec>group:James0x20Cook0x20University</setSpec>
	<setName>James0x20Cook0x20University</setName>
	</set>
	<set>
	<setSpec>group:University0x20of0x20Western0x20Sydney</setSpec>
	<setName>University0x20of0x20Western0x20Sydney</setName>
	</set>
	<set>
	<setSpec>group:University0x20of0x20Wollongong</setSpec>
	<setName>University0x20of0x20Wollongong</setName>
	</set>
	<set>
	<setSpec>group:Urban0x20Water</setSpec>
	<setName>Urban0x20Water</setName>
	</set>
	<set>
	<setSpec>group:Urban0x20Water0x20Security0x20Research0x20Alliance</setSpec>
	<setName>Urban0x20Water0x20Security0x20Research0x20Alliance</setName>
	</set>
	<set>
	<setSpec>group:Victoria0x20University</setSpec>
	<setName>Victoria0x20University</setName>
	</set>
	<set>
	<setSpec>group:Victorian0x20Institute0x20of0x20Sport</setSpec>
	<setName>Victorian0x20Institute0x20of0x20Sport</setName>
	</set>
</ListSets>
</OAI-PMH>');?></pre>
        </li>
        </ul></small>
        <p><br/></p>
        <hr/>


    <h4>1. Retrieving records for a particular set</h4><a id="example2"></a>
      <p>
        <small><ul>
    <li>HTTP GET Request: <br/>
    
      <code>&gt;
        <a target="_blank" href="<?=registry_url("services/oai?verb=ListRecords&set=group:Victorian0x20Institute0x20of0x20Sport&metadataPrefix=rif");?>">

        services/oai?<blue>verb=ListRecords</blue>&amp;set=<green>group:Victorian0x20Institute0x20of0x20Sport</green>&amp;<blue>metadataPrefix=rif</blue>

      </code><br/></a>
      <br/>
    </li>

    <li>Service Response:
      <pre class="prettyprint pre-scrollable pre-small"><?=htmlentities('<?xml version="1.0" encoding="UTF-8"?>
<OAI-PMH xmlns="http://www.openarchives.org/OAI/2.0/"
         xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	 xsi:schemaLocation="http://www.openarchives.org/OAI/2.0/ http://www.openarchives.org/OAI/2.0/OAI-PMH.xsd">	<responseDate>2013-10-22T01:55:58Z</responseDate>
	<request verb="ListRecords" set="group:Victorian0x20Institute0x20of0x20Sport" metadataPrefix="rif">http:/researchdata.ands.org.au/registry/services/oai</request>
	<ListRecords>
		<record>
			<header>
				<identifier>oai:ands.org.au::19601</identifier>
				<datestamp>2012-01-18T23:30:37Z</datestamp>
				<setSpec>datasource:Victoria-University</setSpec>
				<setSpec>class:party</setSpec>
				<setSpec>group:Victorian0x20Institute0x20of0x20Sport</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Victorian Institute of Sport">
				    <key>102.100.100/6891</key>
				    <originatingSource>http://services.ands.org.au/sandbox/orca/register_my_data</originatingSource>
				    <party type="group" dateModified="2011-06-29T00:00:00Z">
				      <identifier type="handle">102.100.100/6891</identifier>
				      <name type="primary">
				        <namePart type="title">Victorian Institute of Sport (VIS)</namePart>
				      </name>
				      <location>
				        <address>
				          <electronic type="url">
				            <value>http://www.vis.org.au/</value>
				          </electronic>
				          <physical type="postalAddress">
				            <addressPart type="faxNumber">+61 3 9425 0100</addressPart>
				            <addressPart type="telephoneNumber">+61 3 9425 0000</addressPart>
				            <addressPart type="addressLine">PO Box 12608,  A\'Beckett St, Melbourne VIC 8006</addressPart>
				          </physical>
				        </address>
				        <spatial type="kmlPolyCoords">144.980494,-37.824249</spatial>
				      </location>
				      <relatedObject>
				        <key>102.100.100/6886</key>
				        <relation type="isFunderOf"/>
				      </relatedObject>
				      <relatedObject>
				        <key>102.100.100/6885</key>
				        <relation type="hasAssociationWith"/>
				      </relatedObject>
				      <relatedObject>
				        <key>102.100.100/6893</key>
				        <relation type="hasMember"/>
				      </relatedObject>
				      <relatedObject>
				        <key>102.100.100/7214</key>
				        <relation type="isFunderOf"/>
				      </relatedObject>
				      <subject type="anzsrc-for">1106</subject>
				      <description type="brief">The VIS was set up to assist the development of Victoria\'s best athletes. It was established in 1990 by the State Government as a private trustee company, with its Board of Directors appointed by the Victorian Minister for Sport. The VIS is funded by the State Government through Sport and Recreation Victoria, the Commonwealth Government through the Australian Sports Commission and numerous corporate sector sponsors. The VIS provides programs in partnership with State Sporting Organisations, and also offers advanced and specialised coaching, sports science and sports medicine services, career and education advice, and training and competition support are provided to VIS athletes, as well as offering emerging elite athletes from country Victoria assistance through Regional Academy of Sport programs.</description>
				    </party>
				  </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::19620</identifier>
				<datestamp>2012-01-18T23:30:37Z</datestamp>
				<setSpec>datasource:Victoria-University</setSpec>
				<setSpec>class:party</setSpec>
				<setSpec>group:Victorian0x20Institute0x20of0x20Sport</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Victorian Institute of Sport">
				    <key>102.100.100/6893</key>
				    <originatingSource>http://services.ands.org.au/sandbox/orca/register_my_data</originatingSource>
				    <party type="person">
				      <identifier type="handle">102.100.100/6893</identifier>
				      <name type="primary">
				        <namePart type="family">Dwyer</namePart>
				        <namePart type="given">Dan</namePart>
				        <namePart type="title">Dr</namePart>
				      </name>
				      <location>
				        <address>
				          <physical type="postalAddress">
				            <addressPart type="addressLine">PO Box 12608,\'Beckett St, Melbourne VIC 8006</addressPart>
				          </physical>
				        </address>
				      </location>
				      <relatedObject>
				        <key>102.100.100/7214</key>
				        <relation type="isParticipantIn"/>
				      </relatedObject>
				      <relatedObject>
				        <key>102.100.100/6886</key>
				        <relation type="hasAssociationWith"/>
				      </relatedObject>
				      <relatedObject>
				        <key>102.100.100/6891</key>
				        <relation type="isMemberOf"/>
				      </relatedObject>
				      <subject type="anzsrc-for">1106</subject>
				      <description type="brief">Specialties in cycling science, fatigue in the brain during exercise and after training, monitoring training intensity and volume, the use of technology in sport science, weight loss, exercise and immune function.</description>
				    </party>
				  </registryObject></registryObjects>
			</metadata>
		</record>
	</ListRecords>
</OAI-PMH>');?></pre>
        </li>
        </ul></small>
        <p><br/></p>

        <br/>
  </article><!-- ends article short -->
      </div><!-- ends main content -->

      <aside id="k-sidebar" class="col-lg-3 col-md-4 col-sm-12 col-lg-offset-1"><!-- starts sidebar -->
  <div id="k-sidebar-splitter" class="clearfix section-space60"><span></span></div>
  <div class="sticky" style="position: fixed; top: 200px; width: 262px;">

    <ul id="k-sidebar-list" class="anchor_links list-unstyled">

      <!--li class="widget widget_search clearfix">
        <form action="" id="searchform" method="get" role="search">
    <div class="input-group">
      <input type="text" name="s" id="s" class="form-control" autocomplete="off" placeholder="Search...">
      <span class="input-group-btn"><button class="btn btn-default" type="button">SEARCH</button></span>
    </div>
        </form>
      </li-->

      <li class="widget widget_categories clearfix sticky">
        <h2 class="widget-title">Select from the menu...<span class="k-widget-title-tit"></span></h2>
        <ul class="anchor_links">
    <li class="cat-item"><a href="#about">About the OAI-PMH Provider</a></li>
    <li class="cat-item"><a href="#usage">Service Usage</a></li>

    <li class="cat-item"><a href="#example1">Example Usage</a></li>

    <li class="cat-item"><a href="http://researchdata.ands.org.au/home/disclaimer" target="_blank">Usage Disclaimer</a></li>
        </ul>

        <div class="clearfix">
    <div class="alert alert-warning">
    <b>Need help?</b> <br/>
    Visit the <?=anchor($this->config->item('developer_community_portal'),'Community Support Forum');?>
        </div>
      </li>


      </div>

    </ul>
  </div>
      </aside><!-- ends sidebar -->

    </div><!-- ends row -->

  </div><!-- ends container -->

  </section>
<?php $this->load->view('developer_footer'); ?>