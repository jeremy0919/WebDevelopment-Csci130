<?php
// Read the existing JSON file
$json_file = 'test.json';
$json_data = file_get_contents($json_file);
$pokemon_list = json_decode($json_data, true);

// Get data from the form
$temp = 0;
if(isset($_POST['submit'])){
    if($_POST['Pokemon'] != null){

$pokemon = $_POST['Pokemon'] ;
}
else{
    echo("no name input");
}
if($_POST['evolution']!=null){
    $evolution = $_POST['evolution'] ;
}
else{
    echo("no eveolution stage input");
}
if($_POST['shinyColor']!=null){
    $shinyColor = $_POST['shinyColor'] ;
}
else{
    echo("no shiny color given");
}
if($_POST['averageSize']!=null){
    $averageSize = $_POST['averageSize'] ;
}
else{
    echo("no average size given");
}
if($_POST['type']!=null){
    $type = $_POST['type'] ;
}
else{
    echo("no type given");
}
if($_POST['weakTo']!=null){
    $weakTo = $_POST['weakTo'] ;
}
else{
    echo("no weakness given");
}
if($_POST['canEvolve'] != null){
    $canEvolve = $_POST['canEvolve'] ;
}
else{
    echo("no evolution given");
}
//if($_POST['img'] == null){
    $img = "mon.img"; // figure out best way to add in image
//}
if($_POST['canEvolve'] != null && $_POST['weakTo'] != null&& $_POST['type'] != null&& $_POST['averageSize'] != null&& $_POST['shinyColor'] != null&& $_POST['evolution'] != null && $_POST['Pokemon'] != null){
$new_pokemon = [
    
    'name' => $pokemon ,
    'evolution' => $evolution,
    'shinyColor' =>    $shinyColor ,
    'averageSize' =>  $averageSize ,
    'type' =>   $type,
    'weakTo' =>  $weakTo ,
    'canEvolve' =>  $canEvolve,
    'img' =>   $img,
];
$pokemon_list['pokemon'][] = $new_pokemon;

// Encode the updated data back to JSON
$updated_json = json_encode($pokemon_list, JSON_PRETTY_PRINT);

// Write the updated JSON data back to the file
file_put_contents($json_file, $updated_json);
}
}


// Redirect back to the HTML page
//header('Location: lab8.php'); // by using this i can call a link that executes php and stay on same page
//rework from ground up based off of php video
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href = lab8.php>Home</a>
<form action="database.php" method="post">
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
   
</body>
</html>