document.addEventListener("DOMContentLoaded", function () {
    // Load and display objects when the page loads
    loadObjects();
});

function loadObjects() {
    // AJAX request to load objects from the server
    fetch('load_objects.php')
        .then(response => response.json())
        .then(data => displayObjects(data))
        .catch(error => console.error('Error loading objects:', error));
}

function displayObjects(objects) {
    const objectList = document.getElementById('objectList');
    objectList.innerHTML = '';

    // Display objects in the list
    objects.forEach(object => {
        const listItem = document.createElement('li');
        listItem.textContent = object.name;
        
        // Add a button to remove the object
        const removeButton = document.createElement('button');
        removeButton.textContent = 'Remove';
        removeButton.addEventListener('click', function () {
            removeObject(object.id);
        });

        listItem.appendChild(removeButton);
        objectList.appendChild(listItem);
    });
}

function addObject() {
    const objectName = document.getElementById('objectName').value;

    // AJAX request to add an object to the server
    fetch('add_object.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ name: objectName }),
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // If successful, reload and display the updated list of objects
                loadObjects();
            } else {
                console.error('Error adding object:', data.message);
            }
        })
        .catch(error => console.error('Error adding object:', error));
}

function removeObject(objectId) {
    // AJAX request to remove an object from the server
    fetch('remove_object.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ id: objectId }),
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // If successful, reload and display the updated list of objects
                loadObjects();
            } else {
                console.error('Error removing object:', data.message);
            }
        })
        .catch(error => console.error('Error removing object:', error));
}
document.addEventListener("DOMContentLoaded", function () {
    // Load and display objects when the page loads
    loadObjects();
});

// ... (previous code)

function formToCar() {
    const carName = document.getElementById('carName').value;

    // Create a JavaScript object representing a car
    const carObject = { name: carName };

    // Display the JavaScript object
    document.getElementById('carObjectDisplay').innerText = JSON.stringify(carObject, null, 2);
}

function retrieveCarFromServer() {
    // AJAX request to retrieve a single car from the server
    fetch('retrieve_car.php')
        .then(response => response.json())
        .then(data => alert('Car from Server:\n' + JSON.stringify(data)))
        .catch(error => console.error('Error retrieving car from server:', error));
}

function retrieveCarFromJSON() {
    // AJAX request to retrieve a single car from the JSON file
    fetch('retrieve_car_from_json.php')
        .then(response => response.json())
        .then(data => alert('Car from JSON:\n' + JSON.stringify(data)))
        .catch(error => console.error('Error retrieving car from JSON:', error));
}

function sendArrayOfCarsToServer() {
    const carsArray = [
        { name: 'Car1' },
        { name: 'Car2' },
        { name: 'Car3' },
    ];

    // AJAX request to send an array of cars to the server
    fetch('send_array_to_server.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ cars: carsArray }),
    })
        .then(response => response.json())
        .then(data => alert('Array of Cars sent to Server:\n' + JSON.stringify(data)))
        .catch(error => console.error('Error sending array to server:', error));
}

function retrieveAndSaveArrayOfCars() {
    // AJAX request to retrieve an array of cars from the server and save it into a JSON file
    fetch('retrieve_and_save_array.php')
        .then(response => response.json())
        .then(data => alert('Array of Cars retrieved and saved:\n' + JSON.stringify(data)))
        .catch(error => console.error('Error retrieving and saving array:', error));
}
