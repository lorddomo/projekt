<?php
	session_start();
	
	if(isset($_POST['przystawka1_ilosc']))
	{
		
		$przystawka1_ilosc=$_POST['przystawka1_ilosc'];
		
		if(is_numeric($przystawka1_ilosc))
		{
			$wszystko_OK=true;
			$_SESSION['przystawka1']=$_POST['przystawka1'];
			$_SESSION['przystawka1_ilosc']=$_POST['przystawka1_ilosc'];
			$_SESSION['e_ilosc3']="Dodano do koszyka";
		}
		else
		{
			$wszystko_OK=false;
			$_SESSION['e_ilosc3']="Musisz zamówić co najmniej 1 porcję";
		}
	}
	
	if(isset($_POST['przystawka2_ilosc']))
	{
		
		$daneglowne2_ilosc=$_POST['przystawka2_ilosc'];
		
		if(is_numeric($daneglowne2_ilosc))
		{
			$wszystko_OK=true;
			$_SESSION['przystawka2']=$_POST['przystawka2'];
			$_SESSION['przystawka2_ilosc']=$_POST['przystawka2_ilosc'];
			$_SESSION['e_ilosc4']="Dodano do koszyka";
		}
		else
		{
			$wszystko_OK=false;
			$_SESSION['e_ilosc4']="Musisz zamówić co najmniej 1 porcję";
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
			<!-- Przystawki -->
			<div id="oferta">
			
				<div class="pozycja">
				
					<h3 class="headline"> Słuchawki</h3>
				
					 <img src="img/sluchawki1.jpg"/>
					 
					 <div class="opis-dania">
					 	
					Słuchawki nauszne JBL T560BT Czarny
					 
					  </br></br>
					 
					 Vestibulum ut mi ultrices, sagittis eros eget, vestibulum odio. Curabitur condimentum vehicula lorem in efficitur. Cras venenatis congue bibendum. Suspendisse ac malesuada ante. Integer gravida sit amet quam id semper. Praesent porta eleifend molestie. Aenean sit amet quam quis diam vestibulum mattis ut quis quam. Suspendisse potenti. Donec sit amet ligula lacinia, tincidunt diam vel, malesuada leo. In in lacus metus. Vivamus iaculis justo sed sapien fermentum laoreet. Mauris rutrum auctor blandit. Quisque sagittis laoreet quam a porta
					 
					 
					 </div>
					 
					  <div style="clear:both;"></div>
					
					  <form action="" method="post">
					 
						Ilość:<input type="text" name="przystawka1_ilosc"/>
					 
						<input type="hidden" name="przystawka1" value="Słuchawki nauszne JBL T560BT Czarny">

						<input type="submit" value="Zamawiam"/>
						
						<?php
					
						if(isset($_SESSION['e_ilosc3']))
						{
							echo '<div class="error">'.$_SESSION['e_ilosc3'].'</div>';
							unset ($_SESSION['e_ilosc3']);
						}
					
						?>
						
						
					</form>
				
				</div>
				
				<div class="pozycja">
				
					 <img src="img/sluchawki2.jpg"/>
					 
					 <h3 class="headline"> Słuchawki </h3>
					 
					  <div class="opis-dania">
					 
					  Słuchawki bezprzewodowe x-Five Wireless.
					  
					   </br></br>
					 
					 Vestibulum ut mi ultrices, sagittis eros eget, vestibulum odio. Curabitur condimentum vehicula lorem in efficitur. Cras venenatis congue bibendum. Suspendisse ac malesuada ante. Integer gravida sit amet quam id semper. Praesent porta eleifend molestie. Aenean sit amet quam quis diam vestibulum mattis ut quis quam. Suspendisse potenti. Donec sit amet ligula lacinia, tincidunt diam vel, malesuada leo. In in lacus metus. Vivamus iaculis justo sed sapien fermentum laoreet. Mauris rutrum auctor blandit. Quisque sagittis laoreet quam a porta
					 
					 
					  </div>
					 
					  <div style="clear:both;"></div>
					 
						 <form action="" method="post">
						 
							Ilość:<input type="text" name="przystawka2_ilosc"/>
						 
							<input type="hidden" name="przystawka2" value="Słuchawki bezprzewodowe x-Five Wireless.">

							<input type="submit" value="Zamawiam"/>
							
							<?php
						
							if(isset($_SESSION['e_ilosc4']))
							{
								echo '<div class="error">'.$_SESSION['e_ilosc4'].'</div>';
								unset ($_SESSION['e_ilosc4']);
							}
						
							?>
							
							
						</form>
					
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