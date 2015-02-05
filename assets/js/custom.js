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
});


/***********************************************/


$(document).ready(function() {
	$("#contact").click(function(){
		if ($('#contact').hasClass('selected-item')){
			$("#contact").removeClass('selected-item');
			$('#masthead').slideToggle("fast");
		}
		else if ($('#sorting').hasClass('selected-item')){
			$("#sorting").removeClass('selected-item');
			$('#sort').slideToggle("fast");
			$("#contact").addClass('selected-item');
			$('#masthead').slideToggle("fast");
		}
		//else if (self.document.location.hash == '#contact'){
			//$("#contact").addClass('selected-item');
			//$('#masthead').show();
		//}
		else {
			$("#contact").addClass('selected-item');
			$('#masthead').slideToggle("fast");
		}
	});
});

if(self.document.location.hash == '#_contact')
{
    	$("#contact").addClass('selected-item');
		$('#masthead').show();
}


$(document).ready(function() {
	$("#sorting").click(function(){
		if ($('#sorting').hasClass('selected-item')){
			$("#sorting").removeClass('selected-item');
			$('#sort').slideToggle("fast");
		}
		else if ($('#contact').hasClass('selected-item')){
			$("#contact").removeClass('selected-item');
			$('#masthead').slideToggle("fast");
			$("#sorting").addClass('selected-item');
			$('#sort').slideToggle("fast");
		}
		else {
			$("#sorting").addClass('selected-item');
			$('#sort').slideToggle("fast");
		}
	});
});
