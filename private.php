<?php
session_start();
if(!$_SESSION['logged_in'])
	header("Location: login.html");
?><!doctype html>
<html>
	<head>
		<meta name="content-type" content="text/html; charset=utf-8" />
		<title>Privater Bereich</title>
	</head>
	<body>
		<h1>Willkommen <?php echo $_SESSION['usr']; ?>!</h1>
		<h2>Du haben sich erfolgreich angemeldet.</h2>
			<a href="http://bit.ly/Foto-Pistor-Verwaltung">Zur Verwaltung-></a>
		<p><a href="logout.php">Hier kannst du dich abmelden.</a></p>
	</body>
</html>