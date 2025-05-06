<?php
class Dashboard extends Controller{
    private $data = [];
    function __construct(){
        $this->data['kq'] = "";
    }
public function index(){
   $this->data['page'] = 0;
    $this->render('admin/index',  $this->data);
}
public function adminbrand(){
    $this->render('admin/admin-branch',  $this->data);
}
public function admin_manager_recipt(){
    $this->render('admin/admin_manager_recipt',  $this->data);
}

public function feedback(){
    $this->render('admin/feedback',  $this->data);
}
public function admin_cancel_reciept(){
    $this->render('admin/admin_cancel_reciept',  $this->data);
}
public function adminProduct(){
    $this->render('admin/dataProduct',  $this->data);
}
public function adminUser(){
    $this->render('admin/dataUser',  $this->data);
}
}
?>