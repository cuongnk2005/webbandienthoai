
<?php
class Person extends Controller {
    public $model;
function __construct() {
$this->model = $this->Model("Personmodel");
}
public function index() {
echo '<br> đây là index của Person';
}
public function infor() {
    $data = [];
    $data["content"] = "person/person";
    $data["subcontent"]['subcontent'] = $this->model; 
$this->render('layout/layout_client', $data);
}
public function getsanpham(){
    $model = $this->Model('Sanphammodel');
    $data = [];
    $data['content'] = 'person/person';
    $data['subcontent']['kq'] =$model->getsp();
    echo '<pre>';
    print_r($data['subcontent']['kq']);
    echo '</pre>';
    $this->render('layout/layout_client', $data);

}
}

?>