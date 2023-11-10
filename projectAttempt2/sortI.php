<?php


$db_server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "pokemon1";

// Try to establish a connection
$connection = new mysqli($db_server_name, $db_username, $db_password, $db_name);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT * FROM pokedex ORDER BY id"; 
$result = $connection->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
echo json_encode($data);

$connection->close();
?>