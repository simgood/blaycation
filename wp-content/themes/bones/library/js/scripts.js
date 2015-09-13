/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*/


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();

/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

	// Mobile Nav Menu
	$(".mobile-nav_toggle").click(function(){
		$(".nav").toggleClass("mobile-nav_open");
	});

	// Modal Windows
	$(".modal-window-toggle").click(function(){
		$(".modal-window").toggleClass("modal-window_active");
	});

	// Unslider
	$(function() {
    	$('.slider').unslider({
    		speed:800,
    		delay:10000,
    		dots:true,
    	});
	});


	if ($(window).width() >= 800){

		// Fancy Header pop-down thingy
		var lastScrollTop = 0;

		$(window).scroll(function(event){
		   var st = $(this).scrollTop();

		   if (st > lastScrollTop){
		       // downscroll code
		    	$('header.header').css('top','-100%');	
		   } else {
		      // upscroll code
		      	$('header.header').css('top','0');
		   }

		   lastScrollTop = st;
		});
	};


	
}); /* end of as page load scripts */
