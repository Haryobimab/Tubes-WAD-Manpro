<?php
session_start();    
require('../controller/connect.php');
include('../controller/loginController.php');
$id=$_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="CSS/Perizinan Pulang.css">

    <style>
        table {
            margin-left: 67.5px;
            width: 100%;
            border-collapse: collapse;
            font-size: 8px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .rectangle-1509 {
            background: #7bc74d;
            border-radius: 5px;
            width: 125px;
            height: 32px;
            position: absolute;
            left: 122px;
            top: 700px;

            border: none;
            color: #ffffff;
            text-align: center;
            text-decoration: none;
            font: 700 14px 'Lora-Bold', sans-serif;
        }
        .rectangle-1510 {
            background: #7bc74d;
            border-radius: 5px;
            width: 125px;
            height: 32px;
            position: absolute;
            left: 122px;
            top: 650px;

            border: none;
            color: #ffffff;
            text-align: center;
            text-decoration: none;
            font: 700 14px 'Lora-Bold', sans-serif;
        }

        .titlepulang {
            color: #000000;
            text-align: center;
            font: 700 10px "Inter-Bold", sans-serif;
            position: absolute;
            left: calc(50% - 140px);
            bottom: 59.75%;
            top: 72%;
            height: 3.12%;
            width: 110px;
        }
        .rectangle-1560 {
            background: #ffffff;
            border-style: solid;
            border-color: #393e46;
            border-width: 1px;
            width: 287px;
            height: 28px;
            position: absolute;
            left: calc(50% - 138px);
            top: 600px;
        }
    </style>

</head>
<body>
        <form action="../controller/perizinanpulangcontroller.php"  method="post"



        class="perizinan-pulang">
    
        <div class="rectangle-189"></div>
        <div class="rectangle-190"></div>
        

        <div class="title">Perizinan Pulang</div>
        <div class="rectangle-1508"></div>

  <h1 style="color:black;z-index: 1;position: absolute;left: -50px;top: 250px;">
    <div class="container">
      <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Alasan</th>
                    <th>Status</th>
                </tr>
            </thead>
        
            <tbody>
                <?php
                include('../controller/connect.php');
                // Melakukan penampilan form request yang diminta dari penghuni
                $id=$_SESSION['id'];
                $query = mysqli_query($connect, "SELECT * FROM perizinan_pulang WHERE id = '$id'");

                if($query){
                    while ($selects = mysqli_fetch_assoc($query)){

                    if($selects['id_perizinan']=='1'){
                        $id_perizinan='Disetujui';
                    }
                    elseif($selects['id_perizinan']=='2'){
                        $id_perizinan='Ditolak';
                    }
                    elseif($selects['id_perizinan']=='3'){
                        $id_perizinan='Menunggu';
                    }


                    

                ?>
                <tr>
                    <td><?= $selects['id_pulang'] ?></td>
                    <td><?= $selects['tanggal'] ?></td>
                    <td><?= $selects['alasan'] ?></td>
                    <td><?= $id_perizinan ?></td>
                </tr>
                <?php
                        }
                    }

                    else    {
                        echo"Tidak ada data di database";
                    }

                ?>


            </tbody>
      </table>
    </div>
  </h1>
  
  
</body>
    <!-- Membuat inputan untuk melakukan delete form -->
    <div class="titlepulang">Silahkan Masukan ID</div>
    <input name="id_pulang" class="rectangle-1560">
    <input type="submit" name="delete_form" value="Delete Form" class="rectangle-1510" style="left: 122px;">
    <!-- Membuat inputan untuk membuat form perizinan baru -->
    <input name="id_izin" value= <?= $id_perizinan ?>>
    <input type="submit" name="new_form" value="Buat Form Baru" class="rectangle-1509" style="left: 122px;">
</html>