<?php

include("databaseT.php");
// dont need
// Get the value from the URL parameter
$find = urldecode($_GET['find']);

$stmt = $connection->prepare("SELECT * FROM Pokedex1 WHERE name = ?");

// Bind parameters
$stmt->bind_param("s", $find);

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
    }
}

echo json_encode($data);

$connection->close();
header("Location: main.php");

?>