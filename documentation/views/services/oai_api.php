<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">OAI API Documentation</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ol class="breadcrumb pull-right">
					<li><?php echo anchor('/', 'Home'); ?></li>
					<li><?php echo anchor('/documentation/services/', 'Services'); ?></li>
					<li class="active"><?php echo anchor('/documentation/services/oai', 'OAI'); ?></li>
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
							<a href="#" id="OAI API Documentation">OAI API Documentation</a>
						</h3>
						<p><!-- text -->
						Research Data Australia uses the Open Archives Initiative Protocol to expose metadata to harvesters. General and technical information about the protocol is available at http://www.openarchives.org.
						OAI API is a service provided by ANDS to the Australian research community.
						</p>					
						<h4><a id="service"></a>OAI Service URL</h4>
						<p>The OAI API is accessible through our service point through our services portal: <br/><code><?=registry_url('services/oai/');?></code></p>
						<h4><a id="parameters"></a>Parameters:</h4>
							there must be 1 or more parameter defined in the query <br />
							<ul><li><b>verb</b><br />
										   <label> Identify</label>	<em>(Description of Repository)</em><br />
										   <label> ListSets</label>	<em>(Sets defined by Repository)</em><br />
										   <label> ListMetadataFormats</label> <em>(Metadata formats supported by Repository)</em><br />
										   <label> ListIdentifiers</label> <em>(OAI unique ids contained in Repository)</em><br />
										   <label> ListRecords</label> <em>(Listing of N records in Repository)</em><br />
										   <label> GetRecord</label> <em>(Listing of a single record from Repository</em><br /></li>
							<li><b>metadataPrefix</b> <br />
											<label> rif </label>  <em> (To receive rif-cs xml records)</em> <a href="http://services.ands.org.au/documentation/rifcs/1.3/schema/registryObjects.xsd">Schema</a><br />
											<label> extRif </label> <em> (To receive extended rif-cs xml records)</em><br />
											<label> oai_dc </label> <em> (To receive Dublin Core xml records)</em>  <a href="http://www.openarchives.org/OAI/2.0/oai_dc.xsd">Schema</a><br /></li>
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
						</ul>
						<h4><a id="examples"></a>API call Examples</h4>
						<p>
							<a href="../../../registry/services/oai?verb=Identify">?verb=Identify</a>
							<pre class="prettyprint pre-scrollable"><?php print htmlentities('
<?xml version="1.0" encoding="UTF-8"?>
<OAI-PMH xmlns="http://www.openarchives.org/OAI/2.0/"
         xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	 xsi:schemaLocation="http://www.openarchives.org/OAI/2.0/ http://www.openarchives.org/OAI/2.0/OAI-PMH.xsd">	<responseDate>2013-10-16T01:21:18Z</responseDate>
	<request verb="Identify">http://researchdata.ands.org.au/registry/registry/services/oai</request>
	<Identify>
		<repositoryName>Australian National Data Service (ANDS)</repositoryName>
		<baseUrl>http://researchdata.ands.org.au/registry/</baseUrl>
		<protocolVersion>2.0</protocolVersion>
		<earliestTimestamp>2010-01-12T05:03:58+Z</earliestTimestamp>
		<deletedRecord>transient</deletedRecord>
		<granularity>YYYY-MM-DDThh:mm:ssZ</granularity>
		<adminEmail>services@ands.org.au</adminEmail>
	</Identify>
</OAI-PMH>') ?>
							</pre>
						</p>
						<p>
							<a href="../../../registry/services/oai/?verb=GetRecord&metadataPrefix=rif&identifier=abctb.org.au%2011">?verb=GetRecord&metadataPrefix=rif&identifier=abctb.org.au%2011</a>
						
<pre class="prettyprint pre-scrollable"><?php print htmlentities('<?xml version="1.0" encoding="UTF-8"?>
<OAI-PMH xmlns="http://www.openarchives.org/OAI/2.0/"
         xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	 xsi:schemaLocation="http://www.openarchives.org/OAI/2.0/ http://www.openarchives.org/OAI/2.0/OAI-PMH.xsd">	<responseDate>2013-10-16T01:23:08Z</responseDate>
	<request verb="GetRecord" metadataPrefix="rif" identifier="abctb.org.au 11">http://researchdata.ands.org.au/registry/registry/services/oai</request>
	<GetRecord>
		<record>
			<header>
				<identifier>oai:ands.org.au::60174</identifier>
				<datestamp>2013-07-08T23:46:30Z</datestamp>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 11</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 11</identifier>
				            <name type="primary">
				              <namePart>BCTB Blood Serum Samples</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            <!-- Related to the other Specimen Types -->
				            <!-- Blood -->
				            <relatedObject>
				                <key>abctb.org.au 7</key>
				                <relation type="isPartOf"/>
				            </relatedObject>
				            
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				            
				            
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB blood sample subcollection consists of serum samples. Serum is the fluid constituent of blood.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
	</GetRecord>
</OAI-PMH>') ?>
							</pre>
						</p>
						<p>
							<a href="../../../registry/services/oai/?verb=ListRecords&from=2013-10-01&until=2013-10-02&metadataPrefix=rif&set=class%3Acollection">?verb=ListRecords&from=2013-10-01&until=2013-10-02&metadataPrefix=rif&set=class<?php print htmlentities(':') ?>collection</a>
<pre class="prettyprint pre-scrollable"><?php print htmlentities('
<?xml version="1.0" encoding="UTF-8"?>
<OAI-PMH xmlns="http://www.openarchives.org/OAI/2.0/"
         xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	 xsi:schemaLocation="http://www.openarchives.org/OAI/2.0/ http://www.openarchives.org/OAI/2.0/OAI-PMH.xsd">	<responseDate>2013-10-16T02:04:28Z</responseDate>
	<request verb="ListRecords" from="2013-10-01" until="2013-10-02" metadataPrefix="rif" set="class:collection">http://researchdata.ands.org.au/registry/registry/services/oai</request>
	<ListRecords>
		<record>
			<header>
				<identifier>oai:ands.org.au::2747</identifier>
				<datestamp>2013-10-01T05:47:57Z</datestamp>
				<setSpec>datasource:charles-darwin-university-redbox</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Charles0x20Darwin0x20University</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Charles Darwin University">
				    <key>CDU-Collection-0001</key>
				    <originatingSource type="">http://researchdata.ands.org.au/registry/orca/register_my_data</originatingSource>
				    <collection type="dataset">
				      <name type="primary">
				        <namePart>Living Archive of Aboriginal Languages</namePart>
				      </name>
				      <description type="full">&amp;lt;p&amp;gt;COLLECTION &amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;The Living Archive of Aboriginal Languages (www.cdu.edu.au/laal) is a digital archive of endangered literature in approximately 25 Australian Indigenous languages from the Northern Territory, starting with books which were produced in NT Literature Production Centres during the era of bilingual education between 1973 and 2000. Approximately 4000 texts have been identified from 20 Literature Production Centres (most now closed), and due to the demise of bilingual programs, many of the materials produced for these programs are no longer in use, and in many places are being lost, damaged or, occasionally, deliberately destroyed. &amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;The collection has been formed via interaction with language owners, who have been asked for permission to put the books in the archive, invited to make comments about them and asked if they would be happy to be contacted for further collaborative research work. Setting up the repository involves identifying and sourcing the books, scanning and digitising them, converting them to text files and checking both texts and metadata. &amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;The collection includes a wide range of materials developed in the bilingual programs for use in the classroom, but also for the wider community. They included teaching materials, literacy primers, children’s stories, stories of local cultural significance, such as non-sacred versions of Dreaming or Creation stories, histories, experience stories, natural science, instructional manuals, cautionary tales, environmental knowledge, traditional practices, oral literature, and ethno-botany texts. &amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;The materials derive from bilingual education programs in the following remote communities of the Northern Territory: Angurugu, Areyonga, Barunga, Galiwin’ku, Gunbalanya (Oenpelli), Kaltukatjara (Docker River), Lajamanu, Ltyentye Apurte (Santa Teresa), Maningrida, Milingimbi, Nguiu (Wurrumiyanga), Numbulwar, Papunya, Umbakumba, Wadeye, Waḻungurru (Kintore), Warruwi, Willowra, Yipirinya, Yirrkala and Yuendumu. &amp;lt;br /&amp;gt;The languages represented in the archive include: Anindilyakwa, Burarra, Dalabon, Dhuwal (including Djapu and Djambarrpuyŋu), Dhuwala, (including Gumatj and Gupapuyŋu), Djaŋu (including Warramiri), Djauan (Jawoyn), Djinaŋ, Eastern Arrernte, Gunwinggu (Kunwinjku), Gurrogoni, Kriol, Maung, Murrinh-Patha, Ndjébbana, Ngandi, Nunggubuyu (Wubuy), Pintupi-Luritja, Pitjantjatjara, Rembarrnga, Ritharrŋu, Tiwi, Warlpiri and Western Arrernte, with occasional items from other languages. &amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;The dataset is available online through www.cdu.edu.au/laal, which uses a custom-built interface to the materials stored on Charles Darwin University Library’s open source Fez and Fedora based research repository, known as eSpace. The dataset includes presentation copies of the materials – with PDF versions for display and printing, plus plain text files (in Unicode). The preservation versions (TIFF files of each digitised page) will be available on application. The metadata is compatible with OLAC (Open Language Archives Community) standards, and so can be easily harvested through search engines. &amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;Contact: &amp;lt;a href="mailto:livingarchive@cdu.edu.au"&amp;gt;livingarchive@cdu.edu.au &amp;lt;/a&amp;gt;&amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;ANDS Collection description for http://researchdata.ands.org.au/living-archive-of-aboriginal-languages&amp;lt;/p&amp;gt;</description>
				      <rights>
				        <rightsStatement>CDU is committed to providing a research environment that will promote a high standard of professional conduct by its researchers, and a culture of research practice that is ethical, competent, safe and accountable. This research was conducted in accordance with the principles outlined in relevant Commonwealth and Northern Territory legislation and guidelines, and other University policies, procedures and guidelines. National guidelines that this research adhered to include: * The Australian Code for the Responsible Conduct of Research (http://www.nhmrc.gov.au/guidelines/publications/r39)* Values and Ethics: Guidelines for Ethical Conduct in Aboriginal and Torres Strait Islander Health (http://www.nhmrc.gov.au/guidelines/publications/e52)* National Statement on Ethical Conduct in Human Research (http://www.nhmrc.gov.au/guidelines/publications/e72)* AIATSIS Guidelines for Ethical Research in Australian Indigenous Studies (http://www.aiatsis.gov.au/research/docs/ethics.pdf)* Aboriginal and Torres Strait Islander Protocols for Libraries, Archives and Information Services (http://aiatsis.gov.au/atsilirn/protocols.php)These documents are all relevant to CDU policies and guidelines.</rightsStatement>
				        <licence type="" rightsUri=""/>
				        <accessRights type="" rightsUri="">Records will become publicly accessible in the second half of 2013. Until then, to access a record contact livingarchive@cdu.edu.au</accessRights>
				      </rights>
				      <identifier type="local">CDU-Collection-0001</identifier>
				      <dates type="dc.created">
				        <date type="dateFrom" dateFormat="W3CDTF">2012-07-13T00:00:00Z</date>
				      </dates>
				      <location>
				        <address>
				          <electronic type="email">
				            <value>livingarchive@cdu.edu.au</value>
				          </electronic>
				          <physical type="postalAddress">
				            <addressPart type="addressLine">Living Archive of Aboriginal Languages The Northern Institute Charles Darwin University Darwin, NT 0909 Australia</addressPart>
				          </physical>
				        </address>
				      </location>
				      <coverage>
				        <temporal>
				          <date type="dateFrom" dateFormat="W3CDTF">1973</date>
				          <date type="dateTo" dateFormat="W3CDTF">2000</date>
				        </temporal>
				        <spatial type="kmlPolyCoords">137.999009,-10.965880 129.000424,-10.965880 129.000424,-26.016870 137.999009,-26.016870 137.999009,-10.965880</spatial>
				      </coverage>
				      <relatedObject>
				        <key>CDU-Party-0005</key>
				        <relation type="isManagedBy"/>
				      </relatedObject>
				      <relatedObject>
				        <key>CDU-Party-0004</key>
				        <relation type="isManagedBy"/>
				      </relatedObject>
				      <relatedObject>
				        <key>CDU-Activity-0001</key>
				        <relation type="isOutputOf"/>
				      </relatedObject>
				      <relatedObject>
				        <key>CDU-Party-0001</key>
				        <relation type="isManagedBy"/>
				      </relatedObject>
				      <subject type="anzsrc-for">2003</subject>
				    </collection>
				  </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::2748</identifier>
				<datestamp>2013-10-01T05:48:19Z</datestamp>
				<setSpec>datasource:charles-darwin-university-redbox</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Charles0x20Darwin0x20University</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Charles Darwin University">
				    <key>CDU-Collection-0003</key>
				    <originatingSource type="">http://researchdata.ands.org.au/registry/orca/register_my_data</originatingSource>
				    <collection type="collection">
				      <name type="alternative">
				        <namePart>Landsat Burnt Area 106-69: 2000</namePart>
				      </name>
				      <name type="primary">
				        <namePart>Maps of Litchfield National Park, Northern Territory, Affected by Fire</namePart>
				      </name>
				      <description type="full">&amp;lt;p&amp;gt;Burnt area (BA) maps are the location and extent of areas affected by fire for significant areas of the Northern Territory (e.g. national parks, protected areas, field military training areas) derived from Earth Observation Satellites (EOS). The EOSs preferred are the Landsat (NASA/USGS) series which offer the best possible historical spatial resolution at an affordable cost.&amp;lt;/p&amp;gt;
				&amp;lt;div&amp;gt;This dataset is for maps of Litchfield National Park, showing areas affected by fire. &amp;lt;/div&amp;gt;
				&amp;lt;div&amp;gt; &amp;lt;/div&amp;gt;
				&amp;lt;div&amp;gt;A Landsat scene (“snapshot”) covers an area of 180 km by 180 km for a particular date at a spatial resolution of approximately 30 m (pixel size). The area covered by each scene is identified by two numbers known as the Path and Row of the Landsat World Reference System (WRS). Each map produced coincides with a particular Path/Row for a particular date.&amp;lt;/div&amp;gt;
				&amp;lt;div&amp;gt; &amp;lt;/div&amp;gt;
				&amp;lt;div&amp;gt;The BA mapping has been commissioned by the Northern Territory Government and Federal Government agencies such as Kakadu National Park and the Defence Department. The period covered for this dataset is different for each path/row covering the late 1980’s to 2010. &amp;lt;/div&amp;gt;
				&amp;lt;div&amp;gt; &amp;lt;/div&amp;gt;
				&amp;lt;div&amp;gt;The BA is a raster product in GeoTIFF format. The digital values for an aggregated path/row year product encode burnt and unburnt. Burnt areas could further be divide up into burnt in the early dry season, burnt in the middle dry season and burnt in the late dry season. The mapping of burnt areas does not imply completeness as images can be affected by clouds, cloud shadows, haze or smoke.&amp;lt;/div&amp;gt;</description>
				      <rights>
				        <rightsStatement>The data are not legal documents and are not intended to be use as such. CDU shall not be held liable for improper use of the data described and/or contained herein.</rightsStatement>
				        <licence type="" rightsUri=""/>
				        <accessRights type="" rightsUri="">Mediated access: Contact Chief Investigator Dr Stefan Maier:Phone: +61 8 8946 7631email: Stefan.Maier@cdu.edu.au</accessRights>
				      </rights>
				      <identifier type="local">CDU-Collection-0003</identifier>
				      <location>
				        <address>
				          <physical type="postalAddress">
				            <addressPart type="addressLine">Charles Darwin University Darwin NT 0909, Australia</addressPart>
				          </physical>
				        </address>
				      </location>
				      <coverage>
				        <temporal>
				          <date type="dateFrom" dateFormat="W3CDTF">1993</date>
				          <date type="dateTo" dateFormat="W3CDTF">2001</date>
				        </temporal>
				      </coverage>
				      <coverage>
				        <spatial type="kmlPolyCoords">131.098140,-13.016090 130.655160,-13.016090 130.655160,-13.542558 131.098140,-13.542558 131.098140,-13.016090</spatial>
				      </coverage>
				      <coverage>
				        <temporal>
				          <date type="dateFrom" dateFormat="W3CDTF">2003</date>
				          <date type="dateTo" dateFormat="W3CDTF">2004</date>
				        </temporal>
				        <temporal>
				          <date type="dateTo" dateFormat="W3CDTF">2010</date>
				        </temporal>
				      </coverage>
				      <relatedObject>
				        <key>CDU-Party-0003</key>
				        <relation type="isManagedBy"/>
				      </relatedObject>
				      <subject type="anzsrc-for">0909</subject>
				    </collection>
				  </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::17401</identifier>
				<datestamp>2013-10-01T23:20:17Z</datestamp>
				<setSpec>datasource:University-of-the-Sunshine-Coast</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:University0x20of0x20the0x20Sunshine0x20Coast</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="University of the Sunshine Coast">
				    <key>usc.edu.au/collection-4</key>
				    <originatingSource type="">http://researchdata.ands.org.au/registry/orca/register_my_data</originatingSource>
				    <collection type="collection">
				      <name type="primary">
				        <namePart>Australian Farmed Barramundi: Product and Market Development Data Collection</namePart>
				      </name>
				      <description type="brief">&amp;lt;p&amp;gt;This collection contains a number of datasets relating to research in creating priority outcomes for Australian Barrimundi Farmers Asssociation members to better reposition their product on the domestic market. &amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;Format: MS Word, MS Excel and SPSS files.&amp;lt;/p&amp;gt;</description>
				      <description type="full">&amp;lt;p&amp;gt;The collection includes transcripts of interviews, survey data, sensory analysis and focus group sessions from across the value chain, including producers, retailers, consumers and chefs.  The research also included in-store testing of branding and point of sale material, as well as interviews with fishmongers on the value of recipe cards.&amp;lt;/p&amp;gt;</description>
				      <description type="note">&amp;lt;p&amp;gt;Commissioned by Australian Seafood CRC.&amp;lt;br /&amp;gt; Investigators: Meredith Lawley (USC), Evan Douglas (USC), Dawn Birch (USC), Wendy Spinks (USC)  and Joanne Freeman (USC).&amp;lt;/p&amp;gt;</description>
				      <rights>
				        <accessRights type="" rightsUri="">Access to the data is restricted.  All enquiries regarding access to the data should be addressed via email to Associate Professor Meredith Lawley.</accessRights>
				      </rights>
				      <identifier type="uri">http://research.usc.edu.au/vital/access/manager/Repository/usc:8733</identifier>
				      <location>
				        <address>
				          <electronic type="email">
				            <value>mlawley1@usc.edu.au</value>
				          </electronic>
				          <electronic type="url">
				            <value>http://research.usc.edu.au/vital/access/manager/Repository/usc:8733</value>
				          </electronic>
				        </address>
				      </location>
				      <coverage>
				        <temporal/>
				        <spatial type="kmlPolyCoords">159.105459,-9.221084 112.921454,-9.221084 112.921454,-54.777219 159.105459,-54.777219 159.105459,-9.221084</spatial>
				      </coverage>
				      <relatedObject>
				        <key>usc.edu.au/party-1011985</key>
				        <relation type="hasAssociationWith">
				          <description>Primary Contact</description>
				        </relation>
				      </relatedObject>
				      <subject type="local">barramundi</subject>
				      <subject type="local">marketing</subject>
				      <subject type="local">aquaculture</subject>
				      <subject type="local">consumer behaviour</subject>
				      <subject type="anzsrc-for">1505</subject>
				      <subject type="anzsrc-seo">910403</subject>
				      <subject type="local">fish</subject>
				      <relatedInfo type="website">
				        <identifier type="uri">http://www.abfa.org.au/</identifier>
				        <title>Australian Barramundi Farming Association</title>
				      </relatedInfo>
				      <relatedInfo type="website">
				        <identifier type="uri">http://www.seafoodcrc.com/home.html</identifier>
				        <title>Australian Seafood CRC</title>
				      </relatedInfo>
				      <citationInfo>
				        <citationMetadata>
				          <identifier type="uri">http://research.usc.edu.au/vital/access/manager/Repository/usc:8733</identifier>
				          <title>Australian farmed barramundi: product and market development data collection</title>
				          <version/>
				          <placePublished/>
				          <publisher>University of the Sunshine Coast</publisher>
				          <url/>
				          <context/>
				          <contributor seq="1">
				            <namePart type="family">Lawley</namePart>
				            <namePart type="given">Meredith</namePart>
				          </contributor>
				          <date type="publicationDate">2012</date>
				        </citationMetadata>
				      </citationInfo>
				    </collection>
				  </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::17406</identifier>
				<datestamp>2013-10-01T23:24:00Z</datestamp>
				<setSpec>datasource:University-of-the-Sunshine-Coast</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:University0x20of0x20the0x20Sunshine0x20Coast</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="University of the Sunshine Coast">
				    <key>usc.edu.au/collection-1</key>
				    <originatingSource type="">http://researchdata.ands.org.au/registry/orca/register_my_data</originatingSource>
				    <collection type="collection" dateModified="2013-09-30T04:06:34Z">
				      <name type="primary">
				        <namePart>University of the Sunshine Coast Virtual Herbarium</namePart>
				      </name>
				      <description type="full">&amp;lt;p&amp;gt;The University of the Sunshine Coast Herbarium houses a collection of plant specimens donated by the Queensland Forestry Research Institute, now housed in a purpose-built space within the Library.&amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;The herbarium collection forms the basis for a regional reference collection of plants , the majority of which are endemic to Queensland.   The herbarium consists of c.10,000 plant specimens and provides valuable historical records of plant distributions.&amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;The University of the Sunshine Coast Virtual Herbarium is a complement to the existing physical herbarium, which is in the process of being digitised and uploaded to the Virtual Herbarium.  Images consist of JPEG files, that can be downloaded in a number of formats.&amp;lt;/p&amp;gt;</description>
				      <rights>
				        <accessRights type="" rightsUri="">The University of the Sunshine Coast Virtual Herbarium is a freely available Web resource. You may access, use and download the images provided for your personal research and non-commercial use. You must acknowledge the source when using images. Commercial use of images is not permitted without the permission of the University of the Sunshine Coast.   </accessRights>
				      </rights>
				      <location>
				        <address>
				          <electronic type="url">
				            <value>http://herbarium.usc.edu.au</value>
				          </electronic>
				          <electronic type="email">
				            <value>herbarium@usc.edu.au</value>
				          </electronic>
				        </address>
				      </location>
				      <coverage>
				        <temporal>
				          <date type="dateFrom" dateFormat="UTC">1940</date>
				        </temporal>
				        <spatial type="iso31661">AU-QLD</spatial>
				      </coverage>
				      <relatedObject>
				        <key>usc.edu.au/party-1009156</key>
				        <relation type="hasAssociationWith"/>
				      </relatedObject>
				      <relatedObject>
				        <key>usc.edu.au/collection-2</key>
				        <relation type="isDerivedFrom"/>
				      </relatedObject>
				      <relatedObject>
				        <key>usc.edu.au/party-1</key>
				        <relation type="isManagedBy"/>
				      </relatedObject>
				      <subject type="anzsrc-for">060310</subject>
				      <subject type="anzsrc-for">060302</subject>
				      <subject type="anzsrc-for">060311</subject>
				      <subject type="anzsrc-for">0607</subject>
				      <subject type="local">Systematics</subject>
				      <subject type="local">Phylogeny</subject>
				      <subject type="local">Taxonomy</subject>
				      <subject type="local">Biogeography</subject>
				      <subject type="local">Nomenclature</subject>
				      <subject type="local">Herbarium</subject>
				      <subject type="local">Phylogeography</subject>
				      <citationInfo>
				        <fullCitation style="Harvard">University of the Sunshine Coast [n.d.], Virtual herbarium database, USC, Queensland, viewed [date viewed], &amp;lt;http://herbarium.usc.edu.au/&amp;gt;.</fullCitation>
				      </citationInfo>
				    </collection>
				  </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::17407</identifier>
				<datestamp>2013-10-01T23:27:35Z</datestamp>
				<setSpec>datasource:University-of-the-Sunshine-Coast</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:University0x20of0x20the0x20Sunshine0x20Coast</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="University of the Sunshine Coast">
				    <key>usc.edu.au/collection-8</key>
				    <originatingSource type="">http://researchdata.ands.org.au/registry/orca/register_my_data</originatingSource>
				    <collection type="dataset">
				      <name type="primary">
				        <namePart>Cone Penetration Testing (CPT) data from the vicinity of Halley V Research Station, Brunt Ice Shelf, Antarctica</namePart>
				      </name>
				      <description type="full">&amp;lt;p&amp;gt;The dataset comprise tip resistance and sleeve friction data from almost 100 CPTs conducted in the vicinity of Halley over the period January-February 2009.  Tests were in firn, typically to depths of 5 metres with one test to 10 metres. &amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;Format:  The data are in a proprietary format produced by the data gathering software, GOnsite! developed by A. P. Van den burg. Files can be exported in .csv or similar formats for manipulation in MS Excel or similar.&amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;Testing was conducted using a bespoke CPT rig mounted behind and powered by British Antarctic Survey tractors.&amp;lt;/p&amp;gt;</description>
				      <description type="note">&amp;lt;p&amp;gt;Support for the research was provided by British Antarctic Survey and equipment was provided by Lankelma (UK) and Gardline Geosciences (UK).&amp;lt;/p&amp;gt;</description>
				      <rights>
				        <accessRights type="" rightsUri="">All enquiries regarding access to the data should be addressed via email to Dr Adrian McCallum.</accessRights>
				      </rights>
				      <identifier type="uri">http://research.usc.edu.au/vital/access/manager/Repository/usc:8617</identifier>
				      <location>
				        <address>
				          <electronic type="email">
				            <value>amccallu@usc.edu.au</value>
				          </electronic>
				          <electronic type="url">
				            <value>http://research.usc.edu.au/vital/access/manager/Repository/usc:8617</value>
				          </electronic>
				        </address>
				      </location>
				      <coverage>
				        <temporal/>
				        <spatial type="text">Halley Research Station, Antarctica</spatial>
				      </coverage>
				      <relatedObject>
				        <key>usc.edu.au/party-9001782</key>
				        <relation type="isOwnedBy">
				          <description>Primary Contact</description>
				        </relation>
				      </relatedObject>
				      <subject type="local">Cone Penetration Testing</subject>
				      <subject type="local">CPT</subject>
				      <subject type="local">snow</subject>
				      <subject type="local">firn</subject>
				      <subject type="local">polar</subject>
				      <subject type="local">strength</subject>
				      <subject type="local">resistance</subject>
				      <subject type="anzsrc-for">0406</subject>
				      <relatedInfo type="website">
				        <identifier type="uri">http://www.screentweet.com/profile/acmccallum/</identifier>
				        <title>Photo\'s of the work available via Screen Tweet</title>
				      </relatedInfo>
				      <relatedInfo type="website">
				        <identifier type="uri">http://www.lankelma.co.uk/site_pages.php?page=antarctic&amp;amp;tohere1=&amp;amp;tohere2=project_examples </identifier>
				        <title>Lankelma (UK) - CPT in the Antarctic</title>
				      </relatedInfo>
				      <citationInfo>
				        <citationMetadata>
				          <identifier type="uri">http://research.usc.edu.au/vital/access/manager/Repository/usc:8617</identifier>
				          <title>Cone Penetration Testing (CPT) data from the vicinity of Halley V Research Station, Brunt Ice Shelf, Antarctica</title>
				          <version/>
				          <placePublished/>
				          <publisher>University of the Sunshine Coast</publisher>
				          <url/>
				          <context/>
				          <contributor seq="1">
				            <namePart type="family">McCallum</namePart>
				            <namePart type="given">Adrian</namePart>
				          </contributor>
				          <date type="publicationDate">2012</date>
				        </citationMetadata>
				      </citationInfo>
				    </collection>
				  </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::17408</identifier>
				<datestamp>2013-10-01T23:30:37Z</datestamp>
				<setSpec>datasource:University-of-the-Sunshine-Coast</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:University0x20of0x20the0x20Sunshine0x20Coast</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="University of the Sunshine Coast">
				    <key>usc.edu.au/collection-5</key>
				    <originatingSource type="">http://researchdata.ands.org.au/registry/orca/register_my_data</originatingSource>
				    <collection type="collection">
				      <name type="primary">
				        <namePart>Queensland Quoll (Dasyurus spp.) surveys</namePart>
				      </name>
				      <description type="brief">&amp;lt;p&amp;gt;This collection contains a number of datasets relating to research in Quoll (Dasyurus spp.) sightings in Queensland.   Also included are details of other fauna species located in the vicinity of Quoll sightings.&amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;Format: MS Excel and JPEG files.&amp;lt;/p&amp;gt;</description>
				      <description type="note">&amp;lt;p&amp;gt;The collection includes surveys of Quoll sightings in a number of discrete regions:&amp;lt;/p&amp;gt;
				&amp;lt;ul&amp;gt;
				&amp;lt;li&amp;gt;Binna Burra section of Lamington National Park&amp;lt;/li&amp;gt;
				&amp;lt;li&amp;gt;Toonpan&amp;lt;/li&amp;gt;
				&amp;lt;li&amp;gt;Mary River catchment&amp;lt;/li&amp;gt;
				&amp;lt;li&amp;gt;Beaudesert Shire&amp;lt;/li&amp;gt;
				&amp;lt;li&amp;gt;Townsville&amp;lt;/li&amp;gt;
				&amp;lt;li&amp;gt;Queensland Border Ranges&amp;lt;/li&amp;gt;
				&amp;lt;li&amp;gt;Gold Coast City Council&amp;lt;/li&amp;gt;
				&amp;lt;li&amp;gt;Scenic Rim Council&amp;lt;/li&amp;gt;
				&amp;lt;/ul&amp;gt;
				&amp;lt;p&amp;gt;Trap events of other fauna species and JPEG images at a number of camera locations complements the collection.&amp;lt;/p&amp;gt;</description>
				      <description type="note">&amp;lt;p&amp;gt;Research was undertaken in association with the Quoll Seekers Network, Wildlife Preservation Society of Queensland (WPSQ).&amp;lt;br /&amp;gt; Investigators include: Scott Burnett (USC), Alina Zwar (USC), Ben Holmes (WPSQ) and Ivell Whyte (WPSQ).&amp;lt;/p&amp;gt;</description>
				      <rights>
				        <accessRights type="" rightsUri="">Some data is available as an appendices of the related reports on the Quoll Seekers Network webpage.  All other enquiries regarding access to the data should be addressed via email to Dr Scott Burnett.</accessRights>
				      </rights>
				      <identifier type="uri">http://research.usc.edu.au/vital/access/manager/Repository/usc:8642</identifier>
				      <location>
				        <address>
				          <electronic type="url">
				            <value>http://research.usc.edu.au/vital/access/manager/Repository/usc:8642</value>
				          </electronic>
				          <electronic type="email">
				            <value>sburnett@usc.edu.au</value>
				          </electronic>
				        </address>
				      </location>
				      <coverage>
				        <temporal/>
				        <spatial type="iso31662">AU-QLD</spatial>
				      </coverage>
				      <relatedObject>
				        <key>usc.edu.au/party-1031207</key>
				        <relation type="hasCollector">
				          <description>Primary Contact</description>
				        </relation>
				      </relatedObject>
				      <subject type="local">Quoll</subject>
				      <subject type="local">Dasyurus spp.</subject>
				      <subject type="anzsrc-for">0608</subject>
				      <subject type="anzsrc-for">0602</subject>
				      <relatedInfo type="website">
				        <identifier type="uri">http://www.wildlife.org.au/projects/quolls/</identifier>
				        <title>Quoll Seekers Network, Wildlife Preservation Society of Queensland</title>
				      </relatedInfo>
				      <citationInfo>
				        <citationMetadata>
				          <identifier type="uri">http://research.usc.edu.au/vital/access/manager/Repository/usc:8642</identifier>
				          <title>Queensland Quoll (Dasyrus spp.) surveys</title>
				          <version/>
				          <placePublished/>
				          <publisher>University of the Sunshine Coast</publisher>
				          <url/>
				          <context/>
				          <contributor seq="1">
				            <namePart type="family">Burnett</namePart>
				            <namePart type="given">Scott</namePart>
				          </contributor>
				          <date type="publicationDate">2012</date>
				        </citationMetadata>
				      </citationInfo>
				    </collection>
				  </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::17409</identifier>
				<datestamp>2013-10-01T23:30:05Z</datestamp>
				<setSpec>datasource:University-of-the-Sunshine-Coast</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:University0x20of0x20the0x20Sunshine0x20Coast</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="University of the Sunshine Coast">
				    <key>usc.edu.au/collection-6</key>
				    <originatingSource type="">http://researchdata.ands.org.au/registry/orca/register_my_data</originatingSource>
				    <collection type="dataset">
				      <name type="primary">
				        <namePart>University of the Sunshine Coast Art Gallery: Exhibition attendance statistics</namePart>
				      </name>
				      <description type="brief">&amp;lt;p&amp;gt;This dataset comprises a collection of visitor attendance numbers and statistics from the University of the Sunshine Coast Art Gallery exhibitions from 2000 to 2011.&amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;Format: MS Excel and PDF&amp;lt;/p&amp;gt;</description>
				      <description type="full">&amp;lt;p&amp;gt;The University of the Sunshine Coast Art Gallery hosts a range of exhibitions focusing on contemporary art and design practice. This data collection consists of attendance rates to exhibitions from 2000 to 2011.  The data is broken down into male and female, and whether staff of the university, students, volunteers or the general public.&amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;Visitor numbers are used to indicate the effectiveness of promotion campaigns within the community as well as a measure of the annual growth in attendance at the Gallery.&amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;This dataset will be added to on an annual basis.&amp;lt;/p&amp;gt;</description>
				      <rights>
				        <accessRights type="" rightsUri="">All enquiries regarding access to the data should be addressed via email to the USC Research Bank.</accessRights>
				      </rights>
				      <identifier type="uri">http://research.usc.edu.au/vital/access/manager/Repository/usc:8665</identifier>
				      <location>
				        <address>
				          <electronic type="email">
				            <value>research-repository@usc.edu.au</value>
				          </electronic>
				          <electronic type="url">
				            <value>http://research.usc.edu.au/vital/access/manager/Repository/usc:8665</value>
				          </electronic>
				        </address>
				      </location>
				      <coverage>
				        <temporal/>
				        <spatial type="kmlPolyCoords">153.073709,-26.712657 153.058242,-26.712657 153.058242,-26.722599 153.073709,-26.722599 153.073709,-26.712657</spatial>
				      </coverage>
				      <relatedObject>
				        <key>usc.edu.au/party-2</key>
				        <relation type="hasCollector"/>
				      </relatedObject>
				      <subject type="anzsrc-for">1905</subject>
				      <subject type="anzsrc-for">2102</subject>
				      <subject type="local">attendance rates</subject>
				      <subject type="local">cultural events</subject>
				      <subject type="local">exhibition</subject>
				      <relatedInfo type="website">
				        <identifier type="uri">http://www.usc.edu.au/community/art-gallery/exhibitions/</identifier>
				        <title>USC Art Gallery Past Exhibitions</title>
				      </relatedInfo>
				      <citationInfo>
				        <citationMetadata>
				          <identifier type="uri">http://research.usc.edu.au/vital/access/manager/Repository/usc:8665</identifier>
				          <title>University of the Sunshine Coast Art Gallery: Exhibition attendance statistics </title>
				          <version/>
				          <placePublished/>
				          <publisher>University of the Sunshine Coast</publisher>
				          <url/>
				          <context/>
				          <contributor seq="1">
				            <namePart type="superior">University of the Sunshine Coast</namePart>
				            <namePart type="subordinate">Art Gallery</namePart>
				          </contributor>
				          <date type="publicationDate">2012</date>
				        </citationMetadata>
				      </citationInfo>
				    </collection>
				  </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::17414</identifier>
				<datestamp>2013-10-01T23:24:00Z</datestamp>
				<setSpec>datasource:University-of-the-Sunshine-Coast</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:University0x20of0x20the0x20Sunshine0x20Coast</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="University of the Sunshine Coast">
				    <key>usc.edu.au/collection-2</key>
				    <originatingSource type="">http://researchdata.ands.org.au/registry/orca/register_my_data</originatingSource>
				    <collection type="collection">
				      <name type="primary">
				        <namePart>University of the Sunshine Coast Herbarium</namePart>
				      </name>
				      <description type="full">&amp;lt;p&amp;gt;The University of the Sunshine Coast Herbarium houses a collection of plant specimens donated by the Queensland Forestry Research Institute, now housed in a purpose-built space within the Library.&amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;The herbarium collection forms the basis for a regional reference collection of plants , the majority of which are endemic to Queensland.   The herbarium consists of c.10,000 plant specimens and provides valuable historical records of plant distributions.&amp;lt;/p&amp;gt;</description>
				      <rights>
				        <accessRights type="" rightsUri="">Visitors wishing to use the University of the Sunshine Coast Herbarium should make prior arrangements.</accessRights>
				      </rights>
				      <location>
				        <address>
				          <electronic type="email">
				            <value>herbarium@usc.edu.au</value>
				          </electronic>
				          <physical type="streetAddress">
				            <addressPart type="text">University of the Sunshine Coast Library, 90 Sippy Downs Drive, Sippy Downs QLD 4556</addressPart>
				          </physical>
				        </address>
				      </location>
				      <coverage>
				        <temporal>
				          <date type="dateFrom" dateFormat="UTC">1940</date>
				        </temporal>
				        <spatial type="iso31661">AU-QLD</spatial>
				      </coverage>
				      <relatedObject>
				        <key>usc.edu.au/party-1</key>
				        <relation type="hasAssociationWith"/>
				      </relatedObject>
				      <relatedObject>
				        <key>usc.edu.au/party-1009156</key>
				        <relation type="isEnrichedBy"/>
				      </relatedObject>
				      <relatedObject>
				        <key>usc.edu.au/collection-1</key>
				        <relation type="hasDerivedCollection">
				          <url>http://herbarium.usc.edu.au</url>
				        </relation>
				      </relatedObject>
				      <subject type="anzsrc-for">060310</subject>
				      <subject type="anzsrc-for">060302</subject>
				      <subject type="anzsrc-for">060311</subject>
				      <subject type="anzsrc-for">0607</subject>
				      <subject type="local">Systematics</subject>
				      <subject type="local">Phylogeny</subject>
				      <subject type="local">Taxonomy</subject>
				      <subject type="local">Biogeography</subject>
				      <subject type="local">Nomenclature</subject>
				      <subject type="local">Herbarium</subject>
				      <subject type="local">Phylogeography</subject>
				    </collection>
				  </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::17415</identifier>
				<datestamp>2013-10-01T23:25:51Z</datestamp>
				<setSpec>datasource:University-of-the-Sunshine-Coast</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:University0x20of0x20the0x20Sunshine0x20Coast</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="University of the Sunshine Coast">
				    <key>usc.edu.au/collection-3</key>
				    <originatingSource>http://researchdata.ands.org.au/registry/orca/register_my_data</originatingSource>
				    <collection type="dataset">
				      <name type="primary">
				        <namePart type="">Investigating Blog and Wiki Technology for the Enhancement of Internal Reference Service Processes in a Library</namePart>
				      </name>
				      <description type="full">&amp;lt;p&amp;gt;
					Methodology: An online survey. The population was Australian university, public and special libraries.&amp;amp;nbsp; The sampling frame was constructed from university library websites, State Library public library listings and the National Library of Australia&amp;amp;rsquo;s listing for special libraries. Branch libraries were treated as individual entries.&amp;amp;nbsp; Entries that were not relevant to the survey content, for example prison libraries, were removed from the sampling frame.&amp;amp;nbsp; To produce the correct sample sizes, every 10th library was sampled.&amp;amp;nbsp; The response rate was 21%, which represents 138 respondants.&amp;amp;nbsp; Once the data was weighted, the data was analysed using SPSS 13.0.&amp;lt;/p&amp;gt;
				</description>
				      <description type="brief">&amp;lt;p&amp;gt;
					The primary aim of the survey was to gain a snapshot of Australian libraries&amp;amp;#39; use of blogs and wikis.&amp;lt;/p&amp;gt;
				&amp;lt;p&amp;gt;
					Format: MS Excel spreadsheet (40.7KB)&amp;lt;/p&amp;gt;
				</description>
				      <description type="note">&amp;lt;p&amp;gt;
					Investigators: Ms Kate Watson (USC) and Ms Chelsea Harper (CQU)&amp;lt;/p&amp;gt;
				</description>
				      <rights>
				        <accessRights>The data is open to all for private study and fair use only. All enquiries regarding access to the data should be addressed via email to Ms Kate Kirby (Watson).</accessRights>
				      </rights>
				      <location>
				        <address>
				          <electronic type="email">
				            <value>kkirby@usc.edu.au</value>
				          </electronic>
				        </address>
				      </location>
				      <relatedObject>
				        <key>usc.edu.au/party-1029998</key>
				        <relation type="hasAssociationWith">
				          <description>Primary Contact</description>
				          <url/>
				        </relation>
				      </relatedObject>
				      <subject type="anzsrc-for">080706</subject>
				      <subject type="anzsrc-for">080707</subject>
				      <subject type="local">blogging</subject>
				      <subject type="local">wiki</subject>
				      <subject type="local">library reference services</subject>
				      <coverage>
				        <temporal>
				          <date type="dateFrom" dateFormat="UTC">2006</date>
				          <date type="dateTo" dateFormat="UTC">2006</date>
				        </temporal>
				        <spatial type="iso31661">AU</spatial>
				      </coverage>
				      <relatedInfo type="publication">
				        <identifier type="uri">http://research.usc.edu.au/vital/access/manager/Repository/usc:358</identifier>
				        <title>Related work - Using blogs and wikis to communicate with library clients</title>
				        <notes/>
				      </relatedInfo>
				      <relatedInfo type="publication">
				        <identifier type="uri">http://research.usc.edu.au/vital/access/manager/Repository/usc:4444</identifier>
				        <title>Related work - Supporting Knowledge Creation – Using Wikis for Group Collaboration </title>
				        <notes/>
				      </relatedInfo>
				      <relatedInfo type="publication">
				        <identifier type="uri">http://research.usc.edu.au/vital/access/manager/Repository/usc:7377</identifier>
				        <title>Related work - Blogs, Wikis and Reference Services: Surveying the Australian Library Landscape</title>
				        <notes/>
				      </relatedInfo>
				    </collection>
				  </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::248232</identifier>
				<datestamp>2013-10-01T05:48:13Z</datestamp>
				<setSpec>datasource:charles-darwin-university-redbox</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Charles0x20Darwin0x20University</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Charles Darwin University">
				    <key>CDU-Collection-0002</key>
				    <originatingSource>http://researchdata.ands.org.au/registry/orca/register_my_data</originatingSource>
				    <collection dateModified="2013-04-08T22:23:25Z" type="collection">
				      <name type="alternative">
				        <namePart type="">Strong Start – Bright Futures Evaluation Collection</namePart>
				      </name>
				      <name type="primary">
				        <namePart type="">Evaluation of NT government program to improve education outcomes for Indigenous children</namePart>
				      </name>
				      <description type="full">&amp;amp;lt;p&amp;amp;gt;
					&amp;amp;lt;strong&amp;amp;gt;Quantitative Data:&amp;amp;lt;/strong&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
				&amp;amp;lt;p&amp;amp;gt;
					Much of the information required for these annual reports is available from a range of existing administrative data sources. These data will be extracted and collated into the report by the Menzies evaluation team.&amp;amp;lt;/p&amp;amp;gt;
				&amp;amp;lt;p&amp;amp;gt;
					Much of the community level data which will be compiled is publically available. Agreements have been established with the Department of Education and Training for school and system level data to be extracted from the Department of Education and Training data warehouse, the Student Assessment and Monitoring System and the Department of Education and Training Human Resources data (e.g. data on teacher and assistant teacher recruitment and retention). With the relevant departmental approvals, community level health data will be sourced from the Department of Health&amp;amp;amp;rsquo;s (Health Gains &amp;amp;amp;amp; Planning) and local community clinics (e.g. community rates of low birthweight, proportion of the community&amp;amp;amp;rsquo;s children 0-3 years who are anaemic, growth stunted or underweight).&amp;amp;lt;/p&amp;amp;gt;
				&amp;amp;lt;p&amp;amp;gt;
					Quantitative outcome measures include school attendance, National Assessment Program for Literacy and Numeracy results and other measures of school engagement and learning. Data from the Australian Early Development Index collected on all children&amp;amp;amp;rsquo;s first year at school in 2009, 2012, 2015 and 2018 will serve as community level indicators of outcomes for the evaluation of new early childhood programs being implemented through the SSBF program (e.g. Integrated Child and Family Centres being established in the SSBF &amp;amp;amp;lsquo;college&amp;amp;amp;rsquo; sites).&amp;amp;amp;nbsp;&amp;amp;lt;/p&amp;amp;gt;
				&amp;amp;lt;p&amp;amp;gt;
					It is well established that socio-demographic and health factors have a profound influence on a child&amp;amp;amp;rsquo;s education outcomes and that those factors operate at both a community and an individual level. For example both the overall quality of community housing and the conditions in a child&amp;amp;amp;rsquo;s home are significant predictors of a child&amp;amp;amp;rsquo;s health outcomes in remote Aboriginal communities (Bailie et al 2010). Socio-demographic factors are strong predictors of education outcomes in remote communities in WA, NT and Queensland (McKenzie et al 2010) and the patterns of influence are significantly different to the mainstream Australian context.&amp;amp;lt;/p&amp;amp;gt;
				&amp;amp;lt;p&amp;amp;gt;
					In view of this complex and poorly understood interplay of factors it is important that the monitoring system also collects data on socio-demographic variables known from other studies to play a significant role in determining student&amp;amp;amp;rsquo;s educational outcomes.&amp;amp;lt;/p&amp;amp;gt;
				&amp;amp;lt;p&amp;amp;gt;
					&amp;amp;amp;nbsp;&amp;amp;lt;/p&amp;amp;gt;
				&amp;amp;lt;p&amp;amp;gt;
					&amp;amp;lt;strong&amp;amp;gt;Qualitative Data:&amp;amp;lt;/strong&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
				&amp;amp;lt;p&amp;amp;gt;
					In parallel with this &amp;amp;amp;lsquo;top down&amp;amp;amp;rsquo; evaluation we will be undertaking a &amp;amp;amp;lsquo;bottom up&amp;amp;amp;rsquo; evaluation using the &amp;amp;amp;lsquo;Participatory Performance Story Reporting&amp;amp;amp;rsquo; (Mayne 2004) and &amp;amp;amp;lsquo;Most Significant Change&amp;amp;amp;rsquo; (Dart and Mayne 2003) methodologies.&amp;amp;lt;/p&amp;amp;gt;
				&amp;amp;lt;p&amp;amp;gt;
					Both qualitative and quantitative data will be collected in a brief (40 minute) household interview with the consenting carers of around 15 children enrolled in each of the &amp;amp;amp;lsquo;College&amp;amp;amp;rsquo; schools. These carer interviews will be conducted by the Menzies team with the assistance of locally recruited interviewing staff/interpreters.&amp;amp;lt;/p&amp;amp;gt;
				&amp;amp;lt;p&amp;amp;gt;
					Other interview data will be collected from a random sample of the school&amp;amp;amp;rsquo;s teachers and assistant teachers.&amp;amp;lt;/p&amp;amp;gt;
				&amp;amp;lt;p&amp;amp;gt;
					Both the family and school staff interviews will gather information regarding community and school perceptions of the progress of the SSBF &amp;amp;amp;ldquo;college&amp;amp;amp;rdquo; model in improving school community collaboration and students&amp;amp;amp;rsquo; engagement with school learning. The school&amp;amp;amp;rsquo;s Remote Learning Partnership Agreement and the community&amp;amp;amp;rsquo;s Local Implementation Plan informed many of the items in these questionnaires.&amp;amp;lt;/p&amp;amp;gt;
				&amp;amp;lt;p&amp;amp;gt;
					Details of the data can be found in attachment E &amp;amp;amp;ldquo;list of data fields&amp;amp;amp;rdquo;. It is important to note that many of the fields are optional: specific communities will choose to include them or not in order to reflect their particular local issues.&amp;amp;lt;/p&amp;amp;gt;
				</description>
				      <rights>
				        <rightsStatement rightsUri="http://www.nhmrc.gov.au/guidelines/publications/e72">As per HREC of the Northern Territory Department of Health and Menzies School of Health Research.  The Committee operates in accordance with the National Statement on Ethical Conduct in Human Research 2007 (NS), issued by the National Health and Medical Research Council (NHMRC).</rightsStatement>
				      </rights>
				      <identifier type="local">CDU-Collection-0002</identifier>
				      <location>
				        <address>
				          <physical type="postalAddress">
				            <addressPart type="addressLine">Menzies School of Health Research&amp;amp;lt;br /&amp;amp;gt;
				PO Box 41096 CASUARINA NT 0811</addressPart>
				          </physical>
				        </address>
				      </location>
				      <relatedObject>
				        <key>CDU-Activity-0002</key>
				        <relation type="isOutputOf"/>
				      </relatedObject>
				      <relatedObject>
				        <key>CDU-Party-0002</key>
				        <relation type="hasCollector"/>
				      </relatedObject>
				      <subject type="anzsrc-for">1117 Public Health and Health Services</subject>
				      <coverage>
				        <temporal>
				          <date type="dateFrom" dateFormat="W3CDTF">2011-06-01T00:00:00Z</date>
				        </temporal>
				        <spatial type="kmlPolyCoords">133.497619,-18.453563</spatial>
				      </coverage>
				      <relatedInfo type="publication">
				        <identifier type="local">Silburn, S.R., Robinson, G., Arney, F., Johnstone, K., McGuinness, K.. 2011 “Early Childhood Development in the NT: Issues to be addressed”. Early Childhood Series No. 1. 2011. Northern Territory Government, Darwin.</identifier>
				      </relatedInfo>
				      <relatedInfo type="publication">
				        <identifier type="local">Silburn, S.R., McKenzie, J.W., Moss, B. “Northern Territory results for the Australian Early Development Index 2009”. 2010 Menzies School of Health Research &amp;amp;amp; Northern Territory, Department of Education and Training.</identifier>
				      </relatedInfo>
				      <dates type="dc.created">
				        <date type="dateFrom" dateFormat="W3CDTF">2011-06-01T00:00:00Z</date>
				      </dates>
				    </collection>
				  </registryObject></registryObjects>
			</metadata>
		</record>
	</ListRecords>
</OAI-PMH>') ?>		</pre>					
</p>
<p>
	<a href="../../../registry/services/oai?verb=ListRecords&metadataPrefix=rif&set=group:Breast0x20Cancer0x20Tissue0x20Bank">?verb=ListRecords&metadataPrefix=rif&set=group<?php print htmlentities(':') ?>Breast0x20Cancer0x20Tissue0x20Bank</a>

<pre class="prettyprint pre-scrollable"><?php print htmlentities('
<?xml version="1.0" encoding="UTF-8"?>
<OAI-PMH xmlns="http://www.openarchives.org/OAI/2.0/"
         xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	 xsi:schemaLocation="http://www.openarchives.org/OAI/2.0/ http://www.openarchives.org/OAI/2.0/OAI-PMH.xsd">	<responseDate>2013-10-16T01:17:43Z</responseDate>
	<request verb="ListRecords" metadataPrefix="rif" set="group:Breast0x20Cancer0x20Tissue0x20Bank">http://researchdata.ands.org.au/registry/registry/services/oai</request>
	<ListRecords>
		<record>
			<header>
				<identifier>oai:ands.org.au::60174</identifier>
				<datestamp>2013-07-08T23:46:30Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 11</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 11</identifier>
				            <name type="primary">
				              <namePart>BCTB Blood Serum Samples</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            <!-- Related to the other Specimen Types -->
				            <!-- Blood -->
				            <relatedObject>
				                <key>abctb.org.au 7</key>
				                <relation type="isPartOf"/>
				            </relatedObject>
				            
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				            
				            
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB blood sample subcollection consists of serum samples. Serum is the fluid constituent of blood.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60175</identifier>
				<datestamp>2013-07-08T23:46:30Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:service</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				        <key>abctb.org.au 2</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        
				        <service type="search-http">
				            <identifier type="local">abctb.org.au 2</identifier>
				            <name type="primary">
				                <namePart type="full">Breast Cancer Tissue Bank Search Tool</namePart>                
				            </name>
				            <location>
				                <address>
				                    <electronic type="url">
				                        <value>http://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                    </electronic>
				                </address>
				            </location>
				           <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            <relatedObject>
				                <key>abctb.org.au 3</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>            
				            <relatedObject>
				                <key>abctb.org.au 4</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>   
				            <relatedObject>
				                <key>abctb.org.au 5</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>   
				            <relatedObject>
				                <key>abctb.org.au 6</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>   
				            <relatedObject>
				                <key>abctb.org.au 7</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>      
				            <relatedObject>
				                <key>abctb.org.au 8</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>               
				              <relatedObject>
				                <key>abctb.org.au 9</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>             
				            <relatedObject>
				                <key>abctb.org.au 10</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>               
				             <relatedObject>
				                <key>abctb.org.au 11</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>              
				            <relatedObject>
				                <key>abctb.org.au 12</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>   
				            <relatedObject>
				                <key>abctb.org.au 13</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>               
				            <relatedObject>
				                <key>abctb.org.au 14</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>   
				            <relatedObject>
				                <key>abctb.org.au 15</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>  
				            <relatedObject>
				                <key>abctb.org.au 16</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>  
				            <relatedObject>
				                <key>abctb.org.au 17</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>  
				            <relatedObject>
				                <key>abctb.org.au 18</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>  
				            <relatedObject>
				                <key>abctb.org.au 19</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>  
				            <relatedObject>
				                <key>abctb.org.au 20</key>
				                <relation type="isSupportedBy"/>
				            </relatedObject>   
				            
				            <description type="brief">The Research Query page is a component of the Breast Cancer Tissue Bank website. It shows the numbers of consented patients, and the numbers of available samples. The Research Query page allows researchers to search the contents of the Breast Cancer Tissue Bank for samples and images that meet criteria selected from pull-down menus.</description>       
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description> 
				        </service>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60176</identifier>
				<datestamp>2013-07-08T23:46:30Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 8</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 8</identifier>
				            <name type="primary">
				              <namePart>BCTB Tissue Samples and Associated Images</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            <!-- Related to the overall collection -->
				            <relatedObject>
				                <key>abctb.org.au 3</key>
				                <relation type="isPartOf"/>
				            </relatedObject>
				            
				            <!-- Related to the other Sub-Specimen Types -->
				            <!-- FFPE -->
				            <relatedObject>
				                <key>abctb.org.au 9</key>
				                <relation type="hasPart"/>
				            </relatedObject>
				            <!-- Fresh Tissue -->
				            <relatedObject>
				                <key>abctb.org.au 10</key>
				                <relation type="hasPart"/>
				            </relatedObject>
				            
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				                      
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB subcollection consists of tissue samples taken from breast cancer patients and others. It is further broken down into a number of types of tissue, some of which have associated microscope images. The tissue samples and other information are made available to approved breast cancer research projects.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60177</identifier>
				<datestamp>2013-07-08T23:46:30Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 18</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 18</identifier>
				            <name type="primary">
				              <namePart>BCTB Tissue Samples as H&amp;amp;E Slides</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            <!-- Related to the other Specimen Types -->
				            <!-- FFPE -->
				            <relatedObject>
				                <key>abctb.org.au 9</key>
				                <relation type="isPartOf"/>
				            </relatedObject>
				            <!-- Fresh Tissue -->
				            <relatedObject>
				                <key>abctb.org.au 10</key>
				                <relation type="isPartOf"/>
				            </relatedObject>                             
				            
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				            
				            
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB subcollection consists of tissue samples on H&amp;amp;E (hematoxylin and eosin) slides: a standard method of microscope slide preparation.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60178</identifier>
				<datestamp>2013-07-08T23:46:31Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 13</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 13</identifier>
				            <name type="primary">
				              <namePart>BCTB Blood Buffy Coat Samples</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            <!-- Related to the other Specimen Types -->
				            <!-- Blood -->
				            <relatedObject>
				                <key>abctb.org.au 7</key>
				                <relation type="isPartOf"/>
				            </relatedObject>
				            
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				                      
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB blood sample subcollection consists of buffy-coat samples. A buffy coat contains white blood cells and platelets.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60179</identifier>
				<datestamp>2013-07-08T23:46:31Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 14</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 14</identifier>
				            <name type="primary">
				              <namePart>BCTB Blood Samples on Blood Spot Cards</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            <!-- Related to the other Specimen Types -->
				            <!-- Blood -->
				            <relatedObject>
				                <key>abctb.org.au 7</key>
				                <relation type="isPartOf"/>
				            </relatedObject>
				            
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				            
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB blood sample subcollection consists of whole blood samples on Blood Spot cards. A small drop of blood is placed on a pre-marked circle on absorbent paper and allowed to dry, then the paper is stored. This preserves DNA and protein found in blood.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60180</identifier>
				<datestamp>2013-07-08T23:46:31Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 6</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 6</identifier>
				            <name type="primary">
				              <namePart>BCTB Non-Cancerous Breast Samples and Images</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            <!-- Related to the other Cancer Types -->
				            <relatedObject>
				                <key>abctb.org.au 3</key>
				                <relation type="isPartOf"/>
				            </relatedObject>
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				            
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB subcollection contains normal breast tissue and blood samples, and associated images, where a diagnosis of no cancer has been determined.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60181</identifier>
				<datestamp>2013-07-08T23:46:31Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 12</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 12</identifier>
				            <name type="primary">
				              <namePart>BCTB Blood Plasma Samples</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            <!-- Related to the other Specimen Types -->
				            <!-- Blood -->
				            <relatedObject>
				                <key>abctb.org.au 7</key>
				                <relation type="isPartOf"/>
				            </relatedObject>
				            
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				            
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB blood sample subcollection consists of plasma samples. Plasma contains the fluid found in blood plus the blood-clotting elements such as fibrin.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60182</identifier>
				<datestamp>2013-07-08T23:46:31Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 3</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 3</identifier>
				            <name type="primary">
				              <namePart>Breast Cancer Tissue Bank Sample and Image Collection</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            <!-- Related to the other Cancer Types -->
				            <!-- Invasive -->
				            <relatedObject>
				                <key>abctb.org.au 4</key>
				                <relation type="hasPart"/>
				            </relatedObject>
				            <!-- Non-Invasive -->
				            <relatedObject>
				                <key>abctb.org.au 5</key>
				                <relation type="hasPart"/>
				            </relatedObject>
				            <!-- Non-Cancerous -->
				            <relatedObject>
				                <key>abctb.org.au 6</key>
				                <relation type="hasPart"/>
				            </relatedObject>
				            
				            <!-- Related to other Specimen Types -->
				            <!-- Blood -->
				            <relatedObject>
				                <key>abctb.org.au 7</key>
				                <relation type="hasPart"/>
				            </relatedObject>            
				            <!-- Tissue-->
				            <relatedObject>
				                <key>abctb.org.au 8</key>
				                <relation type="hasPart"/>
				            </relatedObject>
				            
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				            <description type="brief">This is a collection of samples of breast cancer and normal breast, also including images of tissue samples, and blood samples. Samples and images are made available from the Breast Cancer Tissue Bank for research into breast cancer including its causes, development, diagnosis and treatment.</description>
				            <description type="full">The Breast Cancer Tissue Bank Sample and Image Collection is divided into subcollections (accessible via menus in the website Research Query page) in two ways. Samples and images may be from invasive cancers, non-invasive cancers or normal non-cancer breast tissue. The samples themselves may be of tissue or of blood, with several subtypes in each case. There are microscope images associated with some of the tissue samples, found within the FFPE part of the Tissue subcollection. The Research Query page also allows searching to be narrowed according to several other parameters concerning the health and treatment of subjects.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60183</identifier>
				<datestamp>2013-07-08T23:46:31Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 5</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 5</identifier>
				            <name type="primary">
				              <namePart>BCTB Non-Invasive Breast Cancer Samples and Images</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            <!-- Related to the overall collection -->
				            <relatedObject>
				                <key>abctb.org.au 3</key>
				                <relation type="isPartOf"/>
				            </relatedObject>
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB subcollection contains breast tissue and blood samples, and associated images, where a diagnosis of non-invasive cancer has been determined by a pathologist.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60184</identifier>
				<datestamp>2013-07-08T23:46:31Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 7</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 7</identifier>
				            <name type="primary">
				              <namePart>Breast Cancer Tissue Bank Blood Samples</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            <!-- Related to the overall collection -->
				            <relatedObject>
				                <key>abctb.org.au 3</key>
				                <relation type="isPartOf"/>
				            </relatedObject>
				            
				            <!-- Related to the other Sub-Specimen Types -->
				            <!-- Serum -->
				            <relatedObject>
				                <key>abctb.org.au 11</key>
				                <relation type="hasPart"/>
				            </relatedObject>
				            <!-- Plasma -->
				            <relatedObject>
				                <key>abctb.org.au 12</key>
				                <relation type="hasPart"/>
				            </relatedObject>
				            <!-- DNA -->
				            <relatedObject>
				                <key>abctb.org.au 16</key>
				                <relation type="hasPart"/>
				            </relatedObject>            
				            <!-- Buffy Coat -->
				            <relatedObject>
				                <key>abctb.org.au 13</key>
				                <relation type="hasPart"/>
				            </relatedObject>            
				            <!-- Blood Spot Cards -->
				            <relatedObject>
				                <key>abctb.org.au 14</key>
				                <relation type="hasPart"/>
				            </relatedObject>            
				            <!-- Whole Blood -->
				            <relatedObject>
				                <key>abctb.org.au 15</key>
				                <relation type="hasPart"/>
				            </relatedObject>
				            
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				            
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB subcollection consists of blood samples taken from breast cancer patients and others. It is further broken down into a number of blood components. The blood samples and other information are made available to approved breast cancer research projects.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60185</identifier>
				<datestamp>2013-07-08T23:46:31Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 16</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 16</identifier>
				            <name type="primary">
				              <namePart>BCTB DNA Samples from Blood</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            <!-- Related to the other Specimen Types -->
				            <!-- Blood -->
				            <relatedObject>
				                <key>abctb.org.au 7</key>
				                <relation type="isPartOf"/>
				            </relatedObject>        
				            
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				            
				            
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB blood sample subcollection consists of DNA samples taken from blood.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60186</identifier>
				<datestamp>2013-07-08T23:46:31Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 17</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 17</identifier>
				            <name type="primary">
				              <namePart>BCTB RNA Samples from Tissue</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            
				            <!-- Related to the other Specimen Types -->
				            <!-- FFPE -->
				            <relatedObject>
				                <key>abctb.org.au 9</key>
				                <relation type="isPartOf"/>
				            </relatedObject>
				            <!-- Fresh Tissue -->
				            <relatedObject>
				                <key>abctb.org.au 10</key>
				                <relation type="isPartOf"/>
				            </relatedObject>                             
				            
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				            
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB subcollection consists of RNA samples extracted from tissues in the collection.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60187</identifier>
				<datestamp>2013-07-08T23:46:31Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 4</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 4</identifier>
				            <name type="primary">
				              <namePart>BCTB Invasive Breast Cancer Samples and Images</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            <!-- Related to the overall collection -->
				            <relatedObject>
				                <key>abctb.org.au 3</key>
				                <relation type="isPartOf"/>
				            </relatedObject>
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB subcollection contains breast tissue and blood samples, and associated images, where a diagnosis of invasive cancer has been determined by a pathologist.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				            
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60188</identifier>
				<datestamp>2013-07-08T23:46:31Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 20</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 20</identifier>
				            <name type="primary">
				              <namePart>BCTB TMA (Tissue Micro Array) Samples</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>http://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            <!-- Related to the other Specimen Types -->
				            <!-- FFPE -->
				            <relatedObject>
				                <key>abctb.org.au 9</key>
				                <relation type="isPartOf"/>
				            </relatedObject>
				                                    
				            
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				            
				            
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB subcollection consists of Tissue Micro Arrays (TMAs) taken from FFPE samples. Tissue Micro Arrays are paraffin blocks in which many separate tissue cores are arranged in an organised way. Thin sections can be cut from these blocks, for use in a range of immunostaining and other cellular and molecular analyses.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at http://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60189</identifier>
				<datestamp>2013-07-08T23:46:31Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 10</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 10</identifier>
				            <name type="primary">
				              <namePart>BCTB Fresh Tissue Samples</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            <!-- Related to the other Specimen Types -->
				            <!-- Tissue -->
				            <relatedObject>
				                <key>abctb.org.au 8</key>
				                <relation type="isPartOf"/>
				            </relatedObject>
				            
				            <!-- Related to Sub Specimen Types -->
				            <!-- RNA -->
				            <relatedObject>
				                <key>abctb.org.au 17</key>
				                <relation type="hasPart"/>
				            </relatedObject>                  
				            <!-- H&amp;E slide -->
				            <relatedObject>
				                <key>abctb.org.au 18</key>
				                <relation type="hasPart"/>
				            </relatedObject>  
				            
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				            
				            
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB tissue subcollection consists of fresh tissue samples, that is, pieces of tissue placed in liquid nitrogen for freezing. The samples maintain a life-like structure at this low temperature.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60190</identifier>
				<datestamp>2013-07-08T23:46:31Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 19</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 19</identifier>
				            <name type="primary">
				              <namePart>BCTB FFPE Microscope Images</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            <!-- Related to the other Specimen Types -->
				            <!-- FFPE -->
				            <relatedObject>
				                <key>abctb.org.au 9</key>
				                <relation type="isPartOf"/>
				            </relatedObject>
				                                    
				            
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				            
				            
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB subcollection consists of microscope images of FFPE tissue samples, scanned with a Hamamatsu Nanozoomer. Partial low-resolution images are available through the Research Query page on the BCTB website. Full images may be made available to authorised researchers.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60191</identifier>
				<datestamp>2013-07-08T23:46:31Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 15</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 15</identifier>
				            <name type="primary">
				              <namePart>BCTB Whole Blood Samples</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            
				            <!-- Related to the other Specimen Types -->
				            <!-- Blood -->
				            <relatedObject>
				                <key>abctb.org.au 7</key>
				                <relation type="isPartOf"/>
				            </relatedObject>
				            
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				            
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB blood sample subcollection consists of whole blood samples, that is, blood as it is found in the natural state inside the human body.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60192</identifier>
				<datestamp>2013-07-08T23:46:31Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:collection</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				  
				        <key>abctb.org.au 9</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        <collection type="collection">
				            <identifier type="local">abctb.org.au 9</identifier>
				            <name type="primary">
				              <namePart>BCTB FFPE (Formalin Fixed Paraffin Embedded) Blocks</namePart>
				            </name>
				            <!-- Where the information on this cancer type is stored -->
				            <location>
				              <address>
				                <electronic type="url">
				                  <value>https://abctb.org.au/abctbNew2/researchspecimenquery.aspx</value>
				                </electronic>
				              </address>
				            </location>
				            <!-- Related to the other Specimen Types -->
				            <!-- Tissue -->
				            <relatedObject>
				                <key>abctb.org.au 8</key>
				                <relation type="isPartOf"/>
				            </relatedObject>
				            
				            <!-- Related to Sub Specimen Types -->
				            <!-- RNA -->
				            <relatedObject>
				                <key>abctb.org.au 17</key>
				                <relation type="hasPart"/>
				            </relatedObject>
				            <!-- Image -->
				            <relatedObject>
				                <key>abctb.org.au 19</key>
				                <relation type="hasPart"/>
				            </relatedObject>            
				            <!-- H&amp;E slide -->
				            <relatedObject>
				                <key>abctb.org.au 18</key>
				                <relation type="hasPart"/>
				            </relatedObject>
				            <!-- TMA -->
				            <relatedObject>
				                <key>abctb.org.au 20</key>
				                <relation type="hasPart"/>
				            </relatedObject>           
				            
				            <!-- Related to the Search Service -->
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="supports"/>
				            </relatedObject>
				            <!-- Related to the Party -->
				            <relatedObject>
				                <key>abctb.org.au 1</key>
				                <relation type="isManagedBy"/>
				            </relatedObject>
				            
				            <!-- Subjects to search for -->
				            <subject type="anzsrc-for">9201</subject>
				            <subject type="anzsrc-for">9201102 Cancer and Related Disorders</subject>
				            <subject type="anzsrc-for">9201507 Women\'s Health</subject>
				            
				            <!-- Detailed description  -->
				            <description type="brief">This BCTB tissue subcollection consists of FFPE (Formalin Fixed Paraffin Embedded) blocks: pieces of tissue fixed in formalin, dehydrated and embedded into wax, then thinly sliced for viewing under a microscope. Many of the FFPE samples have associated microscope images and/or tissue micro array (TMA) samples.</description>
				            <description type="rights">Limited information about items in the BCTB collections, and small images, are available publicly through the search tool on the Research Query web page.  Researchers who would like to seek direct access to samples and full-size images can find details of the procedure to follow at https://abctb.org.au/abctbNew2/researchers.aspx .</description>
				        </collection>
				    </registryObject></registryObjects>
			</metadata>
		</record>
		<record>
			<header>
				<identifier>oai:ands.org.au::60193</identifier>
				<datestamp>2013-07-08T23:46:31Z</datestamp>
				<setSpec>datasource:Breast-Cancer-Tissue-Bank</setSpec>
				<setSpec>class:party</setSpec>
				<setSpec>group:Breast0x20Cancer0x20Tissue0x20Bank</setSpec>
			</header>
			<metadata>
				<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
				<registryObject group="Breast Cancer Tissue Bank">
				        <key>abctb.org.au 1</key>
				        <originatingSource>http://abctb.org.au/</originatingSource>
				        
				        <party type="group">
				            
				            <name type="primary">
				                <namePart>Breast Cancer Tissue Bank</namePart>              
				            </name>
				            <location>
				                <address>
				                    <electronic type="fax">
				                        <value>tel:+61-2-9845-9100</value>   
				                    </electronic>
				                    <electronic type="voice">
				                        <value>tel:+61-2-9845-9000</value>   
				                    </electronic>            
				                    <electronic type="email">
				                        <value>Jane.Carpenter@sydney.edu.au</value>   
				                    </electronic>  
				                    <electronic type="url">
				                        <value>http://abctb.org.au/</value>   
				                    </electronic> 
				                    <physical type="streetAddress">
				                        <addressPart type="locationDescriptor">Breast Cancer Tissue Bank</addressPart>
				                        <addressPart type="streetName">Darcy Rd</addressPart>
				                        <addressPart type="suburbOrPlaceOrLocality">Westmead</addressPart>                        
				                        <addressPart type="stateOrTerritory">NSW</addressPart>
				                        <addressPart type="postCode">2145</addressPart>
				                        <addressPart type="country">Australia</addressPart>
				                    </physical>
				                    
				                </address>
				            
				            </location>
				            
				            <relatedObject>
				                <key>abctb.org.au 2</key>
				                <relation type="manages"/>
				            </relatedObject>
				            <relatedObject>
				                <key>abctb.org.au 3</key>
				                <relation type="manages"/>
				            </relatedObject>            
				            <relatedObject>
				                <key>abctb.org.au 4</key>
				                <relation type="manages"/>
				            </relatedObject>   
				            <relatedObject>
				                <key>abctb.org.au 5</key>
				                <relation type="manages"/>
				            </relatedObject>   
				            <relatedObject>
				                <key>abctb.org.au 6</key>
				                <relation type="manages"/>
				            </relatedObject>   
				            <relatedObject>
				                <key>abctb.org.au 7</key>
				                <relation type="manages"/>
				            </relatedObject>      
				            <relatedObject>
				                <key>abctb.org.au 8</key>
				                <relation type="manages"/>
				            </relatedObject>               
				              <relatedObject>
				                <key>abctb.org.au 9</key>
				                <relation type="manages"/>
				            </relatedObject>             
				            <relatedObject>
				                <key>abctb.org.au 10</key>
				                <relation type="manages"/>
				            </relatedObject>               
				             <relatedObject>
				                <key>abctb.org.au 11</key>
				                <relation type="manages"/>
				            </relatedObject>              
				            <relatedObject>
				                <key>abctb.org.au 12</key>
				                <relation type="manages"/>
				            </relatedObject>   
				            <relatedObject>
				                <key>abctb.org.au 13</key>
				                <relation type="manages"/>
				            </relatedObject>               
				            <relatedObject>
				                <key>abctb.org.au 14</key>
				                <relation type="manages"/>
				            </relatedObject>   
				            <relatedObject>
				                <key>abctb.org.au 15</key>
				                <relation type="manages"/>
				            </relatedObject>  
				            <relatedObject>
				                <key>abctb.org.au 16</key>
				                <relation type="manages"/>
				            </relatedObject>  
				            <relatedObject>
				                <key>abctb.org.au 17</key>
				                <relation type="manages"/>
				            </relatedObject>  
				            <relatedObject>
				                <key>abctb.org.au 18</key>
				                <relation type="manages"/>
				            </relatedObject>  
				            <relatedObject>
				                <key>abctb.org.au 19</key>
				                <relation type="manages"/>
				            </relatedObject>  
				            <relatedObject>
				                <key>abctb.org.au 20</key>
				                <relation type="manages"/>
				            </relatedObject>     
				            <description type="brief">The Breast Cancer Tissue Bank (BCTB) is a Breast Cancer research resource, coordinated from the Westmead Millenium Institute, and supported by a collaborative network of cancer clinicians and researchers in Australia who cooperate to provide samples and information from breast cancer patients for use in research. The initiative was launched in 2005 with support from an Enabling Grant from the National Health and Medical Research Council as well as the National Breast Cancer Foundation and Cancer Institute NSW. The overall aim of the BCTB is to improve our ability to manage breast cancer in the future.</description> 
				        </party>
				        
				    </registryObject></registryObjects>
			</metadata>
		</record>
	</ListRecords>
</OAI-PMH>') ?>
							</pre>
</p>
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
						<ul class="anchor_links">
							<li class="cat-item"><a href="#title" title="OAI API Documentation">OAI API Documentation</a></li>
							<li class="cat-item"><a href="#access" title="Accessing the Service">Accessing the Service</a></li>
							<li class="cat-item"><a href="#service" title="OAI Service URL">OAI Service URL</a></li>
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