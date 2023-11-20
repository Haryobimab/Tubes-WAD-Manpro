<?php
include('connect.php');

//id sesuaikan
$id=2;
$judul = $_POST['judul'];
$kontenpembinaan = $_POST['kontenpembinaan'];
$mydate=getdate(date("U"));
$tanggal= "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";

$query = "INSERT INTO pembinaan (id, judul, teks_pembinaan, tanggal) VALUES ('$id', '$judul', '$kontenpembinaan', '$tanggal')";
$insert = mysqli_query($connect, $query);

header('Location: ../view/Form Pembinaan.php');

?>