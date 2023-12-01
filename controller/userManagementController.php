<?php

require 'connect.php';

echo 'ahahhahah';
session_start();


if(isset($_POST['apply'])){

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    if ($_POST['jabatan'] == 'Pembina'){
        $jabatan = '1';
    }elseif ($_POST['jabatan'] == 'Ketua'){
        $jabatan = '2';
    }elseif ($_POST['jabatan'] == 'Penghuni'){
        $jabatan = '3';
    }
        

    $query1 = "SELECT * FROM user WHERE name = '$name'";
    $result = mysqli_query($connect, $query1);

    if(mysqli_num_rows($result) == 0) {
    
    $query2 = "INSERT INTO user (name, username, password, jabatan) VALUES ('$name', '$username', '$password', '$jabatan')";
    $insert = mysqli_query($connect, $query2);
    echo 'berhasil';
        if($insert){
            header('Location: ../view/User Management Removal.php');
        }

    }else{
        echo "nama udah ada coyy";
    }

}