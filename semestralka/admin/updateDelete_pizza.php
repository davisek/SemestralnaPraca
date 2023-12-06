<?php

$name = $ingrediens = $weight = $price = $img = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include "../assets/dbConnect.php";
    $id = $_POST["id"];
    if (isset($_POST["btnDelete"])) {

        $sql = "DELETE FROM pizza_menu_list WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

    } else if (isset($_POST["btnUpdate"])) {

        $name = test_input($_POST["name"]);
        $ingrediens = test_input($_POST["ingrediens"]);
        $weight = test_input($_POST["weight"]);
        $price = test_input($_POST["price"]);
        $img = test_input($_POST["img"]);

        $sql = "UPDATE pizza_menu_list SET 
            pizza_name = '$name', 
            pizza_ingrediens = '$ingrediens',
            pizza_weight = '$weight',
            pizza_price = '$price',
            pizza_img = '$img'
        WHERE id = '$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

    }
    $conn->close();
}

header('Location: index.php');
?>