<?php
session_start();
require('../controller/connect.php');
include('../controller/loginController.php');

$id=$_SESSION['id'];
$query1 = "SELECT * FROM aktivitas_mingguan WHERE id='$id' ORDER BY id_aktivitas DESC";
$search = mysqli_query($connect, $query1);
$data = mysqli_fetch_assoc($search);

//id aktivitas nanti sesuaikan
$idaktivitas=$data['id_aktivitas'];
$dhuha = $_POST['dhuha'];
$infaq = $_POST['infaq'];
$wirid = $_POST['wirid'];
$olahraga = $_POST['olahraga'];

$query = "UPDATE aktivitas_mingguan SET dhuha='$dhuha',infaq='$infaq',wirid='$wirid',olahraga='$olahraga' WHERE id_aktivitas='$idaktivitas'";
$insert = mysqli_query($connect, $query);

header('Location: ../view/Form Mingguan3.php');
?>