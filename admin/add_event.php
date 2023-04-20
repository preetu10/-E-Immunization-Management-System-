<?php
     include('authentication.php');
     include('includes/header.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-#00D9A5" style="color:#00D9A5;">Add Events</h3> 
        </div>
        <div class="card mb-4">
        <div class="card-body">
        <?php
            
            if(isset($_POST['add_btn']))
            {
                ?>
                    <form action="add_eventcon.php" method="POST">
                        <div class="form-group">
                            <label><b> Event Name </b></label>
                            <input required type="text" class="form-control" name="event_name" placeholder="Enter Event Name">
                            </div>
                        <br>
                        <div class="form-group">
                            <label><b>Date of Event</b></label>
                            <input type="date" name="event_date" class="form-control" placeholder="Enter Date of Event">
                        </div>
                        <br>
                        <div class="form-group">
                            <label><b>Time of Event</b></label>
                            <input type="time" name="event_time" class="form-control" placeholder="Enter Time of Event">
                        </div>
                        <br>
                        <div class="form-group">
                            <label><b>Information of Event</b></label>
                            <input type="text" name="add_info" class="form-control" placeholder="Enter Information of Event">
                        </div>
                        <br>
                        <div class="form-group">
                            <label><b>Created By</b></label>
                            <input type="email" name="add_admin" class="form-control" placeholder="Enter Email of Admin">
                        </div>
                        <br>
                        <button type="submit" name="add_btn" class="btn btn-success">Add </button>
                         <a href="view_events.php" class="btn btn-danger"> Cancel </a>

                    </form>
        <?php
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