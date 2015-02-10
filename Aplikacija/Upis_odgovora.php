<!DOCTYPE>
<html>
	<head>
		<link rel="stylesheet" href="normalize.css" />
		<link rel="stylesheet" href="grid.css" />
		<link rel="stylesheet" href="stil.css" />
	</head>
	<body>
		<header>
			<title> Zaboravljena lozinka - upis odgovora </title>
		</header>
		<?php
			session_start();
			if($_SESSION['nova_lozinka'])
			{
				$konekcija=mysqli_connect('localhost','root','','seminar2');
				$korisnicko_ime = mysqli_real_escape_string($konekcija, $_GET['korisnicko_ime']);
				$upit='SELECT e_mail FROM korisnici WHERE korisnicko_ime="'.$korisnicko_ime.'"';
				//$upit='SELECT e_mail FROM korisnici WHERE korisnicko_ime="'.$_GET['korisnicko_ime'].'"';
				$rezultat=mysqli_query($konekcija, $upit);
				$red=mysqli_fetch_array($rezultat);
				$email=$red['e_mail'];
				if($email!=$_GET['email'])
					header("Location: Zaboravljena_lozinka.php");
				else
				{
					echo 'Korisnicko ime: '.$_GET['korisnicko_ime'].'<br />';
					echo 'E-mail: '.$_GET['email'].'<br />';
					echo 'Pitanje: '.$_GET['pitanje'].'<br />';
					$_SESSION['email']=$_GET['email'];
					$_SESSION['odgovor']=$_GET['odgovor'];
				}
			}
			else
				header("Location: Zaboravljena_lozinka.php");
			mysqli_close($konekcija);
		?>
		Upišite odgovor na Vaše pitanje: <br />
		<form action="Email.php" method="post">
			<input type="text" name="odg" autocomplete="off" /> <br />
			<input type="submit" value="Pošalji" name="posalji" />
		</form>
		<footer>
		</footer>
	</body>
</html>