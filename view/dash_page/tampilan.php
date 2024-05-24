
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Topup game terpercaya - FSGameshop</title>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow">
  <meta name="title" content="Topup game terpercaya - FSGameshop">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="icon" href="images/1701750520078.png" type="image/png">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<!-- Navbar dan Header -->

<body class="layout-3">
  <div class="preloader" style="display: none;">
    <div class="loading">
      <img src="images/loader.gif" width="80">
    </div>
  </div>

  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container">

          <a href="#" class="navbar-brand sidebar-gone-hide">
            <img src="images/1701714126067.png" class="img-fluid d-none d-md-block" width="160px">
            <img src="images/1701714126067.png" class="img-fluid d-lg-none d-md-inline-block" width="160px">
          </a>
          <a href="#" class="d-lg-none d-md-inline-block"><img src="images/1701714126067.png" class="img-fluid"
              width="155px"></a>

              <ul class="navbar-nav navbar-right">
  <?php
  session_start();
  if (isset($_SESSION['username'])) {
    echo '
    <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <span class="rounded-circle mr-1"> <i class="fas fa-user"></i> </span>
        <div class="d-sm-none d-lg-inline-block">' . $_SESSION['username'] . '</div>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="logout.php" class="dropdown-item has-icon">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </div>
    </li>
    ';
  } else {
    echo '
    <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <span class="rounded-circle mr-1"> <i class="fas fa-sign-in-alt"></i> </span>
        <div class="d-sm-none d-lg-inline-block">Masuk/Daftar</div>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="login.php" class="dropdown-item has-icon">
          <i class="fas fa-sign-in-alt"></i> Masuk
        </a>
        <a href="regist.php" class="dropdown-item has-icon">
          <i class="fas fa-user-plus"></i> Buat Akun
        </a>
      </div>
    </li>
    ';
  }
  ?>
</ul>
        </div>
      </nav>
    </div>
    <nav class="navbar navbar-secondary navbar-expand-lg">
      <div class="container">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="fas fa-home"></i><span>Beranda</span></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="fas fa-search"></i><span>Periksa Pesanan</span></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="fas fa-list"></i><span>Daftar Layanan</span></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="fas fa-envelope"></i><span>Grup Komunitas</span></a>
          </li>
          <li class="nav-item dropdown">
          </li>
        </ul>
      </div>
    </nav>
    <div class="main-wrapper container">
      <div class="main-content">
        <div class="banner mt-md-2">
          <div id="slider_banner" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#slider_banner" data-slide-to="1"></li>
              <li data-target="#slider_banner" data-slide-to="2"></li>
              <li data-target="#slider_banner" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/1701781750086.jpeg" class="img-fluid" style="border-radius: 25px">
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="Cari">
        <input class="form-control ml-auto text-center pl-arena" name="search_kat" id="search_kat"
          placeholder="Cari Produk" aria-label="Search">
        <ul class="list-group" id="result" style="width: 360px;"></ul>
      </div>

      <section class="section" id="section-3">
        <div class="section-body">
          <h2 class="text-dark"
            style="font-size: 16px; margin-top: 20px; margin-bottom: 10px; padding-left: 15px; padding-right: 15px; text-align: center;">
            ⚡ Joki game</h2>

          <!-- LIST GAME -->
          <div class="list-product">
            <div class="product">
              <a href="#" class="link-product product-new">
                <div class="borderhiden">
                  <img src="images/1705384531826.jpeg" alt="Joki Mobile Legend Murah" class="zoom"
                    style="display: block; border-radius: 6px; width: 100%; height: auto; border: 1px solid ;">
                </div>
                <div class="link-product">
                  Joki Mobile Legend
                </div>
              </a>
            </div>

            <div class="product">
              <a href="#" class="link-product product-new">
                <div class="borderhiden">
                  <img src="images/1705383611815.jpeg" alt="Joki Mobile Legend Murah" class="zoom"
                    style="display: block; border-radius: 6px; width: 100%; height: auto; border: 1px solid ;">
                </div>
                <div class="link-product">
                 Joki Pubg Mobile
                </div>
              </a>
            </div>

            <div class="product">
              <a href="#" class="link-product product-new">
                <div class="borderhiden">
                  <img src="images/1705383635817.jpeg" alt="Joki Mobile Legend Murah" class="zoom"
                    style="display: block; border-radius: 6px; width: 100%; height: auto; border: 1px solid ;">
                </div>
                <div class="link-product">
                 Joki Free Fire
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>


<script>
$(document).ready(function(){
  $('#dropdownMenuLink').click(function(){
    $('.dropdown-menu').toggle();
  });
});
</script>
</body>



</html>