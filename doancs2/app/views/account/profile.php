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
    <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/nav.css?v=21.1">
    <!-- Bootstrap -->
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/boostrap/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/css/style.css?v=1.7" rel="stylesheet">
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
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="box">
                <div class="row-account">
                    <div class="left-container">
                        <div class="user-infor">
                            <img src="<?php echo _WEB_ROOT_ ?>/public/asset/images/user-img.png" alt="">
                            <?php 
                            $row = mysqli_fetch_assoc($user);
                            ?>
                            <span>
                                <?php echo $row['username'] ?>
                            </span>
                        </div>
                        <div class="side-bar-content">
                            <ul>
                                <a href="<?php echo _WEB_ROOT_ ?>/user"><li class="slide-bar active"><i class="fa fa-edit"></i><span>Thông tin tài khoản</span></li></a>
                                <a href="<?php echo _WEB_ROOT_ ?>/order"><li class="slide-bar"><i class="fas fa-money-check"></i><span>Quản lý đơn hàng</span></li></a>
                                <!-- <a href="address-deliver.html"><li class="slide-bar"><i class="fas fa-map-marker-alt"></i><span> Địa chỉ nhận hàng</span></li></a> -->
                                <a href="<?php echo _WEB_ROOT_ ?>/user/changePassword"> <li class="slide-bar"><i class="fas fa-lock"></i><span> Đổi mật khẩu</span></li></a>
                                <a href="<?php echo _WEB_ROOT_ ?>/user/logout"><li class="slide-bar"><i class="fas fa-sign-out-alt"></i><span> Đăng xuất</span></li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="right-container">
                        <h3 class="title-content">Thông tin tài khoản</h3>
                        <div class="account-infor">
                            <form id="userProfile-form" action="" method="POST">
                                <div class="form-control">
                                    <label for="" class="input-label">
                                        Họ & tên
                                    </label>
                                    <input type="text" id="fullname" placeholder="Thêm họ tên" class="input-field" value="<?php echo $row['fullname']; ?>">
                                </div>
                                <div class="form-control">
                                    <label for="" class="input-label">
                                        Email
                                    </label>
                                    <input type="email" id="email" placeholder="Thêm email" class="input-field" value="<?php echo $row['email']; ?>">
                                </div>
                               
                                <div class="form-control">
                                    <label for="" class="input-label">
                                        Số điện thoại
                                    </label>
                                    <input type="phone" id="phone" placeholder="Thêm số điện thoại" class="input-field"  value="<?php echo $row['sdt']; ?>">
                                </div>
                                <div class="form-control">
                                    <label for="delivery-address" class="input-label">
                                        Địa chỉ giao hàng
                                    </label>
                                    <input type="text" id="delivery-address" placeholder="Địa chỉ giao hàng" class="input-field" value="<?php echo $row['delivery_address']; ?>">                                    
                                </div>
                                <div class="form-control">
                                    <small style="display: block; margin-top: 10px; font-size: 12px; color: #d9534f; background-color: #f9f9f9; padding: 10px;  margin-left: 135px; ">
                                        *Địa chỉ giao hàng mặc định chính là địa chỉ của bạn. Bạn có thể thay đổi địa chỉ giao hàng tại đây hoặc khi xác nhận đơn hàng.
                                    </small>
                                </div>    
                                <div class="form-control">
                                    <label for="" class="input-label">
                                        Địa chỉ 
                                    </label>
                                    <input type="text" id="address" placeholder="Địa chỉ" class="input-field"  value="<?php echo $row['diachi']; ?>">
                                </div>
                                <button type="submit" class="btn-update">Cập nhật</button>
                            </form>
                            <div id="toast"></div>
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
    $('#userProfile-form').submit(function (event) {
    event.preventDefault(); // Ngăn form gửi đi theo cách thông thường

    // Lấy giá trị từ các ô nhập 
    var fullname = $('#fullname').val().trim();
    var phone = $('#phone').val().trim();
    var email = $('#email').val().trim();
    var address = $('#address').val().trim();
    var delivery_address = $('#delivery-address').val().trim();
    console.log(fullname, phone, email, address, delivery_address);
    // Kiểm tra dữ liệu nhập vào
    if (fullname == "" ) {
        toast({
            title: "Thất bại!",
            message: "Vui lòng nhập họ và tên của bạn.",
            type: "error",
            duration: 5000
        });
        return;
    }
    else if (email == ""){
        toast({
            title: "Thất bại!",
            message: "Vui lòng nhập email của bạn.",
            type: "error",
            duration: 5000
        });
        return;
    }
    else if (phone == ""){
        toast({
            title: "Thất bại!",
            message: "Vui lòng nhập số điện thoại của bạn.",
            type: "error",
            duration: 5000
        });
        return;
    }
    else if (delivery_address == ""){
        toast({
            title: "Thất bại!",
            message: "Vui lòng nhập địa chỉ giao hàng của bạn.",
            type: "error",
            duration: 5000
        });
        return;
    }
    else if (address == ""){
            toast({
                title: "Thất bại!",
                message: "Vui lòng nhập địa chỉ của bạn.",
                type: "error",
                duration: 5000
            });
            return;
        }
    
    // Kiểm tra định dạng email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        toast({
            title: "Thất bại!",
            message: "Địa chỉ email không hợp lệ!",
            type: "error",
            duration: 5000
        });
        return;
    }

    // Kiểm tra định dạng số điện thoại
    var phoneRegex = /^[0-9]{10,11}$/;
    if (!phoneRegex.test(phone)) {
        toast({
            title: "Thất bại!",
            message: "Số điện thoại không hợp lệ! Vui lòng nhập 10-11 chữ số.",
            type: "error",
            duration: 5000
        });
        return;
    }


    // Gửi yêu cầu đăng ký qua AJAX
    $.ajax({
        url: '<?php echo _WEB_ROOT_; ?>/user/updateProfile',
        type: 'POST',
        data: { fullname, phone, email, address, delivery_address },
        dataType: 'json',
    })
        .done(function (response) {
            if (response.success) {
                toast({
                    title: "Thành công!",
                    message: "Cập nhật thông tin thành công!",
                    type: "success",
                    duration: 5000
                });
            } else {
                toast({
                    title: "Thất bại!",
                    message: response.message || "Đã xảy ra lỗi!",
                    type: "error",
                    duration: 5000
                });
            }
        })
        .fail(function(xhr, status, error) {
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


<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/login-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:41:06 GMT -->

</html>
 