
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
    <title>Nhom 21 LT WEB</title>
    <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/nav.css?v=21.1">
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
</head>

<body>



    <div class="container">
        <div class="cart-content mt30 mb30">
            <div class="title-header mb20">
                <h2 class="title" style="font-weight: bold; ">Giỏ Hàng</h2>         
        <?php 
            $row = mysqli_fetch_assoc($CountCartItems);
            if ($row['num_cart_items'] == 0) {  // Kiểm tra số lượng sản phẩm trong giỏ hàng
        ?>
        <!-- Hiển thị thông báo nếu giỏ hàng trống -->
            <p style="font-weight: bold; font-size: 20px">Giỏ hàng của bạn đang trống. Hãy chọn thêm sản phẩm để mua sắm nhé!</p>
            <div style="display: flex; justify-content: center; align-items: center; height: 100px; width: 180px; margin: 0 auto;">
                <a href="<?php echo _WEB_ROOT_?>/Product" class="btn-default btn-checkout" style="text-align: center">MUA NGAY</a>
            </div>
        <?php 
            } else {
        ?>
                <p class="amount-product-cart"><span class="text-blue"><?php echo $row['num_cart_items'] ?></span> sản phẩm trong giỏ hàng của bạn</p>
            </div>
            <div style="display: inline-flex; align-items: center; width: 100%; margin-bottom: 5px">
                <input type="checkbox" class="checkboxSelectAll" id="selectAll" style="transform: scale(1.4); margin-right: 9px; margin-left: 10px; margin-bottom: 12px">
                <span style="font-size: 20px;">Chọn tất cả</span>
                <div class="delete-allproduct" style="cursor: pointer; margin-left: auto; display: inline-flex; align-items: center; display: none">
                    <i class="far fa-trash-alt" style="transform: scale(1.3); margin-right: 10px; margin-bottom: 8px"></i>
                    <span style="font-size: 20px;">Xoá sản phẩm đã chọn</span>
                </div>
            </div>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th></th>
                        <th>Sản phẩm</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($row = mysqli_fetch_assoc($cartItems)){
                            $selected_product_id = 0;
                            if (isset($_GET['detailproduct_id'])) {
                                $selected_product_id = $_GET['detailproduct_id']; 
                                // Kiểm tra và gán checked cho sản phẩm được chọn 
                            }
                            $is_checked = ($row['detailproduct_id'] == $selected_product_id) ? 'checked' : '';
                    ?>        
                    <tr>
                        <td>
                            <div class="item-center pdl10"><input type="checkbox" class="checkboxStyle" data-detailproduct-id="<?php echo $row['detailproduct_id']; ?>" data-cart-id="<?php echo $row['cart_id']; ?>" <?php echo $is_checked; ?>></div>
                        </td>
                        <td>
                            <div class="product-title item-center">
                                <a href="<?php echo _WEB_ROOT_?>/Product/details/<?php echo $row['product_name'].'?ProductColor_id='.$row['id'] ?>" style="display: flex; align-items: center;">
                                    <img src="<?php echo _WEB_ROOT_ . '/public/asset/images/product1/' . $row['image']; ?>" alt="" style="margin-right: 10px;">
                                    <div>
                                        <p style="margin: 0; font-size: 17px"><?php echo $row['product_name'],' ',$row['internal_storage']?></p>
                                        <p style="margin: 0; font-size: 17px">Màu sắc: <?php echo $row['color']?></p>
                                    </div>
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="item-center">
                                <div>
                                <p style="margin: 0">
                                    <strike class="original-price" style="color:rgba(128, 128, 128, 0.658); font-size: 17px;">
                                        <?php 
                                            $formattedPrice = number_format($row['original_price'], 0, ',', '.') . 'đ';
                                            echo $formattedPrice;  
                                        ?>
                                    </strike>
                                </p> 
                                <p class="discounted-price1" style="margin: 0; font-size: 17px; color: rgb(231,61,75); font-weight: bold " data-detailproduct-id="<?php echo $row['detailproduct_id']; ?>" >
                                    <?php 
                                        $formattedPrice = number_format($row['discounted_price'], 0, ',', '.') . 'đ';
                                        echo $formattedPrice;   
                                    ?> 
                                </p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="item-center">
                                <div class="quantity"> 
                                    <!-- Nút giảm số lượng -->
                                    <input 
                                        class="btn-quantity decrease-quantity" 
                                        type="button" 
                                        value="-" 
                                        data-detailproduct-id="<?php echo $row['detailproduct_id']; ?>" 
                                        data-max-amount="<?php echo $row['amout']; ?>"
                                        onclick="dcQuantity(<?php echo $row['detailproduct_id']; ?>)">

                                    <!-- Ô nhập số lượng -->
                                    <input 
                                        type="number" 
                                        max="<?php echo $row['amout']; ?>" 
                                        min="1" 
                                        name="quantity" 
                                        value="<?php echo isset($row['quantity']) ? $row['quantity'] : 1; ?>" 
                                        class="quantity-input" 
                                        data-detailproduct-id="<?php echo $row['detailproduct_id']; ?>" 
                                        data-max-amount="<?php echo $row['amout']; ?>">

                                    <!-- Nút tăng số lượng -->
                                    <input 
                                        class="btn-quantity increase-quantity" 
                                        type="button" 
                                        value="+" 
                                        data-detailproduct-id="<?php echo $row['detailproduct_id']; ?>" 
                                        data-max-amount="<?php echo $row['amout']; ?>"
                                        onclick="icQuantity(<?php echo $row['detailproduct_id']; ?>)">
                                </div>
                            </div>
                        </td>
                        <td>
                            <!-- Hiển thị tổng tiền -->
                            <div class="item-center text-red total-price" style="font-weight: bold" data-detailproduct-id="<?php echo $row['detailproduct_id']; ?>">
                                <?php 
                                    $totalPrice = $row['discounted_price'] * $row['quantity'];
                                    echo number_format($totalPrice, 0, ',', '.') . 'đ';
                                ?>
                            </div>
                        </td>
                        <td>
                            <div class="item-center pinside10">
                                <i class="far fa-trash-alt delete-item" data-detailproduct-id="<?php echo $row['detailproduct_id']; ?>" style="cursor: pointer;"></i>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>

                    <!-- <tr>
                        <td>
                            <div class="item-center pdl10"><input type="checkbox" class="checkboxStyle"></div>
                        </td>
                        <td>
                            <div class="product-title item-center">
                                <img src="images/iphone11.png" alt="">
                                <div>
                                    <p>iPhone 11 Pro 128GB</p>
                                    <p>Màu sắc: Xanh</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="item-center">17.000.000đ</div>
                        </td>
                        <td>
                            <div class="item-center">
                                <div class="quantity">
                                    <input class="btn-quantity decrease-quantity" onclick="dcQuantity()" type="button"
                                        value="-">
                                    <input type="number" max="10" min="1" name="quantity" value="1"
                                        class="quantity-input" id="quantity-input">
                                    <input class="btn-quantity increase-quantity" onclick="icQuantity()" type="button"
                                        value="+">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="item-center text-red">17.000.000đ</div>
                        </td>
                        <td>
                            <div class="item-center pinside10"><i class="far fa-trash-alt"></i></div>
                        </td>
                    </tr> -->
                </tbody>
            </table>
            <div id="toast"></div>

            <!-- Form ẩn để gửi dữ liệu ngầm -->
            <form id="checkout-form" method="POST" action="<?php echo _WEB_ROOT_; ?>/Checkout" >
                <input type="hidden" name="selectedCartItemIds">
                <input type="hidden" name="couponCode">
                <input type="hidden" name="discountValue">
            </form>
            <!-- Form ẩn để gửi dữ liệu ngầm -->

            <div class="prices-summary">
                <div class="left-content">
                    <a href="<?php echo _WEB_ROOT_?>/Product" class="derection-product text-blue"><i class="fas fa-long-arrow-alt-left"></i> Tiếp tục
                        mua hàng</a>
                </div>
                <div class="right-con">
                    <div class="total-receipt">
                        <div class="promotion-code pinside20">
                            <input type="text" class="input-code" placeholder="Nhập mã ưu đãi" style="font-size: 17px; color: blue">
                            <button type="submit" class="submit-code btn-default">Áp dụng</button>
                            <input type="hidden" class="couponCode" data-value="">
                        </div>
                        <ul class="prices pinside20">
                            <li class="prices-item">
                                <span class="prices-text">Tạm tính</span>
                                <span class="prices-value price-temporary" data-value="0">0đ</span>
                            </li>
                            <li class="prices-item">
                                <span class="prices-text">Giảm giá</span>
                                <span class="prices-value price-discount " style="color: blue">0đ</span>
                            </li>
                        </ul>
                        <div class="prices-total pinside20">
                            <span class="price-text">Tổng cộng</span>
                            <span class="prices-value prices-final text-red" data-value="0">0đ</span>
                        </div>
                    </div>
                    <a href="" class="btn-default btn-checkout btn-checkout1">Mua Hàng</a>
                </div>
                <?php } ?>  
            </div> 
        </div>
    </div>
    
    <!-- /.cart-total -->
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
        $(document).ready(function() {
            // Giả sử bạn đã thay đổi trạng thái của checkbox (checked)
            $('.checkboxStyle').each(function() {
                var checkbox = $(this);
                
                // Nếu checkbox có thuộc tính checked, trigger sự kiện 'change'
                if (checkbox.is(':checked')) {
                    checkbox.trigger('change');
                }
            });
        });
         // Hàm kiểm tra và điều chỉnh giá trị nhập
         // Hàm kiểm tra và điều chỉnh giá trị nhập
        function validateQuantity(inputElement) {
            var maxAmount = parseInt(inputElement.dataset.maxAmount); // Lấy giá trị data-max-amount
            var qty = inputElement.value.trim(); // Lấy giá trị nhập và loại bỏ khoảng trắng

            // Kiểm tra nếu giá trị nhập không hợp lệ
            if (qty === "") {
                return; // Không thay đổi giá trị khi người dùng xóa hết
            }

            qty = parseInt(qty); // Chuyển đổi giá trị thành số nguyên

            // Kiểm tra nếu giá trị nhập nhỏ hơn 1
            if (isNaN(qty) || qty < 1) {
                inputElement.value = 1; // Đặt lại giá trị về 1 nếu giá trị không hợp lệ
                showToast("Số lượng không thể nhỏ hơn 1.");
            } 
            // Kiểm tra nếu giá trị nhập lớn hơn maxAmount
            else if (qty > maxAmount) {
                inputElement.value = maxAmount; // Đặt lại giá trị về maxAmount nếu giá trị nhập quá lớn
                showToast(
                    "Số lượng không thể lớn hơn số lượng sản phẩm có sẵn (" + maxAmount + ")."
                ); // Hiển thị thông báo lỗi
            }
        }

        // Lặp qua tất cả các trường nhập để gán sự kiện
        document.querySelectorAll(".quantity-input").forEach(function (inputElement) {
            // Sự kiện khi người dùng nhập liệu
            inputElement.addEventListener("input", function () {
                validateQuantity(inputElement); // Kiểm tra giá trị nhập
            });

            // Sự kiện khi mất focus
            inputElement.addEventListener("blur", function () {
                if (inputElement.value.trim() === "") {
                    inputElement.value = 1; // Nếu trống, đặt lại giá trị là 1
                } else {
                    validateQuantity(inputElement); // Kiểm tra giá trị khi mất focus
                }
            });
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
        
       // Sự kiện khi click vào checkbox chọn tất cả
        $(document).on('change', '.checkboxSelectAll', function() {
            var isChecked = $(this).prop('checked');
            
            // Cập nhật trạng thái cho tất cả các checkbox sản phẩm
            $('.checkboxStyle').prop('checked', isChecked);
            
            // Hiển thị hoặc ẩn nút "Xoá sản phẩm đã chọn"
            updateDeleteButtonVisibility();
            
            // Cập nhật lại tổng tiền giỏ hàng
            updateCartTotal();
        });

        // Sự kiện khi click vào checkbox sản phẩm,
        $(document).on('change', '.checkboxStyle', function() {
            // Kiểm tra lại trạng thái của checkbox "Chọn tất cả", nếu có ít nhất 1 checkbox chưa được chọn thì checkbox "Chọn tất cả" cũng phải bỏ chọn
            var allChecked = $('.checkboxStyle').length === $('.checkboxStyle:checked').length;
            $('.checkboxSelectAll').prop('checked', allChecked);

            // Cập nhật hiển thị nút "Xoá sản phẩm đã chọn"
            updateDeleteButtonVisibility();
            
            // Cập nhật lại tổng tiền giỏ hàng
            updateCartTotal();
        });

        // Hàm kiểm tra và hiển thị/ẩn nút "Xoá sản phẩm đã chọn"
        function updateDeleteButtonVisibility() {
            var anyChecked = $('.checkboxStyle:checked').length > 0;
            if (anyChecked) {
                $('.delete-allproduct').show();  // Hiển thị nút xoá
            } else {
                $('.delete-allproduct').hide();  // Ẩn nút xoá
            }
        }

        $('.btn-checkout1').click(function(e) {
            e.preventDefault(); // Ngăn chặn hành vi mặc định của nút

            // Lấy dữ liệu từ giao diện
            var selectedCartItemIds = [];
            var couponCode = $(".couponCode").data("value") || ""; // Lấy mã khuyến mãi
            var discountValue = $(".price-discount").attr('data-value') || 0; // Giá trị giảm giá

            // Lấy danh sách sản phẩm đã chọn
            $('.checkboxStyle:checked').each(function() {
                selectedCartItemIds.push($(this).data('cart-id'));
            });

            // Kiểm tra nếu không có sản phẩm nào được chọn
            if (selectedCartItemIds.length === 0) {
                toast({
                    title: "Lỗi",
                    message: "Vui lòng chọn ít nhất 1 sản phẩm để mua hàng.",
                    type: "error",
                    duration: 5000
                });
                return;
            }
            // Gắn dữ liệu vào form ẩn
            // Xóa các input ẩn cũ trong form
            $('#checkout-form input[name="selectedCartItemIds[]"]').remove();
            
            // Thêm các phần tử của mảng vào form dưới dạng các input ẩn
            selectedCartItemIds.forEach(function(cartItemId) {
                $('#checkout-form').append('<input type="hidden" name="selectedCartItemIds[]" value="' + cartItemId + '">');
            });
            $('#checkout-form input[name="couponCode"]').val(couponCode);
            console.log( $('#checkout-form input[name="couponCode"]').val(couponCode));
            $('#checkout-form input[name="discountValue"]').val(discountValue);

            // Submit form
            $('#checkout-form').submit();
        });


        // Tính tổng tiền giỏ hàng
        function updateCartTotal() {
            var totalAmount = 0;

            // Duyệt qua tất cả checkbox và tính tổng tiền cho các sản phẩm được chọn
            document.querySelectorAll('.checkboxStyle').forEach(function(checkbox) {
                if (checkbox.checked) {
                    var detailProductId = checkbox.getAttribute('data-detailproduct-id');  // Lấy ID sản phẩm

                    // Lấy tổng tiền của sản phẩm từ .total-price (thay vì tính lại từ đơn giá và số lượng)
                    var totalPriceText = document.querySelector(`.total-price[data-detailproduct-id="${detailProductId}"]`).textContent;

                    // Chuyển giá trị tổng tiền từ chuỗi sang số (loại bỏ dấu "đ" và dấu chấm)
                    var totalPrice = parseInt(totalPriceText.replace(/\./g, '').replace('đ', '').trim());

                    if (!isNaN(totalPrice)) {
                        // Cộng tổng tiền của sản phẩm vào tổng tiền giỏ hàng
                        totalAmount += totalPrice;
                    }
                }
            });

            // Định dạng tổng tiền theo dạng tiền tệ Việt Nam
            var formattedTotalAmount = new Intl.NumberFormat('vi-VN').format(totalAmount) + 'đ';

            // Cập nhật giao diện và giá trị thực cho '.price-temporary'
            document.querySelector('.price-temporary').textContent = formattedTotalAmount;
            document.querySelector('.price-temporary').setAttribute('data-value', totalAmount); // Lưu giá trị thực


            var price_temporary = totalAmount;
            var couponCode = $(".submit-code").data("value") || ""; // Lấy mã khuyến mãi từ input, nếu không có giá trị thì thiết lập là rỗng
            if (couponCode !== "") {
                console.log("Áp dụng mã ưu đãi: " + couponCode);
                $.ajax({
                    url: '<?php echo _WEB_ROOT_; ?>/cart/ApplyCoupon',
                    type: 'POST',
                    data: {
                        price_temporary, couponCode
                    },
                    dataType: 'json'
                }) .done(function(response) {
                        if (response.success) {
                            $(".couponCode").attr('data-value', couponCode); // Thiết lập data-value cho phần tử
                            console.log($(".couponCode").data('value'));
                            var discount = parseFloat(response.discounted_price) || 0;
                            var finalAmount = price_temporary - discount;

                            // Định dạng số giảm giá theo tiền tệ Việt Nam
                            $(".price-discount").text(new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(discount));
                            // Định dạng số giảm giá theo tiền tệ Việt Nam và thiết lập data-value
                            $(".price-discount").attr('data-value', discount); // Thiết lập data-value cho phần tử

                            // Kiểm tra nếu giá trị cuối cùng âm, gán bằng 0
                            if (finalAmount < 0) {
                                finalAmount = 0; // Nếu giá trị cuối cùng âm, gán bằng 0
                            }
                            // Định dạng tổng tiền sau khi giảm giá theo dạng tiền tệ Việt Nam
                            var formattedFinalAmount = new Intl.NumberFormat('vi-VN').format(finalAmount) + 'đ';

                            // Cập nhật giao diện và giá trị thực cho '.prices-final'
                            document.querySelector('.prices-final').textContent = formattedFinalAmount; // Hiển thị số tiền sau khi trừ giảm giá
                            document.querySelector('.prices-final').setAttribute('data-value', finalAmount); // Lưu giá trị thực vào data-value


                        } else {
                            if (response.message){
                                var errorMessage = response.message || "Có lỗi xảy ra. Vui lòng thử lại.";
                                $(".price-discount").text('0đ');
                                $(".prices-final").text($(".price-temporary").text());
                                toast({
                                    title: "Lỗi",
                                    message: errorMessage,
                                    type: "error",
                                    duration: 5000
                                });
                            }    
                        }
                    })
                .fail(function(xhr, status, error) {
                    console.error("Status:", status);
                    console.error("Error:", error);
                    console.error("Response:", xhr.responseText);
                    toast({
                        title: "Lỗi hệ thống",
                        message: "Có lỗi xảy ra khi xử lý yêu cầu. Vui lòng thử lại.",
                        type: "error",
                        duration: 5000
                    });
            });
            } else {
                // Nếu không có mã giảm giá, giá trị giảm giá sẽ là 0
                $(".price-discount").text('0đ');
                $(".prices-final").text($(".price-temporary").text());
            }
           
        }


        // Sự kiện khi thay đổi số lượng hoặc thay đổi checkbox
        $(document).on('input', '.quantity-input, .checkboxStyle', function() {
            updateCartTotal(); // Cập nhật tổng tiền mỗi khi thay đổi
        });

        // Lấy giá sản phẩm từ thẻ có class "discounted-price" (áp dụng cho từng sản phẩm)
        function updateTotalPrice(detailProductId) {
            // Tìm thẻ input số lượng liên quan đến sản phẩm
            var input = document.querySelector(`.quantity-input[data-detailproduct-id="${detailProductId}"]`);
            var totalPriceElement = document.querySelector(`.total-price[data-detailproduct-id="${detailProductId}"]`);
            
            // Lấy giá sản phẩm và số lượng
            var unitPriceText = document.querySelector(`.discounted-price1[data-detailproduct-id="${detailProductId}"]`).textContent;
            var unitPrice = parseInt(unitPriceText.replace(/\./g, '').replace('đ', '').trim());
            var quantity = parseInt(input.value);

            if (!isNaN(quantity) && quantity >= 1) {
                // Tính tổng tiền
                var totalPrice = unitPrice * quantity;

                // Hiển thị tổng tiền với định dạng tiền Việt Nam
                totalPriceElement.innerText = new Intl.NumberFormat('vi-VN').format(totalPrice) + 'đ';
            }
        }

        // Giảm số lượng
        function dcQuantity(detailProductId) {
            var input = document.querySelector(`.quantity-input[data-detailproduct-id="${detailProductId}"]`);
            var qty = parseInt(input.value);

            if (!isNaN(qty) && qty == 1) {
                toast({
                    title: "Lỗi",
                    message: "Số lượng sản phẩm không thể nhỏ hơn 1.",
                    type: "error",
                    duration: 5000
                });
            } else if (!isNaN(qty) && qty > 1) {
                input.value = --qty; // Giảm số lượng
                updateTotalPrice(detailProductId); // Cập nhật tổng tiền
                $(input).trigger('input'); // Kích hoạt sự kiện input
            }
        }

        // Tăng số lượng
        function icQuantity(detailProductId) {
            var input = document.querySelector(`.quantity-input[data-detailproduct-id="${detailProductId}"]`);
            var maxAmount = parseInt(input.dataset.maxAmount); // Số lượng tối đa
            var qty = parseInt(input.value);

            if (!isNaN(qty) && qty == maxAmount) {
                toast({
                    title: "Lỗi",
                    message: "Số lượng sản phẩm bạn chọn đã đạt mức tối đa.",
                    type: "error",
                    duration: 5000
                });
            } else if (!isNaN(qty) && qty < maxAmount) {
                input.value = ++qty; // Tăng số lượng
                updateTotalPrice(detailProductId); // Cập nhật tổng tiền
                $(input).trigger('input'); // Kích hoạt sự kiện input
            }
        }
        
        // Sự kiện thay đổi số lượng
        $(document).on('input', '.quantity-input', function() {
            var detailProductId = $(this).data('detailproduct-id'); // LấydetailProduct_id sản phẩm
            var quantity = $(this).val(); // Lấy số lượng mới
            console.log('detailProductId:', detailProductId);
            console.log('Quantity:', quantity);

            // Gửi yêu cầu AJAX
            $.ajax({
                url: '<?php echo _WEB_ROOT_; ?>/cart/UpdateProductCart',
                type: 'POST',
                data: {
                    detailproduct_id: detailProductId,
                    quantity: quantity
                }
            })
            .fail(function(xhr, status, error) {
                console.error("Status:", status);
                console.error("Error:", error);
                console.error("Response:", xhr.responseText);
                toast({
                    title: "Lỗi hệ thống",
                    message: "Có lỗi xảy ra khi xử lý yêu cầu. Vui lòng thử lại.",
                    type: "error",
                    duration: 5000
                });
            });
        });
        // Sự kiện khi click vào nút xoá sản phẩm
        $(document).on('click', '.delete-item', function() {
            var detailProductId = $(this).data('detailproduct-id');  // Lấy ID sản phẩm từ thuộc tính data-detailproduct-id
            // Gửi yêu cầu AJAX để xoá sản phẩm
            $.ajax({
                url: '<?php echo _WEB_ROOT_; ?>/cart/removeSingleProductFromCart',  // URL để xử lý 1 xoá sản phẩm khỏi giỏ hàng
                type: 'POST',
                data: {
                    detailproduct_id: detailProductId  // Gửi ID của sản phẩm cần xoá
                
                }, 
                dataType: 'json'    // Định dạng dữ liệu trả về
            })
            .done(function (response) {
                $(`[data-detailproduct-id="${detailProductId}"]`).closest('tr').remove();
                // Kiểm tra số lượng sản phẩm trong giỏ hàng và thay đổi giao diện tương ứng
                if (response.quantity > 0) {
                        // Nếu số lượng sản phẩm lớn hơn 0, chỉ cần thay đổi số lượng trong <p> mà không cần thay đổi toàn bộ giao diện
                        $('.amount-product-cart').html(`<span class="text-blue">${response.quantity}</span> sản phẩm trong giỏ hàng của bạn`);
                    } else {
                        // Nếu số lượng sản phẩm bằng 0, hiển thị thông báo giỏ hàng trống
                        $('.cart-content').html(`
                            <div class="title-header mb20">
                                <h2 class="title" style="font-weight: bold; ">Giỏ Hàng</h2> 
                                <p style="font-weight: bold; font-size: 20px">Giỏ hàng của bạn đang trống. Hãy chọn thêm sản phẩm để mua sắm nhé!</p>
                                <div style="display: flex; justify-content: center; align-items: center; height: 100px; width: 180px; margin: 0 auto;">
                                    <a href="<?php echo _WEB_ROOT_?>/Product" class="btn-default btn-checkout" style="text-align: center">MUA NGAY</a>
                                </div>
                            </div>    
                        `);
                    }
                updateCartTotal();  // Cập nhật tổng tiền giỏ hàng
            })   
            .fail(function(xhr, status, error) {
                console.error("Status:", status);
                console.error("Error:", error);
                console.error("Response:", xhr.responseText);
                toast({
                    title: "Lỗi hệ thống",
                    message: "Có lỗi xảy ra khi xử lý yêu cầu. Vui lòng thử lại.",
                    type: "error",
                    duration: 5000
                });
            });
        });
        // Sự kiện khi click vào nút tất cả xoá sản phẩm đã chọn
        $(document).on('click', '.delete-allproduct', function() {
            // Thu thập tất cả các ID của các sản phẩm đã chọn
            var selectedProductIds = [];
            $('.checkboxStyle:checked').each(function() {
                selectedProductIds.push($(this).data('detailproduct-id'));
            });

            // Kiểm tra xem có sản phẩm nào được chọn không
            if (selectedProductIds.length > 0) {
                // Gửi yêu cầu AJAX để xoá sản phẩm
                $.ajax({
                    url: '<?php echo _WEB_ROOT_; ?>/cart/removeMultipleProductsFromCart',  // URL xử lý xoá sản phẩm được chọn
                    type: 'POST',
                    data: { detailproduct_ids: selectedProductIds },  // Gửi mảng ID sản phẩm đã chọn
                    dataType: 'json'   // Định dạng dữ liệu trả về
                })
                .done(function (response) {
                    // Duyệt qua các mảng detailproduct_id loại bỏ sản phẩm tương ứng khỏi giao diện
                    selectedProductIds.forEach(function (detailproductId) {
                        $(`[data-detailproduct-id="${detailproductId}"]`).closest('tr').remove();  // Xóa sản phẩm tương ứng khỏi giao diện
                    });
                    if (response.quantity > 0) {
                        // Nếu số lượng sản phẩm lớn hơn 0, chỉ cần thay đổi số lượng trong <p> mà không cần thay đổi toàn bộ giao diện
                        $('.amount-product-cart').html(`<span class="text-blue">${response.quantity}</span> sản phẩm trong giỏ hàng của bạn`);
                    } else {
                        // Nếu số lượng sản phẩm bằng 0, hiển thị thông báo giỏ hàng trống
                        $('.cart-content').html(`
                            <div class="title-header mb20">
                                <h2 class="title" style="font-weight: bold; ">Giỏ Hàng</h2> 
                                <p style="font-weight: bold; font-size: 20px">Giỏ hàng của bạn đang trống. Hãy chọn thêm sản phẩm để mua sắm nhé!</p>
                                <div style="display: flex; justify-content: center; align-items: center; height: 100px; width: 180px; margin: 0 auto;">
                                    <a href="<?php echo _WEB_ROOT_?>/Product" class="btn-default btn-checkout" style="text-align: center">MUA NGAY</a>
                                </div>
                            </div>    
                        `);
                    }
                    updateCartTotal();  // Cập nhật tổng tiền giỏ hàng
                })   
                .fail(function(xhr, status, error) {
                    console.error("Status:", status);
                    console.error("Error:", error);
                    console.error("Response:", xhr.responseText);
                    toast({
                        title: "Lỗi hệ thống",
                        message: "Có lỗi xảy ra khi xử lý yêu cầu. Vui lòng thử lại.",
                        type: "error",
                        duration: 5000
                    });
                });
            }
        });
        </script>
<script>
   $(".submit-code").click(function() {
    var couponCode = $(".input-code").val();
    $(".submit-code").attr('data-value', couponCode);
    var price_temporary = parseInt($(".price-temporary").text().replace('đ', '').replace(/\./g, '').trim());
    console.log(couponCode);
    console.log(price_temporary);
    if (couponCode == "") {
        toast({
            title: "Lỗi",
            message: "Vui lòng nhập mã ưu đãi.",
            type: "error",
            duration: 5000
        });
        return;
    }

    $.ajax({
        url: '<?php echo _WEB_ROOT_; ?>/cart/ApplyCoupon',
        type: 'POST',
        data: {
            couponCode: couponCode,
            price_temporary: price_temporary
        },
        dataType: 'json'
    })
    .done(function(response) {
        console.log(response); // Đã sửa Console.log thành console.log
        if (response.success) {
            $(".couponCode").attr('data-value', couponCode); // Thiết lập data-value cho phần tử
            console.log($(".couponCode").data("value"));
            var discount = parseFloat(response.discounted_price) || 0;
            var price_total = price_temporary - discount;

            // Định dạng số giảm giá theo tiền tệ Việt Nam
            $(".price-discount").text(new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(discount));
            // Định dạng số giảm giá theo tiền tệ Việt Nam và thiết lập data-value
            $(".price-discount").attr('data-value', discount); // Thiết lập data-value cho phần tử

            // Định dạng giá cuối cùng theo tiền tệ Việt Nam
            $(".prices-final").text(new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(price_total));
            $(".prices-final").attr('data-value', price_total); // Thiết lập data-value cho phần tử
            toast({
                title: "Thành công",
                message: "Áp dụng mã ưu đãi thành công.",
                type: "success",
                duration: 5000
            });
        } else {
            var errorMessage = response.message || "Có lỗi xảy ra. Vui lòng thử lại.";
            $(".price-discount").text('0đ');
            $(".prices-final").text($(".price-temporary").text());
            toast({
                title: "Lỗi",
                message: errorMessage,
                type: "error",
                duration: 5000
            });
        }
    })
    .fail(function(xhr, status, error) {
        console.error("Status:", status);
        console.error("Error:", error);
        console.error("Response:", xhr.responseText);
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