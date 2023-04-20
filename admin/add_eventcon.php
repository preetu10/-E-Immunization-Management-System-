<?php
include('authentication.php');

if(isset($_POST['add_btn']))
{
    $event_name= mysqli_real_escape_string($con, $_POST['event_name']);
    $event_date= mysqli_real_escape_string($con, $_POST['event_date']);
    $event_time= mysqli_real_escape_string($con, $_POST['event_time']);
    $info = mysqli_real_escape_string($con, $_POST['add_info']);
    $createdby = mysqli_real_escape_string($con, $_POST['add_admin']);

    $query = "SELECT u_id FROM user WHERE u_email='$createdby'";
    $query_run = mysqli_query($con, $query);
    $ret=mysqli_fetch_array($query_run);
    $ret_id=$ret['u_id'];

    $add= "INSERT INTO event (event_name, dateofevent, event_time, event_info, created_by) VALUES ('$event_name','$event_date','$event_time','$info','$ret_id')";
    $add_run = mysqli_query($con, $add);
    if($add_run){
        $_SESSION['message'] = "New Data is Added";
        header("Location: view_events.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "New Data is NOT Added";

        header('Location: view_events.php'); 
    }
}

?>   