<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/nav.css?v=123.3232">
    <!-- Thêm link Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Thêm link Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>

    </style>
</head>

<body>
    <!-- header-section-->
    <section class="nav">
        <div class="container-fluid bg-nav-bt">
            <div class="container header">
                <div class="row">
                    <div class="col-md-3">
                        <div class="image-nav">
                            <a href="<?php echo _WEB_ROOT_ ?>">
                                <img class="img-fluid" src="<?php echo _WEB_ROOT_ ?>/public/asset/images/logo.jpg"
                                    alt="Trang chủ Smartphone Store" title="Trang chủ Smartphone Store">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class=" group">
                            <!-- End Logo -->

                            <div class="content-nav">

                                <div class="active">
                                    <div class="search-header">
                                        <form class="input-search" method="POST"
                                            action="<?php echo _WEB_ROOT_ ?>/Product/searchByName">
                                            <div class="tile_search">
                                                <input id="search-field" name="search" autocomplete="off" type="text"
                                                    placeholder="Nhập từ khóa tìm kiếm...">
                                                <button type="submit" id="submit-button" class="search-btn-bg">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </form> <!-- End Form search -->

                                    </div> <!-- End Search header -->

                                </div>
                                <div class="tools-member">
                                    <div class="member">
                                    <a class="login-mdf" href="<?php echo _WEB_ROOT_ ?>/user" onclick="return checkLogin()">
                                                <i class="fa fa-user"></i>
                                                <span class="login-mdf"> Tài khoản</span>
                                            </a>
                                    </div>

                                    <div class="cart-nav">
                                        <a href="<?php echo _WEB_ROOT_ ?>/cart" onclick="return checkLogin()">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="login-mdf">Giỏ hàng</span>
                                            <span class="cart-number"></span>
                                        </a>
                                    </div>
                                 
                          

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="container-fluid category">

            <input type="checkbox" id="checkbox" hidden>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="<?php echo _WEB_ROOT_ ?>" class="nav__link">Home</a></li>



                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            Appliances <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-pie-chart-line"></i> Overview
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-arrow-up-down-line"></i> Transactions
                                </a>
                            </li>

                            <!--=============== DROPDOWN SUBMENU ===============-->
                            <li class="dropdown__subitem">
                                <div class="dropdown__link">
                                    <i class="ri-bar-chart-line"></i> Reports <i class="ri-add-line dropdown__add"></i>
                                </div>

                                <ul class="dropdown__submenu">
                                    <li>
                                        <a href="#" class="dropdown__sublink">
                                            <i class="ri-file-list-line"></i> Documents
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__sublink">
                                            <i class="ri-cash-line"></i> Payments
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__sublink">
                                            <i class="ri-refund-2-line"></i> Refunds
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>



                    <!--=============== DROPDOWN 2 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            Computers <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-user-line"></i> Profiles
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-lock-line"></i> Accounts
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-message-3-line"></i> Messages
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown__item">
                        <div class="nav__link">
                            wearables <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-user-line"></i> Profiles
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-lock-line"></i> Accounts
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-message-3-line"></i> Messages
                                </a>
                            </li>
                        </ul>
                    </li>
                 

                    <li><a href="#" class="nav__link">About Us</a></li>
                    <li><a href="#" class="nav__link">Contact Us</a></li>
                </ul>

            </div>

            <div id="menu" class="menu">
                <div class="icon-menu">
                    <i class="fa-solid fa-bars nav__burger"></i>
                    <i class="fa-solid fa-xmark nav__close "></i>
                </div>

            </div>
            <div class="div-site-nav">
                <ul class="site-nav">

                    <li><a href="<?php echo _WEB_ROOT_ ?>" class=" current"><span>Home</span></a></li>

                    <li class="dropdown  mega-menu ">

                        <a href="<?php echo _WEB_ROOT_ ?>/product" class=""><span>Smartphone</span></a>


                        <!-- <div class="site-nav-dropdown">
                            <div class="container">


                                <div class="col-1 parent-mega-menu">

                                    <div class="inner"> -->
                        <!-- Menu level 2 -->
                        <!-- <a href="collections/audio-video.html"> <span>Audio & Video </span></a>

                                        <ul class="dropdown"> -->

                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/audio-video.html"> <span>MP3 Players </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->
                        <!-- 
                                            <li>
                                                <a href="collections/audio-video.html"> <span>Speakers </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/audio-video.html"> <span>Ipods </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/audio-video.html"> <span>Video Players </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/audio-video.html"> <span>Television </span></a>
                                            </li>


                                        </ul>

                                    </div>

                                    <div class="inner"> -->
                        <!-- Menu level 2 -->
                        <!-- <a href="collections/mobiles.html"> <span>Mobiles </span></a>

                                        <ul class="dropdown"> -->

                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/mobiles.html"> <span>All Mobiles </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/mobiles.html"> <span>Android Mobiles </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/mobiles.html"> <span>Smarphones </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->
                        <!-- 
                                            <li>
                                                <a href="collections/mobiles.html"> <span>Windows Mobiles </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/mobiles.html"> <span>Accessories </span></a>
                                            </li> -->
                        <!-- 

                                        </ul>

                                    </div>

                                    <div class="inner"> -->
                        <!-- Menu level 2 -->
                        <!-- <a href="collections/cameras.html"> <span>Cameras </span></a>

                                        <ul class="dropdown"> -->

                        <!-- Menu level 3 -->
                        <!-- 
                                            <li>
                                                <a href="collections/cameras.html"> <span>All Cameras </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/cameras.html"> <span>Digital SLRs </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/cameras.html"> <span>Point & Shoot </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/cameras.html"> <span>Camcorders </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/cameras.html"> <span>Security & Surveillance
                                                    </span></a>
                                            </li>


                                        </ul>

                                    </div>

                                    <div class="inner"> -->
                        <!-- Menu level 2 -->
                        <!-- <a href="collections/health-care.html"> <span>Health Care </span></a>

                                        <ul class="dropdown"> -->

                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/health-care.html"> <span>All Health </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/health-care.html"> <span>Diet & Nutrition
                                                    </span></a>
                                            </li>
 -->

                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/health-care.html"> <span>Hair Care </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->
                        <!-- 
                                            <li>
                                                <a href="collections/health-care.html"> <span>Skin Care </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/health-care.html"> <span>Personal Care </span></a>
                                            </li>


                                        </ul>

                                    </div>

                                    <div class="inner"> -->
                        <!-- Menu level 2 -->
                        <!-- <a href="collections/kitchen.html"> <span>Kitchen </span></a>

                                        <ul class="dropdown"> -->

                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/kitchen.html"> <span>Grinder </span></a>
                                            </li>
 -->

                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/kitchen.html"> <span>Mixer </span></a>
                                            </li>
 -->

                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/kitchen.html"> <span>Juicer </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->
                        <!-- 
                                            <li>
                                                <a href="collections/kitchen.html"> <span>Air Fryers </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/kitchen.html"> <span>Rice Cookers </span></a>
                                            </li>


                                        </ul>

                                    </div> -->

                        <!-- <div class="inner"> -->
                        <!-- Menu level 2 -->
                        <!-- <a href="collections/televisions.html"> <span>Televisions </span></a>

                                        <ul class="dropdown"> -->

                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/televisions.html"> <span>LED </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/televisions.html"> <span>HD Ready </span></a>
                                            </li>
 -->

                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/televisions.html"> <span>Full HD </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/televisions.html"> <span>Ultra HD </span></a>
                                            </li> -->


                        <!-- Menu level 3 -->

                        <!-- <li>
                                                <a href="collections/televisions.html"> <span>4K </span></a>
                                            </li>


                                        </ul> -->
                        <!-- 
                                    </div>

                                </div>



                                <div class="col-3">
                                    <a href="collections/mobiles.html" title=""><img
                                            src="cdn/shop/t/4/assets/menu_image7eed.jpg?v=141657230008927013301479203805"
                                            alt="" /></a>
                                    <a href="collections/all.html" title=""><img
                                            src="cdn/shop/t/4/assets/menu_image2c753.jpg?v=72473073003878497151479203805"
                                            alt="" /></a>

                                </div>


                            </div>

                        </div> -->


                    </li>









                    <!-- <li class="dropdown ">

                        <a href="collections/wearables.html" class=""><span>Wearables</span></a>



                        <ul class="site-nav-dropdown">


                            <li><a href="collections/wearables.html" class="">Smart Watches</a></li>


                        </ul>


                    </li> -->
                    <li><a href="<?php echo _WEB_ROOT_ ?>/about_us" class=""><span>About Us</span></a></li>

                    <li><a href="<?php echo _WEB_ROOT_ ?>/contact_us" class=""><span>Contact Us</span></a></li>
                    <li class="dropdown ">

                        <a href="" class=""><span>extension</span></a>
                        <ul class="site-nav-dropdown change-font">
                            <?php if (isset($_COOKIE['admin_id'])) { ?>
                                <!-- Hiển thị nút Admin khi người dùng đã đăng nhập với quyền Admin -->
                                <li>
                                    <a href="<?php echo _WEB_ROOT_ ?>/admin/AdminUser/loadUser" style="font-size: 15px;"
                                        class="">
                                        Admin</a>
                                </li>
                            <?php } ?>

                            <li>

                                <a href="<?php echo _WEB_ROOT_ ?>/order" onclick="return checkLogin()"
                                    style="font-size: 15px;" class="">
                                    Orders</a>
                            </li>
                            <li>
                                <a href="<?php echo _WEB_ROOT_ ?>/wishlist" onclick="return checkLogin()"
                                    style="font-size: 15px;" class="">
                                    Wishlist
                                </a>
                            </li>
                            <?php if (isset($_COOKIE['user_id']) && isset($_COOKIE['user_name'])) { ?>
                                        <?php } else { ?>
                                            <!-- Hiển thị nút đăng nhập khi người dùng chưa đăng nhập -->
                                            <li>
                                <a href="<?php echo _WEB_ROOT_ ?>/auth/login" style="font-size: 15px;" class="">
                                    Login</a>
                                </li>
                                        <?php } ?>
                           
                          
                                <?php if (isset($_COOKIE['user_id']) && isset($_COOKIE['user_name'])) { ?>
                                    <!-- Hiển thị nút đăng xuất khi người dùng đã đăng nhập -->
                                    <li>
                                        <a href="<?php echo _WEB_ROOT_; ?>/user/logout" style="font-size: 15px;" class="">Logout</a>
                                    </li>
                                <?php } ?>
                          


                        </ul>


                    </li>



                </ul>
            </div>
        </div>
    </section>

</body>
<script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/main.js"></script>
<script>
    function checkLogin() {
        // Kiểm tra nếu Cookie 'id' tồn tại
        if (document.cookie.indexOf('user_id=') === -1) {
            // Nếu không có Cookie, chuyển hướng đến trang đăng nhập
            window.location.href = "<?php echo _WEB_ROOT_; ?>/auth/Login";
            return false; // Ngăn hành động mặc định
        }
        return true; // Cho phép hành động mặc định nếu Cookie tồn tại
    }
</script>

</html>