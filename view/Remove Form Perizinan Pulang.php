<?php
  session_start();
  require('../controller/connect.php'); 
  include('../controller/loginController.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/Remove Form Perizinan Pulang.css">

    <style>
      table {
            margin-left: 67.5px;
            width: 100%;
            border-collapse: collapse;
            font-size: 15px;
        }
        th, td {
            /* border: 1px solid #ddd; */
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
<form action="../controller/removeperizinanpulangcontroller.php"  method="post"



  class="form-perizinan-pulang"
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

  <div class="title">Delete Form Perizinan</div>
  <div class="rectangle-1508"></div>
  

  <h1 style="color:black;z-index: 1;position: absolute;right: 130px;top: 250px;">
    <div class="container">
      <table class="table">
        <tbody>
          <?php
            include('../controller/connect.php');

            //Melakukan get id menggunakan cara $_SESSION
            $id = $_SESSION['dataid'];

            $query =  "SELECT * FROM perizinan_pulang WHERE id_pulang = '$id'";
            
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
          <tr>
            <!-- Menambahkan text link untuk melakukan delete suatu form & mengirimkan id form -->
            <td><a href="../controller/removeperizinanpulangcontroller.php?id=<?= $row['id_pulang'] ?>" class="btn-delete">Delete</a></td>
          </tr>
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