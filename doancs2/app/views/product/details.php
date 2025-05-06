
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/product-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:40:53 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Bootstrap -->
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/boostrap/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/css/style.css?v=1.3" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/jquery.desoslide.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/animate.min.css">
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/jquery.rateyo.min.css">
    <!-- Toast CSS -->
    <link rel="stylesheet"  href="<?php echo _WEB_ROOT_ ?>/public/asset/css/toast.css?v=1.3">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .disabled {
        pointer-events: none;
        opacity: 0.5;
        cursor: not-allowed;
        }
        .box-head {
            display: flex;
            align-items: center;
            flex-wrap: wrap; /* Đảm bảo khi màn hình nhỏ, các nút xuống dòng */
            gap: 10px;
        }
        .filter-buttons {
        display: flex;
        gap: 8px; /* Khoảng cách giữa các nút */
        }

        .filter-btn {
        border: 1px solid #4CAF50;
        margin-left: 5px; 
        padding: 5px 30px;
        color: white;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s ease;
        }

        .filter-btn:hover {
        background-color: #45a049;
        border-color: #45a049;
        }

        .filter-btn.active {
            border: 2px solid red; /* Khung đỏ khi được chọn */
            color: red; /* Chữ màu đỏ khi được chọn */
            background-color: #ffe6e6; /* Nền nhạt màu đỏ khi được chọn */
        }
    </style>
</head>

<body>

   
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box">
                        <!-- product-description -->
                        <div class="box-body">
                            <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"> 
                                    <ul id="demo1_thumbs" class="slideshow_thumbs">
                                    <?php
                                            while ($row = mysqli_fetch_array($product_images)) {
                                    ?>
                                        <li>
                                            <a href="<?php echo _WEB_ROOT_ . '/public/asset/images/product1/' . $row['image']; ?>">
                                                <div class="thumb-img">
                                                    <img src="<?php echo _WEB_ROOT_ . '/public/asset/images/product1/' . $row['image']; ?>" alt="">
                                                </div>
                                            </a>
                                        </li>

                                    <?php
                                        }   
                                    ?>     
                                    </ul>
                                </div>
                                <?php 
                                    $row1 = mysqli_fetch_array($product_defaultoption);
                                    $image_name = $row1['image'];
                                ?>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div id="slideshow"></div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="product-single">
                                        <h2 style="font-size: 28px; font-weight: bold;"><?php echo $product_name ?>     <a href="" class="product-btn btn-like" data-value="<?php echo $row1['id']?>"><i class="fa fa-heart"></i></a></h2>  
                                        
                                    <?php
                                    // Ví dụ: $product_rating chứa thông tin về rating của sản phẩm
                                        $row3 = mysqli_fetch_array($product_rating);
                                        $average_rating = $row3['average_rating']; // Lấy số sao trung bình
                                        $rating_count = $row3['rating_count']; // Lấy số lượt đánh giá
                                    ?>
                                        <div class="product-rating">
                                            <?php
                                              if ($rating_count > 0) {
                                            ?>   
                                            <span class="score-average_rating" style="font-size: 20px; margin-right: 3px;"><?php echo $average_rating ?></span>
                                            <?php
                                              } else {
                                            ?>
                                            <span style="font-size: 20px; margin-right: 3px;">0</span>
                                            <span class="star-rating"> 
                                                <?php
                                                }
                                                    // Hiển thị số sao đã đánh giá
                                                    for ($i = 1; $i <= 5; $i++) {
                                                        // Kiểm tra nếu là sao đầy
                                                        if ($i <= floor($average_rating)) {
                                                            echo '<span style="font-size: 17px;" ><i class="fa fa-star"></i></span>';  // Sao đầy
                                                        }
                                                        // Kiểm tra nếu là sao nửa
                                                        elseif ($i == ceil($average_rating) && $average_rating - floor($average_rating) >=0.5) {
                                                            echo '<span style="font-size: 17px; "><i class="fa fa-star-half-o"></i></span>';  // Sao nửa
                                                        }
                                                        // Các trường hợp còn lại là sao rỗng
                                                        else {
                                                            echo '<span style="font-size: 17px;"><i class="fa fa-star-o"></i></span>';  // Sao rỗng
                                                        }
                                                    }                                            
                                                ?>
                                            </span> 
                                            <span class="text-secondary" style="font-size: 20px">&nbsp;(<?php echo $rating_count; ?> đánh giá)</span>
                                        </div>
                                        <p class="product-price" style="font-size: 25px;">
                                            <span class="discouted-price">
                                                <?php 
                                                    $formattedPrice = number_format($row1['discounted_price'], 0, ',', '.') . 'đ';
                                                    echo $formattedPrice;   
                                                ?> 
                                            </span>
                                            <strike class="original-price" style="color:rgba(128, 128, 128, 0.658); font-size: 18px;">
                                                    <?php 
                                                    $formattedPrice = number_format($row1['original_price'], 0, ',', '.') . 'đ';
                                                    echo $formattedPrice;  
                                                    ?>
                                            </strike>  
                                        </p>
                                        <div class="box-capacity">
                                            <?php
                                                $current_storage = $row1['internal_storage'];
                                                $current_color = $row1['color'];
                                                // $specificphone_id =$row1['specificphone_id'];
                                                // echo $specificphone_id;
                                                $product_id=$row1['product_id'];
                                                while ($row2 = mysqli_fetch_array($product_internal_storage)) {
                                                    $is_available = in_array(['product_name' => $product_name,'color' => $current_color, 'storage' => $row2['internal_storage']], $available_variants);
                                                    $is_disabled = !$is_available ? 'disabled' : '';
                                                    $is_current = ($row2['internal_storage'] == $current_storage) ? 'current-phone' : '';
                                                    $ProductColor_id = isset($product_color_id[$product_name][$row2['internal_storage']][$current_color]) 
                                                                        ? $product_color_id[$product_name][$row2['internal_storage']][$current_color] : null;
                                            ?>
                                                <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                                                <a href="#" 
                                                    class="internal_storage <?php echo $is_current . ' ' . $is_disabled; ?>" data-ProductColor_id="<?php echo $ProductColor_id; ?>" data-Product_id="<?php echo $product_id ?>">
                                                    <span class="capacity" style="font-weight: bold"><?php echo $row2['internal_storage']; ?></span>
                                                </a>
                                            <?php
                                                }
                                            ?>
                                        </div>
 
                                        <div class="color-phone slideshow_thumbs">
                                            <?php
                                                while ($row4 = mysqli_fetch_array($product_colors)) {
                                                    $is_available = in_array(['product_name' => $product_name,'color' => $row4['color'], 'storage' => $current_storage], $available_variants);
                                                    $is_disabled = !$is_available ? 'disabled' : '';
                                                    $is_color = ($row4['color'] == $current_color) ? 'current-color' : '';
                                                    $ProductColor_id = isset($product_color_id[$product_name][$current_storage][$row4['color']]) 
                                                                       ? $product_color_id[$product_name][$current_storage][$row4['color']] : null;               
                                            ?>
                                            <a  href="#" 
                                                class="color-link <?php echo $is_color . ' ' . $is_disabled; ?>" data-ProductColor_id="<?php echo $ProductColor_id?>" data-Product_id="<?php echo $product_id ?>">
                                                <span class='color' style="font-weight: bold"><?php echo $row4['color'];?></span>
                                            </a>
                                            <?php

                                                }
                                            ?>    
                                        </div>
                                      

                                    <form id="add-to-cart-form" action="" method="POST">
                                        <div class="product-quantity">
                                            <h4>Số lượng</h4>
                                            <div class="quantity mb20">
                                                <input class="btn-quantity decrease-quantity" onclick="dcQuantity()" type="button" value="-">
                                                <input type="hidden" class="detailproduct_id" name="product_color_id" value="<?php echo $row1['id']; ?>" data-detailproduct-id="<?php echo $row1['id']; ?>"> 
                                                <input type="number" name="quantity" value="1" class="quantity-input" id="quantity-input" data-max-amount="<?php echo $row1['amout']; ?>" oninput="validateQuantity()">
                                                <input class="btn-quantity increase-quantity" onclick="icQuantity()" type="button" value="+">
                                            </div>
                                            <span class="rest-quantity" id="rest-quantity"><?php echo $row1['amout']; ?> sản phẩm có sẵn</span>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-default btn-buy-now" value="buy-now" style="margin-right: 20px;">
                                                Mua Ngay
                                            </button>
                                            <button type="submit" class="btn btn-default" value="add_to_car">
                                                <i class="fa fa-shopping-cart"></i>&nbsp;Thêm vào giỏ hàng
                                            </button>
                                        </div>
                                    </form>
                                    <div id="toast"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box-head scroll-nav">
                        <div class="head-title">
                            <a class="page-scroll active" href="#product">Mô tả sản phẩm</a>
                            <a class="page-scroll" href="#rating">Đánh giá và nhận xét</a>
                            <a class="page-scroll" href="#review">Thêm nhận xét</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- highlights -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="description-details">
                        <div class="description-left">
                            <h2 class="dgctpro">Đặc điểm nổi bật</h2>
                            <div itemprop="description" class="content_hide content-desc" style="height: 1180px;">
                               <?php 
                                    $row5 = mysqli_fetch_array($product_highlight_feature);
                                    echo $row5['HighlightFeature'];
                               ?>
                            </div>
                            <button class="less-evaluation text-center" style="display:none"><i
                                    class="fa fa-minus-circle"></i> Rút gọn</button>
                            <button class="more-evaluation text-center"><i class="fa fa-plus-circle"></i> Xem
                                thêm</button>

                        </div>
                        <?php 
                            $row6 = mysqli_fetch_array($product_generals);
                        ?>    
                        <div class="description-right">
                            <h2 class="dgctpro">Thông số kĩ thuật</h2>
                            <table class="charactestic_table" >
                                <tbody>
                                    <tr>
                                        <td class="title_charactestic" width="50%">
                                            Hệ điều hành:
                                        </td>
                                        <td class="content_charactestic">
                                            <?php echo $row6['name']; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="50%">
                                            Kích thước màn hình:
                                        </td>
                                        <td class="content_charactestic">
                                            <?php echo $row6['screen_size']; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="50%">
                                            Công nghệ màn hình:
                                        </td>
                                        <td class="content_charactestic">
                                            <?php echo $row6['display_technology']; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="50%">
                                            Độ phân giải màn hình:
                                        </td>
                                        <td class="content_charactestic">
                                            <?php echo $row6['screen_resolution']; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="50%">
                                            Tần số quét:
                                        </td>
                                        <td class="content_charactestic">
                                            <?php echo $row6['refresh_rate']; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="50%">
                                            Cam trước:
                                        </td>
                                        <td class="content_charactestic">
                                            <?php echo $row6['front_camera']; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="50%">
                                            Cam sau:
                                        </td>
                                        <td class="content_charactestic">
                                            <?php echo $row6['rear_camera']; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="50%">
                                            Chipset:
                                        </td>
                                        <td class="content_charactestic">
                                            <?php echo $row6['chipset']; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="50%">
                                            Pin: 
                                        </td>
                                        <td class="content_charactestic">
                                            <?php echo $row6['battery']; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="title_charactestic" width="50%">
                                            Ram:
                                        </td>
                                        <td class="content_charactestic">
                                            <span class="RAM"> <?php echo $current_storage; ?> </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box" id="product">
                        <div class="box-body">
                            <div class="highlights">
                                <h4 class="product-small-title">Highlights</h4>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <ul class="arrow">
                                            <li>12.2 MP Rear | 8 MP Front Camera </li>
                                            <li>4GB RAM </li>
                                            <li>2700 mAh battery</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <ul class="arrow">
                                            <li>Android 8.0 </li>
                                            <li>Qualcomm Snapdragon 835</li>
                                            <li>Fingerprint Sensor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="highlights">
                                <h4 class="product-small-title">Specification</h4>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h4>General</h4>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb30">
                                        <ul>
                                            <li>Brand</li>
                                            <li>Model Number </li>
                                            <li>Body Material</li>
                                            <li>Sim Size</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb30">
                                        <ul>
                                            <li style="color: #1c1e1e;">Google Pixel </li>
                                            <li style="color: #1c1e1e;">Google XYZ</li>
                                            <li style="color: #1c1e1e;">Metal and Polycarbonate</li>
                                            <li style="color: #1c1e1e;">Micro</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h4>Display</h4>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <ul>
                                            <li>Screen Size </li>
                                            <li>Display Resolution </li>
                                            <li>Pixel Density</li>
                                            <li>Screen Protection </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <ul>
                                            <li style="color: #1c1e1e;">5 inch </li>
                                            <li style="color: #1c1e1e;">1280 X 720 Pixels</li>
                                            <li style="color: #1c1e1e;">294 PPI</li>
                                            <li style="color: #1c1e1e;">Gorilla Glass 4</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- rating reviews  -->
            <div id="rating">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="box container-rating-review">
                            <div class="box-head">
                                <h3 class="head-title">Đánh giá và nhận xét (<?php echo $product_numberOfReviews ?>)</h3>
                                <div class="filter-buttons" style="margin-left: 10px;">
                                    <button class="filter-btn" data-star="all" style="color: black; font-size: 20px">Tất cả</button>
                                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                                        <button class="filter-btn" data-star="<?php echo $i; ?>" style="color: black; font-size: 20px"><?php echo $i; ?> sao</button>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row  rating-box">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="rating-review" >
                                            <div class="">
                                                <h1 class="score-rating score-average_rating" style="font-weight: bold; color: #363636; font-size: 30px; margin-right: -7px"><?php echo $average_rating ?></h1>
                                            </div>
                                            <div style="margin-top: 17px;">
                                                <div class="product-rating star-rating">
                                                <?php
                                                    // Hiển thị số sao đã đánh giá
                                                    for ($i = 1; $i <= 5; $i++) {
                                                        // Kiểm tra nếu là sao đầy
                                                        if ($i <= floor($average_rating)) {
                                                            echo '<span style="font-size: 17px;" ><i class="fa fa-star"></i></span>';  // Sao đầy
                                                        }
                                                        // Kiểm tra nếu là sao nửa
                                                        elseif ($i == ceil($average_rating) && $average_rating - floor($average_rating) >=0.5) {
                                                            echo '<span style="font-size: 17px; "><i class="fa fa-star-half-o"></i></span>';  // Sao nửa
                                                        }
                                                        // Các trường hợp còn lại là sao rỗng
                                                        else {
                                                            echo '<span style="font-size: 17px;"><i class="fa fa-star-o"></i></span>';  // Sao rỗng
                                                        }
                                                    }                                            
                                                ?>
                                                </div>
                                                <p class="text-secondary-comment" style="font-size: 18px"><?php echo $rating_count?> lượt đánh giá</p>
                                            </div>
                                        </div>
                                        <div class="rating-view-details">
                                            <?php 
                                                $starVotes = $product_getStarRatingCounts;// Lấy dữ liệu số sao
                                            ?>
                                            <?php for ($i = 5; $i >= 1; $i--) { ?>
                                            <div class="rating-level">                                             
                                                 <!-- Hiển thị số sao -->
                                                <div class="product-rating">
                                                    <?php for ($j = 1; $j <= 5; $j++) { ?>
                                                        <?php if ($j <= $i) { ?>
                                                            <span><i class="fa fa-star"></i></span>
                                                        <?php } else { ?>
                                                            <span><i class="fa fa-star-o"></i></span>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </div>
                                                <!-- Hiển thị số lượt đánh giá -->
                                                <span><?php echo isset($starVotes[$i]) ? $starVotes[$i] : 0; ?></span>
                                                <!-- Hiển thị các ô để lọc bình luận theo số sao -->
                                            </div>
                                        <?php } ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="row review-box">
                                    <?php 
                                    $count = 0; // Biến đếm số lượng bình luận đã hiển thị
                                    while ($row7 = mysqli_fetch_array($product_reviews)) { 
                                        $count++; 
                                        $hidden_class = $count > 3 ? 'hidden-review' : ''; // Ẩn các bình luận sau bình luận thứ 3
                                    ?>
                                    <div class="customer-reviews <?php echo $hidden_class; ?>">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <p class="reviews-text" style="font-size: 16px;">
                                                <span class="text-default"><?php echo $row7['username'];?></span>    
                                                <span class="time-review" style="margin-left: 10px; color: #333333"><?php echo $row7['updated_at']; ?></span>
                                            </p>
                                            <?php if ((int)$row7['star_rating'] > 0) { ?>
                                            <div class="product-rating">
                                                <?php 
                                                for ($i = 0; $i < (int)$row7['star_rating']; $i++) {
                                                    echo '<span><i class="fa fa-star"></i></span>';
                                                }
                                                for ($i = (int)$row7['star_rating']; $i < 5; $i++) {
                                                    echo '<span><i class="fa fa-star-o"></i></span>';
                                                }
                                                ?>
                                            </div>
                                            <?php } ?>
                                            <p style="color: black; font-size: 16px"><?php echo $row7['comment']; ?></p>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="divider-line"></div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!-- Nút Xem thêm / Rút gọn -->
                                    <div class="button-container" style="text-align: center; margin-top: 20px;">
                                        <button class="less-evaluation-comment text-center" style="display:none; 
                                                margin: 0 10px; padding: 10px 20px; font-size: 16px; cursor: pointer;
                                                border: none; border-radius: 20px; background-color: #f0f0f0;">
                                            <i class="fa fa-minus-circle"></i> Rút gọn
                                        </button>
                                        <button class="more-evaluation-comment text-center" style="margin: 0 10px; padding: 10px 20px; font-size: 16px; cursor: pointer;
                                                border: none; border-radius: 20px; background-color: #f0f0f0;">
                                            <i class="fa fa-plus-circle"></i> Xem thêm
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div id="review">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="box">
                                <div class="box-head">
                                    <h3 class="head-title">Đánh giá và nhận xét của bạn</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="review-form">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 review-left">
                                                <div class="review-rating">
                                                    <h4>Đánh giá của bạn về sản phẩm này</h4><br />
                                                    <div class="star-rate" id="rateYo"></div>
                                                </div>
                                            </div>
                                            <form class="review-right">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group" style=" visibility: hidden;">
                                                        <label class="control-label sr-only " for="name"></label>
                                                        <input id="name" type="text" class="form-control"
                                                            placeholder="Họ tên" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group" style=" visibility: hidden">
                                                        <label class="control-label sr-only " for="email"></label>
                                                        <input id="email" type="text" class="form-control"
                                                            placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input type="hidden" id="star-rating" name="star_rating" value="0"> <!-- Giá trị mặc định là 0 -->
                                                        <label class="control-label sr-only " for="textarea"></label>
                                                        <textarea class="form-control" id="textarea" name="textarea"
                                                            rows="4" placeholder="Mời bạn nhập bình luận"></textarea>
                                                    </div>
                                                    <button id="submit-comment" name="singlebutton" class="btn btn-primary">Gửi
                                                        đánh giá</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.reviews-form -->

            </div>


        </div>
        <!-- /.product-description -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box-head">
                        <h3 class="head-title">Sản phẩm liên quan</h3>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <!-- product -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb30">
                            <div class="product-block">
                                <!-- <div class="product-img"><img src="images/product_img_1.png" alt=""></div> -->
                                <div class="product-content">
                                    <h5><a href="#" class="product-title">Google Pixel <strong>(128GB,
                                                Black)</strong></a></h5>
                                    <div class="product-meta"><a href="#" class="product-price">$1100</a>
                                        <a href="#" class="discounted-price">$1400</a>
                                        <span class="offer-price">20%off</span>
                                    </div>
                                    <div class="shopping-btn">
                                        <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.product -->
                        <!-- product -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb30">
                            <div class="product-block">
                                <!-- <div class="product-img"><img src="images/product_img_2.png" alt=""></div> -->
                                <div class="product-content">
                                    <h5><a href="#" class="product-title">HTC U Ultra <strong>(64GB, Blue)</strong></a>
                                    </h5>
                                    <div class="product-meta"><a href="#" class="product-price">$1200</a>
                                        <a href="#" class="discounted-price">$1700</a>
                                        <span class="offer-price">10%off</span>
                                    </div>
                                    <div class="shopping-btn">
                                        <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.product -->
                        <!-- product -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb30">
                            <div class="product-block">
                                <!-- <div class="product-img"><img src="images/product_img_3.png" alt=""></div> -->
                                <div class="product-content">
                                    <h5><a href="#" class="product-title">Samsung Galaxy Note 8</a></h5>
                                    <div class="product-meta"><a href="#" class="product-price">$1500</a>
                                        <a href="#" class="discounted-price">$2000</a>
                                        <span class="offer-price">40%off</span>
                                    </div>
                                    <div class="shopping-btn">
                                        <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.product -->
                        <!-- product -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb30">
                            <div class="product-block">
                                <!-- <div class="product-img"><img src="images/product_img_4.png" alt=""></div> -->
                                <div class="product-content">
                                    <h5><a href="#" class="product-title">Vivo V5 Plus <strong>(Matte
                                                Black)</strong></a></h5>
                                    <div class="product-meta"><a href="#" class="product-price">$1500</a>
                                        <a href="#" class="discounted-price">$2000</a>
                                        <span class="offer-price">15%off</span>
                                    </div>
                                    <div class="shopping-btn">
                                        <a href="#" class="product-btn btn-like">
                                            <i class="fa fa-heart"></i></a>
                                        <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.product -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.product-single -->
    </div>
    <!-- footer -->
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo _WEB_ROOT_ ?>/public/asset/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="<?php echo _WEB_ROOT_ ?>/public/asset/js/sticky-header.js"></script>
    <script type="text/javascript" src="<?php echo _WEB_ROOT_ ?>/public/asset/js/scrolling-nav.js"></script>
    <script type="text/javascript" src="<?php echo _WEB_ROOT_ ?>/public/asset/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="<?php echo _WEB_ROOT_ ?>/public/asset/js/jquery.rateyo.min.js"></script>
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/jquery.desoslide.js"></script>
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/toast.js"></script>
    <script type="text/javascript">
        $('#slideshow').desoSlide({
            thumbs: $('ul.slideshow_thumbs li > a'),
            effect: {
                provider: 'animate',
                name: 'fade'
            }

        });
    </script>
    <script>
        $(document).ready(function() {
            // Truyền giá trị tên hình ảnh từ PHP vào JavaScript
            var image_name = '<?php echo $image_name; ?>';
            var url_img = '<?php echo _WEB_ROOT_; ?>/public/asset/images/product1/' + image_name;
            // Cập nhật ảnh trong slideshow
            $('#slideshow img').attr('src', url_img);
        });
    </script>
<script>   
$(document).on('click', '.color-link, .internal_storage', function(e) {
    e.preventDefault(); // Ngừng hành động mặc định (chuyển hướng)

    var ProductColor_id = $(this).data('productcolor_id'); // Lấy giá trị ProductColor_id từ thuộc tính data- của phần tử
    var Product_id = $(this).data('product_id'); // Lấy giá trị Product_id từ thuộc tính data- của phần tử
    console.log("ProductColor_id:", ProductColor_id); // Debug giá trị

    // Gửi yêu cầu AJAX đến server
    $.ajax({
        url: '<?php echo _WEB_ROOT_; ?>/Product/ajaxUpdateProduct', 
        type: 'GET',
        data: { ProductColor_id: ProductColor_id},
        dataType: 'json', // Xác định kiểu dữ liệu trả về là JSON
    })
    .done(function(response) {
        console.log(response);  // Kiểm tra dữ liệu trả về
        if (response.discounted_price && response.original_price && response.quantity && response.url_image && response.id !== undefined) {
            // Cập nhật lại ảnh trong slideshow
            var url_img = '<?php echo _WEB_ROOT_; ?>/public/asset/images/product1/' + response.url_image;
            $('#slideshow img').attr('src', url_img);
            $('.discouted-price').html(response.discounted_price);
            $('.original-price').html(response.original_price);
            $('.rest-quantity').html(response.quantity);
            var inputElement = document.querySelector("#quantity-input");
            // Thay đổi giá trị của data-max-amount trong thẻ input
            inputElement.dataset.maxAmount = response.quantity;

            var inputElement = document.querySelector(".detailproduct_id");
            // Thay đổi giá trị của data-detailproduct-id
            inputElement.setAttribute("data-detailproduct-id", response.id);
            document.querySelector("#quantity-input").value = 1; // Thiết lập giá trị là 1
            // Cập nhật màu sắc
            $('.color-link').each(function() {
                var color = $(this).find('.color').text(); // Lấy màu từ phần tử
                // Duyệt mảng response.color để tìm giá trị color và lấy productColorId tương ứng
                var found = false;
                for (var i = 0; i < response.color.length; i++) {
                    if (response.color[i] === color) {
                        var productColorId = response.productColorIdsByColor[i];
                        $(this).data('productcolor_id', productColorId);
                        $(this).removeClass('disabled');  // Bỏ disabled nếu tìm thấy
                        if (productColorId == response.id) {
                            $(this).addClass('current-color');
                        } else {
                            $(this).removeClass('current-color');
                        }
                        found = true;
                        break;  // Dừng vòng lặp khi tìm thấy
                    }
                }
                if (!found) {
                    $(this).addClass('disabled');  // Thêm disabled nếu không tìm thấy
                }
            });

            // Cập nhật dung lượng
            $('.internal_storage').each(function() {
                var capacity = $(this).find('.capacity').text(); // Lấy dung lượng từ phần tử
                console.log("capacity:", capacity); // Debug giá trị capacity
                var found = false;
                // Duyệt mảng response.internal_storage để tìm giá trị capacity và lấy productColorId tương ứng
                for (var i = 0; i < response.internal_storage.length; i++) {
                    if (response.internal_storage[i] === capacity) {
                        // Nếu dung lượng khớp, gán productColorId từ mảng productColorIdsByInternal_Storage
                        var productColorId = response.productColorIdsByInternal_Storage[i];
                        $(this).data('productcolor_id', productColorId); // Gắn productColor_id vào phần tử
                        $(this).removeClass('disabled'); // Bỏ disabled nếu tìm thấy
                        if (productColorId == response.id) {
                            $(this).addClass('current-phone');
                        } else {
                            $(this).removeClass('current-phone');
                        }
                        found = true;
                        break;  // Dừng vòng lặp khi tìm thấy
                    }
                }
                if (!found) {
                    $(this).addClass('disabled');  // Thêm disabled nếu không tìm thấy
                }
            });
            //Cập nhật thông số Ram trong phần thông số chi tiết
            $('span.RAM').html(response.internal_storage_selected);
            // Cập nhật URL sản phẩm
            var productName = response.product_name.replace(/\s+/g, '-').toLowerCase(); // Tạo tên sản phẩm hợp lệ bằng cách thay tất cả khoảng trắng (\s+) bằng dấu '-' và chuyển về chữ thường 
            var capacity = response.internal_storage_selected ? response.internal_storage_selected.replace(/\s+/g, '').toLowerCase() : 'unknown'; // 
            var newUrl = `<?php echo _WEB_ROOT_; ?>/product/details/${productName}-${capacity}?ProductColor_id=${response.id}`;
            // Sử dụng history.pushState để thay đổi URL mà không tải lại trang
            window.history.pushState(null, null, newUrl);
        } else {
            console.error("Dữ liệu trả về không hợp lệ:", response);
            alert("Dữ liệu trả về không hợp lệ.");
        }
    })
    .fail(function(xhr, status, error) {
        console.error("Status:", status); // In ra trạng thái
        console.error("Error:", error); // In ra lỗi
        console.error("Response:", xhr.responseText); // Nội dung trả về từ server
        alert("Lỗi khi tải dữ liệu. Kiểm tra console để biết thêm chi tiết.");
    });
});
</script> 
<script type="text/javascript">
    $(function () {
        // Khởi tạo RateYo
        $("#rateYo").rateYo({
            rating: 0, // Mặc định không có sao
            starWidth: "25px",
            fullStar: true // Bắt buộc người dùng chọn số sao nguyên
        }).on("rateyo.set", function (e, data) {
            // Lưu số sao vào input ẩn để gửi qua AJAX
            $('#star-rating').val(data.rating); // Gán số sao vào input ẩn
        });
    });
</script>

    <script>
        // Hàm kiểm tra và điều chỉnh giá trị nhập
        function validateQuantity() {
            var inputElement = document.querySelector("#quantity-input");
            var maxAmount = parseInt(inputElement.dataset.maxAmount); // Lấy giá trị data-max-amount
            var qty = inputElement.value.trim();  // Lấy giá trị nhập và loại bỏ khoảng trắng

            // Kiểm tra nếu giá trị nhập không hợp lệ
            if (qty === "") {
                return; // Không thay đổi giá trị khi người dùng xóa hết
            }

            qty = parseInt(qty);  // Chuyển đổi giá trị thành số nguyên

            // Kiểm tra nếu giá trị nhập nhỏ hơn 1
            if (isNaN(qty) || qty < 1) {
                inputElement.value = 1; // Đặt lại giá trị về 1 nếu giá trị không hợp lệ
                showToast("Số lượng không thể nhỏ hơn 1.");
            } 
            // Kiểm tra nếu giá trị nhập lớn hơn maxAmount
            else if (qty > maxAmount) {
                inputElement.value = maxAmount; // Đặt lại giá trị về maxAmount nếu giá trị nhập quá lớn
                showToast("Số lượng không thể lớn hơn số lượng sản phẩm có sẵn (" + maxAmount + ")."); // Hiển thị thông báo lỗi
            }
        }

        // Kiểm tra khi người dùng nhập liệu (dùng `input` để không gián đoạn khi thay đổi giá trị)
        document.querySelector("#quantity-input").addEventListener("input", function() {
            var inputElement = document.querySelector("#quantity-input");
            var qty = inputElement.value.trim();
            
            // Nếu trường nhập trống, không thay đổi giá trị
            if (qty === "") {
                return; // Không làm gì khi ô trống
            }
            
            validateQuantity(); // Gọi lại hàm validate khi có sự thay đổi
        });

        // Kiểm tra khi trường nhập mất focus
        document.querySelector("#quantity-input").addEventListener("blur", function() {
            var inputElement = document.querySelector("#quantity-input");
            var qty = inputElement.value.trim();
            
            // Nếu trường nhập trống khi mất focus, đặt lại giá trị là 1
            if (qty === "") {
                inputElement.value = 1;
            } else {
                validateQuantity(); // Kiểm tra giá trị khi mất focus
            }
        });

        // Hàm hiển thị thông báo lỗi
        function showToast(message) {
            toast({
                title: "Lỗi",
                message: message,
                type: "error",
                duration: 5000
            });
        }
        // Giảm số lượng
        function dcQuantity() {
            var input = document.querySelector(`#quantity-input`); // Truy cập vào input số lượng
            var qty = parseInt(input.value);

            if (!isNaN(qty) && qty > 1) {
                input.value = --qty; // Giảm số lượng
            } else {
                toast({
                    title: "Lỗi",
                    message: "Số lượng sản phẩm không thể nhỏ hơn 1.",
                    type: "error",
                    duration: 5000
                });
            }
        }

        // Tăng số lượng
        function icQuantity() {
            var input = document.querySelector(`#quantity-input`); // Truy cập vào input số lượng
            var maxAmount = parseInt(input.dataset.maxAmount); // Lấy số lượng tối đa từ data-max-amount
            console.log("maxAmount:", maxAmount); // Debug giá trị maxAmount
            var qty = parseInt(input.value);

            if (!isNaN(qty) && qty < maxAmount) {
                input.value = ++qty; // Tăng số lượng
            } else {
                toast({
                    title: "Lỗi",
                    message: "Số lượng sản phẩm bạn chọn đã đạt mức tối đa.",
                    type: "error",
                    duration: 5000
                });
            }
        }
    </script>

    <!-- nút xem thêm và rút gọn giới thiệu sản phẩm -->
    <script>
        $(document).ready(function () {
            $('.less-evaluation').click(function () {
                $('.content-desc').css('height', '1180px');
                $(this).css('display', 'none');
                $('.more-evaluation').css('display', 'block');
            })
        })

        $(document).ready(function () {
            $('.more-evaluation').click(function () {
                $('.content-desc').css('height', 'auto');
                $(this).css('display', 'none');
                $('.less-evaluation').css('display', 'block');
            })
        })

        $(document).ready(function () {
            $('.page-scroll').click(function () {
                $('.page-scroll').removeClass('active');
                $(this).addClass('active');
            })
        })
    </script>

    <!-- nút xem thêm và rút gọn bình luận -->
    <script>
        $(document).ready(function () {
            var reviewsPerClick = 3; // Số lượng bình luận hiển thị mỗi lần nhấn nút "Xem thêm"
            var totalReviews = $('.customer-reviews').length; // Tổng số bình luận
            var reviewsToShow = reviewsPerClick; // Biến theo dõi số lượng bình luận cần hiển thị thêm

            // Nếu số lượng bình luận nhỏ hơn hoặc bằng 3, ẩn nút "Xem thêm"
            if (totalReviews <= reviewsPerClick) {
                $('.more-evaluation-comment').hide(); // Ẩn nút "Xem thêm"
            }

            // Ẩn tất cả các bình luận sau 3 cái đầu tiên
            $('.customer-reviews:gt(' + (reviewsPerClick - 1) + ')').hide();

            // Khi nhấn nút "Xem thêm", hiển thị thêm 3 bình luận nữa
            $('.more-evaluation-comment').click(function () {
                var reviewsHidden = $('.customer-reviews:hidden');
                var reviewsToDisplay = reviewsHidden.slice(0, reviewsPerClick); // Lấy ra 3 bình luận ẩn đầu tiên

                reviewsToDisplay.slideDown(); // Hiển thị chúng
                reviewsToShow += reviewsPerClick; // Tăng số lượng bình luận cần hiển thị

                // Kiểm tra nếu không còn bình luận ẩn nào, ẩn nút "Xem thêm"
                if ($('.customer-reviews:hidden').length === 0) {
                    $(this).hide(); // Ẩn nút "Xem thêm" nếu không còn bình luận ẩn
                }

                // Hiển thị nút "Rút gọn" nếu các bình luận đã được mở rộng
                $('.less-evaluation-comment').show();
            });

            // Khi nhấn nút "Rút gọn", ẩn các bình luận vượt quá số lượng đã hiển thị
            $('.less-evaluation-comment').click(function () {
                // Ẩn tất cả bình luận ngoài những bình luận đầu tiên
                $('.customer-reviews:gt(' + (reviewsPerClick - 1) + ')').slideUp();
                $(this).hide(); // Ẩn nút "Rút gọn"
                $('.more-evaluation-comment').show(); // Hiển thị nút "Xem thêm"
            });

            $('#submit-comment').click(function(event) {
                event.preventDefault(); // Ngăn form gửi đi theo cách thông thường
                var comment = $('#textarea').val(); // Nội dung bình luận
                var starRating = $('#star-rating').val().trim(); // Số sao
                var product_id = $('input[name="product_id"]').val(); // Lấy giá trị của product_id
                if (starRating === '' || isNaN(starRating) || starRating <= 0) {
                    starRating = 0;
                }
                if (comment === '' && starRating === 0) {
                    toast({
                        title: "Lỗi",
                        message: "Vui lòng nhập nội dung bình luận hoặc chọn số sao để thực hiện đánh giá sản phẩm.",
                        type: "error",
                        duration: 5000
                    });
                    return;
                }
                console.log("Comment:", comment); // Debug nội dung bình luận
            
                // Gửi yêu cầu AJAX
                $.ajax({
                    url: '<?php echo _WEB_ROOT_; ?>/Review/addReview', // Đường dẫn xử lý bình luận
                    type: 'POST', // Phương thức POST
                    data: { 
                        comment: comment,
                        starRating: starRating,
                        product_id: product_id
                    },
                    dataType: 'json' // Xác định kiểu dữ liệu trả về
                })
                .done(function(response) { // Khi yêu cầu thành công
                    console.log(response); // Debug dữ liệu trả về
                    if (!response.login) {
                        window.location.href = "<?php echo _WEB_ROOT_; ?>/auth/login";
                    } else {
                        if (response.success) {
                            toast({
                                title: "Thành công!",
                                message: response.message,
                                type: "success",
                                duration: 5000
                            });
                            const newComment = `<div class="customer-reviews">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <p class="reviews-text" style="font-size: 16px;">
                                                            <span class="text-default">${response.user_name}</span>
                                                            <span class="time-review" style="margin-left: 10px; color: #333333">${response.review_update_time}</span>
                                                        </p>
                                                        ${response.starRating > 0 ? `
                                                        <div class="product-rating">
                                                            ${renderStars(response.starRating)}
                                                        </div>` : ''}
                                                        <p  style="color: black; font-size: 16px">${response.comment}</p>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="divider-line"></div>
                                                    </div>
                                                </div>`;
                            $('.review-box').prepend(newComment); // Thêm bình luận mới vào đầu danh sách
                            $('#textarea').val(''); // Xóa nội dung trong textarea

                            if (response.starRating > 0) {
                                // Cập nhật thông tin về số sao và lượt đánh giá
                                updateProductRating(response.average_rating, response.rating_count, response.starRating_counts);
                            }
                            
                            // Cập nhật số lượt đánh giá trong phần "Đánh giá và nhận xét"
                            var ReviewCount = response.review_count;
                            $('.head-title').html('Đánh giá và nhận xét (' + ReviewCount + ')');
                            // Kiểm tra lại và hiển thị hoặc ẩn nút "Xem thêm"

                            totalReviews += 1; // tăng số lượng bình luận lên 1
                            if (totalReviews > reviewsPerClick) { // kiểm tra nếu số lượng bình luận > reviewsPerClick(3) thì hiện nút xem thêm
                                $('.more-evaluation-comment').show();
                            } else {
                                $('.more-evaluation-comment').hide();
                            }

                              // Chỉ hiển thị tối đa 3 bình luận đầu tiên
                            $('.customer-reviews:gt(' + (reviewsPerClick - 1) + ')').hide();
                        
                        } else {
                            toast({
                                title: "Thất bại!",
                                message: response.message,
                                type: "error",
                                duration: 5000
                            });
                        }
                    }
                })
                .fail(function(xhr, status, error) { // Khi có lỗi xảy ra
                    console.error("Status:", status); // In ra trạng thái
                    console.error("Error:", error); // In ra lỗi
                    console.error("Response:", xhr.responseText); // Nội dung trả về từ server
                    toast({
                        title: "Lỗi hệ thống",
                        message: "Có lỗi xảy ra khi xử lý yêu cầu. Vui lòng thử lại.",
                        type: "error",
                        duration: 5000
                    });
                });
            });

        $(".filter-btn").on("click", function () {
            // Xóa class 'active' khỏi tất cả các nút
            $(".filter-btn").removeClass("active");

            // Thêm class 'active' cho nút được bấm
            $(this).addClass("active");

            const starRating = $(this).data("star"); // Lấy giá trị số sao từ nút
            const product_id = $('input[name="product_id"]').val(); // Lấy giá trị của product_id
            console.log("Star rating:", starRating); // Debug giá trị
            console.log("Product ID:", product_id); // Debug giá trị
            var countReview = 0;
            $.ajax({
                url: '<?php echo _WEB_ROOT_; ?>/Review/filterReviews',  
                type: 'POST',  // Phương thức POST
                data: {  // Dữ liệu gửi điS
                    product_id: product_id, 
                    starRating: starRating
                },
                dataType: 'json'  // Xác định kiểu dữ liệu trả về là JSON
            })
            .done(function (response) {
                console.log(response); // Debug dữ liệu trả về
                const reviewBox = $(".review-box");
                reviewBox.find(".customer-reviews").remove(); // Xóa tất cả các bình luận hiện tại, nhưng giữ lại nút "Xem thêm"
                const buttonContainer = $(".button-container");  // Lấy container chứa nút "Xem thêm" và "Rút gọn"

                if (response.success == true) {
                    response.reviews.forEach(function (review) {
                        const starsHtml = renderStars(review.star_rating);
                        const newComment = `
                            <div class="customer-reviews">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <p class="reviews-text" style="font-size: 16px;">
                                        <span class="text-default">${review.username}</span>
                                        <span class="time-review" style="margin-left: 10px; color: #333333">${review.updated_at}</span>
                                    </p>
                                    ${review.star_rating > 0 ? `
                                    <div class="product-rating">
                                        ${renderStars(review.star_rating)}
                                    </div>` : ''}
                                    <p style="color: black; font-size: 16px">${review.comment}</p>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="divider-line"></div>
                                </div>
                            </div>`;
                        reviewBox.append(newComment); // Thêm bình luận vào danh sách
                        countReview++;
                        if (countReview > reviewsPerClick) { // kiểm tra nếu số lượng bình luận > reviewsPerClick(3) thì hiện nút xem thêm
                                $('.more-evaluation-comment').show();
                                console.log('1');
                            } else {
                                $('.more-evaluation-comment').hide();
                            }
                    });
                    // Chỉ hiển thị tối đa 3 bình luận đầu tiên
                    $('.customer-reviews:gt(' + (reviewsPerClick - 1) + ')').hide();
                    // Đảm bảo nút "Xem thêm" luôn ở cuối
                    reviewBox.append(buttonContainer);
                } else {
                    $('.more-evaluation-comment').hide();
                    reviewBox.append("<p class='customer-reviews' style='color: red; font-size: 30px; display: flex; justify-content: center; align-items: center; height: 100%; font-weight: bold;'>Không có đánh giá nào phù hợp!</p>");
                    reviewBox.append(buttonContainer);  // Giữ lại nút "Xem thêm" và "Rút gọn"
                }
            })
            .fail(function(xhr, status, error) { // Khi có lỗi xảy ra
                    console.error("Status:", status); // In ra trạng thái
                    console.error("Error:", error); // In ra lỗi
                    console.error("Response:", xhr.responseText); // Nội dung trả về từ server
                    toast({
                        title: "Lỗi hệ thống",
                        message: "Có lỗi xảy ra khi xử lý yêu cầu. Vui lòng thử lại.",
                        type: "error",
                        duration: 5000
                    });
            });
        });

            function renderStars(rating) {
                let starsHtml = '';
                for (let i = 1; i <= 5; i++) {
                    if (i <= rating) {
                        starsHtml += '<span><i class="fa fa-star"></i></span>';
                    } else {
                        starsHtml += '<span><i class="fa fa-star-o"></i></span>';
                    }
                }
                return starsHtml;
            }

            function renderStarsAverage(averageRating) {
                let starsHtml = '';
                for (let i = 1; i <= 5; i++) {
                    if (i <= Math.floor(averageRating)) {
                        // Sao đầy
                        starsHtml += '<span><i class="fa fa-star"></i></span>';
                    } else if (i === Math.ceil(averageRating) && averageRating % 1 >= 0.5) {
                        // Sao nửa
                        starsHtml += '<span><i class="fa fa-star-half-o"></i></span>';
                    } else {
                        // Sao rỗng
                        starsHtml += '<span><i class="fa fa-star-o"></i></span>';
                    }
                }
                return starsHtml;
            }

            function updateProductRating(averageRating, ratingCount, starRating_counts) {
                // Cập nhật điểm đánh giá trung bình
                $('.score-average_rating').text(averageRating.toFixed(1));

                // Cập nhật sao trung bình
                const starsHtml = renderStarsAverage(averageRating);
                $('.star-rating').first().html(starsHtml);

                // Cập nhật số lượt đánh giá 
                $('.text-secondary').text(`( ${ratingCount} đánh giá)`);
                $('.text-secondary-comment').text(`${ratingCount} lượt đánh giá`);

                // Cập nhật danh sách số sao
                const starContainer = $('.rating-level .product-rating');
                starContainer.each(function(index) { // index đại diện cho các thẻ có class product-rating bắt đầu từ 0 
                    const starLevel = 5 - index; // 5 sao -> 1 sao
                    $(this).next('span').text(starRating_counts[starLevel] || 0); // Số lượt đánh giá theo từng sao
                });
            }
        });
    </script>
    <script>
    $('#add-to-cart-form').submit(function(event) {
        event.preventDefault();  // Ngăn không cho form gửi đi theo cách thông thường

        // Lấy giá trị từ form
        var action = $(document.activeElement).val();
        var detailproduct_id = $('input[name="product_color_id"]').attr('data-detailproduct-id');  // Lấy giá trị của product_color_id trong jQuery
        var quantity = $('#quantity-input').val();  // Lấy giá trị của quantity (số lượng)
        console.log("detailproduct_id:", detailproduct_id);  // Debug giá trị
        console.log("quantity:", quantity);  // Debug giá trị
        // Gửi yêu cầu AJAX
        $.ajax({
            url: '<?php echo _WEB_ROOT_; ?>/Cart/addProductToCart',  
            type: 'POST',  // Phương thức POST
            data: {  // Dữ liệu gửi điS
                detailproduct_id, quantity
            },
            dataType: 'json'  // Xác định kiểu dữ liệu trả về là JSON
        })
        .done(function(response) {  // Khi yêu cầu thành công
            console.log(response);  // Debug dữ liệu trả về
            if (!response.login) {
                window.location.href = "<?php echo _WEB_ROOT_; ?>/auth/login";
            } else {
                if (response.success) {
                    if (action === 'buy-now') {
                    // Chuyển hướng tới trang giỏ hàng
                    window.location.href = "<?php echo _WEB_ROOT_; ?>/cart?detailproduct_id=" + detailproduct_id;

                    }else toast({
                            title: "Thành công!",
                            message: response.message,
                            type: "success",
                            duration: 5000
                          });
                } else {
                    toast({
                        title: "Thất bại!",
                        message: response.message,
                        type: "error",
                        duration: 5000
                    });
                }
            }
             // Nếu người dùng chưa đăng nhập, chuyển hướng đến trang login
             
        })
        .fail(function(xhr, status, error) {  // Khi có lỗi xảy ra
            console.error("Status:", status);  // In ra trạng thái
            console.error("Error:", error);  // In ra lỗi
            console.error("Response:", xhr.responseText);  // Nội dung trả về từ server
            toast({
                title: "Lỗi hệ thống",
                message: "Có lỗi xảy ra khi xử lý yêu cầu. Vui lòng thử lại.",
                type: "error",
                duration: 5000
            });
        });
    });


</script>
<script>
     $(document).on('click', '.btn-like', function(event) {
    event.preventDefault(); // Ngăn hành động mặc định của thẻ a

    // Lấy giá trị detailproduct_id từ thuộc tính data-value
    var detailproduct_id = $(this).data('value');
    console.log("detailproduct_id:", detailproduct_id); // Debug giá trị

    // Gửi yêu cầu AJAX
    $.ajax({
        url: '<?php echo _WEB_ROOT_; ?>/Wishlist/AddProductToWishlist', // Đường dẫn đến controller
        type: 'POST', // Phương thức gửi
        data: { detailproduct_id }, // Dữ liệu gửi đi
        dataType: 'json', // Dữ liệu trả về dạng JSON
    })
    .done(function(response) {
        console.log(response); // Debug phản hồi từ server
        if (response.success) {
            // Hiển thị thông báo thành công
            toast({
                title: "Thành công!",
                message: response.message,
                type: "success",
                duration: 5000
            });
        } else {
            // Hiển thị thông báo thất bại
            toast({
                title: "Cảnh báo!",
                message: response.message,
                type: "warning",
                duration: 5000
            });
        }
    })
    .fail(function(xhr, status, error) {
        console.error("Status:", status);
        console.error("Error:", error);
        console.error("Response:", xhr.responseText);
        // Hiển thị thông báo lỗi hệ thống
        toast({
            title: "Lỗi hệ thống",
            message: "Có lỗi xảy ra khi xử lý yêu cầu. Vui lòng thử lại.",
            type: "error",
            duration: 5000
        });
    });
});

</script>



</body>

</html>