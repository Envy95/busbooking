<?php
	session_start();
	unset($_SESSSION["username"]);
	unset($_SESSION["Password"]);
	header("Location: landing-page.php");
?>