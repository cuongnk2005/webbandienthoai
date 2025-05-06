<?php 
echo "đã khởi tại homemodel";
class Homemodel extends DB {
  protected $table = 'sanpham';


    public function index(){
    var_dump($this->conn);
    }
    public function detail( $id ){
      $data = [
        'item1',
      'item2', 
        'item3'
    ];
    return $data[ $id ];
}

}
  

?>