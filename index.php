
<?php
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "user_kngkay";

$connection = new MySQLi($dbHost, $dbUsername, $dbPassword, $dbName);

if ($connection->connect_error) {
	var_dump($connection->connect_error);
	exit();
}

$retval = $connection->query('SELECT * FROM users LIMIT 1');
$row = $retval->fetch_row();
	
?>

<p>username: <?php echo $row[1]; ?></p>
<p>email: <?php echo $row[3]; ?></p>
<p>password: <?php echo $row[2]; ?></p>
