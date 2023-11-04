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

if(isset($_POST["submit1"]) && $_POST["submit1"] != null){
    if(isset($_POST["find"]) && $_POST["find"] != null){
        $find =$_POST["find"];
        $sql = "SELECT * FROM pokemon WHERE pokemon = $find";
        $result = mysqli_query($connection,$sql);
        if(mysqli_num_rows($result)> 0){
            $row = mysqli_fetch_array($result);
            echo $row["name"] . "<br>";
            echo $row["type"] . "<br>";
            echo $row["ShinyColor"] . "<br>";
            echo $row["stage"] . "<br>";
            echo $row["CanEvolve"] . "<br>";
            echo $row["size"] . "<br>";
            echo $row["weakTo"] . "<br>";
        }
    }
}
if(isset( $_POST["changes"]) && $_POST["changes"] != null){
//for taking value from js table and putting in sql table
}
mysqli_close($connection);
//make button for edit, edit takes values and stores in input boxes, save updates values using index.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script> // creates tables
function tableCreate(N,M) {
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
            for (let j = 0; j < M; j++) {
                const td = tr.insertCell();
                if(j ==0){  
                    td.appendChild(document.createTextNode()); // decide how I want to store name
                    td.style.border = '1px solid black';
                }
                else{
                    td.appendChild(document.createTextNode());
                    td.style.border = '1px solid black';
                }
            }
        }
    body.appendChild(Table1);
    let button= document.createElement("button");
    button.setAttribute("type","button");
    button.setAttribute("id","edi")
    button.setAttribute("name","edit");
    button.setAttribute("value","edit")
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
       
        <label>Find pokemon</label>
        <input type="text" name="Find"><br>
        <input type="submit" name="submit1" value="Find pokemon"><br>
    </form>
</body>
</html>