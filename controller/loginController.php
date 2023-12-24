<?php

require('../controller/connect.php');


if(isset($_POST['login'])){

    $name = $_POST['username'];
    $password = $_POST['password'];

    
    $query = "SELECT * FROM user WHERE name = '$name'";
    $result = mysqli_query($connect, $query);
    

    //user found
    if(mysqli_num_rows($result) == 1) {

        //check password
        $data = mysqli_fetch_assoc($result);
        
        if(password_verify($password, $data['password'])){

            $_SESSION['login'] = true;
            $_SESSION['id'] = $data['id'];
            if ($data['jabatan'] == '1'){
                $_SESSION['jabatan'] = $data['jabatan'];
                header("Location: ../view/Dashboard Pembina.php");
               
            }

            if ($data['jabatan'] == '2'){
                $_SESSION['jabatan'] = $data['jabatan'];
                header("Location: ../view/Dashboard ketua.php");
            }
            
            if ($data['jabatan'] == '3'){
                $_SESSION['jabatan'] = $data['jabatan'];
                header("Location: ../view/Dashboard Penghuni.php");
                
            }

        }else{
            echo "<script>
            alert('Password Salah!')
            document.location.href = '../view/Login.php'
            </script>";
        }
    }else{
        echo "<script>
        alert('Username Tidak Ada!')
        document.location.href = '../view/Login.php'
        </script>";
    }
}
?>