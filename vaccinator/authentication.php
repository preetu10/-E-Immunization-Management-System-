<?php
session_start();
include('../config/dbconfig.php');

if(! isset($_SESSION['auth']))
{
    $_SESSION['message'] = "Login to Access as Vaccinator";
    header("Location: ../login.php");
    exit(0);
}

else
{
    if($_SESSION['auth_role'] != '2')
    {
        $_SESSION['message'] = "You are not Authorised as Vaccinator";
        header("Location: ../login.php");
        exit(0); 
    }
}
?>