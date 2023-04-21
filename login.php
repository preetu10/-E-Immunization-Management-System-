<?php
session_start();
include('message.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <title>login</title>

  <link rel="stylesheet" href="./assets/css/maicons.css">

  <link rel="stylesheet" href="./assets/css/bootstrap.css">

  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="./assets/css/theme.css">

    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

</head>
<body>
<div class="back-to-top"></div>

<header>
     <img src="./assets/img/logo.png" class="logo">
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <form action="#">
          <div class="input-group input-navbar">
          </div>
        </form>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vaccines.php">Vaccine Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Events</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="register.php">Register</a>
            </li>
          </ul>
        </div> 
      </div> 
    </nav>
  </header>


<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="color: #00D9A5">Login Here</h1>

      <form action="logincode.php" method="POST" class="main-form">
        <div class="row mt-5 ">
           <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="email" name="email" class="form-control" placeholder="Enter Email">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
          </div>
        </div>
        <button type="submit" name="login_btn" class="btn btn-primary mt-3 wow zoomIn">Login</button>
      </form>
    </div> 
</div>             

<script src="./assets/js/jquery-3.5.1.min.js"></script>

<script src="./assets/js/bootstrap.bundle.min.js"></script>

<script src="./assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="./assets/vendor/wow/wow.min.js"></script>

<script src="./assets/js/theme.js"></script>
  
</body>
</html>