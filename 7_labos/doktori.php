<!DOCTYPE html>
<html>
<head>
  <title>ZKD</title>
  <link rel="stylesheet" href="Stil.css" />
</head>
<body>
<div class="stranica_sadrzaj">
	<header class="header">
				<img class="logo" src="logo.png" alt="Logo ZDK" width="15%" height="15%">
			<div class="korisnicki_podatci">
					<!--<a href="Login.html">--> <form action="Odjava.php" method="post"> <input type="submit" value="Odjava"> </form> <!--</a>-->
			</div>
			</header>
<aside class="izbornik">
	<ul>
	<li> <a href="Naslovan.php"> Naslovna </a> </li>
	<li> <a href="Pacijenti.php"> Popis pacijenata </a> </li>
	<li> <a href="Novi_pacijent.html"> Novi pacijent </a> </li>
	<li> <a href="graf.php"> graf </a> </li>
	</ul>
</aside>
<div class="content">
			 <?php 
			  
			   $ime = strtoupper($_GET['firstname']);
			  $prezime=strtoupper($_GET['lastname']);
			  
			 $url = 'http://stajp.vtszg.hr/~spredanic/DWA2/lab5/podaci.php';
			 $filedata = file_get_contents($url);
			 $arrson = json_decode($filedata,true);
			 
			 
		
			
			for($i=0;$i<2348;$i++)
			{
			$array = $arrson[$i];
			$firstname = $array['ime'];
			$lastname = $array['prezime'];
			if($firstname == $ime || $lastname == $prezime){
			echo $firstname . ' ';
			echo $lastname . '<br/>';			
			}
			}
			
			
			?>
			</br>
			<li><a href="doktor.php">POVRATAK NA TRAŽENJE</a></li>
			</div>
		</div>
		<footer>
			<span class="footer_text">COPYRIGHT ZKD, 2014</span>
		</footer>
		</div>
	</body>
</html>