<?php
    include('../controller/connect.php');

    
    $id = $_GET['id'];

    $query = mysqli_query($connect, "SELECT * FROM perizinan_pulang WHERE id_pulang = $id ");
    $selects = mysqli_fetch_assoc($query);
    // Penghuni dapat melakukan delete suatu form.
    $delete = mysqli_query($connect, "DELETE FROM perizinan_pulang WHERE id_pulang = $id");

    if ($delete){
        header('Location: ../view/Perizinan Pulang.php');
    }

    
?>