<?php
$db_server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "pokemon1"; 

// Try to establish a connection
$connection = new mysqli($db_server_name, $db_username, $db_password, $db_name);


$sql = "CREATE TABLE Pokedex (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) NOT NULL,
    type VARCHAR(20) NOT NULL,
    ShinyColor VARCHAR(20) NOT NULL,
    stage INT NOT NULL,
    CanEvolve BIT NOT NULL,
    size VARCHAR(20) NOT NULL,
    weakTo VARCHAR(20) NOT NULL
)";

if ($connection->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $connection->error;
  }
  $connection->close();
?>