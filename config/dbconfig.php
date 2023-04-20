<?php
$host="localhost";
$username="root";
$password="";
$database="eimscy";

$con=mysqli_connect("$host", "$username", "$password", "$database");

if(!$con){
    header("Location:../error/dberror.php");
    die();
}
?>