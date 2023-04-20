<?php
include('./config/dbconfig.php');
include('./message.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Edit Profile</title>

  <link rel="stylesheet" href="./assets/css/maicons.css">

  <link rel="stylesheet" href="./assets/css/edit profile.css">

  <link rel="stylesheet" href="./assets/css/bootstrap.css">

  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="./assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="./assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
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
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.php">Vaccine Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Events</a>
            </li>
             <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="logout.php">Log Out</a>
            </li>
            
          </ul>
        </div> 
      </div> 
    </nav>
  </header>

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h4 class="m-0 font-weight-bold text-black" style="color:black;">Edit Details</h4> 
</div>
    <div class="card-body">
        <?php
            
            if(isset($_POST['edit']))
            {
                $id=mysqli_real_escape_string($con,$_POST['edit_id']);
                $query_run = mysqli_query($con,"SELECT * FROM user WHERE u_id = $id;");

                foreach($query_run as $row)
                {
                ?>

                    <form action="edit_profilecon.php" method="POST">
                    <input type="hidden" name="edit_id" value="<?php echo $row['u_id'];?>" >

                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label>First name</label>
                                <input class="form-control" name="fname" type="text"value="<?php echo $row['u_firstname'];?>" placeholder="Enter your first name">
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label>Last name</label>
                                <input class="form-control" name="lname"  type="text" value="<?php echo $row['u_lastname'];?>"placeholder="Enter your last name">
                            </div>
                        </div>
                          <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label>Father's First name</label>
                                <input class="form-control" name="ffname" type="text" value="<?php echo $row['u_ffirstname'];?>"placeholder="Enter your father's first name">
                            </div>
                          </div>
                        <div class="row gx-3 mb-3">
                          <div class="col-md-6">
                                <label>Father's Last name</label>
                                <input class="form-control" name="flname" type="text" value="<?php echo $row['u_flastname'];?>"placeholder="Enter your father's last name">
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label>Father's NID</label>
                                <input class="form-control" name="fnid"type="text" value="<?php echo $row['u_fnid'];?>"placeholder="Enter your father's NID">
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label>Division</label>
                                <select name="division" class="custom-select" >
                                    <option value="" disabled selected hidden><?php echo $row['u_division'];?></option>
                                    <option value="Chattogram" <?php if($row['u_division']=="Chattogram"){echo "selected";}?>>Chattogram</option>
                                    <option value="Dhaka" <?php if($row['u_division']=="Dhaka"){echo "selected";}?>>Dhaka</option>
                                    <option value="Kumilla" <?php if($row['u_division']=="Kumilla"){echo "selected";}?>>Kumilla</option>
                                    <option value="Sylhet" <?php if($row['u_division']=="Sylhet"){echo "selected";}?>>Sylhet</option>
                                    <option value="Rangpur" <?php if($row['u_division']=="Rangpur"){echo "selected";}?>>Rangpur</option>
                                    <option value="Rajshahi" <?php if($row['u_division']=="Rajshahi"){echo "selected";}?>>Rajshahi</option>
                                    <option value="Barishal" <?php if($row['u_division']=="Barishal"){echo "selected";}?>>Barishal</option>
                                    <option value="Khulna" <?php if($row['u_division']=="Khulna"){echo "selected";}?>>Khulna</option>
                                </select>
                            </div>
                            </div>
                          <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label>Date of Birth</label>
                                 <input placeholder="Enter Date of Birth" name="dob" type="date" value="<?php echo $row['u_dob'];?>" onfocus="(this.type='date')" class="form-control">
                            </div>
                </div>
                            <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label>Gender</label>
                                <select name="gender" class="custom-select">
                                    <option value="" disabled selected hidden><?php echo $row['u_gender'];?></option>
                                    <option value="Male" <?php if($row['u_gender']=="Male"){echo "selected";}?>>Male</option>
                                    <option value="Female" <?php if($row['u_gender']=="Female"){echo "selected";}?>>Female</option>
                                </select>

                               </div>
                          </div>
                            <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" value="<?php echo $row['u_password'];?>"placeholder="Enter password">
                            
                          </div>
                          </div>
                        
                          <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label>Confirm Password</label>
                                <input class="form-control" name="rpassword" type="password" value="<?php echo $row['u_password'];?>" placeholder="Confirm new password" >
                            </div>
                        </div>
                <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" value="<?php echo $row['u_email'];?>"placeholder="Enter email" readonly>
                            </div>
                </div>
                        <button type="submit"class="btn btn-success" name="save" >Save changes</button>
                    </form>
                    <?php
                }
            }
            ?>
                </div>
            </div>
        </div>
<!-- </div> -->

<script src="./assets/js/jquery-3.5.1.min.js"></script>

<script src="./assets/js/bootstrap.bundle.min.js"></script>

<script src="./assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="./assets/vendor/wow/wow.min.js"></script>

<script src="./assets/js/theme.js"></script>
  
</body>
</html>