<?php
    include('connect.php');

    $id = $GET['id'];

    $delete = mysqli_query($connect, "DELETE FROM user WHERE id='$id'");

    if ($delete){
        header('Location: User Management.php');
    }