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

	// down the rabbit hole
	$(window).on('mousemove',function(e){
		// cache the window in a varable bc we use it more than once (for speed)
		var $window = $(window);

		// get the current position of the mouse in PX
		var x = e.clientX;
		var y = e.clientY;

		// get the current position of the mouse in %
		var xp = x / $window.width();
		var yp = y / $window.height();

		// figure out how many px we want it to change
		var pixels = 15; // 20px for 100% change

		// figure out what that is in a decmial form
		var pixelRatio = pixels * 0.01; 

		// figure out how much it should move.
		// for 10px, all the way left should be -5px, all the way right should be 5px
		var vertPixel = Math.round((yp * pixelRatio) * 100) - (pixels / 2);
		var horzPixel = Math.round((xp * pixelRatio) * 100) - (pixels / 2);

		$('.patternLeft img, .patternRight img').css({
			top : vertPixel,
			left : horzPixel
		})

		$('.patternLeft2 img, .patternRight2 img').css({
			top : vertPixel * -1,
			left : horzPixel * -1
		})

	});

	// get time from user + return message in about section
	var timeMessage = function() {

		var getTime = new Date()
		var date = getTime.getDate()
		var hours = getTime.getHours()
		// var hours = 5;
		var minutes = getTime.getMinutes()
		var currentTime = (hours + ":" + minutes);
		console.log(currentTime);

		if ( hours <= 11 ) {
			console.log('good morning');
			$('h2.message').text('Good Morning');
		} else if ( hours <= 18 ) {
			console.log('good afternoon');
			$('h2.message').text('Good Afternoon');
		} else if ( hours <= 21 ) {
			console.log('good evening');
			$('h2.message').text('Good Evening');
		} else if ( hours >= 6 ) {
			console.log('good night');
			$('h2.message').text('Good Night');
		} 
	}

	timeMessage();


	// smooth scroll by chris coyier
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