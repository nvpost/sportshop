<?php

$home_url = $_SERVER['DOCUMENT_ROOT']."/amets/";
$sql_count = 0;

$mainTitle = "Все для спорта!";

require_once __DIR__.'/sql.php';


function deb($v, $h=0){
    if($h) echo "<hr>";
    echo "<pre>";
    print_r($v);
    echo "</pre>";
    if($h) echo "<hr>";
}
function c_deb($v){
    echo "<script>";
    echo "console.log('".$v."')";
    echo "</script>";
}

function pdSql($sql, $one=false){
    global $sql_count;
    global $db;
    $res = $db->prepare($sql);
    $res->execute();
    if($one){
        $data = $res->fetch(PDO::FETCH_ASSOC);
    }else{
        $data = $res->fetchAll(PDO::FETCH_ASSOC);
    }

    $sql_count++;

    return($data);

}


function checkMainMenuCache($cacheName){
    // Название кеша - каталог с количеством
    $dataCache = new DataCache($cacheName);
    $getDataFromCache = $dataCache->initCacheData();

    if ($getDataFromCache) {
        // Получаем кэшированные данные из кэша
        $data = $dataCache->getCacheData();
    } else {
        // Исполняем этот код, если кеширование отключено или данные в кеше старые
        $data = getMenu(0);
        //     Обновляем данные в кэше
        $dataCache->updateCacheData($data);
    }
    return $data;
}

