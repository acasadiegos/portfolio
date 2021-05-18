$(document).ready(function(){

// Scroll Elementos Menu
	var acercaDe = $('#acerca-de').offset().top,
		trabajos = $('#trabajos').offset().top,
		contacto = $('#contacto').offset().top;

// Boton Acerca de
	$('#btn-acercaDe').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: acercaDe - 40
		});
	});

	$('#btn-trabajos').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: trabajos - 40
		});
	});

	$('#btn-contacto').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: contacto - 40
		});
	});
});