<?php
    $db_server_name ="localhost"; // should be accurate on each computer but need to set up table on laptop
    $db_username = "root";
    $db_password = ""; //no password
    $db_name = "pokemontest";
    $connection= "";

    try{ //tries code that might cause error
    $connection = mysqli_connect($db_server_name,$db_username , $db_password, $db_name); //creates object to connect to database
    }
    catch(mysqli_sql_exception){
        echo("you cannot connect");
    }

    if($connection){
        echo("you are connected");
    }

?>