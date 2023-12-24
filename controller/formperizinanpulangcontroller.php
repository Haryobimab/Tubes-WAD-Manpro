<?php

require 'connect.php';

session_start();
require('../controller/connect.php');
include('../controller/loginController.php');

$id = $_SESSION['id'];

if(isset($_POST['save'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $alasan = $_POST['alasan'];



    $query3 = "INSERT INTO `perizinan_pulang` (`id_pulang`, `nama`, `alamat`, `no_telp`, `alasan`, `id`, `tanggal`, `id_perizinan`)
     VALUES (NULL, '$nama', '$alamat', '$no_telp', '$alasan', '$id', current_timestamp(), '3');";

    $insert = mysqli_query($connect, $query3);
    echo 'berhasil';
        if($insert){
            header('Location: ../view/Perizinan Pulang.php');
        }

}