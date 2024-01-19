<?php
//Step 2: Create 5 instances of the class that you created, then create an array containing these 5 objects,
//and transform this array into its JSON representation
include 'Car.php'; // Include the class file

$cars = [
    new Car('Toyota', 'Camry', 2022, 'Blue', 'Sedan', true, 'FWD', 'toyota_camry.jpg'),
    new Car('Honda', 'Civic', 2021, 'Red', 'Coupe', false, 'FWD', 'honda_civic.jpg'),
    new Car('Ford', 'Mustang', 2023, 'Yellow', 'Sport Car', true, 'RWD', 'ford_mustang.jpg'),
    new Car('Jeep', 'Wrangler', 2020, 'Green', 'SUV', true, '4WD', 'jeep_wrangler.jpg'),
    new Car('Chevrolet', 'Silverado', 2022, 'Black', 'Truck', false, '4WD', 'chevrolet_silverado.jpg')
];

$jsonData = json_encode($cars, JSON_PRETTY_PRINT);
file_put_contents('mycollection.json', $jsonData);
?>
