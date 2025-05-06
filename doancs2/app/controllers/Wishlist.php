<?php 
    class wishlist extends Controller{
        private $data = [];
        private $Wishlistmodel;

        public function __construct() {
            $this->Wishlistmodel = $this->Model("Wishlistmodel"); // Tải model giỏ hàng
            if (!isset($_COOKIE['user_id'])) {
                echo json_encode(["login" => false]);
                exit(); // Dừng lại nếu chưa đăng nhập
            }
        }

        public function index() {
            $user_id = $_COOKIE['user_id'];
            $this->data["content"] = "wishlist/index"; // Đường dẫn view
            $this->data["subcontent"]["wishlistItems"] = $this->Wishlistmodel->GetWishlistItems($user_id); // Lấy sản phẩm từ giỏ hàng
            $this->data["subcontent"]["CountWishlistItems"] = $this->Wishlistmodel->CountWishlistItems($user_id); // Đếm số lượng sản phẩm khác nhau trong giỏ hàng
            $this->render('layout/layout_client',  $this->data);
        }
        
        public function AddProductToWishlist() {
            $user_id = $_COOKIE['user_id'];
            $detailproduct_id = $_POST['detailproduct_id'];
            $kt = $this->Wishlistmodel->CheckProductInWishlist($user_id, $detailproduct_id); // Kiểm tra sản phẩm đã có trong danh sách sản phẩm ưa thích chưa chưa 
            if ($kt) {
                echo json_encode(["success" => false, "message" => "Sản phẩm đã có trong danh sách yêu thích"]);
                exit();
            }else {
                $kq = $this->Wishlistmodel->AddProductToWishlist($user_id, $detailproduct_id); // Thêm sản phẩm vào giỏ hàng
                if ($kq) {
                    echo json_encode(["success" => true, "message" => "Sản phẩm đã được thêm vào danh sách yêu thích"]);
                    exit();
                } else {
                    echo json_encode(["success" => false, "message" => "Thêm sản phẩm vào danh sách yêu thích thất bại"]);
                    exit();
                }
            }  
        }

        public function DeleteProductFromWishlist() {
            $user_id = $_COOKIE['user_id'];  // Lấy user_id từ cookie
            $detailproduct_id = $_POST['detailproduct_id'];  // Lấy id sản phẩm từ dữ liệu gửi đi
        
            // Thực hiện xóa sản phẩm khỏi wishlist
            $kq = $this->Wishlistmodel->DeleteProductFromWishlist($user_id, $detailproduct_id);
        
            if ($kq){
                $newCount = $this->Wishlistmodel->CountWishlistItems($user_id); // Lấy sản phẩm từ giỏ hàng
                echo json_encode(["success" => true, "message" => "Xóa sản phẩm khỏi danh sách yêu thích thành công", "newCount" => $newCount]);
                exit();
            } else {
                echo json_encode(["success" => false, "message" => "Xóa sản phẩm khỏi danh sách yêu thích thất bại"]);
                exit();
            }
        }
        
    }
?>