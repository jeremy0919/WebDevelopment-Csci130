<?php

session_start();
if (!isset($_SESSION['x'])) {
    $_SESSION['x'] = 1; // Initial value
} // need to update session to last

include("databaseT.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Query to get the last row
$sql = "SELECT * FROM Pokedex1 ORDER BY id DESC LIMIT 1";

$stmt = $connection->prepare($sql);

if ($stmt === false) {
    die("Error in preparing statement: " . $connection->error);
}

// Execute query
$stmt->execute();

// Get the result
$result = $stmt->get_result();
$data = array();

// Close statement
$stmt->close();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        $_SESSION['x'] = $row['id'];
    }
}

echo json_encode($data);

$connection->close();
?>
