<?php
class Brands extends Basemodel {

public function getBrands(){
    $sql = "SELECT * FROM brands";
    $kq = $this->_query($sql);
    return $kq;
}   
public function getAmoutpr($id){
    $sql =  "SELECT SUM(detailproduct.amout)  AS total
FROM product
INNER JOIN phoneoptions ON product.product_id = phoneoptions.product_id
INNER JOIN detailproduct ON phoneoptions.specificphone_id = detailproduct.specificphone_id
WHERE product.brand_id = $id";
return $this->_query($sql);
}

}



?>