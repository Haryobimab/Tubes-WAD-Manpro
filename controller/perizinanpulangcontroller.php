<?php 
    session_start();
    include('../controller/connect.php');
    if(isset($_POST['delete_form'])){

        $id = $_POST['id_izin'];
        if($id =='Disetujui' && 'Ditolak'){
            echo "<script>
            alert('Form tidak dapat di hapus')
            document.location.href = '../view/Perizinan Pulang.php'
            </script>";
            
        }
        else{
            $id = $_POST['id_pulang'];
            $_SESSION["dataid"] = $id;
            header('Location: ../view/Remove Form Perizinan Pulang.php');
        }
        
       

    }elseif(isset($_POST['new_form'])){
        $id = $_POST['id_izin'];

        if($id=='Menunggu'){
            echo "<script>
            alert('Anda sudah membuat form silahkan tunggu')
            document.location.href = '../view/Perizinan Pulang.php'
            </script>";
            
        }else{
            header('Location: ../view/Form Perizinan Pulang.php');
        }
        
    }

?>