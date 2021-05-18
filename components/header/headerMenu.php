
<?php

$mainMenuClass = new MenuClass();
$mainMenu = $mainMenuClass->getMenu();
//deb($mainMenu[1]);
$allVendorClass = new VendorClass(0);

$allVendor = $allVendorClass->get();


//deb($allVendor);

$mainMenuLiHtml="";

function drowMainMemu($item){
    $mainMenuLiHtml = "<li class='has-dropdown has-megaitem'>";

//TODO добаввить фукцию сделать URL
    $mainMenuLiHtml .= "<a href='category/".$item['label']."'>".$item['label']."<i class='fa fa-angle-down'></i></a>";
    if($item['child'][0]['child']){
        $mainMenuLiHtml .= drowMegaChilds($item['child'], $item['label']);
        //$mainMenuLiHtml .=count($item['child']);
    }else{
        $mainMenuLiHtml .= drowChild($item['child']);
        //$mainMenuLiHtml .=count($item['child']);
    }

    $mainMenuLiHtml .= "</li>";
    echo $mainMenuLiHtml;
}

function drowChild($c_item, $class='sub-menu', $size=0, $path="category/"){
    $subMenuHtml="<ul class='".$class."'>";
    foreach ($c_item as $item){
        $subMenuHtml .= "<li><a href='".$path.$item['label']."'>".$item['label']."</a></li>";
        if($size){
            $size = $size-1;
            if(!$size){
                break;
            }
        }
    }
    $subMenuHtml .="</ul>";

    return $subMenuHtml;
}


function drowMegaChilds($mega_item, $label_for_wo_child){

    $megaChildsWoChilds = array();
    $megaChildsHtml = "<div class='mega-menu'>";
    $megaChildsHtml .= "<ul class='mega-menu-inner'>";
    foreach ($mega_item as $k => $item){

        $size=5;
        if(isset($item['child'])){
        $megaChildsHtml .="<li class='mega-menu-item'>";

            //deb($item['label']);
            $megaChildsHtml .="<a href='".$item['label']."' class='mega-menu-item-title'>".$item['label']."</a>";
            $megaChildsHtml .= drowChild($item['child'], $class='sub-mega-menu-sub', 5);
        }else{
            $megaChildsWoChilds[] = $item['label'];
        }


        $megaChildsHtml .="</li>";
    }

    if($megaChildsWoChilds){
        $megaChildsHtml .= drowChildWoChild($megaChildsWoChilds, $label_for_wo_child);
    }

    $megaChildsHtml .= "</ul>";
    $megaChildsHtml .= "</div>";

    //deb($megaChildsWoChilds);


    return $megaChildsHtml;
}


function drowChildWoChild($items, $label){

    $html="<li class='mega-menu-item'>";
    $html .="<a href='".$label."' class='mega-menu-item-title'>".$label."</a>";
    $html .="<ul class='sub-mega-menu-sub'>";

    foreach ($items as $item){
        $html .= "<li><a href='".$item."'>".$item."</a></li>";
    }
    $html .="</ul>";
    $html .="</li>";
    return $html;
}




function drowVendorMemu($item){
    $vendorMenuLiHtml = "<li class='has-dropdown has-megaitem main_menu_vendor'>";

//TODO добаввить фукцию сделать URL
    $vendorMenuLiHtml .= "<a href='vendors'>Производители<i class='fa fa-angle-down'></i></a>";
    $vendorMenuLiHtml .= drowChild($item, 'sub-menu', 0, 'vendor/');
        //$mainMenuLiHtml .=count($item['child']);
    $vendorMenuLiHtml .= "</li>";


    echo $vendorMenuLiHtml;
}
?>


<div class="header-bottom sticky-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Header Main Menu -->
                <div class="main-menu">
                    <nav>
                        <ul>
                            <?php foreach($mainMenu as $item) {
                                drowMainMemu($item);
                            }?>
                            <?php
                                drowVendorMemu($allVendor);
                            ?>
                    </nav>
                </div> <!-- Header Main Menu Start -->
            </div>
        </div>
    </div>
</div> <!-- End Bottom Area -->






<style>
    .mega-menu-inner{
        flex-wrap: wrap;
        justify-content: space-around;
        justify-content: flex-start;
    }
    li.mega-menu-item {
        width: 25%;
        border-bottom: 1px solid;
        padding-bottom: 5px;
    }
    .mega-menu-item-title{
        margin-bottom: 5px;
        margin-top: 10px;
    }
</style>
