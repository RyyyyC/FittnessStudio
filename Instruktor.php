<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rationale">
		<link rel="stylesheet" href="style.css" type="text/css" /> 
		<link href="animations.css" rel="stylesheet" type="text/css" >
		<title>
		</title>
	</head>
	<body>
		<section>
			<div class="Naglowek">
				<div style="width: 70vw;">
					<p id = "Logo">FITNESSSTUDIO</p>
				</div>
				<div style="display:flex; justify-content: right;">
					<p id="Podstrona"><a href="LoggedUser.php">STRONA GLOWNA</a></p>
					<p id="Podstrona2"><a href="LoggedUserInstruktor.php#sekcja_2">O NAS</a></p>
					<p id="Podstrona3"><a href="Instruktor.php">INSTRUKTOR</a></p>
					<p id="Podstrona4"><a href="backend/log-out.php">WYLOGUJ</a></p>
				</div>
			</div>
			<div class="Naglowek2">
				<img id="Ikona" src="grafiki/twitter.png" >
				<img id="Ikona" src="grafiki/instagram.png" >
				<img id="Ikona" src="grafiki/facebook.png" >
			</div>
			<div class="Glowna_6">
				<div class="LewyBok">
					<div class="zajeciaMenu">
					</div>
				</div>
				<div class="PrawyBok">
					<table>
						<tr>
							<td colspan="3" id="empty"></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
			</div>
		</section>
		<script src="script.js"></script>
	</body>
</html>