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
				<div class="Logowanie">
					<img id="Logow" src="../grafiki/Login.png">
					<img id="Komputer" src="../grafiki/komputer.png" width="800px">
					<form method="POST" action="accont.php">
						<input type="checkbox" id="" name="" value=""> ZAPAMIETAJ MNIE<br /><br />
						<input name="login" style="background: none; border:none;"placeholder="Login" style="margin-bottom: 1vh; border: 2px solid black; border-radius: 2px;height:2.5vh;"><br />
						<input name="password" style="background: none; border:none;"type="password" placeholder="********" style=" border: 2px solid black; border-radius: 2px;height:3vh;"><br /><br /><br /><br />
						<input type="submit" value="ZALOGUJ" style="text-decoration:none; border: solid 1px black; background-color: lightgray; padding: 5px;font-family: Rationale; color: white;">
						<a id="Rejestruj" href="registerForm.php" style="text-decoration:none; border: solid 1px black; background-color: lightgray; padding: 5px;font-family: Rationale;" value="">ZAREJESTRUJ</a>
						<a id="" href="registerForm.php" style="text-decoration:none; border: solid 1px black; background-color: lightgray; padding: 5px;font-family: Rationale;" value="">ODZYSKAJ HASLO</a>
					</form>
				</div>
				<img id="Kwiatek" src="../grafiki/kwiat.png">
				<p id="Zaloguj"> ZALOGUJ SIE </p>
				
			</div>
	</body>
</html>