<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
                <h1 class="mt-4">THE XYZ HEALTH CARE ADMIN PANEL</h1>
                <ol class="breadcrumb mb-4">
                    <h4><li class="breadcrumb-item active">Dashboard/Send Remainder</li></h4>
                </ol>
        <div class="card-body">
            <div class="table-responsive">
        <br>
            <?php
                $query ="SELECT pushed_serial, patientid, vaccineid, doseno, dateofpushed, reminder
                        FROM pushed
                        NATURAL JOIN registers_for
                        WHERE appointmentid = reg_serial AND vaccineid != 1 AND ((vaccineid=2 AND doseno<3) 
                                            OR (vaccineid=3 AND doseno<3) OR (vaccineid=4 AND doseno<4) 
                                            OR (vaccineid=5 AND doseno<2) OR (vaccineid=6 AND doseno<2) 
                                            OR (vaccineid=7 AND doseno<5) OR (vaccineid=8 AND doseno<2))  ORDER BY dateofpushed  DESC;";
                $query_run = mysqli_query($con, $query);  
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="text-align:center;">Serial No </th>
                            <th style="text-align:center;">Patient's Name </th>
                            <th style="text-align:center;">Patient's Email </th>
                            <th style="text-align:center;">Vaccine</th>
                            <th style="text-align:center;">Next Dose No</th>
                            <th style="text-align:center;">Expected Date</th>
                            <th style="text-align:center;">Remainder Date</th>
                            <th style="text-align:center;">Send Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {        
                                $id=$row['patientid'];
                                $vid=$row['vaccineid'];

                                $query_pat = "SELECT u_firstname ,u_lastname,u_email FROM user WHERE u_id ='$id'";
                                $query_pat_run = mysqli_query($con, $query_pat);
                                $retrive_pat = mysqli_fetch_array($query_pat_run);

                                $query_vaccine = "SELECT v_name FROM vaccine WHERE v_id ='$vid'";
                                $query_vaccine_run = mysqli_query($con, $query_vaccine);
                                $retrive_vaccine = mysqli_fetch_array($query_vaccine_run);
                        ?>
                            <tr>
                                <td style="text-align:center;"><?php  echo $row['pushed_serial']; ?></td>
                                <td style="text-align:center;"><?php  
                                        $name=$retrive_pat['u_firstname'];
                                        $lname=$retrive_pat['u_lastname'];
                                        echo $name." ".$lname; 
                                    ?></td>
                                <td style="text-align:center;"><?php
                                        $email=$retrive_pat['u_email'];
                                         echo $email; 
                                    ?></td>
                                <td style="text-align:center;"><?php  echo $retrive_vaccine['v_name']; ?></td>
                                <td style="text-align:center;"><?php  echo $row['doseno'] + 1; ?>
                                <td style="text-align:center;"><?php $vac_date=$row['dateofpushed'];
                                            if($vid==2){
                                                $date_p5=date('Y-m-d', strtotime($vac_date. ' + 28 days'));
                                                echo $date_p5;
                                            }
                                            else if($vid==3){
                                                $date_pcv=date('Y-m-d', strtotime($vac_date. ' + 28 days'));
                                                echo $date_pcv;
                                            }
                                            else if($vid==4){
                                                $date_opv=date('Y-m-d', strtotime($vac_date. ' + 28 days'));
                                                echo $date_opv;
                                            }
                                            else if($vid==5){
                                                $date_ipv=date('Y-m-d', strtotime($vac_date. ' + 56 days'));
                                                echo $date_ipv;
                                            }
                                            else if($vid==6){
                                                $date_mr=date('Y-m-d', strtotime($vac_date. ' + 180 days'));
                                                echo $date_mr;
                                            }
                                            else if($vid==7){
                                                if($row['doseno']==1){
                                                    $date_tt1=date('Y-m-d', strtotime($vac_date. ' + 28 days'));
                                                    echo $date_tt1;
                                                }
                                                else if($row['doseno']==2){
                                                    $date_tt2=date('Y-m-d', strtotime($vac_date. ' + 180 days'));
                                                    echo $date_tt2;
                                                }
                                                else if($row['doseno']==3){
                                                    $date_tt3=date('Y-m-d', strtotime($vac_date. ' + 365 days'));
                                                    echo $date_tt3;
                                                }
                                                else if($row['doseno']==4){
                                                    $date_tt4=date('Y-m-d', strtotime($vac_date. ' + 365 days'));
                                                    echo $date_tt4;
                                                }
                                            }
                                            else if($vid==8){
                                                $date_rota=date('Y-m-d', strtotime($vac_date. ' + 60 days'));
                                                echo $date_rota;
                                            }
                                ?></td>            
                                <td style="text-align:center;"> <?php
                                            if($vid==2){
                                                $date_rp5=date('Y-m-d', strtotime($date_p5. ' - 4 days'));
                                                echo $date_rp5;
                                            }
                                            else if($vid==3){
                                                $date_rpcv=date('Y-m-d', strtotime($date_pcv. ' - 4 days'));
                                                echo $date_rpcv;
                                            }
                                            else if($vid==4){
                                                $date_ropv=date('Y-m-d', strtotime($date_opv. ' - 4 days'));
                                                echo $date_ropv;
                                            }
                                            else if($vid==5){
                                                $date_ripv=date('Y-m-d', strtotime($date_ipv. ' - 4 days'));
                                                echo $date_ripv;
                                            }
                                            else if($vid==6){
                                                $date_rmr=date('Y-m-d', strtotime($date_mr. ' - 4 days'));
                                                echo $date_rmr;
                                            }
                                            else if($vid==7){
                                                if($row['doseno']==1){
                                                    $date_rtt1=date('Y-m-d', strtotime($date_tt1. ' - 4 days'));
                                                    echo $date_rtt1;
                                                }
                                                else if($row['doseno']==2){
                                                    $date_rtt2=date('Y-m-d', strtotime($date_tt2. ' - 4 days'));
                                                    echo $date_rtt2;
                                                }
                                                else if($row['doseno']==3){
                                                    $date_rtt3=date('Y-m-d', strtotime($date_tt3. ' - 4 days'));
                                                    echo $date_rtt3;
                                                }
                                                else if($row['doseno']==4){
                                                    $date_rtt4=date('Y-m-d', strtotime($date_tt4. ' - 4 days'));
                                                    echo $date_rtt4;
                                                }
                                            }
                                            else if($vid==8){
                                                $date_rrota=date('Y-m-d', strtotime($date_rota. ' - 4 days'));
                                                echo $date_rrota;
                                            }
                                    ?>
                                </td>
                                
                                <td style="text-align:center;">
                                <?php 
                                if($row['reminder']==0){
                                    ?>
                                <form action="../mymail/remainder_email.php" method="POST" >
                                     <input type="hidden" name="edit_serial" value="<?php echo $row['pushed_serial'];?>">
                                    <button type="submit" name="send_remainder_mail" class="btn btn-secondary">Send</button>
                                </form> 
                                <?php
                                }
                                 else if($row['remainder']==1)
                                echo '<p class="btn btn-warning">Sent</p>';
                                ?>
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