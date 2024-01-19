<?php

/*
Data Type: This header specifies the type of data in the request body. 
It tells the server how to interpret the data being sent. 
Common values include 'application/json' for JSON data, 'application/x-www-form-urlencoded' for form data, 
and 'multipart/form-data' for file uploads.
Use Case: You would use this header to indicate the format of the data you are sending in the request body. 
For example, if you're sending JSON data, you would set 'Content-Type': 'application/json'.*/





//bBROWSER SIDE JS TO JSON
/*
// Assume data is an object you want to write to the JSON file
var data = {
    key1: 'value1',
    key2: 'value2'
};

// Convert the JavaScript object to a JSON string
var jsonData = JSON.stringify(data);

// Using AJAX to send the data to a PHP script
var xhr = new XMLHttpRequest();
xhr.open('POST', 'writeToFile.php', true);
xhr.setRequestHeader('Content-Type', 'application/json');

xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
        console.log(xhr.responseText);
    }
};

xhr.send(jsonData);
*/
//WRITETOFILE.php
/*<?php
// Get the JSON data from the POST request
$jsonData = file_get_contents('php://input');

// Decode the JSON data
$decodedData = json_decode($jsonData, true);

// Check if decoding was successful
if ($decodedData === null) {
    // Handle the error, e.g., JSON syntax error
    echo 'Error decoding JSON';
} else {
    // Do something with the decoded data
    // For example, you can write it to a file
    $filename = 'output.json';
    file_put_contents($filename, json_encode($decodedData));

    // Respond with a success message
    echo 'Data written to ' . $filename;
}
?>
*/






//Server side JAVASCRIPT TO JSON

/*const fs = require('fs');

// Assume data is an object you want to write to the JSON file
const data = {
    key1: 'value1',
    key2: 'value2'
};

// Convert the JavaScript object to a JSON string
const jsonData = JSON.stringify(data);

// Write to a JSON file
const filename = 'mydatabase.json';
fs.writeFileSync(filename, jsonData);

console.log('Data written successfully.');
*/


//JSON SHIT
/*JavaScript (Node.js or Browser):

Serialization (Object to JSON):
In JavaScript, you use JSON.stringify to convert a JavaScript object to a JSON-formatted string.
Example: JSON.stringify(object)
Deserialization (JSON to Object):
In JavaScript, you use JSON.parse to convert a JSON-formatted string to a JavaScript object.
Example: JSON.parse(jsonString)
PHP:

Serialization (Object to JSON):
In PHP, you use json_encode to convert a PHP associative array or object to a JSON-formatted string.
Example: json_encode($data)
Deserialization (JSON to Object):
In PHP, you use json_decode to convert a JSON-formatted string to a PHP associative array or object.
Example: json_decode($jsonString)
So, if you are working in JavaScript, you should use JSON.stringify to convert a JavaScript object to a JSON-formatted string. 
If you are working in PHP, you should use json_encode for the same purpose.
*/
?>