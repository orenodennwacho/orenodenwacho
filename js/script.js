$(document).ready(function(){
	
	// flow card
	$('.flow section').each(function( i, element ){
		
		if ( i >= 1 ){
			$(element).hide();
		}
		
	});
	
	// Next show
	$('.next').on( 'click', function(){
		
		$(this).parent().hide();
		$(this).parent().next('section').show();
		
	});
	
	// Prev show
	$('.prev').on( 'click', function(){
	
		$(this).parent().hide();
		$(this).parent().prev('section').show();
	
	});
	
});