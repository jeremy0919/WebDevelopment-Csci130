<?php
//grabs json file and outputs the entire file in a table
$jsonFile = 'female_oscars-1.json'; 
$jsonData = file_get_contents($jsonFile);
if ($jsonData === false) {
    die('Error reading JSON file');
}


$actress = json_decode($jsonData);


       
        echo '<table style="border: 2px solid black; border-collapse: collapse;">';
        echo '<tr>';
        echo '<td style="border: 1px solid black;">'  . "Index" . '</td>';
        echo '<td style="border: 1px solid black;">' . "Year" . '</td>';
        echo '<td style="border: 1px solid black;">'  . "Age" . '</td>';
        echo '<td style="border: 1px solid black;">'  . "Name" . '</td>';
        echo '<td style="border: 1px solid black;">'  . "Movie" . '</td>';
        echo '</tr>';

        foreach ($actress as $person) {
          
            $index = $person->Index;
            $year = $person->Year;
            $age =$person->Age;
            $Name = $person->Name;
            $Movie = $person->Movie;
            echo '<tr>';
            echo '<td style="border: 1px solid black;">' . $index. '</td>';
            echo '<td style="border: 1px solid black;">' . $year . '</td>';
            echo '<td style="border: 1px solid black;">' . $age. '</td>';
            echo '<td style="border: 1px solid black;">' . $Name . '</td>';
            echo '<td style="border: 1px solid black;">' . $Movie . '</td>';
            echo '</tr>';
        
        }

        echo '</table>';
    

?>