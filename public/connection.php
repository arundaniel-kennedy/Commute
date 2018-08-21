<head><body>
<?php
$user = 'root';
$password = 'root';
$db = 'Commute';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$per = mysqli_connect($host,$user,$password,$db,$port);

if (!$per) {
	die("Connection failed: " . mysqli_connect_error());
}

?>
</body></head>
