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
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="CSS/Form Perizinan Pulang.css">
</head>
<body>
    
<!-- Controler Bikin disini -->
<form action="../controller/formperizinanpulangcontroller.php"  method="post"



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

  <!-- memberikan box inputan data untuk form perizinan pulang -->
  <div class="title">Form Perizinan Pulang</div>
  <div class="rectangle-1508"></div>

  <div class="name">Nama</div>
  <input name="nama" class="rectangle-1506">

  <div class="phonenummber">No. Telp</div>
  <input name="no_telp" class="rectangle-1507">

  <div class="address">Alamat</div>
  <input name="alamat" class="rectangle-1560">

  <div class="reason">Alasan</div>
  <textarea name="alasan" class="rectangle-15062"></textarea>


  <!--  inout untuk mengirim data kedalam database-->
 <input type="submit" value="save" name="save" class="rectangle-1509" style="left: 122px;">

</form>

</body>
</html>