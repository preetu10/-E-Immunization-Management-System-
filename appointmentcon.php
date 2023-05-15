<?php
include('authentication.php');
if(isset($_POST['btn']))
  {
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $vaccine=mysqli_real_escape_string($con,$_POST['vaccine']);
    $dose=mysqli_real_escape_string($con,$_POST['dose']);
    $doseprev = $dose - 1;

    $result1 = mysqli_query($con, "SELECT u_id FROM user WHERE u_email='$email'");
    $retrive1 = mysqli_fetch_array($result1);
    $patientid = $retrive1['u_id'];

    $result = mysqli_query($con, "SELECT v_id FROM vaccine WHERE v_name='$vaccine'");
    $retrive = mysqli_fetch_array($result);
    $vaccineid = $retrive['v_id'];
    
    $result = mysqli_query($con, "SELECT totaldose FROM vaccine WHERE v_id='$vaccineid'");
    $retrive = mysqli_fetch_array($result);
    $totaldose = $retrive['totaldose'];
    
    if($totaldose < $dose || $dose <= 0)
    {
     if($totaldose > 1 ) $_SESSION['message'] ="Enter Dose No. Between 1 to  $totaldose for $vaccine";
     else $_SESSION['message'] ="Enter Dose No. 1 for $vaccine";
     header("Location: view_user_information.php");
     exit(0);
    }

    $result1=mysqli_query($con, "SELECT * FROM registers_for 
    WHERE vaccineid='$vaccineid' AND patientid='$patientid' AND doseno='$dose' ");
    $retrive1= mysqli_fetch_array($result1);
    
    if($retrive1 > 0)
    {
      $reg_serial = $retrive1['reg_serial'];
      $result3=mysqli_query($con, "SELECT * FROM pushed 
      where appointmentid = $reg_serial");
      $retrive3= mysqli_fetch_array($result3);

      if($retrive3)
      {
        $_SESSION['message'] ="You Have Already Taken the Dose No. $dose of Vaccine $vaccine";
        header("Location: view_user_information.php");
        exit(0);  
      }
      else
      {
      $_SESSION['message'] ="You Have Already Registered for the Dose No. $dose of Vaccine $vaccine";
      header("Location: view_user_information.php");
      exit(0);
      }  
    }

    $result2=mysqli_query($con, "SELECT * FROM registers_for 
    WHERE vaccineid='$vaccineid' AND patientid='$patientid' AND doseno='$doseprev' ");
    $retrive2= mysqli_fetch_array($result2);
    
    if($doseprev > 0)
    {
      if ( !$retrive2 )
      {
        $_SESSION['message'] ="Please, Register for the Dose No. $doseprev for $vaccine";
        header("Location: view_user_information.php");
        exit(0);  
      }

      else
      {
        $reg_serial = $retrive2['reg_serial'];
        $result3=mysqli_query($con, "SELECT * FROM pushed 
        where appointmentid = $reg_serial");
        $retrive3= mysqli_fetch_array($result3);

        if ( !$retrive3 )
        {
          $_SESSION['message'] ="Please, Take the Dose No. $doseprev for $vaccine";
          header("Location: view_user_information.php");
          exit(0);  
        }
      }
    
    }

          $user_query="INSERT INTO registers_for (patientid, vaccineid, doseno) VALUES ('$patientid','$vaccineid','$dose')";
          $user_query_run=mysqli_query($con, $user_query);
        
          if( $user_query_run)
          {
            $_SESSION['message'] ="Successful";
            header("Location: view_user_information.php");
            exit(0);
          }
          else
          {
            $_SESSION['message'] ="Something went wrong";
            header("Location: appointment.php");
            exit(0);

          }
       }
?>
