<?php
include('authentication.php');

if(isset($_POST['updatebtn']))
{
    $stock = $_POST['edit_stock'];
    $id=$_POST['edit_id'];
    $name = $_POST['edit_name'];
    $nod = $_POST['edit_number'];

    $query = "UPDATE vaccine SET availability ='$stock' WHERE v_id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Your Data is Updated";
        header('Location: view-vaccine.php'); 
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Your Data is NOT Updated";
        header('Location: view-vaccine.php'); 
        exit(0);
    }
}

?>