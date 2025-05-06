<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/login-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:41:05 GMT -->

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
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/css/style.css?v=1.3" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/fonts/fontawesome-free-5.15.4-web/css/all.min.css"> 
     <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/css/font-awesome.min.css" rel="stylesheet">
    <!-- Toast CSS -->
    <link rel="stylesheet"  href="<?php echo _WEB_ROOT_ ?>/public/asset/css/toast.css?v=1.8">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .button-container {
            display: flex;
            justify-content: center; /* Căn giữa theo chiều ngang */
            align-items: center; /* Căn giữa theo chiều dọc (nếu cần) */
            margin-top: 10px; /* Khoảng cách phía trên */
        }
        .btn {
            font-size: 12px; /* Giảm kích cỡ chữ */
            padding: 6px 12px; /* Điều chỉnh kích thước nút */
            border-radius: 4px; /* Làm tròn góc của nút */
            margin: 5px; /* Khoảng cách giữa các nút */
        }

        /* Đảm bảo các nút vẫn hiển thị phù hợp */
        #edit-button, #save-button, #cancel-button {
            font-size: 14px; /* Kích cỡ chữ mặc định */
            padding: 5px 10px; /* Điều chỉnh lại kích thước nút */
            white-space: normal;  /* Đảm bảo văn bản không bị cắt hay xuống dòng ngoài ý muốn */
            display: inline-block;  /* Đảm bảo chúng vẫn nằm cùng một dòng */
            word-wrap: break-word;  /* Cho phép tự động ngắt từ nếu quá dài */
        }
        

        /* Mặc định: các ô nhập liệu không có khung */
        .edit-input {
            /* Thay đổi kích thước font chữ */
            display: none;
            border: none;
            background-color: transparent;
            width: 100%; /* Đảm bảo ô nhập liệu chiếm hết chiều rộng của phần tử cha */
            padding: 10px; /* Tạo khoảng cách bên trong ô */
            font-size: 18px; /* Thay đổi kích thước font chữ */
            border-radius: 5px; /* Làm mềm các góc của ô nhập liệu */
            border: 1px solid #ccc; /* Đặt màu viền cho ô nhập liệu */
            /* font-family: 'Roboto', sans-serif; */
            color: #000; /* Màu chữ mặc định */
            font-weight: bold;
        }

        /* Khi ô nhập liệu được focus (chọn), hiển thị khung */
        .edit-input:focus {
            border: 2px solid #007bff; /* Màu khung khi ô nhập liệu được chọn */
            background-color: #f1f1f1; /* Màu nền nhẹ khi nhập */
            outline: none; /* Loại bỏ viền mặc định */
        }
        

        /* Khi người dùng bắt đầu nhập dữ liệu */
        .edit-input:not(:focus) {
            border: none;
        }

    </style>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="box">
                <div class="row-account">
                    <div class="left-container">
                        <div class="user-infor">
                            <img src="<?php echo _WEB_ROOT_ ?>/public/asset/images/user-img.png"  alt="">
                            <span><?php echo $_COOKIE['user_name']?></span>
                        </div>
                        <div class="side-bar-content">
                            <ul>
                                <a href="<?php echo _WEB_ROOT_ ?>/user">
                                    <li class="slide-bar"><i class="fa fa-edit"></i><span>Thông tin tài khoản</span>
                                    </li>
                                </a>
                                <a href="<?php echo _WEB_ROOT_ ?>/order">
                                    <li class="slide-bar active"><i class="fas fa-money-check"></i><span>Quản lý đơn
                                            hàng</span></li>
                                </a>
                                <!-- <a href="address-deliver.html">
                                    <li class="slide-bar"><i class="fas fa-map-marker-alt"></i><span> Địa chỉ nhận
                                            hàng</span></li>
                                </a> -->
                                <a href="<?php echo _WEB_ROOT_ ?>/user/changePassword">
                                    <li class="slide-bar"><i class="fas fa-lock"></i><span> Đổi mật khẩu</span>
                                    </li>
                                </a>
                                <a href="<?php echo _WEB_ROOT_ ?>/user/logout"><li class="slide-bar"><i class="fas fa-sign-out-alt"></i><span> Đăng xuất</span></li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="right-container">
                        <h3 class="title-content">Đơn hàng đã đặt/ Chi tiết đơn hàng</h3>
                        <?php $row = mysqli_fetch_assoc($orderDetail); ?>
                        <div class="receipt-infor-details">
                            <div class="title-receipt">
                                <div class="left-content content">
                                    <h4>ĐƠN HÀNG</h4>
                                    <p class="receipt-id">Mã đơn hàng: <span style="font-weight: bold"><?php echo $row['order_id']?></span></p>
                                    <p class="receipt-time">Đặt hàng: <span style="font-weight: bold"><?php echo $row['created_at']?></span></p>
                                    <?php 
                                        if ($row['expected_delivery_date']) {
                                    ?>
                                            <p class="recipt-time">Ngày nhận hàng(dự kiến): <span style="font-weight: bold; color:red"><?php echo $row['expected_delivery_date']?></span></p>
                                    <?php } ?>
                                    <p class="receipt-status">Trạng thái thanh toán: <span style="font-weight: bold; color:red"><?php echo $row['payment_status']?></span></p>

                                </div>
                                <div id="toast"></div>
                                <p></p>
                                <div class="right-content content">
                                    <h4>THÔNG TIN NHẬN HÀNG</h4>
                                        <!-- Họ và tên -->
                                        <p>Họ và tên: <strong id="receiver-name"><?php echo $row['receiver_name']?></strong></p>
                                        <input type="text" id="edit-receiver-name" class="edit-input" value="<?php echo $row['receiver_name']?>" style="display:none;  font-size: 16px;">

                                        <!-- Số điện thoại -->
                                        <p>Số điện thoại: <strong id="receiver-phone"><?php echo $row['receiver_phone']?></strong></p>
                                        <input type="text" id="edit-receiver-phone" class="edit-input" value="<?php echo $row['receiver_phone']?>" style="display:none;  font-size: 16px;">

                                        <!-- Địa chỉ nhận hàng -->
                                        <p class="address">Địa chỉ nhận hàng:
                                            <?php 
                                                if ($row['delivery_method'] == 'Nhận hàng tại cửa hàng') {
                                            ?>
                                            <strong id="shipping-address">
                                                <?php        
                                                    echo "Nhận hàng tại cửa hàng";
                                                ?>
                                            </strong>
                                            <input type="text" id="edit-shipping-address" class="edit-input" value="Nhận hàng tại cửa hàng"  style="display:none;  font-size: 16px;">        
                                                <?php
                                                    } else {
                                                ?>
                                            <strong id="shipping-address">
                                                <?php        
                                                        echo $row['shipping_address'];
                                                    } 
                                                ?> 
                                            </strong> 
                                            <input type="text" id="edit-shipping-address" class="edit-input" value="<?php echo $row['shipping_address']?>" style="display:none;  font-size: 16px;">
                                        </p>
                                        <!-- Nút chỉnh sửa và lưu -->
                                        <div class="button-container">
                                            <button id="edit-button" class="btn btn-primary btn-sm">Chỉnh sửa</button>
                                            <button id="save-button" class="btn btn-success btn-sm" style="display:none;">Lưu thay đổi</button>
                                            <button id="cancel-button" class="btn btn-secondary btn-sm" style="display:none;">Huỷ</button>
                                        </div>    

                                </div>
                            </div>
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th scope="col">Đơn giá</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        while ($row1 = mysqli_fetch_assoc($order_item)) {
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="product-title">
                                                    <a href="<?php echo _WEB_ROOT_?>/Product/details/<?php echo $row1['product_name'].'?ProductColor_id='.$row1['id'] ?>">
                                                        <img src="<?php echo _WEB_ROOT_ . '/public/asset/images/product1/' . $row1['image']; ?>" alt=""> 
                                                    </a>
                                                    <a href="<?php echo _WEB_ROOT_?>/Product/details/<?php echo $row1['product_name'].'?ProductColor_id='.$row1['id'] ?>"> 
                                                        <div>
                                                            <p><?php 
                                                                echo $row1['product_name'].' '.$row1['internal_storage'];
                                                            ?></p>
                                                            <p>Màu sắc: <?php echo $row1['color'] ?></p>
                                                        </div>
                                                    </a>  
                                            </div>
                                        </td>
                                        <td><div class="item-center"><span style="font-weight: bold"><?php echo number_format($row1['unit_price'], 0, ',', '.') . 'đ'; ?></span></div></td>
                                        <td><div class="item-center"><span style="font-weight: bold"><?php echo $row1['quantity'] ?></span></div></td>
                                        <td><div class="item-center"><span style="font-weight: bold; color: red"><?php echo number_format($row1['total_price'], 0, ',', '.') . 'đ'; ?></span></div></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td scope="row"></td>
                                        <td></td>
                                        <td scope="row">
                                            <div>
                                                <p><strong>Tổng tiền:</strong></p>
                                                <p><strong>Phí vận chuyển:</strong></p>
                                                <p><strong>Giảm giá:</strong></p>
                                                <p><strong>Tổng thanh toán:</strong></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <p style="color: red; font-weight: bold"><?php echo number_format($row['total_before_shipping_fee'], 0, ',', '.') . 'đ'; ?></p>
                                                <p style="color: red; font-weight: bold"><?php echo number_format($row['shipping_fee'], 0, ',', '.') . 'đ'; ?></p>
                                                <p style="color: red; font-weight: bold"><?php echo number_format($row['discount_value'], 0, ',', '.') . 'đ'; ?></p>
                                                <p style="color: red; font-weight: bold"><?php echo number_format($row['total_payment'], 0, ',', '.') . 'đ'; ?></p>
                                            </div>
                                        </td>
                                    </tr>

                                </tfoot>
                            </table>
                            <a href="<?php echo _WEB_ROOT_ ?>/order" class="redirect-to-receipt text-blue"><i class="fas fa-long-arrow-alt-left"></i> Danh sách đơn hàng</a>
                        </div>
                    </div>
                    <!-- /.features -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.login-form -->
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
    <script>
        // Khi người dùng nhấn chỉnh sửa
        document.getElementById('edit-button').addEventListener('click', function() {
            // Kiểm tra trạng thái của đơn hàng
            var orderStatus = '<?php echo $row['status']; ?>';  // Lấy giá trị trạng thái đơn hàng từ PHP

            // Kiểm tra nếu trạng thái là 'Đang được giao' hoặc 'Đã huỷ'
            if (orderStatus === 'Đang được giao' || orderStatus === 'Đã giao' ||orderStatus === 'Đã huỷ') {
                toast({
                    title: "Lỗi chỉnh sửa",
                    message: "Không thể chỉnh sửa thông tin vì đơn hàng đang được giao hoặc đã bị huỷ.",
                    type: "error",
                    duration: 5000
                });
                return;  // Dừng lại nếu không thể chỉnh sửa
            }

          
            // Ẩn các ô thông tin hiện tại
            document.getElementById('receiver-name').style.display = 'none';
            document.getElementById('receiver-phone').style.display = 'none';
            document.getElementById('shipping-address').style.display = 'none';

            // Hiển thị các ô nhập liệu
            document.getElementById('edit-receiver-name').style.display = 'inline-block';
            document.getElementById('edit-receiver-phone').style.display = 'inline-block';

           // Kiểm tra nếu không có ngày nhận hàng dự kiến
            var expectedDeliveryElement = document.querySelector('.recipt-time span');
            if (!expectedDeliveryElement || expectedDeliveryElement.textContent.trim() === '') {
                // Chỉ block trường địa chỉ nhận hàng (set readonly để người dùng không thể chỉnh sửa nhưng vẫn xem được dữ liệu)
                document.getElementById('edit-shipping-address').setAttribute('readonly', 'readonly');
                document.getElementById('edit-shipping-address').style.display = 'block'; // Hiển thị trường nhập liệu mặc dù không cho chỉnh sửa
            } else {
                // Nếu có ngày nhận hàng, hiển thị trường nhập liệu
                document.getElementById('edit-shipping-address').style.display = 'inline-block';
            }

            // Ẩn nút "Chỉnh sửa" và hiển thị nút "Lưu thay đổi" và "Thoát"
            document.getElementById('edit-button').style.display = 'none';
            document.getElementById('save-button').style.display = 'inline-block';
            document.getElementById('cancel-button').style.display = 'inline-block';
        });

        // Khi người dùng nhấn nút "Lưu thay đổi"
        document.getElementById('save-button').addEventListener('click', function() {
            var receiverName = document.getElementById('edit-receiver-name').value.trim();
            var receiverPhone = document.getElementById('edit-receiver-phone').value.trim();
            var shippingAddress = document.getElementById('edit-shipping-address').value.trim();

            // Kiểm tra dữ liệu trống
            if (receiverName === '' || receiverPhone === '' || shippingAddress === '') {
                toast({
                    title: "Lỗi nhập liệu",
                    message: "Vui lòng điền đầy đủ thông tin.",
                    type: "error",
                    duration: 5000
                });
                return;  // Dừng lại nếu có trường trống
            }

            // Kiểm tra số điện thoại (chỉ chứa số)
            var phoneRegex = /^[0-9]{10,11}$/; // Điều kiện số điện thoại 10-11 chữ số
            if (!phoneRegex.test(receiverPhone)) {
                toast({
                    title: "Lỗi số điện thoại",
                    message: "Số điện thoại không hợp lệ. Vui lòng nhập lại.",
                    type: "error",
                    duration: 5000
                });
                return;  // Dừng lại nếu số điện thoại không hợp lệ
            }

            // Cập nhật thông tin người nhận hàng
            document.getElementById('receiver-name').innerText = receiverName;
            document.getElementById('receiver-phone').innerText = receiverPhone;
            document.getElementById('shipping-address').innerText = shippingAddress;

            // Ẩn các ô nhập liệu và hiển thị lại các ô thông tin
            document.getElementById('edit-receiver-name').style.display = 'none';
            document.getElementById('edit-receiver-phone').style.display = 'none';
            document.getElementById('edit-shipping-address').style.display = 'none';

            document.getElementById('receiver-name').style.display = 'inline-block';
            document.getElementById('receiver-phone').style.display = 'inline-block';
            document.getElementById('shipping-address').style.display = 'inline-block';

            // Ẩn nút "Lưu thay đổi" và "Thoát", hiển thị lại nút "Chỉnh sửa"
            document.getElementById('save-button').style.display = 'none';
            document.getElementById('cancel-button').style.display = 'none';
            document.getElementById('edit-button').style.display = 'inline-block';

            // Gửi thông tin mới lên server bằng AJAX
            $.ajax({
                url: '<?php echo _WEB_ROOT_; ?>/order/UpdateReceiverInfo/?order_id=<?php echo $row['order_id'] ?>',
                type: 'POST',
                data: {
                    receiver_name: receiverName,
                    receiver_phone: receiverPhone,
                    shipping_address: shippingAddress,
                },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        toast({
                            title: "Thành công",
                            message: "Thông tin người nhận hàng đã được cập nhật.",
                            type: "success",
                            duration: 5000
                        });
                    } else {
                        toast({
                            title: "Lỗi hệ thống",
                            message: "Có lỗi xảy ra khi cập nhật thông tin người nhận hàng. Vui lòng thử lại.",
                            type: "error",
                            duration: 5000
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Status:", status);
                    console.error("Error:", error);
                    console.error("Response:", xhr.responseText);
                    toast({
                        title: "Lỗi hệ thống",
                        message: "Có lỗi xảy ra khi xử lý yêu cầu. Vui lòng thử lại.",
                        type: "error",
                        duration: 5000
                    });
                }
            });
        });

        // Khi người dùng nhấn nút "Thoát"
        document.getElementById('cancel-button').addEventListener('click', function() {
            // Ẩn các ô nhập liệu và hiển thị lại các ô thông tin
            document.getElementById('edit-receiver-name').style.display = 'none';
            document.getElementById('edit-receiver-phone').style.display = 'none';
            document.getElementById('edit-shipping-address').style.display = 'none';

            document.getElementById('receiver-name').style.display = 'inline-block';
            document.getElementById('receiver-phone').style.display = 'inline-block';
            document.getElementById('shipping-address').style.display = 'inline-block';

            // Ẩn nút "Lưu thay đổi" và "Thoát", hiển thị lại nút "Chỉnh sửa"
            document.getElementById('save-button').style.display = 'none';
            document.getElementById('cancel-button').style.display = 'none';
            document.getElementById('edit-button').style.display = 'inline-block';

            // Khôi phục lại các thuộc tính CSS cần thiết
            document.getElementById('receiver-name').style.whiteSpace = 'normal';
            document.getElementById('receiver-phone').style.whiteSpace = 'normal';
            document.getElementById('shipping-address').style.whiteSpace = 'normal';
        });

    </script>
</body>


<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/login-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:41:06 GMT -->

</html>