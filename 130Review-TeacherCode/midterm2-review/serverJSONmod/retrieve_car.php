<?php
// Simulate retrieving a single car from the server
$car = ['id' => '1', 'name' => 'CarX'];

// Return the car as JSON
header('Content-Type: application/json');
echo json_encode($car);
?>
