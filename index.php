

<?php
//$home_url = "http://localhost/aments/";
//$home_url = $_SERVER['DOCUMENT_ROOT']."/amets/";

spl_autoload_register(function ($class_name) {
    include 'Classes/'.$class_name . '.php';
});

$t = new TimeLogClass('mainPage');

    require_once 'func/func.php';
    require_once 'components/header/head.php';
    require_once 'components/header/CustomHeaderHtmp.php';
    //require_once 'components/headerMenu.php';
    require_once 'components/header/mobileHeader.php';



    require_once 'assets/assets_bottom.php';
    $t->timerStop();
?>