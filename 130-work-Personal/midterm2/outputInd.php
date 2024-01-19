<?php

$jsonFile = 'female_oscars-1.json';
$jsonData = file_get_contents($jsonFile);
if ($jsonData === false) {
    die('Error reading JSON file');
}
$id =  $_POST['id']; // pulls value from post and encodes in data in form of {name:var}
    

$actress = json_decode($jsonData);


foreach ($actress as $person) {
          
    $index = $person->Index;
    
    if($id ==$index ){
        $data = $person;
    }

}
json_encode($data);

?>