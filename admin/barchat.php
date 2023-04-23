
<html>
  <head>
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
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 1300px; height: 500px;"></div>
  </body>
</html>

<?php
include('includes/scripts.php');
?>
