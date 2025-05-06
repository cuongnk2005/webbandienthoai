<?php 
class Auth extends Controller {
    private $data = [];
    private $authModel;
   public function __construct() {
    $this->authModel = $this->Model('authModel');
    $this->data['subcontent']['kq'] = "true";
  }
  public function login(){
    $this->data["content"] = 'auth/login';
    $this->render('layout/layout_client',  $this->data);
  }
  public function signup() {
    $this->data["content"] = 'auth/signup';

    // Kiểm tra nếu có yêu cầu POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $fullname = $_POST['fullname'];

        // Gọi hàm registerUser từ model và nhận kết quả
        $result = $this->authModel->registerUser($username, $password, $email, $phone, $address, $fullname);
        // Trả kết quả về AJAX
        echo json_encode($result);
        exit(); // Dừng lại để không tiếp tục các xử lý khác
    }

    // Nếu không phải POST, render trang signup
    $this->render('layout/layout_client', $this->data);
  }
  public function dangnhap(){
    $user = $_POST['user'];
    $password = $_POST['password'];
    $check = $this->authModel->checkdangnhap($user, $password);
    if($check){
        if ($check['username'] == 'admin' && $check['password'] == '123') {
            setcookie('admin_id', $check['id'], time() + 360000, "/");
        }
        setcookie('user_id', $check['id'], time() + 360000, "/");
        setcookie('user_name', $check['username'], time() + 360000, "/");
        header('location: '._WEB_ROOT_.'/home');
        exit();
    }else {
      $this->data["content"] = 'auth/login';
      $this->data['subcontent']['kq'] ='false';
      $this->render('layout/layout_client',  $this->data); 
    }
  }

}

?>

