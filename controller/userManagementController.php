<?php

require 'connect.php';

session_start();


if(isset($_POST['apply'])){

    $name = $_POST['nama'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    if ($_POST['hakakses'] == 'Pembina'){
        $hakakses = '1';
    }elseif ($_POST['hakakses'] == 'Ketua'){
        $hakakses = '2';
    }elseif ($_POST['hakakses'] == 'Penghuni'){
        $hakakses = '3';
    }
        

    $query1 = "SELECT * FROM user WHERE name = '$name'";
    $result = mysqli_query($connect, $query1);

    if(mysqli_num_rows($result) == 0) {
    
    $query2 = "INSERT INTO user (name, username, password, jabatan, nama_lengkap) VALUES ('$name', '$username', '$password', '$hakakses', '$nama')";
    $insert = mysqli_query($connect, $query2);
    echo 'berhasil';
        if($insert){
            header('Location: ../view/User Management Removal.php');
        }

    }else{
        echo "<script>
        alert('Nama Sudah Ada.')
        document.location.href = '../view/User Management Inputan.php'
        </script>";
        
    }

}