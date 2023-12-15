<?php

include("databaseT.php");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
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
$numDel = isset($_COOKIE['numDelete']) ? $_COOKIE['numDelete'] : 0;
$alphaLoc = 1;
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
$x = $x - 1;
if($x<1){
    $x = $temp;
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
        $x--;
      
        if($x<1){
            $x = $temp;// doesn't let it go out of bounds
        }
        $_SESSION['x'] = $x;
    }
} while ($result->num_rows == 0); // allows for removal of data but since ID is used to incriment doesnt display empty
    echo json_encode($data);
}
else{
    $z = $_SESSION['z'];
$z = $z-1;

if($z<1){
    $z = $temp-$numDel ;
}
$_SESSION['z'] = $z;

    do{
        $z = $_SESSION['z'];
        $alphaLoc =1;
        $sql = "SELECT * FROM Pokedex1 ORDER BY name"; 
        $result = $connection->query($sql);
        
        $data = array();
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                
                if($alphaLoc == $z){
                    $data[] = $row;
                    break;
                }
                $alphaLoc++;
            }
        }else{
            $z--;
                    
        if($z<1){
            $z = $temp-$numDel ;
        }
        }
      
    

        $_SESSION['z'] = $z;
    }while ($result->num_rows == 0); 
        echo json_encode($data);
        
    }

$connection->close();

?>