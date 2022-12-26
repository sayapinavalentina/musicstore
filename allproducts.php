<?php
session_start();
require_once('./elements/cards.php');
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
    <script src="https://kit.fontawesome.com/b29e2bce17.js" crossorigin="anonymous"></script>
  </head>
<body>    
        <?php
             include ('./elements/header.php');
        ?>

  <div class="container mt-3 p-5">
    <section class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Товары</h1>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Сортировать
              </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item active" href="#">По наименованию</a></li>
                  <li><a class="dropdown-item" href="#">По возрастанию цены</a></li>
                  <li><a class="dropdown-item" href="#">По убыванию цены</a></li>
                  <li><a class="dropdown-item" href="#">По году производства</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">По умолчанию</a></li>
                </ul>
            </div>
        </div>
      </div>


   <div class="album bg-light">
      <div class="container mb-5">
        <div class="row text-center">
         <?php
            getProduct();
         ?>
        </div>
</div>
</div>
<?php
     include ('./elements/footer.php');
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
