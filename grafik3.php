<?php
$koneksi         = mysqli_connect("localhost", "root", "", "tesis");
$pergeseran      = mysqli_query($koneksi, "SELECT * FROM node1 ORDER BY id DESC LIMIT 15"); 
$waktu           = mysqli_query($koneksi, "SELECT * FROM node1 ORDER BY id DESC LIMIT 15");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chartjs, PHP dan MySQL Demo Grafik Garis</title>
    <script src="js/Chart.js"></script>
    <style type="text/css">
            .container {
                width: 40%;
                margin: 15px auto;
            }
    </style>
  </head>
  <body>

    <div class="container">
        <canvas id="linechart" width="300" height="300"></canvas>
    </div>

  </body>
</html>

<script  type="text/javascript">
  var ctx = document.getElementById("linechart").getContext("2d");
  var data = {
            labels: [<?php while ($b =mysqli_fetch_array($waktu)) {echo'"'. $b['waktu']. '",';}?>],
            datasets: [
                  {
                    label: "pergeseran",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#29B0D0",
                    borderColor: "#29B0D0",
                    pointHoverBackgroundColor: "#29B0D0",
                    pointHoverBorderColor: "#29B0D0",
                    data: [<?php while ($b = mysqli_fetch_array($pergeseran)) {echo'"'. $b['pergeseran']. '",';}?>],
                  },
                  ]
          };

  var myBarChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
            legend: {
              display: true
            },
            barValueSpacing: 20,
            scales: {
              yAxes: [{
                  ticks: {
                      min: -100,
                  }
              }],
              xAxes: [{
                          gridLines: {
                              color: "rgba(0, 0, 0, 0)",
                          }
                      }]
              }
          }
        });
</script>
