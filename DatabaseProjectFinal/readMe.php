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
    if values were deleted not within the session or a 10 hour period of the cookie set them here, this is needed because the iterating by id can skip over missing values but the iterating through name uses the number of values in the database to perform calculations
    <form action="readMe.php" method="post" class = "cookie">
        <input type="text" name ="del">
        <input type="submit" name="submit2" value="update cookies"><br>

    </form>
</body>
</html>