$(document).ready(function(){

	var interval = setInterval(function(){

		$.ajax({
			url: 'scripts/php/chat.php',
			success: function(data){
				$('#messeges').html(data);
			}
		});

	}, 1000);
});