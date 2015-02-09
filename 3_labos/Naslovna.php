<?php
	session_start();
	if(!isset($_SESSION['prijavljen']))
	{
		header("Location:Login.html");
	}
?>

<!DOCTYPE>
<html>
	<head>
		<title> Pacijenti ZDK </title>
		<link rel="stylesheet" type="text/css" href="Stil.css">	 
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
					<li> <a href="#osobni_podatci"> Osobni podatci </a> </li>
					<li> <a href="#skolovanje"> Školovanje </a> </li>
					<li> <a href="#radno_iskustvo"> Radno iskustvo </a> </li>
					<li> <a href="#znanje_i_vjestine"> Znanje i vještine </a> </li>
					<li> <a href="Novi_pacijent.html"> Novi pacijent </a> </li>
				</ul>
			</aside>
			<div class="sadrzaj">
				<a onMouseOver="pokazi('pod')" onMouseOut="sakrij('pod')" name="skolovanje"> <h3> OSOBNI PODATCI </h3> </a>
				<p id="pod">Ime i prezime: Domagoj Šoštariæ <br/>
				   Mjesto i datum roðenja: Grad Zagreb, Republika Hrvatska, 04.04.1992.</p>
				<a onMouseOver="pokazi('skola')" onMouseOut="sakrij('skola')" name="skolovanje"> <h3> PODACI O ŠKOLOVANJU </h3></a>
				<p id="skola">Osnovna škola: Osnovna škola Lovre pl. Mataèiæ <br/>
				   Srednja škola: Tehnièka škola Ruðera Boškoviæa <br/>
				   Fakultet: Tehnièko veleuèilište Zagreb, smjer raèunarstvo </p>
				<a onMOuseOver="pokazi('rad')" onMOuseOut="sakrij('rad')" name="radno_iskustvo"> <h3> PODACI O RADNOM ISKUSTVU </h3> </a>
				<p id="rad"> Promocija plus: <br/>
					- anketiranje <br/>
					- tajanstve posjete (mystery shopping) <br/>
				McDonald's restoran <br/>
				Helikop <br/>
					- rad u skladištu <br/>
				Heraklea <br/>
					- tajanstvene posjete (mystery shopping) <br/>
				Lagermax <br/>
					- rad u skladištu <br/>
				Muller <br/>
					- punjaè polica <br/>
				</p>
				<a onMOuseOver="pokazi('znanje')" onMOuseOut="sakrij('znanje')" name="znanje_i_vjestine"> <h3> ZNANJA I VJEŠTINE </h3> </a>
				<p id="znanje"> HTML5, CSS3, PHP C, C#, C++, poznavanje rada s bazama podataka </p>
			</div>
			<footer class="footer">
				&copy; ZDK <?PHP echo date("Y"); ?>
			</footer>
		</div>
	</body>
	<script type="text/javascript"> 
		pokazi: function(element)
			{
				document.getElementById(element).style.visibility='visible';
			}
		sakrij : function(element)
		{
			document.GetElementById(element).style.visibility='hidden';
		}
	</script>
</html>