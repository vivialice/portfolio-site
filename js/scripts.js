$(function(){
	
	$(window).scroll(function(){
		var navScroll = $(window).scrollTop();
		// console.log('whoa pixels', navScroll);
		
		var top = $('.aboutContainer').offset().top - 100;

		if ( navScroll > top ) {
			$('section.nav').addClass('visible');
		} else if ( navScroll < top ) {
			$('section.nav').removeClass('visible');
		}
	});

});