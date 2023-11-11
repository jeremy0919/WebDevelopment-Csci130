<?php // change to calling javascript for table creation treat database as object
// use path to picture
// hardcode in database creation and what not
session_start();
    if (!isset($_SESSION['x'])) {
        $_SESSION['x'] = 1; // Initial value
    }
   include("databaseT.php");

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
 <script src="script.js">
       
       </script>
</head>
<body>
    <div id="table-container"></div>
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
    <form>
        <input type="button" name="first" value="first" onclick="first1()"><br>
    </form>
    <form action="find.php" method="post" class = "form2">
    <label>Find pokemon</label>
        <input type="text" name="Find"><br>
        <input type="button" name="submit1" value="Find pokemon" onclick="find()"><br>
    </form>
    <form >
        <input type="button" name="submit2" value="outputDatabase" onclick="display1()"><br>
    </form>
    <form>
        <input type="button" name="previous" value="previous" onclick="previous1()"><br>
    </form>
    <form>
        <input type="button"  value="next" onclick="next1()"><br>
    </form>

    <form>
        <input  type="button" name="last" value="last" onclick="last1()"><br>
    </form>
    <form action="mysql.php" method="post" class = "form3">
        <input type="submit" name="display" value="display"><br>
    </form>
    
    <form action="delete.php" method="post" class = "form3">
        <input type="text" name="delname"><br>
        <input type="submit" name="delete" value="delete"><br>
    </form>


    <form >
        <input type="button" name="sort1" value="Sort by name" onclick="sortN()"><br>
    </form>
    <form>
        <input type="button" name="sort2" value="Sort by id" onclick="sortI()"><br>
    </form>
</body>
</html>