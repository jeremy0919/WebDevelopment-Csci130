<?php
// Simulate retrieving a single car from a JSON file
$carJson = file_get_contents('car.json');
$car = json_decode($carJson, true);

// Return the car as JSON
header('Content-Type: application/json');
echo json_encode($car);
?>
