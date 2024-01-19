<?php
//Create a PHP script that will read the JSON file and insert all the Car objects into the table Car
// Step 1: Connect to the database
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Read the JSON file
$jsonFile = 'path/to/your/file.json';
$jsonData = file_get_contents($jsonFile);

// Check if file read was successful
if ($jsonData === false) {
    die('Error reading JSON file');
}

// Step 3: Parse the JSON data
$cars = json_decode($jsonData);

// Check if JSON decoding was successful
if ($cars === null) {
    die('Error decoding JSON data');
}

// Step 4: Iterate over Car objects and insert into the database
foreach ($cars as $car) {
    // Assuming $car is an object with properties like 'brand', 'model', 'color'
    $brand = $conn->real_escape_string($car->brand);
    $model = $conn->real_escape_string($car->model);
    $color = $conn->real_escape_string($car->color);

    // SQL query to insert data into the 'cars' table
    $sql = "INSERT INTO cars (brand, model, color) VALUES ('$brand', '$model', '$color')";

    if ($conn->query($sql) === false) {
        echo 'Error inserting data: ' . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>