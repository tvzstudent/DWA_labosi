<!DOCTYPE>
<html>
	<head>
		<title> Pacijenti ZDK </title>
		<link rel="stylesheet" type="text/css" href="Stil.css">	 
	</head>
	<body>
		<div class="stranica_sadrzaj">
			<header class="header">
				<img class="logo" src="logo.png" alt="Logo ZDK" width="15%" height="15%">
			<div class="korisnicki_podatci">
					<a href="Login.html"> <input type="submit" value="Odjava"> </a>
			</div>
			</header>
			<aside class="izbornik">
				<ul>
					<li> <a href="Login.php"> Naslovna </a> </li>
					<li> <a href="Novi_pacijent.html"> Novi pacijent </a> </li>
				</ul>
			</aside>
			<div class="sadrzaj">
			<input type="text" name="search" />
			<!-- zakomentirano!!!<?php
				$konekcija=mysqli_connect('localhost','root','','dwa');
				mysqli_set_charset($konekcija, "utf8");
				$upit='SELECT * FROM pacijenti';
				$rezultat=mysqli_query($konekcija, $upit);
				while($red=mysqli_fetch_array($rezultat))
				{
					echo
						'<table style="border:1px solid black;">
							<tr>
								<td>'.$red['ime'].'</td>
								<td>'.$red['prezime'].'</td>
								<td>'.$red['spol'].'</td>
								<td>'.$red['datum'].'</td>
								<td>'.$red['mob'].'</td>
								<td>'.$red['adresa'].'</td>
								<td>'.$red['grad'].'</td>
							</tr>
						</table>';
				}
				mysqli_close($konekcija);
			?>-->
				<table class="tablica">
					<th> Ime </th>
					<th> Prezime </th>
					<th> Spol </th>
					<th> Datum rođenja </th>
					<th> Mobitel </th>
					<th> Adresa </th>
					<th> Mjesto </th>
					<tr>
						<td> Štefica </td>
						<td> Ostojić </td>
						<td> Ž </td>
						<td> 17.3.1937 </td>
						<td> 091/7121688 </td>
						<td> Redovka 9 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Ivan </td>
						<td> Kušan </td>
						<td> M </td>
						<td> 19.7.1979 </td>
						<td> 098/1667148 </td>
						<td> Marinovečka 12 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Hrvoje </td>
						<td> Radić </td>
						<td> M </td>
						<td> 6.6.1944 </td>
						<td> 098/7317883 </td>
						<td> Dore Pejačević 28 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Vjeran </td>
						<td> Delić </td>
						<td> M </td>
						<td> 2.3.1978 </td>
						<td> 022/4672651 </td>
						<td> Banovski Put 11 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Filip </td>
						<td> Pavlović </td>
						<td> M </td>
						<td> 28.3.1939 </td>
						<td> 092/6058667 </td>
						<td> Sitnice 24 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Elena </td>
						<td> Mandić </td>
						<td> Ž </td>
						<td> 25.9.1992 </td>
						<td> 098/6248116 </td>
						<td> Rebrovac 23 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Filip </td>
						<td> Pavlović </td>
						<td> M </td>
						<td> 28.3.1939 </td>
						<td> 092/6058667 </td>
						<td> Sitnice 24 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Dinko </td>
						<td> Kovačević </td>
						<td> M </td>
						<td> 13.11.1940 </td>
						<td> 021/2727852 </td>
						<td> Martinci 28 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Vjeran </td>
						<td> Kušec </td>
						<td> M </td>
						<td> 13.3.1978 </td>
						<td> 01/9155118 </td>
						<td> Donadinieva 30 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Marina </td>
						<td> Milinović </td>
						<td> Ž </td>
						<td> 12.12.1961 </td>
						<td> 099/6669101 </td>
						<td> Raosa, Ivana 4 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Katarina </td>
						<td> Cindrić </td>
						<td> Ž </td>
						<td> 9.7.1991 </td>
						<td> 022/4547668 </td>
						<td> Ratarska 11 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Josip </td>
						<td> Bošnjak </td>
						<td> M </td>
						<td> 25.4.1951 </td>
						<td> 099/2720846 </td>
						<td> Andraševečka 8 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Ivana </td>
						<td> Mandić </td>
						<td> Ž </td>
						<td> 27.8.1980 </td>
						<td> 01/73442610</td>
						<td> Severi 4 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Katarina </td>
						<td> Grgić </td>
						<td> Ž </td>
						<td> 16.5.1943 </td>
						<td> 098/6539595 </td>
						<td> Ravnice 25 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Vjeran </td>
						<td> Rukavina </td>
						<td> M </td>
						<td> 27.5.1959 </td>
						<td> 031/6298645 </td>
						<td> Remetinec 11 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Štefica </td>
						<td> Radić </td>
						<td> Ž </td>
						<td> 21.3.1955 </td>
						<td> 021/3197918 </td>
						<td> Dragozetićka 2 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Mirka </td>
						<td> Špoljarić </td>
						<td> Ž </td>
						<td> 11.6.1957 </td>
						<td> 031/2887741 </td>
						<td> Doneca Ivana 4 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Goran </td>
						<td> Milinović </td>
						<td> M </td>
						<td> 4.9.1954 </td>
						<td> 042/1331138 </td>
						<td> Martićeva 12 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Lino </td>
						<td> Kučić </td>
						<td> M </td>
						<td> 10.5.1960 </td>
						<td> 021/4133537 </td>
						<td> Ribnjak 27 </td>
						<td> Zagreb </td>
					</tr>
					<tr>
						<td> Kristina </td>
						<td> Novosel </td>
						<td> Ž </td>
						<td> 21.6.1937 </td>
						<td> 031/5618736 </td>
						<td> Sakačeva 31 </td>
						<td> Zagreb </td>
					</tr>
				</table>
			</div>
			<footer class="footer">
				&copy; ZDK <?PHP echo date("Y"); ?>
			</footer>
		</div>
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('input[name="search"]').keyup(function(e){
					var txt = $(this).val();
					var tr = $('.tablica tr');
					
					for(i = 0; i < tr.length; ++i){
						$(tr[i]).show();
					}
					
					for(i = 1; i < tr.length; ++i){
						var record = tr[i];
						var tds = record.getElementsByTagName("td");
						
						var found = false;
						for(j = 0; j < tds.length; j++){
							if(tds[j].innerHTML.indexOf(txt) !== -1){
								found = true;
							}
						}
						
						if(found == false){
							$(tr[i]).hide();
						}
					}
					
				});
			});
		</script>
	</body>
	
</html>