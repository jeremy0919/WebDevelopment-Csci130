let currentIndex = 0;
let cars;

$(document).ready(function() {
    // Fetch JSON data using AJAX
    $.getJSON('mycollection.json', function(data) {
        cars = data;
        displayCar(currentIndex);
    });
});

function displayCar(index) {
    const car = cars[index];
    const carInfo = `
        <h2>${car.brand} ${car.model}</h2>
        <p>Year: ${car.year}</p>
        <p>Color: ${car.color}</p>
        <p>Body Style: ${car.bodyStyle}</p>
        <p>Transmission: ${car.transmission ? 'Automatic' : 'Manual'}</p>
        <p>Type: ${car.type}</p>
        <img src="${car.image}" alt="${car.brand} ${car.model}">
    `;
    $('#carInfo').html(carInfo);
}

function nextCar() {
    currentIndex = (currentIndex + 1) % cars.length;
    displayCar(currentIndex);
}

function previousCar() {
    currentIndex = (currentIndex - 1 + cars.length) % cars.length;
    displayCar(currentIndex);
}
