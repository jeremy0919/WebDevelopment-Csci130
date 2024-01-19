<?php
include("databaseT.php"); // inserts json into database

// Step 2: Read the JSON file
$jsonFile = 'female_oscars-1.json';
$jsonData = file_get_contents($jsonFile);

// Check if file read was successful
if ($jsonData === false) {
    die('Error reading JSON file');
}

// Step 3: Parse the JSON data
$actress = json_decode($jsonData);

// Check if JSON decoding was successful
if ($actress === null) {
    die('Error decoding JSON data');
}

foreach ($actress as $person) {
  
    $index = $conn->real_escape_string($person->Index);
    $year = $conn->real_escape_string($person->Year);
    $age = $conn->real_escape_string($person->Age);
    $Name = $conn->real_escape_string($person->Name);
    $Movie = $conn->real_escape_string($person->Movie);
 
    $sql = "INSERT INTO table1 (Index, Year, Age, Name, Movie) VALUES ('$index', '$year', '$age', '$Name', '$Movie')";

    if ($connection->query($sql) === false) {
        echo 'Error inserting data: ' . $connection->error;
    }
}

// Close the database connection
$connection->close();


?>