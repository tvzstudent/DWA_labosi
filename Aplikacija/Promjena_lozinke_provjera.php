<?php
	session_start();
	if(!isset($_SESSION['prijavljen']))
	{
		header("Location:Prijava.html");
	}
	else
	{
		if(isset($_POST['spremi']))
		{
			echo '<a href="Promjena_lozinke.php"> Povratak na prethodnu stranicu </a> <br />';
			$promjena_lozinke=true;
			$konekcija=mysqli_connect('localhost','root','','seminar2');
			$korisnicko_ime = mysqli_real_escape_string($konekcija, $_SESSION['prijavljen']);
			$stara_lozinka = $_POST['stara_lozinka'];
			$nova_lozinka = $_POST['nova_lozinka'];
			$ponovljena_lozinka=$_POST['ponovljena_lozinka'];
			$upit='SELECT lozinka, s_data FROM korisnici WHERE korisnicko_ime="'.$korisnicko_ime.'";';
			$rezultat=mysqli_query($konekcija, $upit);
			$red=mysqli_fetch_array($rezultat);
			if(empty($stara_lozinka) || empty($nova_lozinka) || empty($ponovljena_lozinka))
			{
				echo 'Sva polja moraju biti unesena! <br />';
				$promjena_lozinke=false;
			}
			else
			{
				if(md5($red['s_data'].$stara_lozinka)!=$red['lozinka'])
				{
					echo 'Krivo ste unijeli staru lozinku! <br />';
					$promjena_lozinke=false;
				}
				if($nova_lozinka!=$ponovljena_lozinka)
				{
					echo 'Lozinka i ponovljena nova lozinka se ne poklapaju!';
					$promjena_lozinke=false;
				}
				if($promjena_lozinke)
				{
					$upit='UPDATE korisnici SET lozinka="'.md5($red['s_data'].$nova_lozinka).'" WHERE korisnicko_ime="'.$korisnicko_ime.'";';
					$rezultat=mysqli_query($konekcija, $upit);
					echo 'Uspješno ste promijenili lozinku!';
					header("refresh:3 url=index.php");
				}
			}
			mysqli_close($konekcija);
		}
	}
?>