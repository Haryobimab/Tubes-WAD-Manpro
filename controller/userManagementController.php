<?php

header('Location: ../view/User Management (2)');

require 'connect.php';


session_start();



    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $jabatan = $_POST['jabatan'];

        

    $query1 = "SELECT * FROM user WHERE name = '$name'";
    $result = mysqli_query($connect, $query1);

    if(mysqli_num_rows($result) == 0) {
    
    $query2 = "INSERT INTO users (name, username, password, jabatan) VALUES ('$name', '$username', '$password', '$jabatan')";
    $insert = mysqli_query($connect, $query2);
      
        if($insert){
            header('Location: ../view/User Management Controller (3).php');
        }

    }else{
        header('Location: ../view/User Management Controller (2).php');
    }

