<?php
include('authentication.php');
include('includes/header.php');
include('../message.php');
?>
<div class="container-fluid px-4">
    <h4 class="mt-4">THE XYZ HOSPITAL ADMIN PANEL</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Admins</li>
        </ol>
    <form action="add-admin.php" method="POST">
      <input type="hidden" name="add-id" value="<?php echo $row['u_id']; ?>">
        <button type="submit" name="add" class="btn btn-primary">Add Admin</button>
    </form><br>

    <div class="row">
      <div class = "col-md-12">
        <div class="card">
            <div class="card-header">
              <h4>All Admins</h4>
            </div>
            <div class="card-body">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Birth Date</th>
                    <th>Email</th>
                    <th>Joined At</th>
                    <th>Edit</th>
                </tr>
               </thead>
               <tbody>
                <?php
                $query = "SELECT * FROM user where u_role = 1 ";
                $query_run = mysqli_query($con, $query);
                if(mysqli_num_rows($query_run)>0)
                {
                foreach($query_run as $row)
                {
                ?>
                  <tr>
                    <td><?= $row['u_id']; ?></td>
                    <td><?= $row['u_firstname']; ?></td>
                    <td><?= $row['u_lastname']; ?></td>
                    <td><?= $row['u_gender']; ?></td>
                    <td><?= $row['u_dob']; ?></td>
                    <td><?= $row['u_email']; ?></td>
                    <td><?= $row['dateofcreation']; ?></td>
                    <td>
                      <form action="edit-admin.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $row['u_id']; ?>">
                          <button type="submit" name="edit" class="btn btn-success"> Edit</button>
                      </form>
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
