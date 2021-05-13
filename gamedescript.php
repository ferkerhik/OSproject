<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/main.css" />

    <script src="./js/bootstrap/bootstrap.min.js"></script>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="afterlogin.php">OS-Game</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Chan</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="orderlist.php">Orderlist</a>
          </li>
        </ul>
      </div>
    </nav>
  <!--navbar -->
    <?php

    require('dbconnect.php');
    $id=$_GET["idp"];

    $sql = "SELECT * FROM `product` WHERE `id`=$id";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);?>
    <div class="container-middle">
          <div class="games my-5-middle">
              <div class="game-card-middle">
                  <div class="game-card-image-middle">
                     <?php echo '<img src="data:image;base64,'.base64_encode($row['img']).'" alt="Image" style="width: 400px; height: 300px;" >' ; ?>
                  </div>
                  <div class="game-card-description-middle">
                      <p class="game-card-title-middle"><?php echo "ชื่อGame :".$row["name"]."<br>"; ?></p>
                      <p class="game-card-descript-middle"><?php echo "คำอธิบาย :".$row["descript"]."<br>";?></p>
                      <p class="game-card-price-middle"><?php echo "ราคา :".$row["price"]."<br>";?></p>
                  </div>
              </div>
          </div>
      </div>

      <div class="game-card-actions">
            <button class="game-card-buy"><a href="insertdata.php?idp=<?php echo $id?>" onclick="return confirm('ต้องการซื้อจริงๆหรือไม่?')">ซื้อ</a></button>
    </div>
  </body>
</html>
