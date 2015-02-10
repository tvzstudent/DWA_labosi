<?php
$konekcija=mysqli_connect('localhost','root','','seminar2');
mysqli_set_charset($konekcija, "utf8");
if(isset($_POST['obrisi_korisnika']))
{
	//$upit="SELECT korisnicko_ime FROM korisnici";
	//$rezultat=mysqli_query($konekcija, $upit);
	$korisnik=$_POST['korisnici'];
	/*$br_redaka=mysqli_num_rows($rezultat);
	for($i=0;$i<$br_redaka;$i++)
	{
		$poljeKorisnika[]=mysqli_fetch_array($rezultat);
	}
	$brojac=0;
	while($korisnik!=$poljeKorisnika[$brojac][0])
	{
		$brojac++;
	}
	echo 'korisnik za brisanje: '.$korisnik.'<br />';
	echo 'jednaki korisnik: '.$poljeKorisnika[$brojac][0].'<br />';
	$korinsik=$poljeKorisnika[$brojac];*/
	$upit='DELETE FROM korisnici WHERE korisnicko_ime="'.$korisnik.'";';
	$rezultat=mysqli_query($konekcija, $upit);
	var_dump($rezultat);
	echo 'Korisnik je uspješno obrisan!';
	header("refresh:3 url=Admin.php");
}
elseif(isset($_POST['obrisi_grad']))
{
	/*$upit='SELECT ime FROM gradovi';
	$rezultat=mysqli_query($konekcija, $upit);*/
	$grad=$_POST['gradovi'];
	/*$br_redaka=mysqli_num_rows($rezultat);
	for($i=0;$i<$br_redaka;$i++)
	{
		$poljeGradova[]=mysqli_fetch_array($rezultat);
	}
	$brojac=0;
	while($grad!=$brojac)
	{
		$brojac++;
	}
	$korisnik=$poljeGradova[$brojac];*/
	$upit='DELETE FROM gradovi WHERE ime="'.$grad.'";';
	$rezultat=mysqli_query($konekcija, $upit);
	$upit='DELETE FROM djelatnosti WHERE grad="'.$grad.'";';
	$rezultat=mysqli_query($konekcija, $upit);
	echo 'Grad i zanimanja koja se nalaze u gradu su uspješno obrisana!';
	header("refresh:3 url=Admin.php");
}
elseif(isset($_POST['novi_grad']))
{
	$ime_grada=$_POST['ime_grada'];
	$poljeRegija=array('Centralna Hrvatska', 'Istočna Hrvatksa', 'Planinska Hrvatska', 'Sjeverna Hrvatska', 'Južna Hrvatska');
	$regija=$_POST['regija'];
	$brojac=0;
	while($regija!=$brojac)
	{
		$brojac++;
	}
	$upit="INSERT INTO gradovi(ime, regija) VALUES('$ime_grada', '$poljeRegija[$brojac]');";
	$rezultat=mysqli_query($konekcija, $upit);
	var_dump($rezultat);
	echo 'Novi grad je uspješno dodan!';
	header("refresh:3 url=Admin.php");
}
else
	echo 'Nešto je krivo!!!';
mysqli_close($konekcija);
?>