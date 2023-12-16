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
    <link rel="stylesheet" type="text/css" href="CSS/Form Pembinaan.css">
</head>
<body>
    
<form action="../controller/formpembinaancontroller.php"  method="post"
  class="form-pembinaan"
  style="background: url(Image/Rectangle\ 1494.png) center; background-size: cover"
>
  <div class="rectangle-189"></div>
  <div class="rectangle-190"></div>

  <a href="<?= $jabatans ?>">
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

  <div class="pembinaan">Pembinaan</div>
  <div class="rectangle-1508"></div>
  <div class="judul">Judul</div>
  <input name="judul" class="rectangle-1506">
  <div class="konten-pembinaan">Konten Pembinaan</div>
  <textarea name="kontenpembinaan" class="rectangle-15062"></textarea>
  <input type="submit" value="Simpan" class="rectangle-1509" style="left: 122px;">
</form>

</body>
</html>