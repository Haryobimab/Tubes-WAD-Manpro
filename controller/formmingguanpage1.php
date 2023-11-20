<?php 
include('connect.php');

//id sesuaikan
$id=2;
$tilawah = $_POST['tilawah'];
$murajaah = $_POST['murajaah'];
$puasasunnah = $_POST['puasasunnah'];
$tahajud = $_POST['tahajud'];



$query = "INSERT INTO aktivitas_mingguan (id, tilawah, murajaah, puasa_sunnah, tahajjud) VALUES ('$id', '$tilawah', '$murajaah', '$puasasunnah', '$tahajud')";
$insert = mysqli_query($connect, $query);

header('Location: ../view/Form Mingguan-2.php');


?>
