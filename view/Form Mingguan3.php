<?php
  session_start();
  require('../controller/connect.php'); 
  include('../controller/loginController.php');

  if($_SESSION['jabatan'] == '3') {
    $jabatans = "Dashboard Penghuni.php";
  } elseif ($_SESSION['jabatan'] == '2'){
    $jabatans = "Dashboard ketua.php";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="CSS/Form Mingguan3.css">
</head>
<body>
 <div class="form-mingguan" >
    <div class="group-2659" >
          <div class="group-2655" >
                <div class="rectangle-189" >
                </div>
                <div class="rectangle-190" >
                </div>

                <a href="<?= $jabatans ?>">
                <svg class="vector" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 16L0 8L8 0L9.425 1.4L3.825 7H16V9H3.825L9.425 14.6L8 16Z" fill="white"/>
                </svg></a>

                <div class="form-mingguan2" >
Form Mingguan </div>
          </div>
          <div class="group-2658" >
                <div class="group-2657" >
                      <div class="group-2653" >
                            <div class="rectangle-1480" >
                            </div>
            <form action="../controller/formmingguanpage3.php" method="post">
                            <div class="catat-aktivitas-telepon-ortu" >
Catat Aktivitas Telepon Ortu </div>
                            <input name="teleponortu"class="rectangle-23" >
                      </div>
                      <div class="group-2654" >
                            <div class="rectangle-1481" >
                            </div>
                            <div class="catat-aktivitas-setor-hafalan" >
Catat Aktivitas Setor hafalan </div>
                            <input name= "setorhafalan" class="rectangle-1482" >
                      </div>
                </div>
                <div class="group-2656" >
                      <input type="submit" class="rectangle-1485" value="Simpan">
                </div>
          </div>
</form>
    </div>
</div>
</body>
</html>