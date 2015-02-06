$('#form_input').submit(function(){

	var sender = $('#sender').val();
	var message = $('#message').val();
	
	$.ajax({

		url: 'scripts/php/send.php',
		data:{sender:sender,message:message},
		success: function(data){
			$('#feedback').html(data);
				$('#feedback').fadeIn('slow',function(){
					$('#feedback').fadeOut(6000);
				})
		}
	})

	return false;
});
