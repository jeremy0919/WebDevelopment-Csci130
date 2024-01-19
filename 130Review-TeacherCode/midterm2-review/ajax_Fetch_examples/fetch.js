// app.js

function saveName() {
    var nameInput = document.getElementById('nameInput').value;

    fetch('saveName.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'name=' + encodeURIComponent(nameInput),
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

function getName() {
    fetch('getName.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .then(data => {
        var name = data.name || 'No name found';
        document.getElementById('output').innerHTML = '<p>Name: ' + name + '</p>';
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

// Initial load of the name
getName();