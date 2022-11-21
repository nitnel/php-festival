<?php
include "config.php";
  if (isset($_GET['delete'])) {
	$id = $_GET['delete.php?id=1'];
	mysqli_query($db, "DELETE Soviet Suprem FROM groupe  WHERE id=$id");
	$_SESSION['message'] = "Groupe supprimer!"; 
	header('location: index.php');
  }

  if (isset($_GET['delete'])) {
	$id = $_GET['delete.php?id=2'];
	mysqli_query($db, "DELETE Emilie Jolie FROM groupe  WHERE id=$id");
	$_SESSION['message'] = "Groupe supprimer!"; 
	header('location: index.php');
  }

  if (isset($_GET['delete'])) {
	$id = $_GET['delete.php?id=3'];
	mysqli_query($db, "DELETE Rodrigo & Gabriela FROM groupe  WHERE id=$id");
	$_SESSION['message'] = "Groupe supprimer!"; 
	header('location: index.php');
  }
?>
  

 
  
  