<?php 
    class About_us extends Controller{
        private $data = [];
        private $About_usmodel;

        public function index() {
            $this->data["content"] = "about_us/index"; // Đường dẫn view
            $this->data["subcontent"]["about_us"] =''   ; //
            $this->render('layout/layout_client',  $this->data);
        }
        
    }
?>