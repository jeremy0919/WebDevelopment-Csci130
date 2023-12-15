<?php
// Read the input JSON data
$inputData = json_decode(file_get_contents('php://input'), true);

// Load existing objects from the JSON file
$objectsJson = file_get_contents('objects.json');
$objects = json_decode($objectsJson, true);

// Generate a unique ID for the new object
$newObjectId = uniqid();

// Add the new object to the list
$objects[] = [
    'id' => $newObjectId,
    'name' => $inputData['name'],
];

// Save the updated list of objects to the JSON file
file_put_contents('objects.json', json_encode($objects));

// Return a response indicating success
header('Content-Type: application/json');
echo json_encode(['success' => true]);
?>
