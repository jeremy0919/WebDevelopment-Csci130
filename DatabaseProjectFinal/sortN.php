<?php

session_start();
if (!isset($_SESSION['x'])) {
    $_SESSION['x'] = 1; // Initial value
}
if (!isset($_SESSION['y'])) {
    $_SESSION['y'] = 1; // Initial value
}
if (!isset($_SESSION['z'])) {
    $_SESSION['z'] = 1; // Initial value
}
$_SESSION['z'] = 1; 
$_SESSION['y'] = 2;

include("databaseT.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$data =0;

echo json_encode($data);

$connection->close();

?>