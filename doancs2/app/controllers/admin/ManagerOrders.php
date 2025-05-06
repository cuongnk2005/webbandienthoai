<?php 
class ManagerOrders extends Controller {
    private $data = [];
    private $orderModel;
    public function __construct() {
        $this->orderModel = $this->Model('Ordermodel');
        if (!isset($_COOKIE['admin_id'])) {
            echo json_encode(["login" => false]);
            exit(); // Dừng lại nếu chưa đăng nhập
        }
    }
    public function index(){
        $this->data["getAllOrders"] = $this->orderModel->GetAllOrders();
        $this->render('admin/admin_manager_recipt',  $this->data);
    }

    public function getOrderDetailByOrderId(){
        $this->data["content"] = 'order/orderDetail';
        $order_id = $_GET['order_id'];
        $user_id = '';

        $orderDetail= $this->orderModel->getOrderDetailByOrderIds($user_id,$order_id);
        $orderItems = [];
        $orderItems = $this->orderModel->getOrderItemByOrderIds($order_id);
        // Trả về dữ liệu JSON
        echo json_encode([
            'orderDetail' => $orderDetail,
            'orderItems' => $orderItems,
        ]);
        exit;
    }

   
    public function updateOrderStatus(){
        $order_id = $_POST['order_id'];
        $status = $_POST['status'];
        // Lấy danh sách sản phẩm trong đơn hàng thông qua bảng order_item
        $orderItems = $this->orderModel->getOrderItemByOrderIds($order_id); // Truy vấn order_item theo order_id
        foreach ($orderItems as $item) {
            $detailproduct_id = $item['detailproduct_id'];  // ID sản phẩm từ bảng order_item
            $quantity_ordered = $item['quantity'];  // Số lượng đặt của sản phẩm
    
            // Lấy thông tin sản phẩm từ bảng detailproduct
            $detailproduct = $this->orderModel->getDetailProductById($detailproduct_id);  // Truy vấn bảng detailproduct theo detailproduct_id
    
            // Cập nhật lại số lượng và số lượng đã bán
            $newAmount = $detailproduct['amout'] - $quantity_ordered;  // Tính số lượng còn lại
            $newAmount = ($newAmount < 0) ? 0 : $newAmount;  // Nếu số lượng còn lại < 0 thì đặt bằng 0
    
            $newSold = $detailproduct['sold'] + $quantity_ordered;  // Tính số lượng đã bán
    
            // Cập nhật lại thông tin trong bảng detailproduct
            $this->orderModel->updateDetailProductAmountAndSold($detailproduct_id, $newAmount, $newSold);
        }
        
        $kq=$this->orderModel->updateOrderStatus($order_id, $status);
        if ($kq) {
            echo json_encode(["success" => true, "status => $status"]);
        } else {
            echo json_encode(["status" => false, "status => $status"]);
        }
    }

    public function getOrdersCancle(){
        $this->data["getOrdersCancle"] = $this->orderModel->getOrdersCancle();
        $this->render('admin/admin_cancel_reciept',  $this->data);
    }
}

?>