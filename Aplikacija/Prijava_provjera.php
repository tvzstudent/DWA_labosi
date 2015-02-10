<?php
/*$_DEBUG=0;
function ispis($varijabla)
{
	global $_DEBUG;
	if ($_DEBUG)
	{
		echo "<pre>";
			var_dump($varijabla);
		echo "</pre>";
	}
}*/
session_start();
if(isset($_POST['prijava']))
{
	$salt="prazno";
	$konekcija=mysqli_connect('localhost','root','','seminar2');
	$upit="SELECT s_data FROM korisnici WHERE korisnicko_ime LIKE '$_POST[korisnicko_ime]'";
	$rezultat=mysqli_query($konekcija, $upit);
	$red=mysqli_fetch_array($rezultat);
	$salt=$red['s_data'];
	$korisnicko_ime = mysqli_real_escape_string($konekcija, $_POST['korisnicko_ime']);
	$lozinka = mysqli_real_escape_string($konekcija, $_POST['lozinka']);
	$upit='SELECT korisnicko_ime, lozinka FROM korisnici WHERE korisnicko_ime="'.$korisnicko_ime.'" AND lozinka="'.md5($salt.$lozinka).'";';
	if(empty($_POST['korisnicko_ime']) || empty($_POST['lozinka']))
	{
		header("Location: Prijava.html");
	}
	$rezultat=mysqli_query($konekcija, $upit);
	if(mysqli_num_rows($rezultat))
	{
		$_SESSION['prijavljen']=$korisnicko_ime;
		header("Location:index.php");
	}
	else 
		die('Krivo korisničko ime ili lozinka! <br />
		Pokušajte ponovno: <a href="Prijava.html"> Prijava </a>');
	mysqli_close($konekcija);
}
else 
	die('Nešto je krivo!');
?>