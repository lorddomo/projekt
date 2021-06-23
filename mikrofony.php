<?php
	session_start();
	
	if(isset($_POST['napoj1_ilosc']))
	{
		
		$napoj1_ilosc=$_POST['napoj1_ilosc'];
		
		if(is_numeric($napoj1_ilosc))
		{
			$wszystko_OK=true;
			$_SESSION['napoj1']=$_POST['napoj1'];
			$_SESSION['napoj1_ilosc']=$_POST['napoj1_ilosc'];
			$_SESSION['e_ilosc5']="Dodano do koszyka";
		}
		else
		{
			$wszystko_OK=false;
			$_SESSION['e_ilosc5']="Musisz zamówić co najmniej 1 porcję";
		}
	}
	
	if(isset($_POST['napoj2_ilosc']))
	{
		
		$daneglowne2_ilosc=$_POST['napoj2_ilosc'];
		
		if(is_numeric($daneglowne2_ilosc))
		{
			$wszystko_OK=true;
			$_SESSION['napoj2']=$_POST['napoj2'];
			$_SESSION['napoj2_ilosc']=$_POST['napoj2_ilosc'];
			$_SESSION['e_ilosc6']="Dodano do koszyka";
		}
		else
		{
			$wszystko_OK=false;
			$_SESSION['e_ilosc6']="Musisz zamówić co najmniej 1 porcję";
		}
	}
?>
<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<title>Wypożyczalnia sprzętu audio</title>
	<meta name="description" content="catering">
	<meta name="keywords" content="catering, jedzenie, picie, na wynos, imprezy">
	<meta name="author" content="Z510 Dominik Choroś">
	
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
	
	<link rel="stylesheet" href="style.css">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	
	
</head>

<body>

	<header>
		<!-- Logo -->
		<h1 class="logo">Wypożyczalnia sprzętu audio</h1>
		
		<nav id="topnav">
			<!-- Nawigacja -->
			<div id="topmenu">
				<div class="option"><a href="index.php">Strona główna</a></div>
				<div class="option"><a href="sluchawki.php">Słuchawki</a></div>
				<div class="option"><a href="kolumny.php">Kolumny</a></div>
				<div class="option"><a href="mikrofony.php">Mikrofony</a></div>
				<div class="option"><a href="kontakt.php">Kontakt</a></div>
				<div class="option"><a href="koszyk.php">Koszyk</a></div>
				<div style="clear:both;"></div>
			</div>
			
		</nav>
	
	</header>

	<main>
	
		<section>
			<!-- Napoje -->
			<div id="oferta">
			
				<div class="pozycja">
				
					<h3 class="headline">Mikrofon</h3></br>
				
					 <img src="img/mikrofon1.jpg"/>
					 
					  <div class="opis-dania">
					 	
					 Mikrofon bezprzewodowy 1 kanał Shudder 1x ręka</br>
					 
					 </div>
					 
					 <div style="clear:both;"></div>
					 
					 <form action="" method="post">
					 
						Ilość :<input type="text" name="napoj1_ilosc"/>
					 
						<input type="hidden" name="napoj1" value="Mikrofon bezprzewodowy 1 kanał Shudder 1x ręka">

						<input type="submit" value="Zamawiam"/>
						
						<?php
					
						if(isset($_SESSION['e_ilosc5']))
						{
							echo '<div class="error">'.$_SESSION['e_ilosc5'].'</div>';
							unset ($_SESSION['e_ilosc5']);
						}
					
						?>
						
						
					</form>
				
				</div>
				
				<div class="pozycja">
				
					<h3 class="headline">Mikrofon</h3></br>
				
					 <img src="img/mikrofon2.jpg"/>
					 
					  <div class="opis-dania">
					 
					 Mikrofon pojemnościowy Rode NT1 + AI-1</br>
					 
					 </div>
					 
					 <div style="clear:both;"></div>
					 
					 <div style="clear:both;"></div>
					 
					 <form action="" method="post">
					 
						Ilość:<input type="text" name="napoj2_ilosc"/>
					 
						<input type="hidden" name="napoj2" value="Kompot z świeżych owoców">

						<input type="submit" value="Zamawiam"/>
						
						<?php
					
						if(isset($_SESSION['e_ilosc6']))
						{
							echo '<div class="error">'.$_SESSION['e_ilosc6'].'</div>';
							unset ($_SESSION['e_ilosc6']);
						}
					
						?>
						
						
					</form>
				
				</div>
				
			</div>
			
			
			</div>
			
		
		</section>
		
	</main>
	
	<footer>
		
		<div id="info"></br>
			Wszelkie prawa zastrzeżone &copy; 
		<div>
	</footer>
	

</body>
</html>