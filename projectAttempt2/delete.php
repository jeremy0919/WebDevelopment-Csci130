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
$delname = $_POST["delname"];

$sql = "DELETE FROM pokedex WHERE name = ?";

$stmt = $connection->prepare($sql);

// Bind parameters
$stmt->bind_param("s", $delname);

// Execute the DELETE query
if ($stmt->execute()) {
    echo "The pokemon $delname has been deleted.";
} else {
    echo "Error: " . $stmt->error;
}
header("Location: main.php"); 
?>