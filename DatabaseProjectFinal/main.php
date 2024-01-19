<?php 
session_start();
    if (!isset($_SESSION['x'])) {
        $_SESSION['x'] = 1; 
    }
   include("databaseT.php");
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
         <link rel="stylesheet" type="text/css" href="style1.css">
 <script src="script.js">
       
       </script>
</head>
<body>
  
    <form>
    <label>Pokemon:</label>
        <input type="text" name="Pokemon" id="InsPokemon" readonly=true> <br>
        <label>evolution:</label>
        <input type="text" name="evolution" id="InsEvolution" readonly=true> <br>
        <label>shinyColor:</label>
        <input type="text" name="shinyColor" id="insShinyColor"readonly=true > <br>
        <label>averageSize:</label>
        <input type="text" name="averageSize" id="InsAverageSize"readonly=true> <br>
        <label>type:</label>
        <input type="text" name="type" id="InsType"readonly=true> <br>
        <label>weakTo:</label>
        <input type="text" name="weakTo" id="InsWeakTo"readonly=true> <br>
        <label>canEvolve:</label>
        <input type="text" name="canEvolve" id="InsCanEvolve"readonly=true> <br>
        <label>image:</label>
        <li><input type="file" name="fileup" id="fileup" readonly=true></li>
        <input type="button" name="submit" value="Insert new pokemon" onclick = "insert1()"><br>
        <input type = "button" name = "edit" value = "edit" onclick = "edit1()"><br>
    </form>
 

    <div id="image-section">
    <div id="table-container"></div>
        <img src="uploads/main.png" id="displayIMG">
        
        <form action="delete.php" method="post" class="form3">
            <input type="text" name="delname"><br>
            <input type="submit" name="delete" value="delete"><br>
        </form>
    </div>
    <form>
        <input type="button" name="first" value="first" onclick="first1()"><br>
   
        <input type="button" name="submit2" value="outputDatabase" onclick="display1()"><br>
 
        <input type="button" name="previous" value="previous" onclick="previous1()"><br>
    
        <input type="button"  value="next" onclick="next1()"><br>
    
        <input  type="button" name="last" value="last" onclick="last1()"><br>

        <input type="button" name="display" value="display" onclick="displayIND1()"><br>

        <input type="button" name="sort1" value="Sort by name" onclick="sortN()"><br>

        <input type="button" name="sort2" value="Sort by id" onclick="sortI()"><br>
    </form>
    
   


</body>
</html>