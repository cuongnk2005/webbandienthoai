<?php 
    class AminContactForm extends Controller{
        private $data = [];
        private $AdminContactFormmodel;

        public function index() {
            $this->data["content"] = "admin/contact_form/index"; // Đường dẫn view
            $this->data["subcontent"]["contact_form"] =''   ; //
            $this->render('layout/layout_admin',  $this->data);
        }
        
    }
?>