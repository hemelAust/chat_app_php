<?php
 	$db_host = 'localhost';
 	$db_user = 'root';
 	$db_pass = 'vertrigo';

 	$db_name = 'chat';

 	if($connection	= mysql_connect($db_host,$db_user,$db_pass))
 	{
 		$feedback[] = "Connected to mysql database!!!!<br />";

 		if($database = @mysql_select_db($connection,$db_name))
 		{
 		 	$feedback[] = "Database has been selected!!!<br />";
 		}
 		else
 		{
 			$feedback[] = "Database has not been selected!!!<br />";
 		}
 	}
 	else
 	{
 		$feedback[] = "Unable to connect mysql server!!!<br />";
 	}	

?>
