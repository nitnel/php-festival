<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create a group</title>
</head>
<body>
<?php 
    include("command.php/header.php");
    include("command.php/menu.php");
  ?>
</body>

<a href="create.php">Créer la fiche d'un groupe</a>

<?php
$hostname = 'localhost';
$dbname = 'Festival';
$dbuser = 'demo_user';
$dbpass = 'demo_user';
$dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser, $dbpass);
foreach($groupe as $groupe) {
  echo "<h1>", $groupe['nom'], "</h1>";
  echo "<p>",$groupe['description'], "</p>";
}
include "config.php";
$dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser, $dbpass);
$sth = $dbh->prepare("SELECT Soviet Suprem FROM Groupes;");
$sth = $dbh->prepare("SELECT Emilie Jolie FROM Groupes;");
$sth = $dbh->prepare("SELECT Rodrigo & Gabriela FROM Groupes;");
$sth->execute();
$groupes = $sth->fetchAll();
for($i=0; $i<count($groupes); $i++) {
  $groupe = $groupes[$i];
  ?>
  <h1> <?= $groupe['nom'] ?> </h1>
  <p> <?= $groupe['description'] ?></p>
  <a href='edit.php=<?=$groupe['id']?>'>
    <img src='<?=$groupe['photo']?>' />
  </a>
  <?php 
    include("command.php/footer.php");
  ?>
  </body>
</html>