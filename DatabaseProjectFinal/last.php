<?php

session_start();
if (!isset($_SESSION['x'])) {
    $_SESSION['x'] = 1; 
}
if (!isset($_SESSION['y'])) {
    $_SESSION['y'] = 1; 
}
if (!isset($_SESSION['z'])) {
    $_SESSION['z'] = 1; 
}

include("databaseT.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$temp = 0;
$sql = "SELECT * FROM Pokedex1 ORDER BY id DESC LIMIT 1";

$stmt = $connection->prepare($sql);

if ($stmt === false) {
    die("Error in preparing statement: " . $connection->error);
}

$stmt->execute();

$result = $stmt->get_result();
$data = array();


$stmt->close();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $temp  = $row['id'];
    }
}
$_SESSION['z']= $temp-1;
$alphaLoc = 1;
if($_SESSION['y'] == 1) {
    $sql = "SELECT * FROM Pokedex1 ORDER BY id DESC LIMIT 1";

    $stmt = $connection->prepare($sql);

    if ($stmt === false) {
        die("Error in preparing statement: " . $connection->error);
    }

   
    $stmt->execute();

    $result = $stmt->get_result();
    $data = array();

    $stmt->close();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
            $_SESSION['x'] = $row['id'];
        }
    }

    echo json_encode($data);
    }
    else{
    do {
        $sql = "SELECT * FROM Pokedex1 ORDER BY name"; 
        $result = $connection->query($sql);
        
        $data = array();
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                
                if($alphaLoc == $_SESSION['z']){
                    $data[] = $row;
                    break;
                }
                $alphaLoc++;
            }
        }
        $_SESSION['z']--;
    }while ($result->num_rows == 0);
        echo json_encode($data);
    }
$connection->close();
?>
