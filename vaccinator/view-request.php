<?php
include('authentication.php');
include('includes/header.php');
include('../message.php');
?>
<div class="container-fluid px-4">
    <h4 class="mt-4">THE XYZ HOSPITAL</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Approve Requests</li>
        </ol>
    <?php include('../message.php');?>
    <div class="row">
      <div class = "col-md-12">
        <div class="card">
            <div class="card-header">
              <h4>Registered Patients</h4>
            </div>
            <div class="card-body">
             <table class="table table-border">
               <thead>
                <tr>
                    <th>Appointment ID</th>
                    <th> Name</th>
                    <th>Email</th>
                    <th>Registered At</th>
                    <th>Vaccine</th>
                    <th>Dose No.</th>
                    <th>Edit</th>
                </tr>
               </thead>
               <tbody>
                <?php
                $query = "SELECT reg_serial, concat(u_firstname,' ',u_lastname) name, u_email, v_name, doseno, dateofreg, status  FROM registers_for, user, vaccine
                WHERE patientid=u_id AND vaccineid=v_id AND status>0
                ORDER BY status ";
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
                        if($row['status']==1){
                          ?>
                          <form action="edit-request.php" method="POST">
                            <input type="hidden" name="edit_id" value="<?php echo $row['reg_serial'];?>">
                            <input type="hidden" name="vacemail" value="<?php echo $vacemail;?>">
                            <button type="submit" name="edit_btn" class="btn btn-success">Booked</button>
                          </form>
                          <?php
                        }
                          if($row['status']==2){
                            echo '<p class="btn btn-warning">Vaccinated</p>';
                          }
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
