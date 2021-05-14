<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="login.html">


    <script src="./js/bootstrap.min.js"></script>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">OS-Game</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li id="login"><a class="nav-link" href="#login">Login</a></li>
    </ul>
  </div>
</nav>
  <!--navbar -->

  <div class="container">
      <div class="games my-5">
        <div class="game-card">
          <div class="game-card-image">
            <img
              src="https://cdn.cloudflare.steamstatic.com/steam/apps/1091500/header.jpg?t=1615811936"
              alt="game"
              loading="lazy"
            />
          </div>
          <div class="game-card-description">
            <p class="game-card-title">Cyberpunk 2077</p>
            Cyberpunk 2077 เป็นเกมแนวแอ็คชันผจญภัยแบบโลกเปิดที่มีเนื้อเรื่องอยู่ในเมืองไนท์ซิตี้
            มหานครที่เต็มไปด้วยอำนาจ เสน่ห์ และการดัดแปลงร่างกาย คุณจะได้รับบทเป็นวี...
          </div>
          <div class="game-card-actions">
            <button class="game-card-buy"><a href="insertdata.php?idp=1" onclick="return confirm('ต้องการซื้อจริงๆหรือไม่?')">ซื้อ</a></button>
            <button class="game-card-view"><a href="gamedescript.php?idp=1">รายละเอียดเพิ่มเติม</a></button>
          </div>
        </div>

        <div class="game-card">
          <div class="game-card-image">
            <img
              src="https://cdn.cloudflare.steamstatic.com/steam/apps/271590/header.jpg?t=1618856444"
              alt="game"
              loading="lazy"
            />
          </div>
          <div class="game-card-description">
            <p class="game-card-title">Grand Theft Auto V</p>
            When a young street hustler, a retired bank robber 
            and a terrifying psychopath find themselves entangled... 
          </div>
          <div class="game-card-actions">
            <button class="game-card-buy"><a href="insertdata.php?idp=2" onclick="return confirm('ต้องการซื้อจริงๆหรือไม่?')">ซื้อ</a></button>
            <button class="game-card-view"><a href="gamedescript.php?idp=2">รายละเอียดเพิ่มเติม</a></button>
          </div>
        </div>

        <div class="game-card">
          <div class="game-card-image">
            <img
              src="https://cdn.cloudflare.steamstatic.com/steam/apps/892970/header.jpg?t=1617258628"
              alt="game"
              loading="lazy"
            />
          </div>
          <div class="game-card-description">
            <p class="game-card-title">Valheim</p>
            Your trials begin at the disarmingly peaceful centre of Valheim, 
            but the gods reward the brave and glory awaits... 
          </div>
          <div class="game-card-actions">
            <button class="game-card-buy"><a href="insertdata.php?idp=3" onclick="return confirm('ต้องการซื้อจริงๆหรือไม่?')">ซื้อ</a></button>
            <button class="game-card-view"><a href="gamedescript.php?idp=3">รายละเอียดเพิ่มเติม</a></button>
          </div>
        </div>
      <!-- games -->
    </div>
    <!-- container -->

    <div class="popup">
      <div class="close-btn">&times;</div>
      <div class="form">
        <h2>Log in</h2>
        <div class="form-element">
          <label for="email">Email</label>
          <input type="text" id="email" placeholder="Enter email">
        </div>
        <div class="form-element">
          <label for="password">Password</label>
          <input type="password" id="password" placeholder="Enter password">
        </div>
        <div class="form-element">
          <input type="checkbox" id="remember-me">
          <label for="remember-me">Remember me</label>
        </div>
        <div class="form-element">
          <button><a href="afterlogin.html">Sign in</a></button>
        </div>
        <div class="form-element">
          <a href="#">Forgot password?</a>
        </div>
      </div>
    </div>
  </body>

  <script>
     document.querySelector("#login").addEventListener("click",function(){
        document.querySelector(".popup").classList.add("active");
    });
    document.querySelector(".popup .close-btn").addEventListener("click",function(){
        document.querySelector(".popup").classList.remove("active");
    });
  </script>
</html>
