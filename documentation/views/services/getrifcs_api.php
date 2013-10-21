<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">getRIFCS API Documentation</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ol class="breadcrumb pull-right">
					<li><?php echo anchor('/', 'Home'); ?></li>
					<li><?php echo anchor('/documentation/services/', 'Services'); ?></li>
					<li class="active">getRIFCS</li>
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
							<a href="#" title="getRIFCS API Documentation">getRIFCS API Documentation</a>
						</h3>
						<p><!-- text -->
						This API provides a simple method to retrieve RIFCS XML for one or more objects in the Registry.

						Use this API if your system uses RIFCS internally or if you prefer being able to work with and validate XML content.
						</p>
						<h4><a id="access"></a>Accessing the Service</h4>
						<p>Institutions and individuals who would like to have access to this services must get an API key by contacting our services manager by email: <a href="mailto:services@ands.oprg.au">services@ands.oprg.au</a></p>
						<h4><a id="service"></a>getRIFCS Service URL</h4>
						<p>The getRIFCS api is accessible through our service point through our services portal: <br/><code><?=registry_url('services/');?>{your API KEY}/getRIFCS/?{params}</code></p>
						<a id="parameters"></a><h4>Parameters:</h4><br/>
						

						<p>The getRIFCS API supports a subset of the <a href="http://wiki.apache.org/solr/CommonQueryParameters">SOLR Common Query Parameters</a>. <a href="../../../registry/services/query_schema">View the schema fields</a> 

<?php 
	$config = array(
		array('q', '<p>The q parameter is normally the main query for the request.</p>', '<p>q=*:*</p><p>q=class:collection</p>'),
		array('fq','<p>"fq" stands for Filter Query.</p><p>This parameter can be used to specify a query that can be used to restrict the super set of documents that can be returned.</p>','<p>q=*:*&fq=+subject_value_unresolved:("111299")%20AND%20originating_source:("http://resdata.unsw.edu.au/")</p>'),
		array('sort', '<p>Sorting can be done on any indexed field which only has single values. Sort can be either desc or asc</p>','<p>q=*:*&sort=key%20desc</p><p>q=key:*:*&sort=update_timestamp%20asc</p>'),
		array('start','<p>This parameter is used to paginate results from a query. When specified, it indicates the offset in the complete result set for the queries where the set of returned documents should begin.</p><p>The default value is "0".</p>', '<p>q=*:*&start=11</p><p>q=key:AODN*&start=11&rows=10</p>'),
		array('rows','<p>This parameter is used to paginate results from a query. It specify the maximum number of documents from the complete result set to return to the client for every request. You can consider it as the maximum number of result appear in the page.</p><p>The default value is "10", which is used if the parameter is not specified.</p>','<p>q=*:*&rows=3</p><p>q=key:AODN*&start=7&rows=3</p>'),
	);
?>
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<td width="15%">Parameter</td><td>Description</td><td>Examples</td>
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
						</p>
						<p>As with all parameters, when expressed in a URL, special characters need to be properly URL escaped.</p>
						<p>Request a JSON response by substituting /getRIFCS.json/ for /getRIFCS/ in the request URI</p>
						
						<h4><a id="examples"></a>API call Examples</h4>
						<p>
							<a href="../../../registry/services/API/getRIFCS?q=class:collection&rows=3">?q=class:collection&rows=3"</a>
							<pre class="prettyprint pre-scrollable"><?php print htmlentities('
<?xml version="1.0" encoding="UTF-8"?>
<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
        <registryObject group="Australian Ocean Data Network">
    <key>AODN:c9cb7389-7af1-4e0a-8c95-6f295f1cec1e</key>
    <originatingSource>http://www.aims.gov.au/adc</originatingSource>
    <collection type="dataset">
      <identifier type="local">AODN:c9cb7389-7af1-4e0a-8c95-6f295f1cec1e</identifier>
      <name type="primary">
        <namePart type="full">AIMS Weather Station Data - Cleveland Bay Platform Rain -  From 03 Jul 1990 To 21 Oct 1992</namePart>
      </name>
      <location>
        <address>
          <electronic type="url">
            <value>http://mest.aodn.org.au:80/geonetwork/srv/en/metadata.show?uuid=c9cb7389-7af1-4e0a-8c95-6f295f1cec1e</value>
          </electronic>
        </address>
      </location>
      <location>
        <address>
          <electronic type="url">
            <value>http://data.aims.gov.au/metadataviewer/faces/view.xhtml?uuid=c9cb7389-7af1-4e0a-8c95-6f295f1cec1e</value>
          </electronic>
        </address>
      </location>
      <location dateFrom="1990-07-03T14:00:00" dateTo="1992-10-21T11:00:00" type="coverage">
        <spatial type="iso19139dcmiBox">northlimit=-19.15583; southlimit=-19.15583; westlimit=146.88116; eastLimit=146.88116; projection=WGS84</spatial>
      </location>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="metadataContact"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:reception@aims.gov.au</key>
        <relation type="custodian"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="pointOfContact"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:Australian Bureau of Statistics: National Information and Referral Service (NIRS)</key>
        <relation type="owner"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="isManagedBy"/>
      </relatedObject>
      <subject type="local">Oceans  -  Ocean Temperature  - Water Temperature</subject>
      <subject type="local">EARTH SCIENCES - Atmospheric Sciences - Meteorology</subject>
      <subject type="anzsrc-for">0104</subject>
      <subject type="anzsrc-for">0105</subject>
      <subject type="anzsrc-for">0103</subject>
      <subject type="anzsrc-for">04</subject>
      <subject type="anzsrc-for">9699</subject>
      <description type="brief">This data set was collected by weather sensors deployed on the AIMS Weather Station site Cleveland Bay .

Deployment Information for Rain
Data Interval: From 03 Jul 1990 Through 21 Oct 1992
Deployment Location: Cleveland Bay Platform
Latitude: -19.15583 - Longitude: 146.88116</description>
      <description type="rights">Attribution 3.0 Australia</description>
      <description type="rights">Format for citation of data sourced from the Australian Institute of Marine Science (AIMS) in a list of references is as follows: "Australian Institute of Marine Science. [year-of-data-download], [Title], [data-access-URL], accessed [date-of-access]".</description>
      <description type="rights">Data, products and services from AIMS are provided "as is" without any warranty as to fitness for a particular purpose.</description>
    </collection>
  </registryObject>
        <registryObject group="Australian Ocean Data Network">
    <key>AODN:147b75a3-be17-4c7f-b12d-dbda75446fa1</key>
    <originatingSource>http://www.aims.gov.au/adc</originatingSource>
    <collection type="dataset">
      <identifier type="local">AODN:147b75a3-be17-4c7f-b12d-dbda75446fa1</identifier>
      <name type="primary">
        <namePart type="full">Temperature Logger Data at Penguin Is East,  From 15 May 2012 To 31 Jan 2013</namePart>
      </name>
      <location>
        <address>
          <electronic type="url">
            <value>http://mest.aodn.org.au:80/geonetwork/srv/en/metadata.show?uuid=147b75a3-be17-4c7f-b12d-dbda75446fa1</value>
          </electronic>
        </address>
      </location>
      <location>
        <address>
          <electronic type="url">
            <value>http://mest.aodn.org.au:80/geonetwork/srv/en/metadata.show?uuid=147b75a3-be17-4c7f-b12d-dbda75446fa1</value>
          </electronic>
        </address>
      </location>
      <location>
        <address>
          <electronic type="url">
            <value>http://mest.aodn.org.au:80/geonetwork/srv/en/metadata.show?uuid=147b75a3-be17-4c7f-b12d-dbda75446fa1</value>
          </electronic>
        </address>
      </location>
      <location>
        <address>
          <electronic type="url">
            <value>http://mest.aodn.org.au:80/geonetwork/srv/en/metadata.show?uuid=147b75a3-be17-4c7f-b12d-dbda75446fa1</value>
          </electronic>
        </address>
      </location>
      <location>
        <address>
          <electronic type="url">
            <value>http://data.aims.gov.au/metadataviewer/faces/view.xhtml?uuid=147b75a3-be17-4c7f-b12d-dbda75446fa1</value>
          </electronic>
        </address>
      </location>
      <location dateFrom="2012-05-15T02:30:00" dateTo="2013-01-31T15:00:00" type="coverage">
        <spatial type="iso19139dcmiBox">northlimit=-32.30145; southlimit=-32.30145; westlimit=115.69378; eastLimit=115.69378; projection=WGS84</spatial>
      </location>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="metadataContact"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:reception@aims.gov.au</key>
        <relation type="hasCollector"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="pointOfContact"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:LM Olsen, G Major, K Shein, J Scialdone, R Vogel, S Leicester, H Weir, S Ritz, T Stevens, M Meaux, C Solomon, R Bilodeau, M Holland, T Northcutt, RA Restrepo</key>
        <relation type="owner"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="isManagedBy"/>
      </relatedObject>
      <subject type="local">Oceans  -  Coastal Processes  - Coral Reefs</subject>
      <subject type="local">Oceans  -  Ocean Temperature  - Water Temperature</subject>
      <subject type="local">Coral bleaching</subject>
      <subject type="local">Climate change</subject>
      <subject type="anzsrc-for">0104</subject>
      <subject type="anzsrc-for">0105</subject>
      <subject type="anzsrc-for">0103</subject>
      <subject type="anzsrc-for">04</subject>
      <subject type="anzsrc-for">9699</subject>
      <description type="brief">This data set was collected by one or more temperature loggers deployed around the site of Penguin Is East.

Deployment Information for Water Temperature at 2.2m 
Data Interval: From 15 May 2012 Through 31 Jan 2013
Deployment Location: PENGUIN
Latitude: -32.30145 - Longitude: 115.69378
Sensor Description: HOBO Water Temp Pro v2
Sensor Manufacturer: HOBO
Sensor Model: Water Temp Pro v2</description>
      <description type="rights">All AIMS data, products and services are provided "as is" and AIMS does not warrant their fitness for a particular purpose or non-infringement. While AIMS has made every reasonable effort to ensure high quality of the data, products and services, to the extent permitted by law the data, products and services are provided without any warranties of any kind, either expressed or implied, including without limitation any implied warranties of title, merchantability, and fitness for a particular purpose or non-infringement. AIMS make no representation or warranty that the data, products and services are accurate, complete, reliable or current. To the extent permitted by law, AIMS exclude all liability to any person arising directly or indirectly from the use of the data, products and services.</description>
      <description type="rights">Attribution 3.0 Australia</description>
      <description type="rights">Format for citation of data sourced from the Australian Institute of Marine Science (AIMS) in a list of references is as follows: "Australian Institute of Marine Science. [year-of-data-download], [Title], [data-access-URL], accessed [date-of-access]".</description>
    </collection>
  </registryObject>
        <registryObject group="Australian Ocean Data Network">
    <key>AODN:2bf0e568-935d-42fd-9e8b-d946e308d8ba</key>
    <originatingSource>http://www.aims.gov.au/adc</originatingSource>
    <collection type="dataset">
      <identifier type="local">AODN:2bf0e568-935d-42fd-9e8b-d946e308d8ba</identifier>
      <name type="primary">
        <namePart type="full">Assessing habitat damage caused by the grounding of the Shen Neng 1 on Douglas Shoal, southern Great Barrier Reef, using towed video (Towvid)</namePart>
      </name>
      <location>
        <address>
          <electronic type="url">
            <value>http://mest.aodn.org.au:80/geonetwork/srv/en/metadata.show?uuid=2bf0e568-935d-42fd-9e8b-d946e308d8ba</value>
          </electronic>
        </address>
      </location>
      <location>
        <address>
          <electronic type="url">
            <value>http://data.aims.gov.au/metadataviewer/faces/view.xhtml?uuid=2bf0e568-935d-42fd-9e8b-d946e308d8ba</value>
          </electronic>
        </address>
      </location>
      <location dateFrom="2010-04-17T00:00:00" dateTo="2010-04-18T00:00:00" type="coverage">
        <spatial type="iso19139dcmiBox">northlimit=-23.091667; southlimit=-23.101783; westlimit=151.645833; eastLimit=151.659967; projection=WGS84</spatial>
      </location>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="metadataContact"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:reception@aims.gov.au</key>
        <relation type="hasCollector"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="pointOfContact"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:Olsen LM, Major G, Shein K, Scialdone J, Vogel R, Leicester S, Weir H, Ritz S, Stevens T, Meaux M, Solomon C, Bilodeau R, Holland M, Northcutt T, Restrepo RA</key>
        <relation type="owner"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="isManagedBy"/>
      </relatedObject>
      <relatedObject>
        <key>Australian Institute of Marine Science (AIMS)</key>
        <relation type="pointOfContact"/>
      </relatedObject>
      <subject type="local">Oceans  -  Coastal Processes  - Shoals</subject>
      <subject type="local">Biosphere  -  Aquatic Ecosystems  - Benthic Habitat</subject>
      <subject type="local">Towed video (Towvid)</subject>
      <subject type="anzsrc-for">0104</subject>
      <subject type="anzsrc-for">0105</subject>
      <subject type="anzsrc-for">0103</subject>
      <subject type="anzsrc-for">04</subject>
      <subject type="anzsrc-for">9699</subject>
      <description type="brief">Towed video (Towvid) was deployed on eight occasions over a two day period (17-18 April, 2010) on Douglas Shoal. Sites included the initial grounding site of the Shen Neng 1, on the south east edge of the Shoal, the final grounding site and a randomly selected unimpacted site on the same shoal but a minimum of 1050 m from the ship\'s path.

Initially, it was envisioned that the multibeam sonar bathymetry survey would generate real time high resolution topographical imagery to guide the Towvid survey. However, rough conditions on the voyage meant that post-survey analysis was required to reduce signal noise. Therefore, the path of the stern of the Shen Neng 1, together with the lay of the ship (provided by GBRMPA), was used and tows were planned to intercept and traverse areas where damage was likely to have occurred from contact of the ship\'s hull on the shoal along with areas of shoal not affected by the grounded ship.

A towed camera system incorporating a standard definition video camera and digital stills camera was deployed to recover imagery of the benthos. A computer-based application (Towvid), developed by AIMS, allowed for real-time classification of substrata, benthos and individual organisms. Data points were recorded at 2-second intervals or on demand when a new substrate, benthos or organism was observed.

Habitats were classified based on the substrata (4 categories) and overlying epibenthos (8 categories) and individual organisms (4 categories) viewed on the tapes.</description>
      <description type="rights">All AIMS data, products and services are provided "as is" and AIMS does not warrant their fitness for a particular purpose or non-infringement. While AIMS has made every reasonable effort to ensure high quality of the data, products and services, to the extent permitted by law the data, products and services are provided without any warranties of any kind, either expressed or implied, including without limitation any implied warranties of title, merchantability, and fitness for a particular purpose or non-infringement. AIMS make no representation or warranty that the data, products and services are accurate, complete, reliable or current. To the extent permitted by law, AIMS exclude all liability to any person arising directly or indirectly from the use of the data, products and services.</description>
      <description type="rights">Ownership of all Intellectual Property Rights in the data remains with the Australian Institute of Marine Science (AIMS) and all use of the data must acknowledge AIMS.</description>
      <description type="rights">All users of AIMS data must acknowledge the source of the material in the following manner: "Data was sourced from the Australian Institute of Marine Science (AIMS)."</description>
      <description type="rights">Format for citation of data sourced from Australian Institute of Marine Science (AIMS) in a list of reference is as follows: "Australian Institute of Marine Science. [year-of-data-download], [Title], [data-access-URL], accessed (date-of-access]".</description>
      <description type="rights">The data is under exclusive access period. Contact AIMS for possible access to the data within this period.</description>
    </collection>
  </registryObject></registryObjects>') ?>

  </pre>
							<br/>
							<a href='../../../registry/services/API/getRIFCS.json?q=group:"Australian%20Ocean%20Data%20Network"&rows=3'>.json?q=group:"Australian%20Ocean%20Data%20Network"&rows=3</a>
							<pre class="prettyprint pre-scrollable"><?php print htmlentities('{"status":"success","message":["        <registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
        <registryObject group="Australian Ocean Data Network">
    <key>AODN:c9cb7389-7af1-4e0a-8c95-6f295f1cec1e</key>
    <originatingSource>http://www.aims.gov.au/adc</originatingSource>
    <collection type="dataset">
      <identifier type="local">AODN:c9cb7389-7af1-4e0a-8c95-6f295f1cec1e</identifier>
      <name type="primary">
        <namePart type="full">AIMS Weather Station Data - Cleveland Bay Platform Rain -  From 03 Jul 1990 To 21 Oct 1992</namePart>
      </name>
      <location>
        <address>
          <electronic type="url">
            <value>http://mest.aodn.org.au:80/geonetwork/srv/en/metadata.show?uuid=c9cb7389-7af1-4e0a-8c95-6f295f1cec1e</value>
          </electronic>
        </address>
      </location>
      <location>
        <address>
          <electronic type="url">
            <value>http://data.aims.gov.au/metadataviewer/faces/view.xhtml?uuid=c9cb7389-7af1-4e0a-8c95-6f295f1cec1e</value>
          </electronic>
        </address>
      </location>
      <location dateFrom="1990-07-03T14:00:00" dateTo="1992-10-21T11:00:00" type="coverage">
        <spatial type="iso19139dcmiBox">northlimit=-19.15583; southlimit=-19.15583; westlimit=146.88116; eastLimit=146.88116; projection=WGS84</spatial>
      </location>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="metadataContact"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:reception@aims.gov.au</key>
        <relation type="custodian"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="pointOfContact"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:Australian Bureau of Statistics: National Information and Referral Service (NIRS)</key>
        <relation type="owner"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="isManagedBy"/>
      </relatedObject>
      <subject type="local">Oceans  -  Ocean Temperature  - Water Temperature</subject>
      <subject type="local">EARTH SCIENCES - Atmospheric Sciences - Meteorology</subject>
      <subject type="anzsrc-for">0104</subject>
      <subject type="anzsrc-for">0105</subject>
      <subject type="anzsrc-for">0103</subject>
      <subject type="anzsrc-for">04</subject>
      <subject type="anzsrc-for">9699</subject>
      <description type="brief">This data set was collected by weather sensors deployed on the AIMS Weather Station site Cleveland Bay .

Deployment Information for Rain
Data Interval: From 03 Jul 1990 Through 21 Oct 1992
Deployment Location: Cleveland Bay Platform
Latitude: -19.15583 - Longitude: 146.88116</description>
      <description type="rights">Attribution 3.0 Australia</description>
      <description type="rights">Format for citation of data sourced from the Australian Institute of Marine Science (AIMS) in a list of references is as follows: "Australian Institute of Marine Science. [year-of-data-download], [Title], [data-access-URL], accessed [date-of-access]".</description>
      <description type="rights">Data, products and services from AIMS are provided "as is" without any warranty as to fitness for a particular purpose.</description>
    </collection>
  </registryObject>
        <registryObject group="Australian Ocean Data Network">
    <key>AODN:147b75a3-be17-4c7f-b12d-dbda75446fa1</key>
    <originatingSource>http://www.aims.gov.au/adc</originatingSource>
    <collection type="dataset">
      <identifier type="local">AODN:147b75a3-be17-4c7f-b12d-dbda75446fa1</identifier>
      <name type="primary">
        <namePart type="full">Temperature Logger Data at Penguin Is East,  From 15 May 2012 To 31 Jan 2013</namePart>
      </name>
      <location>
        <address>
          <electronic type="url">
            <value>http://mest.aodn.org.au:80/geonetwork/srv/en/metadata.show?uuid=147b75a3-be17-4c7f-b12d-dbda75446fa1</value>
          </electronic>
        </address>
      </location>
      <location>
        <address>
          <electronic type="url">
            <value>http://mest.aodn.org.au:80/geonetwork/srv/en/metadata.show?uuid=147b75a3-be17-4c7f-b12d-dbda75446fa1</value>
          </electronic>
        </address>
      </location>
      <location>
        <address>
          <electronic type="url">
            <value>http://mest.aodn.org.au:80/geonetwork/srv/en/metadata.show?uuid=147b75a3-be17-4c7f-b12d-dbda75446fa1</value>
          </electronic>
        </address>
      </location>
      <location>
        <address>
          <electronic type="url">
            <value>http://mest.aodn.org.au:80/geonetwork/srv/en/metadata.show?uuid=147b75a3-be17-4c7f-b12d-dbda75446fa1</value>
          </electronic>
        </address>
      </location>
      <location>
        <address>
          <electronic type="url">
            <value>http://data.aims.gov.au/metadataviewer/faces/view.xhtml?uuid=147b75a3-be17-4c7f-b12d-dbda75446fa1</value>
          </electronic>
        </address>
      </location>
      <location dateFrom="2012-05-15T02:30:00" dateTo="2013-01-31T15:00:00" type="coverage">
        <spatial type="iso19139dcmiBox">northlimit=-32.30145; southlimit=-32.30145; westlimit=115.69378; eastLimit=115.69378; projection=WGS84</spatial>
      </location>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="metadataContact"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:reception@aims.gov.au</key>
        <relation type="hasCollector"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="pointOfContact"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:LM Olsen, G Major, K Shein, J Scialdone, R Vogel, S Leicester, H Weir, S Ritz, T Stevens, M Meaux, C Solomon, R Bilodeau, M Holland, T Northcutt, RA Restrepo</key>
        <relation type="owner"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="isManagedBy"/>
      </relatedObject>
      <subject type="local">Oceans  -  Coastal Processes  - Coral Reefs</subject>
      <subject type="local">Oceans  -  Ocean Temperature  - Water Temperature</subject>
      <subject type="local">Coral bleaching</subject>
      <subject type="local">Climate change</subject>
      <subject type="anzsrc-for">0104</subject>
      <subject type="anzsrc-for">0105</subject>
      <subject type="anzsrc-for">0103</subject>
      <subject type="anzsrc-for">04</subject>
      <subject type="anzsrc-for">9699</subject>
      <description type="brief">This data set was collected by one or more temperature loggers deployed around the site of Penguin Is East.

Deployment Information for Water Temperature at 2.2m 
Data Interval: From 15 May 2012 Through 31 Jan 2013
Deployment Location: PENGUIN
Latitude: -32.30145 - Longitude: 115.69378
Sensor Description: HOBO Water Temp Pro v2
Sensor Manufacturer: HOBO
Sensor Model: Water Temp Pro v2</description>
      <description type="rights">All AIMS data, products and services are provided "as is" and AIMS does not warrant their fitness for a particular purpose or non-infringement. While AIMS has made every reasonable effort to ensure high quality of the data, products and services, to the extent permitted by law the data, products and services are provided without any warranties of any kind, either expressed or implied, including without limitation any implied warranties of title, merchantability, and fitness for a particular purpose or non-infringement. AIMS make no representation or warranty that the data, products and services are accurate, complete, reliable or current. To the extent permitted by law, AIMS exclude all liability to any person arising directly or indirectly from the use of the data, products and services.</description>
      <description type="rights">Attribution 3.0 Australia</description>
      <description type="rights">Format for citation of data sourced from the Australian Institute of Marine Science (AIMS) in a list of references is as follows: "Australian Institute of Marine Science. [year-of-data-download], [Title], [data-access-URL], accessed [date-of-access]".</description>
    </collection>
  </registryObject>
        <registryObject group="Australian Ocean Data Network">
    <key>AODN:2bf0e568-935d-42fd-9e8b-d946e308d8ba</key>
    <originatingSource>http://www.aims.gov.au/adc</originatingSource>
    <collection type="dataset">
      <identifier type="local">AODN:2bf0e568-935d-42fd-9e8b-d946e308d8ba</identifier>
      <name type="primary">
        <namePart type="full">Assessing habitat damage caused by the grounding of the Shen Neng 1 on Douglas Shoal, southern Great Barrier Reef, using towed video (Towvid)</namePart>
      </name>
      <location>
        <address>
          <electronic type="url">
            <value>http://mest.aodn.org.au:80/geonetwork/srv/en/metadata.show?uuid=2bf0e568-935d-42fd-9e8b-d946e308d8ba</value>
          </electronic>
        </address>
      </location>
      <location>
        <address>
          <electronic type="url">
            <value>http://data.aims.gov.au/metadataviewer/faces/view.xhtml?uuid=2bf0e568-935d-42fd-9e8b-d946e308d8ba</value>
          </electronic>
        </address>
      </location>
      <location dateFrom="2010-04-17T00:00:00" dateTo="2010-04-18T00:00:00" type="coverage">
        <spatial type="iso19139dcmiBox">northlimit=-23.091667; southlimit=-23.101783; westlimit=151.645833; eastLimit=151.659967; projection=WGS84</spatial>
      </location>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="metadataContact"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:reception@aims.gov.au</key>
        <relation type="hasCollector"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="pointOfContact"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:Olsen LM, Major G, Shein K, Scialdone J, Vogel R, Leicester S, Weir H, Ritz S, Stevens T, Meaux M, Solomon C, Bilodeau R, Holland M, Northcutt T, Restrepo RA</key>
        <relation type="owner"/>
      </relatedObject>
      <relatedObject>
        <key>AODN:adc@aims.gov.au</key>
        <relation type="isManagedBy"/>
      </relatedObject>
      <relatedObject>
        <key>Australian Institute of Marine Science (AIMS)</key>
        <relation type="pointOfContact"/>
      </relatedObject>
      <subject type="local">Oceans  -  Coastal Processes  - Shoals</subject>
      <subject type="local">Biosphere  -  Aquatic Ecosystems  - Benthic Habitat</subject>
      <subject type="local">Towed video (Towvid)</subject>
      <subject type="anzsrc-for">0104</subject>
      <subject type="anzsrc-for">0105</subject>
      <subject type="anzsrc-for">0103</subject>
      <subject type="anzsrc-for">04</subject>
      <subject type="anzsrc-for">9699</subject>
      <description type="brief">Towed video (Towvid) was deployed on eight occasions over a two day period (17-18 April, 2010) on Douglas Shoal. Sites included the initial grounding site of the Shen Neng 1, on the south east edge of the Shoal, the final grounding site and a randomly selected unimpacted site on the same shoal but a minimum of 1050 m from the ship\'s path.

Initially, it was envisioned that the multibeam sonar bathymetry survey would generate real time high resolution topographical imagery to guide the Towvid survey. However, rough conditions on the voyage meant that post-survey analysis was required to reduce signal noise. Therefore, the path of the stern of the Shen Neng 1, together with the lay of the ship (provided by GBRMPA), was used and tows were planned to intercept and traverse areas where damage was likely to have occurred from contact of the ship\'s hull on the shoal along with areas of shoal not affected by the grounded ship.

A towed camera system incorporating a standard definition video camera and digital stills camera was deployed to recover imagery of the benthos. A computer-based application (Towvid), developed by AIMS, allowed for real-time classification of substrata, benthos and individual organisms. Data points were recorded at 2-second intervals or on demand when a new substrate, benthos or organism was observed.

Habitats were classified based on the substrata (4 categories) and overlying epibenthos (8 categories) and individual organisms (4 categories) viewed on the tapes.</description>
      <description type="rights">All AIMS data, products and services are provided "as is" and AIMS does not warrant their fitness for a particular purpose or non-infringement. While AIMS has made every reasonable effort to ensure high quality of the data, products and services, to the extent permitted by law the data, products and services are provided without any warranties of any kind, either expressed or implied, including without limitation any implied warranties of title, merchantability, and fitness for a particular purpose or non-infringement. AIMS make no representation or warranty that the data, products and services are accurate, complete, reliable or current. To the extent permitted by law, AIMS exclude all liability to any person arising directly or indirectly from the use of the data, products and services.</description>
      <description type="rights">Ownership of all Intellectual Property Rights in the data remains with the Australian Institute of Marine Science (AIMS) and all use of the data must acknowledge AIMS.</description>
      <description type="rights">All users of AIMS data must acknowledge the source of the material in the following manner: "Data was sourced from the Australian Institute of Marine Science (AIMS)."</description>
      <description type="rights">Format for citation of data sourced from Australian Institute of Marine Science (AIMS) in a list of reference is as follows: "Australian Institute of Marine Science. [year-of-data-download], [Title], [data-access-URL], accessed (date-of-access]".</description>
      <description type="rights">The data is under exclusive access period. Contact AIMS for possible access to the data within this period.</description>
    </collection>
  </registryObject></registryObjects>"]}'); ?>
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

					<li class="widget widget_categories clearfix sticky">
						<h2 class="widget-title">Select from the menu...<span class="k-widget-title-tit"></span></h2>
						<ul class="anchor_links">
							<li class="cat-item"><a href="#title" title="getRIFCS API Documentation">getRIFCS API Documentation</a></li>
							<li class="cat-item"><a href="#access" title="Accessing the Service">Accessing the Service</a></li>
							<li class="cat-item"><a href="#service" title="getRIFCS Service URL">getRIFCS Service URL</a></li>
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