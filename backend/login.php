<!DOCTYPE html>
<html lang="pl">
	<head>
        <script src="script.js"></script>
        <meta charset="UTF-8">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rationale">
		<link rel="stylesheet" href="../style.css" type="text/css" /> 
	</head>
	<body>
		<section  id="sekcja_1">
			<div class="Naglowek">
				<div style="width: 70vw;">
					<p id = "Logo">FITNESSSTUDIO</p>
				</div>
				<div style="display:flex; justify-content: right;">
					<p id="Podstrona"><a href="../notLogged.php">STRONA GLOWNA</a></p>
					<p id="Podstrona2">O NAS</p>
				</div>
			</div>
			<div class="Naglowek2">
				<img id="Ikona" src="../grafiki/twitter.png" >
				<img id="Ikona" src="../grafiki/instagram.png" >
				<img id="Ikona" src="../grafiki/facebook.png" >
			</div>
			<div class="Tlo">
			<p id="Zaloguj"> ZALOGUJ SIE </p>
				<div class="Logowanie">
					<img id="Logow"  style="z-index: -1;"  src="../grafiki/Login.png">
					
					<form method="POST" action="accont.php" class="loginForm">
						<div class="tlo-logowanie">
							<div class="tlo-logowanie-text">
								<input type="checkbox" id="" name="" value=""> ZAPAMIETAJ MNIE<br /><br />
								<input name="login" style="background: none; border:none; margin: 10px 0;padding-left:35px;"placeholder="Login" ><br />
								<input name="password" style="background: none; border:none; margin: 10px 0;padding-left:35px;"type="password" placeholder="********" ><br /><br /><br /><br />
								<input type="submit" value="ZALOGUJ" style="text-decoration:none; border: none; background: none; font-family: Rationale; font-size:2vh; color: white;">
								<a id="Rejestruj" href="registerForm.php"style="padding: 0 15px;" value="">ZAREJESTRUJ</a>
								<a id="" href="registerForm.php" value="">ODZYSKAJ HASLO</a>
							</div>
						</div>
					</form>
				</div>
				<img id="Kwiatek" src="../grafiki/kwiat.png">
				
				
			</div>
	</body>
</html>