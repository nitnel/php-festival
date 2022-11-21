<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
        <title>Creer un groupe</title>
		<?php
         include "config.php";
        ?>
	</head>
	<body>
        <h1>Carnet d'adresses</h1>
		<?php

		$mysqli = new mysqli("localhost", "demo_user", "", "demo_user");
		$mysqli->set_charset("utf8");
		$requete = "SELECT * FROM groupe";
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {
			echo $ligne['id'] . ' ' . $ligne['nom'] . ' ' . $ligne['description'] . ' ' . $ligne['cout'] . ' ' . $ligne['pays_origine'] .  ' ' . $ligne['musiciens'].  ' ' . $ligne['email'].  ' ' . $ligne['photo']'<br>';
		}
		$mysqli->close();
		?>
	</body> 
</html>
