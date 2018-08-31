$(document).ready(function(){
	// alert('pagina book')

	$('.card-img').click(function(evt){
		evt.preventDefault();
		evt.stopPropagation();

		$(this).toggleClass('book__click');
	});

});


