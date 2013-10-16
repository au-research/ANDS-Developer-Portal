$(function(){ // document ready

	//.sticky element sticks onto place
	if (!!$('.sticky').offset()){
		var stickyTop = $('.sticky').offset().top;
		var p = $('.sticky').parent().width();
		var main_bot = 999999;
		if($('#k-config').length!=0){
			main_bot = $('#k-config').offset().top;
		}
		$(window).scroll(function(){ // scroll event
			var windowTop = $(window).scrollTop(); // returns number 
			if ((stickyTop < windowTop + 70) && ($(window).width() > 767) && (windowTop < main_bot)){
				$('.sticky').css({ position: 'fixed', top: 100, width: p });
			}else {
				$('.sticky').css('position','static');
			}
		});
	}

});