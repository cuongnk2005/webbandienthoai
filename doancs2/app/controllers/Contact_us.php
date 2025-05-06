<?php 
    class Contact_us extends Controller{
        private $data = [];
        private $Contact_usmodel;
        public function __construct() {
            $this->Contact_usmodel = $this->Model("Contact_usmodel"); // Tải model liên hệ
        }

        public function index() {
            $this->data["content"] = "contact_us/index"; // Đường dẫn view
            $this->data["subcontent"]["contact_us"] =''   ; //
            $this->render('layout/layout_client',  $this->data);
        }

        public function sendContactForm() {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $subject = $_POST["subject"];
                $message = $_POST["message"];
                $result = $this->Contact_usmodel->SendContactForm($name, $email, $phone, $subject, $message);
                if ($result) {
                    echo json_encode(["success" => true, "message" => "Gửi thông tin thành công"]);
                    exit();
                } else {
                    echo json_encode(["success" => false, "message" => "Gửi thông tin thất bại"]);
                    exit();
                }
            }
        }
        
    }
?> 
