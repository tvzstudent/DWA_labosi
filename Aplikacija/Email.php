<?php
if(isset($_POST['posalji']))
{
	session_start();
	if($_SESSION['odgovor']==md5($_POST['odg']) && $_SESSION['nova_lozinka'])
	{
		$znakovi = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	
		$duzina = strlen( $znakovi );
		$lozinka="";
		for( $i = 0; $i < 8; $i++ )
			$lozinka .= $znakovi[ rand( 0, $duzina - 1 ) ];
		$konekcija=mysqli_connect('localhost','root','','seminar2');
		$upit='UPDATE korisnici SET lozinka="'.md5($_SESSION['salt'].$lozinka).'" WHERE e_mail="'.$_SESSION['email'].'";';
		$rezultat=mysqli_query($konekcija, $upit);
		//$poruka="Vaša nova lozinka je $lozinka";
		echo "Vaša nova lozinka je $lozinka <br />";
		//mail($_SESSION['email'], 'Nova lozinka', $poruka,"From: Aplikacija za turiste - Nova lozinka");
		unset($_SESSION['email']);
		unset($_SESSION['odgovor']);
		session_destroy();
		mysqli_close($konekcija);
		echo 'Sada se možete ponovno prijaviti sa vašom novom lozinkom :) <a href="Prijava.html"> Prijavite se </a>';
	}
	else
		header("Location: Prijava.html");
}
?>