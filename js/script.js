$(document).ready(function(){
	
	function count( nr ){
		$('#count').html(nr);;
	}
	
	count($('.checklist input[type="checkbox"]:checked').length);

	// input checked
	$('.checklist input').change( function(){
		if( $(this).val() == '' ){
			$(this).parent().parent().find('th').children('input[type="checkbox"]').removeAttr('checked');
		} else {
			$(this).parent().parent().find('th').children('input[type="checkbox"]').prop('checked',true);
		}
	});


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
