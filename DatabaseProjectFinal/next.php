<?php

session_start();
if (!isset($_SESSION['x'])) {
    $_SESSION['x'] = 1; // Initial value
}
if (!isset($_SESSION['y'])) {
    $_SESSION['y'] = 1; // Initial value
}
if (!isset($_SESSION['z'])) {
    $_SESSION['z'] = 1; // Initial value
}
$alphaLoc = 1;
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

// Execute query
$stmt->execute();

// Get the result
$result = $stmt->get_result();
$data = array();

// Close statement
$stmt->close();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $temp  = $row['id'];
    }
}
if($_SESSION["y"] == 1) {

$x = $_SESSION['x'];
$x = $x + 1;

if($x>$temp){
    $x = 1;// doesn't let it go out of bounds
    
}
$_SESSION['x'] = $x;

    do {
        $sql = "SELECT * FROM Pokedex1 WHERE id = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("s", $x);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = array();
        $stmt->close();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        } else {
            $x++;
            if($x>$temp){
                $x = 1;// doesn't let it go out of bounds
                $_SESSION['x'] = $x;
            }
        }
    } while ($result->num_rows == 0);
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
        $_SESSION['z']++;
        if($_SESSION['z']>$temp){
            $_SESSION['z'] = 1;
        }
}while ($result->num_rows == 0);
    echo json_encode($data);
}
$connection->close();

?>