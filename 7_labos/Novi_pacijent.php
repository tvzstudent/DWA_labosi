<?php
	if(isset($_POST['submit']))
	{
		$konekcija=mysqli_connect('localhost','root','','dwa');
		$ime=$_POST['ime'];
		$prezime=$_POST['prezime'];
		$spol=$_POST['spol'];
		$mr=$_POST['mjesto_rodjenja'];
		$adr=$_POST['adr_i_mj_stanovanja'];
		$krv=$_POST['krv'];
		$sufiks=$_POST['sufiks'];
		$tegoba=$_POST['tegobe'];
		$opis_teg=$_POST['medicinske_tegobe'];
		$alergija=$_POST['alergija'];
		$aler_lij=$_POST['lijekovi'];
		echo
		"Ime: $ime , prezime $prezime , spol $spol";
		$upit="INSERT INTO pacijenti(ime,prezime,spol,datum,mob,adresa,grad) VALUES('$ime','$prezime','$spol','28.05.1980','mobitel','$adr','Zagreb')";
		mysqli_query($konekcija, $upit);
		mysqli_close($konekcija);
	}
?>