<?php
?>

<header class="header-section d-lg-block d-none">
    <!-- Start Header Top Area -->
    <div class="header-top">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-6">
                    <div class="header-top--left">
                        <span><?=$mainTitle?></span>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- End Header Top Area -->

    <!-- Start Header Center Area -->
    <div class="header-center">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-3">
                    <!-- Logo Header -->
                    <div class="header-logo">
                        <a href="index.html"><img src="assets/images/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6">
                    <!-- Start Header Search -->
                    <div class="header-search">
                        <form action="#" method="post">
                            <div class="header-search-box default-search-style d-flex">
                                <input class="default-search-style-input-box border-around border-right-none" type="search" placeholder="Поиск..." required>
                                <button class="default-search-style-input-btn" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div> <!-- End Header Search -->
                </div>
                <div class="col-3 text-right">
                    <!-- Start Header Action Icon -->
                </div>
            </div>
        </div>
    </div> <!-- End Header Center Area -->

    <!-- Start Bottom Area -->
    <?php
        require_once 'headerMenu.php';
    ?>
</header> <!-- ...:::: End Header Section:::... -->
<?php
    require_once 'mobileHeader.php';
?>

