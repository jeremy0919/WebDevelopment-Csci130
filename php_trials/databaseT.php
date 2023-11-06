<?php
    $db_server_name ="localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "pokemontest";

    // Try to establish a connection
    $connection = mysqli_connect($db_server_name,$db_username , $db_password, $db_name);

    // Check if the connection was successful
    if($connection){
        echo("You are connected");

    } else {
        echo("You cannot connect");
    }


?>