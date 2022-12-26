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
    <!-- <?php include './css/style.css'; ?> -->
    <link href="./css/style.css" rel="stylesheet">
  </head>
<body>    
<div>
        <?php
             include ('./elements/header.php');
        ?>
         <div class="container-fluid m-3 p-5">
    <h1 class="mt-5 mb-5">Где нас найти?</h1>
    
    <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35845.470465659135!2d37.47361563032419!3d55.83938117319633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b5483be3ba42cd%3A0xb7237caddcaae46d!2z0JrQvtC70LvQtdC00LYg0L_RgNC10LTQv9GA0LjQvdC40LzQsNGC0LXQu9GM0YHRgtCy0LAg4oSWMTE!5e0!3m2!1sru!2sru!4v1671441729386!5m2!1sru!2sru" 
            width="1200" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
    <hr class=" col-md-2 mb-5">
    <div class="row g-5">
      <div class="col-md-6">
        <h2>Адрес: </h2>
        <p>г. Москва, Ленинградское шоссе, д. 13 а </p>
        <h2>Номер телефона:</h2>
        <p>+7 (786) 347-45-99 </p>
        <p>+7 (736) 545-34-45 </p>
      </div>
    

      <div class="col-md-6">
        <h2>E-mail:</h2>
        <p>musicshopio@qewewe.ru</p>
        <p>musicshopsi@yandex.ru</p>
        
      </div>
    </div>
</div>

<?php
     include ('./elements/footer.php');
    ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>