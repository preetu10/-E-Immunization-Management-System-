<?php
include('../config/dbconfig.php');

if(isset($_POST['delete_btn']))
{
    $serial = $_POST['delete_id'];

    $query = "DELETE FROM registers_for WHERE serial='$serial' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: view-register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: view-register.php'); 
    }    
}
?>