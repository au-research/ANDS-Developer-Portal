<?php $this->load->view('developer_header'); ?>
<section id="k-titler" class="fixed-head-marger"><!-- starts header -->
    
        <div class="container section-space30"><!-- starts container -->
        
            <div class="row"><!-- starts row -->
            
            	<div class="col-lg-6 col-md-6 col-sm-12">
                	<h2 class="k-page-title">Theme Components</h2>
                </div>
                
            	<div class="col-lg-6 col-md-6 col-sm-12">
                	<ol class="breadcrumb pull-right">
                    	<li><a href="index.html" title="Home Page">Home Page</a></li>
                        <li><a href="" title="Pages">Pages</a></li>
                        <li class="active">Components</li>
                    </ol>
                </div>
            
            </div><!-- ends row -->
            
        </div><!-- ends container -->
    
    </section><!-- ends header -->
    
    <section id="k-content"><!-- starts content -->
    
        <div class="container section-space60"><!-- starts container -->
        
            <div class="row"><!-- starts row -->
            
            	<div class="col-lg-12"><!-- starts modal section -->
                
                	<h2 class="widget-title">Modal Window</h2>
                    
                    <div class="k-call-out last-item">
                    Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.
                    You can open Modals <a href="#myModal" title="Open Modal window" data-toggle="modal">from links</a> or buttons.
                    </div>
                    <div class="gap10"></div>
                    <p>
                    <a href="#myModal" title="Open Modal window" class="btn btn-default" data-toggle="modal">OPEN MODAL WINDOW</a>
                    </p>
                    
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" class="modal fade" id="myModal" style="display: none;"><!-- MODAL STARTS -->
                    	<div class="modal-dialog">
                    		<div class="modal-content">
                    
                    			<div class="modal-header"><!-- modal header -->
                    				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
                   					<h4 id="myModalLabel" class="modal-title">Modal Heading</h4>
                    			</div>
                                
                    			<div class="modal-body"><!-- modal body -->
                   					<p>
                                    Phasellus porta nisl et enim auctor euismod. Nunc lectus purus, congue quis pulvinar vitae, tempus et risus. Nulla vestibulum purus ut dui molestie facilisis. Sed elementum vel velit vel ornare. Nam pharetra nisi quis nisi gravida consequat.
                                    </p>
                    
                    				<h4>Popover in a Modal</h4>
                    				<p>
                                    Nulla vestibulum purus ut dui molestie facilisis. Sed elementum vel velit vel ornare lorem ipsum <a href="" data-placement="top" data-toggle="popover" data-container="body" class="k-pop-over" data-original-title="What is an iPad?" data-content="iPad is a line of tablet computers designed and marketed by Apple Inc., which runs Apple's iOS.">iPad</a> Nam id lectus mollis, auctor massa eu, porttitor orci. Etiam pretium sem lectus, pellentesque viverra lorem dapibus eu.
                                    </p>
                    
                    				<h4>Tooltips in a Modal</h4>
                    				<p>
                                     Nam id lectus mollis, auctor massa eu, porttitor orci <a href="" data-placement="top" data-toggle="tooltip" data-original-title="CSS3 is divided into several separate documents called modules.">CSS3</a> pretium sem lectus, pellentesque viverra lorem dapibus eu.
                                    </p>

                    			</div>
                                
                    			<div class="modal-footer"><!-- modal footer -->
                    				<button data-dismiss="modal" class="btn btn-danger" type="button">Close</button>
                    				<button class="btn btn-success" type="button">Save changes</button>
                    			</div>
                    
                    		</div>
                    	</div>
                    </div><!-- MODAL ENDS -->
                    
                </div>
            
            </div><!-- ends row -->
            
            <div class="row"><!-- starts row -->
            
                <div class="gap30"></div>
                
                <div class="col-lg-12">
                    <h2 class="widget-title">Easy pie chart</h2>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mq-box"><!-- pie chart 1 starts -->
                    <div class="k-chart-wrap text-center">
                        <div class="chart" data-percent="96">96%</div>
                        <div class="label">ON-TIME PROJECTS</div>
                    </div>
                </div><!-- pie chart 1 ends -->
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mq-box"><!-- pie chart 2 starts -->
                    <div class="k-chart-wrap text-center">
                        <div class="chart" data-percent="78">78%</div>
                        <div class="label">FULL TIME</div>
                    </div>
                </div><!-- pie chart 2 ends -->
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mq-box"><!-- pie chart 3 starts -->
                    <div class="k-chart-wrap text-center">
                        <div class="chart" data-percent="61">61%</div>
                        <div class="label">FREELANCERS</div>
                    </div>
                </div><!-- pie chart 3 ends -->
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><!-- pie chart 4 starts -->
                    <div class="k-chart-wrap text-center">
                        <div class="chart" data-percent="17">17%</div>
                        <div class="label">REJECTED WORK</div>
                    </div>
                </div><!-- pie chart 4 ends -->
        
            </div><!-- ends row -->
        
            <div class="row"><!-- starts row -->
            
            	<div class="gap60"></div>
                
                <div class="col-lg-6 col-md-6 col-sm-12 mq-box"><!-- starts tabs wrapper -->
                
                	<h2 class="widget-title">Tabs</h2>
                
                    <ul class="nav nav-tabs nav-justified"><!-- starts tab controls -->
                    	<li class="active"><a href="#k-tab-download" data-toggle="tab">BROCHURE</a></li>
                    	<li><a href="#k-tab-profile" data-toggle="tab">PROFILE</a></li>
                    	<li><a href="#k-tab-settings" data-toggle="tab">SETTINGS</a></li>
                    </ul><!-- ends tab controls -->
                    
                    <div class="tab-content"><!-- starts tab containers -->
                
                        <div id="k-tab-download" class="tab-pane fade in active"><!-- tab 1 starts -->
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque enim erat, tincidunt vitae massa id, consectetur est. Morbi gravida vulputate scelerisque. Nunc laoreet elit justo, eu commodo risus volutpat id. Aenean ac nis ornare, sagittis quam sagittis. Donec tristique diam dui, non euismod nulla tincidunt nec.
                            </p>
                            <div class="gap10"></div>
                            <p>
                            	<a href="" title="Download" class="btn btn-success"><i class="icon-cloud-download"></i> &nbsp; DOWNLOAD NOW</a>
                            </p>
                        </div><!-- tab 1 ends -->
                        
                        <div id="k-tab-profile" class="tab-pane fade"><!-- tab 2 starts -->
                            <p>
                            <img src="img/icons/icon_upload.png" alt="Right" class="alignleft" />Phasellus porta nisl et enim auctor euismod. Nunc lectus purus, congue quis pulvinar vitae, tempus et risus. Nulla vestibulum purus ut dui molestie facilisis. Sed elementum vel velit vel ornare. Nam pharetra nisi quis nisi gravida consequat. Nam id lectus mollis, auctor massa eu, porttitor orci. Etiam pretium sem lectus, pellentesque viverra lorem dapibus eu.
                            </p>
                        </div><!-- tab 2 ends -->
                        
                        <div id="k-tab-settings" class="tab-pane fade"><!-- tab 3 starts -->
                            <p>
                            <span class="badge badge-warning">1</span> &nbsp; 
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque enim erat, tincidunt vitae massa id, consectetur est. Duis vel placerat nisi. Vestibulum tempus metus eros, non porttitor ipsum ultrices nec. In eleifend nulla dui. Aliquam ut nisi id tortor lacinia interdum nec at magna.
                            </p>
                            <p>
                            <span class="badge badge-warning">2</span> &nbsp; 
                            Aenean ac nis ornare, sagittis quam sagittis. Donec tristique diam dui, non euismod nulla tincidunt nec. In ut sapien id neque fermentum congue et et dui. Quisque pellentesque faucibus mattis. Donec eu sem turpis.
                            </p>
                        </div><!-- tab 3 ends -->
                        
                    </div><!-- ends tab containers -->
                    
                </div><!-- ends tabs wrapper -->
                
                <div class="col-lg-6 col-md-6 col-sm-12"><!-- starts pills wrapper -->
                
                	<h2 class="widget-title">Pills</h2>
                
                    <ul class="nav nav-pills"><!-- starts pills controls -->
                    	<li class="active"><a href="#k-tab-download-2" data-toggle="tab">BROCHURE</a></li>
                    	<li><a href="#k-tab-profile-2" data-toggle="tab">PROFILE</a></li>
                    	<li><a href="#k-tab-settings-2" data-toggle="tab">SETTINGS</a></li>
                    </ul><!-- ends pills controls -->
                    
                    <div class="tab-content"><!-- starts pills containers -->
                
                        <div id="k-tab-download-2" class="tab-pane fade in active"><!-- pills container 1 starts -->
                            <img src="img/misc/article_photo_1.jpg" alt="Image" class="img-responsive" />
                        </div><!-- pills container 1 ends -->
                        
                        <div id="k-tab-profile-2" class="tab-pane fade"><!-- pills container 2 starts -->
                            <p>
                            <img src="img/icons/icon_compass.png" alt="Right" class="alignright" />Vivamus nec eros pretium, viverra metus at, tincidunt diam. Ut a faucibus est. Mauris tempus fermentum tellus, dignissim aliquet urna. Phasellus porta nisl et enim auctor euismod. Nunc lectus purus, congue quis pulvinar vitae, tempus et risus. Nulla vestibulum purus ut dui molestie facilisis. Sed elementum vel velit vel ornare. Nam pharetra nisi quis nisi gravida consequat.
                            </p>
                        </div><!-- pills container 2 ends -->
                        
                        <div id="k-tab-settings-2" class="tab-pane fade"><!-- pills container 3 starts -->
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque enim erat, tincidunt vitae massa id, consectetur est. Duis vel placerat nisi. Vestibulum tempus metus eros, non porttitor ipsum ultrices nec. In eleifend nulla dui. Aliquam ut nisi id tortor lacinia interdum nec at magna.
                            </p>
                            <p>
                            Aenean ac nis ornare, sagittis quam sagittis. Donec tristique diam dui, non euismod nulla tincidunt nec. In ut sapien id neque fermentum congue et et dui. Quisque pellentesque faucibus mattis. Donec eu sem turpis.
                            </p>
                        </div><!-- pills container 3 ends -->
                        
                    </div><!-- ends pills containers -->
                    
                </div><!-- ends pills wrapper -->
                
            </div><!-- ends row -->
            
            <div class="row"><!-- starts row -->
            
            	<div class="gap30"></div>
                
                <div class="col-lg-6 col-md-6 col-sm-12 mq-box"><!-- accordion -->
                	<h2 class="widget-title">Accordion</h2>
                    <p>
                    In a graphical user interface, an accordion is a vertically stacked list of items (e.g. labels or thumbnails). Each item can be "expanded" or "stretched" to reveal the content associated with that item. There can be zero or more items expanded at a time, depending on the configuration.<br />
                    A common example of a GUI accordion is the Show/Hide operation of a box region, but extended to have multiple sections in a list.
                    </p>
                    
                    <div id="accordion" class="panel-group">
                    
                        <div class="panel panel-default"><!-- panel one -->
                            <div class="panel-heading">
                            	<h4 class="panel-title">
                                    <a href="#collapseOne" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed">
                                        Collapsible Group Item #1
                                    </a>
                            	</h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseOne" style="height: 0px;">
                            	<div class="panel-body">
                            		<img src="img/misc/article_photo_1.jpg" alt="Image" class="img-responsive" />
                            	</div>
                            </div>
                        </div>
                        
                        <div class="panel panel-default"><!-- panel two -->
                            <div class="panel-heading">
                            	<h4 class="panel-title">
                            		<a href="#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed">
                            			Collapsible Group Item #2
                            		</a>
                            	</h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseTwo">
                            	<div class="panel-body">
                            		<img src="img/misc/article_photo_2.jpg" alt="Image" class="img-responsive" />
                            	</div>
                            </div>
                        </div>
                        
                        <div class="panel panel-default"><!-- panel three -->
                            <div class="panel-heading">
                            	<h4 class="panel-title">
                            		<a href="#collapseThree" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed">
                            			Collapsible Group Item #3
                            		</a>
                            	</h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseThree">
                            	<div class="panel-body">
                                	<p>
                            		Duis vitae turpis non lorem pulvinar tincidunt quis sit amet ante. Duis egestas pulvinar ligula, ut auctor diam. Etiam malesuada mi a ligula congue, eget egestas velit mattis. Ut id aliquam mauris, non bibendum nisl. Phasellus tellus libero, blandit ut blandit vel, dignissim vel turpis.
                                    </p>
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12"><!-- carousel -->
                	<h2 class="widget-title">Carousel</h2>
                    <div id="k-work-slider-wrap"><!-- starts slider wrap -->
                    
                        <div id="carousel-work" class="carousel slide"><!-- starts carousel -->
                        
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-work" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-work" data-slide-to="1"></li>
                                <li data-target="#carousel-work" data-slide-to="2"></li>
                                <li data-target="#carousel-work" data-slide-to="3"></li>
                                <li data-target="#carousel-work" data-slide-to="4"></li>
                            </ol>
                        
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="img/slider_work/slide_5.jpg" alt="Image slide 5" />
                                </div>
                                <div class="item">
                                    <img src="img/slider_work/slide_4.jpg" alt="Image slide 4" />
                                </div>
                                <div class="item">
                                    <img src="img/slider_work/slide_3.jpg" alt="Image slide 3" />
                                </div>
                                <div class="item">
                                    <img src="img/slider_work/slide_2.jpg" alt="Image slide 2" />
                                </div>
                                <div class="item">
                                    <img src="img/slider_work/slide_1.jpg" alt="Image slide 1" />
                                </div>
                            </div>
                        
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-work" data-slide="prev"></a>
                            <a class="right carousel-control" href="#carousel-work" data-slide="next"></a>
                            
                        </div><!-- ends carousel -->
    
                    </div><!-- ends slider wrap -->
                </div>
            
            </div><!-- ends row -->
            
            <div class="row"><!-- starts row -->
            
            	<div class="gap30"></div>
                
                <div class="col-lg-6 col-md-6 col-sm-12 mq-box"><!-- popovers -->
                	<h2 class="widget-title">Popovers</h2>
                    <p>
                    Add small overlays of content, like those on the <a href="" data-placement="top" data-toggle="popover" data-container="body" class="k-pop-over" data-original-title="What is an iPad?" data-content="iPad is a line of tablet computers designed and marketed by Apple Inc., which runs Apple's iOS.">iPad</a>, to any element for housing secondary information.
                    </p>
                    <button 
                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." 
                    data-placement="left" 
                    data-toggle="popover" 
                    data-container="body" 
                    class="btn btn-default k-pop-over" 
                    type="button" 
                    data-original-title="" 
                    title="">
                        LEFT
                    </button>
                    <button 
                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." 
                    data-placement="top" 
                    data-toggle="popover" 
                    data-container="body" 
                    class="btn btn-success k-pop-over" 
                    type="button" 
                    data-original-title="My popover on top" 
                    title="">
                        TOP
                    </button>
                    <button 
                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." 
                    data-placement="bottom" 
                    data-toggle="popover" 
                    data-container="body" 
                    class="btn btn-warning k-pop-over" 
                    type="button" 
                    data-original-title="" 
                    title="">
                        BOTTOM
                    </button>
                    <button 
                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." 
                    data-placement="right" 
                    data-toggle="popover" 
                    data-container="body" 
                    class="btn btn-danger k-pop-over" 
                    type="button" 
                    data-original-title="My popover in right" 
                    title="">
                        RIGHT
                    </button>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12"><!-- tooltips -->
                	<h2 class="widget-title">Tooltips</h2>
                    <p>
                    Tooltips don't rely on images, use <a href="" data-placement="top" data-toggle="tooltip" data-original-title="CSS3 is divided into several separate documents called modules.">CSS3</a> for animations, and data-attributes for local title storage.
                    </p>
                    <button 
                    title="" 
                    data-placement="left" 
                    data-toggle="tooltip" 
                    class="btn btn-default" 
                    type="button" 
                    data-original-title="Tooltip on left">
                    	TT Left
                    </button>
                    <button 
                    title="" 
                    data-placement="top" 
                    data-toggle="tooltip" 
                    class="btn btn-success" 
                    type="button" 
                    data-original-title="Tooltip on top">
                    	TT Top
                    </button>
                    <button 
                    title="" 
                    data-placement="bottom" 
                    data-toggle="tooltip" 
                    class="btn btn-warning" 
                    type="button" 
                    data-original-title="Tooltip on bottom">
                    	TT Bottom
                    </button>
                    <button 
                    title="" 
                    data-placement="right" 
                    data-toggle="tooltip" 
                    class="btn btn-danger" 
                    type="button" 
                    data-original-title="Tooltip on right">
                    	TT Right
                    </button>
                </div>
            
            </div><!-- ends row -->
            
            <div class="row"><!-- starts row -->
            
            	<div class="gap30"></div>
                
                <div class="col-lg-12">
                
                	<h2 class="widget-title">Owl carousel</h2>
                    
                    <div class="k-relative-wrap"><!-- position relative wrapper starts -->
                
                        <div class="owl-controls clickable text-center text-light">
                            <div class="owl-buttons">
                                <div class="owl-prev"><i class="icon-chevron-left"></i></div><!-- owl carousel control previous -->
                                <div class="owl-next"><i class="icon-chevron-right"></i></div><!-- owl carousel control next -->
                            </div>
                        </div>
    
                        <div id="carousel-owl-id-1" class="list-owl-carousel"><!-- owl carousel starts -->
                            <div class="item item-spaced"><!-- item 1 -->
                                <a href="img/portfolio/portfolio-1.jpg" title="Portfolio 1" class="product-box-link fancybox" data-fancybox-group="gallery-recent-work">
                                    <img src="img/portfolio/portfolio-1.jpg" alt="Portfolio 1" class="img-responsive" />
                                </a>
                            </div>
                            <div class="item item-spaced"><!-- item 2 -->
                                <a href="img/portfolio/portfolio-2.jpg" title="Portfolio 2" class="product-box-link fancybox" data-fancybox-group="gallery-recent-work">
                                    <img src="img/portfolio/portfolio-2.jpg" alt="Portfolio 2" class="img-responsive" />
                                </a>
                            </div>
                            <div class="item item-spaced"><!-- item 3 -->
                                <a href="img/portfolio/portfolio-3.jpg" title="Portfolio 3" class="product-box-link fancybox" data-fancybox-group="gallery-recent-work">
                                    <img src="img/portfolio/portfolio-3.jpg" alt="Portfolio 3" class="img-responsive" />
                                </a>
                            </div>
                            <div class="item item-spaced"><!-- item 4 -->
                                <a href="img/portfolio/portfolio-4.jpg" title="Portfolio 4" class="product-box-link fancybox" data-fancybox-group="gallery-recent-work">
                                    <img src="img/portfolio/portfolio-4.jpg" alt="Portfolio 4" class="img-responsive" />
                                </a>
                            </div>
                            <div class="item item-spaced"><!-- item 5 -->
                                <a href="img/portfolio/portfolio-5.jpg" title="Portfolio 5" class="product-box-link fancybox" data-fancybox-group="gallery-recent-work">
                                    <img src="img/portfolio/portfolio-5.jpg" alt="Portfolio 5" class="img-responsive" />
                                </a>
                            </div>
                            <div class="item item-spaced"><!-- item 6 -->
                                <a href="img/portfolio/portfolio-6.jpg" title="Portfolio 6" class="product-box-link fancybox" data-fancybox-group="gallery-recent-work">
                                    <img src="img/portfolio/portfolio-6.jpg" alt="Portfolio 6" class="img-responsive" />
                                </a>
                            </div>
                            <div class="item item-spaced"><!-- item 7 -->
                                <a href="img/portfolio/portfolio-7.jpg" title="Portfolio 7" class="product-box-link fancybox" data-fancybox-group="gallery-recent-work">
                                    <img src="img/portfolio/portfolio-7.jpg" alt="Portfolio 7" class="img-responsive" />
                                </a>
                            </div>
                            <div class="item item-spaced"><!-- item 8 -->
                                <a href="img/portfolio/portfolio-8.jpg" title="Portfolio 8" class="product-box-link fancybox" data-fancybox-group="gallery-recent-work">
                                    <img src="img/portfolio/portfolio-8.jpg" alt="Portfolio 8" class="img-responsive" />
                                </a>
                            </div>
                            <div class="item item-spaced"><!-- item 9 -->
                                <a href="img/portfolio/portfolio-9.jpg" title="Portfolio 9" class="product-box-link fancybox" data-fancybox-group="gallery-recent-work">
                                    <img src="img/portfolio/portfolio-9.jpg" alt="Portfolio 9" class="img-responsive" />
                                </a>
                            </div>
                            <div class="item item-spaced"><!-- item 10 -->
                                <a href="img/portfolio/portfolio-10.jpg" title="Portfolio 10" class="product-box-link fancybox" data-fancybox-group="gallery-recent-work">
                                    <img src="img/portfolio/portfolio-10.jpg" alt="Portfolio 10" class="img-responsive" />
                                </a>
                            </div>
                            <div class="item item-spaced"><!-- item 11 -->
                                <a href="img/portfolio/portfolio-11.jpg" title="Portfolio 11" class="product-box-link fancybox" data-fancybox-group="gallery-recent-work">
                                    <img src="img/portfolio/portfolio-11.jpg" alt="Portfolio 11" class="img-responsive" />
                                </a>
                            </div>
                            <div class="item item-spaced"><!-- item 12 -->
                                <a href="img/portfolio/portfolio-12.jpg" title="Portfolio 12" class="product-box-link fancybox" data-fancybox-group="gallery-recent-work">
                                    <img src="img/portfolio/portfolio-12.jpg" alt="Portfolio 12" class="img-responsive" />
                                </a>
                            </div>
                        </div><!-- owl carousel ends -->
                    
                    </div><!-- position relative wrapper ends -->
                	
                </div>
            
            </div><!-- ends row -->
            
            <div class="row"><!-- starts row -->
            
            	<div class="gap30"></div>
                
                <div class="col-lg-6 col-md-6 col-sm-12 mq-box"><!-- responsive video -->
                	<h2 class="widget-title">Responsive video</h2>
                    <div class="video-container">
						<iframe src="http://player.vimeo.com/video/73825736" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12"><!-- google maps -->
                	<h2 class="widget-title">Google maps</h2>
					<div id="g-map-659" class="map col-lg-12" data-gmaptitle="Office Address" data-gmapzoom="15" data-gmaplon="-122.400679" data-gmaplat="37.782231"></div><!-- GOOGLE MAP -->
                </div>
            
            </div><!-- ends row -->
            
            <div class="row"><!-- starts row -->
            
            	<div class="gap30"></div>
                
                <div class="col-lg-12"><!-- responsive audio player -->
                	<h2 class="widget-title">Responsive Audioplayer</h2>
                    <div class="audio-container">
                        <audio preload="auto" controls>
                            <source src="audio/radiohead.wav" />
                            <source src="audio/radiohead.mp3" />
                            <source src="audio/radiohead.ogg" />
                        </audio>
                    </div>
                </div>
            
            </div><!-- ends row -->
            
            <div class="row"><!-- starts row -->
            
            	<div class="gap30"></div>
                
                <div class="col-lg-12"><!-- scrolling parallax -->
                	<h2 class="widget-title">Scrolling parallax</h2>
                    <div class="k-parallax-bg k-pbg-1 section-space30 text-light text-shadow-dark">
						<h3 class="text-center">My parallax test title</h3>
                        <p class="text-center">
                        Phasellus eget mi sed mi auctor tristique. Maecenas faucibus eget felis ut iaculis. Sed posuere velit elit, id tempor nulla elementum vitae. Suspendisse mattis consequat risus sed blandit. Proin posuere sem id porttitor elementum. Donec pharetra nibh quis cursus molestie.
                        </p>
                    </div>
                </div>
            
            </div><!-- ends row -->
            
            
            
        </div><!-- ends container -->
    
    </section><!-- ends content -->
<?php $this->load->view('developer_footer'); ?>