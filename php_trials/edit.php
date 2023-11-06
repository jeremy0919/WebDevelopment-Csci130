<?php
include("databaseT.php");

if (isset($_POST["edit"])) {
    $id = $_POST["id"];

    $sql = "SELECT * FROM pokemon WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Display a form for editing
        echo '<form method="post" action="save.php">';
        echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
        echo '<label>Name:</label>';
        echo '<input type="text" name="name" value="' . $row["name"] . '"><br>';
        echo '<label>type:</label>';
        echo '<input type="text" name="type" value="' . $row["type"] . '"><br>';
        echo '<label>ShinyColor:</label>';
        echo '<input type="text" name="ShinyColor" value="' . $row["ShinyColor"] . '"><br>';
        echo '<label>stage:</label>';
        echo '<input type="text" name="stage" value="' . $row["stage"] . '"><br>';
        echo '<label>CanEvolve:</label>';
        echo '<input type="text" name="CanEvolve" value="' . $row["CanEvolve"] . '"><br>';
        echo '<label>size:</label>';
        echo '<input type="text" name="size" value="' . $row["size"] . '"><br>';
        echo '<label>weakTo:</label>';
        echo '<input type="text" name="weakTo" value="' . $row["weakTo"] . '"><br>';
        
        echo '<input type="submit" name="save" value="Save">';
        echo '</form>';
    }
}
?>