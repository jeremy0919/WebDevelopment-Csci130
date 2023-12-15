<?php
include("databaseT.php"); // assumed table meant dispalyed table not rearrange db table
//grabs database table and outputs the entire file in an html table sorted by year

$sql = "SELECT * FROM table1 ORDER BY Year"; 
$result = mysqli_query($connection, $sql);

if ($result) {
echo '<table style="border: 2px solid black; border-collapse: collapse;">';
echo '<tr>';
echo '<td style="border: 1px solid black;">'  . "Index" . '</td>';
echo '<td style="border: 1px solid black;">' . "Year" . '</td>';
echo '<td style="border: 1px solid black;">'  . "Age" . '</td>';
echo '<td style="border: 1px solid black;">'  . "Name" . '</td>';
echo '<td style="border: 1px solid black;">'  . "Movie" . '</td>';
echo '</tr>';

while ($row = mysqli_fetch_assoc($result)) {
  

    echo '<tr>';
    echo '<td style="border: 1px solid black;">' . $row['index']. '</td>';
    echo '<td style="border: 1px solid black;">' .  $row['Year'] . '</td>';
    echo '<td style="border: 1px solid black;">' .  $row['Age']. '</td>';
    echo '<td style="border: 1px solid black;">' .  $row['Name'] . '</td>';
    echo '<td style="border: 1px solid black;">' .  $row['Movie'] . '</td>';
    echo '</tr>';

}

echo '</table>';


}


?>