<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:41:03 GMT -->

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
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="<?php echo _WEB_ROOT_ ?>/public/asset/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/jquery-ui.css" type="text/css">
    <!-- Toast CSS -->
    <link rel="stylesheet"  href="<?php echo _WEB_ROOT_ ?>/public/asset/css/toast.css?v=1.3">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .control-label{
            color: red;
        }
    </style>
</head>

<body>
    <!-- checkout -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="box checkout-form">
                        <!-- checkout - form -->
                        <div class="box-head">
                            <h2 class="head-title">Thông tin người nhận hàng</h2>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <form>
                                    <?php $row = mysqli_fetch_assoc($information_customer); ?>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label" for="name">Họ và tên</label>
                                            <input name="name" type="text" class="form-control"
                                                placeholder="Họ và tên" required value="<?php echo $row['fullname'] ?>" style="font-size: 15px; font-family: 'Roboto', sans-serif; color: black; font-weight: 500;">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label">Mã giảm giá</label>
                                            <input name="couponCode" type="text" class="form-control" id="couponCode"
                                                placeholder="Mã khuyến mãi" required value="<?php echo $couponCode?>" style="font-size: 15px; font-family: 'Roboto', sans-serif; color: black; font-weight: 500;" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label" for="email">Email</label>
                                            <input id="email" name="email" type="text" class="form-control"
                                                placeholder="Email address" required value="<?php echo $row['email'] ?>" style="font-size: 15px; font-family: 'Roboto', sans-serif; color: black; font-weight: 500;">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label" for="phone">Số điện thoại</label>
                                            <input id="phone" name="phone" type="text" class="form-control"
                                                placeholder="Phone" required value="<?php echo $row['sdt'] ?>" style="font-size: 15px; font-family: 'Roboto', sans-serif; color: black; font-weight: 500;">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label">Địa chỉ nhận hàng</label>
                                            <input name="deliveryAdrress" type="text" class="form-control"
                                                placeholder="Địa chỉ" required value="<?php echo $row['delivery_address'] ?>" style="font-size: 15px; font-family: 'Roboto', sans-serif; color: black; font-weight: 500;">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label">Phương thức giao hàng</label>
                                            <select class="form-control" id="shippingMethod" onchange="toggleDeliveryOptions()" style="font-size: 15px; font-family: 'Roboto', sans-serif; color: black; font-weight: 500;">
                                                <option>Nhận hàng tại cửa hàng</option>
                                                <option>Giao hàng tận nơi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div id="delivery-options" style="display: none;">
                                            <fieldset>
                                                <label class="control-label">Chọn phương thức vận chuyển</label>
                                                <div class="form-group" style="font-size: 15px; font-family: 'Roboto', sans-serif; color: black; font-weight: 500;">
                                                        <input type="radio" name="delivery-type" value="Vận chuyển nhanh (1-2 ngày)" id="express-shipping" data-value="70000"> Vận chuyển nhanh (1-2 ngày): 70.000đ
                                                </div>
                                                <div class="form-group" style="font-size: 15px; font-family: 'Roboto', sans-serif; color: black; font-weight: 500;">
                                                        <input type="radio" name="delivery-type" value="Vận chuyển tiết kiệm (3-5 ngày)" id="economy-shipping" data-value="40000"> Vận chuyển tiết kiệm (3-5 ngày): 40.000đ
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>    
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label">Phương thức thanh toán</label>
                                            <select class="form-control" id="paymentMethod" onchange="toggleQRImage()" style="font-size: 15px; font-family: 'Roboto', sans-serif; color: black; font-weight: 500;">
                                                <option>Thanh toán khi nhận hàng</option>
                                                <option>Thanh toán qua mã QR</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="qrCodeContainer" style="display: none;">
                                        <div class="form-group" style="text-align: center;">
                                            <label class="control-label" style="font-size: 25px; color: red">Mã QR</label> <br>
                                            <img src=" <?php echo _WEB_ROOT_ . '/public/asset/images/QR thanh toan.jpg'; ?>" alt="QR Code" id="qrCode" style="width: 400px; height: 400px;" > <br> <br>
                                            <span style="color: red; font-family: 'Roboto', sans-serif;">*Vui lòng chuyển khoản đúng tổng số tiền đơn hàng của bạn. Chúng tôi sẽ xác nhận sau khi nhận được.*</span> <br>
                                            <span style="color: red; font-family: 'Roboto', sans-serif;"> Mọi thắc mắc xin liên hệ 0774473875.</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label" for="textarea">Ghi chú</label>
                                            <textarea class="form-control" id="textarea" name="textarea" rows="4"
                                                placeholder="Ghi chú" style="font-size: 15px; font-family: 'Roboto', sans-serif; color: black; font-weight: 500;"></textarea>
                                        </div>
                                       
                                        <!-- <div class="checkbox alignright mt20">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span>Đăng kí tài khoản?</span>
                                            </label>
                                        </div> -->
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                                        <button type="submit" class="btn btn-primary">Xác nhận đặt hàng</button>
                                    </div>
                                </form>
                                <!-- /.checkout-form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product total -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box mb30">
                        <div class="box-head">
                            <h3 class="head-title">Đơn hàng của bạn</h3>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <!-- product total -->

                                <div class="pay-amount ">
                                    <table class="table mb20">
                                        <thead class=""
                                                style="border-bottom: 1px solid #e8ecf0; text-transform: uppercase; ">
                                            <tr>
                                                <th>
                                                    <span style="font-size: 15px; color: black; font-weight: bold;">Sản phẩm</span>
                                                </th>
                                                <th>
                                                    <span style="margin-left: 15px; font-size: 15px; color: black; font-weight: bold;">Giá tiền</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $total = 0; 
                                                while($row2 = mysqli_fetch_array($SelectedCartItems)){
                                            ?>
                                            <tr>
                                                <th>
                                                    <input type="hidden" name="cart_id" value="<?php echo $row2['cart_id'] ?>">
                                                    <span style="font-size: 15px; font-weight: bold; color:rgb(11, 87, 209);"><?php echo $row2['product_name'].' '.$row2['internal_storage'].' X '.$row2['quantity'].' | Màu '.$row2['color'] ?></span>
                                                </th>
                                                <td>
                                                    <span style="font-size: 15px; font-weight: bold; color: red;">
                                                        <?php 
                                                          // Khởi tạo biến tổng nếu chưa có
                                                            $totalPrice = $row2['discounted_price'] * $row2['quantity'];
                                                            echo number_format($totalPrice, 0, ',', '.') . 'đ';  
                                                            $total += $totalPrice;                                                       
                                                        ?>
                                                    </span>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                            <tr>
                                                <th>
                                                    <span style="font-size: 15px; color: black; font-weight: bold;">Tổng số tiền sản phẩm </span>
                                                </th>
                                                <td>
                                                    <span style="font-size: 15px; font-weight: bold; color: red;" id="total-before-shipping">
                                                        <?php  echo number_format($total, 0, ',', '.') . 'đ';  ?>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <span style="font-size: 15px; color: black; font-weight: bold;">Giảm giá</span>
                                                </th>
                                                <td>
                                                    <span style="font-size: 15px; font-weight: bold; color: red;" id="discount-fee">
                                                    <?php  echo number_format($discountValue, 0, ',', '.') . 'đ';  ?>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr id="shipping-fee-row">
                                                <th>
                                                    <span style="font-size: 15px; color: black; font-weight: bold;">Phí vận chuyển</span>
                                                </th>
                                                <td id="shipping-fee-value"><span style="font-size: 15px; font-weight: bold; color: red;" id="shipping-fee">0đ</span></td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <span style="font-size: 20px; color: black; font-weight: bold;">Tổng thanh toán</span>
                                                </th>
                                                <td>
                                                    <span style="font-size: 20px; font-weight: bold; color: red;" id="final-total">
                                                        <?php  
                                                            $total = floatval($total);
                                                            $discountValue = floatval($discountValue);
                                                            $finalTotal = $total - $discountValue;
                                                            echo number_format($finalTotal, 0, ',', '.') . 'đ';  
                                                        ?>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.product total -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="toast"></div>
    <!-- /.footer -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo _WEB_ROOT_ ?>/public/asset/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="<?php echo _WEB_ROOT_ ?>/public/asset/js/sticky-header.js"></script>
    
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/toast.js"></script>
    <script type="text/javascript" src="<?php echo _WEB_ROOT_ ?>/public/asset/js/jquery-ui.js"></script>
</body>


<!-- Mirrored from easetemplate.com/free-website-templates/mobistore/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Nov 2021 09:41:04 GMT -->

</html>
<script>
    function toggleQRImage() {
        var paymentMethod = document.getElementById("paymentMethod").value;
        var qrCodeContainer = document.getElementById("qrCodeContainer");

        // Kiểm tra phương thức thanh toán và hiển thị/hide mã QR
        if (paymentMethod === "Thanh toán qua mã QR") {
            qrCodeContainer.style.display = "block";  // Hiển thị mã QR
        } else {
            qrCodeContainer.style.display = "none";  // Ẩn mã QR
        }
    }

    function toggleDeliveryOptions() {
        var shippingMethod = document.getElementById("shippingMethod").value;
        var deliveryOptions = document.getElementById("delivery-options");
        var deliveryAddressInput = document.querySelector('input[name="deliveryAdrress"]');
        // Hiển thị phần lựa chọn giao hàng chỉ khi chọn "Giao hàng tận nơi"
        if (shippingMethod === "Giao hàng tận nơi") {
            deliveryAddressInput.setAttribute('required', '');  // Bắt buộc nhập địa chỉ giao hàng
            deliveryOptions.style.display = "block";  // Hiển thị phần chọn phương thức giao hàng
            // Chọn phương thức vận chuyển đầu tiên mặc định
            document.getElementById("express-shipping").checked = true;
            // Cập nhật phí vận chuyển mặc định
            var shippingFeeValue = document.getElementById("shipping-fee");
            shippingFeeValue.textContent = new Intl.NumberFormat('vi-VN').format(70000) + 'đ';  // Phí của phương thức "Vận chuyển nhanh"
            
            // Cập nhật tổng thanh toán bao gồm phí vận chuyển
            updateTotal(70000); // Cập nhật tổng thanh toán ban đầu với phí vận chuyển mặc định
        } else {
            deliveryAddressInput.removeAttribute('required');  // Bỏ bắt buộc nhập địa chỉ giao hàng
            deliveryOptions.style.display = "none";  // Ẩn phần chọn phương thức giao hàng
            // Cập nhật tổng thanh toán không có phí vận chuyển
            var shippingFeeValue = document.getElementById("shipping-fee");
            shippingFeeValue.textContent = '0đ';  // Không có phí vận chuyển
            updateTotal(0); // Cập nhật lại tổng thanh toán không có phí vận chuyển
        }
    }

    // Lắng nghe sự thay đổi của phương thức vận chuyển để cập nhật phí vận chuyển và tổng thanh toán
    document.querySelectorAll('input[name="delivery-type"]').forEach(function(input) {
        input.addEventListener('change', function() {
            updateShippingFee();  // Cập nhật phí vận chuyển và tính lại tổng thanh toán
        });
    });

    // Hàm cập nhật phí vận chuyển và tổng thanh toán
    function updateShippingFee() {
        var shippingFee = 0;
        var selectedDeliveryType = document.querySelector('input[name="delivery-type"]:checked');
        
        if (selectedDeliveryType) {
            shippingFee = parseInt(selectedDeliveryType.getAttribute('data-value'));  // Lấy phí vận chuyển từ thuộc tính data-value
        }

        // Hiển thị phí vận chuyển
        var shippingFeeValue = document.getElementById("shipping-fee");
        shippingFeeValue.textContent = new Intl.NumberFormat('vi-VN').format(shippingFee) + 'đ';

        // Cập nhật lại tổng thanh toán
        updateTotal(shippingFee);
    }

    // Hàm tính tổng thanh toán
    function updateTotal(shippingFee) {
        var totalBeforeShipping = <?php echo $total; ?>;  // Tổng trước khi cộng phí vận chuyển (từ PHP)
        var discountValue = <?php echo $discountValue; ?>; // Giảm giá (từ PHP)
        var finalTotal = totalBeforeShipping + shippingFee - discountValue;  // Cộng thêm phí vận chuyển và trừ đi giảm giá

        // Hiển thị tổng thanh toán
        document.getElementById("final-total").textContent = new Intl.NumberFormat('vi-VN').format(finalTotal) + 'đ';
    }

    // Gọi hàm toggleDeliveryOptions() khi trang tải lần đầu tiên để đảm bảo giao diện được cập nhật đúng
    window.onload = function() {
        toggleDeliveryOptions();
    };
</script>
<script>
    // Xử lý khi người dùng nhấn nút "Xác nhận đặt hàng"
$('form').submit(function(e) {
    e.preventDefault();  // Ngăn chặn form gửi đi

    // Lấy thông tin người dùng nhập vào
    var name = $('input[name="name"]').val();
    var email = $('input[name="email"]').val();
    var phone = $('input[name="phone"]').val();
    var address = $('input[name="deliveryAdrress"]').val();
    var payment_method = $('#paymentMethod').val();
    var delivery_method = $('#shippingMethod').val();
    var delivery_type = $('input[name="delivery-type"]:checked').val() || ''; // Trả về '' nếu không có giá trị
    var note = $('textarea[name="textarea"]').val();
    var couponCode = $('input[name="couponCode"]').val() ? $.trim($('input[name="couponCode"]').val()) : '';
    var orderItemsId = [];
    $('table tbody tr').each(function() {
        var cart_id = $(this).find('input[name="cart_id"]').val();
        orderItemsId.push(cart_id);
    });

    // Lấy phí vận chuyển, giảm giá, tổng tiền
    var shippingFee = parseFloat($('#shipping-fee').text().replace(/\./g, '').replace('đ', '')) || 0;
    var discountValue = parseFloat($('#discount-fee').text().replace(/\./g, '').replace('đ', '')) || 0;
    var totalBeforeShipping = parseFloat($('#total-before-shipping').text().replace(/\./g, '').replace('đ', '')) || 0;
    var finalTotal = parseFloat($('#final-total').text().replace(/\./g, '').replace('đ', ''));

    // Gửi yêu cầu đặt hàng lên server
    $.ajax({
        url: '<?php echo _WEB_ROOT_ ?>/checkout/addOrderAndBill',
        type: 'POST',
        data: {
            receiver_name: name,
            receiver_email: email,
            receiver_phone: phone,
            shipping_address: address,
            payment_method: payment_method,
            delivery_method: delivery_method,
            delivery_type: delivery_type,
            note: note,
            couponCode: couponCode,
            orderItemsId: orderItemsId,
            shipping_fee: shippingFee,
            discount_value: discountValue,
            total_before_shipping_fee: totalBeforeShipping,
            total_payment: finalTotal
        },
        dataType: 'json'
    }).done(function (response) {
            if (response.success) {
                // Hiển thị thông báo đặt hàng thành công
                toast({
                    title: "Thành công",
                    message: "Đơn hàng của bạn đã được đặt thành công và đang trong quá trình xác nhận. Vui lòng kiểm tra trạng thái đơn hàng trong trang quản lý đơn hàng của bạn. Bạn sẽ được chuyển về trang quản lí đơn hàng sau 4 giây.",
                    type: "success",
                    duration: 5000
                });
                // Chuyển hướng về trang chủ sau 4 giây
                setTimeout(function() {
                    window.location.href = '<?php echo _WEB_ROOT_ ?>/order';
                }, 3000);
            } else {
                // Hiển thị thông báo lỗi
                toast({
                    title: "Đặt hàng thất bại",
                    message: response.message,
                    type: "error",
                    duration: 5000
                });
            }
        })
        .fail(function(xhr, status, error) {
                    console.error("Status:", status);
                    console.error("Error:", error);
                    console.error("Response:", xhr.responseText);
            // Hiển thị thông báo lỗi
            toast({
                title: "Đặt hàng thất bại",
                message: "Lỗi hệ thống. Vui lòng thử lại sau.",
                type: "error",
                duration: 5000
            });
                
        })
});


</script>