<?php


$db_server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "pokemon1"; 

// Try to establish a connection
$connection = mysqli_connect($db_server_name, $db_username, $db_password, $db_name);




if ($connection) {
    echo "You are connected";
} else {
    echo "You cannot connect";
}
?>




