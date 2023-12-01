<?php
  session_start();
  include('../controller/connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="CSS/Form Mingguan.css">
</head>
<body>
<form action="../controller/formmingguanpage1.php" method="post" class="form-mingguan">
  <input type="submit" class="rectangle-1485" value="Berikutnya">
  
  <div class="rectangle-1480"></div>
  <input name="tahajud" class="rectangle-23">
  <div class="rectangle-1483"></div>
  <input name="puasasunnah" class="rectangle-1484">
  <div class="rectangle-1481"></div>
  <input name="murajaah" class="rectangle-1482">
  <div class="rectangle-14802"></div>
  <input name="tilawah" class="rectangle-232">
  
  <div class="catat-aktivitas-tahajud">Catat Aktivitas Tahajud</div>
  <div class="catat-aktivitas-puasa-sunnah">Catat Aktivitas Puasa Sunnah</div>
  <div class="catat-aktivitas-murajaah">Catat Aktivitas Murajaah</div>
  <div class="catat-aktivitas-tilawah">Catat Aktivitas Tilawah</div>
  <div class="rectangle-189"></div>
  <div class="rectangle-190"></div>
  <div class="form-mingguan2">Form Mingguan</div>
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
</body> 
</html>