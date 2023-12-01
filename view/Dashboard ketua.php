<?php
session_start();
require('../controller/connect.php');
include('../controller/loginController.php');

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
  }

if ($_SESSION['jabatan'] == '2'){

}   else {
    header('Location: Login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="CSS/Dashboard Ketua.css">
</head>
<body>
    <div
  class="dashboard-ketua"
  style="background: url(Image/Dashboard\ PEMBINA\ \(1\).png) center; background-size: cover"
>
  <div class="rectangle-46"></div>
  <div class="mr-irsyadul-basyar">Mr Irsyadul Basyar</div>
  <div class="selamat-datang">Selamat datang!</div>

  <div class="rectangle-1476"></div>
  <!--Rectangle Aktivitas Mingguan-->
  <a href="Form Mingguan-1.php" class="rectangle-23"></a>
  <!--Rectangle User Management-->
  <a href="User Management.php" class="rectangle-1477"></a>
  <!--Rectangle Best of The Month-->
  <a href="Best of The Month.php" class="rectangle-1478"></a>

  <!--Aktivitas Mingguan-->
  <a href="Form Mingguan-1.php">
  <div class="menambah-aktivitas-mingguan">Menambah Aktivitas Mingguan</div>
  <svg
    class="octicon-feed-plus-16"
    width="22"
    height="21"
    viewBox="0 0 22 21"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <g clip-path="url(#clip0_84_158)">
      <path
        d="M11 0C13.9174 0 16.7153 1.10625 18.7782 3.07538C20.8411 5.04451 22 7.71523 22 10.5C22 13.2848 20.8411 15.9555 18.7782 17.9246C16.7153 19.8938 13.9174 21 11 21C8.08262 21 5.28473 19.8938 3.22183 17.9246C1.15893 15.9555 0 13.2848 0 10.5C0 7.71523 1.15893 5.04451 3.22183 3.07538C5.28473 1.10625 8.08262 0 11 0ZM12.4603 5.6595C12.4603 5.3114 12.3154 4.97756 12.0575 4.73142C11.7997 4.48528 11.4499 4.347 11.0853 4.347C10.7206 4.347 10.3708 4.48528 10.113 4.73142C9.85512 4.97756 9.71025 5.3114 9.71025 5.6595V9.26888H5.929C5.56433 9.26888 5.21459 9.40716 4.95673 9.6533C4.69887 9.89944 4.554 10.2333 4.554 10.5814C4.554 10.9295 4.69887 11.2633 4.95673 11.5095C5.21459 11.7556 5.56433 11.8939 5.929 11.8939H9.71025V15.5033C9.71025 15.8513 9.85512 16.1852 10.113 16.4313C10.3708 16.6775 10.7206 16.8158 11.0853 16.8158C11.4499 16.8158 11.7997 16.6775 12.0575 16.4313C12.3154 16.1852 12.4603 15.8513 12.4603 15.5033V11.8939H16.2415C16.6062 11.8939 16.9559 11.7556 17.2138 11.5095C17.4716 11.2633 17.6165 10.9295 17.6165 10.5814C17.6165 10.2333 17.4716 9.89944 17.2138 9.6533C16.9559 9.40716 16.6062 9.26888 16.2415 9.26888H12.4603V5.6595Z"
        fill="black"
      />
    </g>
    <defs>
      <clipPath id="clip0_84_158">
        <rect width="22" height="21" fill="white" />
      </clipPath>
    </defs>
  </svg>
  </a>

  <img
    class="_1643042273358-removebg-preview-3"
    src="Image/MSU Logo.png"
  /><img class="ellipse-4" src="Image/Ellipse 4.png" />
  <svg
    class="ph-note-pencil-bold"
    width="19"
    height="21"
    viewBox="0 0 19 21"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      d="M17.2551 4.55356L14.8801 1.92856C14.7974 1.83679 14.6991 1.76398 14.5908 1.7143C14.4825 1.66461 14.3665 1.63904 14.2493 1.63904C14.132 1.63904 14.016 1.66461 13.9077 1.7143C13.7995 1.76398 13.7011 1.83679 13.6184 1.92856L6.4934 9.80356C6.32696 9.9886 6.2338 10.2391 6.23438 10.5V13.125C6.23438 13.3861 6.32821 13.6365 6.49523 13.8211C6.66226 14.0057 6.88879 14.1094 7.125 14.1094H9.5C9.61699 14.1095 9.73286 14.0841 9.84098 14.0347C9.94909 13.9853 10.0473 13.9128 10.1301 13.8215L17.2551 5.94646C17.3379 5.85503 17.4036 5.74647 17.4484 5.62697C17.4933 5.50747 17.5163 5.37937 17.5163 5.25001C17.5163 5.12065 17.4933 4.99255 17.4484 4.87305C17.4036 4.75355 17.3379 4.64499 17.2551 4.55356ZM14.25 4.01954L15.3633 5.25001L14.5469 6.15235L13.4336 4.92188L14.25 4.01954ZM9.12891 12.1406H8.01562V10.9102L12.1719 6.31642L13.2852 7.54688L9.12891 12.1406ZM16.9219 10.8749V17.0625C16.9219 17.4976 16.7655 17.9149 16.4871 18.2226C16.2087 18.5303 15.8312 18.7031 15.4375 18.7031H3.5625C3.16882 18.7031 2.79126 18.5303 2.51289 18.2226C2.23451 17.9149 2.07812 17.4976 2.07812 17.0625V3.93751C2.07813 3.50239 2.23451 3.08509 2.51289 2.77741C2.79126 2.46974 3.16882 2.29688 3.5625 2.29688H9.16082C9.39703 2.29688 9.62356 2.4006 9.79059 2.5852C9.95761 2.76981 10.0514 3.02019 10.0514 3.28126C10.0514 3.54233 9.95761 3.79271 9.79059 3.97732C9.62356 4.16192 9.39703 4.26563 9.16082 4.26563H3.85938V16.7344H15.1406V10.8749C15.1406 10.6138 15.2345 10.3634 15.4015 10.1788C15.5685 9.99423 15.795 9.89052 16.0312 9.89052C16.2675 9.89052 16.494 9.99423 16.661 10.1788C16.828 10.3634 16.9219 10.6138 16.9219 10.8749Z"
      fill="white"
    />
  </svg>

  <!--Logout-->
  <a href="../controller/logoutController.php">
  <div class="rectangle-232"></div>
  <div class="keluar">Keluar</div></a>

  <!--User Management-->
  <a href="User Management.php">
  <svg
    class="fluent-person-key-20-filled"
    width="30"
    height="29"
    viewBox="0 0 30 29"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      d="M15 2.90002C13.4087 2.90002 11.8826 3.51109 10.7574 4.59881C9.63214 5.68652 9 7.16177 9 8.70002C9 10.2383 9.63214 11.7135 10.7574 12.8012C11.8826 13.889 13.4087 14.5 15 14.5C16.5913 14.5 18.1174 13.889 19.2426 12.8012C20.3679 11.7135 21 10.2383 21 8.70002C21 7.16177 20.3679 5.68652 19.2426 4.59881C18.1174 3.51109 16.5913 2.90002 15 2.90002ZM7.5135 15.95C7.11845 15.9485 6.72698 16.0224 6.36154 16.1674C5.99609 16.3124 5.66386 16.5258 5.38389 16.7952C5.10392 17.0646 4.88173 17.3848 4.73005 17.7374C4.57837 18.0901 4.50019 18.4681 4.5 18.85C4.5 21.302 5.7495 23.1507 7.7025 24.3557C9.2745 25.3243 11.295 25.8753 13.5 26.042V24.65C13.5 24.0555 13.743 23.519 14.1615 23.1145L18.0315 19.3735C18.0108 19.1692 18.0002 18.964 18 18.7587C17.9934 17.7697 18.2684 16.798 18.795 15.95H7.515H7.5135ZM15.2235 27.3354C15.2915 27.404 15.3732 27.4585 15.4638 27.4954C15.5543 27.5323 15.6517 27.5509 15.75 27.55H18.75C18.8931 27.5499 19.034 27.515 19.1595 27.4485C19.2594 27.3903 19.3376 27.303 19.383 27.1991C19.4305 27.0903 19.4618 26.9756 19.476 26.8584C19.4917 26.7347 19.4997 26.6103 19.5 26.4857V26.1C19.86 26.0928 20.1405 26.0812 20.3445 26.0667C20.5128 26.0643 20.6746 26.0036 20.8005 25.8956C20.9106 25.7771 20.973 25.6242 20.976 25.4649C20.991 25.2764 21 25.0053 21 24.65H21.75C21.915 24.65 22.047 24.6167 22.149 24.5485C22.2465 24.4846 22.3267 24.3991 22.383 24.2991C22.44 24.193 22.4757 24.0774 22.488 23.9584C22.503 23.8308 22.512 23.6974 22.512 23.5625C22.5042 23.453 22.5002 23.3432 22.5 23.2334V22.9506C22.758 23.042 23.019 23.1058 23.2845 23.1435C23.5515 23.1812 23.82 23.2 24.0945 23.2C24.6783 23.1989 25.2557 23.0829 25.7916 22.8591C26.3275 22.6352 26.8106 22.3082 27.2115 21.8979C27.6165 21.489 27.933 21.025 28.1595 20.5045C28.386 19.9825 28.5 19.4315 28.5 18.85C28.5 18.2454 28.383 17.6799 28.149 17.1506C27.9233 16.6346 27.5968 16.1654 27.1875 15.7688C26.777 15.3736 26.2917 15.0586 25.758 14.8408C25.2023 14.6121 24.6039 14.4961 24 14.5C23.4094 14.5107 22.8258 14.6257 22.278 14.8393C21.7438 15.0472 21.2575 15.3552 20.847 15.7456C20.4351 16.1365 20.1015 16.5976 19.863 17.1057C19.6197 17.6248 19.4958 18.1888 19.5 18.7587C19.5 19.1139 19.5435 19.488 19.629 19.881L15.222 24.1396C15.1508 24.2055 15.0944 24.2848 15.0562 24.3726C15.0181 24.4604 14.9989 24.5548 15 24.65V26.825C15 27.0208 15.075 27.1919 15.222 27.3354H15.2235ZM25.9215 16.9926C26.0278 17.0924 26.1117 17.2122 26.1682 17.3447C26.2247 17.4771 26.2526 17.6193 26.25 17.7625C26.2526 17.9057 26.2247 18.048 26.1682 18.1804C26.1117 18.3128 26.0278 18.4326 25.9215 18.5325C25.8182 18.6352 25.6943 18.7164 25.5573 18.771C25.4203 18.8256 25.2732 18.8525 25.125 18.85C24.9768 18.8525 24.8297 18.8256 24.6927 18.771C24.5557 18.7164 24.4318 18.6352 24.3285 18.5325C24.2222 18.4326 24.1383 18.3128 24.0818 18.1804C24.0253 18.048 23.9974 17.9057 24 17.7625C24 17.4609 24.1095 17.2043 24.3285 16.9926C24.4318 16.8898 24.5557 16.8087 24.6927 16.7541C24.8297 16.6994 24.9768 16.6725 25.125 16.675C25.437 16.675 25.7025 16.7809 25.9215 16.9926Z"
      fill="black"
    />
  </svg>

  <div class="mengelola-user">Mengelola User</div></a>

<!--Best of The Month-->
<a href="Best of The Month.php">
  <div class="solar-ranking-bold-duotone">
    <svg
      class="group"
      width="27"
      height="24"
      viewBox="0 0 27 24"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M12.3969 1.52687C12.8877 0.730041 13.1331 0.333374 13.5 0.333374C13.8668 0.333374 14.1122 0.730041 14.6031 1.52687L14.7296 1.73221C14.8691 1.95854 14.9389 2.07054 15.0474 2.14521C15.1572 2.21987 15.2928 2.24787 15.5641 2.30271L15.8095 2.35404C16.7627 2.54887 17.2394 2.64571 17.353 2.97471C17.4667 3.30487 17.1412 3.64787 16.4915 4.33387L16.3236 4.51121C16.1389 4.70604 16.0459 4.80287 16.0045 4.92421C15.9632 5.04554 15.9774 5.17504 16.0045 5.43521L16.0304 5.67204C16.1285 6.58787 16.1776 7.04637 15.8818 7.24937C15.5847 7.45354 15.1378 7.26687 14.2453 6.89587L14.0154 6.80021C13.7609 6.69521 13.6343 6.64154 13.5 6.64154C13.3656 6.64154 13.2391 6.69521 12.9846 6.80021L12.7547 6.89587C11.8621 7.26687 11.4152 7.45354 11.1181 7.24937C10.8211 7.04637 10.8714 6.58787 10.9696 5.67204L10.9954 5.43521C11.0226 5.17504 11.0368 5.04554 10.9954 4.92421C10.9541 4.80404 10.8611 4.70604 10.6764 4.51121L10.5085 4.33387C9.85877 3.64787 9.53327 3.30487 9.64694 2.97471C9.7606 2.64571 10.2372 2.54887 11.1905 2.35404L11.4359 2.30271C11.7071 2.24787 11.8428 2.22104 11.9526 2.14521C12.0611 2.07054 12.1308 1.95854 12.2703 1.73221L12.3969 1.52687ZM14.7916 9.66671H12.2083C10.3819 9.66671 9.46869 9.66671 8.90165 10.18C8.33331 10.691 8.33331 11.5159 8.33331 13.1667V23.6667H18.6666V13.1667C18.6666 11.517 18.6666 10.6922 18.0983 10.18C17.5326 9.66671 16.6194 9.66671 14.7916 9.66671Z"
        fill="black"
      />
      <path
        opacity="0.5"
        d="M7.76498 20.6801C7.19923 20.1667 6.28602 20.1667 4.45831 20.1667C2.6319 20.1667 1.71869 20.1667 1.15165 20.6801C0.583313 21.1911 0.583313 22.0159 0.583313 23.6667H8.33331C8.33331 22.0171 8.33331 21.1922 7.76498 20.6801ZM18.6666 20.1667V23.6667H26.4166V20.1667C26.4166 18.5171 26.4166 17.6922 25.8483 17.1801C25.2826 16.6667 24.3694 16.6667 22.5416 16.6667C20.7152 16.6667 19.802 16.6667 19.235 17.1801C18.6666 17.6911 18.6666 18.5159 18.6666 20.1667Z"
        fill="black"
      />
    </svg>
  </div>
  <div class="penghuni-terbaik">Penghuni Terbaik</div></a>

  <!--Form Pembinaan-->
  <a href="Form Pembinaan.php">
  <div class="rectangle-1479"></div>
  <div class="pembinaan">Pembinaan</div>
  <svg
    class="clarity-book-solid"
    width="28"
    height="28"
    viewBox="0 0 28 28"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
  >
    <g clip-path="url(#clip0_118_49)">
      <path
        d="M7.77777 4.04443H21.7778V5.24999H7.77777V4.04443Z"
        fill="black"
      />
      <path
        d="M22.5555 6.22221H7.66888C7.47039 6.2194 7.27453 6.17641 7.0931 6.09585C6.91168 6.01528 6.74846 5.89881 6.61327 5.75344C6.47808 5.60808 6.37374 5.43685 6.30653 5.25007C6.23932 5.06328 6.21064 4.86482 6.22221 4.66665C6.22124 4.27228 6.3701 3.89227 6.63867 3.60348C6.90724 3.3147 7.27547 3.1387 7.66888 3.1111H22.5555C22.7618 3.1111 22.9597 3.02915 23.1055 2.88329C23.2514 2.73743 23.3333 2.5396 23.3333 2.33332C23.3333 2.12704 23.2514 1.92921 23.1055 1.78335C22.9597 1.63749 22.7618 1.55554 22.5555 1.55554H7.66888C6.86278 1.58377 6.09915 1.92397 5.53905 2.50439C4.97895 3.0848 4.66616 3.86006 4.66665 4.66665C4.65913 4.79358 4.65913 4.92084 4.66665 5.04776C4.65916 5.10976 4.65916 5.17243 4.66665 5.23443V23.3333C4.66616 24.1399 4.97895 24.9152 5.53905 25.4956C6.09915 26.076 6.86278 26.4162 7.66888 26.4444H22.5555C22.7618 26.4444 22.9597 26.3625 23.1055 26.2166C23.2514 26.0708 23.3333 25.8729 23.3333 25.6667V7.05443C23.3338 6.84283 23.2536 6.639 23.1091 6.4844C22.9646 6.32981 22.7667 6.23605 22.5555 6.22221Z"
        fill="black"
      />
    </g>
    <defs>
      <clipPath id="clip0_118_49">
        <rect width="28" height="28" fill="white" />
      </clipPath>
    </defs>
  </svg></a>

  <img class="my-su-logo-05-1" src="Image/MySU logo-05.png" />
</div>

</body>
</html>