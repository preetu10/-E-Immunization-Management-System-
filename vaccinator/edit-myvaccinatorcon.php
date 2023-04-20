<?php
include('authentication.php');

if(isset($_POST['save']))
{
    $id=$_POST['edit_id'];
    $fname = $_POST['fname'];
    $lname=$_POST['lname'];
    $ffirstname = $_POST['ffname'];
    $flastname = $_POST['flname'];
    $fnid = $_POST['fnid'];
    $division = $_POST['division'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];

    if($password==$rpassword){

    $query = "UPDATE user SET u_firstname='$fname', u_lastname='$lname', u_ffirstname='$ffirstname', u_flastname='$flastname', u_fnid='$fnid', u_division='$division', u_gender='$gender', u_dob='$dob', u_password='$password'  WHERE u_id='$id' ;";
    $query_run = mysqli_query($con, $query);

            if($query_run)
            {
                $_SESSION['message'] = "Your Data is Updated";
                header("Location: vaccinator-profile.php"); 
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Your Data is Not Updated";
                header('Location: vaccinator-profile.php'); 
                exit(0);
            }
        }
    else{
        $_SESSION['message'] = "Password not matched";
        header("Location: vaccinator-profile.php");
        exit(0);
    }

}

?>