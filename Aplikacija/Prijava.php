﻿<!DOCTYPE>
<?php
	session_start();
	if(isset($_SESSION['prijavljen']))
	{
		header("Location:index.php");
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="normalize.css" />
		<link rel="stylesheet" href="grid.css" />
		<link rel="stylesheet" href="stil.css" />
	</head>
	<body>
		<header class="row">
			<title> Prijava </title>
			<img src="slike/logo.jpeg" alt="" width="110" height="110">
		</header>
		<div class="column column-4">
		<form class="column column-2" action="Prijava_provjera.php" method="post">
			Korisničko ime: <input type="text" name="korisnicko_ime" />
			Lozinka: <input type="password" name="lozinka" />
			<input type="submit" value="Prijavi se" name="prijava"/>
		</form>
		</div>
		<div>
		Niste registrirani?
		<a href="Registracija.html"> Registrirajte se <a /> <br />
		<a href="Zaboravljena_lozinka.php"> Zaboravili ste lozinku <a />
		</div>
		<footer>
		</footer>
	</body>	
</html>