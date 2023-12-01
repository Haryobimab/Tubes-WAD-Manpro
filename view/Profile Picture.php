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

  $id = $_SESSION['id'];

  $query = "SELECT * FROM user WHERE id = '$id'";
  $result = mysqli_query($connect, $query);
  $data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="CSS/Profile Picture.css">
</head>
<body>
<div class="profile-picture">
  <!--Form-->
  <form action="../controller/profilcontroller.php" method="post">
    <input type="submit" value="Simpan" class="rectangle-1485" style="border:none; cursor: pointer; top: 745px;">
    <div class="rectangle-1496"></div>
    <textarea name="alamat" class="rectangle-1498" style="border:none; color:black; text-align:justify" value=""><?= $data['alamat'] ?></textarea>
    <div class="alamat">Alamat*</div>
    <input name="nomortelepon" class="rectangle-14982" style="border:none" value="<?= $data['nomor_telepon'] ?>" required>
    <div class="nomor-telepon">Nomor Telepon*</div>
    <input name="email" class="rectangle-14983" style="border:none" value="<?= $data['email'] ?>" required>
    <div class="email">Email*</div>
    <input name="nama"class="rectangle-1497" style="border:none" value="<?= $data['nama_lengkap'] ?>">
    <div class="nama-lengkap">Nama Lengkap*</div>
    <div class="informasi-personal">Informasi Personal</div>
  </form>

  <!--Top Profile-->
  <img class="rectangle-1494" src="Image/Rectangle 1494.png" />
  <div class="rectangle-1495"></div>
  <div class="irsyadul-basyar">Irsyadul Basyar</div>

  <!--Change Profile-->
  <form action="../controller/gantifoto.php" method="POST">
    <img class="ellipse-4" src="Image/Ellipse 4.png" />
    <label class="edit">
      <input type="file" name="file" style="display:none; cursor: pointer;">Edit
    </label>
    <input type="submit" value="Submit Foto" style="
    background: #7bc74d;
    border-radius: 5px;
    width: 100px;
    height: 37px;
    border: none; 
    color: #ffffff; 
    text-align: center; 
    text-decoration: none; 
    font: 700 14px 'Lora-Bold', sans-serif;
    position:relative; 
    left: calc(50% - 49.5px); 
    top: 700px;">
  </form>
</div>

</body>
</html>