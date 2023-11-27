<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

$host = "localhost:3307";
$user = "root";
$pass = "";
$db = "mysu";
$connect = mysqli_connect($host, $user, $pass, $db);  
    

if($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }else{
      echo "lesgo";
  }
// 
?>