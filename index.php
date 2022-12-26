<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Music House</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/img/icon.png">
    <link href="style.css" rel="stylesheet">
  </head>
<body>    
<div>
        <?php
             include ('./elements/header.php');
        ?>
<div class="container mt-5 pt-5">
    <div class="row featurette">
      <div class="col-12 col-md-6">
        <h2 class="featurette-heading">Познавай тот ритм,  <span class="text-muted">что в жизни человеческой сокрыт.</span></h2>
        <p class="lead">Девиз компании "Music House"</p>
      </div>
      <div class="col-12 col-md-6 ">
        <img src="/img/logo.png" width="100%">
      </div>
    </div>
    <hr class="featurette-divider">

  </div>
  <div class="container marketing">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/ууууу.png">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Новинка компании</h1>
            <p>Гитара "Kepma F0E GA WA" которая будет пылиться у вас на шкафу.</p>
            <p><a class="btn btn-lg btn-outline-light" href="allproducts.php">Купить товар</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="/img/ууу.png">
        <div class="container">
          <div class="carousel-caption">
            <h1>Новинка компании</h1>
            <p>Великолепная акустическая гитара "aNueNue L10", подойдет к вашему интерьеру.</p>
            <p><a class="btn btn-lg btn-outline-light" href="allproducts.php">Купить товар</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="/img/уу.png">
        <div class="container">
          <div class="carousel-caption">
            <h1>Новинка компании</h1>
            <p>Гитара "Sigma DM12-1" чтоб сыграть "Медлячок" во дворе.</p>
            <p><a class="btn btn-lg btn-outline-light" href="allproducts.php">Купить товар</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="/img/у.png">
        <div class="container">
          <div class="carousel-caption">
            <h1>Новинка компании</h1>
            <p>Не знаете что подарить другу? Гитара "Enya NEXG"!</p>
            <p><a class="btn btn-outline-light" href="allproducts.php">Купить товар</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="/img/уууу.png">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Новинка компании</h1>
            <p>Гитара "Parkwood W81-OP" с нежными струнами для ваших пальчиков.</p>
            <p><a class="btn btn-lg btn-outline-light" href="allproducts.php">Купить товар</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <hr class="featurette-divider">
  </div>

    <?php
     include ('./elements/footer.php');
    ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

