<?php
include('authentication.php');

if(isset($_POST['add-btn']))
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
        $checkemail="SELECT email FROM user WHERE email='$email' ";
        $checkemail_run= mysqli_query($con, $checkemail);
        
        if(mysqli_num_rows($checkemail_run) > 0 )
        {
  
             $_SESSION['message'] ="Already Registered";
             header("Location: view-patient.php");
             exit(0);
        }
       else
       {
           $user_query="INSERT INTO user (fname, lname, ffname, flname, fnid, email, dob, gender, division, password, role_as) VALUES ('$fname','$lname','$ffname', '$flname', '$fnid','$email', '$dob', '$gender', '$division', '$password', '0' )";
           $user_query_run=mysqli_query($con, $user_query);
           if( $user_query_run)
           {
              $_SESSION['message'] =" Registered Successfully";
              header("Location: view-patient.php");
              exit(0);

           }
           else
           {
            $_SESSION['message'] = "Something went wrong";
            header("Location: view-patient.php");
            exit(0);

           }
      }
       
    }
    else
    {
    $_SESSION['message'] ="Mismatched Password ";
    header("Location: view-patient.php");
    exit(0);
    }

}

else
{
   header("Location: view-patient.php");
   exit(0);
}
?>   