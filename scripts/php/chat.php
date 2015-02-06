<?php
	include('../../database/connect.db.php');
	include('../../functions/chat.func.php');

	$messeges = get_msg();
				foreach ($messeges as $messege) {
					# code...
					echo '<strong>'.$messege['sender'].' sent</strong><br />';
					echo $messege['messege'].'<br /><br />';
				}

?>