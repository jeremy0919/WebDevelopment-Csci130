<?php // change to calling javascript for table creation treat database as object
// use path to picture
// hardcode in database creation and what not

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
  <script>

function display1(){
    alert("check1")
    fetch('databaseT.php')
    .then(response => response.json())
    .then(data => {
    // Create a table element
    const table = document.createElement('table');
    table.border = '1';

    // Create table header
    const headerRow = table.insertRow();
    const columns = ['ID', 'Name', 'Type', 'Shiny Color', 'Stage', 'Can Evolve', 'Size', 'Weak To'];

    columns.forEach(columnName => {
      const th = document.createElement('th');
      th.innerHTML = columnName;
      headerRow.appendChild(th);
    });

    // Create table rows
    data.forEach(rowData => {
      const row = table.insertRow();
      const columnNames = ['id', 'name', 'type', 'ShinyColor', 'stage', 'CanEvolve', 'size', 'weakTo'];

      columnNames.forEach(columnName => {
        const cell = row.insertCell();
        cell.innerHTML = rowData[columnName];
      });
    });

    // Append the table to the body or another HTML element
    document.body.appendChild(table);
  })
  .catch(error => console.error('Error:', error));
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

    <form >
        <input type="button" name="submit2" value="outputDatabase" onclick="dispaly1()"><br>
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