<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_encode(['name' => $_POST['name']]); // pulls value from post and encodes in data in form of {name:var}
    
    // Replace 'data.json' with your desired JSON file name
    file_put_contents('data.json', $data); 

    // Sending a response, you might want to handle this in your JS
    echo json_encode(['success' => true, 'message' => 'Name saved successfully']); // not neccisary
}
?>