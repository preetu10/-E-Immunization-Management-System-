<?php
     include('authentication.php');
     include('includes/header.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-#00D9A5" style="color:#00D9A5;">Edit Events</h3> 
        </div>
        <div class="card mb-4">
        <div class="card-body">
        <?php
            
            if(isset($_POST['edit_btn']))
            {
                $id=mysqli_real_escape_string($con,$_POST['edit_id']);
                
                $query_run = mysqli_query($con,"SELECT * FROM `event` WHERE event_id = $id;");
                

                foreach($query_run as $row)
                {
                    ?>

                        <form action="edit_eventscon.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['event_id'] ?>">

                            <div class="form-group">
                                <label><b> Event Name </b></label>
                                <input type="text" name="edit_name" value="<?php echo $row['event_name'] ?>" class="form-control"
                                    placeholder="Enter event name">
                            </div>
                            <br>
                            <div class="form-group">
                                <label><b>Date of Event</b></label>
                                <input type="date" name="edit_date" value="<?php echo $row['dateofevent'] ?>" class="form-control"
                                    placeholder="Enter Date of Event">
                            </div>
                            <br>
                            <div class="form-group">
                                <label><b>Time of Event</b></label>
                                <input type="time" name="edit_time" value="<?php echo $row['event_time'] ?>" class="form-control"
                                    placeholder="Enter Time of Event">
                            </div>
                            <br>
                            <div class="form-group">
                                <label><b>Email of Admin</b></label>
                                <?php
                                $ad_id=$row['created_by'];
                                $query1 = "SELECT u_email FROM user WHERE u_id='$ad_id'";
                                $query_run1 = mysqli_query($con, $query1);
                                $retrive = mysqli_fetch_array($query_run1);
                                ?>
                                <input type="email" name="edit_admin" value="<?php echo $retrive['u_email'] ?>" class="form-control"
                                    placeholder="Enter Email of Admin">
                            </div>
                            <br>
                            <div class="form-group">
                                <label><b>Information of event</b></label>
                                <input type="text" name="edit_info" value="<?php echo $row['event_info'] ?>"
                                    class="form-control" placeholder="Enter Information of Event">
                            </div>
                            <br>
                            <button type="submit" name="updatebtn" class="btn btn-success"> Update </button>
                            <a href="view_events.php" class="btn btn-danger"> Cancel </a>

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