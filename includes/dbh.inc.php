<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "webcop";

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'webcop');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if(!$conn){
  die("data connection failed" . mysqli_connect_error());
}



 ?>
