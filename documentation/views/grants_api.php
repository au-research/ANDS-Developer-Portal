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
					<li class="active"><?php echo anchor('/documentation/services/grants', 'Services'); ?></li>
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
					<div><!-- starts summary -->
						<h3 class="k-article-title"><!-- title -->
							<a href="#" title="Lorem ipsum dolor sit amet dolorum">Grants API Documentation</a>
						</h3>
						<p><!-- text -->
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque enim erat, tincidunt vitae massa id, consectetur est. Morbi 
	gravida vulputate scelerisque. Nunc laoreet elit justo, eu commodo risus volutpat id...
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
							<li class="cat-item"><a href="" title="Phasellus scelerisque">Phasellus scelerisque</a></li>
							<li class="cat-item"><a href="" title="Duis accumsan">Duis accumsan</a></li>
							<li class="cat-item"><a href="" title="Aliquam erat volutpat">Aliquam erat volutpat</a></li>
							<li class="cat-item"><a href="" title="Aenean ac nisi ornare">Aenean ac nisi ornare</a></li>
							<li class="cat-item"><a href="" title="Donec tristique">Donec tristique</a></li>
						</ul>
					</li>
				
				</ul>
			</aside><!-- ends sidebar -->
		
		</div><!-- ends row -->
		
	</div><!-- ends container -->

	</section>
<?php $this->load->view('developer_footer'); ?>