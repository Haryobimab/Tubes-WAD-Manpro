<?php

include('../controller/connect.php');

if(isset($_POST['login'])){

    $name = $_POST['username'];
    $password = $_POST['password'];

    
    $query = "SELECT * FROM user WHERE username = '$name'";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) == 1) {
    
        if(password_verify($password, $data['password'])){
            $_SESSION['login'] = true;
            $_SESSION['id'] = $data['id'];
            echo "pass aman";
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