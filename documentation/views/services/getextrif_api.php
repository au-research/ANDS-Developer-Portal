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
    <li class="active">getExtRif</li>
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
        <a href="#" title="getExtRif API Documentation">getExtRif API Documentation</a><a id="about"></a>
      </h3>
      <div style="float:right; width:200px; margin-left:40px;">
        <a href="<?=asset_url('img/getExtRif-architecture.png','core');?>" class="colorbox" title="Illustrative Architecture Diagram - getExtRif API">
    <img src="<?=asset_url('img/getExtRif-architecture.png','core');?>" style="width:90%;" alt="Architecture Diagram" />
    <br/><small>View Service Architecture Diagram</small>
        </a>
      </div>
      <p><!-- text -->
        The getExtRif API provides access to the contents of the ANDS Collections Registry, much like the <?=anchor(base_url('documentation/services/getRIFCS'),'getRIFCS API');?>. 
      </p>
      <p>The important difference is that getExtRif includes an additional non-RIFCS element called <code>&lt;extRif:extendedMetadata&gt;</code>. During the processing of new records in
        the ANDS Registry, this element is populated with additional metadata about the record content and it's context. 
      </p>

      <p>ANDS is able to exploit the rich mesh of metadata and services infrastructure to "enrich" or "annotate" the record content.<p>

      <p>
        Example of these annotations include:
        <ul>
    <li>resolving subject strings against a controlled vocabulary service (<small><code>&lt;extRif:subjects&gt;</code></small>)</li>
    <li>analysing the spatial information provided and translating it to a geometry compatible with Google Maps (<small><code>&lt;extRif:spatialGeometry&gt;</code></small>)</li>
    <li>richly identifying the links to other objects in the registry (<small><code>&lt;extRif:related_object&gt;</code></small>)</li>
    <li>storing information about the date the record was received in the registry and what URL it was allocated in Research Data Australia (<small><code>&lt;extRif:updateTimestamp&gt;</code> and <code>&lt;extRif:slug&gt;</code></small>)</li>
        </ul>
      </p>

      <p>
        These details are often difficult or impossible to determined from the original RIF-CS XML alone. Use this service is you require the richer content stored in the extended metadata, inferred by ANDS and its partner systems. 
      </p>

      <p><br/></p>

      <h3 class="k-fancy-title"><a id="usage"></a>Service Usage</h3>
      <div class="alert alert-success">
        <b>Before you start!</b> To use this service, institutions or individuals must <a href="http://devl.ands.org.au/minh/registry/services/register/" target="_blank">register for a free API key</a>.
      </div>
      <h4><a id="service"></a>Resource URL</h4>
      <blockquote><code><?=registry_url('services/');?><blue>{YOUR API KEY}</blue>/<green>getExtRif</green>?<blue>{params}</blue></code></blockquote>
      <div class="alert alert-warning">
        Please refer to the <a href="<?=base_url('documentation/services/getRIFCS');?>">getRIFCS service documentation</a> for a description of valid parameters to use for this service. Other than the inclusion of extended metadata in the response contents, these services are identical.
      </div>
      <p>
      <ul>
        <li>
          <small>This API is a <a href="http://net.tutsplus.com/tutorials/other/a-beginners-introduction-to-http-and-rest/" target="_blank">RESTful Web Service</a>. Simply replace the <blue>blue</blue> parameters with the appropriate values and issue a HTTP GET request.</small>
        </li>
        <li>
          <small>Replace <code><blue>{YOUR API KEY}</blue></code> with the key your organisation registered (<a href="<?=registry_url('services/register/');?>" target="_blank">no API key? register for free</a>)</small>
        </li>
        <li>
          <small>By default, <span class="bold">results are limited to 10 records per request</span>. Use the <code>start</code> and <code>rows</code> parameters to step through additional results.</em></small>
        </li>
      </ul>
      </p>


      <p><br/></p>
      <h4>Common Questions</h4><a id="questions"></a>
      <small>
      <ul>
        <li><u>What do the fields in <code>extRif:extendedMetadata</code> actually mean?</u>
    <p>We are still working on documenting the extRif namespace properly, however, we suggest you refer to the <a href="<?=base_url('documentation/services/indexed_fields');?>">Indexed Fields List</a> as many of these are mapped directly out of the extended metadata.</p></li>

      </ul>
      </small>

      <p><br/></p>
      <p><br/></p>

      <h3 class="k-fancy-title"><a id="example1"></a>Example Usage</h3>

   


    <h4>1. Retrieving extended metadata for a record</h4><a id="example2"></a>
      <p>
        Return a particular record (including it's <code>extRif</code> annotations):<small>
        <br/><i>(look for the <code>&lt;extRif:extendedMetadata&gt;</code> element!)</i></small>

        <small><ul>
    <li>HTTP GET Request: <br/>
    
      <code>&gt;
        <a target="_blank" href="<?=registry_url("services/api/getExtRif?" .
        "q=key:(".
          rawurlencode("\"AODN:c9cb7389-7af1-4e0a-8c95-6f295f1cec1e\"") .")");?>">

        getExtRif?q=<blue>key:("AODN:c9cb7389-7af1-4e0a-8c95-6f295f1cec1e")</blue>

      </code><br/></a>
      <br/>
    </li>

    <li>Service Response:
        <pre class="prettyprint pre-scrollable pre-small"><?php print htmlentities('
<?xml version="1.0" encoding="UTF-8"?>
<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
  <registryObject xmlns:extRif="http://ands.org.au/standards/rif-cs/extendedRegistryObjects" group="Australian Ocean Data Network" extRif:enriched="true">
    <key>AODN:c9cb7389-7af1-4e0a-8c95-6f295f1cec1e</key>
    <originatingSource>http://www.aims.gov.au/adc</originatingSource>

      <extRif:extendedMetadata>
          <extRif:slug>aims-weather-station-data-cleveland-bay-platform-rain-from-03-jul-1990-to-21-oct-1992</extRif:slug>
          <extRif:dataSourceKey>acdata.unsw.edu.au</extRif:dataSourceKey>
          <extRif:status>PUBLISHED</extRif:status>

          <extRif:id>128152</extRif:id>
          <extRif:dataSourceTitle>University of New South Wales - AC Data Main</extRif:dataSourceTitle>
          <extRif:dataSourceID>135</extRif:dataSourceID>
          <extRif:updateTimestamp>1372744479</extRif:updateTimestamp>

          <extRif:displayTitle>AIMS Weather Station Data - Cleveland Bay Platform Rain -  From 03 Jul 1990 To 21 Oct 1992</extRif:displayTitle>
          <extRif:listTitle>AIMS Weather Station Data - Cleveland Bay Platform Rain -  From 03 Jul 1990 To 21 Oct 1992</extRif:listTitle>
          <extRif:simplifiedTitle>AIMS Weather Station Data - Cleveland Bay Platform Rain -  From 03 Jul 1990 To 21 Oct 1992</extRif:simplifiedTitle>

         <extRif:the_description>This data set was collected by weather sensors deployed on the AIMS Weather Station site Cleveland Bay.</extRif:the_description>

          <extRif:subjects>
              <extRif:subject>
                <extRif:subject_value>Oceans  -  Ocean Temperature  - Water Temperature</extRif:subject_value>
                <extRif:subject_type>local</extRif:subject_type>
                <extRif:subject_resolved>Oceans  -  Ocean Temperature  - Water Temperature</extRif:subject_resolved>
                <extRif:subject_uri></extRif:subject_uri>
              </extRif:subject>
              <extRif:subject>
                <extRif:subject_value>EARTH SCIENCES - Atmospheric Sciences - Meteorology</extRif:subject_value>
                <extRif:subject_type>local</extRif:subject_type>
                <extRif:subject_resolved>EARTH SCIENCES - Atmospheric Sciences - Meteorology</extRif:subject_resolved>
                <extRif:subject_uri></extRif:subject_uri>
              </extRif:subject>
              <extRif:subject>
                <extRif:subject_value>01</extRif:subject_value>
                <extRif:subject_type>anzsrc-for</extRif:subject_type>
                <extRif:subject_resolved>MATHEMATICAL SCIENCES</extRif:subject_resolved>
                <extRif:subject_uri>http://purl.org/au-research/vocabulary/anzsrc-for/2008/01</extRif:subject_uri>
              </extRif:subject> 
          </extRif:subjects>

          <extRif:spatialGeometry>
            <extRif:polygon>146.88116,-19.15583</extRif:polygon>
            <extRif:extent>146.88116 -19.15583</extRif:extent>
            <extRif:center>146.88116 -19.15583</extRif:center>
            <extRif:area>0</extRif:area>
          </extRif:spatialGeometry>

          <extRif:related_object>
            <extRif:related_object_key>AODN:adc@aims.gov.au</extRif:related_object_key>
            <extRif:related_object_id>127501</extRif:related_object_id>
            <extRif:related_object_class>party</extRif:related_object_class>
            <extRif:related_object_display_title>Data Manager, AIMS Data Centre</extRif:related_object_display_title>
            <extRif:related_object_relation>metadataContact</extRif:related_object_relation>
          </extRif:related_object>

          <extRif:related_object>
            <extRif:related_object_key>AODN:adc@aims.gov.au</extRif:related_object_key>
            <extRif:related_object_id>128305</extRif:related_object_id>
            <extRif:related_object_class>party</extRif:related_object_class>
            <extRif:related_object_display_title>Alongi, Daniel M, Dr</extRif:related_object_display_title>
            <extRif:related_object_relation>metadataContact</extRif:related_object_relation>
          </extRif:related_object>

      </extRif:extendedMetadata>

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
 </registryObject></registryObjects>');?>
        </pre>
        </li>
        </ul></small>
        <p><br/></p>
        <hr/>
        <br/>
  </article><!-- ends article short -->
      </div><!-- ends main content -->

      <aside id="k-sidebar" class="col-lg-3 col-md-4 col-sm-12 col-lg-offset-1"><!-- starts sidebar -->
  <div id="k-sidebar-splitter" class="clearfix section-space60"><span></span></div>
  <div class="sticky" style="position: fixed; top: 200px; width: 262px;">

    <ul id="k-sidebar-list" class="list-unstyled">

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
    <li class="cat-item"><a href="#about">About the getExtRif API</a></li>
    <li class="cat-item"><a href="#usage">Service Usage</a></li>

    <li class="cat-item"><a href="#example1">Example Usage</a></li>

    <li class="cat-item"><a href="<?=base_url('documentation/services/indexed_fields');?>" target="_blank">Indexed Fields List</a></li>
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