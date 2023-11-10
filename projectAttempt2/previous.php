<?php
$db_server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "pokemon1";
session_start();
$x = $_SESSION['x'] ;
$x = $x-1;
$_SESSION['x'] = $x;
$connection = new mysqli($db_server_name, $db_username, $db_password, $db_name);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT * FROM Pokedex";
$result = $connection->query($sql);

$data = array();

if ($result->num_rows == $x) {// should work
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
json_encode($data);

$connection->close();
header("Location: main.php"); 
?>