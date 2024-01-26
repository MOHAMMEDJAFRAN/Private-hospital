<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "paradish";

// MySQL Connection
$connection = mysqli_connect($host,$dbusername,$dbpassword,$dbname);

// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

?>