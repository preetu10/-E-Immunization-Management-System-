<?php
session_start();
include('./config/dbconfig.php');

if(! isset($_SESSION['auth']))
{
    $_SESSION['message'] = "Login to Access";
    header("Location: login.php");
    exit(0);
}
?>