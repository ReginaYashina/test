$(function()
{
	
	
		$('.count').on('input', function()
			{
				var data=$(this).val();//количество штук одного товара
				var id=$(this).attr('data-id');//айдишник выбранного товара
				var price=$('#price_'+id).text();//цена выбранного товара
				var count=price*data;
				$('#count_'+id).text(price*data);//общая стоимость за несколько штук одного товара
	
			
				var counts=0;
				var sum=0;
				$('.tr').each( function()
				{
						var data_txt=$(this).find('.count').val();
						var data=parseInt(data_txt);
						var id=$(this).find('.count').attr('data-id');
						var count_txt=$(this).find('#count_'+id).text();
						var count=parseInt(count_txt);
						counts+=data;
						sum+=count;
						$('#counts').text(counts);
						$('#itog').text(sum);
						
				});

});



		$('#email').on('input', function()
		{
			var our_string = $(this).val();	
			
			if(our_string.indexOf('@') + 1) 
			{
   			$(this).css('borderColor', 'none');
			}else
			{
    		$(this).css('borderColor', 'red');
			}
		});
});

// onchange="onChange"