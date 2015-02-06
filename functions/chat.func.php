<?php
	function get_msg()
	{
		$query = "SELECT `sender`,`message` FROM `chat`.`chat` ORDER BY `msg_id` DESC";

		$run = mysql_query($query);

		$messeges = array();

		while ($messege = mysql_fetch_assoc($run)) {
			# code...
			$messeges[] = array('sender'=>$messege['sender'],
								'messege'=>$messege['message']);
		}

		return $messeges;
	}


	function send_msg($sender,$messege)
	{
		if(!empty($sender) && !empty($messege))
		{
			$sender = mysql_real_escape_string($sender);
			$messege = mysql_real_escape_string($messege);

			$query = "INSERT INTO `chat`.`chat` VALUES (null,'{$sender}','$messege')";

			if($run = mysql_query($query))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
?>