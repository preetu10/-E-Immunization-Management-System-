<?php
session_start();
include('./config/dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Vaccine's Information</title>

  <link rel="stylesheet" href="./assets/css/maicons.css">

  <link rel="stylesheet" href="./assets/css/vacinfo.css">

  <link rel="stylesheet" href="./assets/css/bootstrap.css">

  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="./assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <img src="./assets/img/logo.png" class="logo">
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
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
            <li class="nav-item  active">
              <a class="nav-link" href="vaccines.php">Vaccine Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Events</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(./assets/img/123.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <h1 class="font-weight-normal">Our Vaccines</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
    <div class="post">
        <h2>BCG</h2>
        <div class="post-content">
          <p style="text-align: justify">BCG, or Bacille Calmette-Guerin, is a vaccine for 
                  Tuberculosis (TB) disease.BCG vaccine usually is 
                  offered at about 28 days old. A single dose of 
                  BCG vaccine is required to provide lifetime immunity. 
                  Booster doses of BCG vaccine are not recommended by WHO.
                  The vaccine may be given to persons at high risk of developing TB.
                   It is also used to treat bladder tumors or bladder cancer.</p> 
        </div>
      </div>
      <hr />
      <div class="post">
        <!-- <p class="date">22 DE DEZEMBRO DE 2022</p> -->
        <h2>Pentavalent</h2>
        <div class="post-content">
          <p style="text-align: justify">A pentavalent vaccine, also known as
                     a 5-in-1 vaccine, is a combination vaccine 
                     with five individual vaccines conjugated into one.
                     This vaccine protects against Diphtheria, Tetanus, Whooping Cough,
                      Hepatitis B and Haemophilus Influenzae type B.Three doses are given. 
                      The first dose is given at 6 weeks old. The second and third doses 
                      are given at 10 and 14 weeks of age 
                      respectively also in the form of Pentavalent vaccines.</p>
        </div>
      </div>
      <hr />
      <div class="post">
        <h2>PCV</h2>
        <div class="post-content">
          <p style="text-align: justify">Pneumococcal Conjugate Vaccine helps protect against bacteria that cause
                     Pneumococcal disease. There are three Pneumococcal Conjugate vaccines (PCV13, PCV15, and PCV20).
                      The different vaccines are recommended for different people based on their age and medical status.
                    CDC recommends PCV13 or PCV15 for all infants as a series of 4 doses.
                     Given 1 dose at 2 months, 4 months, 6 months, and 12 through 15 months.</p>
        </div>
      </div>
      <hr />    
      <div class="post">
      <h2>OPV</h2>
        <div class="post-content">
          <p style="text-align: justify">OPV produces antibodies in the blood ('humoral' or serum immunity) to
                     all three types of poliovirus, and in the event of infection, this protects 
                     the individual against polio paralysis by preventing the spread of poliovirus 
                     to the nervous system.The first dose taken at birth. The next dose is taken when 
                     your child is 6 weeks old, the third dose at 10 weeks old, and the last dose at 14 
                     weeks old.OPV must only be administered orally. Two drops are delivered directly into
                      the mouth from the multi-dose vial by dropper or dispenser.</p>
        </div>
      </div>   
      <hr /> 
      <div class="post">
        <h2>IPV</h2>
        <div class="post-content">
          <p style="text-align: justify">Inactivated Poliovirus (IPV) vaccine and IPV -containing combination
                     vaccines contain polioviruses of types 1, 2 and 3 inactivated by formaldehyde.
                    Children usually get the Inactivated Poliovirus Vaccine (IPV)
                     at ages 2 months, 4 months, 6–18 months, and 4–6 years.
                     Sometimes IPV is given in a combination vaccine along with other vaccines.
                     In this case, a child might receive a fifth dose of IPV.</p>
        </div>
      </div>  
      <hr />  
      <div class="post">
        <h2>MR</h2>
        <div class="post-content">
          <p style="text-align: justify">MR campaign is a special campaign to vaccinate all children of 9 months to
                     less 15 years age group with one dose of MR vaccine. The MR campaign dose is
                      given to all targeted children, both immunized and unimmunized, irrespective
                       of prior Measles/Rubella infection.Like with any other injectable vaccine, 
                       there could be mild pain and redness at the injection site, low-grade fever, 
                       rash and muscle aches, which subsides on its own. The vaccine is not known to cause any other adverse event.</p>
        </div>
      </div>    
      <hr />
      <div class="post">
        <h2>TT</h2>
        <div class="post-content">
          <p style="text-align: justify">Tetanus vaccine, also known as Tetanus Toxoid (TT),
                     is a toxoid vaccine used to prevent Tetanus. During childhood, 
                     five doses are recommended, with a sixth given during adolescence.
                      After three doses, almost everyone is initially immune, but additional
                       doses every ten years are recommended to maintain immunity.</p>
        </div>
      </div>    
      <hr />
      <div class="post">
        <h2>Rotarix</h2>
        <div class="post-content">
          <p style="text-align: justify">Rotarix vaccine can prevent Rotavirus disease. Rotavirus commonly causes severe, 
                    watery Diarrhea, mostly in babies and young children.
                    Rotavirus vaccine is administered by putting drops in the child’s mouth. 
                    Babies should get 2 or 3 doses of Rotavirus vaccine, depending on the brand of vaccine used.
                    The first dose must be administered before 15 weeks of age.
                    The last dose must be administered by 8 months of age.</p>
        </div>
      </div>    
      
  </div> <!-- .page-section -->


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>