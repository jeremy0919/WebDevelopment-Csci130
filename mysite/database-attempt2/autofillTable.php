<?php
include("databaseT.php");

$sql = "INSERT INTO `Pokedex4` (`id`, `name`, `type`, `ShinyColor`, `stage`, `CanEvolve`, `size`, `weakTo`, `image`) 
VALUES (NULL, 'Charmander', 'Fire', 'Gold', '1', '1', '22', 'water', '6556c5059a72d_char.png')";
mysqli_query($connection,$sql);
$sql = "INSERT INTO `Pokedex4` (`id`, `name`, `type`, `ShinyColor`, `stage`, `CanEvolve`, `size`, `weakTo`, `image`) 
VALUES (NULL, 'Charmealon', 'Fire', 'Gold', '2', '1', '32', 'water', '6556c3eb304ce_charmealon.png')";
mysqli_query($connection,$sql);

$sql = "INSERT INTO `Pokedex4` (`id`, `name`, `type`, `ShinyColor`, `stage`, `CanEvolve`, `size`, `weakTo`, `image`) 
VALUES (NULL, 'Charizard', 'Fire', 'Gold', '3', '0', '45', 'water', 'charizard.png')";
mysqli_query($connection,$sql);



?>