<?php
session_start();
include('../config/dbconfig.php');
include('includes/header.php');
include('../message.php');
?>
<div class="container-fluid px-4">
<h4 class="mt-4">THE XYZ HOSPITAL</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Vaccines</li>
        </ol>
            <div class="table-responsive">
            <?php
                $query = "SELECT * FROM vaccine";
                $query_run = mysqli_query($con, $query);
                
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Vaccine ID </th>
                            <th>Vaccine Name </th>
                            <th>Number of Doses </th>
                            <th>Available Stock</th>
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
                                <td><?php  echo $row['v_id']; ?></td>
                                <td><?php  echo $row['v_name']; ?></td>
                                <td><?php  echo $row['totaldose']; ?></td>
                                <td><?php  echo $row['availability']; ?></td>
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