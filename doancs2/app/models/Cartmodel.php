<?php
    class cartmodel extends BaseModel
    {
        public function AddProductToCart($user_id, $detailproduct_id, $quantity)
        {
            // Truy vấn để lấy giá gốc và giá đã giảm của sản phẩm
            $sql = "SELECT original_price, discounted_price, detailproduct.amout AS amount
                    FROM phoneoptions
                    JOIN detailproduct ON phoneoptions.specificphone_id = detailproduct.specificphone_id
                    WHERE detailproduct.id = $detailproduct_id";
            $result = $this->_query($sql);
            $row = mysqli_fetch_assoc($result);
            $discounted_price = $row['discounted_price'];
            $original_price = $row['original_price'];
            $amount = $row['amount'];

            // Kiểm tra xem sản phẩm đã có trong giỏ hàng của người dùng chưa
            $sql_check = "SELECT * FROM cart WHERE user_id = $user_id AND detailproduct_id = $detailproduct_id";
            $existingProduct = $this->_query($sql_check);
            $existingProduct = mysqli_fetch_assoc($existingProduct);    
            if ($existingProduct) {
                // Nếu sản phẩm đã có, cập nhật lại số lượng và giá trị của sản phẩm
                $new_quantity = $existingProduct['quantity'] + $quantity; // Cộng thêm số lượng
                if ($new_quantity > $amount) { // Nếu số lượng vượt quá số lượng có sẵn thì trả về số lượng sản phẩm có sẵn trong giỏ hàng
                    return intval($existingProduct['quantity']);
                }
                $sql_update = " UPDATE cart 
                                SET quantity = $new_quantity, discounted_price = $discounted_price, original_price = $original_price
                                WHERE user_id = $user_id AND detailproduct_id = $detailproduct_id";
                return $this->_query($sql_update);
            } else {
                // Nếu sản phẩm chưa có, thêm mới sản phẩm vào giỏ hàng
                $sql_insert = "INSERT INTO cart (user_id, detailproduct_id, quantity, discounted_price, original_price) 
                            VALUES ($user_id, $detailproduct_id, $quantity, $discounted_price, $original_price)";
                return $this->_query($sql_insert);
            }
        }

        
        public function CountCartItems($user_id)
        {
            $sql = "SELECT COUNT(*) AS num_cart_items FROM cart WHERE user_id = $user_id";
            return $this->_query($sql);
        }
        public function GetCartItems($user_id)
        {
            $sql = "SELECT * FROM cart 
                    JOIN detailproduct ON cart.detailproduct_id = detailproduct.id
                    JOIN phoneoptions ON phoneoptions.specificphone_id = detailproduct.specificphone_id
                    JOIN product ON product.product_id = phoneoptions.product_id
                    WHERE user_id = $user_id";
            return $this->_query($sql);
        }
        public function  UpdateCartItem($detailproduct_id, $newQuantity, $user_id)
        {
            $sql = "UPDATE cart SET quantity = $newQuantity WHERE detailproduct_id = $detailproduct_id AND user_id = $user_id";
            return $this->_query($sql);
        }
        public function RemoveSingleProductFromCart($detailproduct_id, $user_id)
        {
            $sql = "DELETE FROM cart WHERE detailproduct_id = $detailproduct_id AND user_id = $user_id";
            $this->_query($sql);
            // Truy vấn đếm số lượng sản phẩm còn lại trong giỏ hàng của user
            $sqlCount = "SELECT COUNT(*) as total_items FROM cart WHERE user_id = $user_id";
            $result = $this->_query($sqlCount);
            $row = mysqli_fetch_assoc($result);
            
            // Trả về số lượng sản phẩm còn lại
            return intval($row['total_items']);
        }
        public function RemoveMultipleProductsFromCart($detailproduct_ids_str, $user_id)
        {
            $sql = "DELETE FROM cart WHERE detailproduct_id IN ($detailproduct_ids_str) AND user_id = $user_id";
            $this->_query($sql);
            // Truy vấn đếm số lượng sản phẩm còn lại trong giỏ hàng của user
            $sqlCount = "SELECT COUNT(*) as total_items FROM cart WHERE user_id = $user_id";
            $result = $this->_query($sqlCount);
            $row = mysqli_fetch_assoc($result);
            // Trả về số lượng sản phẩm còn lại
            return intval($row['total_items']);
        }

        public function checkCouponCode($couponCode, $user_id)
        {
            // Truy vấn mã khuyến mãi và kiểm tra các điều kiện
            $sql = "SELECT * FROM promotions WHERE code = '$couponCode' AND status = 'active' AND start_date <= NOW() AND end_date >= NOW()";
            $result = $this->_query($sql);
            $promotion = mysqli_fetch_assoc($result);
            
            // Kiểm tra nếu mã khuyến mãi có tồn tại
            if ($promotion) {

                // Kiểm tra số lượt sử dụng đã đạt giới hạn chưa
                if ($promotion['usage_limit'] > 0) {
                    $sql1 = "SELECT COUNT(*) AS used_count FROM applied_promotions WHERE promotion_code = '$couponCode'";
                    $result1 = $this->_query($sql1);
                    $usageData = mysqli_fetch_assoc($result1);

                    if ($usageData['used_count'] >= $promotion['usage_limit']) {
                        return "Mã khuyến mãi đã hết lượt sử dụng."; // Đã hết lượt sử dụng mã
                    }
                }

                // Kiểm tra nếu người dùng đã áp dụng mã này chưa
                $sql2 = "SELECT COUNT(*) AS user_usage FROM applied_promotions WHERE promotion_code = '$couponCode' AND user_id = $user_id";
                $result2 = $this->_query($sql2);  // Sửa lại để dùng đúng biến
                $userUsageData = mysqli_fetch_assoc($result2);

                if ($userUsageData['user_usage'] >= $promotion['user_limit']) {
                    return "Bạn đã sử hết số lần sử dụng mã khuyến mãi này rồi."; // Người dùng đã sử dụng mã khuyến mãi này rồi
                }

                return $promotion; // Mã hợp lệ, tiếp tục xử lý
            } else {
                return "Không tìm thấy mã khuyến mãi hợp lệ."; // Không tìm thấy mã khuyến mãi hợp lệ
            }
        }

        public function applyDiscountToCart($promotion, $user_id, $price_temporary) {
            // Lấy các giá trị từ $promotion
            $discount_type = $promotion['discount_type'];
            $discount_value = $promotion['discount_value'];
            $min_purchase_value = $promotion['min_purchase_value'];
            $max_purchase_value = $promotion['max_purchase_value'];
        
            // Kiểm tra xem mã khuyến mãi có áp dụng cho giỏ hàng không
            if ($min_purchase_value > $price_temporary) {
                return "Giá trị đơn hàng chưa đạt yêu cầu tối thiểu để sử dụng mã khuyến mãi này.";
            }
        
            if ($max_purchase_value > 0 && $price_temporary > $max_purchase_value) {
                return "Giá trị đơn hàng vượt quá giới hạn tối đa của mã khuyến mãi này.";
            }
        
            // Tính toán giảm giá
            if ($discount_type == 'fixed') {
                if ($discount_value > $price_temporary) {
                    $discounted_price = $price_temporary; // Giảm giá quá cao, trả về 0
                } else {
                $discounted_price = $discount_value;
                }
            } else {
                $discounted_price = ($price_temporary * $discount_value / 100);
            }
        
            // Kiểm tra nếu giá trị giảm giá bị âm, trả về 0
            if ($discounted_price < 0) {
                $discounted_price = 0;
            }
        
            return $discounted_price;
        }
        

              // // Lưu thông tin mã khuyến mãi đã áp dụng
            // $sql = "INSERT INTO applied_promotions (id, promotion_code, user_id, applied_at)
            //         VALUES ($id, '$promotion_code', $user_id, NOW())";
            // $this->_query($sql);
        
    }
?>