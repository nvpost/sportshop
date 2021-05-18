
<?php

    $assets_css = array(
       "vendor/font-awesome.min.css",
       "vendor/plaza-icon.css",
       "vendor/jquery-ui.min.css",

       "plugins/slick.css",
       "plugins/animate.min.css",
       "plugins/nice-select.css",
       "plugins/venobox.min.css",

        "style.css",
        "css.css"
    );

    $assets_css_html = "";

    foreach ($assets_css as $url){
        $assets_css_html.= "<link rel='stylesheet' href='assets/css/".$url."'>";
    }

    echo $assets_css_html;
?>

