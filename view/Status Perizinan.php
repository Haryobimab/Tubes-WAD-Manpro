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

    <link rel="stylesheet" type="text/css" href="CSS/Status Perizinan.css">

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
    </style>

</head>
<body>
    <!-- Setting Controller untuk status -->
    <form action="../controller/testcontroller.php"  method="post"



        class="perizinan-pulang">
    
        <div class="rectangle-189"></div>
        <div class="rectangle-190"></div>
        

        <div class="title">Perizinan Pulang</div>
        <div class="rectangle-1508"></div>

    <h1 style="color:black;z-index: 1;position: absolute;left: -50px;top: 250px;">
        <div class="container">
            <!-- Menampilkan data yang status nya masih menunggu / waiting -->
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
                    $id=$_SESSION['id'];
                    // Query yang dipakai akan memilih dari status id yaitu id no 3
                    $query = mysqli_query($connect, "SELECT * FROM perizinan_pulang WHERE id_perizinan = '3'");

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
    <!-- membuat form untuk mendapatkan id = -->
    <form action="../controller/testcontroller.php"  method="post">
        <div class="idtitle">Silahkan Masukan ID </div>
        <textarea name="id_perizinan" class="rectangle-15062"></textarea>
        <input type="submit" value="edit" name="edit" class="rectangle-1509" style="left: 122px;">
    </form>

</html>