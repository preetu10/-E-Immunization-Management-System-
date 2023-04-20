<?php
include('../config/dbconfig.php');

if(isset($_POST['updatebtn']))
{
    // $status = $_POST['edit_status'];
    $serial =$_POST['edit_id'];
    $email =$_POST['email'];

    $result = mysqli_query($con, "SELECT u_id FROM user WHERE u_email='$email'");
    $retrive = mysqli_fetch_array($result);
    $vaccinatorid = $retrive['u_id'];

    $query = "UPDATE registers_for SET status ='2' WHERE reg_serial ='$serial' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $query = "INSERT INTO pushed(appointmentid, vaccinatorid) VALUES ('$serial', '$vaccinatorid')";
        $query_run = mysqli_query($con, $query);
        $_SESSION['message'] = "Your Data is Updated";
        header('Location: view-request.php'); 
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Your Data is NOT Updated";
        header('Location: view-request.php'); 
        exit(0);
    }
}
else
{
    $_SESSION['message'] = "Your Data is NOT Updated";
    header('Location: view-request.php'); 
    exit(0);
}

?>