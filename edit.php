<?php 
include "config.php";

	if (isset($_GET['edit'])) {
		$id = $_GET['edit?id=1'];
		$update = true;
		$record = mysqli_query($db, "SELECT Soviet Suprem FROM groupe WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['Soviet Suprem'];
			$pays_origine = $n['France'];
		}
    } 
?>
<input type="hidden" name="1" value="<?php echo $id; ?>">
<input type="text" name="Soviet Suprem" value="<?php echo $name; ?>">
<input type="text" name="France" value="<?php echo $pays_origine; ?>">

<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
<?php
 if (isset($_POST['update'])) {
	$id = $_POST['1'];
	$name = $_POST['Soviet Suprem'];
	$pays_origine = $_POST['France'];

	mysqli_query($db, "UPDATE info SET name='$name', address='$pays_origine' WHERE id=$id");
	$_SESSION['message'] = "mise à jour validé!"; 
	header('location: index.php');
 }
?>

<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit?id=2'];
		$update = true;
		$record = mysqli_query($db, "SELECT Emilie Jolie FROM groupe WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['Emilie Jolie'];
			$pays_origine = $n['France'];
		}
    } 
?>
 <input type="hidden" name="2" value="<?php echo $id; ?>">
<input type="text" name="Emilie Jolie" value="<?php echo $name; ?>">
<input type="text" name="France" value="<?php echo $pays_origine; ?>">

<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
<?php
 if (isset($_POST['update'])) {
	$id = $_POST['2'];
	$name = $_POST['Emilie Jolie'];
	$pays_origine = $_POST['France'];

	mysqli_query($db, "UPDATE info SET name='$name', address='$pays_origine' WHERE id=$id");
	$_SESSION['message'] = "Mise a jour validé!"; 
	header('location: index.php');
 }
?>

<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit?id=3'];
		$update = true;
		$record = mysqli_query($db, "SELECT Rodrigo & Gabrila FROM groupe WHERE id=$1");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['Rodrigo & Gabriela'];
			$pays_origine = $n['Colombie'];
		}
    } 
?>
 <input type="hidden" name="3" value="<?php echo $id; ?>">
<input type="text" name="Rodrigo & Gabriela" value="<?php echo $name; ?>">
<input type="text" name="Colombie" value="<?php echo $pays_origine; ?>">

<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
<?php
 if (isset($_POST['update'])) {
	$id = $_POST['3'];
	$name = $_POST['Rodrigo & Gabriela'];
	$pays_origine = $_POST['Colombie'];

	mysqli_query($db, "UPDATE info SET name='$name', address='$pays_origine' WHERE id=$id");
	$_SESSION['message'] = "mise à jour validé!"; 
	header('location: index.php');
 }
?>