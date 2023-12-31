<?php
  session_start();
  require('../controller/connect.php'); 
  include('../controller/loginController.php');

  if($_SESSION['jabatan'] == '3') {
    header('Location: Login.php');
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
  <link rel="stylesheet" type="text/css" href="CSS/User Management.css">
</head>
<body>
  <div class="user-management">
    <div class="rectangle-1492"></div>
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
        d="M20 0C8.95431 0 0 8.9543 0 20V80C0 91.0457 8.9543 100 20 100H93V78H232V100H305C316.046 100 325 91.0457 325 80V20C325 8.9543 316.046 0 305 0H20Z"
        fill="#F8FFDB"
      />
    </svg>
  
    <div class="group-18">
      <img class="ellipse-4" src="Image/Ellipse 4.png" />
    </div>
    <div class="admin">Admin</div>

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
  
    <div class="_24-x-7-access">24x7 Access</div>
    <div class="rectangle-1490"></div>
    <a href="User Management Inputan.php"><button class="rectangle-1501" style="border: none;color: #ffffff;text-align: center;text-decoration: none;font: 700 14px 'Lora-Bold', sans-serif;">Tambah Anggota</button></a>
    
    <a href="User Management Removal.php"><button  class="rectangle-1502" style="border: none;color: #ffffff;text-align: center;text-decoration: none;font: 700 14px 'Lora-Bold', sans-serif;">Hapus Anggota</button></a>
    

    <div class="mr-irsyadul-basyar">Mr <?= $data['nama_lengkap'] ?></div>
    <img class="my-su-logo-05-1" src="Image/MySU logo-05.png" />
  </div>
  
</body>
</html>