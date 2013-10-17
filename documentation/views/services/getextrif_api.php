<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">getExtRif API Documentation</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ol class="breadcrumb pull-right">
					<li><?php echo anchor('/', 'Home'); ?></li>
					<li><?php echo anchor('/documentation/services/', 'Services'); ?></li>
					<li class="active"><?php echo anchor('/documentation/services/getExtRif', 'getExtRif'); ?></li>
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
							<a href="#" title="getExtRif API Documentation">getExtRif API Documentation</a>
						</h3>
						<p><!-- text -->
						This API allows you to retrieve the enriched and annotated copy of records which generate pages in Research Data Australia.</p>

						<p>Use this API if you require more detail than what is available in the RIFCS record.
						</p>
						<h4><a id="access"></a>Accessing the Service</h4>
						<p>Institutions and individuals who would like to have access to this services must get an API key by contacting our services manager by email: <a href="mailto:services@ands.oprg.au">services@ands.oprg.au</a></p>
						<h4><a id="service"></a>getExtRif Service URL</h4>
						<p>The getExtRif api is accessible through our service point through our services portal: <br/><code><?=registry_url('services/');?>{your API KEY}/getExtRif/?{params}</code></p>
						<a id="parameters"></a><h4>Parameters:</h4><br/>				
						<p>For a listing of the getExtRif API parameters and their usage please refer to the getRIFCS API documentation.</p>
						<h4><a id="examples"></a>API call Examples</h4>
						<p>
							<a href="../../../registry/services/API/getExtRif?q=class:collection&rows=1">?q=class:collection&rows=1"</a>
							<pre class="prettyprint pre-scrollable"><?php print htmlentities('
<?xml version="1.0" encoding="UTF-8"?>
<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
        <registryObject xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:extRif="http://ands.org.au/standards/rif-cs/extendedRegistryObjects" group="Australian Ocean Data Network" extRif:enriched="true">
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
  <extRif:extendedMetadata><extRif:slug>aims-weather-station-data-cleveland-bay-platform-rain-from-03-jul-1990-to-21-oct-1992</extRif:slug><extRif:dataSourceKey>acdata.unsw.edu.au</extRif:dataSourceKey><extRif:status>PUBLISHED</extRif:status><extRif:id>128152</extRif:id><extRif:dataSourceTitle>University of New South Wales - AC Data Main</extRif:dataSourceTitle><extRif:dataSourceID>135</extRif:dataSourceID><extRif:updateTimestamp>1372744479</extRif:updateTimestamp><extRif:displayTitle>AIMS Weather Station Data - Cleveland Bay Platform Rain -  From 03 Jul 1990 To 21 Oct 1992</extRif:displayTitle><extRif:listTitle>AIMS Weather Station Data - Cleveland Bay Platform Rain -  From 03 Jul 1990 To 21 Oct 1992</extRif:listTitle><extRif:simplifiedTitle>AIMS Weather Station Data - Cleveland Bay Platform Rain -  From 03 Jul 1990 To 21 Oct 1992</extRif:simplifiedTitle><extRif:description type="brief">This data set was collected by weather sensors deployed on the AIMS Weather Station site Cleveland Bay .&lt;br /&gt;
&lt;br /&gt;
Deployment Information for Rain&lt;br /&gt;
Data Interval: From 03 Jul 1990 Through 21 Oct 1992&lt;br /&gt;
Deployment Location: Cleveland Bay Platform&lt;br /&gt;
Latitude: -19.15583 - Longitude: 146.88116</extRif:description><extRif:description type="rights">Attribution 3.0 Australia</extRif:description><extRif:description type="rights">Format for citation of data sourced from the Australian Institute of Marine Science (AIMS) in a list of references is as follows: &amp;quot;Australian Institute of Marine Science. [year-of-data-download], [Title], [data-access-URL], accessed [date-of-access]&amp;quot;.</extRif:description><extRif:description type="rights">Data, products and services from AIMS are provided &amp;quot;as is&amp;quot; without any warranty as to fitness for a particular purpose.</extRif:description><extRif:the_description>This data set was collected by weather sensors deployed on the AIMS Weather Station site Cleveland Bay .

Deployment Information for Rain
Data Interval: From 03 Jul 1990 Through 21 Oct 1992
Deployment Location: Cleveland Bay Platform
Latitude: -19.15583 - Longitude: 146.88116</extRif:the_description><extRif:subjects><extRif:subject><extRif:subject_value>Oceans  -  Ocean Temperature  - Water Temperature</extRif:subject_value><extRif:subject_type>local</extRif:subject_type><extRif:subject_resolved>Oceans  -  Ocean Temperature  - Water Temperature</extRif:subject_resolved><extRif:subject_uri></extRif:subject_uri></extRif:subject><extRif:subject><extRif:subject_value>EARTH SCIENCES - Atmospheric Sciences - Meteorology</extRif:subject_value><extRif:subject_type>local</extRif:subject_type><extRif:subject_resolved>EARTH SCIENCES - Atmospheric Sciences - Meteorology</extRif:subject_resolved><extRif:subject_uri></extRif:subject_uri></extRif:subject><extRif:subject><extRif:subject_value>0104</extRif:subject_value><extRif:subject_type>anzsrc-for</extRif:subject_type><extRif:subject_resolved>STATISTICS </extRif:subject_resolved><extRif:subject_uri>http://purl.org/au-research/vocabulary/anzsrc-for/2008/0104</extRif:subject_uri></extRif:subject><extRif:subject><extRif:subject_value>01</extRif:subject_value><extRif:subject_type>anzsrc-for</extRif:subject_type><extRif:subject_resolved>MATHEMATICAL SCIENCES</extRif:subject_resolved><extRif:subject_uri>http://purl.org/au-research/vocabulary/anzsrc-for/2008/01</extRif:subject_uri></extRif:subject><extRif:subject><extRif:subject_value>0105</extRif:subject_value><extRif:subject_type>anzsrc-for</extRif:subject_type><extRif:subject_resolved>MATHEMATICAL PHYSICS</extRif:subject_resolved><extRif:subject_uri>http://purl.org/au-research/vocabulary/anzsrc-for/2008/0105</extRif:subject_uri></extRif:subject><extRif:subject><extRif:subject_value>0103</extRif:subject_value><extRif:subject_type>anzsrc-for</extRif:subject_type><extRif:subject_resolved>NUMERICAL AND COMPUTATIONAL MATHEMATICS</extRif:subject_resolved><extRif:subject_uri>http://purl.org/au-research/vocabulary/anzsrc-for/2008/0103</extRif:subject_uri></extRif:subject><extRif:subject><extRif:subject_value>04</extRif:subject_value><extRif:subject_type>anzsrc-for</extRif:subject_type><extRif:subject_resolved>EARTH SCIENCES</extRif:subject_resolved><extRif:subject_uri>http://purl.org/au-research/vocabulary/anzsrc-for/2008/04</extRif:subject_uri></extRif:subject><extRif:subject><extRif:subject_value>9699</extRif:subject_value><extRif:subject_type>anzsrc-for</extRif:subject_type><extRif:subject_resolved>9699</extRif:subject_resolved><extRif:subject_uri></extRif:subject_uri></extRif:subject></extRif:subjects><extRif:right type="rights">Attribution 3.0 Australia</extRif:right><extRif:right type="rights">Format for citation of data sourced from the Australian Institute of Marine Science (AIMS) in a list of references is as follows: "Australian Institute of Marine Science. [year-of-data-download], [Title], [data-access-URL], accessed [date-of-access]".</extRif:right><extRif:right type="rights">Data, products and services from AIMS are provided "as is" without any warranty as to fitness for a particular purpose.</extRif:right><extRif:spatialGeometry><extRif:polygon>146.88116,-19.15583</extRif:polygon><extRif:extent>146.88116 -19.15583</extRif:extent><extRif:center>146.88116 -19.15583</extRif:center><extRif:area>0</extRif:area></extRif:spatialGeometry><extRif:related_object><extRif:related_object_key>AODN:adc@aims.gov.au</extRif:related_object_key><extRif:related_object_id>127501</extRif:related_object_id><extRif:related_object_class>party</extRif:related_object_class><extRif:related_object_display_title>Data Manager, AIMS Data Centre</extRif:related_object_display_title><extRif:related_object_relation>metadataContact</extRif:related_object_relation></extRif:related_object><extRif:related_object><extRif:related_object_key>AODN:adc@aims.gov.au</extRif:related_object_key><extRif:related_object_id>128305</extRif:related_object_id><extRif:related_object_class>party</extRif:related_object_class><extRif:related_object_display_title>Alongi, Daniel M, Dr</extRif:related_object_display_title><extRif:related_object_relation>metadataContact</extRif:related_object_relation></extRif:related_object><extRif:related_object><extRif:related_object_key>AODN:adc@aims.gov.au</extRif:related_object_key><extRif:related_object_id>127501</extRif:related_object_id><extRif:related_object_class>party</extRif:related_object_class><extRif:related_object_display_title>Data Manager, AIMS Data Centre</extRif:related_object_display_title><extRif:related_object_relation>pointOfContact</extRif:related_object_relation></extRif:related_object><extRif:related_object><extRif:related_object_key>AODN:adc@aims.gov.au</extRif:related_object_key><extRif:related_object_id>128305</extRif:related_object_id><extRif:related_object_class>party</extRif:related_object_class><extRif:related_object_display_title>Alongi, Daniel M, Dr</extRif:related_object_display_title><extRif:related_object_relation>pointOfContact</extRif:related_object_relation></extRif:related_object><extRif:related_object><extRif:related_object_key>AODN:adc@aims.gov.au</extRif:related_object_key><extRif:related_object_id>127501</extRif:related_object_id><extRif:related_object_class>party</extRif:related_object_class><extRif:related_object_display_title>Data Manager, AIMS Data Centre</extRif:related_object_display_title><extRif:related_object_relation>isManagedBy</extRif:related_object_relation></extRif:related_object><extRif:related_object><extRif:related_object_key>AODN:adc@aims.gov.au</extRif:related_object_key><extRif:related_object_id>128305</extRif:related_object_id><extRif:related_object_class>party</extRif:related_object_class><extRif:related_object_display_title>Alongi, Daniel M, Dr</extRif:related_object_display_title><extRif:related_object_relation>isManagedBy</extRif:related_object_relation></extRif:related_object><extRif:related_object><extRif:related_object_key>AODN:reception@aims.gov.au</extRif:related_object_key><extRif:related_object_id>127505</extRif:related_object_id><extRif:related_object_class>party</extRif:related_object_class><extRif:related_object_display_title>Bainbridge, Scott, Mr</extRif:related_object_display_title><extRif:related_object_relation>custodian</extRif:related_object_relation></extRif:related_object></extRif:extendedMetadata></registryObject></registryObjects>') ?>

  						</pre>
							<br/>
							<a href='../../../registry/services/API/getExtRif.json?q=group:"Australian%20Ocean%20Data%20Network"&rows=1'>.json?q=group:"Australian%20Ocean%20Data%20Network"&rows=1</a>
							<pre class="prettyprint pre-scrollable"><?php print htmlentities('{"status":"success","message":["        <registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
        <registryObject xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:extRif="http://ands.org.au/standards/rif-cs/extendedRegistryObjects" group="Australian Ocean Data Network" extRif:enriched="true">
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
  <extRif:extendedMetadata><extRif:slug>aims-weather-station-data-cleveland-bay-platform-rain-from-03-jul-1990-to-21-oct-1992</extRif:slug><extRif:dataSourceKey>acdata.unsw.edu.au</extRif:dataSourceKey><extRif:status>PUBLISHED</extRif:status><extRif:id>128152</extRif:id><extRif:dataSourceTitle>University of New South Wales - AC Data Main</extRif:dataSourceTitle><extRif:dataSourceID>135</extRif:dataSourceID><extRif:updateTimestamp>1372744479</extRif:updateTimestamp><extRif:displayTitle>AIMS Weather Station Data - Cleveland Bay Platform Rain -  From 03 Jul 1990 To 21 Oct 1992</extRif:displayTitle><extRif:listTitle>AIMS Weather Station Data - Cleveland Bay Platform Rain -  From 03 Jul 1990 To 21 Oct 1992</extRif:listTitle><extRif:simplifiedTitle>AIMS Weather Station Data - Cleveland Bay Platform Rain -  From 03 Jul 1990 To 21 Oct 1992</extRif:simplifiedTitle><extRif:description type="brief">This data set was collected by weather sensors deployed on the AIMS Weather Station site Cleveland Bay .&lt;br /&gt;
&lt;br /&gt;
Deployment Information for Rain&lt;br /&gt;
Data Interval: From 03 Jul 1990 Through 21 Oct 1992&lt;br /&gt;
Deployment Location: Cleveland Bay Platform&lt;br /&gt;
Latitude: -19.15583 - Longitude: 146.88116</extRif:description><extRif:description type="rights">Attribution 3.0 Australia</extRif:description><extRif:description type="rights">Format for citation of data sourced from the Australian Institute of Marine Science (AIMS) in a list of references is as follows: &amp;quot;Australian Institute of Marine Science. [year-of-data-download], [Title], [data-access-URL], accessed [date-of-access]&amp;quot;.</extRif:description><extRif:description type="rights">Data, products and services from AIMS are provided &amp;quot;as is&amp;quot; without any warranty as to fitness for a particular purpose.</extRif:description><extRif:the_description>This data set was collected by weather sensors deployed on the AIMS Weather Station site Cleveland Bay .

Deployment Information for Rain
Data Interval: From 03 Jul 1990 Through 21 Oct 1992
Deployment Location: Cleveland Bay Platform
Latitude: -19.15583 - Longitude: 146.88116</extRif:the_description><extRif:subjects><extRif:subject><extRif:subject_value>Oceans  -  Ocean Temperature  - Water Temperature</extRif:subject_value><extRif:subject_type>local</extRif:subject_type><extRif:subject_resolved>Oceans  -  Ocean Temperature  - Water Temperature</extRif:subject_resolved><extRif:subject_uri></extRif:subject_uri></extRif:subject><extRif:subject><extRif:subject_value>EARTH SCIENCES - Atmospheric Sciences - Meteorology</extRif:subject_value><extRif:subject_type>local</extRif:subject_type><extRif:subject_resolved>EARTH SCIENCES - Atmospheric Sciences - Meteorology</extRif:subject_resolved><extRif:subject_uri></extRif:subject_uri></extRif:subject><extRif:subject><extRif:subject_value>0104</extRif:subject_value><extRif:subject_type>anzsrc-for</extRif:subject_type><extRif:subject_resolved>STATISTICS </extRif:subject_resolved><extRif:subject_uri>http://purl.org/au-research/vocabulary/anzsrc-for/2008/0104</extRif:subject_uri></extRif:subject><extRif:subject><extRif:subject_value>01</extRif:subject_value><extRif:subject_type>anzsrc-for</extRif:subject_type><extRif:subject_resolved>MATHEMATICAL SCIENCES</extRif:subject_resolved><extRif:subject_uri>http://purl.org/au-research/vocabulary/anzsrc-for/2008/01</extRif:subject_uri></extRif:subject><extRif:subject><extRif:subject_value>0105</extRif:subject_value><extRif:subject_type>anzsrc-for</extRif:subject_type><extRif:subject_resolved>MATHEMATICAL PHYSICS</extRif:subject_resolved><extRif:subject_uri>http://purl.org/au-research/vocabulary/anzsrc-for/2008/0105</extRif:subject_uri></extRif:subject><extRif:subject><extRif:subject_value>0103</extRif:subject_value><extRif:subject_type>anzsrc-for</extRif:subject_type><extRif:subject_resolved>NUMERICAL AND COMPUTATIONAL MATHEMATICS</extRif:subject_resolved><extRif:subject_uri>http://purl.org/au-research/vocabulary/anzsrc-for/2008/0103</extRif:subject_uri></extRif:subject><extRif:subject><extRif:subject_value>04</extRif:subject_value><extRif:subject_type>anzsrc-for</extRif:subject_type><extRif:subject_resolved>EARTH SCIENCES</extRif:subject_resolved><extRif:subject_uri>http://purl.org/au-research/vocabulary/anzsrc-for/2008/04</extRif:subject_uri></extRif:subject><extRif:subject><extRif:subject_value>9699</extRif:subject_value><extRif:subject_type>anzsrc-for</extRif:subject_type><extRif:subject_resolved>9699</extRif:subject_resolved><extRif:subject_uri></extRif:subject_uri></extRif:subject></extRif:subjects><extRif:right type="rights">Attribution 3.0 Australia</extRif:right><extRif:right type="rights">Format for citation of data sourced from the Australian Institute of Marine Science (AIMS) in a list of references is as follows: "Australian Institute of Marine Science. [year-of-data-download], [Title], [data-access-URL], accessed [date-of-access]".</extRif:right><extRif:right type="rights">Data, products and services from AIMS are provided "as is" without any warranty as to fitness for a particular purpose.</extRif:right><extRif:spatialGeometry><extRif:polygon>146.88116,-19.15583</extRif:polygon><extRif:extent>146.88116 -19.15583</extRif:extent><extRif:center>146.88116 -19.15583</extRif:center><extRif:area>0</extRif:area></extRif:spatialGeometry><extRif:related_object><extRif:related_object_key>AODN:adc@aims.gov.au</extRif:related_object_key><extRif:related_object_id>127501</extRif:related_object_id><extRif:related_object_class>party</extRif:related_object_class><extRif:related_object_display_title>Data Manager, AIMS Data Centre</extRif:related_object_display_title><extRif:related_object_relation>metadataContact</extRif:related_object_relation></extRif:related_object><extRif:related_object><extRif:related_object_key>AODN:adc@aims.gov.au</extRif:related_object_key><extRif:related_object_id>128305</extRif:related_object_id><extRif:related_object_class>party</extRif:related_object_class><extRif:related_object_display_title>Alongi, Daniel M, Dr</extRif:related_object_display_title><extRif:related_object_relation>metadataContact</extRif:related_object_relation></extRif:related_object><extRif:related_object><extRif:related_object_key>AODN:adc@aims.gov.au</extRif:related_object_key><extRif:related_object_id>127501</extRif:related_object_id><extRif:related_object_class>party</extRif:related_object_class><extRif:related_object_display_title>Data Manager, AIMS Data Centre</extRif:related_object_display_title><extRif:related_object_relation>pointOfContact</extRif:related_object_relation></extRif:related_object><extRif:related_object><extRif:related_object_key>AODN:adc@aims.gov.au</extRif:related_object_key><extRif:related_object_id>128305</extRif:related_object_id><extRif:related_object_class>party</extRif:related_object_class><extRif:related_object_display_title>Alongi, Daniel M, Dr</extRif:related_object_display_title><extRif:related_object_relation>pointOfContact</extRif:related_object_relation></extRif:related_object><extRif:related_object><extRif:related_object_key>AODN:adc@aims.gov.au</extRif:related_object_key><extRif:related_object_id>127501</extRif:related_object_id><extRif:related_object_class>party</extRif:related_object_class><extRif:related_object_display_title>Data Manager, AIMS Data Centre</extRif:related_object_display_title><extRif:related_object_relation>isManagedBy</extRif:related_object_relation></extRif:related_object><extRif:related_object><extRif:related_object_key>AODN:adc@aims.gov.au</extRif:related_object_key><extRif:related_object_id>128305</extRif:related_object_id><extRif:related_object_class>party</extRif:related_object_class><extRif:related_object_display_title>Alongi, Daniel M, Dr</extRif:related_object_display_title><extRif:related_object_relation>isManagedBy</extRif:related_object_relation></extRif:related_object><extRif:related_object><extRif:related_object_key>AODN:reception@aims.gov.au</extRif:related_object_key><extRif:related_object_id>127505</extRif:related_object_id><extRif:related_object_class>party</extRif:related_object_class><extRif:related_object_display_title>Bainbridge, Scott, Mr</extRif:related_object_display_title><extRif:related_object_relation>custodian</extRif:related_object_relation></extRif:related_object></extRif:extendedMetadata></registryObject></registryObjects>"]'); ?>
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
						<ul>
							<li class="cat-item"><a href="#title" title="getExtRif API Documentation">getRIFCS API Documentation</a></li>
							<li class="cat-item"><a href="#access" title="Accessing the Service">Accessing the Service</a></li>
							<li class="cat-item"><a href="#service" title="getExtRif Service URL">getExtRif Service URL</a></li>
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