<!DOCTYPE html>
<html lang="sk">
<?php include "../assets/dbConnect.php";
$sql = "SELECT * FROM pizza_menu_list";
$result = $conn->query($sql);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Domov</title>
    <link rel="stylesheet" href="../assets/css/style.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
<section id="adminPage">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sideBar container text-center pt-5">
            <h1>Dávid Barta</h1>
            <p>Admin</p>
        </div>
        <div class="col-md-10">
            <div class="row center mt-2">
                <div class="col">
                    <h2>Meno&nbsp;pizze</h2>
                </div>
                <div class="col-6">
                    <h2>Ingrediencie&nbsp;do&nbsp;pizze</h2>
                </div>
                <div class="col">
                    <h2>Váha</h2>
                </div>
                <div class="col">
                    <h2>Cena</h2>
                </div>
                <div class="col">
                    <h2>Meno&nbsp;obrázku</h2>
                </div>
                <div class="col"></div>
                <div class="col"></div>
            </div>
            <hr class="mt-1">
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { ?>
                <form id="pizzaList" class="mb-3" action="updateDelete_pizza.php" method="post">
                    <div class="form-row">
                        <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                        <div class="col">
                            <input type="text" name="name" class="form-control" value="<?php echo $row["pizza_name"] ?>" required>
                        </div>
                        <div class="col-6">
                            <input type="text" name="ingrediens" class="form-control" value="<?php echo $row["pizza_ingrediens"] ?>" required>
                        </div>
                        <div class="col">
                            <input type="number" name="weight" class="form-control" value="<?php echo $row["pizza_weight"] ?>" required>
                        </div>
                        <div class="col">
                            <input type="number" name="price" class="form-control" value="<?php echo $row["pizza_price"] ?>" required>
                        </div>
                        <div class="col">
                            <input type="text" name="img" class="form-control" value="<?php echo $row["pizza_img"] ?>" required>
                        </div>
                        <div class="col">
                            <input class="btn btn-info" name="btnUpdate" type="submit" value="Uložiť zmeny" required>
                        </div>
                        <div class="col">
                            <input class="btn btn-danger" name="btnDelete" type="submit" value="Odstrániť" required>
                        </div>
                    </div>
                </form>
            <?php }
        } else {
            echo "0 results";
        }
        ?>
            <hr>
            <form class="mb-3" action="add_pizza.php" method="post">
                <div class="form-row ">
                    <div class="col">
                        <input type="text" name="name" class="form-control" placeholder="Meno pizze" required>
                    </div>
                    <div class="col-6">
                        <input type="text" name="ingrediens" class="form-control" placeholder="Ingrediencie" required>
                    </div>
                    <div class="col">
                        <input type="number" name="weight" class="form-control" placeholder="Váha" required>
                    </div>
                    <div class="col">
                        <input type="number" name="price" class="form-control" placeholder="Cena" required>
                    </div>
                    <div class="col">
                        <input type="text" name="img" class="form-control" placeholder="Meno obrázku" required>
                    </div>
                    <div class="col">
                        <input class="btn btn-success" name="btnAdd" type="submit" value="Pridať pizzu" required>
                    </div>
                    <div class="col"></div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>