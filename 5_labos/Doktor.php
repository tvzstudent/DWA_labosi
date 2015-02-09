
<?php
	if(isset($_GET['ime']) || isset($_GET['prezime'])){
		$ime = isset($_GET['ime']) && $_GET['ime'] !== "" ? $_GET['ime'] : false;
		$prezime = isset($_GET['prezime']) && $_GET['prezime'] !== "" ? $_GET['prezime'] : false;
		if($ime !== false && $ime !== ""){
			$ime = 'ime='.$ime;
		}else{
			$ime = null;
		}
		
		if($prezime !== false && $prezime !== ""){
			$prezime = '&prezime='.$prezime;
		}else{
			$prezime = null;
		}
		
		$podaci = stream_get_contents(fopen('http://stajp.vtszg.hr/~spredanic/DWA2/lab5/podaci.php?' . $ime . $prezime, "r"));
	}
?>

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

<form action="Doktor.php" method="GET">
<div class="sadrzaj">
	<input type="text" name="ime" placeholder="Ime">
	<input type="text" name="prezime" placeholder="Prezime">
	<input type="submit" value="Pošalji"> <br/>
	<?php
	if(isset($podaci)){
	$podaci = json_decode($podaci, true);
		for($i=0;$i<count($podaci);$i++)
		{
			echo 'Ime: ';
 			echo $podaci[$i]['ime'];
			echo '<br/> Prezime: ';
			echo '<br/>';
		}
		
		}
?>
</div>
</form>
<footer class="footer">
	&copy; ZDK <?PHP echo date("Y"); ?>
</footer>
</div>
</body>
</html>