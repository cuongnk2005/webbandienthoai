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
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/css/style.css?v=1.2" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FontAwesome CSS -->
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="<?php echo _WEB_ROOT_ ?>/public/asset/css/toast.css?v=1.8">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /* Khi đăng nhập thất bại, thay đổi viền và nền của input */
        input.invalid {
            border: 2px solid red; /* Đường viền màu đỏ */
            background-color: #f8d7da; /* Màu nền báo lỗi */
        }

        input.invalid + .login-icon i {
            color: red; /* Đổi màu icon */
        }

        .error-message {
            display: none; /* Mặc định ẩn */
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        input.invalid + .login-icon + .eye-icon   + .error-message +{
            display: block; /* Hiển thị thông báo lỗi */
        }


    </style>
</head>

<body>
    <!-- login-form -->

    <div class="content">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12 ">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb20">
                                    <h3 class="mb10">Đăng nhập</h3>
                                </div>
                                <div id="toast"></div>
                                <!-- form -->
                                <form action="<?php echo _WEB_ROOT_ ?>/auth/dangnhap" method="POST">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="email"></label>
                                            <div class="login-input">
                                                <input id="username" name="user" type="text" class="form-control"
                                                    placeholder="Tên đăng nhập" required>
                                                <div class="login-icon"><i class="fa fa-user"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  
                                        <div class="form-group">
                                            <label class="control-label sr-only"></label>
                                            <div class="login-input">
                                                <input id="password" name="password" type="password" class="form-control"
                                                    placeholder="Mật khẩu" required>
                                                <div  class="login-icon"><i class="fa fa-lock"></i></div>
                                                <div id="iconpassword" class="eye-icon"><i class="fa fa-eye"></i></div>
                                            </div>
                                            <span class="error-message" id="password-error" style="font-family: 'Roboto', sans-serif; text-align: center; font-weight: bold; font-size: 14px"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb20 ">
                                        <button class="btn btn-primary btn-block mb10">Đăng nhập</button>
                                        <div style="margin: 0 auto; width: 50%">
                                            <a href="<?php echo _WEB_ROOT_ ?>/auth/signup" style="margin-right: 40px;" class="text-blue">Đăng ký</a>
                                            <a href="forgot-password.html" class="text-blue">Quên mật khẩu </a>
                                        </div>
                                    </div>
                                </form>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                    <h4 class="mb20">Hoặc đăng nhập với</h4>
                                    <div class="social-media">
                                        <a href="#" class="btn-social-rectangle btn-facebook"><i
                                                class="fa fa-facebook"></i><span class="social-text">Facebook</span></a>
                                        <a href="#" class="btn-social-rectangle btn-twitter"><i
                                                class="fa fa-twitter"></i><span class="social-text">Twitter</span> </a>
                                        <a href="#" class="btn-social-rectangle btn-googleplus"><i
                                                class="fa fa-google-plus"></i><span class="social-text">Google
                                                Plus</span></a>
                                    </div>
                                </div>
                                <!-- /.form -->
                            </div>
                        </div>
                    </div>
                    <!-- features -->
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                        <div class="box-body">
                            <div class="feature-left">
                                <div class="feature-icon">
                                    <img src="<?php echo _WEB_ROOT_ ?>/public/asset/images/feature_icon_1.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Mức độ uy tín!</h4>
                                    <p>Được đánh giá an toàn, tin cậy hàng đầu Việt Nam với nhiều chính sách hỗ trợ chăm sóc khách hàng.</p>
                                </div>
                            </div>
                            <div class="feature-left">
                                <div class="feature-icon">
                                    <img src="<?php echo _WEB_ROOT_ ?>/public/asset/images/feature_icon_2.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Thanh toán tức thì!</h4>
                                    <p>Thanh toán mọi nơi mọi lúc, giao dịch nhanh gọn, bảo đảm, an toàn, với liên kết 90% ngân hàng, ví tiền, VISA trong toàn quốc!
                                    </p>
                                </div>
                            </div>
                            <div class="feature-left">
                                <div class="feature-icon">
                                    <img src="<?php echo _WEB_ROOT_ ?>/public/asset/images/feature_icon_3.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h4>Ưu đãi hấp dẫn!</h4>
                                    <p>Với mong muốn làm hài lòng khách hàng, Mobistore luôn mang đến những ưu đãi cực kỳ tốt với chất lượng cao
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
</body>

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
<script>
    const password =document.getElementById('password');
    const iconpassword  =document.getElementById('iconpassword');

    iconpassword.addEventListener('click', function(){
        let type = password.getAttribute('type');
        if(type == 'text'){
            password.setAttribute('type','password');
        }else{
    password.setAttribute('type','text');
        }

    });

    let check = <?php echo $kq ?>;
    console.log('check'+check);
    if(check == false){
        toast({
            title: 'Thông báo',
            message: 'Đăng nhập thất bại. Bạn đã nhập sai tên đăng nhập hoặc mật khẩu.',
            type: 'error',
            duration: 3000
        });
        $('#username').addClass('invalid');
        $('#password').addClass('invalid');
        $('#password-error').text('*Tên đăng nhập hoặc mật khẩu của bạn không chính xác!').show();

    }

    </script>

<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/login-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:41:06 GMT -->

</html>