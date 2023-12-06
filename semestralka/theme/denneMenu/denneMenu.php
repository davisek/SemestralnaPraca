<?php include "../include/header.php"; ?>
<?php include "../../assets/dbConnect.php";
$sql = "SELECT * FROM pizza_menu_list";
$result = $conn->query($sql);
?>

<div class="pizzaMenu container-fluid">
    <div class="text-center py-4">
      <h2 class="mb-3">DENNÉ MENU</h2>
      <p>Z bohatej ponuky našich pizz Vám na dnešný deň aktuálne ponúkame tieto položky. <br> Prajeme vám dobrú chuť.</p>
    </div>
    <div class="row pb-5">
    <?php
    if ($result->num_rows > 0) {
        $i = 0;
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $i++; ?>
            <div class="col-xl-4 col-lg-12 col-12">
                <div class="row">
                <?php if ($i <= 3) { ?>
                    <div class="col-lg-6 pizzaBg text-center p-0">
                        <img src="../images/<?php echo $row["pizza_img"] ?>.png" alt="pizza">
                    </div>
                <?php } ?>
                    <div class="col-lg-6 pt-3 pizzaInfo">
                        <h3><?php echo $row["pizza_name"] ?></h3>
                        <p><?php echo $row["pizza_ingrediens"] ?></p>
                        <p class="price"><?php echo $row["pizza_price"] ?>0 €</p>
                    </div>
                <?php if ($i > 3) { ?>
                    <div class="col-lg-6 pizzaBg text-center p-0">
                        <img src="../images/<?php echo $row["pizza_img"] ?>.png" alt="pizza">
                    </div>
                <?php } ?>
                </div>
            </div>
        <?php if($i >= 6) break; }
    } else {
        echo "0 results";
    }
    $sql = "SELECT * FROM pizza_menu_list";
    $result = $conn->query($sql);
    ?>
    </div>

    <div class="ourPrices text-center container pb-5">
      <h2 class="mb-3">NAŠE CENY ZA MENU</h2>
      <p>Naša kompletná ponuka pizz. Vyberte si z bohatej ponuky nášho jedálneho lístka. <br>
        Prajeme Vám dobrú chuť.</p>

      <div class="row priceMenu">
      <?php
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) { ?>
              <div class="col-lg-6 row my-2">
                  <div class="col-lg-2">
                      <img src="../images/<?php echo $row["pizza_img"]; ?>.png" alt="rukola">
                  </div>
                  <div class="col-lg-10 row">
                      <div class="col-2 text-left">
                          <p class="mb-0"><b><?php echo $row["pizza_name"]; ?></b></p>
                      </div>
                      <div class="col-10 text-right">
                          <p class="mb-0"><?php echo $row["pizza_weight"]; ?> g&nbsp;&nbsp;&nbsp;<b><?php echo $row["pizza_price"]; ?>0 €</b></p>
                      </div>
                      <div class="col-12 text-left">
                          <p><?php echo $row["pizza_ingrediens"]; ?></p>
                      </div>
                  </div>
              </div>
         <?php }
      } else {
          echo "0 results";
      }
      $conn->close();
      ?>
      </div>
    </div>
</div>

<?php include "../include/footer.php"; ?>
