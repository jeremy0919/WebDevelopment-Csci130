<?php


$db_server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "pokemon1"; 

// Try to establish a connection
$connection = new mysqli($db_server_name, $db_username, $db_password);

// Check connection
if ($connection ->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>




