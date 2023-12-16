<?php 
session_start();
require('../controller/connect.php');
include('../controller/loginController.php');

//id sesuaikan
$id=$_SESSION['id'];
$tilawah = $_POST['tilawah'];
$murajaah = $_POST['murajaah'];
$puasasunnah = $_POST['puasasunnah'];
$tahajud = $_POST['tahajud'];



$query = "INSERT INTO aktivitas_mingguan (id, tilawah, murajaah, puasa_sunnah, tahajjud) VALUES ('$id', '$tilawah', '$murajaah', '$puasasunnah', '$tahajud')";
$insert = mysqli_query($connect, $query);

header('Location: ../view/Form Mingguan-2.php');


?>
