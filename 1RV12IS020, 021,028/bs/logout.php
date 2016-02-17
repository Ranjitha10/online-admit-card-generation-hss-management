<?php
	session_start();
	session_destroy();
	header('Location:../WPlogin.php');
	exit();
	?>
