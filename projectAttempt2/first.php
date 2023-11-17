<?php
   include("databaseT.php");
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
$find = 1;
$_SESSION['x'] = $find;
$alphaLoc = 1;
// Try to establish a connection

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT * FROM Pokedex1 WHERE id = ?";
$stmt = $connection->prepare($sql);

if ($stmt === false) {
    die("Error in preparing statement: " . $connection->error);
}

     
        $stmt->bind_param("s", $find);

        // Execute query
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();
        $data = array();

       
        $stmt->close();
        if($_SESSION['y'] == 1) {
        if ($result->num_rows > 0) {// should work
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        echo json_encode($data);
    }else{
        $_SESSION['z'] = 1;
        $sql = "SELECT * FROM Pokedex1 ORDER BY name"; 
        $result = $connection->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                
                if($alphaLoc == $_SESSION['z']){
                    $data[] = $row;
                    break;
                }
                $alphaLoc++;
            }
        }
        echo json_encode($data);
    }


$connection->close();

?>