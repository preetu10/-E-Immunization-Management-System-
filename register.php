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

  <title>register</title>

  <link rel="stylesheet" href="./assets/css/maicons.css">

  <link rel="stylesheet" href="./assets/css/bootstrap.css">

  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="./assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="./assets/css/theme.css">

  <link rel="stylesheet" href="./assets/css/register.css">

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
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Type to search..." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Vaccine Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Events</a>
            </li>
             <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="login.php">Login</a>
            </li>
          </ul>
        </div> 
      </div> 
    </nav>
  </header>

<h3 class="text-danger text-center">        
<?php 
if(isset($_SESSION['message']))
{
    echo $_SESSION['message'];
     
    unset($_SESSION['message']);
}
?> </h3> 

<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="color: #00D9A5">Register Here</h1>

      <form class="main-form" action="registercode.php" method="POST">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input required type="text" name="fname" class="form-control" placeholder="Enter First Name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="ffname" class="form-control" placeholder="Enter Father's First Name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="flname" class="form-control" placeholder="Enter Father's Last Name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="fnid" class="form-control" placeholder="Enter Father's NID">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <select name="division" class="custom-select">
              <option value="" disabled selected hidden>Please Choose Division</option>
              <option value="Chattogram">Chattogram</option>
              <option value="Dhaka">Dhaka</option>
              <option value="Kumilla">Kumilla</option>
              <option value="Sylhet">Sylhet</option>
              <option value="Rongpur">Rongpur</option>
              <option value="Rajshahi">Rajshahi</option>
              <option value="Barishal">Barishal</option>
              <option value="Khulna">Khulna</option>
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="email" name="email" class="form-control" placeholder="Enter Email">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <select name="gender" class="custom-select">
              <option value="" disabled selected hidden>Please Choose Gender</option>
              <option value="Male">MALE</option>
              <option value="Female">FEMALE</option>
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input placeholder="Enter Date of Birth" type="date" name="dob" onfocus="(this.type='date')" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="password" name="rpassword" class="form-control" placeholder="Confirm Password">
          </div>
        </div>
        <button type="submit" name="register_btn" class="btn btn-primary mt-3 wow zoomIn">Register</button>
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