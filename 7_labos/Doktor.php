<!DOCTYPE html>
<html>
<head>
  <title>ZKD</title>
  <link rel="stylesheet" href="Stil.css" />
</head>
<body>
<div class="stranica_sadrzaj">
<header class="header">
				<img class="logo" src="logo.png" alt="Logo ZDK" width="15%" height="15%">
			<div class="korisnicki_podatci">
					<!--<a href="Login.html">--> <form action="Odjava.php" method="post"> <input type="submit" value="Odjava"> </form> <!--</a>-->
			</div>
			</header>
<aside class="izbornik">
	<ul>
	<li> <a href="Naslovan.php"> Naslovna </a> </li>
	<li> <a href="Pacijenti.php"> Popis pacijenata </a> </li>
	<li> <a href="Novi_pacijent.html"> Novi pacijent </a> </li>
	<li> <a href="graf.php"> graf </a> </li>
	</ul>
</aside>

<form action="json.php" method="GET">
<div class="sadrzaj">
<input type="text" name="firstname" placeholder="Ime">
<input type="text" name="lastname" placeholder="Prezime">
<input type="submit" value="Pošalji">
</div>
</form>
<footer class="footer">
	&copy; ZDK <?PHP echo date("Y"); ?>
</footer>
</div>
</body>
</html>