//match height
$(function() {
    $('.item-height').matchHeight();
});

$(document).ready(function(){
	$('.navbar-toggle').click(function(){
		$('.collapse').toggleClass('in');
		$('header').toggleClass('z-index');
	});
});