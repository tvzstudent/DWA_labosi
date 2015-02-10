<DOCTYPE!>
<?php
	session_start();
	if(!isset($_SESSION['prijavljen']))
	{
		header("Location:Prijava.html");
	}
?>
<html>
	<head>
	</head>
	<body>
		<header>
		</header>
		<a href="index.php"> Povratak na naslovnu stranicu </a>
		<form action="Promjena_lozinke_provjera.php" method="post">
			Stara lozinka: <input type="text" name="stara_lozinka" autocomplete="off"/> <br />
			Nova lozinka <input type="password" name="nova_lozinka" /> <br />
			Ponovljena nova lozinka: <input type="password" name="ponovljena_lozinka" /> <br />
			<input type="submit" value="Spremi" name="spremi" />
		</form>
		<footer>
		</footer>
	</body>
</html>