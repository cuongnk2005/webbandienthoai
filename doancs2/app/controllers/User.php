<?php 
class User extends Controller{
    private $data = [];
    private $Usermodel;
    public function __construct() {
        $this->Usermodel = $this->Model('Usermodel');

    }
    // Phương thức lấy thông tin người dùng
    public function index() {
        $this->data["content"] = 'account/profile'; // Đường dẫn tới view profile
        // Lấy user_id từ cookie (đảm bảo người dùng đã đăng nhập)
        $userId = $_COOKIE['user_id'];
        
        // Lấy thông tin người dùng từ model
        $user = $this->Usermodel->getUserById($userId);

        // Truyền dữ liệu vào view
        $this->data['subcontent']['user'] = $user;
        $this->render('layout/layout_client', $this->data);
        
    }
    // Phương thức cập nhật thông tin
    public function updateProfile() {
        $this->data["content"] = 'account/profile'; // Đường dẫn tới view update_profile
        // Lấy user_id từ cookie (đảm bảo người dùng đã đăng nhập)
        $userId = $_COOKIE['user_id'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $fullname = $_POST['fullname'];
            $delivery_address = $_POST['delivery_address'];
            // Gọi hàm updateProfile từ model và nhận kết quả
            $result = $this->Usermodel->UpdateUserProfileById($userId, $email, $phone, $address, $fullname, $delivery_address);
            // Trả kết quả về AJAX
            echo json_encode($result);
            exit(); // Dừng lại để không tiếp tục các xử lý khác
        }
        $this->render('layout/layout_client', $this->data);
        
    }
    // Phương thức thay đổi mật khẩu
    public function changePassword() {
        $this->data["content"] = 'account/changePassword'; // Đường dẫn tới view change_password
        // Lấy user_id từ cookie (đảm bảo người dùng đã đăng nhập)
        $userId = $_COOKIE['user_id'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $oldPassword = $_POST['current_password'];
            $newPassword = $_POST['new_password'];
            // Gọi hàm changePassword từ model và nhận kết quả
            $result = $this->Usermodel->changePassword($userId, $oldPassword, $newPassword);
            // Trả kết quả về AJAX
            echo json_encode($result);
            exit(); // Dừng lại để không tiếp tục các xử lý khác
        } else $this->data['subcontent']['kq'] = "";
        $this->render('layout/layout_client', $this->data);
        
    }
    public function logout(){
        setcookie('admin_id', '', time() - 360000, "/");
        setcookie('user_id', '', time() - 360000, "/");
        setcookie('user_name', '', time() - 360000, "/");
        header('location: '._WEB_ROOT_.'/home');
        exit();
    }
   
}
?>