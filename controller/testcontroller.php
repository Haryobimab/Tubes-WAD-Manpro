<?php
    session_start();
    include('../controller/connect.php');
    if(isset($_POST['edit'])){
        $id = $_POST['id_perizinan'];
        $_SESSION["id_data"] = $id;
        echo $id;
    }
    

    header('Location: ../view/Update Status Perizinan.php');

    
?>