<?php
if(isset($_POST['registracija']))
{
	$poruka="";
	$novi_korisnik=true;
	$salt=uniqid(mt_rand(), true);
	$korisnicko_ime=$_POST['korisnicko_ime'];
	$lozinka=$_POST['lozinka'];
	$ponovljenaLozinka=$_POST['ponovljena_lozinka'];
	$email=$_POST['e_mail'];
	$poljePitanja=array('Moj Prvi Auto?','Djevojačko prezime majke?','Ime kućnog ljubimca?','Mjesto rođenja?','Ime učiteljice?');
	$pitanje=$_POST['pitanje'];
	$brojac=0;
	while($pitanje!=$brojac)
	{
		$brojac++;
	}
	$odgovor = mysqli_real_escape_string($konekcija, $_POST['odgovor']);
	$odgovor=md5($_POST['odgovor']);
	$konekcija=mysqli_connect('localhost','root','','seminar2');
	mysqli_set_charset($konekcija, "utf8");
	$korisnicko_ime = mysqli_real_escape_string($konekcija, $_POST['korisnicko_ime']);
	$lozinka = mysqli_real_escape_string($konekcija, $_POST['lozinka']);
	$ponovljenaLozinka = mysqli_real_escape_string($konekcija, $_POST['ponovljena_lozinka']);
	$email = mysqli_real_escape_string($konekcija, $_POST['e_mail']);
	$pitanje = mysqli_real_escape_string($konekcija, $_POST['pitanje']);
	
	// ISPITIVANJA
		//Prazni textbox-ovi
			if(empty($korisnicko_ime) || empty($lozinka) || empty($ponovljenaLozinka) || empty($email) || empty($poljePitanja))
				echo 'Sva polja moraju biti popunjena! <br />';
			else
			{
			// Korisničko ime
				$upit=
					"SELECT korisnicko_ime FROM korisnici WHERE korisnicko_ime LIKE '$korisnicko_ime'";
				$rezultat=mysqli_query($konekcija,$upit);
				if(mysqli_num_rows($rezultat)!=0)
				{
					$novi_korisnik=false;
					echo 'Postoji korisnik s upisanim korisničkim imenom! <br />';
				}
			// Lozinka
				if($lozinka!=$ponovljenaLozinka)
				{
					$novi_korisnik=false;
					echo 'Lozinka i ponovljena lozinka se ne poklapaju! <br />';
				}
			// E-mail
				$upit=
					"SELECT e_mail FROM korisnici WHERE e_mail LIKE '$email'";
				$rezultat=mysqli_query($konekcija,$upit);
				if(mysqli_num_rows($rezultat)!=0)
				{
					$novi_korisnik=false;
					echo 'Postoji već korisnik s upisanim mailom! <br />';
				}
					$lozinka=md5($salt.$lozinka);
				if($novi_korisnik)
				{
					$upit=
						"INSERT INTO korisnici(korisnicko_ime,lozinka,e_mail,pitanje,odgovor,s_data)
						VALUES('$korisnicko_ime','$lozinka','$email','$poljePitanja[$brojac]','$odgovor','$salt')";
					$rezultat=mysqli_query($konekcija,$upit);
				}
				else
					header("refresh:5; url=Registracija.html");
			}
	mysqli_close($konekcija);
	header("Location:Prijava.php");
}
?>