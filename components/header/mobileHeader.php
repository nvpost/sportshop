<?php



function drowMobileMenu($item, $path = 'category'){
    $mobileMenuHtml = "<li>
        <a href='#'><span>".$item['label']."</span></a>
        <ul class='mobile-sub-menu'>";

    foreach ($item['child'] as $c_item){
        $mobileMenuHtml .="<li><a href='".$path.$c_item['label']."'>".$c_item['label']."</a></li>";
    }
    $mobileMenuHtml .= "</ul></li>";
    echo $mobileMenuHtml;
}

?>

<?php
    require_once 'mobile/dash_block.php';
?>

<div id="mobile-menu-offcanvas" class="offcanvas offcanvas-leftside offcanvas-mobile-menu-section">
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close"><i class="fa fa-times"></i></button>
    </div>
    <div class="offcanvas-mobile-menu-wrapper">
        <div class="mobile-menu-top">
            <span>Welcome to our store!</span>
        </div>
        <div class="mobile-menu-bottom">
            <div class="offcanvas-menu">
                <ul>
                    <?php
                        foreach ($mainMenu as $item){
                            drowMobileMenu($item);
                        }
                    ?>
                    <li>
                        <a href='#'><span>Производитель</span></a>
                        <ul class='mobile-sub-menu'>
                            <?php foreach($allVendor as $v){ ?>
                                <li><a href='vendor/<?=$v['label']?>'><?=$v['label']?></a></li>
                            <?php } ?>

                        </ul></li>
                </ul>
            </div> <!-- End Mobile Menu Nav -->

            <!-- Mobile Manu Mail Address -->
            <a class="mobile-menu-email icon-text-right" href="mailto:info@yourdomain.com"><i class="fa fa-envelope-o"> info@yourdomain.com</i></a>

            <!-- Mobile Manu Social Link -->
            <ul class="mobile-menu-social">
                <li><a href="" class="facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="" class="twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="" class="youtube"><i class="fa fa-youtube"></i></a></li>
                <li><a href="" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="" class="instagram"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
