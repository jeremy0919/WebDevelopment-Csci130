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

$sql = "SELECT * FROM Pokedex WHERE id = ?";
        // Bind parameters
        $find = 0;
        $stmt->bind_param("i", $find);

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
        json_encode($data);


$connection->close();
header("Location: main.php"); 
?>