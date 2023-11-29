<?php
// Simulate retrieving an array of cars from the server
$carsArray = [
    ['id' => '1', 'name' => 'Car1'],
    ['id' => '2', 'name' => 'Car2'],
    ['id' => '3', 'name' => 'Car3'],
];

// Save the array of cars into a JSON file
file_put_contents('cars_array.json', json_encode($carsArray));

// Return the array of cars as JSON
header('Content-Type: application/json');
echo json_encode($carsArray);
?>
