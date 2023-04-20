<?php
include('authentication.php');

if(isset($_POST['updatebtn']))
{
    $serial =$_POST['edit_id'];
    $vname=$_POST['edit_vname'];

    $result = mysqli_query($con, "SELECT v_id FROM vaccine WHERE v_name='$vname'");
    $retrive = mysqli_fetch_array($result);
    $vid = $retrive['v_id'];

    $result = mysqli_query($con, "SELECT availability FROM vaccine WHERE v_id='$vid'");
    $retrive = mysqli_fetch_array($result);
    $stock = $retrive['availability'];
    
    if($stock>0){
    $query = "UPDATE registers_for SET status ='1' WHERE reg_serial ='$serial' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $query = "UPDATE vaccine SET availability ='$stock'-1 WHERE v_id ='$vid'";
        $query_run = mysqli_query($con, $query);
        $_SESSION['message'] = "Your Data is Updated";
        header('Location: view-register.php'); 
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Your Data is NOT Updated";
        header('Location: view-register.php'); 
        exit(0);
    }
}
else
{
    $_SESSION['message'] = "Stock is Empty";
    header('Location: view-register.php'); 
    exit(0);
}
}

?>