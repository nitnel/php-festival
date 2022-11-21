
<?php
$hostname = 'localhost';
$dbname = 'Festival';
$dbuser = 'demo_user';
$dbpass = 'demo_user';
$dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser, $dbpass);

$mysqli = new mysqli('127.0.0.1', 'root', 'password', 'database_name');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo '<p>Connection OK '. $mysqli->host_info.'</p>';
echo '<p>Server '.$mysqli->server_info.'</p>';
$mysqli->close();
?>

