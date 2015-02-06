<?php
	include('core.inc.php');
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Page title -->
		<title>Chat Application</title>
		<!-- CSS Stylesheets -->
		<link rel="stylesheet" type="text/css" href="public/css/main.css">
	</head>
	<body>
	<!-- inpiut -->
		<div id="input">
			<div id="feedback"></div>
			<form action="#" method="post" autocomplete="off" id="form_input">
				<label>Enter Name : <input type="text" name="sender"  id="sender" /> </label><br /><br />
				<label>Enter Messege : <br /><textarea id="message" cols="40" rows="4"></textarea> </label><br /><br />
				<input type="submit" name="send" id="send" value="Send Message"><br />
			</form>
		</div>
		<div id="messeges">
			
		</div>

	<script type="text/javascript" src="scripts/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="scripts/js/auto_chat.js"></script>
	<script type="text/javascript" src="scripts/js/send.js"></script>

		
	</body>
</html>
