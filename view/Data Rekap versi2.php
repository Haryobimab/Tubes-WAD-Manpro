<?php
  session_start();
  require('../controller/connect.php'); 
  include('../controller/loginController.php');

  if($_SESSION['jabatan'] == '3') {
    $jabatans = "Dashboard Penghuni.php";
  } elseif ($_SESSION['jabatan'] == '2'){
    $jabatans = "Dashboard ketua.php";
  } elseif ($_SESSION['jabatan'] == '1'){
    $jabatans = "Dashboard Pembina.php";
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="CSS/Data Rekap versi 1.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
           google.charts.load('current', {
        'packages': ['corechart', 'bar']
      });
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
          ['', '', ''],
          ['26 Februari', 80, 43.3],
          ['31 Maret', 24, 74.5],
          ['29 Juni', 30, 34.3],
        ]);

        var materialOptions = {
          width: 329,
        
          series: {
            0: {
              axis: 'Standar'
            }, // Bind series 0 to an axis named 'distance'.
            1: {
              axis: 'X-Standar'
            } // Bind series 1 to an axis named 'brightness'.
          },

        };


        function drawMaterialChart() {
          var materialChart = new google.charts.Bar(chartDiv);
          materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));

        }

        drawMaterialChart();
      }

    </script>
</head>
<body>
    <div class="data-recapitulation">
        <div class="rectangle-189"></div>
        <div class="rectangle-190"></div>

        <a href="<?= $jabatans; ?>">
        <svg
          class="vector"
          width="16"
          height="16"
          viewBox="0 0 16 16"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M8 16L0 8L8 0L9.425 1.4L3.825 7H16V9H3.825L9.425 14.6L8 16Z"
            fill="white"
          />
        </svg></a>
      
        <div class="data-rekap">Data Rekap</div>
        
        
        <!--Zona Masuk Chart-->
        
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <div id="chart_div" style="width: 300px; height: 359px;" class="rectangle-1486"></div>
        


        <!--Zona Chart Selesai-->
        <div class="rectangle-1487"></div>
        <div class="keterangan">Keterangan</div>
        <svg
          class="ellipse-17"
          width="16"
          height="16"
          viewBox="0 0 16 16"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8Z"
            fill="#dc3912"
          />
        </svg>
      
        <svg
          class="ellipse-18"
          width="16"
          height="16"
          viewBox="0 0 16 16"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8Z"
            fill="#3366cc"
          />
        </svg>
      
        <div
          class="menunjukan-banyak-mahasiswa-yang-performasi-nya-tidak-memenuhi-standar"
        >
          Menunjukan banyak mahasiswa yang performasi nya tidak memenuhi standar
          <br />
        </div>
        <div class="menunjukan-banyak-mahasiswa-yang-memenuhi-standar-performa">
          Menunjukan banyak mahasiswa yang memenuhi standar performa <br />
        </div>
      </div>
      
</body>
</html>