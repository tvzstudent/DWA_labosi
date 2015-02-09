<!DOCTYPE html>
<html>
<head>
	<head>
		<title> Sadrzaj ZDK </title>
		<link rel="stylesheet" type="text/css" href="Stil.css">	 
	</head>
</head>
<body>
	<div class="stranica_sadrzaj">
		<header class="header">
			<img class="logo" src="logo.png" alt="Logo ZDK" width="15%" height="15%">
			<div class="korisnicki_podatci">
				<!--<a href="Login.html">--> <form action="odjava.php" method="post"> <input type="submit" value="Odjava"> </form> <!--</a>-->
			</div>
		</header>
		<aside class="izbornik">
			<ul>
				<li> <a href="Loginh.php"> Naslovna </a> </li>
				<li> <a href="Pacijenti.php"> Popis pacijenata </a> </li>
			</ul>
		</aside>
		<form action="pdf.php" method="post">
		<div class="sadrzaj">
		Ime:</br>
		<input id="ime" type="text" name="name" /></br>
		Prezime:</br>
		<input id="prezime" type="text" name="lastname" /></br>
		Krvna grupa:</br>
		<input id="grupa" type="radio" name="krv" value="A"/>A
		<input id="grupa" type="radio" name="krv" value="B"/>B
		<input id="grupa" type="radio" name="krv" value="AB"/>AB
		<input id="grupa" type="radio" name="krv" value="0"/>0</br>
		<input id="grupa+" type="radio" name="krv+" value="+"/>+
		<input id="grupa-" type="radio" name="krv+" value="-"/>-</br>
		<p><input type="submit" value="Pošalji" class="InputButton" /></p>
		</div>
		</form>
	</div>
</div>
<footer class="footer">
	&copy; ZDK <?PHP echo date("Y"); ?>
</footer>
</body>
</html>
