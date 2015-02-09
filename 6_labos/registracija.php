<?php
	if(isset($_POST['registracija']))
	{
	$korisnicko_ime = $_POST['username'];
	$lozinka = md5($_POST['password']);
	$konekcija=mysqli_connect('localhost','root','','dwa');
	$upit="INSERT INTO korisnici(korisnicko_ime, lozinka) VALUES('$korisnicko_ime','$lozinka')";
	$rezultat=mysqli_query($konekcija,$upit);
	mysqli_close($konekcija);
	echo 'registracija je uspješna!';
	}
	