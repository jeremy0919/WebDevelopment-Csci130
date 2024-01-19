<?php
   include("databaseT.php"); // makes table for the actresses

   $sql = "CREATE TABLE table1 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Index INT(20) NOT NULL,
    Year INT(20) NOT NULL,
    Age INT(20) NOT NULL,
    Name VARCHAR(20) NOT NULL,
    Movie VARCHAR(20) NOT NULL,
  
  )";
  if ($connection->query($sql) === TRUE) {
    echo "Table Pokedex1 created successfully";
  } else {
    echo "Error creating table: " . $connection->error;
  }

  $connection->close();
?>