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

    $sql = "SELECT * FROM `gameorder`";
    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);

    for($i=0;$i<$count;$i++){ ?>
      <?php $row = mysqli_fetch_array($result); ?>
      <div class="container">
          <div class="games my-5">
              <div class="game-card">
                  <div class="game-card-image">
                     <?php echo '<img src="data:image;base64,'.base64_encode($row['img']).'" alt="Image" style="width: 150px; height: 200px;" >' ; ?>
                  </div>
                  <div class="game-card-description">
                      <p class="game-card-title"><?php echo "ชื่อGame :".$row["name"]."<br>"; ?></p>
                      <?php echo "คำอธิบาย :".$row["descript"]."<br>"; 
                        echo "ราคา :".$row["price"]."<br>";?>
                  </div>
              </div>
          </div>
      </div>
      <?php
  }?>
  </body>
</html>
