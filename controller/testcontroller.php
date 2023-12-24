<?php
    include('../controller/connect.php');
    $id = $_GET['id'];
    session_start();
    $_SESSION["dataid"] = $id;

    header('Location: ../view/Remove Form Perizinan Pulang.php');

    
?>