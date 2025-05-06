<?php

class product extends Controller {
    private $Productmodel;
    private  $danhmucmodel;
    private $data = [];

   public function __construct() {
    $this->Productmodel = $this->Model("Productmodel");
    $this->danhmucmodel = $this->Model('danhmucmodel');
    $this->data["subcontent"]['checkbox'] = -1;
   }
   function index(){
    $limit = 12;
    $start = 1;
    $this->data["content"] = 'product/product1';
    $this->data['subcontent']['pagecurrent'] = 0;
    $this->data['subcontent']['pagenumber'] = $this->Productmodel->totalpageForsp($limit);
    $this->data['subcontent']['brands'] = $this->Productmodel->getbrands();
    $this->data['subcontent']['dssp'] = $this->Productmodel->phantrangOfPr($limit,$start);
    // $this->data['subcontent']['danhmuc'] =  $this->danhmucmodel->getdanhmuc(['*'],['id'=>'desc'],10);
    $this->render('layout/layout_client',  $this->data);
   }

   function phantrang($start){
    $limit = 12;
    $ss = $_POST['request'];
    $this->data['pagecurrent'] = $start;
    $this->data['pagenumber'] = $this->Productmodel->totalpageForsp($limit,$ss);
    $this->data['dssp'] = $this->Productmodel->phantrangOfPr($limit,$start,$ss);
    // $this->data['subcontent']['danhmuc'] =  $this->danhmucmodel->getdanhmuc(['*'],['id'=>'desc'],10);
    $this->render('product/ajaxproduct',  $this->data);
    
   }
   
public function loadsp($ss){
    $this->data["content"] = 'product/product1';
    $this->data['subcontent']['brands'] = $this->Productmodel->getbrands();
    $this->data['subcontent']['pagecurrent'] = 0;
    $this->data['subcontent']['pagenumber'] = 2;
    $this->data["subcontent"]['checkbox'] =$ss;
    $this->render('layout/layout_client',  $this->data);
}
   public function show($id){
    echo '<br> đã gọi đến hàm này'; 
    echo $this->data['content'];

    $this->data['subcontent']['kq'] = $this->Productmodel->show($id);
    $this->render('layout/layout_client', $this->data);
   }
   public function getspByiddm($slug){
    $this->data["content"] = 'index';
    $this->data['subcontent']['kq'] = $this->Productmodel->getspBydanhmuc($slug);
    $this->data['subcontent']['danhmuc'] =  $this->danhmucmodel->getdanhmuc(['*'],['id'=>'desc'],10);
    $this->render('layout/layout_client',  $this->data);
   }
   public function create(){
    $this->data['subcontent']['kq'] = $this->Productmodel->create(
        ['tensp'=>'iphone 17', 'giacu' => 12345, 'giamoi'=>345, 'soluong'=> 10, 'iddanhmuc' =>2 , 'hinhanh'=>""]
    );
    $this->render('layout/layout_client', $this->data);
   }
   public function edit(){
    $this->data['subcontent']['kq'] = $this->Productmodel->edit(
        ['tensp'=>'iphone 15', 'giacu' => 12345, 'giamoi'=>345, 'soluong'=> 10, 'iddanhmuc' =>2 , 'hinhanh'=>""], 27
    );
    $this->render('layout/layout_client', $this->data);
   }
   public function delete(){
    $this->data['subcontent']['kq'] = $this->Productmodel->deleteById(27);
    $this->render('layout/layout_client', $this->data);
   }
   public function details($url) {
    $this->data["content"] = 'product/details';
    $ProductColor_id = isset($_GET['ProductColor_id']) ? intval($_GET['ProductColor_id']) : null;
    $path = parse_url($url, PHP_URL_PATH);
    $parts = explode('/', $path);
    $product_with_capacity = end($parts); // Lấy phần cuối URL (vd: 'iphone-14' hoặc 'oppo-reno-pro-5-256GB')
    
    // 2. Tách tên sản phẩm và dung lượng
    $product_parts = explode('-', $product_with_capacity); // Tách thành mảng các phần vd oppo-reno-pro-5-256GB => ['oppo', 'reno', 'pro', '5', '256GB']
    
    // Kiểm tra phần cuối có phải là dung lượng không
    $last_part = strtoupper(end($product_parts));// Lấy phần cuối của mảng và chuyển thành chữ hoa (vd: '256GB')
    if (preg_match('/^\d+(GB|TB)$/', $last_part)) {
        $internal_storage = array_pop($product_parts); // Nếu đúng định dạng dung lượng, lấy ra
    } else {
        $internal_storage = null; // Không có dung lượng, gán giá trị mặc định
    }
    
    // Ghép lại tên sản phẩm
    $name_product_url = implode(' ', $product_parts); // VD: "iphone 14" hoặc "oppo reno pro 5"    
    $name_product = $this->Productmodel->getProductNameByUrl($name_product_url);
    $this->data['subcontent']['product_name'] = $name_product;
    $product_type = $this->Productmodel->getProductTypeByName($name_product);
    $product_id = $this->Productmodel->getProductIdByName($name_product);
    if ($product_type == 2) {
        $this->data['subcontent']['product_images'] = $this->Productmodel->getPhoneImageByProductId($product_id);
        $this->data['subcontent']['product_color_id'] = $this->Productmodel->getPhoneColorIdByProductId($product_id);
        $this->data['subcontent']['product_generals'] = $this->Productmodel->getPhoneGeneralByProductId($product_id);//
        $this->data['subcontent']['product_colors'] = $this->Productmodel->getPhoneColorByProductId($product_id);//
        $this->data['subcontent']['product_internal_storage'] = $this->Productmodel->getPhoneInternalStorageByProductId($product_id);//
        $this->data['subcontent']['available_variants'] = $this->Productmodel->getProductVariantsByProductId($product_id);
        $this->data['subcontent']['product_highlight_feature'] = $this->Productmodel->getHighlightFeatureByProductId($product_id);//
        $this->data['subcontent']['product_reviews'] = $this->Productmodel->getAllReviewsByProductId($product_id);//
        $this->data['subcontent']['product_rating'] = $this->Productmodel->getRatingByProductId($product_id);//
        $this->data['subcontent']['product_numberOfReviews'] = $this->Productmodel->getNumberOfRewiewsByProductId($product_id);//
        $this->data['subcontent']['product_getStarRatingCounts']= $this->Productmodel->getStarRatingCounts($product_id);//
        if ($ProductColor_id) {
            $this->data['subcontent']['product_defaultoption'] = $this->Productmodel->getPhoneDefaultOptionlByPhoneColorID($ProductColor_id);//
        } else if (!$ProductColor_id && $internal_storage) {
            $this->data['subcontent']['product_defaultoption'] = $this->Productmodel->getPhoneDefaultOptionlByProductIdAndCapacity($product_id,$internal_storage);//
            
        } else {
            $this->data['subcontent']['product_defaultoption'] = $this->Productmodel->getPhoneDefaultOptionlByProductId($product_id);    //
        }
    }
    $this->render('layout/layout_client', $this->data);
}
    public function ajaxUpdateProduct(){
        $ProductColor_id = isset($_GET['ProductColor_id']) ? intval($_GET['ProductColor_id']) : null;
        $this->data['result'] = $this->Productmodel->ajaxUpdateProduct($ProductColor_id);
        $this->render('product/ajax_product_update', $this->data);

    }

    public function searchByName($start=1){
        $name  =$_POST['search'];
        $limit = 12;
        $ss = 'AND  product_name LIKE "%'.$name.'%"';
     
        $this->data["content"] = 'product/product1';
        $this->data['subcontent']['pagecurrent'] = $start - 1;
        $this->data['subcontent']['pagenumber'] = $this->Productmodel->totalpageForsp($limit,$ss);
        $this->data['subcontent']['brands'] = $this->Productmodel->getbrands();
        $this->data['subcontent']['dssp'] = $this->Productmodel->phantrangOfPr($limit,$start,$ss);
        $this->render('layout/layout_client',  $this->data);
       }
       public function searchByNameforDm( $name ,$start=1){
        $limit = 12;
        $ss = 'AND  product_name LIKE "%'.$name.'%"';
     
        $this->data["content"] = 'product/product1';
        $this->data['subcontent']['pagecurrent'] = $start - 1;
        $this->data['subcontent']['pagenumber'] = $this->Productmodel->totalpageForsp($limit);
        $this->data['subcontent']['brands'] = $this->Productmodel->getbrands();
        $this->data['subcontent']['dssp'] = $this->Productmodel->phantrangOfPr($limit,$start,$ss);
        $this->render('layout/layout_client',  $this->data);
       }
    
   }
?>