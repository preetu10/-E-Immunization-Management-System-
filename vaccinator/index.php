<?php
include('authentication.php');
include('includes/header.php');
include('../message.php'); 
$email=$_SESSION['email'];
?>
<div class="container-fluid px-4">
                        <h4 class="mt-4">THE XYZ HOSPITAL</h4>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Vaccinator Dashboard</li>

                        </ol>
                         <div class="row"> 
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-white text-black mb-4">
                                    <div class="card-body">Total Approved Requests
                                    <?php 
                                        $query= "SELECT * FROM registers_for WHERE status>0";
                                        $query_run=mysqli_query($con, $query);
                                        if($total=(mysqli_num_rows($query_run)))
                                        {
                                            echo '<h4 class="mb-0">'.$total.'</h4>';
                                        }
                                        else
                                        {
                                             echo '<h5 class="mb-0">Empty</h5>';
                                        }
                                        ?>  
                                    </div>
                                </div>
                             </div>
                             <div class="col-xl-3 col-md-6">
                                <div class="card bg-white text-black mb-4">
                                    <div class="card-body">Total Vaccinations by You
                                    <?php 
                                        $result = mysqli_query($con, "SELECT * FROM user WHERE u_email='$email'");
                                        $retrive = mysqli_fetch_array($result);
                                        $id=$retrive['u_id'];
                                        $query= "SELECT * FROM pushed WHERE vaccinatorid='$id' ";
                                        $query_run=mysqli_query($con, $query);
                                        if($total=(mysqli_num_rows($query_run)))
                                        {
                                            echo '<h4 class="mb-0">'.$total.'</h4>';
                                        }
                                        else
                                        {
                                            echo '<h5 class="mb-0">Empty</h5>';
                                        }
                                        ?>  
                                    </div>
                                </div>
                             </div>
                             <div class="col-xl-3 col-md-6">
                                <div class="card bg-white text-black mb-4">
                                    <div class="card-body">Total Vaccine Catagories
                                    <?php 
                                        $query= "SELECT * FROM vaccine";
                                        $query_run=mysqli_query($con, $query);
                                        if($total=(mysqli_num_rows($query_run)))
                                        {
                                            echo '<h4 class="mb-0">'.$total.'</h4>';
                                        }
                                        else
                                        {
                                            echo '<h5 class="mb-0">Empty</h5>';
                                        }
                                        ?> 
                                    </div>
                                </div>
                             </div>
                             <!-- <div class="col-xl-3 col-md-6">
                                <div class="card bg-white text-black mb-4">
                                    <div class="card-body">Total Avaliable Vaccines(Stock)
                                    <?php 
                                        $query= "SELECT sum(availability) FROM vaccine ";
                                        $query_run=mysqli_query($con, $query);
                                        if($total=(mysqli_num_rows($query_run)))
                                        {
                                            echo '<h6 class="mb-0">'.$total.'</h6>';
                                        }
                                        else
                                        {
                                            echo '<h5 class="mb-0">Empty</h5>';
                                        }
                                        ?> 
                                    </div>
                                </div>
                             </div> -->
                         </div>
</div>

<?php
include('includes/scripts.php');
?>