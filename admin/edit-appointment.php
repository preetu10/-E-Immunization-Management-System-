<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid">
   <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text gray";>Click the "Submit" Button to Approve the Request</h3> 
        </div>
        <div class="card mb-4">
        <div class="card-body">
        <?php
            if(isset($_POST['edit_btn']))
            {
                $serial=mysqli_real_escape_string($con,$_POST['edit_id']);
                $query_run = mysqli_query($con,"SELECT * FROM registers_for WHERE serial = $serial;");

                foreach($query_run as $row)
                {
                    ?>
                     <!-- $row['status'] -->
                        <form action="statuscon.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['serial'] ?>">
                            <input type="hidden" name="edit_vid" value="<?php echo $row['vaccineid'] ?>">
                            <div class="form-group">
                                <label><b>Status</b></label>
                                <input type="number" name="edit_status" value="<?php echo '1' ?>"
                                    class="form-control" placeholder="Enter 1 to Approve" readonly>
                            </div>
                            <br>
                            <button type="submit" name="updatebtn" class="btn btn-success"> Update </button>
                            <a href="view-register.php" class="btn btn-danger"> CANCEL </a>

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