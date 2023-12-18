<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "tugasbesarwad";
$connect = mysqli_connect($host, $user, $pass, $db);

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }