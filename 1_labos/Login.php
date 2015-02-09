<?php
	if(isset($_POST['prijava']))
	{
		$korisnicko_ime = $_POST['username'];
		$lozinka = $_POST['password'];
		$konekcija=mysqli_connect('localhost','root','','dwa');
		$upit='SELECT korisnicko_ime, lozinka FROM korisnici WHERE korisnicko_ime="'.$korisnicko_ime.'" AND lozinka="'.$lozinka.'" LIMIT 0, 1';
		$rezultat=mysqli_query($konekcija, $upit);
		$broj_rezultata=mysqli_num_rows($rezultat);
		if(mysqli_num_rows($rezultat)!=0)
		{
			echo 
			'<!DOCTYPE>
				<html>
					<head>
						<title> Sadrzaj ZDK </title>
						<link rel="stylesheet" type="text/css" href="Stil.css">	 
					</head>
					<body>
						<div class="stranica_sadrzaj">
							<header class="header">
								<img class="logo" src="logo.png" alt="Logo ZDK" width="15%" height="15%">
								<div class="korisnicki_podatci">'
									.$korisnicko_ime.'<a href="Login.html"> <input type="submit" value="Odjava"> </a>
								</div>
							</header>
							<aside class="izbornik">
								<ul>
									<li> <a href="#osobni_podatci"> Osobni podatci </a> </li>
									<li> <a href="#skolovanje"> Školovanje </a> </li>
									<li> <a href="#radno_iskustvo"> Radno iskustvo </a> </li>
									<li> <a href="#znanje_i_vjestine"> Znanje i vještine </a> </li>
									<li> <a href="Pacijenti.php"> Popis pacijenata </a> </li>
								</ul>
							</aside>
							<div class="sadrzaj">
								<a id="osobni_podatci"> Osobni podatci </a> <br />
								&nbsp - Domagoj Šoštarić <br />
								&nbsp - Zagreb, 04.04.1992. <br />
								<a id="skolovanje"> Podatci o Školovanju  </a> <br />
								&nbsp - O.Š. Lovre pl. Matačića <br />
								&nbsp - Tehnička škola Ruđera Boškovića <br />
								&nbsp - Tehničko veleučilište u Zagrebu <br />
								<a id="radno_iskustvo"> Radno iskustvo </a> <br />
								&nbsp - Mystery shopping <br />
								&nbsp - Rad u skladištu <br />
								&nbsp - Lanac brze hrane <br />
								<a id="znanje_i_vjestine"> Znanje i vještine </a> <br />
								&nbsp - C, C++, C# <br />
								&nbsp - PHP <br />
								&nbsp - Baze podataka
							</div>
							<footer class="footer">
								&copy; ZDK <?PHP echo date("Y"); ?>
							</footer>
						</div>
					</body>
				</html>';
		}
		else
			echo 'Krivo korisničko ime ili lozinka!';
	}
	mysqli_close($konekcija);
?>