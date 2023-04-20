<?php
include('authentication.php');

if(isset($_POST['updatebtn']))
{
    $id  =$_POST['edit_id'];
    $name = $_POST['edit_name'];
    $date = $_POST['edit_date'];
    $admin = $_POST['edit_admin'];
    $info = $_POST['edit_info'];

    $mail = "SELECT u_id FROM user WHERE u_email='$admin'";
    $mail_run = mysqli_query($con, $mail);
    $ret=mysqli_fetch_array($mail_run);
    $ret_id=$ret['u_id'];

    $query = "UPDATE `event` SET event_name='$name',dateofevent='$date',event_info='$info' ,created_by='$ret_id' WHERE event_id='$id'; ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: view_events.php'); 
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: view_events.php'); 
        exit(0);
    }
}

?>  