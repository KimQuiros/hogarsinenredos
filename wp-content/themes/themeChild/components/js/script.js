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
$(document).ready(function(){
	document.getElementById("s").placeholder = "Ingresa el nombre del post que deseas buscar..."; 
});
