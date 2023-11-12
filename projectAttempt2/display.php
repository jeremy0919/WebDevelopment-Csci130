<?php
include ("databaseT.php");

//echo("The current index is:" . $x = $_SESSION['x']. "<br>");
$sql = "SELECT COUNT(*) AS row_count FROM pokedex";

$stmt = $connection->prepare($sql);

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();
$data = array();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $rowCount = $row['row_count'];

    $data[] = $rowCount;
    $data[]=$_SESSION['x'];

}
json_encode($data);

?>