<?php
class Home extends Controller{
  private $data = [];
  private $productModel;
 public function __construct() {
  $this->productModel = $this->Model('Productmodel');
}
  function index(){

  $this->data["content"] = 'index';
  $this->data['subcontent']['kq'] = $this->productModel->getsp();
  $this->data['subcontent']['sanphambanchay'] = $this->productModel->getspbanchay();
  $this->data['subcontent']['spkm'] = $this->productModel->getspkhuyenmai();
  $this->data['subcontent']['brands'] = $this->productModel->getbrands();
  $this->render('layout/layout_client',  $this->data); 
     }

    }
?>