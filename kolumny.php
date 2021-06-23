<?php
	session_start();
	
	//error_reporting(E_ALL ^ E_WARNING);
	
	
	if(isset($_POST['daneglowne1_ilosc']))
	{
		
		$daneglowne1_ilosc=$_POST['daneglowne1_ilosc'];
		
		if(is_numeric($daneglowne1_ilosc))
		//if(strlen($daneglowne1_ilosc)>1)
		{
			$wszystko_OK=true;
			$_SESSION['danieglowne1']=$_POST['daneglowne1'];
			$_SESSION['danieglowne1_ilosc']=$_POST['daneglowne1_ilosc'];
			$_SESSION['e_ilosc1']="Dodano do koszyka";
		}
		else
		{
			$wszystko_OK=false;
			$_SESSION['e_ilosc1']="Musisz zamówić co najmniej 1 porcję";
		}
	}
	
	if(isset($_POST['daneglowne2_ilosc']))
	{
		
		$daneglowne2_ilosc=$_POST['daneglowne2_ilosc'];
		
		if(is_numeric($daneglowne2_ilosc))
		{
			$wszystko_OK=true;
			$_SESSION['danieglowne2']=$_POST['daneglowne2'];
			$_SESSION['danieglowne2_ilosc']=$_POST['daneglowne2_ilosc'];
			$_SESSION['e_ilosc2']="Dodano do koszyka";
		}
		else
		{
			$wszystko_OK=false;
			$_SESSION['e_ilosc2']="Musisz zamówić co najmniej 1 porcję";
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
			<!-- Dania główne -->
			<div id="oferta">
			
				<div class="pozycja">
									 
					 <h3 class="headline">Kolumna głośnikowa</h3>
					 <h5 class="headline">KLIPSCH R-620F Czarny</h5>
					 
					 <img src="img/kolumna1.jpg"/>
					 	
					 <div class="opis-dania">
					 
					 Charakterystyka
					 
					 </br></br>
					 
					
						Moc maksymalna [W]	400
						Moc znamionowa RMS (tryb dookólny) [W]	100

						Fizyczne
						Głębokość [cm]	38.6
						Szerokość [cm]	24
						Waga [kg]	18.6
						Wysokość [cm]	101.7

						Parametry
						Wyposażenie	Brak
						Załączona dokumentacja	Instrukcja obsługi w języku polskim, Karta gwarancyjna
						Gwarancja	24 miesiące

						Techniczne
						Impedancja [Ohm]	8
						Kolor	Czarny
						Liczba kolumn w zestawie	1
						Pasmo przenoszenia [Hz]	38 - 21000
						Skuteczność [dB]	96
					 
					 </div>
					 
					 <div style="clear:both;"></div>
					 
					 <form action="" method="post">
					 
						Ilość sztuk:<input type="text" name="daneglowne1_ilosc"/>
					 
						<input type="hidden" name="daneglowne1" value="KLIPSCH R-620F Czarny">

						<input type="submit" value="Zamawiam"/>
						
						<?php
					
						if(isset($_SESSION['e_ilosc1']))
						{
							echo '<div class="error">'.$_SESSION['e_ilosc1'].'</div>';
							unset ($_SESSION['e_ilosc1']);
						}
					
						?>
						
						
					</form>
				
				</div>
				
				<div class="pozycja">
					 
					 <h3 class="headline">Kolumna głośnikowa</h3>
					 
					 <img src="img/kolumna2.jpg"/>
					 
					 <div class="opis-dania">
					 
					 QUADRAL Argentum 550 Czarny
					 
					 </br></br>
					 
					 		Moc maksymalna [W]	400
						Moc znamionowa RMS (tryb dookólny) [W]	100

						Fizyczne
						Głębokość [cm]	38.6
						Szerokość [cm]	24
						Waga [kg]	18.6
						Wysokość [cm]	101.7

						Parametry
						Wyposażenie	Brak
						Załączona dokumentacja	Instrukcja obsługi w języku polskim, Karta gwarancyjna
						Gwarancja	24 miesiące

						Techniczne
						Impedancja [Ohm]	8
						Kolor	Czarny
						Liczba kolumn w zestawie	1
						Pasmo przenoszenia [Hz]	38 - 21000
						Skuteczność [dB]	96
					 
					 </div>
					 
					 <div style="clear:both;"></div>
					 
					 <form action="" method="post">
					 
						Ilość :<input type="text" name="daneglowne2_ilosc"/>
					 
						<input type="hidden" name="daneglowne2" value="QUADRAL Argentum 550 Czarny">

						<input type="submit" value="Zamawiam"/>
						
						<?php
					
						if(isset($_SESSION['e_ilosc2']))
						{
							echo '<div class="error">'.$_SESSION['e_ilosc2'].'</div>';
							unset ($_SESSION['e_ilosc2']);
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