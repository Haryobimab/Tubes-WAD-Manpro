<?php
session_start();
require('../controller/connect.php');
include('../controller/loginController.php');

$id=$_SESSION['id'];
$judul = $_POST['judul'];
$kontenpembinaan = $_POST['kontenpembinaan'];
$mydate=getdate(date("U"));
$tanggal= "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";

$query = "INSERT INTO pembinaan (id, judul, teks_pembinaan, tanggal) VALUES ('$id', '$judul', '$kontenpembinaan', '$tanggal')";
$insert = mysqli_query($connect, $query);

header('Location: ../view/Form Pembinaan.php');

?>