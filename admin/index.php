<?php
include('authentication.php');
include('includes/header.php');
include('../message.php'); 
?>
<div class="container-fluid px-4">
                        <h4 class="mt-4">THE XYZ HOSPITAL ADMIN PANEL</h4>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>

                        </ol>
                         <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-white text-bs-gray-900: #212529;">
                                    <div class="card-body">Total Registered Patient
                                        <?php 
                                        $query= "SELECT * FROM user WHERE u_role=0";
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
                               <div class="card bg-white text-balck mb-10">
                                    <div class="card-body">Total Vaccinators
                                    <?php 
                                        $query= "SELECT * FROM user WHERE u_role=2";
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
                               <div class="card bg-white text-balck mb-10">
                                    <div class="card-body">Total Admins
                                    <?php 
                                        $query= "SELECT * FROM user WHERE u_role=1";
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
                                    <div class="card-body">Total Pending Requests
                                    <?php 
                                        $query= "SELECT * FROM registers_for WHERE status=0";
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
                                    <div class="card-body">Total Vaccinations
                                    <?php 
                                        $query= "SELECT * FROM registers_for WHERE status=2";
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
                            </div>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
       function drawChart() {
        var data = google.visualization.arrayToDataTable([
          //['Month', 'BCG', 'PCV', 'Pentavalent', 'Rotarix'],
           ['vaccine', 'vaccine'],
          <?php
          include('../config/dbconfig.php');
          $query = "SELECT v_name, count(reg_serial) as cnt
                FROM vaccine, registers_for, pushed
                WHERE reg_serial = appointmentid 
                AND v_id = vaccineid
                AND year(dateofpushed) = year(sysdate())
                GROUP BY v_name
                ORDER BY cnt";
          $query_run = mysqli_query($con, $query);
          while($data = mysqli_fetch_array($query_run)){
                $vaccine = $data['v_name'];
                $total = $data['cnt'];
                ?>
                  ['<?php echo $vaccine;?>', '<?php echo $total;?>'],
                <?php } ?>
        ]);

        var options = {
          chart: {
            title: 'Vaccination Rate of Each Vaccine',
            subtitle: 'Current Year; Aggregation of all Months',
          },
          bars: 'vertical' 
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <div id="barchart_material" style="width: 1300px; height: 700px;"></div>

<?php
include('includes/scripts.php');
?>

</script>                               
<?php
include('includes/scripts.php');
?> 