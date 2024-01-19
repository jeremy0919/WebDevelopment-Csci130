<?php

include("databaseT.php");

$find = urldecode($_GET['find']);

$stmt = $connection->prepare("SELECT * FROM Pokedex1 WHERE name = ?");


$stmt->bind_param("s", $find);


$stmt->execute();

$result = $stmt->get_result();
$data = array();

$stmt->close();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);

$connection->close();
header("Location: main.php");

?>