<?php

require ('koneki.php');
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the input data
    if (empty($username) || empty($full_name) || empty($password)) {
        $error = "Please fill in all the fields";
    } else {
        // Insert the data into the database
        // (assuming you have a database connection and a users table)
        $query = "INSERT INTO registrasiuser (full_name,username,  password) VALUES ('$full_name','$username', '$password')";
        $result = mysqli_query($conn, $query);
      if (isset($_POST['regist'])){
        if ($result) {
            header("Location: tampilan.php");
            exit();
        } else {
            $error = "Registration failed";
        }
    }
}
}
?>


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
  <link rel="stylesheet" href="regist.css">
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
        </div>
      </nav>
    </div>
    <nav class="navbar navbar-secondary navbar-expand-lg">
      <div class="container">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="tampilan.php" class="nav-link"><i class="fas fa-home"></i><span>Beranda</span></a>
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
        <ul class="navbar-nav navbar-right">
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
          </ul>
      </div>
    </nav>
    <div class="main-wrapper container">
      <div class="main-content">
      <div class="col-12">
        <form action="" method= 'post'>
            <div class="card">
              <div class="card-body">
                <div class="form-group">
                <label class="text-dark">Nama Lengkap</label>
                  <input type="full_name" name="full_name" class="form-control" placeholder="Masukan Nama Lengkap" required="">
                </div>
                <div class="form-group">
                  <label class="text-dark">username</label>
                  <input type="username" name="username" class="form-control" placeholder="Masukan username" required="">
                </div>
                <div class="form-group">
                  <label class="text-dark">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Masukan password " required="">             
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id="remember" type="checkbox" name="remember">
                  </label>
                </div>  
                <a href=""><button name="regist" class="btn btn-primary" type="submit">Registrasi</button></a>
              </div>  
            </div>  
          </div>
          </form>  
        </div>    
      </div>  
    </div>  
    </html>  
                  
                  

</body>
