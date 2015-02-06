<?php
	include('../../database/connect.db.php');
	include('../../functions/chat.func.php');

	if(isset($_GET['sender']) && !empty($_GET['sender'])){

		$sender = $_GET['sender'];

		if(isset($_GET['message']) && !empty($_GET['message'])){

			$message = $_GET['message'];

			if(send_msg($sender,$message)){

				echo 'Message sent!';

			}else{
				echo 'Message wasn\'t sent';
			}

		}else{
			echo 'No message was entered!!';
		}
	}
	else{

		echo 'No name was entered';
	}
?>