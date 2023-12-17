<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="CSS/User Management Removal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post" class="user-management-removal">
        <div class="back-belakang"></div>
        <div class="back-depan"></div>

        
              
        <svg
          class="subtract"
          width="325"
          height="100"
          viewBox="0 0 325 100"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M20 0C8.95431 0 0 8.9543 0 20V80C0 91.0457 8.9543 100 20 100H93V78H232V100H305C316.046 100 325 91.0457 325 80V20C325 8.95431 316.046 0 305 0H20Z"
            fill="#F8FFDB"
          />
        </svg>
      
        <div class="mr-irsyadul-basyar">Mr Irsyadul Basyar</div>
        <img class="ellipse-4" src="Image/Ellipse 4.png" />
        <div class="_24-x-7-access">24x7 Access</div>
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
        </svg>
    </form>

    <style>
    .container {
        max-width: 70%;
    }

    .table {
        font-size: 14px;
    }

    th, td {
        padding: 10px;
    }
</style>

    <h1 style="color:black;z-index: 1;position: absolute;left: -50px;top: 250px;">
    <div class="container">
                <table class="table">
                    
                    <tbody>
                <?php

              
            include('../controller/connect.php');
            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $query = mysqli_query($connect, "SELECT * FROM user");
            
           

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            if($query){
                while ($selects = mysqli_fetch_assoc($query)){

                  if($selects['jabatan']=='1'){
                    $jabatan='pembina';
                  }
                  elseif($selects['jabatan']=='2'){
                    $jabatan='ketua';
                  }
                  elseif($selects['jabatan']=='3'){
                    $jabatan='penghuni';}

            ?>
            <tr>
    <td><?= $selects['foto_profil'] ?></td>
    <td><?= $selects['name'] ?></td>
    <td><?= $selects['username'] ?></td>
    <td><?= $jabatan ?></td>
    <td><a href="../controller/deleteUser.php?id=<?= $selects['id'] ?>" class="btn btn-primary">Hapus</a></td>
</tr>

            <?php
                }
            }
            //<!--  **  1  **     -->

            //<!--  **  2  **     -->
            else {
                echo"Tidak ada data di database";
            }





            //<!--  **  2  **     -->
            ?>
                </tbody>
            </table>
        </div>
  
  </h1>      

</body>
</html>