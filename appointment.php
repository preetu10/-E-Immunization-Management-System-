<?php
include('message.php');
if(isset($_POST['btn']))
{
$email=$_POST['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Appointment</title>

  <link rel="stylesheet" href="./assets/css/maicons.css">

  <link rel="stylesheet" href="./assets/css/bootstrap.css">

  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="./assets/css/theme.css">
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
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.php">Vaccine Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Events</a>
          </ul>
        </div> 
      </div> 
    </nav>
  </header>
  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="color: #00D9A5">Make an Appointment</h1>

      <form class="main-form" action= "appointmentcon.php" method="POST">
        <div class="row mt-5 ">
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input required type="text" name="email" class="form-control" value="<?php echo $email ?>" placeholder="Email address"  readonly>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <select name="vaccine"  class="custom-select">
             <option value="" disabled selected hidden>Please Choose Vaccine</option>
              <option value="BCG">BCG</option>
              <option value="Pentavalent">Pentavalent</option>
              <option value="PCV">PCV</option>
              <option value="OPV">OPV</option>
              <option value="IPV">IPV</option>
              <option value="MR">MR</option>
              <option value="TT">TT</option>
              <option value="Rotarix">Rotavirus</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input required type="text" name="dose" class="form-control" placeholder="Enter Dose Number">
          </div>
        </div>

        <button type="submit" name ="btn" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
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
<?php
} 
?>