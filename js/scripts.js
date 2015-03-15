$(function(){
	
	// nav appear 
	$(window).scroll(function(){
		var navScroll = $(window).scrollTop();
		
		var top = $('.aboutContainer').offset().top - 100;

		if ( navScroll > top ) {
			$('section.nav').addClass('visible');
		} else if ( navScroll < top ) {
			$('section.nav').removeClass('visible');
		}
	});

	// get time from user 

	var timeMessage = function() {

		var getTime = new Date()
		var hours = getTime.getHours()
		var minutes = getTime.getMinutes()
		var currentTime = (hours + ":" + minutes);
		console.log(currentTime);

		if ( hours <= 12 ) {
			console.log('good morning');
			$('h2.message').text('Good Morning');
		} else if ( hours <= 18 ) {
			console.log('good afternoon');
			$('h2.message').text('Good Afternoon');
		} else if ( hours <= 21 ) {
			console.log('good evening');
			$('h2.message').text('Good Evening');
		} else {
			console.log('good night');
			$('h2.message').text('Good Night');
		} 
	}

	timeMessage();



	// smooth scroll 
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});

});