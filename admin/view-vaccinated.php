<?php
include('authentication.php');
include('includes/header.php');
?>
<div class="container-fluid px-4">
    <h4 class="mt-4">THE XYZ HOSPITAL ADMIN PANEL</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Vaccinated Patients</li>
        </ol>
    <?php include('../message.php');?>
    <div class="row">
      <div class = "col-md-12">
        <div class="card">
            <div class="card-header">
              <h4>Vaccinated Patients</h4>
            </div>
            <div class="card-body">
             <table class="table table-border">
               <thead>
                <tr>
                    <th>Serial</th>
                    <th>Patient's Name</th>
                    <th>Patient's Email</th>
                    <th>Vaccine</th>
                    <th>Dose No.</th>
                    <th>Vaccinated At</th>
                    <th>Vaccinator's Name</th>
                    <th>Vaccinator's Email</th>
                </tr>
               </thead>
               <tbody>
                <?php
                $query = "SELECT pus.pushed_serial as serial, concat(p.u_firstname,' ',p.u_lastname) pname, p.u_email as pemail, v_name, reg.doseno as dose, pus.dateofpushed as vacat, concat(vac.u_firstname,' ',vac.u_lastname) vacname, vac.u_email as vacemail
                FROM registers_for as reg, user as p, user as vac, vaccine , pushed as pus
                WHERE pus.appointmentid=reg.reg_serial AND reg.patientid=p.u_id AND reg.vaccineid = v_id AND pus.vaccinatorid=vac.u_id AND reg.status=2
                ORDER BY pus.dateofpushed DESC";
                $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run)>0)
                {
                  foreach($query_run as $row)
                    {

                    ?>
                    <tr>
                       <td><?= $row['serial']; ?></td>
                       <td><?= $row['pname']; ?></td>
                       <td><?= $row['pemail']; ?></td>
                       <td><?= $row['v_name']; ?></td>
                       <td><?= $row['dose']; ?></td> 
                       <td><?= $row['vacat']; ?></td>
                       <td><?= $row['vacname']; ?></td>
                       <td><?= $row['vacemail']; ?></td>
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
