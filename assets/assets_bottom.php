<?php

$assets_js = array(
    "vendor/modernizr-3.11.2.min.js",
    "vendor/jquery-3.5.1.min.js",
    "vendor/jquery-migrate-3.3.0.min.js",
    "vendor/bootstrap.bundle.min.js",
    "vendor/jquery-ui.min.js",

    "plugins/slick.min.js",
    "plugins/material-scrolltop.js",
    "plugins/jquery.nice-select.min.js",
    "plugins/jquery.zoom.min.js",
    "plugins/venobox.min.js",

    "main.js"
);

$assets_css_html = "";

foreach ($assets_js as $url){
    $assets_js_html.= "<script src='assets/js/".$url."'></script>";
}

echo $assets_js_html;
?>


