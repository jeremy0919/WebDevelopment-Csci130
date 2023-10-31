<?php
// Read the existing JSON file
$json_file = 'class.json';
$json_data = file_get_contents($json_file);
$pokemon_list = json_decode($json_data, true);

// Get data from the form
$new_pokemon = [
    'name' => $_POST['Pokemon'],
    'evolution' => $_POST['evolution'],
    'shinyColor' => $_POST['shinyColor'],
    'averageSize' => $_POST['averageSize'],
    'type' => $_POST['type'],
    'weakTo' => $_POST['weakTo'],
    'canEvolve' => $_POST['canEvolve'],
    'img' => 'mon.jpg',
];

// Add the new Pokemon to the list
$pokemon_list['pokemon'][] = $new_pokemon;

// Encode the updated data back to JSON
$updated_json = json_encode($pokemon_list, JSON_PRETTY_PRINT);

// Write the updated JSON data back to the file
file_put_contents($json_file, $updated_json);

// Redirect back to the HTML page
header('Location: lab8.php');
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>JSON Parsing Example</title>
    <script>
        var x =0;
function generate(){
    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function(){
        if(httpRequest.readyState === XMLHttpRequest.DONE){
      //      alert(httpRequest.status);
            if(httpRequest.status === 200){
                var data = JSON.parse(httpRequest.responseText); // object
                var json_html = '"{"pokemon":[ {"name":"charmander", "evolution": "1", "shinyColor":"gold", "averageSize":"20kg", "type":"fire", "weakTo":"water", "canEvolve":"yes", "img":"char.png"}, {"name":"charmealon", "evolution": "2", "shinyColor":"gold", "averageSize":"20kg", "type":"fire", "weakTo":"water", "canEvolve":"yes", "img":"charmealon.png"}, {"name":"charizard", "evolution": "3", "shinyColor":"black", "averageSize":"20kg", "type":"fire", "weakTo":"water", "canEvolve":"no", "img":"charizard.png"}, {"name":"squirtle", "evolution": "1", "shinyColor":"teal", "averageSize":"20kg", "type":"water", "weakTo":"grass", "canEvolve":"yes", "img":"squirtle.jpg"}, {"name":"warturtle", "evolution": "2", "shinyColor":"gold", "averageSize":"20kg", "type":"water", "weakTo":"grass", "canEvolve":"yes", "img":"wartortle.jpg"}, {"name":"blastoise", "evolution": "3", "shinyColor":"purple", "averageSize":"20kg", "type":"water", "weakTo":"grass", "canEvolve":"no", "img":"blastoise.jpg"}';
                document.getElementById("json-container").innerHTML = json_html;
                
            }
        }
    };
    httpRequest.open('GET',"class.json",true) // path = local path
    httpRequest.send();
}
/*
function insertItem(){
    const fs = require('fs'); // Node.js file system module

// Read the existing JSON file
fs.readFile('class.json', 'utf8', (err, data) => {
    if (err) {
        console.error('Error reading the JSON file:', err);
        alert("error")
        return;
    }

    // Parse the JSON data into an array
    const Object = JSON.parse(data);

    // Create a new car object
    const newMon = {
        name: document.getElementsByName("Pokemon"), // add in php to parse form
        Evolution: document.getElementsByName("evolution"),
        shinyColor: document.getElementsByName("shinyColor"),
        averageSize: document.getElementsByName("averageSize"),
        type: document.getElementsByName("type"),
        weakTo: document.getElementsByName("weakTo"),
        canEvolve: document.getElementsByName("canEvolve"),
        img: "mon.jpg"
    };
    alert("made it to newMon")

    Object.push(newMon);

    // Serialize the updated array back to JSON
    const updatedJson = JSON.stringify(Object, null, 2); // 2 spaces for indentation

    // Write the updated JSON data back to the file
    fs.writeFile('class.json', updatedJson, 'utf8', (err) => {
        if (err) {
            console.error('Error writing the JSON file:', err);
        } else {
            console.log('New car added to class.json');
        }
    });
});

}*/
    function previous(){
        if(x>0){
            x = x-1;
            generate1(x);
        }
        else{
            x=5;
            generate1(x)
        }
    }
    function next(){
        if(x<5){
            x = x+1;
            generate1(x);
        }
        else{
            x=0
            generate1(x)
        }
    }
    function generate2(){
        generate1(x)
    }
    function generate1(i){
    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function(){
        if(httpRequest.readyState === XMLHttpRequest.DONE){
      //      alert(httpRequest.status);
            if(httpRequest.status === 200){
                var data = JSON.parse(httpRequest.responseText); // object
                var json_html = "";
              
                    var pokemon = data.pokemon[i];
                    json_html += "<h2>" + pokemon.name + "</h2>";
                    json_html += "<p>Evolution: " + pokemon.evolution + "</p>";
                    json_html += "<p>Shiny Color: " + pokemon.shinyColor+ "</p>";
                    json_html += "<p>Average Size: " + pokemon.averageSize + "</p>";
                    json_html += "<p>Type: " + pokemon.type + "</p>";
                    json_html += "<p>Weak To: " + pokemon.weakTo + "</p>";
                    json_html += "<p>Can Evolve: " + pokemon.canEvolve + "</p>";
                    json_html += "<img src='" + pokemon.img + "' alt='" + pokemon.name + "'><br>";
                document.getElementById("json-container1").innerHTML = json_html;
            }
        }
    };
    httpRequest.open('GET',"class.json",true) // path = local path
    httpRequest.send();
}
    </script>
</head>
<body>

    <div id="json-container"></div>
    <input type="button" value="Press button to display Generate Pokemon JSON representation" onclick="generate()">
    <input type="button" value="Press button to display Pokemon" onclick="generate2()">
    <div id="json-container1"></div>
    <input type="button" value="previous" onclick="previous()">
    <input type="button" value="next" onclick="next()">

    <form action="insert_pokemon.php" method="post">
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

