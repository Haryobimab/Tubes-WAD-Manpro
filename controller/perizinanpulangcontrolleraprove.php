<?php
    include('../controller/connect.php');

    
    $id = $_GET['id'];

    $query = mysqli_query($connect, "SELECT * FROM perizinan_pulang WHERE id_pulang = $id ");
    $selects = mysqli_fetch_assoc($query);

    // Update data menyetujui form perizinan
    $delete = mysqli_query($connect, "UPDATE perizinan_pulang SET id_perizinan = 1 WHERE id_pulang = $id;");

    if ($delete){
        header('Location: ../view/Status Perizinan.php');
    }

    
?>