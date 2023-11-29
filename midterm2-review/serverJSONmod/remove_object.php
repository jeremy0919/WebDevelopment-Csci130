<?php
// Read the input JSON data
$inputData = json_decode(file_get_contents('php://input'), true);

// Load existing objects from the JSON file
$objectsJson = file_get_contents('objects.json');
$objects = json_decode($objectsJson, true);

// Find and remove the object with the specified ID
foreach ($objects as $key => $object) {
    if ($object['id'] === $inputData['id']) {
        unset($objects[$key]);
        break;
    }
}

// Save the updated list of objects to the JSON file
file_put_contents('objects.json', json_encode($objects));

// Return a response indicating success
header('Content-Type: application/json');
echo json_encode(['success' => true]);
?>
