<?php
include('../controller/connect.php');

    
    $id = $_GET['id'];
    $query = mysqli_query($connect, "SELECT * FROM user WHERE id='$id'");
    $selects = mysqli_fetch_assoc($query);

    $delete = mysqli_query($connect, "DELETE FROM user WHERE id='$id'");

    if ($delete){
        header('Location: ../view/User Management Removal.php');
    }
?>