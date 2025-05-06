<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:40:53 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Nhom 21 LT WEB</title>
    <!-- Bootstrap -->
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/boostrap/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/css/style.css?v=132.2" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/css/font-awesome.min.css" rel="stylesheet">
    <!-- Toast CSS -->
    <link rel="stylesheet"  href="<?php echo _WEB_ROOT_ ?>/public/asset/css/toast.css?v=1.3">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo _WEB_ROOT_ ?>/home/">Trang chủ</a></li>
                            <li>Điện thoại</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. header-section-->
    <!-- product-list -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 cssmenu-test">
                    <!-- sidenav-section -->
                    <div id='cssmenu'>
                        <ul>
                            <li class='has-sub' id="id_system"><a href='#'>Hệ điều hành</a>
                                <ul>

                                    <li>
                                        <label>
                                            <input class="checkbox-filter" type="checkbox" value="">
                                            <span class="checkbox-list">Tất cả</span></label>
                                    </li>
                                    <li>
                                        <label>
                                            <input class="checkbox-filter" type="checkbox" value="2">
                                            <span class="checkbox-list">Android</span></label>
                                    </li>
                                    <li>
                                        <label>
                                            <input class="checkbox-filter" type="checkbox" value="1">
                                            <span class="checkbox-list">ISO</span>
                                        </label>
                                    </li>

                                </ul>
                            </li>
                            <li class='has-sub' id="brand_id"><a href='#'>Hãng sản xuất</a>
                                <ul>
                                    <li>
                                        <label>
                                            <input class="checkbox-filter" value="" type="checkbox">
                                            <span class="checkbox-list">Tất cả </span>
                                        </label>
                                    </li>
                                    <?php while ($row = mysqli_fetch_array($brands)) {
                                        echo '
                                        <li>
                                          <label>
                                            <input class="checkbox-filter" value="' . $row['brand_id'] . '" type="checkbox">
                                            <span class="checkbox-list">' . $row['brand_name'] . ' </span>
                                          </label>
                                        </li>';
                                    } ?>

                                </ul>
                            </li>
                            <li class='has-sub' id="discounted_price"><a href='#'>Giá Bán</a>
                                <ul>
                                    <li>
                                        <label>
                                            <input class="checkbox-filter" value="" type="checkbox">
                                            <span class="checkbox-list">Tất cả</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input class="checkbox-filter" value="0-2000000" type="checkbox">
                                            <span class="checkbox-list">Dưới 2 triệu</span>
                                        </label>
                                    </li>
                                    <li><span>
                                            <label>
                                                <input class="checkbox-filter" value="2000000-5000000" type="checkbox">
                                                <span class="checkbox-list">Từ 2 - 5 triệu</span>
                                            </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input class="checkbox-filter" value="5000000-10000000" type="checkbox">
                                            <span class="checkbox-list">Từ 5 - 10 triệu</span>
                                        </label>
                                    </li>

                                    <li><span>
                                            <label>
                                                <input class="checkbox-filter" value="10000000-15000000"
                                                    type="checkbox">
                                                <span class="checkbox-list">Từ 10 - 15 triệu</span>
                                            </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input class="checkbox-filter" value="15000000-100000000" type="checkbox">
                                            <span class="checkbox-list">Trên 15 triệu</span>
                                        </label>
                                    </li>

                                </ul>
                            </li>
                            <li class='has-sub' id="screen_size"><a href='#'>Màn hình</a>
                                <ul>
                                    <li>
                                        <label>
                                            <input class="checkbox-filter" value="" type="checkbox">
                                            <span class="checkbox-list">Tất cả</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input class="checkbox-filter" value="0-6" type="checkbox">
                                            <span class="checkbox-list">Dưới 6.0 inch</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input class="checkbox-filter" value="6-8" type="checkbox">
                                            <span class="checkbox-list">Trên 6.0 inch</span>
                                        </label>
                                    </li>

                                </ul>
                            </li>
                            <li class='has-sub' id="internal_storage"><a href='#'>Bộ nhớ trong</a>
                                <ul>
                                    <li>
                                        <label>
                                            <input class="checkbox-filter" value="" type="checkbox">
                                            <span class="checkbox-list">Tất cả</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input class="checkbox-filter"
                                                value="internal_storage LIKE '16GB' OR internal_storage LIKE '32GB'"
                                                type="checkbox">
                                            <span class="checkbox-list">Dưới 32GB</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input class="checkbox-filter"
                                                value="internal_storage LIKE '64GB' OR internal_storage LIKE '128GB'"
                                                type="checkbox">
                                            <span class="checkbox-list">64GB và 128GB</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input class="checkbox-filter"
                                                value="internal_storage LIKE '256GB' OR internal_storage LIKE '512GB'"
                                                type="checkbox">
                                            <span class="checkbox-list">256GB và 512GB</span>
                                        </label>
                                    </li>

                                    <li>
                                        <label>
                                            <input class="checkbox-filter"
                                                value="internal_storage LIKE '512GB' OR internal_storage LIKE '1T'"
                                                type="checkbox">
                                            <span class="checkbox-list">Trên 512GB</span>
                                        </label>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- /.sidenav-section -->
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb10 alignright">
                            <form>
                                <div class="select-option form-group">
                                    <select name="select" id="select" class="form-control" placeholder="Sắp xếp theo">
                                        <option value="" default>Sắp xếp theo</option>

                                        <option value="ORDER BY discounted_price ASC">Giá Thấp</option>
                                        <option value="ORDER BY discounted_price DESC">Giá Cao</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <section id="product">
                        <div class="row">

                            <!-- product -->
                            <?php
                            if (isset($dssp) && $dssp) {


                                while ($row = mysqli_fetch_array($dssp)) {
                                    ?>
                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 mb30 ">
                                        <a
                                            href="<?php echo _WEB_ROOT_ ?>/Product/details/<?php echo $row['product_name'] . '?ProductColor_id=' . $row['id'] ?>">
                                            <div class="product-block product-ac">
                                                <div class="product-img"><img
                                                        src="<?php echo _WEB_ROOT_ . '/public/asset/images/product1/' . $row['image'] ?>"
                                                        alt=""></div>
                                                <div class="product-content">
                                                    <h5><a href="#" class="product-title"><?php echo $row['product_name'] ?>
                                                            (<?php echo $row['internal_storage'] ?>,
                                                            <?php echo $row['color'] ?>)</a></h5>
                                                    <div class="product-meta"><a href="#"
                                                            class="product-price"><?php echo number_format($row['discounted_price'], 0, ',', '.'); ?>đ</a>
                                                        <a href="#"
                                                            class="discounted-price"><?php echo number_format($row['original_price'], 0, ',', '.') ?>đ</a>
                                                        <br>
                                                        <!-- <span class="offer-price">20%off</span> -->
                                                    </div>
                                                    <div class="shopping-btn">
                                                        <a href="" class="product-btn btn-like" data-value="<?php echo $row['id']?>"><i class="fa fa-heart"></i></a>
                                                        <a href="" class="product-btn btn-cart" data-value="<?php echo $row['id']?>"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php }
                            } ?>
                            <!-- /.product -->
                            <!-- product -->





                            <div id="toast"></div>

                        </div>
                        <div class="row">
                            <!-- pagination start -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <div class="pagination-container">

                                    <ul class="pagination1" id="pagination1">
                                        <li><a href="#"><span id="previous" onclick="previous1(this)" data-page="1"
                                                    aria-label="previous"><i class="fa fa-angle-left"
                                                        style="font-size: 16px;"></i></a>
                                            </span>
                                        </li>
                                        <li><a href="#"><span page="1" class="active pagination-item">1</span></a> </li>
                                        <?php for ($i = 2; $i <= $pagenumber; $i++) {

                                            ?>
                                            <li><a href="#"><span href="#" class="pagination-item"
                                                        page=" <?php echo $i ?>"><?php echo $i ?></span></a>
                                            </li>

                                        <?php } ?>
                                        <li><a href="#" onclick="next(this)"> <span id="next"><i
                                                        class="fa fa-angle-right" style="font-size: 16px;"></i></a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                            <!-- pagination close -->
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- /.product-list -->
    <!-- footer -->

    <!-- /.footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/filter.js"></script>
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/toast.js"></script>
    <script>
$pagecr = <?php echo $pagecurrent ?> + 1;

function previous1(button) {
    $page = <?php echo $pagenumber ?>;
    if ($pagecr == 1) {
        $pagecr = $pagecr;
     
    } else {
        $pagecr = $pagecr - 1;
    }
   
    $.ajax({
        method: "post",
        url: '<?php echo _WEB_ROOT_ ?>/Product/phantrang/' + $pagecr,
        data: { 'request': mainsql }
    })
        .done(function (data) {
            // history.pushState(null, '', this.url);

            $('#product').html(data);
        })
        .fail(function (data) { });
}
function next(button) {
    $pagenumber = <?php echo $pagenumber ?>;
    if ($pagecr == $pagenumber) {
        $pagecr = $pagecr;
    } else {
        $pagecr += 1;
    }
    console.log("page gửi đến ajax"+ $pagecr);
    $.ajax({
        method: "post",
        url: '<?php echo _WEB_ROOT_ ?>/Product/phantrang/' + $pagecr,
        data: { 'request': mainsql }
    })
        .done(function (data) {
            // history.pushState(null, '', this.url);

            $('#product').html(data);
        })
        .fail(function (data) { });
}

        function ajaxfilter() {
            let sql = "";
            if (sqlhdh) {
                sql += sqlhdh;
            }
            if (sqlbrand) {
                sql += sqlbrand;
            }
            if (sqlgiaban) {
                sql += sqlgiaban;
            }
            if (sqlmanhinh) {
                sql += sqlmanhinh;
            }
            if (sqlbonhotrong) {
                sql += sqlbonhotrong;
            }

            console.log(sql);
            let condition = sql.split('?');
            let subcondition = condition.map(function (condition) {
                return condition.split(";");
            });
            let lastsql = "";
            for (let i = 1; i < subcondition.length; i++) {
                let ss = xulyarr(subcondition[i]);
                if (ss) {
                    lastsql += " AND ( " + ss + " )";
                }

            }
            mainsql = lastsql + " " + order;

            console.log(subcondition);
            console.log("last: " + lastsql);
            const paginationItems = document.querySelectorAll('.pagination-item');
            if (paginationItems[0]) {
                paginationItems[0].click();
            } else {

                $.ajax({
                    method: "post",
                    url: '<?php echo _WEB_ROOT_ ?>/Product/phantrang/1',
                    data: { 'request': mainsql }
                })
                    .done(function (data) {
                        // history.pushState(null, '', this.url);
                        console.log(data);
                        $('#product').html(data);
                    })
                    .fail(function (data) { });
            }
            // paginationItems[0].click();
        }
        $(document).on('click', '.pagination-item', function () {
            var page = $(this).attr('page');
            page = page.trim();
            $.ajax({
                method: "post",
                url: '<?php echo _WEB_ROOT_ ?>/Product/phantrang/' + page,
                data: { 'request': mainsql }
            })
                .done(function (data) {
                    // history.pushState(null, '', this.url);

                    $('#product').html(data);
                })
                .fail(function (data) { });

        });




        function checkissetbox() {
            if (<?php echo $checkbox; ?> == -1) {
                return;
            }
            const checkboxs = document.querySelectorAll("#brand_id .checkbox-filter");
            checkboxs.forEach(item => {
                console.log(item.value);
                if (item.value == <?php echo $checkbox; ?>) {
                    item.click();
                }
            });
        }
        checkissetbox();


    </script>
    <!-- AJAX thêm sản phẩm vào danh sách yêu thích -->
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
<script>
    $('.product-btn.btn-cart').click(function(event) {
        event.preventDefault();  // Ngăn không cho hành động mặc định (chuyển trang, v.v.)

        // Lấy giá trị từ nút bấm
        var action = $(this).val();  // Nếu nút có giá trị, bạn có thể lấy nó
        var detailproduct_id = $(this).data('value');  // Lấy giá trị từ data-value của nút bấm
        var quantity = 1;  // Mặc định quantity là 1
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

</body>


<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:40:53 GMT -->

</html>