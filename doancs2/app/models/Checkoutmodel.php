<?php 
    class Checkoutmodel extends BaseModel
    {
        public function GetSelectedCartItems($selectedCartItemIds)
        {
            $selectedCartItemIds = implode(",", $selectedCartItemIds);
            $sql = "SELECT * FROM cart 
                    JOIN detailproduct ON cart.detailproduct_id = detailproduct.id
                    JOIN phoneoptions ON phoneoptions.specificphone_id = detailproduct.specificphone_id
                    JOIN product ON product.product_id = phoneoptions.product_id
                    WHERE cart.cart_id IN ($selectedCartItemIds)";
            return $this->_query($sql);
        }
        public function GetInformationCustomer($user_id)
        {
            $sql = "SELECT * FROM user WHERE id = $user_id";
            return $this->_query($sql);
        }
        public function AddOrderAndBill($user_id,$receiverName, $receiverEmail, $receiverPhone, $shipping_address, $payment_method, $delivery_method, $delivery_type, $note, $shipping_fee, $discount_value, $total_before_shipping_fee, $total_payment, $orderItemsIdString, $couponCode)
        {
            if ($delivery_method == 'Nhận hàng tại cửa hàng') {
                $shipping_address = "";
                $delivery_type = NULL;
            }
            $sql = "INSERT INTO `order` (user_id, receiver_name, receiver_email, receiver_phone, shipping_address, payment_method, delivery_method, delivery_type, note, shipping_fee, discount_value, total_before_shipping_fee, total_payment) 
                    VALUES ($user_id, '$receiverName', '$receiverEmail', '$receiverPhone', '$shipping_address', '$payment_method', '$delivery_method', " . ($delivery_type === NULL ? 'NULL' : "'$delivery_type'") . ", '$note', $shipping_fee, $discount_value, $total_before_shipping_fee, $total_payment)";
            $this->_query($sql);
            $sql2 = "SELECT LAST_INSERT_ID() AS order_id";
            $result = $this->_query($sql2);
            $row = mysqli_fetch_assoc($result);
            $order_id = $row['order_id'];
            //câp nhật ngày hàng dự kiến
            if ($delivery_method != 'Nhận hàng tại cửa hàng') {
                if ($delivery_type == 'Vận chuyển tiết kiệm (3-5 ngày)') {
                    $sql0 = "UPDATE `order` SET expected_delivery_date = DATE_ADD(NOW(), INTERVAL 5 DAY) WHERE order_id = $order_id";
                } else if ($delivery_type == 'Vận chuyển nhanh (1-2 ngày)') {
                    $sql0 = "UPDATE `order` SET expected_delivery_date = DATE_ADD(NOW(), INTERVAL 2 DAY) WHERE order_id = $order_id";
                }
                $this->_query($sql0);
            }
            if (!empty($orderItemsIdString)) {
                // Đảm bảo chuỗi không chứa dấu nháy đơn không hợp lệ hoặc dấu cách
                $orderItemsIdString = '(' . preg_replace('/[^0-9,]/', '', $orderItemsIdString) . ')';
                // Tiến hành chạy câu SQL
                $sql4 = "SELECT * FROM cart 
                            JOIN detailproduct ON cart.detailproduct_id = detailproduct.id
                            JOIN phoneoptions ON phoneoptions.specificphone_id = detailproduct.specificphone_id
                            JOIN product ON product.product_id = phoneoptions.product_id
                            WHERE cart.cart_id IN $orderItemsIdString";
            }
            $result2 = $this->_query($sql4);
            while ($row = mysqli_fetch_assoc($result2)) {
                $detailproduct_id = $row['detailproduct_id'];
                $quantity = $row['quantity'];
                $discounted_price = $row['discounted_price'];
                $total_price = $quantity * $discounted_price;
                $sql3 = "INSERT INTO `order_item` (order_id, detailproduct_id, quantity, unit_price, total_price) 
                        VALUES  ($order_id, $detailproduct_id, $quantity, $discounted_price, $total_price)";
                $this->_query($sql3);
            }
            $sql5 = "INSERT INTO  `bill`(order_id, payment_method, payment_status,total_before_shipping_fee, shipping_fee, discount_value, total_payment)
                    VALUES ($order_id, '$payment_method', 'Chưa thanh toán', $total_before_shipping_fee, $shipping_fee, $discount_value, $total_payment)";
            $this->_query($sql5);
            $sql7 = "SELECT LAST_INSERT_ID() AS bill_id";
            $result3 = $this->_query($sql7);
            $row2 = mysqli_fetch_assoc($result3);
            $bill_id = $row2['bill_id'];
            mysqli_data_seek($result2, 0);
            while ($row = mysqli_fetch_assoc($result2)) {
                $detailproduct_id = $row['detailproduct_id'];
                $quantity = $row['quantity'];
                $discounted_price = $row['discounted_price'];
                $total_price = $quantity * $discounted_price;
                $sql6 = "INSERT INTO `detailbill` (bill_id, detailproduct_id, quantity, unit_price, total_price) 
                        VALUES  ($bill_id, $detailproduct_id, $quantity, $discounted_price, $total_price)";
                $this->_query($sql6);
            }
            if ($couponCode != "") {
                $sql8 = "INSERT INTO `applied_promotions` (promotion_code, user_id) 
                        VALUES ('$couponCode', $user_id)";
                $this->_query($sql8);
            }
            return true;
        }
    }
    //mã giảm giá, số lượng sản phẩm còn lại và số sản phẩm đã bán 
?>