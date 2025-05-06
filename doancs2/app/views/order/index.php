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
    <link rel="stylesheet"  href="<?php echo _WEB_ROOT_ ?>/public/asset/css/toast.css?v=1.7">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .btn {
            font-size: 15px;  /* Kích thước chữ */
            width: 80px;
            height: 25px;
            padding: 0px 0px;  /* Khoảng cách giữa chữ và viền nút */
            border-radius: 5px;  /* Bo góc nút */
            cursor: pointer;  /* Thêm con trỏ chuột kiểu pointer khi hover */
            border: none;  /* Xóa đường viền của nút */
            background-color:rgb(248, 223, 4);
            color: white;  /* Màu chữ */
            transition: background-color 0.3s;  /* Hiệu ứng chuyển màu nền */
            text-transform: none;
        }

        /* Hiệu ứng khi hover */
        .btn:hover {
            background-color:rgb(12, 190, 218);  /* Màu nền khi hover */
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
                        <div id="toast"></div>
                    </div>
                    <div class="right-container">
                        <h3 class="title-content">Đơn hàng đã đặt</h3>
                        <div class="receipt-infor" style="min-height: 300px; overflow-y: auto;">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                  <tr>
                                    <th scope="col">Mã đơn hàng</th>
                                    <th scope="col">Ngày đặt hàng</th>
                                    <th scope="col">Tổng giá trị đơn hàng</th>
                                    <th scope="col">Tình trạng đơn hàng</th>
                                    <th scope="col">Chi tiết đơn hàng</th>
                                    <th score="col">Huỷ đơn hàng</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php while($row = mysqli_fetch_array($order)) { ?>  
                                  <tr>
                                    <th scope="row"><?php echo $row['order_id']?></th>
                                    <td><?php echo $row['created_at'] ?></td>
                                    <td><?php echo number_format($row['total_payment'], 0, ',', '.') . 'đ'; ?></td>
                                    <td>
                                        <span class="order-status order-status-<?php echo $row['order_id']; ?>" data-order-id="<?php echo $row['order_id']; ?>" style="color: red; font-weight: bold;"><?php echo $row['status']; ?></span>
                                    </td>
                                    <td><a href="<?php echo _WEB_ROOT_ ?>/order/getOrderDetail/?order_id=<?php echo $row['order_id']; ?>">Xem chi tiết</a></td>
                                    <td><button id="cancel-order-<?php echo $row['order_id']; ?>" data-value="<?php echo $row['order_id']; ?>" class="btn" style="color: black">Huỷ</button></td>
                                  </tr>
                                  <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.features -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.login-form -->
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
    $(document).on('click', 'button[data-value]', function() {
        var orderId = $(this).data('value');  // Lấy order_id từ thuộc tính data-value
        var orderStatus = $('.order-status-' + orderId).text().trim();  // Lấy trạng thái đơn hàng từ phần tử có id là order-status-[orderId]
        console.log(orderStatus);
        // Kiểm tra trạng thái đơn hàng
        if (orderStatus === 'Chưa xác nhận') {
            // Hiển thị hộp thoại xác nhận huỷ đơn hàng
            if (confirm("Bạn có chắc muốn huỷ đơn hàng này?")) {
                // Nếu người dùng nhấn OK, thực hiện huỷ đơn hàng
                $.ajax({
                    url: '<?php echo _WEB_ROOT_; ?>/order/cancelOrder',  // URL đến hàm huỷ đơn hàng
                    type: 'POST',
                    data: {
                        order_id: orderId  // Gửi order_id để huỷ đơn hàng
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            toast({
                                title: "Thành công",
                                message: "Đơn hàng đã được huỷ.",
                                type: "success",
                                duration: 5000
                            });

                            // Cập nhật trạng thái đơn hàng thành "Đã huỷ"
                            $('.order-status-' + orderId).text('Đã huỷ').css({
                                'color': 'red',
                                'font-weight': 'bold'
                            });

                            // Vô hiệu hoá nút Huỷ và thay đổi nội dung nút
                            $('[data-value="' + orderId + '"]').prop('disabled', true);  // Vô hiệu hoá nút Huỷ
                            $('[data-value="' + orderId + '"]').text('Đã huỷ').css({
                                                                                    'background-color': 'rgb(244, 4, 4)',  // Màu nền
                                                                                    'color': '#FFFFFF',  // Màu chữ
                                                                                    'border': '1px solid darkred' // Đường viền màu đỏ đậm
                                                                                });   // Thay đổi nội dung nút
                        } else {
                            toast({
                                title: "Lỗi hệ thống",
                                message: "Không thể huỷ đơn hàng. Vui lòng thử lại.",
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
                            message: "Có lỗi xảy ra khi huỷ đơn hàng. Vui lòng thử lại.",
                            type: "error",
                            duration: 5000
                        });
                    }
                });
            } else {
                // Nếu người dùng nhấn Cancel, không thực hiện huỷ
                console.log("Người dùng đã huỷ thao tác.");
            }
        } else {
            // Nếu trạng thái không phải 'Chưa xác nhận', vô hiệu hoá nút huỷ
            toast({
                title: "Lỗi",
                message: "Chỉ đơn hàng có trạng thái 'Chưa xác nhận' mới có thể huỷ.",
                type: "error",
                duration: 5000
            });
        }
    });

    </script>
    <script>
       $(document).ready(function() {
        // Duyệt qua tất cả các phần tử có class 'order-status' và kiểm tra trạng thái của mỗi đơn hàng
        $('.order-status').each(function() {
            var orderId = $(this).data('order-id');  // Lấy order_id từ data-order-id
            var orderStatus = $(this).text().trim(); // Lấy trạng thái của đơn hàng
            console.log(orderStatus);
            if (orderStatus === 'Đã huỷ') {
                $('#cancel-order-' + orderId).prop('disabled', true);  // Vô hiệu hoá nút huỷ
                $('#cancel-order-' + orderId).text('Đã huỷ').css({
                                                                    'background-color': 'rgb(244, 4, 4)',  // Màu nền
                                                                    'color': '#FFFFFF',  // Màu chữ
                                                                    'border': '1px solid darkred' // Đường viền màu đỏ đậm
                                                                });  // Chỉnh màu nền thành màu đỏ;  // Thay đổi nội dung nút
            }
        });
    });
    </script>
</body>


<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/login-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:41:06 GMT -->

</html>