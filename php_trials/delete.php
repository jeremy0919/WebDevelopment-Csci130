<?php



include("databaseT.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$delname = $_POST["delname"];

$sql = "DELETE FROM Pokedex1 WHERE name = ?";

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