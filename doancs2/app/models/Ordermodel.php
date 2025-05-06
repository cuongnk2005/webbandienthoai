<?php
class Ordermodel extends BaseModel{
    public function GetOdersByUserId($user_id){
        $sql = "SELECT * FROM `order`
                WHERE user_id = $user_id";
        return $this->_query($sql);
    }
    public function getOrderDetailByOrderId($user_id,$order_id){
        if ($user_id == '') {
            $sql = "SELECT * FROM `order`
                LEFT JOIN `order_item` ON `order`.order_id = `order_item`.order_id
                JOIN bill ON bill.order_id = order.order_id
                WHERE order.order_id = $order_id";
        } else {
            $sql = "SELECT * FROM `order`
                LEFT JOIN `order_item` ON `order`.order_id = `order_item`.order_id
                JOIN bill ON bill.order_id = order.order_id
                WHERE order.user_id = $user_id AND order.order_id = $order_id";
        }
        return $this->_query($sql);
    }

    public function getOrderDetailByOrderIds($user_id,$order_id){
        if ($user_id == '') {
            $sql = "SELECT * FROM `order`
                LEFT JOIN `order_item` ON `order`.order_id = `order_item`.order_id
                JOIN bill ON bill.order_id = order.order_id
                WHERE order.order_id = $order_id";
        } else {
            $sql = "SELECT * FROM `order`
                LEFT JOIN `order_item` ON `order`.order_id = `order_item`.order_id
                JOIN bill ON bill.order_id = order.order_id
                WHERE order.user_id = $user_id AND order.order_id = $order_id";
        }
        $kq= $this->_query($sql);
        return mysqli_fetch_assoc($kq);
    }
    public function getOrderItemByOrderId($order_id){
        $sql = "SELECT * FROM `order_item`
                JOIN detailproduct ON detailproduct.id = order_item.detailproduct_id
                JOIN phoneoptions ON phoneoptions.specificphone_id = detailproduct.specificphone_id
                JOIN product ON product.product_id = phoneoptions.product_id
                WHERE order_id = $order_id";
        return $this->_query($sql);
    }

    public function getOrderItemByOrderIds($order_id){
        $sql = "SELECT * FROM `order_item`
                JOIN detailproduct ON detailproduct.id = order_item.detailproduct_id
                JOIN phoneoptions ON phoneoptions.specificphone_id = detailproduct.specificphone_id
                JOIN product ON product.product_id = phoneoptions.product_id
                WHERE order_id = $order_id";
    $kq= $this->_query($sql);
    $orderItems = [];
    while ($row = mysqli_fetch_array($kq)) {
        $orderItems[] = $row; // Thêm mỗi hàng vào mảng kết quả
    }
    return $orderItems;
    }

    public function UpdateReceiverInfo($order_id,$user_id, $receiverName, $receiverPhone, $receiverAddress){
        $sql = "UPDATE `order` SET receiver_name = '$receiverName', receiver_phone = '$receiverPhone', shipping_address = '$receiverAddress' WHERE order_id = $order_id AND user_id = $user_id";
        return $this->_query($sql);
    }

    public function cancelOrder($order_id,$user_id){
        $sql = "UPDATE `order` SET status = 'Đã hủy' WHERE order_id = $order_id AND user_id = $user_id";
        return $this->_query($sql);
    }

    public function GetAllOrders(){
        $sql = "SELECT * FROM `order`";
        return $this->_query($sql);
    }

    public function updateOrderStatus($order_id, $status){
        $sql = "UPDATE `order` SET status = '$status' WHERE order_id = $order_id";
        return $this->_query($sql);
    }

    public function getOrdersCancle(){
        $sql = "SELECT * FROM `order` WHERE status = 'Đã hủy'";
        return $this->_query($sql);
    }

    public function getDetailProductById($detailproduct_id){
        $sql = "SELECT * FROM detailproduct WHERE id = $detailproduct_id";
        $kq = $this->_query($sql);
        return mysqli_fetch_assoc($kq);
    }

    public function updateDetailProductAmountAndSold($detailproduct_id, $newAmount, $newSold){
        $sql = "UPDATE detailproduct SET amout = $newAmount, sold = $newSold WHERE id = $detailproduct_id";
        return $this->_query($sql);
    }



    
}
?>