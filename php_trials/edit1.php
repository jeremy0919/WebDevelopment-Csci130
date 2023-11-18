<?php
   include("databaseT.php");
session_start();
if (!isset($_SESSION['x'])) {
    $_SESSION['x'] = 1; // Initial value
}


$find = $_SESSION['x']; // gonna want to use id in case things are removed and added

// Try to establish a connection

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT * FROM Pokedex1 WHERE id = ?";
$stmt = $connection->prepare($sql);

if ($stmt === false) {
    die("Error in preparing statement: " . $connection->error);
}

     
        $stmt->bind_param("s", $find);

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