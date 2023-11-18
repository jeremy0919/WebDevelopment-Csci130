<?php // change to calling javascript for table creation treat database as object
// use path to picture
// hardcode in database creation and what not
// use bit/ binary for bool
session_start();
    if (!isset($_SESSION['x'])) {
        $_SESSION['x'] = 0; // Initial value
    }
    include("databaseT.php");

    if(isset($_POST['submit'])){
        if($_POST['Pokemon'] != null){
    
    $pokemon = $_POST['Pokemon'] ;
    }
    else{
        echo("no name input");
    }
    if($_POST['evolution']!=null){
        $evolution = $_POST['evolution'] ;
    }
    else{
        echo("no eveolution stage input");
    }
    if($_POST['shinyColor']!=null){
        $shinyColor = $_POST['shinyColor'] ;
    }
    else{
        echo("no shiny color given");
    }
    if($_POST['averageSize']!=null){
        $averageSize = $_POST['averageSize'] ;
    }
    else{
        echo("no average size given");
    }
    if($_POST['type']!=null){
        $type = $_POST['type'] ;
    }
    else{
        echo("no type given");
    }
    if($_POST['weakTo']!=null){
        $weakTo = $_POST['weakTo'] ;
    }
    else{
        echo("no weakness given");
    }
    if($_POST['canEvolve'] != null){
        $canEvolve = $_POST['canEvolve'] ;
    }
    else{
        echo("no evolution given");
    }
    if($_POST['img'] == null){
       $img = "mon.jpg"; // figure out best way to add in image
    }
    if($_POST['canEvolve'] != null && $_POST['weakTo'] != null&& $_POST['type'] != null&& $_POST['averageSize'] != null&& $_POST['shinyColor'] != null&& $_POST['evolution'] != null && $_POST['Pokemon'] != null){
        $sql = "INSERT INTO `Pokedex1` (`id`, `name`, `type`, `ShinyColor`, `stage`, `CanEvolve`, `size`, `weakTo`, `image`) 
        VALUES (NULL, '$pokemon', '$type', '$shinyColor', '$evolution', '$canEvolve', '$averageSize', '$weakTo', '$img')";
        mysqli_query($connection,$sql);
    
    }

}

if(isset($_POST["test1"])){
    echo("is trying to work");
    $img = "mon.jpg"; // figure out best way to add in image
    echo "<img src='$img' alt='Pokemon Image'>";
}

if(isset($_POST["submit1"])){

    if(isset($_POST["Find"]) && $_POST["Find"] != null){
        $find = $_POST["Find"];
        if ($connection->ping()) {
        // Create a prepared statement
        $stmt = $connection->prepare("SELECT * FROM pokemon WHERE name = ?");
        
        // Bind parameters
        $stmt->bind_param("s", $find);

        // Execute query
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();
        table($result);
        

        // Close statement
        $stmt->close();
    }
    else{
        echo("connection is closed");
    }
    echo '<input type="submit" name="submit3" value="edit"> ';
    }
}
if (isset($_POST["submit2"]) && $_POST["submit2"] != null) {
    if ($connection->ping()) {
    
        $sql = "SELECT * FROM pokedex";
        $result = mysqli_query($connection, $sql);

        if ($result) {
           
            echo '<table style="border: 2px solid black; border-collapse: collapse;">';
            echo '<tr>';
            echo '<td style="border: 1px solid black;">'  . "name" . '</td>';
            echo '<td style="border: 1px solid black;">' . "type" . '</td>';
            echo '<td style="border: 1px solid black;">'  . "ShinyColor" . '</td>';
            echo '<td style="border: 1px solid black;">'  . "stage" . '</td>';
            echo '<td style="border: 1px solid black;">'  . "CanEvolve" . '</td>';
            echo '<td style="border: 1px solid black;">'  . "size" . "kg".'</td>';
            echo '<td style="border: 1px solid black;">'  . "weakTo" . '</td>';
            echo '</tr>';

            while ($row = mysqli_fetch_assoc($result)) {
             
                echo '<tr>';
                echo '<td style="border: 1px solid black;">' . $row["name"] . '</td>';
                echo '<td style="border: 1px solid black;">' . $row["type"] . '</td>';
                echo '<td style="border: 1px solid black;">' . $row["ShinyColor"] . '</td>';
                echo '<td style="border: 1px solid black;">' . $row["stage"] . '</td>';
                echo '<td style="border: 1px solid black;">' . $row["CanEvolve"] . '</td>';
                echo '<td style="border: 1px solid black;">' . $row["size"] . "kg".'</td>';
                echo '<td style="border: 1px solid black;">' . $row["weakTo"] . '</td>';
 
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo "Query failed: " . mysqli_error($connection);
        }
    } else {
        echo "Connection is closed";
    }

}
function table($result){
    if ($result) {
    echo '<table style="border: 2px solid black; border-collapse: collapse;">';
    echo '<tr>';
    echo '<td style="border: 1px solid black;">'  . "name" . '</td>';
    echo '<td style="border: 1px solid black;">'  . "type" . '</td>';
    echo '<td style="border: 1px solid black;">'  . "ShinyColor" . '</td>';
    echo '<td style="border: 1px solid black;">'  . "stage" . '</td>';
    echo '<td style="border: 1px solid black;">'  . "CanEvolve" . '</td>';
    echo '<td style="border: 1px solid black;">' . "size" ."kg". '</td>';
    echo '<td style="border: 1px solid black;">'  . "weakTo" . '</td>';
    echo '</tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td style="border: 1px solid black;">'  . $row["name"] . '</td>';
        echo '<td style="border: 1px solid black;">'  . $row["type"] . '</td>';
        echo '<td style="border: 1px solid black;">'  . $row["ShinyColor"] . '</td>';
        echo '<td style="border: 1px solid black;">'  . $row["stage"] . '</td>';
        echo '<td style="border: 1px solid black;">'  . $row["CanEvolve"] . '</td>';
        echo '<td style="border: 1px solid black;">'  . $row["size"] ."kg". '</td>';
        echo '<td style="border: 1px solid black;">'  . $row["weakTo"] . '</td>';
        echo '<td><form method="post" action="edit.php">';
        echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
        echo '<input type="submit" name="edit" value="Edit">';
        echo '</form></td>';

        echo '</tr>';
    }
    echo '</table>';
}
}
if(isset($_POST["sort1"])&& $_POST["sort1"] != null) {

    if ($connection->ping()) {
       
        $sql = "SELECT * FROM pokedex ORDER BY name"; 
        $result = mysqli_query($connection, $sql);

        if ($result) {
           
            echo '<table style="border: 2px solid black; border-collapse: collapse;">';
            echo '<tr>';
            echo '<td style="border: 1px solid black;">'  . "name" . '</td>';
            echo '<td style="border: 1px solid black;">' . "type" . '</td>';
            echo '<td style="border: 1px solid black;">'  . "ShinyColor" . '</td>';
            echo '<td style="border: 1px solid black;">'  . "stage" . '</td>';
            echo '<td style="border: 1px solid black;">'  . "CanEvolve" . '</td>';
            echo '<td style="border: 1px solid black;">'  . "size" . "kg".'</td>';
            echo '<td style="border: 1px solid black;">'  . "weakTo" . '</td>';
            echo '</tr>';

            while ($row = mysqli_fetch_assoc($result)) {
             
                echo '<tr>';
                echo '<td style="border: 1px solid black;">' . $row["name"] . '</td>';
                echo '<td style="border: 1px solid black;">' . $row["type"] . '</td>';
                echo '<td style="border: 1px solid black;">' . $row["ShinyColor"] . '</td>';
                echo '<td style="border: 1px solid black;">' . $row["stage"] . '</td>';
                echo '<td style="border: 1px solid black;">' . $row["CanEvolve"] . '</td>';
                echo '<td style="border: 1px solid black;">' . $row["size"] . "kg".'</td>';
                echo '<td style="border: 1px solid black;">' . $row["weakTo"] . '</td>';
 
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo "Query failed: " . mysqli_error($connection);
        }
    } else {
        echo "Connection is closed";
    }

}
if(isset($_POST["sort2"])&& $_POST["sort2"] != null) {

    if ($connection->ping()) {
       
        $sql = "SELECT * FROM pokedex ORDER BY id"; 
        $result = mysqli_query($connection, $sql);

        if ($result) {
           
            echo '<table style="border: 2px solid black; border-collapse: collapse;">';
            echo '<tr>';
            echo '<td style="border: 1px solid black;">'  . "name" . '</td>';
            echo '<td style="border: 1px solid black;">' . "type" . '</td>';
            echo '<td style="border: 1px solid black;">'  . "ShinyColor" . '</td>';
            echo '<td style="border: 1px solid black;">'  . "stage" . '</td>';
            echo '<td style="border: 1px solid black;">'  . "CanEvolve" . '</td>';
            echo '<td style="border: 1px solid black;">'  . "size" . "kg".'</td>';
            echo '<td style="border: 1px solid black;">'  . "weakTo" . '</td>';
            echo '</tr>';

            while ($row = mysqli_fetch_assoc($result)) {
             
                echo '<tr>';
                echo '<td style="border: 1px solid black;">' . $row["name"] . '</td>';
                echo '<td style="border: 1px solid black;">' . $row["type"] . '</td>';
                echo '<td style="border: 1px solid black;">' . $row["ShinyColor"] . '</td>';
                echo '<td style="border: 1px solid black;">' . $row["stage"] . '</td>';
                echo '<td style="border: 1px solid black;">' . $row["CanEvolve"] . '</td>';
                echo '<td style="border: 1px solid black;">' . $row["size"] . "kg".'</td>';
                echo '<td style="border: 1px solid black;">' . $row["weakTo"] . '</td>';
 
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo "Query failed: " . mysqli_error($connection);
        }
    } else {
        echo "Connection is closed";
    }

}
if (isset($_POST["display"]) && $_POST["display"] != null) {
        echo("The current index is:" . $x = $_SESSION['x']. "<br>");
        $sql = "SELECT COUNT(*) AS row_count FROM pokedex";

        $stmt = $connection->prepare($sql);
    
        // Execute the query
        $stmt->execute();
    
        // Get the result
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $rowCount = $row['row_count'];
    
            echo "Number of pokemon in the 'pokemon' table: $rowCount" . "<br>";
        } else {
            echo "No data available.";
        }
}
if (isset($_POST["previous"]) && $_POST["previous"] != null) {
    if ($connection->ping()) {
        $_SESSION['x'] =  $_SESSION['x']-1; 
        $x = $_SESSION['x'];
        // Query the database to retrieve all records
        $sql = "SELECT * FROM pokemon";
        $result = mysqli_query($connection, $sql);
        $stmt = $connection->prepare("SELECT * FROM pokedex WHERE id = ?");
        
        // Bind parameters
        $stmt->bind_param("s", $x);

        // Execute query
        $stmt->execute();
        $result = $stmt->get_result();
        table($result);
    }
}
if (isset($_POST["next"]) && $_POST["next"] != null) {
    if ($connection->ping()) {
        // Query the database to retrieve all records
        $_SESSION['x'] =  $_SESSION['x']+1; 
        $x = $_SESSION['x'];
        $stmt = $connection->prepare("SELECT * FROM pokedex WHERE id = ?");
        
        // Bind parameters
        $stmt->bind_param("s", $x);

        // Execute query
        $stmt->execute();
        $result = $stmt->get_result();
        table($result);
    }
}
if (isset($_POST["first"]) && $_POST["first"] != null) {
    if ($connection->ping()) {
        $_SESSION['x'] =  1; 
        // Query the database to retrieve all records
        $x = $_SESSION['x'];
        $stmt = $connection->prepare("SELECT * FROM pokedex WHERE id = ?");
        
        // Bind parameters
        $stmt->bind_param("s", $x);

        // Execute query
        $stmt->execute();
        $result = $stmt->get_result();
        table($result);
    }
}

if (isset($_POST["delete"]) && $_POST["delete"] != null) {
    if (isset($_POST["delname"]) && $_POST["delname"] != null) {
        $delname = $_POST["delname"];

        $sql = "DELETE FROM pokedex WHERE name = ?";

        $stmt = $connection->prepare($sql);

        // Bind parameters
        $stmt->bind_param("s", $delname);

        // Execute the DELETE query
        if ($stmt->execute()) {
            echo "The pokemon $delname has been deleted.";
        } else {
            echo "Error: " . $stmt->error;
        }
    }
} 


if (isset($_POST["last"]) && $_POST["last"] != null) {
    if ($connection->ping()) {

      //  $_SESSION['x'] =  $_SESSION['x']; 
        $x = $_SESSION['x'];
        $stmt = $connection->prepare("SELECT * FROM pokedex WHERE id = ?");
        
        // Bind parameters
        $stmt->bind_param("s", $x);

        
        $stmt->execute();
        $result = $stmt->get_result();
        table($result);
    }
}
header("Location: main.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table-with-border {
            border: 2px solid black;
            }
        </style>
  
</head>
<body>
    <form action="mysql.php" method="post">
    <label>Pokemon:</label>
        <input type="text" name="Pokemon"> <br>
        <label>evolution:</label>
        <input type="text" name="evolution"> <br>
        <label>shinyColor:</label>
        <input type="text" name="shinyColor"> <br>
        <label>averageSize:</label>
        <input type="text" name="averageSize"> <br>
        <label>type:</label>
        <input type="text" name="type"> <br>
        <label>weakTo:</label>
        <input type="text" name="weakTo"> <br>
        <label>canEvolve:</label>
        <input type="text" name="canEvolve"> <br>
        <input type="submit" name="submit" value="Insert new pokemon"><br>
       
     
    </form>

    <form action="mysql.php" method="post" class = "form2">
    <label>Find pokemon</label>
        <input type="text" name="Find"><br>
        <input type="submit" name="submit1" value="Find pokemon"><br>
    </form>

    <form action="mysql.php" method="post" class = "form3">
        <input type="submit" name="submit2" value="outputDatabase"><br>
    </form>
    <form action="mysql.php" method="post" class = "form3">
        <input type="submit" name="previous" value="previous"><br>
    </form>
    <form action="mysql.php" method="post" class = "form3">
        <input type="submit" name="next" value="next"><br>
    </form>
    <form action="mysql.php" method="post" class = "form3">
        <input type="submit" name="first" value="first"><br>
    </form>
    <form action="mysql.php" method="post" class = "form3">
        <input type="submit" name="last" value="last"><br>
    </form>
    <form action="mysql.php" method="post" class = "form3">
        <input type="submit" name="display" value="display"><br>
    </form>
    <form action="mysql.php" method="post" class = "form3">
        <input type="text" name="delname"><br>
        <input type="submit" name="delete" value="delete"><br>
    </form>


    <form action="mysql.php" method="post" class = "form3">
        <input type="submit" name="sort1" value="Sort by name"><br>
    </form>
    <form action="mysql.php" method="post" class = "form3">
        <input type="submit" name="sort2" value="Sort by id"><br>
    </form>
</body>
</html>