<?php

if (isset($_POST["mynewdata"]))
{
  $data = $_POST["mynewdata"];

} 
else 
{
  $data = null;
  echo "no data supplied";
}

// Overwrite the previous file
$f = fopen("mydatabase.json","w"); //overwrite sprevious file and rewrites it with $data
fwrite($f,$data); // use a^ to append to end of file
fclose($f);

/*
$f = fopen("mydatabase.json","w");
fwrite($f,$data);
fclose($f);
*/

?>