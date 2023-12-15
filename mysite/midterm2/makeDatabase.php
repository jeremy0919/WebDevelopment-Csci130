<?php



// Create database
$sql = "CREATE DATABASE DB"; // makes databse DB
if ($connection ->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $connection ->error;
}


$connection ->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="makeDatabase.php" method="post" >

        <input type="submit" name="makeDatabase" value="make database and table">
    </form>
</body>
</html>