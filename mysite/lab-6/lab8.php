<?php

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>JSON Parsing Example</title>
    <script>
Object.size = function(obj) {
  var s = 0,
    key;
  for (key in obj) {
    if (obj.hasOwnProperty(key)) s++;
  }
  return s;
}; 
// Get the size of an object
var size =5;
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
            x=size;
            generate1(x)
        }
    }
    function next(){ // add size instead of hardcode 5
        if(x<size){
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

function generateE(i){
    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function(){
        if(httpRequest.readyState === XMLHttpRequest.DONE){
      //      alert(httpRequest.status);
            if(httpRequest.status === 200){
                var data = JSON.parse(httpRequest.responseText); // object
                var pokemon = data.pokemon[i];
                    let f = document.createElement('form');
                    f.setAttribute("id",x+"form");
                   // let d1 = document.createElement('input')
                    let d1 = document.createTextNode(pokemon.name);
                    let d2 = document.createTextNode(pokemon.evolution);
                    let d3 = document.createTextNode(pokemon.shinyColor);
                    let d4 = document.createTextNode(pokemon.averageSize);
                    let d5 = document.createTextNode(pokemon.type);
                    let d6 = document.createTextNode(pokemon.weakTo);
                    let d7 = document.createTextNode(pokemon.canEvolve);
                    f.appendChild(d1);
                    f.appendChild(d2);
                    f.appendChild(d3);
                    f.appendChild(d4);
                    f.appendChild(d5);
                    f.appendChild(d6);
                    f.appendChild(d7);
                    body =document.getElementById("temp");
                    body.appendChild(f);
                    let but = document.createElement("button");
                    but.setAttribute("value","edit");
                    but.setAttribute("onclick","edit()"); 
                    body.appendChild(but);
                    function edit(){ // needs fixing but general idea, remove information and replace with input
                        body.removeChild(f);
                        newF = document.createElement('form');
                        let d1 = document.createElement('input');
                        let d2 =document.createElement('input');
                        let d3 = document.createElement('input');
                        let d4 = document.createElement('input');
                        let d5 = document.createElement('input');
                        let d6 = document.createElement('input');
                        let d7 = document.createElement('input');
                        f.appendChild(d1);
                        f.appendChild(d2);
                        f.appendChild(d3);
                        f.appendChild(d4);
                        f.appendChild(d5);
                        f.appendChild(d6);
                        f.appendChild(d7);
                        body =document.getElementById("temp");
                        body.appendChild(f);
                        }
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
   
    <a href = database.php>insert New Pokemon</a>
    <div id ="temp"></div>
    <input type ="button" value ="test" onclick="generateE(x)">
    
</body>
</html>

