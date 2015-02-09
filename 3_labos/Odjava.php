<?php
	session_start();
	$_SESSION['prijavljen']=false;
	header("Location: Login.html");
	session_destroy();
?>