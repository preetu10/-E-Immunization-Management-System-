<?php
include('authentication.php');
include('includes/header.php');
include('../message.php');
?>
<div class="container-fluid px-4">
                <h1 class="mt-4">THE XYZ HEALTH CARE ADMIN PANEL</h1>
                <ol class="breadcrumb mb-4">
                    <h4><li class="breadcrumb-item active">Dashboard/Events</li></h4>
                </ol>
        <div class="card-body">
            <div class="table-responsive">
            <form action="add_event.php" method="POST">
                <button type="submit" name="add_btn" class="btn btn-primary" style="float:right;">Add Event</button>
            </form>
        <br>
            <?php
                $query = "SELECT * FROM event ORDER BY dateofevent DESC";
                $query_run = mysqli_query($con, $query);
                
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="text-align:center;">Event No </th>
                            <th style="text-align:center;">Event Name </th>
                            <th style="text-align:center;">Date of Event </th>
                            <th style="text-align:center;">Time</th>
                            <th style="text-align:center;">Information of Event</th>
                            <th style="text-align:center;">Email of Admin</th>
                            <th style="text-align:center;">Status</th>
                            <th style="text-align:center;">Send email</th>
                            <th style="text-align:center;">EDIT</th>
                            <th style="text-align:center;">DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {        
                        ?>
                            <tr>
                                <td style="text-align:center;"><?php  echo $row['event_id']; ?></td>
                                <td style="text-align:center;"><?php  echo $row['event_name']; ?></td>
                                <td style="text-align:center;"><?php  
                                        $orgdate=$row['dateofevent'];
                                        $date=strtotime($orgdate);
                                        $newdate=date("F d, Y",$date);
                                        echo $newdate; ?></td>
                                <td style="text-align:center;"><?php  echo $row['event_time']; ?></td>
                                <td style="text-align:center;"><?php  echo $row['event_info']; ?></td>
                                <td style="text-align:center;"><?php  
                                        $ad_id=$row['created_by'];
                                        $query1 = "SELECT u_email FROM user WHERE u_id='$ad_id'";
                                        $query_run1 = mysqli_query($con, $query1);
                                        $retrive = mysqli_fetch_array($query_run1);
                                        echo $retrive['u_email']; 
                                    ?>
                                </td>
                                <td style="text-align:center;"><?php  $today=date('Y-m-d'); 
                                                                    $date=$row['dateofevent'];
                                                                     if($today<$date)
                                                                     echo "<b><font color='DAA520'>"."Upcoming"."</font></b>";
                                                                     else
                                                                     echo "<b><font color='#20B2AA'>"."Done"."</font></b>";
                                                                ?></td>
                                <td style="text-align:center;">
                                <form action="../mymail/email.php" method="POST">
                                <input type="hidden" name="edit_id" value="<?php echo $row['event_id'];?>">
                                    <button type="submit" name="send_mail" class="btn btn-secondary"> Send</button>
                                </form>
                                </td>

                                <td style="text-align:center;">
                                    <form action="edit_events.php" method="POST">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['event_id'];?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td style="text-align:center;">
                                    <form action="delete_event.php" method="POST">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['event_id']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>  
</div>
<?php
include('includes/scripts.php');
?>