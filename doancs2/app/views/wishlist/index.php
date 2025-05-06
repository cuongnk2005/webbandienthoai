<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:41:04 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title> Mobistore Online Mobile Store Template - Cart Page </title>
    <!-- Bootstrap -->
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/boostrap/bootstrap.min.css" rel="stylesheet">
     <!-- Style CSS -->
     <link href="<?php echo _WEB_ROOT_ ?>/public/asset/css/style.css?v=1.3" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/css/font-awesome.min.css" rel="stylesheet">
    <!-- Toast CSS -->
    <link rel="stylesheet"  href="<?php echo _WEB_ROOT_ ?>/public/asset/css/toast.css?v=1.7">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .empty-wishlist {
            text-align: center; /* Canh giữa nội dung */
            color:rgb(249, 6, 6); /* Màu đỏ Bootstrap */
            font-size: 20px; /* Cỡ chữ lớn */
            font-weight: bold; /* Chữ đậm */
            margin-top: 100px; /* Tạo khoảng cách phía trên */
        }
    </style>
</head>

<body>
    <!-- page-header -->
    <!-- /.page-header-->
    <!-- cart-section -->
    <!-- <div class="space-medium"> -->
    <div class="container">
        <div class="row">

            <div class="box">
                <?php if ($CountWishlistItems['count'] > 0) { ?>
                <div class="box-head box-head-gray">
                    <h3 class="head-title">Danh sách yêu thích: <?php echo $CountWishlistItems['count']?> sản phẩm</h3>
                </div>
                <div class="box-body box-body-gray">
                    <?php while ($row = mysqli_fetch_array($wishlistItems)) { ?>
                    <ul class="list-favorites" data-value=<?php echo $row['id'] ?>>
                        <li class="item">
                            <button class="btn-delete" data-value=<?php echo $row['id']?>>×</button>
                            <div class="thumbnail">
                                <a href="<?php echo _WEB_ROOT_?>/Product/details/<?php echo $row['product_name'].'?ProductColor_id='.$row['id'] ?>" class="img">
                                    <img src="<?php echo _WEB_ROOT_ . '/public/asset/images/product1/' . $row['image']; ?>"
                                        alt="">
                                </a>
                            </div>
                            <div class="body">
                                <a href="<?php echo _WEB_ROOT_?>/Product/details/<?php echo $row['product_name'].'?ProductColor_id='.$row['id'] ?>" class="name" style="color: black; font-weight: bold"><?php echo $row['product_name'].' '.$row['internal_storage']?></a>
                                <div class="rating-review">
                                    <div class="rating">
                                    <?php
                                        if ($row['rating_count'] == 0) {
                                            $average_rating = 0;
                                        } else {
                                            $average_rating = $row['average_rating'];
                                        }
                                        echo '<span class="score-average_rating" style="font-size: 20px; margin-right: 5px">'.$average_rating.'</span>';
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
                                    <span class="review-count">(<?php echo $row['rating_count']?> nhận xét)</span>
                                </div>

                            </div>

                            <div class="footer">
                                <div class="price-wrapper">
                                    <div class="price-discounta">
                                        <span class="discouted-price" style="color: red; font-weight: bold"><?php echo number_format($row['discounted_price'], 0, ',', '.') ?> VND</span>
                                    </div>
                                    <div class="price-original">
                                        <span class="original-price"><strike><?php echo number_format($row['original_price'], 0, ',', '.') ?> VND</strike></span>
                                    </div>
                                </div>
                                <div class="stock-info">
                                    <span style="color: blue; font-weight: bold"><?php echo $row['amout'] ?> sản phẩm có sẵn</span>
                                </div>
                            </div>

                        </li>
                    </ul>
                    <?php } ?>
                </div>
                <div class="empty-wishlist" style="display: none">
                        <p>Danh sách yêu thích của bạn hiện đang trống! <br> Hãy nhanh tay tìm cho mình sản phẩm yêu thích.</p>
                    </div> 
                <?php } else {?>
                    <div class="empty-wishlist">
                        <p>Danh sách yêu thích của bạn hiện đang trống! <br> Hãy nhanh tay tìm cho mình sản phẩm yêu thích.</p>
                    </div> 
                <?php } ?>
            </div>
            <a href="<?php echo _WEB_ROOT_?>/Product" class="btn-link" style="display:block; margin-bottom: 20px">
                <center> Trở về trang mua hàng</center>
            </a>
            <div id="toast"></div>
            <!-- cart-total -->

        </div>
        <!-- /.cart-total -->
        <!-- </div> -->
    </div>
    <!-- /.cart-section -->
    <!-- footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo _WEB_ROOT_ ?>/public/asset/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="<?php echo _WEB_ROOT_ ?>/public/asset/js/sticky-header.js"></script>
    
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/toast.js"></script>
    <script type="text/javascript" src="<?php echo _WEB_ROOT_ ?>/public/asset/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo _WEB_ROOT_ ?>/public/asset/js/multiple-carousel.js"></script>
    <script>
       $(document).on('click', '.btn-delete', function(event) {
            event.preventDefault(); // Ngăn hành động mặc định của thẻ button

            // Lấy giá trị từ data-value của nút xoá
            var detailproduct_id = $(this).data('value');
            console.log("detailproduct_id:", detailproduct_id); // Debug giá trị

            // Lưu phần tử `this` vào một biến để sử dụng trong .done()
            var button = $(this);  
            
            // Gửi yêu cầu AJAX để xoá sản phẩm khỏi danh sách yêu thích trên server
            $.ajax({
                url: '<?php echo _WEB_ROOT_; ?>/Wishlist/DeleteProductFromWishlist', // Đường dẫn đến controller
                type: 'POST', // Phương thức gửi
                data: { detailproduct_id }, // Dữ liệu gửi đi
                dataType: 'json', // Dữ liệu trả về dạng JSON
            })
            .done(function(response) {
                console.log(response); // Debug phản hồi từ server
                if (response.success) {
                    // Xóa toàn bộ <ul> chứa sản phẩm
                    button.closest('ul.list-favorites[data-value="' + detailproduct_id + '"]').remove();

                    // Cập nhật lại số lượng sản phẩm yêu thích
                    var newCount = response.newCount['count']; // Số lượng mới từ phản hồi server

                    
                    console.log("newCount:", newCount); // Debug giá trị
                    // Nếu không còn sản phẩm, hiển thị thông báo trống
                    if (Number(newCount) === 0) {
                        $('.head-title').remove();
                        $('.empty-wishlist').show();
                        $('.box-body').hide();
                    } else {
                        // Cập nhật lại tiêu đề danh sách yêu thích
                        $('.empty-wishlist').hide();
                        $('.box-body').show();
                        $('.head-title').text('Danh sách yêu thích: ' + newCount + ' sản phẩm');
                    }

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