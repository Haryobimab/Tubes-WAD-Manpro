<?php

session_start();
include('../controller/loginController.php');

if (isset($_SESSION['jabatan'])){
        if ($_SESSION['jabatan'] == '1'){
                header('Location: Dashboard Pembina.php');
        } elseif ($_SESSION['jabatan'] == '2'){
                header('Location: Dashboard ketua.php');
        } elseif ($_SESSION['jabatan'] == '3') {
                   header('Location: Dashboard Penghuni.php');
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" type="text/css" href="CSS\Login.css">
</head>
<body>
 <div class="login" >
        <svg class="union" width="360" height="339" viewBox="0 0 360 339" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M360 -6H0V222.628V232.49H0.637283C8.38055 292.145 85.7267 339 180 339C274.273 339 351.619 292.145 359.363 232.49H360V222.628V-6Z" fill="url(#pattern0)"/>
              <defs>
                      <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                              <use xlink:href="#image0_47_334" transform="matrix(0.000422546 0 0 0.000440917 -0.351852 0)"/>
                      </pattern>
              </defs>
        </svg>
        <form method="post" action="login.php">
                <input type="text" name='username' class="rectangle-21" required>
                <input type='password' name='password' class="rectangle-22" required>
                <div class="username"></div>
                <div class="password"></div>
                <div class="login2">Login </div>
                <div class="silakan-masuk-dengan-akun-anda-untuk-memulai">Silakan masuk dengan akun Anda untuk memulai. </div>
                <input type="submit" name="login" class="rectangle-23" value="">
                <div class="masuk"> Masuk </div>
        </form>
      <svg class="fa-solid-user-edit" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_47_356)">
                      <path d="M9.1 13C11.9722 13 14.3 10.0902 14.3 6.5C14.3 2.90977 11.9722 0 9.1 0C6.22781 0 3.9 2.90977 3.9 6.5C3.9 10.0902 6.22781 13 9.1 13ZM12.74 14.625H12.0616C11.1597 15.143 10.1562 15.4375 9.1 15.4375C8.04375 15.4375 7.04437 15.143 6.13844 14.625H5.46C2.44562 14.625 0 17.682 0 21.45V23.5625C0 24.9082 0.873437 26 1.95 26H13.1178C13.0203 25.6547 12.9797 25.2891 13.0122 24.9184L13.2884 21.8258L13.3372 21.2621L13.6581 20.8609L16.7984 16.9355C15.8031 15.5289 14.3609 14.625 12.74 14.625ZM14.5803 22.0035L14.3041 25.1012C14.2594 25.6191 14.6088 26.0559 15.0191 25.9949L17.4931 25.6496L23.0953 18.6469L20.1825 15.0059L14.5803 22.0035ZM25.7156 13.6551L24.1759 11.7305C23.7981 11.2582 23.1806 11.2582 22.8028 11.7305L21.2672 13.65L21.1006 13.8582L24.0175 17.4992L25.7156 15.3766C26.0934 14.8992 26.0934 14.1324 25.7156 13.6551Z" fill="#EEEEEE"/>
              </g>
              <defs>
                      <clipPath id="clip0_47_356">
                              <rect width="26" height="26" fill="white"/>
                      </clipPath>
              </defs>
      </svg>
      <div class="icon-park-solid-lock" >
              <svg class="mask-group" width="23" height="27" viewBox="0 0 23 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <mask id="mask0_47_365" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="23" height="27">
                              <path d="M19.8333 12.375H3.16667C2.59137 12.375 2.125 12.8787 2.125 13.5V23.625C2.125 24.2463 2.59137 24.75 3.16667 24.75H19.8333C20.4086 24.75 20.875 24.2463 20.875 23.625V13.5C20.875 12.8787 20.4086 12.375 19.8333 12.375Z" fill="white" stroke="white" stroke-width="4" stroke-linejoin="round"/>
                              <path d="M6.29169 12.375V7.875C6.29169 4.76831 8.62346 2.25 11.5 2.25C14.3766 2.25 16.7084 4.76831 16.7084 7.875V12.375" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M11.5 16.875V20.25" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                      </mask>
                      <g mask="url(#mask0_47_365)">
                              <path d="M-1 0H24V27H-1V0Z" fill="#EEEEEE"/>
                      </g>
              </svg>
      </div>
</div>
</body>
</html>