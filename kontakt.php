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
		<!-- Nawigacja -->
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
			<!-- Dane kontaktowe -->
			<h2 class="headline">Skontaktuj się z nami!</h2>
			
			<div id="contact">
				
				Wypożyczalnia FAST Sp. z o.o.</br>
				NIP 548 178 11 75</br>
				Tel. 578 547 218</br>
				Mail biuro@fast.pl</br></br>
				
				ul. Marszałkowska 5</br>
				00-015 Warszawa</br>
				
				</br></br>
				
			</div>
			<!-- Fromularz kontaktowy -->
			<div id="formularz">
			
				<form method="send-mail" action="contact-form.php" id="contact-form">
					 <div>
						<label for="name">Imię i nazwisko</label>
					 </div>
					 <div>
						<input type="text" name="name" id="name" class="contact-form"/>
					 </div>
					 
					 <div>
						<label for="email">Adres email</label></div>
					 <div>
						<input type="text" name="email" id="email" class="contact-form"/>
					 </div>
					 
					 <div>
						<label for="message">Treść wiadomości</label>
					 </div>
					 <div>
						<textarea name="message" id="message" class="contact-form"></textarea>
					 </div>
					 
					 <div>
						<button id="send-button">Wyślij</button>
					 </div>
				</form>
			
			</div>
		
		</section>
		
	</main>
	
	<footer>
		<!-- Slogan -->
		<div id="motto"></br>
			Listen to music!
			</br></br>
		</div>
	
		<div id="info"></br>
			Wszelkie prawa zastrzeżone &copy; 
		<div>
	</footer>
	

</body>
</html>