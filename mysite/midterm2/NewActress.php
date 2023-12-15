<?php


include 'makeObj.php'; // Include the class file
// takes a class of and makes a new acress
$acrtress = [
    new FemaleOscar('100', '2002', '40', 'susan', 'movie'),
 
];

$jsonData = json_encode($acrtress, JSON_PRETTY_PRINT);
file_put_contents('female_oscars-1.json', $jsonData);

?>