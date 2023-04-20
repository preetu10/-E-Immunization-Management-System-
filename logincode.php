<?php
session_start();
include('./config/dbconfig.php');

if(isset($_POST['login_btn']))
{
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password =mysqli_real_escape_string($con,$_POST['password']);

    $login_query= "SELECT * FROM user WHERE u_email='$email' AND u_password= '$password' LIMIT 1";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows( $login_query_run)>0)
    {
       foreach($login_query_run as $data)
       {
          $user_id= $data['u_id'];
          $user_name= $data['u_firstname'. ' '. 'u_lastname'];
          $user_email= $data['u_email'];
          $role_as= $data['u_role'];
       }
       $_SESSION['auth'] =true;
       $_SESSION['auth_role'] ="$role_as"; 
       $_SESSION['auth_user'] = [
        'user_id'=>$user_id,
        'user_name'=>$user_name,
        'user_email'=>$user_email,
       ];

       if($_SESSION['auth_role'] == '1')
       {
        $_SESSION['email']=$email;
        $_SESSION['message'] = "Welcome, Admin";
        header("Location: ./admin/index.php");
        exit(0);
       }

       elseif($_SESSION['auth_role'] == '2')
       {
        $_SESSION['email']=$email;
        $_SESSION['message'] = "Welcome, Vaccinator";
        header("Location: ./vaccinator/index.php");
        exit(0);
       }
       
       elseif($_SESSION['auth_role'] == '0')
       {
        $_SESSION['email']=$email;
        $_SESSION['message'] = "You are Logged In";
        header("Location: view_user_information.php");
        exit(0);
       }
    }
    else
    {
        $_SESSION['message']="Invalid Email or Password";
        header("Location: login.php");
        exit(0);
    }
}
else
{
    $_SESSION['message']="You are not allowed to access this file";
    header("Location: login.php");
    exit(0);
}
?>