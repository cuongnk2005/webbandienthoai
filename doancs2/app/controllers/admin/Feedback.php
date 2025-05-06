<?php
    class Feedback extends Controller{
        private $data = [];
        private $Feedbackmodel;

        public function __construct() {
            $this->Feedbackmodel = $this->model('Feedbackmodel');
        }

        public function index() {
            $this->data["getAllFeedback"] = $this->Feedbackmodel->getAllFeedback();
            $this->render('admin/feedback',  $this->data);
        }

        public function deleteFeedback() {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id = $_POST["id"];
                $result = $this->Feedbackmodel->deleteFeedback($id);
                if ($result) {
                    echo json_encode(["success" => true, "message" => "Xóa thông tin thành công"]);
                    exit();
                } else {
                    echo json_encode(["success" => false, "message" => "Xóa thông tin thất bại"]);
                    exit();
                }
            }
        }
    }
?>