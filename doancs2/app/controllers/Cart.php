<?php
class Cart extends Controller {
    private $data = [];
    private $Cartmodel;

    public function __construct() {
        $this->Cartmodel = $this->Model("Cartmodel"); // Tải model giỏ hàng
        if (!isset($_COOKIE['user_id'])) {
            echo json_encode(["login" => false]);
            exit(); // Dừng lại nếu chưa đăng nhập
        }
    }
    
    public function addProductToCart() {
        $user_id = $_COOKIE['user_id'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $detailproduct_id = $_POST["detailproduct_id"];
            $quantity = $_POST["quantity"];
             // Gọi model để xử lý thêm sản phẩm vào giỏ hàng
            $result = $this->Cartmodel->AddProductToCart($user_id, $detailproduct_id, $quantity);
            if (is_int($result)) {
                $success = false;
                $result = (int) $result;
                $message = "Bạn đã có $result sản phẩm này trong giỏ hàng. Không thể tiếp tục thêm $quantity sản phẩm này vào giỏ hàng vì vượt quá số lượng có sẵn.";
            } else if ($result) {
                $success = true;
                $message = "Sản phẩm đã được thêm vào giỏ hàng!. Vui lòng kiểm tra giỏ hàng của bạn.";
            } else {
                $success = false;
                $message = "Lỗi hệ thống. Không thể thêm sản phẩm vào giỏ hàng.";
            }
            echo json_encode([
                "login" => true,
                "success" => $success,
                "message" => $message
            ]); 
            exit(); // Dừng sau khi gửi phản hồi
        }
    }

    // 2. Hiển thị giỏ hàng
    public function index() {
        $user_id = $_COOKIE['user_id'];
        $this->data["content"] = "cart/index"; // Đường dẫn view
        $this->data["subcontent"]["cartItems"] = $this->Cartmodel->GetCartItems($user_id); // Lấy sản phẩm từ giỏ hàng
        $this->data["subcontent"]["CountCartItems"] = $this->Cartmodel->CountCartItems($user_id); // Đếm số lượng sản phẩm khác nhau trong giỏ hàng
        $this->render('layout/layout_client',  $this->data);
    }

    // 3. Cập nhật số lượng sản phẩm trong giỏ hàng
    public function UpdateProductCart() {
        $user_id = $_COOKIE['user_id'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $detailproduct_id = $_POST["detailproduct_id"];
            $newQuantity = $_POST["quantity"];
            $result = $this->Cartmodel->UpdateCartItem($detailproduct_id, $newQuantity, $user_id);
        }
    }


    // 4. Xóa 1 sản phẩm khỏi giỏ hàng
    public function removeSingleProductFromCart() {
        $user_id = $_COOKIE['user_id'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $detailproduct_id = $_POST["detailproduct_id"];
            $result = $this->Cartmodel->RemoveSingleProductFromCart($detailproduct_id, $user_id);
            echo json_encode([
                "quantity" => $result,
            ]);
            exit();        }
    }

    // 5. Xóa nhiều sản phẩm khỏi giỏ hàng
    public function removeMultipleProductsFromCart() {
        $user_id = $_COOKIE['user_id'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
             // Lấy mảng các ID sản phẩm muốn xóa
            $detailproduct_ids = $_POST["detailproduct_ids"];  
            $detailproduct_ids_str = implode(",", $detailproduct_ids); // Chuyển mảng thành chuỗi
            // Gọi model để xóa các sản phẩm
            $result = $this->Cartmodel->RemoveMultipleProductsFromCart($detailproduct_ids_str, $user_id); 
            echo json_encode([
                "quantity" => $result,
            ]);
            exit(); 
        }
    }

    // 7. Tính tổng tiền giỏ hàng
    public function GetCartTotal() {
        $total = $this->Cartmodel->GetCartTotal();
        echo json_encode(["success" => true, "total" => $total]);
    }

    // 8. Xử lý thanh toán
    public function Checkout() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $orderData = $_POST["order"]; // Thông tin người mua, địa chỉ giao hàng, v.v.

            $result = $this->Cartmodel->CreateOrder($orderData);

            if ($result) {
                echo json_encode(["success" => true, "message" => "Đơn hàng đã được tạo!"]);
            } else {
                echo json_encode(["success" => false, "message" => "Không thể tạo đơn hàng."]);
            }
        }
    }

    //9. Áp dụng mã giảm giá
    public function ApplyCoupon() {
        $user_id = $_COOKIE['user_id'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $couponCode = $_POST["couponCode"];
            $price_temporary = $_POST["price_temporary"];
            $promotion = $this->Cartmodel->checkCouponCode($couponCode, $user_id);
            if ($promotion && is_array($promotion)) {
                $discounted_price = $this->Cartmodel->applyDiscountToCart($promotion, $user_id, $price_temporary);
                if (is_numeric($discounted_price)) {
                    echo json_encode(["success" => true, "discounted_price" => (float)$discounted_price]);
                    exit();
                } else {
                    echo json_encode(["success" => false, "message" => $discounted_price]);
                    exit();
                }                
            } else {
                echo json_encode(["success" => false, "message" => $promotion]);
                exit();
            } 
        } 
    }
}
