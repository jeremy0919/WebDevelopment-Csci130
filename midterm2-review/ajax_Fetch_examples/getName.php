<?php
// Replace 'data.json' with your desired JSON file name
$data = file_get_contents('data.json');

// Sending the JSON response
echo $data;
?>