

<?php
//$home_url = "localhost/sportforlive/";
$home_url = $_SERVER['DOCUMENT_ROOT']."/sportforlive/";

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
    c_deb("Запросов к бд: ".$sql_count);
    $t->timerStop();
?>