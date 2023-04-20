<?php
session_start();
     include('../config/dbconfig.php');
     include('includes/header.php');
?>

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text gray";>Approve Appointment</h3> 
        </div>
        <div class="card mb-4">
        <div class="card-body">
        <?php
            if(isset($_POST['edit_btn']))
            {
                $serial=mysqli_real_escape_string($con,$_POST['edit_id']);
                $query_run = mysqli_query($con,"SELECT * FROM registers_for WHERE reg_serial = $serial;");

                foreach($query_run as $row)
                {
                    ?>

                        <form action="edit-requestcon.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['reg_serial'] ?>">
                            <input type="hidden" name="edit_vid" value="<?php echo $row['vaccineid'] ?>">
                            <div class="form-group">
                                <label><b>Enter Email to Approve</b></label>
                                <input required type="email" name="email"
                                    class="form-control" placeholder="Enter your email">
                            </div>
                            <br>
                            <button type="submit" name="updatebtn" class="btn btn-success"> SUBMIT </button>
                            <a href="view-request.php" class="btn btn-danger"> CANCEL </a>

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