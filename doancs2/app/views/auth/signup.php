<!DOCTYPE html>
<html lang="en">

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
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/css/font-awesome.min.css" rel="stylesheet">
    <!-- Toast CSS -->
    <link rel="stylesheet"  href="<?php echo _WEB_ROOT_ ?>/public/asset/css/toast.css?v=1.4">
</head>

<body>
   
    <div class="content">
        <div class="container">
            <div class="box sing-form">
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12 ">
                        <!-- form -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb20">
                                    <h3 class="mb10">Tạo tài khoản</h3>
                                    <p>Vui lòng điền đầy đủ các thông tin bên dưới</p>
                                </div>
                                <form id="signup-form" action="" method="POST">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="username">Tên đăng nhập</label>
                                            <input id="username" name="username" type="text" class="form-control" placeholder="TÊN ĐĂNG NHẬP" required>
                                        </div>
                                    </div>    
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="name">Họ và tên</label>
                                            <input id="name" name="name" type="text" class="form-control" placeholder="HỌ VÀ TÊN" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="phone">Điện thoại</label>
                                            <input id="phone" name="phone" type="tel" class="form-control" placeholder="ĐIỆN THOẠI" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" name="email" type="email" class="form-control" placeholder="EMAIL" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="address">Địa chỉ</label>
                                            <input id="address" name="address" type="text" class="form-control" placeholder="ĐỊA CHỈ" required>
                                        </div>
                                    </div>    
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="password">Mật khẩu</label>
                                            <input id="password" name="password" type="password" class="form-control" placeholder="MẬT KHẨU" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">    
                                        <div class="form-group">
                                            <label for="confirm-password">Xác nhận mật khẩu</label>
                                            <input id="confirm-password" name="confirm_password" type="password" class="form-control"
                                                placeholder="XÁC NHẬN MẬT KHẨU" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="btn btn-primary btn-block mb10">Đăng Ký</button>
                                        <div>
                                            <p>Bạn đã có tài khoản? <a href="<?php echo _WEB_ROOT_ ?>/auth/login">Đăng Nhập</a></p>
                                        </div>
                                    </div>
                                     <!-- Thong bao loi -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div id="toast"></div>
                                    </div>
                                </form>
                                
                            </div>
                            <!-- /.form -->
                        </div>
                    </div>
                    <!-- features -->
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                        <div class="box-body">
                            <div class="feature-left">
                                <div class="feature-icon">
                                    <img src="<?php echo _WEB_ROOT_ . '/public/asset/images/feature_icon_1.png'; ?>" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Mức độ uy tín!</h4>
                                    <p>Được đánh giá an toàn, tin cậy hàng đầu Việt Nam với nhiều chính sách hỗ trợ chăm
                                        sóc khách hàng.</p>
                                </div>
                            </div>
                            <div class="feature-left">
                                <div class="feature-icon">
                                    <img src="<?php echo _WEB_ROOT_ . '/public/asset/images/feature_icon_2.png'; ?>" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Thanh toán tức thì!</h4>
                                    <p>Thanh toán mọi nơi mọi lúc, giao dịch nhanh gọn, bảo đảm, an toàn, với liên kết
                                        90% ngân hàng, ví tiền, VISA trong toàn quốc!
                                    </p>
                                </div>
                            </div>
                            <div class="feature-left">
                                <div class="feature-icon">
                                    <img src="<?php echo _WEB_ROOT_ . '/public/asset/images/feature_icon_3.png'; ?>" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Ưu đãi hấp dẫn!</h4>
                                    <p>Với mong muốn làm hài lòng khách hàng, Mobistore luôn mang đến những ưu đãi cực
                                        kỳ tốt với chất lượng cao
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.features -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.sign-up form -->
    <!-- footer -->
</body>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/jquery.min.js" type="text/javascript"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/toast.js"></script>
<script>
    $('#signup-form').submit(function (event) {
    event.preventDefault(); // Ngăn form gửi đi theo cách thông thường

    // Lấy giá trị từ các ô nhập
    var username = $('#username').val().trim();
    var fullname = $('#name').val().trim();
    var phone = $('#phone').val().trim();
    var email = $('#email').val().trim();
    var password = $('#password').val();
    var confirmPassword = $('#confirm-password').val();
    var address = $('#address').val().trim();


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

    // Kiểm tra độ dài mật khẩu
    // if (password.length < 8) {
    //     toast({
    //         title: "Thất bại!",
    //         message: "Mật khẩu phải có ít nhất 8 ký tự!",
    //         type: "error",
    //         duration: 5000
    //     });
    //     return;
    // }

    // Kiểm tra mật khẩu khớp
    if (password !== confirmPassword) {
        toast({
            title: "Thất bại!",
            message: "Mật khẩu và xác nhận mật khẩu không khớp!",
            type: "error",
            duration: 5000
        });
        return;
    }

    // Gửi yêu cầu đăng ký qua AJAX
    $.ajax({
        url: '<?php echo _WEB_ROOT_; ?>/Auth/signup',
        type: 'POST',
        data: { username, fullname, phone, email, password, address },
        dataType: 'json',
    })
        .done(function (response) {
            if (response.success) {
                toast({
                    title: "Thành công!",
                    message: "Đăng ký tài khoản thành công!. Bạn sẽ được chuyển hướng đến trang đăng nhập sau 5 giây.",
                    type: "success",
                    duration: 5000
                });
                // Chờ 5 giây (5000ms) trước khi chuyển đến trang đăng nhập
                setTimeout(function() {
                    window.location.href = "<?php echo _WEB_ROOT_; ?>/auth/login"; // Chuyển tới trang đăng nhập
                }, 5000); 
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
</html>