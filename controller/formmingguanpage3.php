<?php 
include('connect.php');


$id=2;
$query1 = "SELECT * FROM aktivitas_mingguan WHERE id='$id'";
$search = mysqli_query($connect, $query1);
$data = mysqli_fetch_assoc($search);

//id aktivitas nanti sesuaikan
$idaktivitas=$data['id_aktivitas'];
$teleponortu = $_POST['teleponortu'];
$tahsintahfiz = $_POST['setorhafalan'];
$mydate=getdate(date("U"));
$tanggal= "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";

$query = "UPDATE aktivitas_mingguan SET telpon_ortu='$teleponortu',tahfiz_tahsin='$tahsintahfiz',tanggal='$tanggal' WHERE id_aktivitas='$idaktivitas'";
$insert = mysqli_query($connect, $query);

header('Location: ../view/Dashboard Penghuni.php');
?>