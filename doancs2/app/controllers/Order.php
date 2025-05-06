<?php 
class Order extends Controller {
    private $data = [];
    private $orderModel;
    public function __construct() {
        $this->orderModel = $this->Model('Ordermodel');
        if (!isset($_COOKIE['user_id'])) {
            echo json_encode(["login" => false]);
            exit(); // Dừng lại nếu chưa đăng nhập
        }
    }
    public function index(){
        $user_id = $_COOKIE['user_id'];
        $this->data["content"] = 'order/index';
        $this->data["subcontent"]["order"] = $this->orderModel->GetOdersByUserId($user_id);
        $this->render('layout/layout_client',  $this->data);
    }

    public function getOrderDetail(){
        $user_id = $_COOKIE['user_id'];
        $this->data["content"] = 'order/orderDetail';
        $order_id = $_GET['order_id'];
        $this->data["subcontent"]["orderDetail"] = $this->orderModel->getOrderDetailByOrderId($user_id,$order_id);
        $this->data["subcontent"]["order_item"] = $this->orderModel->getOrderItemByOrderId($order_id);
        $this->render('layout/layout_client',  $this->data);
    }

    public function UpdateReceiverInfo(){
        $user_id = $_COOKIE['user_id'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $order_id = $_GET['order_id'];
            $receiverName = $_POST["receiver_name"];
            $receiverPhone = $_POST["receiver_phone"];
            $receiverAddress = $_POST["shipping_address"];
            $result = $this->orderModel->UpdateReceiverInfo($order_id,$user_id, $receiverName, $receiverPhone, $receiverAddress);
            if ($result) {
                $success = true;
                $message = "Cập nhật thông tin người nhận thành công!";
            } else {
                $success = false;
                $message = "Lỗi hệ thống. Không thể cập nhật thông tin người nhận.";
            }
            echo json_encode([
                "success" => $success,
                "message" => $message
            ]);
        }
    }
    public function cancelOrder(){
        $user_id = $_COOKIE['user_id'];
        $order_id = $_POST['order_id'];
        $result = $this->orderModel->cancelOrder($order_id,$user_id);
        if ($result) {
            $success = true;
            $message = "Hủy đơn hàng thành công!";
        } else {
            $success = false;
            $message = "Lỗi hệ thống. Không thể hủy đơn hàng.";
        }
        echo json_encode([
            "success" => $success,
            "message" => $message
        ]);
    }

    
} 
?>