<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger" style="margin-top: 109px;"><!-- starts header -->
	<div class="container section-space30"><!-- starts container -->
		<div class="row"><!-- starts row -->
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="k-page-title">Registry Software</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<ol class="breadcrumb pull-right">
					<li><?php echo anchor('/', 'Home'); ?></li>
					<li class="active">Registry Software</li>
				</ol>
			</div>
		</div><!-- ends row -->
	</div><!-- ends container -->
</section>
<section id="k-content" class=""><!-- section common starts -->
		
	<div class="container"><!-- starts container -->
   	 <div class="row"><!-- starts row -->
		 <div id="k-main" class="col-lg-6 col-md-6 col-sm-12"><!-- starts main content -->
			<article><!-- starts article short -->
	 		 <div><a id="title"></a><!-- starts summary -->
	   		 	<h3 class="k-fancy-title"><!-- title -->
	      			<a href="#" title="Registry Software"></a><a id="software"></a>
	    		</h3>
		   	 	<div class="clearfix col-lg-3 col-md-3 col-sm-6 k-fancy-icon-wrap mq-box">
					<i class="k-fancy-icon icon-github awesome32"></i>			

				</div>
				<h5 class="widget-title">ANDS-Registry-Core</h5>
	    		<p>
				The Registry Core PHP codebase includes a metadata registry, front-end data portal and access management system. 
				The Registry Core is <a href="https://github.com/au-research/ANDS-Registry-Core/tree/master" target="_blank">open source</a> and easy to install (see below).
				</p>

				<p><br/></p>

				<h4 class="k-fancy-title">Software Installation</h4>
				<div class="alert alert-danger">Server Requirements: Apache HTTP server, MySQL, PHP 5, Java 1.7 <small>(<a href="http://community.ands.org.au/viewtopic.php?f=211&t=3171" target="_blank">Setup Guide</a>)</small></div>

				<button type="button" class="btn btn-primary">Step 1 - Download the latest version</button>
				<p></p>
				<ul>
					<li>Download the <a href="https://github.com/au-research/ANDS-Registry-Core/archive/master.zip" target="_blank">latest ANDS-Registry-Core</a> and extract to your web server:
						<pre class="pre-small">
cd /var/www/html/
wget <green>https://github.com/au-research/ANDS-Registry-Core/archive/master.zip</green>
unzip master.zip
# you may also wish to rename the directory extracted into:
mv ANDS-Registry-Core-master <blue>myrepo</blue></pre>
					</li>
				</ul>

				<br/>

				<button type="button" class="btn btn-success">Step 2 - Setup the database</button>
				<p></p>
				<ul>
					<li>Having installed a MySQL server, setup new databases and initialise the tables:
						<pre class="pre-small">
mysql -u root -p                         # log into mysql server
mysql> CREATE DATABASE dbs_roles         # create databases
mysql> CREATE DATABASE dbs_registry</pre></li>
<li>If required, create a web user account and give it access:
<pre class="pre-small">
mysql> CREATE USER 'webuser' IDENTIFIED BY '&lt;<blue>yourpassword</blue>&gt;';
mysql> GRANT SELECT, INSERT, UPDATE, DELETE ON dbs_roles TO 'webuser';
mysql> GRANT SELECT, INSERT, UPDATE, DELETE ON dbs_registry TO 'webuser';
mysql> \q</pre></li>
<li>Import the table structure:<pre class="pre-small">
mysql -u root -p dbs_registry &lt; <blue>myrepo</blue><green>/etc/db/mysql/dbs_registry_r11_full.sql</green>
mysql -u root -p dbs_roles &lt; <blue>myrepo</blue><green>/etc/db/mysql/dbs_roles_r11_full.sql</green>
</pre>

					</li>
				</ul>
				<br/>

				<button type="button" class="btn btn-warning">Step 3 - Download and configure the search indexer</button>
				<p></p>
				<ul>
					<li>Download SOLR 4.5.0 (<a href="http://mirror.mel.bkb.net.au/pub/apache/lucene/solr/4.5.0/solr-4.5.0.zip" target="_blank">solr-4.5.0.zip</a>) and run it using Jetty:
						<pre class="pre-small">
wget <green>http://mirror.mel.bkb.net.au/pub/apache/lucene/solr/4.5.0/solr-4.5.0.zip</green>
unzip solr-4.5.0.zip
cd solr-4.5.0/example/</pre></li>
<li>Copy the SOLR schema file and start SOLR:<pre class="pre-small">
cp solrschema_r10.xml <blue>path/to/solr/</blue>collection1/conf/schema.xml
java -Dsolr.solr.home=<blue>path/to/solr/</blue> -Djetty.port=8080 -jar start.jar &amp;</pre>
					</li>
					<li><small>Note: you can also launch SOLR as a Tomcat application (recommended for production use)</small></li>
				</ul>
				<br/>

			<button type="button" class="btn btn-info">Step 4 - Update the registry config</button>
			<p></p>
			<ul>
				<li>Update your global configuration file:
					<pre class="pre-small">
cp <blue>myrepo</blue>/global_config.sample <blue>myrepo</blue>/global_config.php
# open it with your favourite editor and update Section 1:
// Details of your database server
$eDBCONF['default']['password'] = '<blue>&lt;yourpassword&gt;</blue>';

// The Server Base URL is the URL via which users access the software installation
$ENV['default_base_url'] = "<blue>http://yourwebsite.com/myrepo/</blue>"; #N.B. include trailing slash!

// The SOLR URL is the URL of the search index core
$ENV['solr_url'] = "<blue>http://yourwebsite.com:8080/solr/</blue>";</pre></li>

<li>Configure the web server .htaccess file:<small><br/>Note: this may require <code>AllowOverride All</code> in your web server configuration</small><pre class="pre-small">
cp <blue>myrepo</blue>/htaccess.sample <blue>myrepo</blue>/.htaccess
# open it with your favourite editor and update:
RewriteBase /<code><blue>myrepo/</blue></code></pre>
				</li>
			</ul>

			<p><br/></p>
			<blockquote>You're done! Visit your new registry installation at:<br/><code><green>http://yourwebsite.com/myrepo/registry/</green></code></blockquote>



			  </div>
	    	</article>
			</div>
     <aside id="k-sidebar" class="col-lg-3 col-md-4 col-sm-12 col-lg-offset-1"><!-- starts sidebar -->
      </aside><!-- ends sidebar -->			
		</div><!-- ends row -->
	</div><!-- ends container -->
</section>
<?php $this->load->view('developer_footer'); ?>