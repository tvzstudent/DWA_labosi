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
		<title> Sadrzaj ZDK </title>
		<link rel="stylesheet" type="text/css" href="Stil.css">	 
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
					<li> <a href="Naslovna.php"> Naslovna </a> </li>
					<li> <a href="Pacijenti.php"> Popis pacijenata </a> </li>
				</ul>
			</aside>
			<form action="Novi_pacijent.php" method="post">
			<div class="sadrzaj">
				Upis novih pacijenata: <br />
				Ime: <input type="text" name="ime" /> <br />
				Prezime: <input type="text" name="prezime" /> <br />
				Spol:
				<input type="radio" value="M" name="spol"> M
				<input type="radio" value="Ž" name="spol"> Ž <br />
				Datum roðenja:
				<input type="text" name="godina_rodjenja" placeholder="dd.mm.gggg" /> <br />
				Mjesto roðenja: <input type="text" name="mjesto_rodjenja" /> <br />
				Adresa i mjesto stanovanja: <input type="text" name="adr_i_mj_stanovanja" /> <br />
				Krvna grupa:
				<select>
					<option name="krv" value="A" > A </option>
					<option name="krv" value="B"> B </option>
					<option name="krv" value="AB"> AB </option>
					<option name="krv" value="0"> 0 </option>
					<option name="krv" value=" Ne zna" selected> Ne znam </option>
				</select>
				<select>
					<option name="sufiks"> + Pozitivna </option>
					<option name="sufiks"> - Negativna </option>
					<option name="sufiks" selected> Ne znam </option>
				</select> <br />
				Ima li prijašnjih medicinskih tegoba:
				<select>
					<option name="tegobe" id="tegobe"> Da </option>
					<option name="tegobe" selected> Ne </option>
				</select> <br />
				Koje tegobe: <input type="text" name="medicinske_tegobe" disabled/> <br />
				Je li osoba alergièna na lijekove:
				<select>
					<option name="alergija"> Da </option>
					<option name="alergija"> Ne </option>
					<option name="alergija" selected> Ne zna </option>
				</select> <br />
				Na koje lijekove:
				<input type="text" name="lijekovi" /> <br/>
				<input type="submit" value="Upiši" name="submit">
			</div>
			</form>
			<footer class="footer">
				&copy; ZDK <?PHP echo date("Y"); ?>
			</footer>
		</div>
	</body>
	<script type="tetx/javascript">
		function odobri() {
			if(document.getElementById("tegobe").selected)
				document.getElementByName("medicinske_tegobe").enabled='true';
		}
		
		var element = document.getElementByName("medicinske_tegobe");
		element.addEventListener("onchange", odobri);
	</script>
</html>