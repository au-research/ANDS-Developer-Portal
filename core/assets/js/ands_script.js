$(function(){ // document ready

	//.sticky element sticks onto place
	if (!!$('.sticky').offset()){
		var stickyTop = $('.sticky').offset().top;
		var p = $('.sticky').parent().width();
		$(window).scroll(function(){ // scroll event
			var windowTop = $(window).scrollTop(); // returns number 
			if ((stickyTop < windowTop + 70) && ($(window).width() > 767)){
				$('.sticky').css({ position: 'fixed', top: 100, width: p });
			}else {
				$('.sticky').css('position','static');
			}
		});
	}

});