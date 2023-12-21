<?php
session_start();
if (isset($_GET['x']) && $_GET['x'] == 'home') {
    $page = "home.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'tiket') {
    $page = "tiket.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'promo') {
    $page = "promo.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'maskapai') {
    $page = "maskapai.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'user') {
    if( $_SESSION['level_travelgo']==1){
        $page = "user.php";
        include "main.php";
    }else{
        $page = "home.php";
        include "main.php";
    }
} elseif (isset($_GET['x']) && $_GET['x'] == 'report') {
    $page = "report.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
    include "login.php";
}elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
    include "proses/proses_logout.php";
}  else {
    $page = "home.php";
    include "main.php";
}
?>