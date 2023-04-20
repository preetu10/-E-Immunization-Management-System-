<?php
session_start();
include('./config/dbconfig.php');
include('message.php');
$email = $_SESSION['email'];
$result = mysqli_query($con, "SELECT * FROM user WHERE u_email='$email'");
$retrive = mysqli_fetch_array($result);
$id = $retrive['u_id'];
$name = $retrive['u_firstname'];
$lname = $retrive['u_lastname'];
$regdate = $retrive['dateofcreation'];
$ffirstname = $retrive['u_ffirstname'];
$flastname = $retrive['u_flastname'];
$dob = $retrive['u_dob'];
$gender = $retrive['u_gender'];
$email = $retrive['u_email'];
$division = $retrive['u_division'];
$fnid = $retrive['u_fnid'];

$result_1 = mysqli_query($con, "SELECT v_id FROM vaccine WHERE v_name= 'BCG' ");
$retrive = mysqli_fetch_array($result_1);
$bcg=$retrive['v_id'];

$bcg_1 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and  vaccineid='$bcg' and doseno='1' and status='2'");
$retrive_b1 = mysqli_fetch_array($bcg_1);
if(($retrive_b1)>0 )
{
  $b1=$retrive_b1['reg_serial'];
  $bcg_1 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$b1'");
  $retrive_b1 = mysqli_fetch_array($bcg_1);
}
$result_2 = mysqli_query($con, "SELECT v_id FROM vaccine WHERE v_name= 'Pentavalent' ");
$retrive = mysqli_fetch_array($result_2);
$pen=$retrive['v_id'];

$pen_1 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$pen' and doseno=1 and status=2");
$retrive_p51 = mysqli_fetch_array($pen_1);
if(($retrive_p51)>0)
{
  $p1=$retrive_p51['reg_serial'];
  $pen_1 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p1'");
  $retrive_p51 = mysqli_fetch_array($pen_1);
}
$pen_2 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$pen' and doseno=2 and status=2");
$retrive_p52 = mysqli_fetch_array($pen_2);
if(($retrive_p52)>0)
{
  $p2=$retrive_p52['reg_serial'];
  $pen_2 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p2'");
  $retrive_p52 = mysqli_fetch_array($pen_2);
}

$pen_3 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$pen' and doseno=3 and status=2");
$retrive_p53 = mysqli_fetch_array($pen_3);
if(($retrive_p53)>0)
{
  $p3=$retrive_p53['reg_serial'];
  $pen_3 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_p53 = mysqli_fetch_array($pen_3);
}

$result = mysqli_query($con, "SELECT v_id FROM vaccine WHERE v_name= 'PCV' ");
$retrive = mysqli_fetch_array($result);
$pcv=$retrive['v_id'];

$pcv_1 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$pcv' and doseno=1 and status=2");
$retrive_p1 = mysqli_fetch_array($pcv_1);
if(($retrive_p1)>0)
{
  $p3=$retrive_p1['reg_serial'];
  $pcv_1 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_p1 = mysqli_fetch_array($pcv_1);
}

$pcv_2 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$pcv' and doseno=2 and status=2");
$retrive_p2 = mysqli_fetch_array($pcv_2);
if(($retrive_p2)>0)
{
  $p3=$retrive_p2['reg_serial'];
  $pcv_2 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_p2 = mysqli_fetch_array($pcv_2);
}

$pcv_3 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$pcv' and doseno=3 and status=2");
$retrive_p3 = mysqli_fetch_array($pcv_3);
if(($retrive_p3)>0)
{
  $p3=$retrive_p3['reg_serial'];
  $pcv_3 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_p3 = mysqli_fetch_array($pcv_3);
}

$result = mysqli_query($con, "SELECT v_id FROM vaccine WHERE v_name= 'OPV' ");
$retrive = mysqli_fetch_array($result);
$opv=$retrive['v_id'];

$opv_1 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$opv' and doseno=1 and status=2");
$retrive_o1 = mysqli_fetch_array($opv_1);
if(($retrive_o1)>0)
{
  $p3=$retrive_o1['reg_serial'];
  $opv_1 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_o1 = mysqli_fetch_array($opv_1);
}

$opv_2 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$opv' and doseno=2 and status=2");
$retrive_o2 = mysqli_fetch_array($opv_2);
if(($retrive_o2)>0)
{
  $p3=$retrive_o2['reg_serial'];
  $opv_2 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_o2 = mysqli_fetch_array($opv_2);
}

$opv_3= mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$opv' and doseno=3 and status=2");
$retrive_o3 = mysqli_fetch_array($opv_3);
if(($retrive_o3)>0)
{
  $p3=$retrive_o3['reg_serial'];
  $opv_3 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_o3 = mysqli_fetch_array($opv_3);
}

$opv_4 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$opv' and doseno=4 and status=2");
$retrive_o4 = mysqli_fetch_array($opv_4);
if(($retrive_o4)>0)
{
  $p3=$retrive_o4['reg_serial'];
  $opv_4 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_o4 = mysqli_fetch_array($opv_4);
}

$result = mysqli_query($con, "SELECT v_id FROM vaccine WHERE v_name= 'IPV' ");
$retrive = mysqli_fetch_array($result);
$ipv=$retrive['v_id'];

$ipv_1 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$ipv' and doseno=1 and status=2");
$retrive_i1 = mysqli_fetch_array($ipv_1);
if(($retrive_i1)>0)
{
  $p3=$retrive_i1['reg_serial'];
  $ipv_1 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_i1 = mysqli_fetch_array($ipv_1);
}

$ipv_2 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$ipv' and doseno=2 and status=2");
$retrive_i2 = mysqli_fetch_array($ipv_2);
if(($retrive_i2)>0)
{
  $p3=$retrive_i2['reg_serial'];
  $ipv_2 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_i2 = mysqli_fetch_array($ipv_2);
}

$result = mysqli_query($con, "SELECT v_id FROM vaccine WHERE v_name= 'MR' ");
$retrive = mysqli_fetch_array($result);
$mr=$retrive['v_id'];

$mr_1 =  mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$mr' and doseno=1 and status=2");
$retrive_m1 = mysqli_fetch_array($mr_1);
if(($retrive_m1)>0)
{
  $p3=$retrive_m1['reg_serial'];
  $mr_1 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_m1 = mysqli_fetch_array($mr_1);
}

$mr_2 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$mr' and doseno=2 and status=2");
$retrive_m2 = mysqli_fetch_array($mr_2);
if(($retrive_m2)>0)
{
  $p3=$retrive_m2['reg_serial'];
  $mr_2 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_m2 = mysqli_fetch_array($mr_2);
}

$result = mysqli_query($con, "SELECT v_id FROM vaccine WHERE v_name= 'Rotarix' ");
$retrive = mysqli_fetch_array($result);
$rota=$retrive['v_id'];

$rota_1 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$rota' and doseno=1 and status=2");
$retrive_r1 = mysqli_fetch_array($rota_1);
if(($retrive_r1)>0)
{
  $p3=$retrive_r1['reg_serial'];
  $rota_1 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_r1 = mysqli_fetch_array($rota_1);
}

$rota_2 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$rota' and doseno=2 and status=2");
$retrive_r2 = mysqli_fetch_array($rota_2);
if(($retrive_r2)>0)
{
  $p3=$retrive_r2['reg_serial'];
  $rota_2 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_r2 = mysqli_fetch_array($rota_2);
}

$result = mysqli_query($con, "SELECT v_id FROM vaccine WHERE v_name= 'TT' ");
$retrive = mysqli_fetch_array($result);
$tt=$retrive['v_id'];

$tt_1 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$tt' and doseno=1 and status=2");
$retrive_tt1 = mysqli_fetch_array($tt_1);
if(($retrive_tt1)>0)
{
  $p3=$retrive_tt1['reg_serial'];
  $tt_1 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_tt1 = mysqli_fetch_array($tt_1);
}
$tt_2 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$tt' and doseno=2 and status=2");
$retrive_tt2 = mysqli_fetch_array($tt_2);
if(($retrive_tt2)>0)
{
  $p3=$retrive_tt2['reg_serial'];
  $tt_2 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_tt2 = mysqli_fetch_array($tt_2);
}

$tt_3 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$tt' and doseno=3 and status=2");
$retrive_tt3 = mysqli_fetch_array($tt_3);
if(($retrive_tt3)>0)
{
  $p3=$retrive_tt3['reg_serial'];
  $tt_3 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_tt3 = mysqli_fetch_array($tt_3);
}

$tt_4 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$tt' and doseno=4 and status=2");
$retrive_tt4 = mysqli_fetch_array($tt_4);
if(($retrive_tt4)>0)
{
  $p3=$retrive_tt4['reg_serial'];
  $tt_4 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_tt4 = mysqli_fetch_array($tt_4);
}

$tt_5 = mysqli_query($con, "SELECT reg_serial FROM registers_for WHERE patientid='$id'and vaccineid='$tt' and doseno=5 and status=2");
$retrive_tt5 = mysqli_fetch_array($tt_5);
if(($retrive_tt5)>0)
{
  $p3=$retrive_tt5['reg_serial'];
  $tt_5 = mysqli_query($con, "SELECT dateofpushed FROM pushed WHERE appointmentid='$p3'");
  $retrive_tt5 = mysqli_fetch_array($tt_5);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Welcome to your profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="./assets/css/maicons.css">

  <link rel="stylesheet" href="./assets/css/bootstrap.css">

  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="./assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="./assets/css/theme.css">

  <link rel="stylesheet" href="./assets/css/register.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
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
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.php">Vaccine Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Events</a>
            </li>
            <li>
              <form action="logout.php" method="POST">
                <button type="submit" class="btn btn-primary btn-sm" name="logout_btn"> Logout</button>
              </form>
            </li>     
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="container bootdey flex-grow-1 container-p-y">
<div class="media align-items-center py-3 mb-0">
<div class="media-body ml-0">
<h4 class="font-weight-bold mb-0"><?php echo $name." ".$lname ?></h4>
<div class="text-muted mb-3">ID: <?php echo $id ?>
    </div>
    <div class="text-muted mb-3">
    <form action="edit-profile.php" method="POST">                          
        <input type="hidden" name="edit_id" value="<?php echo $id;?>">
        <button type="submit" name="edit" class="btn btn-primary btn-sm">Edit Profile</button>&nbsp;
    </form>
</div>
<div class="text-muted mr-3">
            <form action="appointment.php" method="POST">
            <input type="hidden" name="email" value="<?php echo $email ?>">
            <button type="submit" class="btn btn-primary btn-sm" name="btn"> Make Appointment</button>
            </form>
</div>
</div>
</div>
<div class="card mb-4" style="width:72rem; box-align:justified;">
<div class="card-body">
<table class="table user-view-table m-0">
<tbody>
<tr>
<td><strong>Registered:</strong></td>
<td><?php echo $regdate ?></td>
</tr>
<tr>
<td><strong>Father's name:</strong></td>
<td><?php echo $ffirstname." ".$flastname ?></td>
</tr>
<tr>
<td><strong>Date of birth:</strong></td>
<td><?php echo $dob ?></td>
</tr>
<tr>
<td><strong>Gender:</strong></td>
<td><?php echo $gender ?></td>
</tr>
<tr>
<td><strong>E-mail:</strong></td>
<td><?php echo $email ?></td>
</tr>
<tr>
<td><strong>Division:</strong></td>
<td><?php echo $division ?></td>
</tr>
<tr>
<td><strong>NID of guardian:</strong></td>
<td><?php echo $fnid ?></td>
</tr>
</tbody>
</table>
</div>
<hr class="border-light m-0">
<div class="table-responsive">
<table class="table card-table m-0">
<tbody>
<tr>
<th>Name of vaccines</th>
<th style="text-align:center;">Dose 01</th>
<th style="text-align:center;">Dose 02</th>
<th style="text-align:center;">Dose 03</th>
<th style="text-align:center;">Dose 04</th>
<th style="text-align:center;">Dose 05</th>
<th style="text-align:center;">Get Certificate</th>
</tr>
<tr>
<td>BCG</td>
<td style="text-align:center;"><?php if (!isset($retrive_b1['dateofpushed']))
                                      echo '<span class="fa fa-times text-light"></span>';
                                    else {
                                      echo "<b><font color='#006400'>".$retrive_b1['dateofpushed']."</font></b>";}
                                ?>
</td>
<td style="text-align:center;">---</td>
<td style="text-align:center;">---</td>
<td style="text-align:center;">---</td>
<td style="text-align:center;">---</td>
<?php 
if (isset($retrive_b1['dateofpushed']))
{ 
$d1=$retrive_b1['dateofpushed']; ?>
<form action="./certificate/bcg.php" method="POST">
<td style="text-align:center;">
<input type="hidden" name="fname" value="<?php echo $name;?>">
<input type="hidden" name="lname" value="<?php echo $lname;?>">
<input type="hidden" name="dob" value="<?php echo $dob;?>">
<input type="hidden" name="gender" value="<?php echo $gender;?>">
<input type="hidden" name="d1" value="<?php echo $d1;?>">
<button type="submit" name="bcg" class="btn btn-primary btn-sm">Download</button>
</td>
</form>
<?php 
} else { ?>
  <td style="text-align:center;"><a href="javascript:void(0)" class="btn btn-primary btn-sm">Download</a> </td>
 <?php } ?>
</tr>
<tr>
<td>Pentavalent</td>
<td style="text-align:center;"><?php if (!isset($retrive_p51['dateofpushed']))
                                      echo '<span class="fa fa-times text-light"></span>';
                                      else {
                                        echo "<b><font color='#006400'>".$retrive_p51['dateofpushed']."</b></font>";}?></td>
<td style="text-align:center;"><?php
                                    $today=date('Y-m-d');
                                    if (!isset($retrive_p52['dateofpushed']) && isset($retrive_p51['dateofpushed'])) {
                                      $date_p52=date('Y-m-d', strtotime($retrive_p51['dateofpushed']. ' + 28 days'));
                                        if($today <= $date_p52) echo "<b><font color='#00D9A5'>".$date_p52."</font></b>";
                                        else echo "<b><font color='red'>"."Missing!"."</font></b>";
                                    }
                                    else if(!isset($retrive_p52['dateofpushed']) && !isset($retrive_p51['dateofpushed']))                 
                                        echo '<span class="fa fa-times text-light"></span>';
                                      else {
                                        $date_p52=date('Y-m-d', strtotime($retrive_p51['dateofpushed']. ' + 28 days'));
                                          if($date_p52 < $retrive_p52['dateofpushed'])
                                            echo "<b><font color='#006400'>".$retrive_p52['dateofpushed']."</b></font>"."<br><b><font color='#7ba428'>".$date_p52."</font></b>";
                                            else
                                          echo "<b><font color='#006400'>".$retrive_p52['dateofpushed']."</font></b>";
                                          } ?> </td>
<td style="text-align:center;"><?php $today=date('Y-m-d');
                                    if (!isset($retrive_p53['dateofpushed']) && isset($retrive_p52['dateofpushed'])) {
                                      $date_p53=date('Y-m-d', strtotime($retrive_p52['dateofpushed']. ' + 28 days'));
                                        if($today <= $date_p53) echo "<b><font color='#00D9A5'>".$date_p53."</font></b>";
                                        else echo "<b><font color='red'>"."Missing!"."</font></b>";
                                    }
                                    else if(!isset($retrive_p53['dateofpushed']) && !isset($retrive_p52['dateofpushed']))     
                                      echo '<span class="fa fa-times text-light"></span>';
                                      else {
                                        $date_p53=date('Y-m-d', strtotime($retrive_p52['dateofpushed']. ' + 28 days'));
                                          if($date_p53 < $retrive_p53['dateofpushed'])
                                          echo "<b><font color='#006400'>".$retrive_p53['dateofpushed']."</b></font>"."<br><b><font color='#7ba428'>".$date_p53."</font></b>";
                                            else
                                        echo "<b><font color='#006400'>".$retrive_p53['dateofpushed']."</font></b>";}?></td>
<td style="text-align:center;">---</td>
<td style="text-align:center;">---</td>
<?php 
    if (isset($retrive_p53['dateofpushed']))
    { 
            $d1=$retrive_p51['dateofpushed'];
            $d2=$retrive_p52['dateofpushed'];
            $d3=$retrive_p53['dateofpushed']; ?>
          <form action="./certificate/pentavalent.php" method="POST">
          <td style="text-align:center;">
            <input type="hidden" name="fname" value="<?php echo $name;?>">
            <input type="hidden" name="lname" value="<?php echo $lname;?>">
            <input type="hidden" name="dob" value="<?php echo $dob;?>">
            <input type="hidden" name="gender" value="<?php echo $gender;?>">
            <input type="hidden" name="d1" value="<?php echo $d1;?>">
            <input type="hidden" name="d2" value="<?php echo $d2;?>">
            <input type="hidden" name="d3" value="<?php echo $d3;?>">
            <button type="submit" name="pentavalent" class="btn btn-primary btn-sm">Download</button>
          </td>
          </form>
    <?php 
    }
    else {  ?>
          <td style="text-align:center;"><a href="javascript:void(0)" class="btn btn-primary btn-sm">Download</a> </td>
    <?php } ?>
</tr>
<tr>
<td>PCV</td>
<td style="text-align:center;"><?php if (!isset($retrive_p1['dateofpushed']))
                                  echo '<span class="fa fa-times text-light"></span>';
                                    else {
                                      echo "<b><font color='#006400'>".$retrive_p1['dateofpushed']."</b></font>";}?></td>
<td style="text-align:center;"><?php $today=date('Y-m-d');
                                    if (!isset($retrive_p2['dateofpushed']) && isset($retrive_p1['dateofpushed'])) {
                                      $date_pcv2=date('Y-m-d', strtotime($retrive_p1['dateofpushed']. ' + 28 days'));
                                        if($today <= $date_pcv2) echo "<b><font color='#00D9A5'>".$date_pcv2."</font></b>";
                                        else echo "<b><font color='red'>"."Missing!"."</font></b>";
                                    }
                                    else if(!isset($retrive_p2['dateofpushed']) && !isset($retrive_p1['dateofpushed']))     
                                      echo '<span class="fa fa-times text-light"></span>';
                                    else {
                                      $date_pcv2=date('Y-m-d', strtotime($retrive_p1['dateofpushed']. ' + 28 days'));
                                      if($date_pcv2 < $retrive_p2['dateofpushed'])
                                      echo "<b><font color='#006400'>".$retrive_p2['dateofpushed']."</b></font>"."<br><b><font color='#7ba428'>".$date_pcv2."</font></b>";
                                        else
                                        echo "<b><font color='#006400'>".$retrive_p2['dateofpushed']."</b></font>";}?></td>
<td style="text-align:center;"><?php $today=date('Y-m-d');
                                    if (!isset($retrive_p3['dateofpushed']) && isset($retrive_p2['dateofpushed'])) {
                                      $date_pcv3=date('Y-m-d', strtotime($retrive_p2['dateofpushed']. ' + 28 days'));
                                        if($today <= $date_pcv3) echo "<b><font color='#00D9A5'>".$date_pcv3."</font></b>";
                                        else echo "<b><font color='red'>"."Missing!"."</font></b>";
                                    }
                                    else if(!isset($retrive_p2['dateofpushed']) && !isset($retrive_p3['dateofpushed']))     
                                        echo '<span class="fa fa-times text-light"></span>';
                                      else {
                                        $date_pcv3=date('Y-m-d', strtotime($retrive_p2['dateofpushed']. ' + 28 days'));
                                        if($date_pcv3 < $retrive_p3['dateofpushed'])
                                        echo "<b><font color='#006400'>".$retrive_p3['dateofpushed']."</b></font>"."<br><b><font color='#7ba428'>".$date_pcv3."</font></b>";
                                          else
                                          echo "<b><font color='#006400'>".$retrive_p3['dateofpushed']."</b></font>";}?></td>
<td style="text-align:center;">---</td>
<td style="text-align:center;">---</td>
<?php
    if(isset($retrive_p3)){
      $d1=$retrive_p1['dateofpushed']; 
      $d2=$retrive_p2['dateofpushed'];
      $d3=$retrive_p3['dateofpushed'];
      ?>
      <form action="./certificate/pcv.php" method="POST">
      <td style="text-align:center;">
      <input type="hidden" name="fname" value="<?php echo $name;?>">
      <input type="hidden" name="lname" value="<?php echo $lname;?>">
      <input type="hidden" name="dob" value="<?php echo $dob;?>">
      <input type="hidden" name="gender" value="<?php echo $gender;?>">
      <input type="hidden" name="d1" value="<?php echo $d1;?>">
      <input type="hidden" name="d2" value="<?php echo $d2;?>">
      <input type="hidden" name="d3" value="<?php echo $d3;?>">
      <button type="submit" name="pcv" class="btn btn-primary btn-sm">Download</button>
      </td>
      </form>
    <?php
    }
    else { ?>
      <td style="text-align:center;"><a href="javascript:void(0)" class="btn btn-primary btn-sm">Download</a></td>
    <?php } ?>
</tr>
<tr>
<td>OPV</td>
<td style="text-align:center;"><?php if (!isset($retrive_o1['dateofpushed']))
                                        echo '<span class="fa fa-times text-light"></span>';
                                      else {
                                        echo "<b><font color='#006400'>".$retrive_o1['dateofpushed']."</b></font>";}?></td>
<td style="text-align:center;"><?php $today=date('Y-m-d');
                                    if (!isset($retrive_o2['dateofpushed']) && isset($retrive_o1['dateofpushed'])) {
                                      $date_opv2=date('Y-m-d', strtotime($retrive_o1['dateofpushed']. ' + 28 days'));
                                        if($today <= $date_opv2) echo "<b><font color='#00D9A5'>".$date_opv2."</font></b>";
                                        else echo "<b><font color='red'>"."Missing!"."</font></b>";
                                    }
                                    else if(!isset($retrive_o2['dateofpushed']) && !isset($retrive_o1['dateofpushed']))     
                                        echo '<span class="fa fa-times text-light"></span>';
                                      else {
                                        $date_opv2=date('Y-m-d', strtotime($retrive_o1['dateofpushed']. ' + 28 days'));
                                        if($date_opv2 < $retrive_o2['dateofpushed'])
                                        echo "<b><font color='#006400'>".$retrive_o2['dateofpushed']."</b></font>"."<br><b><font color='#7ba428'>".$date_opv2."</font></b>";
                                          else
                                          echo "<b><font color='#006400'>".$retrive_o2['dateofpushed']."</b></font>";}?></td>
<td style="text-align:center;"><?php $today=date('Y-m-d');
                                    if (!isset($retrive_o3['dateofpushed']) && isset($retrive_o2['dateofpushed'])) {
                                      $date_opv3=date('Y-m-d', strtotime($retrive_o2['dateofpushed']. ' + 28 days'));
                                        if($today <= $date_opv3) echo "<b><font color='#00D9A5'>".$date_opv3."</font></b>";
                                        else echo "<b><font color='red'>"."Missing!"."</font></b>";
                                    }
                                    else if(!isset($retrive_o2['dateofpushed']) && !isset($retrive_o3['dateofpushed']))     
                                      echo '<span class="fa fa-times text-light"></span>';
                                    else {
                                      $date_opv3=date('Y-m-d', strtotime($retrive_o2['dateofpushed']. ' + 28 days'));
                                      if($date_opv3 < $retrive_o3['dateofpushed'])
                                      echo "<b><font color='#006400'>".$retrive_o3['dateofpushed']."</b></font>"."<br><b><font color='#7ba428'>".$date_opv3."</font></b>";
                                        else
                                        echo "<b><font color='#006400'>".$retrive_o3['dateofpushed']."</b></font>";}?></td>
<td style="text-align:center;"><?php $today=date('Y-m-d');
                                    if (!isset($retrive_o4['dateofpushed']) && isset($retrive_o3['dateofpushed'])) {
                                      $date_opv4=date('Y-m-d', strtotime($retrive_o3['dateofpushed']. ' + 28 days'));
                                        if($today <= $date_opv4) echo "<b><font color='#00D9A5'>".$date_opv4."</font></b>";
                                        else echo "<b><font color='red'>"."Missing!"."</font></b>";
                                    }
                                    else if(!isset($retrive_o4['dateofpushed']) && !isset($retrive_o3['dateofpushed']))     
                                        echo '<span class="fa fa-times text-light"></span>';
                                      else {
                                        $date_opv4=date('Y-m-d', strtotime($retrive_o3['dateofpushed']. ' + 28 days'));
                                        if($date_opv4 < $retrive_o4['dateofpushed'])
                                        echo "<b><font color='#006400'>".$retrive_o4['dateofpushed']."</b></font>"."<br><b><font color='#7ba428'>".$date_opv4."</font></b>";
                                          else
                                          echo "<b><font color='#006400'>".$retrive_o4['dateofpushed']."</b></font>";}?></td>
<td style="text-align:center;">---</td>
<?php
if(isset($retrive_o4)){
      $d1=$retrive_o1['dateofpushed']; 
      $d2=$retrive_o2['dateofpushed'];
      $d3=$retrive_o3['dateofpushed'];
      $d4=$retrive_o4['dateofpushed'];
      ?>
      <form action="./certificate/opv.php" method="POST">
      <td style="text-align:center;">
      <input type="hidden" name="fname" value="<?php echo $name;?>">
      <input type="hidden" name="lname" value="<?php echo $lname;?>">
      <input type="hidden" name="dob" value="<?php echo $dob;?>">
      <input type="hidden" name="gender" value="<?php echo $gender;?>">
      <input type="hidden" name="d1" value="<?php echo $d1;?>">
      <input type="hidden" name="d2" value="<?php echo $d2;?>">
      <input type="hidden" name="d3" value="<?php echo $d3;?>">
      <input type="hidden" name="d4" value="<?php echo $d4;?>">
      <button type="submit" name="opv" class="btn btn-primary btn-sm">Download</button>
      </td>
      </form>
    <?php
    }
    else { ?>
        <td style="text-align:center;"><a href="javascript:void(0)" class="btn btn-primary btn-sm">Download</a></td>
    <?php } ?>
</tr>
<tr>
<td>IPV</td>
<td style="text-align:center;"><?php if (!isset($retrive_i1['dateofpushed']))
                                        echo '<span class="fa fa-times text-light"></span>';
                                      else {
                                        echo "<b><font color='#006400'>".$retrive_i1['dateofpushed']."</b></font>";;}?></td>
<td style="text-align:center;"><?php $today=date('Y-m-d');
                                    if (!isset($retrive_i2['dateofpushed']) && isset($retrive_i1['dateofpushed'])) {
                                      $date_ipv2=date('Y-m-d', strtotime($retrive_i1['dateofpushed']. ' + 56 days'));
                                        if($today <= $date_ipv2) echo "<b><font color='#00D9A5'>".$date_ipv2."</font></b>";
                                        else echo "<b><font color='red'>"."Missing!"."</font></b>";
                                    }
                                    else if(!isset($retrive_i2['dateofpushed']) && !isset($retrive_i1['dateofpushed']))     
                                        echo '<span class="fa fa-times text-light"></span>';
                                    else {
                                      $date_ipv2=date('Y-m-d', strtotime($retrive_i1['dateofpushed']. ' + 56 days'));
                                      if($date_ipv2 < $retrive_i2['dateofpushed'])
                                      echo "<b><font color='#006400'>".$retrive_i2['dateofpushed']."</b></font>"."<br><b><font color='#7ba428'>".$date_ipv2."</font></b>";
                                        else
                                        echo "<b><font color='#006400'>".$retrive_i2['dateofpushed']."</b></font>";}?></td>
<td style="text-align:center;">---</td>
<td style="text-align:center;">---</td>
<td style="text-align:center;">---</td>
<?php
if(isset($retrive_i2)){
      $d1=$retrive_i1['dateofpushed']; 
      $d2=$retrive_i2['dateofpushed'];
      ?>
      <form action="./certificate/ipv.php" method="POST">
      <td style="text-align:center;">
      <input type="hidden" name="fname" value="<?php echo $name;?>">
      <input type="hidden" name="lname" value="<?php echo $lname;?>">
      <input type="hidden" name="dob" value="<?php echo $dob;?>">
      <input type="hidden" name="gender" value="<?php echo $gender;?>">
      <input type="hidden" name="d1" value="<?php echo $d1;?>">
      <input type="hidden" name="d2" value="<?php echo $d2;?>">
      <button type="submit" name="ipv" class="btn btn-primary btn-sm">Download</button>
      </td>
      </form>
    <?php
    } else { ?>
      <td style="text-align:center;"><a href="javascript:void(0)" class="btn btn-primary btn-sm">Download</a></td>
   <?php } ?>
</tr>
<tr>
<td>MR</td>
<td style="text-align:center;"><?php if (!isset($retrive_m1['dateofpushed']))
                                      echo '<span class="fa fa-times text-light"></span>';
                                      else {
                                        echo "<b><font color='#006400'>".$retrive_m1['dateofpushed']."</b></font>";}?></td>
<td style="text-align:center;"><?php $today=date('Y-m-d');
                                    if (!isset($retrive_m2['dateofpushed']) && isset($retrive_m1['dateofpushed'])) {
                                      $date_mr2=date('Y-m-d', strtotime($retrive_m1['dateofpushed']. ' + 180 days'));
                                        if($today <= $date_mr2) echo "<b><font color='#00D9A5'>".$date_mr2."</font></b>";
                                        else echo "<b><font color='red'>"."Missing!"."</font></b>";
                                    }
                                    else if(!isset($retrive_m2['dateofpushed']) && !isset($retrive_m1['dateofpushed']))     
                                      echo '<span class="fa fa-times text-light"></span>';
                                      else {
                                        $date_mr2=date('Y-m-d', strtotime($retrive_m1['dateofpushed']. ' + 180 days'));
                                        if($date_mr2 < $retrive_m2['dateofpushed'])
                                        echo "<b><font color='#006400'>".$retrive_m2['dateofpushed']."</b></font>"."<br><b><font color='#7ba428'>".$date_mr2."</font></b>";
                                          else
                                          echo "<b><font color='#006400'>".$retrive_m2['dateofpushed']."</b></font>";}?></td>
<td style="text-align:center;">---</td>
<td style="text-align:center;">---</td>
<td style="text-align:center;">---</td>
<?php
if(isset($retrive_m2)){
      $d1=$retrive_m1['dateofpushed']; 
      $d2=$retrive_m2['dateofpushed'];
      ?>
      <form action="./certificate/mr.php" method="POST">
      <td style="text-align:center;">
      <input type="hidden" name="fname" value="<?php echo $name;?>">
      <input type="hidden" name="lname" value="<?php echo $lname;?>">
      <input type="hidden" name="dob" value="<?php echo $dob;?>">
      <input type="hidden" name="gender" value="<?php echo $gender;?>">
      <input type="hidden" name="d1" value="<?php echo $d1;?>">
      <input type="hidden" name="d2" value="<?php echo $d2;?>">
      <button type="submit" name="mr" class="btn btn-primary btn-sm">Download</button>
      </td>
      </form>
    <?php
    } else { ?>
      <td style="text-align:center;"><a href="javascript:void(0)" class="btn btn-primary btn-sm">Download</a></td>
   <?php } ?>
</tr>
<tr>
<td>Rotarix</td>
<td style="text-align:center;"><?php if (!isset($retrive_r1['dateofpushed']))
                                      echo '<span class="fa fa-times text-light"></span>';
                                      else {
                                        echo "<b><font color='#006400'>".$retrive_r1['dateofpushed']."</b></font>";}?></td>
<td style="text-align:center;"><?php $today=date('Y-m-d');
                                    if (!isset($retrive_r2['dateofpushed']) && isset($retrive_r1['dateofpushed'])) {
                                      $date_rota2=date('Y-m-d', strtotime($retrive_r1['dateofpushed']. ' + 60 days'));
                                        if($today <= $date_rota2) echo "<b><font color='#00D9A5'>".$date_rota2."</font></b>";
                                        else echo "<b><font color='red'>"."Missing!"."</font></b>";
                                    }
                                    else if(!isset($retrive_r2['dateofpushed']) && !isset($retrive_r1['dateofpushed']))     
                                      echo '<span class="fa fa-times text-light"></span>';
                                      else {
                                        $date_rota2=date('Y-m-d', strtotime($retrive_r1['dateofpushed']. ' + 60 days'));
                                        if($date_rota2 < $retrive_r2['dateofpushed'])
                                        echo "<b><font color='#006400'>".$retrive_r2['dateofpushed']."</b></font>"."<br><b><font color='#7ba428'>".$date_rota2."</font></b>";
                                          else
                                          echo "<b><font color='#006400'>".$retrive_r2['dateofpushed']."</b></font>";}?></td>
<td style="text-align:center;">---</td>
<td style="text-align:center;">---</td>
<td style="text-align:center;">---</td>
<?php
if(isset($retrive_r2)){
      $d1=$retrive_r1['dateofpushed']; 
      $d2=$retrive_r2['dateofpushed'];
      ?>
      <form action="./certificate/rota.php" method="POST">
      <td style="text-align:center;">
      <input type="hidden" name="fname" value="<?php echo $name;?>">
      <input type="hidden" name="lname" value="<?php echo $lname;?>">
      <input type="hidden" name="dob" value="<?php echo $dob;?>">
      <input type="hidden" name="gender" value="<?php echo $gender;?>">
      <input type="hidden" name="d1" value="<?php echo $d1;?>">
      <input type="hidden" name="d2" value="<?php echo $d2;?>">
      <button type="submit" name="rota" class="btn btn-primary btn-sm">Download</button>
      </td>
      </form>
    <?php
    } else { ?>
      <td style="text-align:center;"><a href="javascript:void(0)" class="btn btn-primary btn-sm">Download</a></td>
   <?php } ?>
</tr>
<tr>
<td>TT</td>
<td style="text-align:center;"><?php if (!isset($retrive_tt1['dateofpushed']))
                                      echo '<span class="fa fa-times text-light"></span>';
                                      else {
                                        echo "<b><font color='#006400'>".$retrive_tt1['dateofpushed']."</b></font>";}?></td>
<td style="text-align:center;"><?php $today=date('Y-m-d');
                                    if (!isset($retrive_tt2['dateofpushed']) && isset($retrive_tt1['dateofpushed'])) {
                                      $date_tt2=date('Y-m-d', strtotime($retrive_tt1['dateofpushed']. ' + 28 days'));
                                        if($today <= $date_tt2) echo "<b><font color='#00D9A5'>".$date_tt2."</font></b>";
                                        else echo "<b><font color='red'>"."Missing!"."</font></b>";
                                    }
                                    else if(!isset($retrive_tt2['dateofpushed']) && !isset($retrive_tt1['dateofpushed']))     
                                      echo '<span class="fa fa-times text-light"></span>';
                                    else {
                                      $date_tt2=date('Y-m-d', strtotime($retrive_tt1['dateofpushed']. ' + 28 days'));
                                      if($date_tt2 < $retrive_tt2['dateofpushed'])
                                      echo "<b><font color='#006400'>".$retrive_tt2['dateofpushed']."</b></font>"."<br><b><font color='#7ba428'>".$date_tt2."</font></b>";
                                        else
                                        echo "<b><font color='#006400'>".$retrive_tt2['dateofpushed']."</b></font>";}?></td>
<td style="text-align:center;"><?php $today=date('Y-m-d');
                                    if (!isset($retrive_tt3['dateofpushed']) && isset($retrive_tt2['dateofpushed'])) {
                                      $date_tt3=date('Y-m-d', strtotime($retrive_tt2['dateofpushed']. ' + 180 days'));
                                        if($today <= $date_tt3) echo "<b><font color='#00D9A5'>".$date_tt3."</font></b>";
                                        else echo "<b><font color='red'>"."Missing!"."</font></b>";
                                    }
                                    else if(!isset($retrive_tt2['dateofpushed']) && !isset($retrive_tt3['dateofpushed']))     
                                      echo '<span class="fa fa-times text-light"></span>';
                                      else {
                                        $date_tt3=date('Y-m-d', strtotime($retrive_tt2['dateofpushed']. ' + 180 days'));
                                        if($date_tt3 < $retrive_tt3['dateofpushed'])
                                        echo "<b><font color='#006400'>".$retrive_tt3['dateofpushed']."</b></font>"."<br><b><font color='#7ba428'>".$date_tt3."</font></b>";
                                          else
                                          echo "<b><font color='#006400'>".$retrive_tt3['dateofpushed']."</b></font>";}?></td>
<td style="text-align:center;"><?php $today=date('Y-m-d');
                                    if (!isset($retrive_tt4['dateofpushed']) && isset($retrive_tt3['dateofpushed'])) {
                                      $date_tt4=date('Y-m-d', strtotime($retrive_tt3['dateofpushed']. ' + 365 days'));
                                        if($today <= $date_tt4) echo "<b><font color='#00D9A5'>".$date_tt4."</font></b>";
                                        else echo "<b><font color='red'>"."Missing!"."</font></b>";
                                    }
                                    else if(!isset($retrive_tt3['dateofpushed']) && !isset($retrive_tt4['dateofpushed']))     
                                      echo '<span class="fa fa-times text-light"></span>';
                                    else {
                                      $date_tt4=date('Y-m-d', strtotime($retrive_tt3['dateofpushed']. ' + 365 days'));
                                      if($date_tt4 < $retrive_tt4['dateofpushed'])
                                      echo "<b><font color='#006400'>".$retrive_tt4['dateofpushed']."</b></font>"."<br><b><font color='#7ba428'>".$date_tt4."</font></b>";
                                        else
                                        echo "<b><font color='#006400'>".$retrive_tt4['dateofpushed']."</b></font>";}?></td>
<td style="text-align:center;"><?php $today=date('Y-m-d');
                                    if (!isset($retrive_tt5['dateofpushed']) && isset($retrive_tt4['dateofpushed'])) {
                                      $date_tt5=date('Y-m-d', strtotime($retrive_tt4['dateofpushed']. ' + 365 days'));
                                        if($today <= $date_tt5) echo "<b><font color='#00D9A5'>".$date_tt5."</font></b>";
                                        else echo "<b><font color='red'>"."Missing!"."</font></b>";
                                    }
                                    else if(!isset($retrive_tt5['dateofpushed']) && !isset($retrive_tt4['dateofpushed']))     
                                      echo '<span class="fa fa-times text-light"></span>';
                                    else {
                                      $date_tt5=date('Y-m-d', strtotime($retrive_tt4['dateofpushed']. ' + 365 days'));
                                      if($date_tt5 < $retrive_tt5['dateofpushed'])
                                      echo "<b><font color='#006400'>".$retrive_tt5['dateofpushed']."</b></font>"."<br><b><font color='#7ba428'>".$date_tt5."</font></b>";
                                        else
                                        echo "<b><font color='#006400'>".$retrive_tt5['dateofpushed']."</b></font>";}?>
</td>
<?php
if(isset($retrive_tt5)){
      $d1=$retrive_tt1['dateofpushed']; 
      $d2=$retrive_tt2['dateofpushed'];
      $d3=$retrive_tt3['dateofpushed'];
      $d4=$retrive_tt4['dateofpushed'];
      $d5=$retrive_tt5['dateofpushed'];
      ?>
      <form action="./certificate/tt.php" method="POST">
      <td style="text-align:center;">
      <input type="hidden" name="fname" value="<?php echo $name;?>">
      <input type="hidden" name="lname" value="<?php echo $lname;?>">
      <input type="hidden" name="dob" value="<?php echo $dob;?>">
      <input type="hidden" name="gender" value="<?php echo $gender;?>">
      <input type="hidden" name="d1" value="<?php echo $d1;?>">
      <input type="hidden" name="d2" value="<?php echo $d2;?>">
      <input type="hidden" name="d3" value="<?php echo $d3;?>">
      <input type="hidden" name="d4" value="<?php echo $d4;?>">
      <input type="hidden" name="d5" value="<?php echo $d5;?>">
      <button type="submit" name="tt" class="btn btn-primary btn-sm">Download</button>
      </td>
      </form>
    <?php
    } else { ?>
        <td style="text-align:center;"><a href="javascript:void(0)" class="btn btn-primary btn-sm">Download</a></td>
    <?php } ?>
</tr>
</tbody>
</table>
</div>
</div>
<table>
  <tbody>
    <tr>
    <td><strong>*</strong></td>
      <td style="color: #006400;"><strong>Vaccination Date</strong></td>
    
      <td style="padding-left:15px;color: #7ba428;"><strong>Expected Date</strong></td>
    
      <td style="padding-left:15px;color: #00D9A5;"><strong>Next Dose Date<strong></td>
      
      <td style="padding-left:15px;color: #FF0000;"><strong>Missing!<strong></td>
    
      <td><strong>*</strong></td>
    </tr>
  </tbody>
</table>
</div>
</div>
<hr class="border-light m-0">
<div class="card-body">
</div>
</div>
</div>
<style type="text/css">
body{
    margin-top:20px;
    background: #f5f5f5;
}
input:invalid ~ span {
  content: "✖";
  padding-left: 5px;
  position: absolute;
}
input:valid ~ span {
  content: "✓";
  padding-left: 5px;
  position: absolute;
}
.ui-w-100 {
    width: 100px !important;
    height: auto;
}
.borderexample {
 border-width:3px;
 border-style:solid;
 border-color:#287EC7;
}
.card {
    background-clip: padding-box;
    box-shadow: 0 2px 4px rgba(24,28,33,0.012);
}
.user-view-table td:first-child {
    width: 12rem;
}
.user-view-table td {
    padding-right: 0 rem;
    padding-left: 0;
    border: 0;
}
.text-light {
    color: #babbbc !important;
}
.card .row-bordered>[class*=" col-"]::after {
    border-color: rgba(24,28,33,0.075);
}    
.text-xlarge {
    font-size: 170% !important;
}
</style>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript"></script>
<script>
        $('[data-toggle="popover"]').popover();
</script>
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script>
</body>
</html>
