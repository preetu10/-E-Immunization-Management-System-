<?php
include('./config/dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Events</title>

  <link rel="stylesheet" href="./assets/css/maicons.css">

  <link rel="stylesheet" href="./assets/css/bootstrap.css">

  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="./assets/vendor/animate/animate.css">

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
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vaccines.php">Vaccine Information</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(./assets/img/123.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <h1 class="font-weight-normal">Events</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
        <?php
        $query="SELECT * FROM event";
        $query_run = mysqli_query($con, $query);
        ?>
        <div class="row">
          <?php
            if(mysqli_num_rows($query_run) > 0)        
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {              
          ?>
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor" style="background: rgb(0,217,165);background: linear-gradient(90deg, rgba(0,217,165,1) 0%, rgba(124,221,198,1) 80%);">
                <div class="body">
                  <p class="text-xl mb-0" ><?php echo "<b>".$row['event_name']."</b>"; ?></p>
                  <p class="text-sm text-black" style="text-align:justify;"><?php echo $row['event_info'];?></p>
                  <div class="site-info">
                  <i class='fas fa-calendar-alt'></i> <?php
                                                      $orgdate=$row['dateofevent'];
                                                      $date=strtotime($orgdate);
                                                      $newdate=date("F d, Y",$date);
                                                      //$newdate=$newdate.":00";
                                                      $time=$row['event_time'];
                                                     echo "<b><font color='black'>".$newdate." ".$time."</font></b>";?>
                  </div>
                </div>
              </div>
            </div>
            <?php
                    }
                }
                ?>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>