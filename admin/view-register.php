<?php
include('authentication.php');
include('includes/header.php');
include('../message.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">THE XYZ HOSPITAL ADMIN PANEL</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Requests for Vaccine</li>
        </ol>
    <?php include('../message.php');?>
    <div class="row">
      <div class = "col-md-12">
        <div class="card">
            <div class="card-header">
              <h4>Requests</h4>
            </div>
            <div class="card-body">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                <tr>
                    <th>Appointment ID</th>
                    <th> Name</th>
                    <th>Email</th>
                    <th>Registered At</th>
                    <th>Vaccine</th>
                    <th>Dose No.</th>
                    <th>Edit</th>
                    <th>Confirmation Email</th>
                </tr>
               </thead>
               <tbody>
                <?php
                $query = "SELECT reg_serial, concat(u_firstname,' ',u_lastname) name, u_email, v_name, doseno, dateofreg, status, confirmation_mail  FROM registers_for, user, vaccine
                WHERE patientid=u_id AND vaccineid=v_id 
                ORDER BY dateofreg AND status ";
                $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run)>0)
                {
                  foreach($query_run as $row)
                    {

                    ?>
                    <tr>
                       <td><?= $row['reg_serial']; ?></td>
                       <td><?= $row['name']; ?></td>
                       <td><?= $row['u_email']; ?></td>
                       <td><?= $row['dateofreg']; ?></td>
                       <td><?= $row['v_name']; ?></td>
                       <td><?= $row['doseno']; ?></td> 
                       <td>
                        <?php
                        if($row['status']==0){
                          ?>
                          <form action="statuscon.php" method="POST">
                            <input type="hidden" name="edit_id" value="<?php echo $row['reg_serial'];?>">
                            <input type="hidden" name="edit_vname" value="<?php echo $row['v_name'];?>">
                            <button type="submit" name="updatebtn" class="btn btn-success">Approve</button>
                          </form>
                          <?php
                        }
                          else{
                            echo '<p class="btn btn-warning"> Booked</p>';
                          }
                        ?>
                        </td>
                        <td style="text-align:center;">
                                <?php 
                                if($row['confirmation_mail']==0){
                                    ?>
                                 <form action="../mymail/confirmation_mail.php" method="POST" >
                                     <input type="hidden" name="edit_serial" value="<?php echo $row['reg_serial'];?>">
                                    <button type="submit" name="send" class="btn btn-secondary">Send</button>
                                </form> 
                                <?php
                                }
                                 else if($row['confirmation_mail']==1)
                                echo '<p class="btn btn-warning">Sent</p>';
                                ?>
                                </td>
                    </tr>
                    <?php
                    }
                }
                else
                {
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
