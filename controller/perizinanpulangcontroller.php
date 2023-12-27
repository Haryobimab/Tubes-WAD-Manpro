<?php 
    session_start();
    include('../controller/connect.php');
    if(isset($_POST['delete_form'])){

        $id = $_POST['id_izin'];
        // Pengguna tidak akan dapat melakukan delete pada suatu form dengan status Disetujui / Ditolak
        if($id =='Disetujui' && 'Ditolak'){
            echo "<script>
            alert('Form tidak dapat di hapus')
            document.location.href = '../view/Perizinan Pulang.php'
            </script>";
            
        }
        else{
            // Pengguna dapat melakukan delete jika suatu form masih dengan status Menunggu
            $id = $_POST['id_pulang'];
            $_SESSION["dataid"] = $id;
            header('Location: ../view/Remove Form Perizinan Pulang.php');
        }
        
       

    }elseif(isset($_POST['new_form'])){
        $id = $_POST['id_izin'];
        // Jika penghuni sudah membuat form dengan status menunggu maka akan ditolak untuk membuat form baru
        if($id=='Menunggu'){
            echo "<script>
            alert('Anda sudah membuat form silahkan tunggu')
            document.location.href = '../view/Perizinan Pulang.php'
            </script>";
        
        }
        // Penghuni tanpa status menunggu dapat membuat form baru
        else{
            header('Location: ../view/Form Perizinan Pulang.php');
        }
        
    }

?>