<?php
$db_server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "pokemon"; // Use the actual database name you created

// Try to establish a connection
$connection = mysqli_connect($db_server_name, $db_username, $db_password, $db_name);
/*
$sql = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) NOT NULL,
    type VARCHAR(20) NOT NULL,
    ShinyColor VARCHAR(20) NOT NULL,
    stage INT NOT NULL,
    CanEvolve INT NOT NULL,
    size VARCHAR(20) NOT NULL,
    weakTo VARCHAR(20) NOT NULL
)";
*/
// Initialize or retrieve $x from the session

// Check if the connection was successful
if ($connection) {
    echo "You are connected";
} else {
    echo "You cannot connect";
}
?>




