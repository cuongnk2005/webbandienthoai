<?php
class AdminProduct extends Controller
{
    private $data = [];
    private $Productmodel;
    private $Brands;
    private $HDH;

    function __construct()
    {
        $this->data['kq'] = "";
        $this->Productmodel = $this->Model("Productmodel");
        $this->Brands = $this->Model("Brands");
        $this->HDH = $this->Model("HDH");
    }
    public function adminProduct($start = 1)
    {

        $limit = 10;
        $this->data['pagecurrent'] = $start - 1;
        $this->data['pagenumber'] = $this->Productmodel->totalpage($limit);

        // $this->data['brands'] = $this->Productmodel->getbrands();
        // $ss = 'ORDER BY '
        $this->data['dssp'] = $this->Productmodel->phantrang($limit, $start, );

        $brands = $this->Brands->getBrands();
        $op = $this->HDH->getHDH();
        $br = [];
        $hdh = [];
        while ($row = mysqli_fetch_array($brands)) {
            $br[$row['brand_id']] = $row['brand_name'];
        }
        while ($row = mysqli_fetch_array($op)) {
            $hdh[$row['id_system']] = $row['name'];
        }
        $this->data['hdh'] = $hdh;
        $this->data['brands'] = $br;

        $this->render('admin/dataProduct', $this->data);

    }
    public function ajaxAdmin($page)
    {
        $limit = 10;
        $this->data['pagecurrent'] = $page - 1;
        $this->data['pagenumber'] = $this->Productmodel->totalpage($limit);
        $this->data['dssp'] = $this->Productmodel->phantrang($limit, $page);
        $brands = $this->Brands->getBrands();
        $op = $this->HDH->getHDH();
        $br = [];
        $hdh = [];
        while ($row = mysqli_fetch_array($brands)) {
            $br[$row['brand_id']] = $row['brand_name'];
        }
        while ($row = mysqli_fetch_array($op)) {
            $hdh[$row['id_system']] = $row['name'];
        }
        $this->data['hdh'] = $hdh;
        $this->data['brands'] = $br;
        $this->render('admin/ajax/ajaxAdminproduct', $this->data);
    }
    public function addProduct()
    {
        $this->data['brands'] = $this->Brands->getBrands();
        $this->render('admin/formAddProduct', $this->data);
    }

    public function uppdateProduct($id)
    {

        $this->data['brands'] = $this->Brands->getBrands();
        $this->data['dssp'] = $this->Productmodel->getspByid($id);
        $this->data['dssp1'] = $this->Productmodel->getspByid($id);
        $this->data['phoneOption'] = $this->Productmodel->getPhoneOptionByidPr($id);
        $this->render('admin/formUpdate', $this->data);
    }
    public function ajaxAddproduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $productIf = json_decode($_POST['productIf'], true);
            $phoneoptions = json_decode($_POST['phoneoptions'], true);
            $pathimage = [];
            
            if (isset($_FILES['files'])) {
                $files = $_FILES['files'];
                if(empty($productIf['product_name'])){
                    echo "vui lòng nhập tên sản phẩm";
                    return;
                }
                
                        $product = [];
                         if(empty($productIf['HighlightFeature'])){
                            echo "vui lòng nhập mô tả sản phẩm";
                            return;
                        } else if(empty($productIf['generalphone']['screen_size'])){
                            echo "vui lòng nhập kích thước màn hình";
                            return;
                        }else if(empty($productIf['generalphone']['rear_camera'])){
                            echo "vui lòng nhập thông tin camera sau";
                            return;
                        }else if(empty($productIf['generalphone']['front_camera'])){
                            echo "vui lòng nhập thông tin camera trước";
                            return;
                        } else if(empty($productIf['generalphone']['display_technology'])){
                            echo "vui lòng nhập công nghệ màn hình";
                            return;
                        }else if(strlen(($productIf['generalphone']['ram']))== 2){
                            echo "vui lòng nhập thông tin RAM";
                            return;
                        }else if(empty($productIf['generalphone']['screen_resolution'])){
                            echo "vui lòng nhập độ phân giải màn hình";
                            return;
                        }else if(strlen($productIf['generalphone']['refresh_rate']) == 2){
                            echo "vui lòng nhập tần số quét";
                            return;
                        }else if(empty($productIf['generalphone']['chipset'])){
                            echo "vui lòng nhập thông tin chip xử lý";
                            return;
                        }else if(strlen(($productIf['generalphone']['battery']))== 3){
                            echo "vui lòng nhập thông tin pin";
                            return;
                        }else if(empty($productIf['generalphone']['usage_need'])){
                            echo "vui lòng nhập thông tin nhu cầu sử dụng";
                            return;
                        }
                        $path = str_replace(' ', '', $productIf['product_name']);
                        $dir = _DIR_ROOT . '/public/asset/images/product1/' . $path;
                        if (!file_exists($dir)) {
                            mkdir($dir, 0777, true);
                            $dirroot = $dir . '/';
                            $pathimage = $this->handleFiles($files, $dirroot, $path);
        
                            if (is_string($pathimage)) {
                                $this->deleteFolder($dir);
                                echo $pathimage;
                                echo "vui lòng nhập ảnh";
                                return;
                            } else {
                        array_push($product, $productIf['product_name'], $productIf['brand_id'], $productIf['type_id'], $productIf['HighlightFeature']);
                        $newid = $this->Productmodel->addProduct($product);
                        $idGeneralphone = $this->Productmodel->addGeneralphone($newid, $productIf['generalphone']);
                       
                        for ($i = 0; $i < count($phoneoptions); $i++) {
                           $numbercolor =  $this->Productmodel->addPhoneoption($idGeneralphone, $phoneoptions[$i], $pathimage);
                           $pathimage = array_slice($pathimage, $numbercolor);
                        }
                        echo 'bạn đã thêm thành công';
                    }
                } else {
                    echo 'tên sản phẩm đã tồn tại';
                }
            } else {
                echo 'ko thấy file';
            }




        }


    }
    public function ajaxDeletePr($id)
    {
        $product = $this->Productmodel->getspByid($id);
        $product = mysqli_fetch_array($product);
        if (isset($product['image'])) {
            $folderimage = $product['image'];
            $arr = explode("/", $folderimage);
            $folderimage = _DIR_ROOT . '/public/asset/images/product1/' . $arr[0];
            if (file_exists( $folderimage)) {
                $this->deleteFolder($folderimage);
            }

        }   

        $kq = $this->Productmodel->deletePrByid($id);

        if ($kq) {
            echo 'bạn đã xóa thành công';
        } else {
            echo "bạn đã xóa thất bại";
        }
    }
    public function ajaxUpdateGeneralproduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $productIf = json_decode($_POST['productIf'], true);
            $product = [];
            array_push($product, $productIf['product_name'], $productIf['type_id'], $productIf['brand_id'], $productIf['HighlightFeature']);
            $kq = $this->Productmodel->updateProduct($product, $productIf['product_id']);
            $kq1 = $this->Productmodel->updateGeneralPhone($productIf['product_id'], $productIf['generalphone']);
            if ($kq1== true || $kq == true) {
                echo 'cập nhật thành công';
            } else {
                echo 'cap nhật thất bại';
            }
        }
        // $idGeneralphone = $this->Productmodel->addGeneralphone($newid, $productIf['generalphone']);

    }


    public function deletePhoneOption($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product_Id = $_POST['productid'];
            $kq = $this->Productmodel->deletePhoneOption($id);
            // if ($kq) {
            //     echo 'bạn đã cập nhật thành công';
            // } else {
            //     echo 'cập nhật thất bại';
            // }
            $this->data['dssp'] = $this->Productmodel->getspByid($product_Id);
            $this->render('admin/ajax/ajaxdeletePhoneOption', $this->data);
        }

    }
    public function getInfPhoneOption($id)
    {
        $this->data['detailProduct'] = $this->Productmodel->getDetailProductbyID($id);
        $idp = $this->Productmodel->getIdOfPhoneOptionbyDetailId($id);
        $this->data['phoneOption'] = $this->Productmodel->getPhoneOptionByid($idp);
        $this->render('admin/ajax/updatePhoneOption', $this->data);
    }
    public function updateDetailPr()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product_Id = $_POST['id'];
            $amout = $_POST['amout'];
            $color = $_POST['color'];
            $discounted_price = $_POST['discounted_price'];
            $original_price = $_POST['original_price'];
            $pathnewimage = "";
            $kqUpdatePhoneOption = $this->Productmodel->updatePhoneoption($product_Id, $original_price, $discounted_price);
            $detail = $this->Productmodel->getDetailProductbyID($product_Id);
            $detail = mysqli_fetch_array($detail);
            $pathimage = $detail['image'];
            if (isset($_FILES['file'])) {
                $files = $_FILES['file'];
                $imagearr = explode("/", $pathimage);
                $filefirst = _DIR_ROOT . '/public/asset/images/product1/' . $pathimage;
                if (file_exists($filefirst)) {
                    unlink($filefirst);
                }
                $pathnewimage = $this->handelfile($files, $imagearr[0]);

                $kq = $this->Productmodel->updateDetailProduct($color, $pathnewimage, $amout, $product_Id);
            } else {
                $kq = $this->Productmodel->updateDetailProduct($color, $pathimage, $amout, $product_Id);

            }
            if ($kq == true || $kqUpdatePhoneOption == true) {
                echo 'cập nhật thành công';
            } else {
                echo 'cap nhật thất bại';
            }
        }
    }
    public function addDetailPr()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product_Id = $_POST['id'];
            $specificphone_id = $_POST['specificphone_id'];
            $amout = $_POST['amout'];
            $color = $_POST['color'];
            $pathnewimage = "";
            $detail = $this->Productmodel->getspByiD($product_Id);
            $detail = mysqli_fetch_array($detail);
            $pathimage = $detail['image'];

            if (isset($_FILES['file'])) {
                echo "jhhahaha";
                $files = $_FILES['file'];
                $imagearr = explode("/", $pathimage);
                $pathnewimage = $this->handelfile($files, $imagearr[0]);
                echo $pathnewimage;
                $this->Productmodel->addDetailPr($specificphone_id, $color, $pathnewimage, $amout);
            }
        }
    }
    public function updateListdetailPr($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product_Id = $_POST['productid'];
            $this->data['dssp'] = $this->Productmodel->getspByid($id);
            $this->render('admin/ajax/ajaxdeletePhoneOption', $this->data);
        }
    }

    public function handelfile($file, $folder)
    {
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $dir = _DIR_ROOT . '/public/asset/images/product1/' . $folder . '/';
        if ($fileError == 0) {
            $fileExtention = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $fileNewname = uniqid("img_", true) . '.' . $fileExtention;
            $uploadDirectory = $dir . $fileNewname;
            $uploadOk = 1;
            if ($fileSize > 4194304) {
                $uploadOk = 0;
                $error = 'Sorry, your file  is too large.';
                return $error;

            }
            if ($uploadOk == 0) {
                echo "sory, file not upload";
            } else {
                if (move_uploaded_file($fileTmpName, $uploadDirectory)) {

                    return $folder . '/' . $fileNewname;
                }

            }
        }
        return $uploadDirectory;

    }
    public function handleFiles($files, $dir, $folder)
    {
        $pathimage = [];
        $error = "";
        for ($i = 0; $i < count($files['name']); $i++) {
            $fileName = $files['name'][$i]; // Tên tệp gốc
            $fileTmpName = $files['tmp_name'][$i]; // Đường dẫn tạm thời
            $fileSize = $files['size'][$i]; // Kích thước tệp
            $fileError = $files['error'][$i]; // Lỗi
            if ($fileError == 0) {
                $fileExtention = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

                $fileNewname = uniqid("img_", true) . '.' . $fileExtention;
             
                $uploadDirectory = $dir . $fileNewname;

                $uploadOk = 1;

                // if (file_exists($uploadDirectory)) {
                //     echo "Sorry, file already exists.";
                //     $uploadOk = 0; 4194304
                // }
                if ($fileSize > 4194304) {
                    // echo 'Sorry, your file ' . ($i + 1) . 'is too large.';
                    $uploadOk = 0;
                    $error = 'Sorry, your file ' . ($i + 1) . ' is too large.';
                    return $error;

                }
                if ($uploadOk == 0) {
                    echo "sory, file not upload";
                } else {



                    if (move_uploaded_file($fileTmpName, $uploadDirectory)) {
                        array_push($pathimage, $folder . '/' . $fileNewname);
                    }
                }
            }
        }
        return $pathimage;

    }
    function deleteFolder($folder)
    {
        // if (!is_dir($folder)) {
        //     echo "The folder does not exist.";
        //     return false;
        // }

        // Duyệt qua tất cả nội dung trong thư mục
        $files = array_diff(scandir($folder), ['.', '..']);
        foreach ($files as $file) {
            $filePath = $folder . DIRECTORY_SEPARATOR . $file;

            // Kiểm tra nếu là file hoặc thư mục con
            if (is_dir($filePath)) {
                // Gọi đệ quy để xóa thư mục con
                deleteFolder($filePath);
            } else {
                // Xóa file
                unlink($filePath);
            }
        }

        // Xóa thư mục chính
        rmdir($folder);
        // return rmdir($folder) ? "Folder deleted successfully." : "Failed to delete folder.";
    }

}
?>