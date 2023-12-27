<?php
    session_start();
    include('../controller/connect.php');
    if(isset($_POST['edit'])){
        $id = $_POST['id_perizinan'];
        $_SESSION["id_data"] = $id;
        echo $id;
    }
    
    // Melakukan perpindahan page php 1 ke page php lainnya.
    header('Location: ../view/Update Status Perizinan.php');

    
?>