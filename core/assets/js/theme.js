( function( $ ) {
	
	"use strict";

	var CHEF = window.CHEF || {};
	
	// tooltips
	CHEF.toolTips = function() {
		$( '.container' ).tooltip( {
			selector: "*[data-toggle=tooltip]"
		} );
		
		$('*[data-toggle=tooltip]')
			.mouseover( function() {
				$( 'i', this ).stop().animate( { opacity: 1 }, 100 ); 
			} )
			.mouseout( function() {
				$( 'i', this ).stop().animate( { opacity: 0.5 }, 100 );
			} );
	}
	
	// popovers
	CHEF.popOvers = function( e ) {
		$( '.k-pop-over' ).popover();
		$( '.k-pop-over' ).on( 'click', function( e ) {
			e.preventDefault();
		} );
	}
	
	// scroll to top
	CHEF.scrollPageToTop = function() {
		$( '#k-to-top' ).click( function(e) {
			$( 'body, html' ).animate( { scrollTop: 0 }, 400 );
			e.preventDefault();
		} );
	}
	
	// responsive videos
	CHEF.responsiveVideos = function() {
		if( $( '.video-container' ).length ) {
			$( '.video-container' ).fitVids( {
				customSelector: "iframe[src^='http://blip.tv']" 
			} );
		}
	}
	
	// responsive audios
	CHEF.responsiveAudios = function() {
		if( $( '.audio-container' ).length ) {
			$( 'audio' ).audioPlayer( {
				classPrefix: 'audioplayer',
				strPlay: 'Play',
				strPause: 'Pause',
				strVolume: 'Volume'
			} );
		}
	}
	
	// google maps
	CHEF.googleMaps = function() {
		if( $( '.map' ).length ) {
	
			$( '.map' ).each( function( i, e ) {
	
				var $gmap = $( e );
				var $gmap_title = $gmap.attr( 'data-gmapTitle' );
				var $gmap_id = $gmap.attr( 'id' );
				var $gmap_lat = $gmap.attr( 'data-gmapLat' );
				var $gmap_lng = $gmap.attr( 'data-gmapLon' );
				var $gmap_zoom = parseInt( $gmap.attr( 'data-gmapZoom' ) );
				
				var latlng = new google.maps.LatLng( $gmap_lat, $gmap_lng );			
				var options = { 
					scrollwheel: false,
					draggable: true, 
					zoomControl: true,
					disableDoubleClickZoom: true,
					disableDefaultUI: true,
					zoom: $gmap_zoom,
					center: latlng,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				
				var styles = [ 
							  {
								featureType: "all",
								stylers: [
								  { saturation: -80 }
								]
							  },{
								featureType: "road.arterial",
								elementType: "geometry",
								stylers: [
								  { hue: "#82a536" },
								  { saturation: 40 }
								]
							  },{
								featureType: "poi.business",
								elementType: "labels",
								stylers: [
								  { visibility: "off" }
								]
							  }
							];
				
				var styledMap = new google.maps.StyledMapType( styles,{ name: "MULE Map" } );
				var map = new google.maps.Map( document.getElementById( $gmap_id ), options );
				var m_icon = 'img/icons/map_marker.png';
			
				var marker = new google.maps.Marker( {
					position: latlng,
					map: map,
					icon: m_icon,
					title: $gmap_title
				} );
				
				map.mapTypes.set( 'map_style', styledMap );
				map.setMapTypeId( 'map_style' );
				
				var contentString = '<strong>Producr. Inc.</strong><br />795 Folsom Ave, Suite 600<br />San Francisco, CA 94107<br />Phone: (123) 456-7890';
				var infowindow = new google.maps.InfoWindow( {
					content: contentString
				} );
				
				infowindow.open( map, marker ); // show info by default
				
				google.maps.event.addListener( marker, 'click', function() {
					infowindow.open( map, marker );
				} );
	
			} );
		}	
	}
	
	// modal window upon close
	CHEF.modalClose = function() {
		$( '.modal' ).on( 'hide.bs.modal', function() {
			if( jQuery( '.k-pop-over', this ).length ) $( '.k-pop-over' ).popover( 'hide' ); // any popovers left unclosed in modal?
		} );
	}
	
	// main navig
	var mobileMenuClone = $( '#menu' ).clone().attr( 'id', 'navigation-mobile' );
	CHEF.mobileNav = function() {
		var windowWidth = $( window ).width();
		// Show Menu or Hide the Menu
		if( windowWidth <= 768 ) {
			if( $( '#mobile-nav' ).length ) {
				mobileMenuClone.insertAfter( '#k-main-navig' );
				$( '#navigation-mobile #menu-nav' ).attr( 'id', 'menu-nav-mobile' ).attr( 'class', 'col-12 list-unstyled' );
				$( '#navigation-mobile' ).removeClass( 'pull-right' );
			}
		} else {
			$( '#navigation-mobile' ).css( 'display', 'none' );
			$( '#navigation-mobile' ).addClass( 'pull-right' );
			if( $( '#mobile-nav' ).hasClass( 'open' ) ) $( '#mobile-nav' ).removeClass( 'open' );
		}
	}
	CHEF.listenerMenu = function() {
		$( '#mobile-nav' ).on( 'click', function(e) {
			$( this ).toggleClass( 'open' );
			$( '#navigation-mobile' ).stop().slideToggle( 350, 'easeOutExpo' );
			e.preventDefault();
		} );
	}
	
	/* fancybox */
	CHEF.fancyBoxer = function(){
		if( $( '.fancybox' ).length || $( '.fancybox-media' ).length ) {
			
			$( '.fancybox' ).fancybox( {				
				padding : 0,
				helpers : {
					title : { type: 'inside' }
				}
			} );
				
			$( '.fancybox-media' ).fancybox( {
				padding : 0,
				openEffect  : 'none',
				closeEffect : 'none',
				helpers : {
					media : {}
				}
			} );

		}
	}
	
	/* fancy title */
	CHEF.fancyTitler = function() {
		if( $( '.k-fancy-title' ).length ) {
			$( '.k-fancy-title' ).wrap( '<div class="k-fancy-title-wrap" />' );
			$( '.k-fancy-title-wrap' ).prepend( '<span class="k-fancy-title-tit"></span>' );
		}
		if( $( '#k-sidebar .widget-title' ).length ) {
			$( '#k-sidebar .widget-title' ).append( '<span class="k-widget-title-tit"></span>' );
		}
	}
	
	/* clearfix widgets*/
	CHEF.clearfixWidgets = function() {
		if( $( 'li.widget' ).length ) {
			$( 'li.widget' ).addClass( 'clearfix' );
		}
	}
	
	/* animate header */
	CHEF.animateHeader = function() {
			var scroll_me = document.documentElement;
			var	header = document.querySelector( '#k-head .container' );
			var header_line = document.querySelector( '#header-bottom-line' );
			var	moving = false;
			var	shrink_at = parseInt( $( '#k-head' ).data( 'shrinkat' ) );
		
			function trigg_event() {
				if( !window.addEventListener ) { /* IE8 */
					window.attachEvent( 'onscroll', function( event ) {
						if( !moving ) {
							moving = true;
							setTimeout( do_scroll, 250 );
						}
					}, false );	
				} else { /* other browsers */
					window.addEventListener( 'scroll', function( event ) {
						if( !moving ) {
							moving = true;
							setTimeout( do_scroll, 250 );
						}
					}, false );
				}
			}
			function do_scroll() {
				
				if( jQuery.browser.msie && jQuery.browser.version < 9 ) {
					var pos_y = scroll_vert();
					if ( pos_y >= shrink_at ) {
						classie.add( header, 'header-shrink' );
						classie.add( header_line, 'header-line-down' );
						$( '#k-head' ).css( "opacity", 0.9 );
					} else {
						classie.remove( header, 'header-shrink' );
						classie.remove( header_line, 'header-line-down' );
						$( '#k-head' ).css( "opacity", 1 );
					}
				} else {
					enquire.register( "screen and (min-width: 979px)", {
						match : function() {
							var pos_y = scroll_vert();
							if ( pos_y >= shrink_at ) {
								classie.add( header, 'header-shrink' );
								classie.add( header_line, 'header-line-down' );
								$( '#k-head' ).css( "opacity", 0.9 );
							} else {
								classie.remove( header, 'header-shrink' );
								classie.remove( header_line, 'header-line-down' );
								$( '#k-head' ).css( "opacity", 1 );
							}
						},  
						unmatch : function() {
							classie.remove( header, 'header-shrink' );
							classie.remove( header_line, 'header-line-down' );
							$( '#k-head' ).css( "opacity", 1 );
						}
					} );
				}
				moving = false;
			}
			function scroll_vert() { 
				return window.pageYOffset || scroll_me.scrollTop;
			}
			trigg_event(); // init
			
	}
	
	/* set content margin when dealing with fixed head */
	CHEF.mainWrapperMargin = function() {
		var	header = document.querySelector( '#k-head .container' );
		var header_height = $( '#k-head' ).outerHeight( true );
		
		if( jQuery.browser.msie && jQuery.browser.version < 9 ) { /* IE8 */
			$( '.fixed-head-marger' ).css( { "marginTop": header_height } );
		} else { /* other browsers */
			enquire.register( "screen and (min-width: 979px)", {
				match : function() {
					if( classie.has( header, 'header-shrink' ) ) header_height = header_height + 40; /* margins shring down for 20px at the top and bottom */
					$( '.fixed-head-marger' ).css( { "marginTop": header_height } );
				},  
				unmatch : function() {
					$( '.fixed-head-marger' ).css( { "marginTop": 0 } );
				}
			} );
		}
	}
	
	/* main navigation */
	CHEF.initMainNavig = function() {
		if( $( '.k-dropdown-menu' ).length ) {
			$( '#menu-nav' ).dropdown_menu( {
				sub_indicator_class  : 'k-dropdown-menu-sub-indicator', // Class given to LI's with submenus
				vertical_class       : 'k-dropdown-menu-vertical',   	// Class for a vertical menu
				shadow_class         : 'k-dropdown-menu-shadow',        // Class for drop shadow on submenus
				hover_class          : 'k-dropdown-menu-hover',         // Class applied to hovered LI's
				open_delay           : 100,                             // Delay on menu open
				close_delay          : 200,                             // Delay on menu close
				animation_open       : { opacity : 'show' },            // Animation for menu open
				speed_open           : 'fast',                          // Animation speed for menu open
				animation_close      : { opacity : 'hide' },            // Animation for menu close
				speed_close          : 'fast',                          // Animation speed for menu close
				sub_indicators       : false,                           // Whether to show arrows for submenus
				drop_shadows         : false,                           // Whether to apply drop shadow class to submenus
				vertical             : false,                           // Whether the root menu is vertically aligned
				viewport_overflow    : 'auto',                          // Handle submenu opening offscreen: "auto", "move", "scroll", or false
				init                 : function() {}                    // Callback function applied on init
			} );
		}
	}
	
	/* I S O T O P E */
	CHEF.doIsotopeRecentWork = function() {
		if( jQuery().isotope && $( '.k-recent-work-wrap' ).length ) {
			$( '.k-recent-work-wrap' ).imagesLoaded( function() {
				CHEF.$container = $( '.masonry' );
				CHEF.setWidths();
				
				CHEF.$container.isotope( {
					resizable: false, // disable normal resizing
					// set columnWidth to a percentage of container width
					masonry: { columnWidth: CHEF.getUnitWidth() }
				} );
				
				$( window ).smartresize( function() {
					// set the widths on resize
					CHEF.setWidths();
					// reinit isotop
					CHEF.$container.isotope( {
						// update columnWidth to a percentage of container width
						masonry: { columnWidth: CHEF.getUnitWidth() }
					} );
				} );
			} );
		}
	}
    CHEF.getUnitWidth = function() {
        var width;
		if( $( ".visible-xs" ).is( ":visible" ) ) {
            width = CHEF.$container.width() / 2;
        } else if( $( ".visible-sm" ).is( ":visible" ) ) {
            width = CHEF.$container.width() / 3;
        } else if( $( ".visible-md" ).is( ":visible" ) ) {
            width = CHEF.$container.width() / 4;
        } else {
            width = CHEF.$container.width() / 6;
        }
        return width;
    }
    CHEF.setWidths = function() {
        var unitWidth = CHEF.getUnitWidth() - 1;
		$( '.masonry .masonry-item' ).css( { width: unitWidth } );
    }
	
	// do isotope work
	CHEF.doIsotopeWork = function() {
		if( jQuery().isotope && $( '.k-work-grid' ).length ) {
			
			$( '#k-work-items' ).imagesLoaded( function() {
				
				var $container = $( '.masonry' );
				var $filter = $( '.k-work-filter' );
				// initialize isotope
				$container.isotope( {
					// options...
					resizable: false,
					filter: '*'
				} );
				// filter items when filter link is clicked
				$( '.k-work-filter a' ).click( function() {
					var selector = $( this ).attr( 'data-filter' );
					$container.isotope( { filter: selector } );
					return false;
				} );
				// update columnWidth on window resize
				$( window ).smartresize( function() {
					$container.isotope( 'reLayout' );
				} );
				// filter items when filter link is clicked
				$filter.find( 'a' ).click( function() {
					$filter.find( 'a' ).removeClass( 'selected' );
					$( this ).addClass( 'selected' );
				} );
			
			} );
		}
	}
	/* I S O T O P E   ENDS */
	
	/* Revolution slider */
	CHEF.doRevolutionSlidr = function() {
		if( $( '.fullwidthbanner' ).length ) {
			var tpj = jQuery;
			tpj.noConflict();
			
			if( tpj.fn.cssOriginal != undefined ) tpj.fn.css = tpj.fn.cssOriginal;
			
			var api = tpj( '.fullwidthbanner' ).revolution( {
				delay: 5000,
				startwidth: 1170,
				startheight: 500,

				onHoverStop:"on",				// Stop Banner Timet at Hover on Slide on/off

				thumbWidth: 100,				// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
				thumbHeight: 50,
				thumbAmount: 3,

				hideThumbs: 0,
				navigationType: "bullet",		// bullet, thumb, none
				navigationArrows: "none",		// nexttobullets, solo (old name verticalcentered), none

				navigationStyle: "round",		// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


				navigationHAlign: "right",		// Vertical Align top,center,bottom
				navigationVAlign: "bottom",		// Horizontal Align left,center,right
				navigationHOffset: 20,
				navigationVOffset: 20,

				soloArrowLeftHalign: "left",
				soloArrowLeftValign: "center",
				soloArrowLeftHOffset: 20,
				soloArrowLeftVOffset: 0,

				soloArrowRightHalign: "right",
				soloArrowRightValign: "center",
				soloArrowRightHOffset: 20,
				soloArrowRightVOffset: 0,

				touchenabled: "on",				// Enable Swipe Function : on/off


				stopAtSlide: -1,				// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
				stopAfterLoops: -1,				// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

				hideCaptionAtLimit: 0,			// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
				hideAllCaptionAtLilmit: 0,		// Hide all The Captions if Width of Browser is less then this value
				hideSliderAtLimit: 0,			// Hide the whole slider, and stop also functions if Width of Browser is less than this value


				fullWidth: "on",

				shadow: 0						//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

			} );
			
			// TO HIDE THE ARROWS SEPERATLY FROM THE BULLETS, SOME TRICK HERE:
			// YOU CAN REMOVE IT FROM HERE TILL THE END OF THIS SECTION IF YOU DONT NEED THIS !
			api.bind( "revolution.slide.onloaded", function(e) {
		
		
				jQuery( '.tparrows' ).each( function() {
					var arrows=jQuery( this );
					var timer = setInterval( function() {
						if( arrows.css( 'opacity' ) == 1 && !jQuery( '.tp-simpleresponsive' ).hasClass( "mouseisover" ) ) arrows.fadeOut( 300 );
					}, 3000 );
				} );
		
				jQuery( '.tp-simpleresponsive, .tparrows' ).hover( function() {
					jQuery( '.tp-simpleresponsive' ).addClass( "mouseisover" );
					jQuery( 'body' ).find( '.tparrows' ).each( function() {
						jQuery( this ).fadeIn( 300 );
					} );
				}, function() {
					if( !jQuery( this ).hasClass( "tparrows" ) ) jQuery( '.tp-simpleresponsive' ).removeClass( "mouseisover" );
				} );
			} );
			// END OF THE SECTION, HIDE MY ARROWS SEPERATLY FROM THE BULLETS
						
		}
	}
	/* Revolution slider ends */
	
	/* easy pie charts */
	CHEF.pieChartz = function() {
		if( $( '.chart' ).length ) {
			$( '.chart' ).easyPieChart( {
				barColor: "#666666",
				lineWidth: 12,
				lineCap: "square",
				size: 120,
				scaleColor: false,
				animate: 1000,
				onStep: function( value ) {
					this.$el.find( 'span' ).text( ~~value );
				}
			} );
		}
	}
	
	/* home page carousel - owl carousel */
	CHEF.owlCarousel = function() {
		/* any other carousel - must have DIV id starting with "carousel-owl-id-" ; carousel-owl-id-home, carousel-owl-id-1 */
		if( $( 'div[id*=carousel-owl-id-]' ).length ) {
			var owl = $( 'div[id*=carousel-owl-id-]' );
			owl.owlCarousel( {
				items : 6, //10 items above 1000px browser width
				itemsDesktop : [1000,5], //5 items between 1000px and 901px
				itemsDesktopSmall : [900,4], // betweem 900px and 601px
				itemsTablet: [600,3], //3 items between 600 and 0
				itemsMobile : false,
				navigation : false, 
				pagination : false, 
				scrollPerPage : true
			} );
			// custom controls
			$( ".owl-next" ).click( function() { owl.trigger( 'owl.next' ); } );
			$( ".owl-prev" ).click( function() { owl.trigger( 'owl.prev' ); } );
		}
	}
	
	/* header image on pages */
	CHEF.handleHeaderImage = function() {
		if( $( '#k-cinema' ).length ) {
			var image_path = $( '#k-cinema' ).data( 'bg' );
			$( '#k-cinema' ).css( { "background-image": "url(" + image_path + ")" } );
		}
	}
	
	/* parallax bg */
	CHEF.parallaxInit = function() {
		if( $( '.k-parallax-bg' ).length ) {
			$( '.k-pbg-1' ).parallax( "50%", 0.4, true );
		}
	}
	
	/* IE8 fancy icon fix */
	CHEF.IE8fancyIconFix = function() {
		if( $( '.k-fancy-icon' ).length && jQuery.browser.msie && jQuery.browser.version < 9 ) {
			var kfi_font_size = parseInt( $( '.k-fancy-icon' ).css( 'font-size' ) );
			$( '.k-fancy-icon' ).wrap( '<div class="k-fancy-icon-box"></div>' );
			$( '.k-fancy-icon' ).css( { "width": kfi_font_size, "height": kfi_font_size } );
		}
	}
	
	$( document ).ready( function() {
		CHEF.mainWrapperMargin();
		CHEF.initMainNavig();
		CHEF.doRevolutionSlidr();
		CHEF.mobileNav();
		CHEF.listenerMenu();
		CHEF.toolTips();
		CHEF.popOvers();
		CHEF.googleMaps();
		CHEF.scrollPageToTop();
		CHEF.responsiveVideos();
		CHEF.fancyTitler();
		CHEF.clearfixWidgets();
		CHEF.animateHeader();
		CHEF.handleHeaderImage();
		CHEF.doIsotopeRecentWork(); // isotope
		CHEF.doIsotopeWork(); // isotope
		CHEF.responsiveAudios();
		CHEF.owlCarousel();
		CHEF.pieChartz();
		CHEF.modalClose();
		CHEF.parallaxInit();
		CHEF.IE8fancyIconFix();
		
		// fancybox
		CHEF.fancyBoxer();
	} );
	
	$( window ).load( function() {
		$( '.k-equal-height' ).eqHeights();
	} );
	
	$( window ).resize( function() {
		CHEF.mainWrapperMargin();
		CHEF.mobileNav();
	} );
	
	$( window ).scroll( function() {
		// scroll to top
		if( $( this ).scrollTop() > 640) $( '#k-to-top' ).fadeIn();
		else $( '#k-to-top' ).fadeOut();
	} );
	
} )(jQuery);