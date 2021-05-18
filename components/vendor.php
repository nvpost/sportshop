<?php

spl_autoload_register(function ($class_name) {
    include '../Classes/'.$class_name . '.php';
});
$t = new TimeLogClass("vendor");

require_once '../func/func.php';

//$sql = "SELECT DISTINCT vendor FROM products";
//
//$dats = pdSql($sql);




$vc = new VendorClass(0);

$mainMenu = new MenuClass();

deb($mainMenu->getMenu());

//deb($vc->get());

$t->timerStop();
c_deb($sql_count);
