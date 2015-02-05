// FIXED MENU

jQuery("document").ready(function($){
	var pos = $('.nav-container').offset().top;
	var nav = $('.nav-container');
	
	$(window).scroll(function () {
	if ($(this).scrollTop() > pos) {
	nav.addClass("f-nav");
	} else {
	nav.removeClass("f-nav");
	}
	});
	
	$('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').wrap('<div class="videowrapper" />');
	$( ".aligncenter" ).wrap( "<div class='centerinner'></div>" );
	$( ".centerinner" ).wrap( "<div class='centerouter'></div>" );
	
});