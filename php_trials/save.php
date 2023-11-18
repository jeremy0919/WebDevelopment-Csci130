<?php
include("databaseT.php");

if (isset($_POST["save"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $type = $_POST["type"];
    $ShinyColor = $_POST["ShinyColor"];
    $stage = $_POST["stage"];
    $CanEvolve = $_POST["CanEvolve"];
    $size = $_POST["size"];
    $weakTo = $_POST["weakTo"];
    
    // Update the SQL query to include all the fields you want to update
    $sql = "UPDATE Pokedex1 SET name = ?, type = ?, ShinyColor = ?, stage = ?, CanEvolve = ?, size = ?, weakTo = ? WHERE id = ?";

    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sssssssi", $name, $type, $ShinyColor, $stage, $CanEvolve, $size, $weakTo, $id);

    if ($stmt->execute()) {
        echo "Record updated successfully." . "<br>";
        $stmt->close(); // Close the prepared statement
        $connection->close(); // Close the database connection
        header("Location: main.php"); // Redirect to your home page
    } else {
        echo "Error updating record: " . $stmt->error;
    }
}
?>