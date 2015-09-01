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


(function(e,t,n,r){e.fn.sss=function(r){var i=e.extend({slideShow:true,startOn:0,speed:3500,transition:400,arrows:true},r);return this.each(function(){function y(e){return s.eq(e).height()/o.width()*100+"%"}function b(e){if(!c){c=true;var t=s.eq(e);t.fadeIn(a);s.not(t).fadeOut(a);o.animate({paddingBottom:y(e)},a,function(){c=false});g()}}function w(){l=l===u-1?0:l+1;b(l)}function E(){l=l===0?u-1:l-1;b(l)}var r=e(this),s=r.children().wrapAll('<div class="sss"/>').addClass("ssslide"),o=r.find(".sss"),u=s.length,a=i.transition,f=i.startOn,l=f>u-1?0:f,c=false,h,p,d,v,m,g=i.slideShow?function(){clearTimeout(p);p=setTimeout(w,i.speed)}:e.noop;if(i.arrows){o.append('<div class="sssprev"/>','<div class="sssnext"/>')}m=o.find(".sssnext"),v=o.find(".sssprev");e(t).load(function(){o.css({paddingBottom:y(l)}).click(function(t){h=e(t.target);if(h.is(m)){w()}else if(h.is(v)){E()}});b(l);e(n).keydown(function(e){d=e.keyCode;if(d===39){w()}else if(d===37){E()}})})})}})(jQuery,window,document)
jQuery(function($) {
$('.slider').sss({
	speed : 6500,
	transition : 400,
});
});

/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

	$(".mobile-nav_toggle").click(function(){
		$(".nav").toggleClass("mobile-nav_open");
	});
	
}); /* end of as page load scripts */
