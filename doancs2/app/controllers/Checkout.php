<?php
class Checkout extends Controller {
    private $data = [];
    private $checkoutModel;
    public function __construct() {
        $this->checkoutModel = $this->Model('Checkoutmodel');
        $this->data['subcontent']['kq'] = "true";
    }
    public function index(){
        $user_id = $_COOKIE['user_id'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $selectedCartItemIds = isset($_POST['selectedCartItemIds']) ? $_POST['selectedCartItemIds'] : [];
            $couponCode = isset($_POST['couponCode']) ? $_POST['couponCode'] : "";
            $discountValue = isset($_POST['discountValue']) ? $_POST['discountValue'] : 0;            
        }
        $this->data["content"] = 'checkout/index';
        $this->data["subcontent"]["SelectedCartItems"] = $this->checkoutModel->GetSelectedCartItems($selectedCartItemIds);
        $this->data["subcontent"]["discountValue"] = $discountValue;
        $this->data["subcontent"]["couponCode"] = $couponCode;
        $this->data["subcontent"]["information_customer"] = $this->checkoutModel->GetInformationCustomer($user_id);
        $this->render('layout/layout_client',  $this->data);
    }
    public function addOrderAndBill(){
        $user_id = $_COOKIE['user_id'];
    
        // Kiểm tra xem phương thức yêu cầu có phải là POST không
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Lấy các giá trị từ form
            $receiverName = isset($_POST['receiver_name']) ? $_POST['receiver_name'] : '';
            $receiverEmail = isset($_POST['receiver_email']) ? $_POST['receiver_email'] : '';
            $receiverPhone = isset($_POST['receiver_phone']) ? $_POST['receiver_phone'] : '';
            $payment_method = isset($_POST['payment_method']) ? $_POST['payment_method'] : '';
            $delivery_method = isset($_POST['delivery_method']) ? $_POST['delivery_method'] : '';
            
            // Xử lý shipping_address và delivery_type
            if ($delivery_method == 'Nhận hàng tại cửa hàng') {
                $shipping_address = "";
                $delivery_type = '';
            } else {
                $shipping_address = isset($_POST['shipping_address']) ? $_POST['shipping_address'] : '';
                $delivery_type = isset($_POST['delivery_type']) ? $_POST['delivery_type'] : '';
            }
            
            $note = isset($_POST['note']) ? $_POST['note'] : '';
            $couponCode = isset($_POST['couponCode']) ? $_POST['couponCode'] : '';
            
            // Kiểm tra và xử lý orderItemsId
            if (isset($_POST['orderItemsId']) && is_array($_POST['orderItemsId']) && count($_POST['orderItemsId']) > 0) {
                $orderItemsIdString = '(' . implode(', ', $_POST['orderItemsId']) . ')';
            } else {
                // Nếu không có items trong giỏ hàng, có thể đưa ra thông báo lỗi
                echo json_encode(["success" => false, "message" => "Không có sản phẩm trong giỏ hàng."]);
                return;
            }
            // Các giá trị khác
            $shipping_fee = isset($_POST['shipping_fee']) ? $_POST['shipping_fee'] : 0;
            $discount_value = isset($_POST['discount_value']) ? $_POST['discount_value'] : 0;
            $total_before_shipping_fee = isset($_POST['total_before_shipping_fee']) ? $_POST['total_before_shipping_fee'] : 0;
            $total_payment = isset($_POST['total_payment']) ? $_POST['total_payment'] : 0;   
           
            // Gọi phương thức để thêm đơn hàng và hóa đơn
            $result = $this->checkoutModel->AddOrderAndBill($user_id, $receiverName, $receiverEmail, $receiverPhone, $shipping_address, $payment_method, $delivery_method, $delivery_type, $note, $shipping_fee, $discount_value, $total_before_shipping_fee, $total_payment, $orderItemsIdString, $couponCode);
                
            // Kiểm tra kết quả và trả về phản hồi JSON
            if ($result) {
                echo json_encode(["success" => true]);
                exit();
            } else {
                echo json_encode(["success" => false]);
                exit();
            }
        }
    }
    
}
?>