<DOCTYPE!>
<?php
	session_start();
	$konekcija=mysqli_connect('localhost','root','','seminar2');
	$upit='SELECT admin FROM korisnici WHERE korisnicko_ime="'.$_SESSION['prijavljen'].'";';
	$rezultat=mysqli_query($konekcija, $upit);
	$red=mysqli_fetch_array($rezultat);
	if(!$red['admin'])
		header("Location:index.php");
?>
<html>
	<head>
		<title> Admin stranica </title>
	</head>
	<body>
		Obriši korisnika:  <br />
		<form action="Admin_provjera.php" method="post">
			<?php
				mysqli_set_charset($konekcija, "utf8");
				$upit='SELECT korisnicko_ime FROM korisnici';
				$rezultat=mysqli_query($konekcija, $upit);
				$br_redaka=mysqli_num_rows($rezultat);
				for($i=0;$i<$br_redaka;$i++)
				{
					$red_korisnici[]=mysqli_fetch_array($rezultat);
				}
				echo 'Korisnici: ';
				echo "<select name='korisnici'>";
				for($i=0;$i<$br_redaka;$i++)
				{
					echo '<option value="'.$red_korisnici[$i][0].'">'.$red_korisnici[$i]['korisnicko_ime'].'</option>';
				}
				echo '</select>';
			?>
			<br /> <input type="submit" value="Obriši" name="obrisi_korisnika" /> <br />
		</form>
		Obriši grad:
		<form action="Admin_provjera.php" method="post">
			<?php
				$upit='SELECT ime FROM gradovi';
				$rezultat=mysqli_query($konekcija, $upit);
				$br_redaka=mysqli_num_rows($rezultat);
				for($i=0;$i<$br_redaka;$i++)
				{
					$red_gradovi[]=mysqli_fetch_array($rezultat);
				}
				echo 'Gradovi: ';
				echo "<select name='gradovi'>";
				for($i=0;$i<$br_redaka;$i++)
				{
					echo '<option value="'.$red_gradovi[$i][0].'">'.$red_gradovi[$i]['ime'].'</option>';
				}
				echo '</select>';	
			?>
			<br /> <input type="submit" value="Obriši" name="obrisi_grad" /> <br />
		</form>
		Dodaj grad:
		<form action="Admin_provjera.php" method="post">
			Upišite ime grada: <input type="text" name="ime_grada" /> <br />
			Odaberite regiju grada:
			<select name="regija">
				<option value="0" selected="true"> Centralan Hrvatska </option>
				<option value="1"> Istočna Hrvatska </option>
				<option value="2"> Planinska Hrvatska </option>
				<option value="3"> Sjeverna Hrvatska </option>
				<option value="4"> Južna Hrvatska </option>
			</select> <br />
			<input type="submit" value="Upiši" name="novi_grad" /> <br />
		</form>
		<a href="index.php"> Povratak na početnu stranicu </a>
	</body>
</html>