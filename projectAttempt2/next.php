<?php

session_start();
if (!isset($_SESSION['x'])) {
    $_SESSION['x'] = 1; // Initial value
}

$x = $_SESSION['x'];
$x = $x + 1;
$_SESSION['x'] = $x;
include("databaseT.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT * FROM Pokedex1 WHERE id = ?";
$stmt = $connection->prepare($sql);
        // Bind parameters
       
        $stmt->bind_param("s", $x);

        // Execute query
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();
        $data = array();

        // Close statement
        $stmt->close();
        if ($result->num_rows > 0) {// should work
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        echo json_encode($data);

$connection->close();

?>