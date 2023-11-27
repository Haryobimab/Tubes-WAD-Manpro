<?php

include('../controller/connect.php');

if(isset($_POST['login'])){

    $name = $_POST['name'];
    $password = $_POST['password'];

    
    $query = "SELECT * FROM user WHERE name = '$name'";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) == 1) {

    
        if ($password == $data['password']){
            $_SESSION['login'] = true;
            $_SESSION['id'] = $data['id'];
            
            if ($data['jabatan'] == '1'){
                $_SESSION['jabatan'] = $data['jabatan'];
                header("Location: Dashboard Pembina.php");
            }

            if ($data['jabatan'] == '2'){
                $_SESSION['jabatan'] = $data['jabatan'];
                header("Location: Dashboard ketua.php");
            }
            
            if ($data['jabatan'] == '3'){
                $_SESSION['jabatan'] = $data['jabatan'];
                header("Location: Dashboard Penghuni.php");
            }

        }else{
                echo"gagal";
                var_dump($data);
                echo $name;
                echo $password;
        }
    }else{
        echo"gagal";
        var_dump($data);
        echo $name;
        echo $password;
    }
}
?>