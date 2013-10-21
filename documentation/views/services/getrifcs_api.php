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
	  <li class="active">getRIFCS</li>
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
	      <a href="#" title="getRIFCS API Documentation">getRIFCS API Documentation</a><a id="about"></a>
	    </h3>
	    <div style="float:right; width:200px; margin-left:40px;">
	      <a href="<?=asset_url('img/getRIFCS-architecture.png','core');?>" class="colorbox" title="Illustrative Architecture Diagram - RIFCS API">
		<img src="<?=asset_url('img/getRIFCS-architecture.png','core');?>" style="width:90%;" alt="Architecture Diagram" />
		<br/><small>View Service Architecture Diagram</small>
	      </a>
	    </div>
	    <p><!-- text -->
	      The getRIFCS API provides access to the contents of the ANDS Collections Registry, a metadata repository which underpins the core infrastructure of <a href="http://researchdata.ands.org.au" target="_blank">Research Data Australia</a> and the <a href="http://ands.org.au/ardc.html" target="_blank">ARDC</a>.
	    </p>

	    <p>
	      Using this API, you can perform complex search queries and retrieve the original RIF-CS XML, as received by ANDS from the data source.
	    </p>

	    <p>
	      Example use cases for the service include:

	      <ul>
		<li><strong>Retrieving collection records</strong> for a particular institution, region or subject area</li>
		<li><strong>Harvesting</strong> a subset of the ANDS Metadata Registry (see also: <?=anchor(base_url('documentation/services/oai'),'OAI-PMH');?>)</li>
		<li>Populating a pick-list or lookup service (also try the <?=anchor(base_url('documentation/widgets/registry_widget'),'Collections Registry Search Widget');?>)</li>
	      </ul>
	    </p>

	    <p>
	      The service can retrieve contextual metadata such as activities, parties and services as well as collection records. Use this API if your system uses RIFCS internally or if you prefer being able to work with and validate XML content.
	    </p>

	    <p><br/></p>

	    <h3 class="k-fancy-title"><a id="usage"></a>Service Usage</h3>
	    <div class="alert alert-success">
	      <b>Before you start!</b> To use this service, institutions or individuals must <a href="<?=registry_url('services/register/');?>" target="_blank">register a free API key</a>.
	    </div>
	    <h4><a id="service"></a>Resource URL</h4>
	    <blockquote><code><?=registry_url('services/');?><blue>{YOUR API KEY}</blue>/<green>getRIFCS</green>?<blue>{params}</blue></code></blockquote>
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
		  <small>By default, <span class="bold">results are limited to 10 records per request</span>. Use the <code>start</code> and <code>rows</code> parameters to step through additional results.</em></small>
		</li>
	      </ul>
	    </p>

	    <p><br/></p>

	    <h4>Service Parameters:</h4><a id="params"></a>
	    <p><span class="label label-warning">Useful Note</span><small> These parameters have the same meaning as defined by <a href="http://wiki.apache.org/solr/CommonQueryParameters" target="_blank">SOLR Common Query Parameters</a> (SOLR <a href="http://lucene.apache.org/solr/" target="_blank">enterprise search server</a>). </small></p>
	    <?php
	      $config = array(
    array('q',
      '<p>The q parameter is normally the main query for the request.</p>
      <p>All values of <code>q</code> <u>must be</u> URL-encoded. It is also recommended that string values are surrounded by quotes.</p>
      <p>By default, the field seperator is "OR" unless "AND" is explicitly specified (see example usage #4).',

      '<p>1. Matching all records (i.e. unrestricted search): <br/><code>q=*:*</code></p>
      <p>2. Matching records based on a particular field: <br/><code>q=class:(collection)</code></p>
      <p>3. Matching multiple field values (OR): <br/><code>q=class:(collection OR party)</code></p>
      <p>4. Matching on multiple fields (AND): <br/><code>q=class:(collection) AND data_source_title:("CSIRO")</code></p>
      <p>5. Wildcard searching on string fields: <br/><code>q=display_title:(*survey*)</code></p>
      <p><span class="label label-success">Wait!</span> How do I know what fields to search? See '. anchor('documentation/services/indexed_fields', 'Indexed Fields', array('target'=>'_blank'))
    ),

    // No real need for the public to use fq -- they usually don't care about performance or edistmax
   /* array('fq',
      '<p>"fq" stands for Filter Query.</p>
      <p>This parameter can be used to specify a query that can be used to restrict the super set of documents that can be returned.</p>',
      '<p><code>q=*:*&amp;fq=+originating_source:("http://resdata.unsw.edu.au/")</code></p>'
    ),*/

    array('sort',
      '<p>Sorting can be done on any indexed field which only has single values. Sort can be either: <code>desc</code> or <code>asc</code>. </p>
      <p>Note: Fields which are indexed as string or integers are sortable. Other field types may produce unexpected results.</p>',
      '<p>1. Sort based on key in ascending order: <br/><code>q=*:*&amp;sort=key asc</code></p>
      <p>2. Sort based on update time in descending order (most recent first): <br/><code>q=key:*:*&amp;sort=update_timestamp desc</code></p>'
    ),
    array('<br/>start<br/><br/>rows',
      '<p>This parameter is used to paginate results from a query.</p>
      <p>When specified, it indicates the offset in the complete result set for where the set of returned documents should begin and end.</p>
      <p>By default, results <code>start</code> at <code>0</code> with <code>10</code> <code>rows</code> displayed. That is, by default only 10 rows are displayed in response to a search query.</p>',
      '<p>1. Display the first 10 records with a key starting AODN:<br/>
      <code>q=key:AODN*</code></p>
      <p>2. Display the next 10 records with a key starting AODN:<br/>
      <code>q=key:AODN*&amp;start=10</code></p>
      <p>3. Display 100 records starting from number 1000:<br/>
      <code>q=*:*&amp;start=1000&amp;rows=100</code></p>'
    ),
  );
	    ?>

	    <table class="table table-striped table-bordered table-hover" style="font-size:0.8em;">
	      <thead>
		<td width="15%">Parameter</td><td width="30%">Description</td><td>Example Usage</td>
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

	    <p><br/></p>
	    <h4>Response Format</h4>
	    <small>
	    <ul>
	      <li>By default, responses from this service are returned in XML format which can be validated against the <a href="http://www.ands.org.au/resource/rif-cs.html" target="_blank">RIF-CS Schema</a>.</li>
	      <li>If no records match your query or the query was malformed, an empty <code>&lt;registryObjects&gt;</code> wrapper will be returned.</li>
	    </ul>
	    </small>

	    <p><br/></p>
	    <h4>Common Questions</h4><a id="questions"></a>
	    <small>
	    <ul>
	      <li><u>How do I know what fields I can search?</u>
		<p>Consult the <a href="<?=base_url('documentation/services/indexed_fields');?>">Indexed Fields List</a> to see what fields you can search against.</p></li>

	      <li><u>How do I know what values those fields are likely to have?</u>
		<p>A good question! Some of the fields available to search don't actually exist in the RIF-CS schema and
		  for some use cases, knowing what their values might be can be quite tricky. We suggest using our <a href="<?=base_url('documentation/services/getMetadata');?>"><code>getMetadata</code> web service</a>
		  which will return the field values matching your request.</p></li>
	    </ul>
	    </small>

	    <p><br/></p>
	    <p><br/></p>

	    <h3 class="k-fancy-title"><a id="example1"></a>Example Usage</h3>

	    <h4>1. Return collection records from a particular group/organisation</h4><a id="example2"></a>
	    <p>
	      Return all records of class "<i>collection</i>" which have the group attribute "<i>Australian Ocean Data Network</i>":

	      <small><ul>
		<li>HTTP GET Request: <br/>
		  <code>&gt;
		    <a target="_blank" href="<?=registry_url("services/api/getRIFCS?" .
		    "q=".
		      rawurlencode("class:(collection)").
		    "&rows=" .
		      rawurlencode("3"));?>">

		    getRIFCS?q=<blue><?="class:(collection) AND group:(\"Australian Ocean Data Network\")" . "</blue>" .
		     "&rows=<blue>" . rawurlencode("3");?></blue>

		  </code><br/></a>
		  <br/>
		</li>

		<li>Service Response:
	      <pre class="prettyprint pre-scrollable pre-small"><?php print htmlentities('
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

  </pre></small>

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
	  <p>&nbsp;</p>
	  <hr/>


	  <h4>2. Filtering record results based on more advanced searches</h4><a id="example2"></a>
	    <p>
	      Return the <i>most recently harvested</i> collection which has "<i>marine</i>" anywhere in its title:

	      <small><ul>
		<li>HTTP GET Request: <br/>
		  <code>&gt;
		    <a target="_blank" href="<?=registry_url("services/api/getRIFCS?" .
		    "q=".
		      rawurlencode("class:(collection) AND display_title:(\"*marine*\")").
		    "&sort=" .
		      rawurlencode("update_timestamp desc").
		    "&rows=1" );?>">

		    q=<blue>class:(collection) AND display_title:("*marine*")</blue>&amp;sort=<blue>update_timestamp desc</blue>&amp;rows=1</blue>

		  </code><br/></a>
		  <br/>
		</li>

		<li>Service Response:
	      <pre class="prettyprint pre-scrollable pre-small"><?php print htmlentities('<?xml version="1.0" encoding="UTF-8"?>
<registryObjects xmlns="http://ands.org.au/standards/rif-cs/registryObjects" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://ands.org.au/standards/rif-cs/registryObjects http://services.ands.org.au/documentation/rifcs/schema/registryObjects.xsd">
	<registryObject group="Public Record Office Victoria">
    <key>PROV VPRS 8336</key>
    <originatingSource>http://www.prov.vic.gov.au</originatingSource>
    <collection dateModified="2013-07-24 14:26:17" type="collection">
      <identifier type="local">VPRS 8336</identifier>
      <dates type="dc.created">
	<date dateFormat="W3CDTF" type="dateFrom">1898</date>
	<date dateFormat="W3CDTF" type="dateTo">1986</date>
      </dates>
      <name type="primary">
	<namePart>Notices to Mariners [Ports and Harbours Branch]  </namePart>
      </name>
      <location>
        <address>
          <electronic type="url">
	    <value>http://www.access.prov.vic.gov.au/public/component/daPublicBaseContainer?component=daViewSeries&amp;amp;breadcrumbPath=Home/Access%20the%20Collection/Browse%20The%20Collection/Series%20Details&amp;amp;entityId=8336</value>
          </electronic>
	  <physical>
	    <addressPart type="text">&amp;lt;p&amp;gt;&amp;lt;a title="Public Record Office Victoria" href="http://prov.vic.gov.au" target="_blank"&amp;gt;Victorian Archives Centre&amp;lt;/a&amp;gt;&amp;lt;br /&amp;gt;99 Shiel St  North Melbourne VIC 3051, Australia&amp;lt;br /&amp;gt;Ph: +61 3 9348 5600&amp;lt;/p&amp;gt;</addressPart>
	  </physical>
        </address>
      </location>
      <relatedObject>
	<key>PROV VA 606</key>
	<relation type="isCreatedBy">
	  <description>1898 - 1900</description>
	</relation>
      </relatedObject>
      <relatedObject>
	<key>PROV VA 669</key>
	<relation type="isCreatedBy">
	  <description>1900 - 1983</description>
	</relation>
      </relatedObject>
      <relatedObject>
	<key>PROV VA 673</key>
	<relation type="isCreatedBy">
	  <description>1983 - 1986</description>
	</relation>
      </relatedObject>
      <relatedObject>
	<key>PROV VA 1426</key>
	<relation type="isOwnedBy">
	  <description>1986 - 1995</description>
	</relation>
      </relatedObject>
      <relatedObject>
	<key>PROV VA 4028</key>
	<relation type="isOwnedBy">
	  <description>2003 - continuing</description>
	</relation>
      </relatedObject>
      <subject type="ANZSRC">2103 HISTORICAL STUDIES</subject>
      <description type="full">&amp;lt;BR /&amp;gt;&amp;lt;BR /&amp;gt;The contents of the bound volumes can be accessed via an alphabetically arranged location/subject index (eg. electric light, dredging, navigation, Apollo Bay, Geelong) found in front of each bound volume.&amp;lt;BR /&amp;gt;&amp;lt;BR /&amp;gt;System of Arrangement/Control&amp;lt;BR /&amp;gt;&amp;lt;BR /&amp;gt;Series: Chronologically arranged bound volumes (1898-1976) and copies of notices clipped together for each year (1976-1986).&amp;lt;BR /&amp;gt;Contents: notices pasted in chronological sequence in the bound volumes for the period 1898-1976 and copies clipped together for each year 1976-1986.&amp;lt;BR /&amp;gt;&amp;lt;BR /&amp;gt;Contents/Function&amp;lt;BR /&amp;gt;&amp;lt;BR /&amp;gt;These notices providing navigation directions to mariners in Victorian water were originally issued by the Ports and Harbours Branch operating within the Department of Trade and Customs (VA 606) till 1900 and subsequently the Department of Public Works (VA 669) 1900-1983;  and the Ministry of Transport (VA 8386) 1983-1986.&amp;lt;BR /&amp;gt;&amp;lt;BR /&amp;gt;Series Date Range&amp;lt;BR /&amp;gt;&amp;lt;BR /&amp;gt;It is not certain when the series commenced. However, it appears that the series ends in 1986 with the integration of the Ports and Harbours Division of the Public Works Department with Victoria\'s three port authorities at Melbourne, Geelong and Portland.&amp;lt;BR /&amp;gt;&amp;lt;BR /&amp;gt;The P1 consignment of the series consists of two bound volumes for the period 1898-1976 and loose copies of notices pinned together for each year (1</description>
      <description type="logo">&amp;lt;p&amp;gt;&amp;lt;img src="http://metadata.prov.vic.gov.au/image/LOGO_BLACK.jpg" alt="logo" /&amp;gt;&amp;lt;/p&amp;gt;</description>
      <coverage>
	<spatial type="kmlPolyCoords">141.000000,-34.000000 142.919336,-34.145604 144.582129,-35.659230 147.742627,-35.873175 150.024219,-37.529041 150.200000,-39.200000 141.000000,-39.200000 141.000000,-34.000000 141.000000,-34.000000</spatial>
	<temporal>
	  <text>Series date range : ? - 1986</text>
	  <text>Series in custody date range : 1898 - 1986</text>
	  <text>Contents in custody date range : 1898 - 1986</text>
	  <date dateFormat="W3CDTF" type="dateFrom">1898</date>
	  <date dateFormat="W3CDTF" type="dateTo">1986</date>
	</temporal>
      </coverage>
      <rights>
	<rightsStatement rightsUri="http://prov.vic.gov.au/provguide-25">Records held by Public Record Office Victoria (PROV) are covered by copyright. For information on reusing material from the collection see PROVguide 25</rightsStatement>
	<accessRights>Open</accessRights>
      </rights>
      <citationInfo>
	<fullCitation>VA 606,VA 669,VA 673. (2002): Notices to Mariners [Ports and Harbours Branch]   Ver.1. http://www.prov.vic.gov.au. Local: VPRS 8336 </fullCitation>
      </citationInfo>
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
		<li class="cat-item"><a href="#about">About the getRIFCS API</a></li>
		<li class="cat-item"><a href="#usage">Service Usage</a></li>
		<li class="cat-item"><a href="#params">Parameters</a></li>
		<li class="cat-item"><a href="#questions">Common Questions</a></li>

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