<?php
	session_start();
	$_SESSION['prijavljen']=false;
	header("Location: Prijava.html");
	session_destroy();
?>