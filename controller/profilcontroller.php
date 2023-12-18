<?php 
session_start();
require('../controller/connect.php');
include('../controller/loginController.php');


$id=$_SESSION['id'];

$namalengkap = $_POST['nama'];
$email = $_POST['email'];
$nomortelepon = $_POST['nomortelepon'];
$alamat = $_POST['alamat'];

$query = "UPDATE user SET nama_lengkap='$namalengkap',email='$email',nomor_telepon='$nomortelepon',alamat='$alamat' WHERE id='$id'";
$insert = mysqli_query($connect, $query);

if($_SESSION['jabatan'] == '3') {
    header("Location: ../view/Dashboard Penghuni.php");
  } elseif ($_SESSION['jabatan'] == '2'){
    header("Location: ../view/Dashboard ketua.php");
  } elseif ($_SESSION['jabatan'] == '1'){
    header("Location: ../view/Dashboard Pembina.php");;
  }
