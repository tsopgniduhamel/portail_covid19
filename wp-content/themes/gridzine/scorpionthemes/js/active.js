 (function($) {
    "use strict";
     $(document).on('ready', function() {	
		
		
		/*====================================
		// 	Mobile Menu
		======================================*/ 	
		$('.menu').slicknav({
			prependTo:".mobile-nav",
			closeOnClick:true,
		});
		
		/*===============================
			Slider JS
		=================================*/ 
		$(".featured-slider").owlCarousel({
			loop:true,
			autoplay:true,
			smartSpeed: 500,
			autoplayTimeout:3500,
			singleItem: true,
			autoplayHoverPause:true,
			center:false,
			margin:0,
			nav:false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
			responsive:{
				300: {
					items:1,
				},
				480: {
					items:2,
				},
				768: {
					items:3,
				},
				1170: {
					items:3,
				},
			}
		});	
		
		$(".featured-slider-two").owlCarousel({
			loop:true,
			autoplay:true,
			smartSpeed: 500,
			autoplayTimeout:3500,
			singleItem: true,
			autoplayHoverPause:true,
			center:false,
			margin:0,
			nav:true,
			items:5,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
			responsive:{
				300: {
					items:1,
				},
				480: {
					items:2,
				},
				768: {
					items:3,
				},
				1170: {
					items:5,
				},
			}
		});	
		
		$(".slider-active").owlCarousel({
			loop:true,
			autoplay:true,
			smartSpeed: 700,
			autoplayTimeout:4500,
			singleItem: true,
			autoplayHoverPause:true,
			center:false,
			margin:0,
			nav:true,
			items:1,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
		});			
				
		$(".instagram-slider").owlCarousel({
			loop:true,
			autoplay:false,
			smartSpeed: 500,
			autoplayTimeout:3500,
			singleItem: true,
			autoplayHoverPause:true,
			center:false,
			margin:0,
			nav:false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
			responsive:{
				300: {
					items:1,
				},
				480: {
					items:2,
				},
				768: {
					items:3,
				},
				1170: {
					items:5,
				},
			}
		});			
	
		/*====================================
		// 	Social JS
		======================================*/ 	
		$('.search-form .form a, .bars').on( "click", function(){
			$('.site-header').toggleClass('active');
		});
		
		
		/*====================================
		// Service Hover
		======================================*/ 
		$('.single-service').on('mouseenter', function(){
			$(' .single-service').removeClass('active');
			$(this).addClass('active');
		});
		
		
		/*====================================
			Scrool Up
		======================================*/ 	
		$.scrollUp({
			scrollName: 'scrollUp',      // Element ID
			scrollDistance: 300,         // Distance from top/bottom before showing element (px)
			scrollFrom: 'top',           // 'top' or 'bottom'
			scrollSpeed: 1000,            // Speed back to top (ms)
			easingType: 'linear',        // Scroll to top easing (see http://easings.net/)
			animation: 'fade',           // Fade, slide, none
			animationSpeed: 200,         // Animation speed (ms)
			scrollTrigger: false,        // Set a custom triggering element. Can be an HTML string or jQuery object
			scrollTarget: false,         // Set a custom target element for scrolling to. Can be element or number
			scrollText: ["<i class='fa fa-angle-double-up'></i>"], // Text for element, can contain HTML
			scrollTitle: false,          // Set a custom <a> title if required.
			scrollImg: false,            // Set true to use image
			activeOverlay: false,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
			zIndex: 2147483647           // Z-Index for the overlay
		});
		
	});
	
	/*======================================
	// Preloader
	======================================*/ 	
		$(window).load(function(){
				$('.loader').fadeOut('slow', function(){
				$(this).remove();
			});
		});
	
})(jQuery);
