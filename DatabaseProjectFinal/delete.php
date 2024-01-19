<?php


$numDelete = isset($_COOKIE['numDelete']) ? $_COOKIE['numDelete'] : 0;

// Increment the value of numDelete
$numDelete++;

// Set the updated value of numDelete in the cookie
setcookie('numDelete', $numDelete, time() + 36000); // Expiring in 10 hours


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