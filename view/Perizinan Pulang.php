<?php


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
                    <th>Tanggal</th>
                    <th>Alamat</th>
                    <th>Alasan</th>
                    <th>Status</th>
                </tr>
            </thead>
        
            <tbody>
                <?php
                include('../controller/connect.php');

                $query = mysqli_query($connect, "SELECT * FROM perizinan_pulang WHERE id = '7'"); // <============== ID NYA STATIC

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
                    <td><?= $selects['tanggal'] ?></td>
                    <td><?= $selects['alamat'] ?></td>
                    <td><?= $selects['alasan'] ?></td>
                    <td>
                        <?php if ($id_perizinan == 'Menunggu'): ?>
                             <a href="../controller/testcontroller.php?id=<?= $row['id_pulang'] ?>" class="btn-delete">Delete</a>  <!-- <============= RIWEH BUAT MINDAHIN ID NYA DOANG & MASIH GAGAL -->
                        <?php else: ?>
                            <?= $id_perizinan ?>
                        <?php endif; ?>
                    </td>
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
    <input type="submit" name="new_form" value="Buat Form Baru" class="rectangle-1509" style="left: 122px;">
</html>