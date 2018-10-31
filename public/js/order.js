$(function(){
	
		$('.count').on('input', function(){
			var data=$(this).val();
			var id=$(this).attr('data-id');
			var price=$('#price_'+id).text();
			$('#count_'+id).text(price*data);
		});
		$('#email').on('input', function(){
		var our_string = $(this).val();	
if(our_string.indexOf('@') + 1) {
   $(this).css('background', 'green');
}else{
    $(this).css('background', 'red');
}
		
		});
	});