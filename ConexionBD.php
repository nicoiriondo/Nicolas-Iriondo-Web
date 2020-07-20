<?php

// Create connection

$dbServerName = "www.db4free.net";
$dbUsername = "nicoiriondo@localhost";
$dbPassword = "alemania06";
$dbName = "dbnicoiriondoweb";

// create connection
$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";


?>
