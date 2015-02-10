<!DOCTYPE>
<html>
	<head>
		<link rel="stylesheet" href="normalize.css" />
		<link rel="stylesheet" href="grid.css" />
		<link rel="stylesheet" href="stil.css" />
	</head>
	<body>
		<header class="header">
			<title> Zaboravljena lozinka - unos podataka </title>
			<img src="slike/logo.jpeg" alt="" width="110" height="110">
		</header>
			<form class="cloumn column-3" action="Zaboravljena_lozinka.php" method="post">
				Korisničko ime: <input type="text" name="korisnicko_ime" autocomplete="off" /> <br /> <br />
				E-mail kojim ste se registrirali: <input type="email" name="email" autocomplete="off" /> <br /> <br />
				<input type="submit" value="Dalje" name="nadji"/>
			</form>
			<?php
					session_start();
					if(isset($_POST['nadji']))
					{
						$konekcija=mysqli_connect('localhost','root','','seminar2');
						//$korisnicko_ime=$_POST['korisnicko_ime'];
						//$email=$_POST['email'];
						$korisnicko_ime = mysqli_real_escape_string($konekcija, $_POST['korisnicko_ime']);
						$email = mysqli_real_escape_string($konekcija, $_POST['email']);
						$upit='SELECT pitanje, odgovor,s_data FROM korisnici WHERE korisnicko_ime="'.$korisnicko_ime.'";';
						$rezultat=mysqli_query($konekcija, $upit);
						if(empty($_POST['korisnicko_ime']))
						{
							header("Location: Zaboravljena_lozinka.php");
						}
						if(mysqli_num_rows($rezultat)==0)
							header("Location: Zaboravljena_lozinka.php");
						else
						{
							$red=mysqli_fetch_array($rezultat);
							$pitanje=$red['pitanje'];
							$odgovor=$red['odgovor'];
							header("Location: Upis_odgovora.php?korisnicko_ime=".urlencode($korisnicko_ime)."&email=".urlencode($email)."&pitanje=".urlencode($pitanje)."&odgovor=".urlencode($odgovor));
							echo 'Korisnik '.$korisnicko_ime.' ovo je Vaše pitanje: <br />'.$pitanje.'<br />';
							echo 'ovo je odgovor '.$odgovor.'!';
							$_SESSION['nova_lozinka']=true;
							$_SESSION['salt']=$red['s_data'];
						}
						mysqli_close($konekcija);
					}
			?>
		<footer>
		</footer>
	</body>
</html>