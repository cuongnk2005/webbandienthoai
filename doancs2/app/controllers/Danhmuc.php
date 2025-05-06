<?php
class Danhmuc extends Controller {
    private $data;
    private $danhmucModel;
    public function __construct() {
        $this->data["content"] = 'product/list';
        $this->danhmucModel = $this->Model("danhmucmodel");
       }
       public function index($id){
        echo "gọi tới hàm index $id";
       }
}
?>