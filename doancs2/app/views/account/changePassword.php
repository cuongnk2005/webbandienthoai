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
                                    <li class="slide-bar"><i class="fas fa-money-check"></i><span>Quản lý đơn
                                            hàng</span></li>
                                </a>
                                <!-- <a href="address-deliver.html">
                                    <li class="slide-bar"><i class="fas fa-map-marker-alt"></i><span> Địa chỉ nhận
                                            hàng</span></li>
                                </a> -->
                                <a href="<?php echo _WEB_ROOT_ ?>/user/changePassword">
                                    <li class="slide-bar active"><i class="fas fa-lock"></i><span> Đổi mật khẩu</span>
                                    </li>
                                </a>
                                <a href="<?php echo _WEB_ROOT_ ?>/user/logout"><li class="slide-bar"><i class="fas fa-sign-out-alt"></i><span> Đăng xuất</span></li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="right-container">
                        <h3 class="title-content">Đổi mật khẩu</h3>
                        <div class="reset-password-content">
                            <form action="" id="changePassword-form" method="POST">
                                <div class="form-control">
                                    <label for="" class="input-label">Mật khẩu hiện tại</label>
                                    <input type="password" id="current_password" class="input-field" id="input">
                                </div>
                                <div class="form-control">
                                    <label for="" class="input-label">Mật khẩu mới</label>
                                    <input type="password" id="new_password" class="input-field">
                                </div>
                                <div class="form-control">
                                    <label for="" class="input-label">Xác nhận mật khẩu mới</label>
                                    <input type="password" id="confirm_new_password" class="input-field">
                                </div>
                                <div id="toast"></div>
                                <button type="submit" class="btn-update-password">Đổi mật khẩu</button>
                            </form>
                        </div>
                        
                    </div>
                    <!-- /.features -->
                </div>
            </div>
        </div>
    </div>
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
    $('#changePassword-form').submit(function (event) {
    event.preventDefault(); // Ngăn form gửi đi theo cách thông thường

    // Lấy giá trị từ các ô nhập 
    var current_password = $('#current_password').val();
    var new_password = $('#new_password').val();
    var confirm_new_password = $('#confirm_new_password').val();
    console.log(current_password, new_password, confirm_new_password);
    // Kiểm tra dữ liệu nhập vào
    if (current_password == "") {
        toast({
            title: "Thất bại!",
            message: "Vui lòng nhập mật khẩu hiện tại của bạn!",
            type: "error",
            duration: 5000
        });
        return;
    } else if (new_password == "") {
        toast({
            title: "Thất bại!",
            message: "Vui lòng nhập mật khẩu mới!",
            type: "error",
            duration: 5000
        });
        return;
    } else if (confirm_new_password == "") {
        toast({
            title: "Thất bại!",
            message: "Vui lòng xác nhận mật khẩu mới!",
            type: "error",
            duration: 5000
        });
        return;
    } else if (new_password != confirm_new_password) {
        toast({
            title: "Thất bại!",
            message: "Mật khẩu mới và xác nhận mật khẩu mới không khớp!",
            type: "error",
            duration: 5000
        });
        return;
    }
   
    // Gửi yêu cầu đăng ký qua AJAX
    $.ajax({
        url: '<?php echo _WEB_ROOT_; ?>/user/changePassword',
        type: 'POST',
        data: { current_password, new_password, confirm_new_password },
        dataType: 'json',
    })
        .done(function (response) {
            if (response.success) {
                toast({
                    title: "Thành công!",
                    message: "Thay đổi mật khẩu thành công!",
                    type: "success",
                    duration: 5000
                });
                // Xóa dữ liệu trong các ô nhập
                $('#current_password').val('');
                $('#new_password').val('');
                $('#confirm_new_password').val('');
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