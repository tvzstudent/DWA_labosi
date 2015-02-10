<!DOCTYPE html>
<?php
	session_start();
	if(!isset($_SESSION['prijavljen']))
	{
		header("Location:Prijava.html");
	}
?>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Turistički vodič i lokator</title>

  <!-- Učitavanje stilskih datoteka -->
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="stil.css" />

</head>
<body>
  <header class="row">
    <div class="site-header column column-12">
	<h1>Turistički vodič i lokator</h1>
	<img src="slike/logo.jpeg" alt="" width="110" height="110">
    </div>
	<div class="column column-12 odjavi">
		<form action="Odjava.php" method="post">
			<input type="submit" value="Odjavi" name="odjava"/>
		</form>
		<a href="Admin.php"> Admin stranica </a> <br />
		<a href="Promjena_lozinke.php"> Promijenite lozinku </a>
	</div>
  </header>

  <div class="wrapper row">
    <article class="column column-11">
    

		<!---
	<div>
		<a href="Promjena_lozinke.php"> Promjenite lozinku </a>
	</div> -->
	 
<p>U kojem se gradu nalazite:
	 <select>
  <option value="zadar">Zadar</option>
  <option value="saab">Odabrani grad</option>
  <option value="opel">Odabrani grad</option>
  <option value="audi">Odabrani grad</option>
</select>
</p>  
     <a href="#"><p><strong>Gdje se trenutno nalazim ?</strong></a>(ovdje korisnik moze saznati u kojem gradu se nalazi ukoliko ne zna)</p>
	 <br></br>
	
	 <p>Što želim posjetiti:     
	 <select>
  <option value="volvo">Odabrana lokacija</option>
  <option value="saab">Odabrana lokacija</option>
  <option value="opel">Odabrana lokacija</option>
  <option value="audi">Odabrana lokacija</option>
</select> </p>
      <br></br>   
    </article>
	
	 <article class="column column-11">
		<h1>Lista sadržaja:</h1>
		 <ul>
			<li><a href="#">Morske orgulje</a></li>
			<li><a href="#">Crkva Sv. Donata</a></li>
			<li><a href="#">NP Kornati</a></li>
			<li><a href="#">Katedrala Sv. Stošije</a></li>
			<li><a href="#">...</a></li>
		  </ul>
    </article>
	
  </div>
  

  <br></br> 
  <br></br> 
  
  <section class="blog row">
    <article class="column column-3">
     <ul>
        <li><a href="#">Razni linkovi za turizam</a></li>
        <li><a href="#">Razni linkovi za turizam</a></li>
        <li><a href="#">Razni linkovi za turizam</a></li>
      </ul>
    </article>

    <article class="column column-3">
      <ul>
        <li><a href="#">Razni linkovi za turizam</a></li>
        <li><a href="#">Razni linkovi za turizam</a></li>
        <li><a href="#">Razni linkovi za turizam</a></li>
      </ul>
    </article>
	
	 <article class="column column-3">
      <ul>
        <li><a href="#">Razni linkovi za turizam</a></li>
        <li><a href="#">Razni linkovi za turizam</a></li>
        <li><a href="#">Razni linkovi za turizam</a></li>
      </ul>
    </article>
	<article class="column column-3">
      <ul>
        <li><a href="#">Razni linkovi za turizam</a></li>
        <li><a href="#">Razni linkovi za turizam</a></li>
        <li><a href="#">Razni linkovi za turizam</a></li>
      </ul>
    </article>
  </section>

  <footer class="site-footer">
    <p>Copyright &copy; Domagoj Šoštarić, David Vojnović</p>
  </footer>
</body>
</html>