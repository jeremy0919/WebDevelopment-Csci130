<?php

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
    //if($_POST['img'] == null){
      //  $img = "mon.img"; // figure out best way to add in image
    //}
    if($_POST['canEvolve'] != null && $_POST['weakTo'] != null&& $_POST['type'] != null&& $_POST['averageSize'] != null&& $_POST['shinyColor'] != null&& $_POST['evolution'] != null && $_POST['Pokemon'] != null){
    
        $sql = "INSERT INTO `pokemon` (`id`, `name`, `type`, `ShinyColor`, `stage`, `CanEvolve`, `size`, `weakTo`) 
        VALUES (NULL, '$pokemon', '$type', '$shinyColor', '$evolution', '$canEvolve', '$averageSize', '$weakTo');";
    
        mysqli_query($connection,$sql);
    
    }

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
        // Query the database to retrieve all records
        $sql = "SELECT * FROM pokemon";
        $result = mysqli_query($connection, $sql);

        if ($result) {
            // Add inline style for the table
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
                // Add inline styles for table cells (optional)
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

//make button for edit, edit takes values and stores in input boxes, save updates values using index.
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
    <script> // creates tables
function tableCreate() {
    const body = document.body;
    const Table1 = document.createElement('table');
    Table1.style.width = '100px';
    Table1.setAttribute("id", "Tab1");
    Table1.style.borderCollapse = 'collapse';
    Table1.style.border = '1px solid black';
    Table1.style.marginRight = '500px';
    Table1.style.alignContent = 'left';
    for (let i = 0; i < 2; i++) {
        const tr = Table1.insertRow();
        for (let j = 0; j < 8; j++) {
            const td = tr.insertCell();
            if (j == 0) {
                td.appendChild(document.createTextNode("Some Text")); // Provide some text content
                td.style.border = '1px solid black';
            } else {
                td.appendChild(document.createTextNode("Some Text")); // Provide some text content
                td.style.border = '1px solid black';
            }
        }
    }
    let form2 = document.getElementsByClassName("form2");
    body.appendChild(Table1);
    let button = document.createElement("button");
    button.setAttribute("type", "button");
    button.setAttribute("id", "edi");
    button.setAttribute("name", "edit");
    button.setAttribute("value", "edit");

    body.appendChild(button);
}


function tableCreateI(M,N) { // input table
        let removeTab1 = document.getElementById("Tab1")
        if(removeTab1!=null){
var parentEl1 = removeTab1.parentElement;
    parentEl1.removeChild(removeTab1);
}
 removeTab1 = document.getElementById("edit")
        if(removeTab1!=null){
var parentEl1 = removeTab1.parentElement;
    parentEl1.removeChild(removeTab1);
}
        const body = document.body,
        Table1 = document.createElement('table');
        Table1.style.width = '100px';
        Table1.setAttribute("id","Tab1")
        Table1.style.borderCollapse = 'collapse';
        Table1.style.border = '1px solid black';
        Table1.style.marginRight= '500px';
        Table1.style.alignContent = 'left';
        for (let i = 0; i < N; i++) {
            const tr = Table1.insertRow();
            
                const td = tr.insertCell();
               
                    td.appendChild(document.createElement("input")); // decide how I want to store name
                    td.style.border = '1px solid black';
                
            
                    td.appendChild(document.createElement("input"));
                    
                    td.style.border = '1px solid black';
                
            
        }
    body.appendChild(Table1);
    let button= document.createElement("button");
    button.setAttribute("type","submit");
    button.setAttribute("name","Changes");
    button.setAttribute("value","submitChanges")
    body.appendChild(button);
    }
    
    </script> 
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
</body>
</html>