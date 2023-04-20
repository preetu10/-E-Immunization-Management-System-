<?php
session_start();
include('./config/dbconfig.php');

if(isset($_POST['register_btn']))
{
    $fname=mysqli_real_escape_string($con, $_POST['fname']);
    $lname=mysqli_real_escape_string($con,$_POST['lname']);
    $ffname=mysqli_real_escape_string($con, $_POST['ffname']);
    $flname=mysqli_real_escape_string($con,$_POST['flname']);
    $fnid=mysqli_real_escape_string($con,$_POST['fnid']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $dob=mysqli_real_escape_string($con,$_POST['dob']);
    $gender=mysqli_real_escape_string($con,$_POST['gender']);
    $division=mysqli_real_escape_string($con,$_POST['division']);
    $password =mysqli_real_escape_string($con,$_POST['password']);
    $confirm_password=mysqli_real_escape_string($con,$_POST['rpassword']);

    
    if($password==$confirm_password)
    {
        $checkemail="SELECT u_email FROM user WHERE u_email='$email' ";
        $checkemail_run= mysqli_query($con, $checkemail);
        
        if(mysqli_num_rows($checkemail_run) > 0 )
        {
  
             $_SESSION['message'] ="Already Registered";
             header("Location: register.php");
             exit(0);
        }
       else
       {
           $user_query="INSERT INTO user (u_firstname, u_lastname, u_ffirstname, u_flastname, u_fnid, u_email, u_dob, u_gender, u_division, u_password) VALUES ('$fname','$lname','$ffname', '$flname', '$fnid','$email', '$dob', '$gender', '$division', '$password' )";
           $user_query_run=mysqli_query($con, $user_query);
           if( $user_query_run)
           {
              $_SESSION['message'] =" Registered Successfully";
              header("Location: login.php");
              exit(0);

           }
           else
           {
            $_SESSION['message'] = "Something went wrong";
            header("Location: register.php");
            exit(0);

           }
      }
       
    }
    else
    {
    $_SESSION['message'] ="Mismatched Password ";
    header("Location: register.php");
    exit(0);
    }

}

else
{
   header("Location: register.php");
   exit(0);
}
?>