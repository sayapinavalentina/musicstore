<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">Music House</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">О нас</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./allproducts.php">Каталог</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./location.php">Где нас найти?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./cart.php">Корзина</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./settings.php">Сменить пароль</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <button class="btn btn-outline-light m-1" name="btnlog" onclick="location.href='login.php'" type="submit">Вход</button>
        </form>
        <form class="d-flex" role="search">
          <button class="btn btn-outline-light m-1"  name="btnreg" type="submit">Регистрация</button>
        </form>
      </div>
    </div>
  </nav>