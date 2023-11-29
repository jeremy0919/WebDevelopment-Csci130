<?php
// Load objects from the JSON file
$objectsJson = file_get_contents('objects.json');
$objects = json_decode($objectsJson, true);

// Return the objects as JSON
header('Content-Type: application/json');
echo json_encode($objects);
?>
