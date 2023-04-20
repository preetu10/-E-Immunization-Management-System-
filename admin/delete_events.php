<?php
include('authentication.php');

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM `event` WHERE event_id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: view_events.php'); 
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: view_events.php'); 
        exit(0);
    }    
}
?>