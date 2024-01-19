<?php
include ("databaseT.php");
session_start();
if (!isset($_SESSION['x'])) {
    $_SESSION['x'] = 1; 
}


$sql = "SELECT COUNT(*) AS row_count FROM pokedex1";

$stmt = $connection->prepare($sql);


$stmt->execute();


$result = $stmt->get_result();
$data = array();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $rowCount = $row['row_count'];

    $data[] = $rowCount;
    $data[]=$_SESSION['x'];

}
echo json_encode($data);

$connection->close();
?>