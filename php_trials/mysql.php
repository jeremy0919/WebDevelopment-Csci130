<?php
    include("databaseT.php");

    $sql = "INSERT INTO `pokemon` (`id`, `name`, `type`, `ShinyColor`, `stage`, `CanEvolve`, `size`, `weakTo`) 
    VALUES (NULL, 'charmeleon', 'fire', 'gold', '2', '1', '22', 'water');"

    mysqli_close($connection,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello
</body>
</html>