<?php
session_start();
	if(!isset($_SESSION['prijavljen']))
		header("Location:Login.html");
	$con=mysqli_connect("localhost","root","","dwa");
	mysqli_query($con,"SET NAMES 'utf8'");
	mysqli_query($con,"SET CHARACTER_SET 'utf8'");
	$json = array();
	$result = mysqli_query($con,"SELECT * FROM pacijenti");
	while($row = mysqli_fetch_array($result))
	   { 
		$bus = array(
			'ime' => $row['ime'],
			'prezime' => $row['prezime'],
			'spol' => $row['spol'] );
		array_push($json, $bus);
		}
		$jsonstring = json_encode($json);
		$arrson = json_decode($jsonstring,true);
		echo '<div id="json">
		</div>';
		mysqli_close($con);
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
<footer class="footer">
	&copy; ZDK <?PHP echo date("Y"); ?>
</footer>
</div>
</body>
</html>

<?php
	header("Location: doktori.php");
?>