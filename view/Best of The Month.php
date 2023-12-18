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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="CSS/Best of The Month.css">
</head>
<body>
    <div class="best-of-the-month">
        <div class="rectangle-190"></div>
        <div class="leaderboard">LEADERBOARD</div>
        <div class="top-residents">TOP #RESIDENTS</div>
        <div class="of-the-month">OF THE MONTH</div>
        <div class="agus-supratman">Agus Supratman</div>
        <div class="beni-adam">Beni Adam</div>
        <div class="beni-adam2">Beni Adam</div>
        <div class="abdul-qodir">Abdul Qodir</div>
        <div class="rectangle-1490"></div>

        <a href="<?= $jabatans; ?>">
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
      
        <!--Start Penghuni Terbaik-->
        
      </div>
      
</body>
</html>