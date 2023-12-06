<?php

$name = $ingrediens = $weight = $price = $img = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['btnAdd'])) {
        include "../assets/dbConnect.php";
        $name = test_input($_POST["name"]);
        $ingrediens = test_input($_POST["ingrediens"]);
        $weight = test_input($_POST["weight"]);
        $price = test_input($_POST["price"]);
        $img = test_input($_POST["img"]);

        $sql = "INSERT into pizza_menu_list 
        (pizza_name, pizza_ingrediens, pizza_weight, pizza_price, pizza_img) 
        VALUES ('$name', '$ingrediens', '$weight', '$price', '$img')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}

header('Location: index.php');
?>
