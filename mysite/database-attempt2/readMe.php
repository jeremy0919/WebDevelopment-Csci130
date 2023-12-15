<?php
$numDel = isset($_COOKIE['numDelete']) ? $_COOKIE['numDelete'] : 0;
 if (isset($_POST["del"]) && $_POST["del"] != null) {
    $numDel = $_POST["del"];
    setcookie('numDelete', $numDel, time() + 36000); 
 }


 header("Location: main.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    To run this database for the first time go to makeDatabase.php to make the database<br>
    Then go to maketable.php <br>
    lastly go to autofillTable.php <br>
    my uploads file is needed, or a seperate uploads file is needed and the photonames in auto fill table need to be changed <br>
    if values were deleted not within the session or a 10 hour period of the cookie set them here, this is needed because the iterating by id can skip over missing values but the iterating through name uses the number of values in the database to perform calculations
    <form action="readMe.php" method="post" class = "cookie">
        <input type="text" name ="del">
        <input type="submit" name="submit2" value="update cookies"><br>

    </form>
</body>
</html>