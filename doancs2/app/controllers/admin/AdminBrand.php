<?php
class AdminBrand extends Controller{
    private $data = [];
    private $BrandsModel;
    function __construct()
    {
        $this->data['kq'] = "";
        $this->BrandsModel = $this->Model("Brands");
    }
    public function index(){
        $slpr = [];
      $this->data['brands'] = $this->BrandsModel->getBrands();
     
      $brands = $this->BrandsModel->getBrands();
      while($brand = mysqli_fetch_array($brands)){
      $total=  $this->BrandsModel->getAmoutpr($brand['brand_id']);
        $total = mysqli_fetch_array($total);
        if($total['total']  == 0){
            array_push($slpr,0 );
        } else {
            array_push($slpr,$total['total'] );
        }
       
      }
      
      $this->data['slpr'] = $slpr;
      $this->render('admin/admin-branch',$this->data);
    }
 
}

?>