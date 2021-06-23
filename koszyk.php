<?php
	session_start();
	
	//error_reporting(E_ALL ^ E_WARNING);
	
	if(isset($_POST['imie']))
	{
		$wszystko_OK = true;
		
		$imie= $_POST['imie'];
		
		if((strlen($imie)<3) || (strlen($imie)>20))
		{
			$wszystko_OK = false;
			$_SESSION['e_imie']="Za krótka wartość. Podaj co najmniej 3 znaki.";
		}
		
		$nazwisko= $_POST['nazwisko'];
		
		if((strlen($nazwisko)<3) || (strlen($nazwisko)>20))
		{
			$wszystko_OK = false;
			$_SESSION['e_nazwisko']="Za krótka wartość. Podaj co najmniej 3 znaki.";
		}
		
		$adres= $_POST['adres'];
		
		if((strlen($adres)<5) || (strlen($adres)>30))
		{
			$wszystko_OK = false;
			$_SESSION['e_adres']="Za krótka wartość. Podaj ulicę i numer budynku";
		}
		
		$miasto= $_POST['miasto'];
		
		if((strlen($miasto)<4) || (strlen($miasto)>30))
		{
			$wszystko_OK = false;
			$_SESSION['e_miasto']="Za krótka wartość.";
		}
		
		
		$telefon=$_POST['telefon'];
		
		if (is_numeric($telefon) || (strlen($adres)==9))
		{
			//Dane poprawne
		}
		else
		{
			$wszystko_OK = false;
			$_SESSION['e_telefon']="Podano złą wartość. Telefon powienien zawierać 9 cyfr.";
		}
		
		$datarealizacji= $_POST['datarealizacji'];
		
		if((strlen($datarealizacji)<4))
		{
			$wszystko_OK = false;
			$_SESSION['e_datarealizacji']="Nie wybrano daty realiazacji.";
			
		}
		
		if(($_SESSION['przystawka1_ilosc']) || ($_SESSION['przystawka2_ilosc']) || ($_SESSION['danieglowne1_ilosc']) || ($_SESSION['przystawka2_ilosc']) ||($_SESSION['napoj1_ilosc']) || ($_SESSION['napoj2_ilosc']))
		{
			//Dane poprawne
		}
		else
		{
			//$wszystko_OK = false;
			$_SESSION['e_dania']="Nie wybrano żadnego dania.";
		}
		
		
		if(($wszystko_OK==true))
		{
			
			require_once "polaczeniesql.php";
	
			$polaczenie= @new mysqli($host, $db_user,$db_password, $db_name);
			
			if($polaczenie->connect_errno!=0)
			{
				echo "Error: ".$polaczenie->connect_errno;
			}
			else
			{
				
				$datazamowienia=date('Y-m-d');
				
				$sql = "INSERT INTO klient (imie, nazwisko, adres, miasto, telefon)
				VALUES ('$imie','$nazwisko','$adres','$miasto','$telefon')";
				
				$sql = "INSERT INTO zamowienie (data_zamowienia, data_realizacji, id_klient)
				VALUES ('$datazamowienia','$datarealizacji','5')";
				
				
				if(mysqli_query($polaczenie, $sql))
				{
					echo "Zamówienie zostało złożone.";
				} 
				else
				{
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($polaczenie);
				}
				
				
				
				
				$polaczenie->close();
			}
			
			
			
			
			

		}
		
	}
	
	

	
	
	require_once "polaczeniesql.php";
	
	$polaczenie= @new mysqli($host, $db_user,$db_password, $db_name);
	
	if($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$polaczenie->close();
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
	
			<div id="koszyk">
		
				<h1>Koszyk</h1></br>
				
				<p>Dane Klienta:</p></br></br>
	
				<form action="" method="post">
				
					Imie:</br><input type="text" name="imie"/></br>
					
					<?php
					
						if(isset($_SESSION['e_imie']))
						{
							echo '<div class="error">'.$_SESSION['e_imie'].'</div>';
							unset ($_SESSION['e_imie']);
						}
					
					?>
					
					Nazwisko:</br><input type="text" name="nazwisko"/></br>
					
					<?php
					
						if(isset($_SESSION['e_nazwisko']))
						{
							echo '<div class="error">'.$_SESSION['e_nazwisko'].'</div>';
							unset ($_SESSION['e_nazwisko']);
						}
					
					?>
					Adres:</br><input type="text" name="adres"/></br>
					
					<?php
					
						if(isset($_SESSION['e_adres']))
						{
							echo '<div class="error">'.$_SESSION['e_adres'].'</div>';
							unset ($_SESSION['e_adres']);
						}
					
					?>
					
					Miasto:</br><input type="text" name="miasto"/></br>
					
					<?php
					
						if(isset($_SESSION['e_miasto']))
						{
							echo '<div class="error">'.$_SESSION['e_miasto'].'</div>';
							unset ($_SESSION['e_miasto']);
						}
					
					?>
					
					Telefon:</br><input type="text" name="telefon"/></br>
					
					<?php
					
						if(isset($_SESSION['e_telefon']))
						{
							echo '<div class="error">'.$_SESSION['e_telefon'].'</div>';
							unset ($_SESSION['e_telefon']);
						}
					
					?>
					
					Data realizacji:</br><input type="date" name="datarealizacji"/></br>
					
					<?php
					
						if(isset($_SESSION['e_datarealizacji']))
						{
							echo '<div class="error">'.$_SESSION['e_datarealizacji'].'</div>';
							unset ($_SESSION['e_datarealizacji']);
						}
					
					?>
					
					
					<p>Zamówienie:</p></br>
					
					<?php
					
						if(isset($_SESSION['przystawka1_ilosc']))
						{
							echo '<div class="zamowienie"><b>'.$_SESSION['przystawka1'].', ilość: ' .$_SESSION['przystawka1_ilosc'].'</b></br></br></div>';
						
						}
						
						if(isset($_SESSION['przystawka2_ilosc']))
						{
							echo '<div class="zamowienie"><b>'.$_SESSION['przystawka2'].', ilość: ' .$_SESSION['przystawka2_ilosc'].'</b></br></br></div>';
						
						}
						
						if(isset($_SESSION['danieglowne1_ilosc']))
						{
							echo '<div class="zamowienie"><b>'.$_SESSION['danieglowne1'].', ilość: ' .$_SESSION['danieglowne1_ilosc'].'</b></br></br></div>';
						
						}
						
						if(isset($_SESSION['danieglowne2_ilosc']))
						{
							echo '<div class="zamowienie"><b>'.$_SESSION['danieglowne2'].', ilość: ' .$_SESSION['danieglowne2_ilosc'].'</b></br></br></div>';
						
						}
						
						if(isset($_SESSION['napoj1_ilosc']))
						{
							echo '<div class="zamowienie"><b>'.$_SESSION['napoj1'].', ilość: ' .$_SESSION['napoj1_ilosc'].'</b></br></br></div>';
						
						}
						
						if(isset($_SESSION['napoj2_ilosc']))
						{
							echo '<div class="zamowienie"><b>'.$_SESSION['napoj2'].', ilość: ' .$_SESSION['napoj2_ilosc'].'</b></br></br></div>';
						
						}
						
						if(isset($_SESSION['e_dania']))
						{
							echo '<div class="error">'.$_SESSION['e_dania'].'</div>';
							unset ($_SESSION['e_dania']);
						}
						
					
					?>
					
					
					
					
					
					
					</br>
					<input type="submit" value="Złóż zamówienie"/>
				
				</form>
		
			</div>
		
		</section>	
	
	</main>
	
	

	<footer>
		<!-- Slogan -->
		<div id="motto">
			Listen to music!
			</br></br>
		</div>
	
		<div id="info"></br>
			FAST Sp. z o.o. Wszelkie prawa zastrzeżone &copy; 
		<div>
	</footer>
	

</body>
</html>