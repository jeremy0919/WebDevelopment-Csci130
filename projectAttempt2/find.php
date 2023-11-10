<?php

$db_server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "pokemon1";

$connection = new mysqli($db_server_name, $db_username, $db_password, $db_name);

        $stmt = $connection->prepare("SELECT * FROM pokemon WHERE name = ?");
        
        // Bind parameters
        $stmt->bind_param("s", $find);

        // Execute query
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();
      
        // Close statement
        $stmt->close();

        json_encode($result);

        $connection->close();
        header("Location: main.php"); 
?>