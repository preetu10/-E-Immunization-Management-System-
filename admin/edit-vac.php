<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-#00D9A5" style="color:#00D9A5;">Update Vaccine Stock</h3> 
        </div>
        <div class="card mb-4">
        <div class="card-body">
        <?php
            
            if(isset($_POST['edit_btn']))
            {
                $id=mysqli_real_escape_string($con,$_POST['edit_id']);
                $query_run = mysqli_query($con,"SELECT * FROM vaccine WHERE v_id = $id;");

                foreach($query_run as $row)
                {
                    ?>

                        <form action="vaccine_stockcon.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['v_id'] ?>">

                            <div class="form-group">
                                <label><b> Vaccine Name </b></label>
                                <input type="text" name="edit_name" value="<?php echo $row['v_name'] ?>" class="form-control"
                                    placeholder="Enter no of doses" readonly>
                            </div>
                            <div class="form-group">
                                <label><b>Stock</b></label>
                                <input type="number" name="edit_stock" value="<?php echo $row['availability'] ?>"
                                    class="form-control" placeholder="Enter number of available stock of vaccine">
                            </div>
                            <br>
                            <button type="submit" name="updatebtn" class="btn btn-success"> Update </button>
                            <a href="view-vaccine.php" class="btn btn-danger"> CANCEL </a>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
        </div>
    </div>
</div>

</div>
<?php
include('includes/scripts.php');
?>