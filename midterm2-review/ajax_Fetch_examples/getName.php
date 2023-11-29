<?php
// Replace 'data.json' with your desired JSON file name
$data = file_get_contents('data.json'); // the equivelent of {name:bob, age:23}

// Sending the JSON response
echo $data; // accessed in js via data.name data.age
?>