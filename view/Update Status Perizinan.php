<?php
  session_start();
  require('../controller/connect.php'); 
  include('../controller/loginController.php');

  if($_SESSION['jabatan'] == '3') {
    header('Location: ../view/Dashboard Penghuni.php');
  } elseif ($_SESSION['jabatan'] == '2'){
    $jabatans = "Dashboard ketua.php";
  }elseif ($_SESSION['jabatan'] == '1'){
    $jabatans = "Dashboard pembina.php";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="CSS/Status Perizinan Update.css">

    <style>
        .table {
            margin-left: 67.5px;
            width: 100%;
            border-collapse: collapse;
            font-size: 15px;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }

        .table2 {
            margin-left: 67.5px;
            width: 100%;
            border-collapse: collapse;
            font-size: 15px;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    
<!-- Controler Bikin disini -->
<form action="../controller/updatestatusperizinancontroller.php"  method="post"



  class="status-perizinan-pulang"
  style="background: url(Image/Rectangle\ 1494.png) center; background-size: cover"
>
  <div class="rectangle-189"></div>
  <div class="rectangle-190"></div>

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

  <div class="title">Update Status Form Perizinan</div>
  <div class="rectangle-1508"></div>
  <h1 style="color:black;z-index: 1;position: absolute;right: 130px;top: 250px;">
    <div class="container">
      <!-- Menampilkan id request form perizinan pulang -->
      <table class="table">
        <tbody>
            <?php
                include('../controller/connect.php');
                $id_perpulangan = $_SESSION['id_data'];

                $query =  "SELECT * FROM perizinan_pulang WHERE id_pulang = '$id_perpulangan'";
                
                $result = $connect -> query($query);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    
                    if($row['id_perizinan']=='1'){
                        $id_perizinan='Disetujui';
                    }
                    elseif($row['id_perizinan']=='2'){
                        $id_perizinan='Ditolak';
                    }
                    elseif($row['id_perizinan']=='3'){
                        $id_perizinan='Menunggu';
                    }
            ?>
            <tr>
                <td> Nama : <?= $row['nama'] ?></td>        
            </tr>
            <tr>
                <td> Alamat : <?= $row['alamat'] ?></td>        
            </tr>
            <tr>
                <td> No Telp : <?= $row['no_telp'] ?></td>        
            </tr>
            <tr>
                <td> Alasan : <?= $row['alasan'] ?></td>        
            </tr>
            <tr>
                <td> Status : <?= $id_perizinan ?></td>        
            </tr>
            <table class="table2">
            <tbody>
                <tr>
                    <td><a href="../controller/perizinanpulangcontrolleraprove.php?id=<?= $row['id_pulang'] ?>" class="btn-acc">Aproved</a></td> 
                    <td><a href="../controller/perizinanpulangcontrollerrejected.php?id=<?= $row['id_pulang'] ?>" class="btn-rjct">Rejected</a></td> 
                </tr>
            </tbody>
            </table>
          <?php
              }
            }else{
                echo "0 results";
            } 

          ?>
        </tbody>
    </table>
    </div>
    </h1>
</form>

</body>
</html>