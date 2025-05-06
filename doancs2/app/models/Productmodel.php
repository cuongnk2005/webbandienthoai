<?php
class productModel extends Basemodel
{
  const TABLE = 'product';
  // public function getsp($select=['*'], $orderbys=['id' => 'asc'], $limit = 15)
  // {
  //   $kq = $this->all($select, self::TABLE, $orderbys, $limit);
  //   return $kq;
  // }
  public function getspbanchay()
  {
    $sql = "SELECT * FROM product 
LEFT JOIN 
    generalphone ON product.product_id = generalphone.product_id
LEFT JOIN 
   phoneoptions ON product.product_id = phoneoptions.product_id
LEFT JOIN 
  detailproduct ON phoneoptions.specificphone_id =detailproduct.specificphone_id
WHERE type_id =2 LIMIT 0 , 10";
    // GROUP BY product.product_id;
    $kq = $this->_query($sql);
    return $kq;
  }
  public function getspkhuyenmai()
  {
    $sql = "SELECT * FROM product 
LEFT JOIN 
    generalphone ON product.product_id = generalphone.product_id
LEFT JOIN 
   phoneoptions ON product.product_id = phoneoptions.product_id
LEFT JOIN 
  detailproduct ON phoneoptions.specificphone_id =detailproduct.specificphone_id
WHERE type_id =2 LIMIT 0 , 12";
    // GROUP BY product.product_id;
    $kq = $this->_query($sql);
    return $kq;
  }

  public function getspByid($id){
    $sql = "SELECT * FROM product 
    INNER JOIN 
        generalphone ON product.product_id = generalphone.product_id
    INNER JOIN 
       phoneoptions ON product.product_id = phoneoptions.product_id
    INNER JOIN 
      detailproduct ON phoneoptions.specificphone_id =detailproduct.specificphone_id
    WHERE product.product_id = $id";
    return $this->_query($sql);
  }
  public function phantrang($limit, $start, $ss = "")
  {
    $start = (int) $start;
    $start = ($start - 1) * $limit;
    $sql = "SELECT * FROM product 
LEFT JOIN 
    generalphone ON product.product_id = generalphone.product_id
LEFT JOIN 
   phoneoptions ON product.product_id = phoneoptions.product_id
LEFT JOIN 
  detailproduct ON phoneoptions.specificphone_id =detailproduct.specificphone_id
WHERE type_id =2 $ss GROUP BY product.product_id LIMIT $start , $limit ";
// $sql = "SELECT product.product_id, product_name, brand_id, type_id, HighlightFeature, rating_count,
// screen_size, id_system, display_technology, screen_resolution, refresh_rate, front_camera, rear_camera, chipset,
// battery, usage_need, ram, phoneoptions.specificphone_id, internal_storage, original_price, discounted_price,
// id, color, image, amout, sold  FROM product 
// LEFT JOIN 
//     generalphone ON product.product_id = generalphone.product_id
// LEFT JOIN 
//    phoneoptions ON product.product_id = phoneoptions.product_id
// LEFT JOIN 
//   detailproduct ON phoneoptions.specificphone_id = detailproduct.specificphone_id
// WHERE type_id =2 $ss GROUP BY product.product_id, product_name, brand_id, type_id, HighlightFeature, average_rating, rating_count,
// screen_size, id_system, display_technology, screen_resolution, refresh_rate, front_camera, rear_camera, chipset,
// battery, usage_need, ram, phoneoptions.specificphone_id, internal_storage, original_price, discounted_price,
// id, color, image, amout, sold LIMIT $start , $limit ";

    $kq = $this->_query($sql);
    return $kq;
  }
  public function phantrangOfPr($limit, $start, $ss = "")
  {
    $start = (int) $start;
    $start = ($start - 1) * $limit;
    $sql = "SELECT * FROM product 
LEFT JOIN 
    generalphone ON product.product_id = generalphone.product_id
LEFT JOIN 
   phoneoptions ON product.product_id = phoneoptions.product_id
LEFT JOIN 
  detailproduct ON phoneoptions.specificphone_id =detailproduct.specificphone_id
WHERE type_id =2 $ss  LIMIT $start , $limit ";
    $kq = $this->_query($sql);
    return $kq;
  }
  public function phantrangAdmin($limit, $start, $ss = "")
  {
    $start = (int) $start;
    $start = ($start - 1) * $limit;
    $sql = "SELECT product.product_id, product_name, brand_id, type_id, HighlightFeature, average_rating, rating_count,
screen_size, id_system, display_technology, screen_resolution, refresh_rate, front_camera, rear_camera, chipset,
battery, usage_need, ram, specificphone_id.phoneoptions, internal_storage, original_price, discounted_price,
id, color, image, amount, sold  FROM product 
LEFT JOIN 
    generalphone ON product.product_id = generalphone.product_id
LEFT JOIN 
   phoneoptions ON product.product_id = phoneoptions.product_id
LEFT JOIN 
  detailproduct ON phoneoptions.specificphone_id =detailproduct.specificphone_id
WHERE type_id =2 $ss GROUP BY product.product_id, product_name, brand_id, type_id, HighlightFeature, average_rating, rating_count,
screen_size, id_system, display_technology, screen_resolution, refresh_rate, front_camera, rear_camera, chipset,
battery, usage_need, ram, specificphone_id.phoneoptions, internal_storage, original_price, discounted_price,
id, color, image, amount, sold LIMIT $start , $limit ";
echo $sql;
    $kq = $this->_query($sql);
    return $kq;
  }
  public function totalpage($limit, $ss = "")
  {
    $sql = "SELECT count(product.product_id) as total  FROM product 
LEFT JOIN 
    generalphone ON product.product_id = generalphone.product_id
LEFT JOIN 
   phoneoptions ON product.product_id = phoneoptions.product_id
LEFT JOIN 
  detailproduct ON phoneoptions.specificphone_id =detailproduct.specificphone_id
WHERE type_id =2 $ss GROUP BY product.product_id  ";

    $count = $this->_query($sql);
    $total = $count->num_rows;
    $pagenumber = ceil($total / $limit);
    return $pagenumber;
  }
  public function totalpageForsp($limit, $ss = "")
  {
    $sql = "SELECT count(product.product_id) as total  FROM product 
LEFT JOIN 
    generalphone ON product.product_id = generalphone.product_id
LEFT JOIN 
   phoneoptions ON product.product_id = phoneoptions.product_id
LEFT JOIN 
  detailproduct ON phoneoptions.specificphone_id =detailproduct.specificphone_id
WHERE type_id =2 $ss";

    $count = $this->_query($sql);
    $total = mysqli_fetch_array($count);
    $total = $total['total'];
    $pagenumber = ceil($total / $limit);
    return $pagenumber;
  }

  public function getbrands(): bool|mysqli_result
  {
    $sql = "SELECT * FROM brands WHERE type_id = 2";
    $kq = $this->_query($sql);
    return $kq;
  }
 public function getDetailProductbyID($id){
 $sql = "SELECT * FROM detailproduct WHERE id = $id";
 return $this->_query($sql);
 }
 public function getPhoneOptionByid($id){
$sql = "SELECT * FROM phoneoptions WHERE specificphone_id = $id";
return $this->_query($sql);
 }
  public function addProduct($arr)
  {
    $sql = "INSERT INTO product (product_name, brand_id, type_id, HighlightFeature) VALUES (?, ? , ? , ?)";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
      $arr[0],
      $arr[1],
      $arr[2],
      $arr[3]
    ]);
    $newId = $this->conn->insert_id;
    return $newId;
  }
  public function addGeneralphone($id, $generalphone)
  {
    $sql = 'INSERT INTO generalphone 
            (product_id, screen_size, id_system, display_technology, screen_resolution, refresh_rate, front_camera, rear_camera, chipset, battery, usage_need, ram) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
      $id,
      $generalphone['screen_size'],
      $generalphone['id_system'],
      $generalphone['display_technology'],
      $generalphone['screen_resolution'],
      $generalphone['refresh_rate'],
      $generalphone['front_camera'],
      $generalphone['rear_camera'],
      $generalphone['chipset'],
      $generalphone['battery'],
      $generalphone['usage_need'],
      $generalphone['ram']
    ]);
    $newId = $this->conn->insert_id;
    return $newId;
  }
  public function addPhoneoption($product_id, $phoneoptions,$pathimage){
    $sql = 'INSERT INTO phoneoptions
            (product_id, internal_storage, original_price, discounted_price) 
            VALUES (?, ?, ?, ?)';
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
      $product_id,
      $phoneoptions['internal_storage'],
      $phoneoptions['original_price'],
      $phoneoptions['discounted_price']

    ]);
    $newId = $this->conn->insert_id;
    $color = $phoneoptions['color'];
    $sql = 'INSERT INTO detailproduct (specificphone_id, color,image,amout) VALUES
       (?,?,?,?)';
    $stmt = $this->conn->prepare($sql);
    for($i = 0; $i < count($color); $i++){
    $stmt->execute([
      $newId,
      $color[$i]['color'],
      $pathimage[$i],
      $color[$i]['amout']
    ]);
    }
    return count($color);
  }
  public function addDetailPr($specificphone_id, $color, $image, $amout){
    $sql = 'INSERT INTO detailproduct (specificphone_id, color,image,amout) VALUES
    (?,?,?,?)';
 $stmt = $this->conn->prepare($sql);

 $stmt->execute([
   $specificphone_id,
   $color,
   $image,
   $amout
 ]);
 
  }
 
  public function updateProduct($arr, $id){
    $sql = "UPDATE product SET product_name = ?, brand_id = ?, type_id = ?, HighlightFeature = ? WHERE product_id = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
      $arr[0],
      $arr[1],
      $arr[2],
      $arr[3],
      $id
    ]);
    if ($stmt->affected_rows  > 0) {
      return true;
  } else {
      return false;
  }
  }
  public function getIdOfPhoneOptionbyDetailId($id){
    $idp = $this->getDetailProductbyID($id);
    $idp = mysqli_fetch_array($idp);
    $idp = $idp['specificphone_id'];
    return $idp;
  }
  public function updatePhoneOption($iddetailPr,$original_price,$discounted_price ){
    $idp = $this->getIdOfPhoneOptionbyDetailId($iddetailPr);
    $sql = "UPDATE phoneoptions SET original_price = ? ,discounted_price = ? WHERE specificphone_id = ? ";
    $pr = $this->conn->prepare($sql);
    $pr->execute([
     $original_price,
     $discounted_price,
     $idp
    ]);
    if ($pr->affected_rows  > 0) {
      return true;
  } else {
      return false;
  }
  }
  public function updateDetailProduct($color, $pathimage,$amout, $id){

    $sql = "UPDATE detailproduct SET color = ?, image = ?, amout = ? WHERE id = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
     $color,
     $pathimage,
      $amout,
      $id
    ]);
    if ($stmt->affected_rows  > 0) {
      return true;
  } else {
      return false;
  }
  }
  public function getPhoneOptionByidPr($id){
    $sql = "SELECT * FROM phoneoptions WHERE product_id = $id";
    return $this->_query($sql);
  }
  public function updateGeneralPhone($id,$generalphone){
    $sql = "UPDATE generalphone SET screen_size = ?, id_system = ?, display_technology = ?,
     screen_resolution = ?, refresh_rate = ?, front_camera = ?, rear_camera = ?,
      chipset = ?, battery = ?, usage_need = ?, ram = ? WHERE product_id = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
        $generalphone['screen_size'],
        $generalphone['id_system'],
        $generalphone['display_technology'],
        $generalphone['screen_resolution'],
        $generalphone['refresh_rate'],
        $generalphone['front_camera'],
        $generalphone['rear_camera'],
        $generalphone['chipset'],
        $generalphone['battery'],
        $generalphone['usage_need'],
        $generalphone['ram'],
        $id
      ]);
      if ($stmt->affected_rows  > 0) {
        return true;
    } else {
        return false;
    }
  }
  public function deletePhoneOption($id){
  $sql = "DELETE FROM detailproduct WHERE id = ?";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute(
    [
      $id
    ]
  );
  if ($stmt->affected_rows  > 0) {
    return true;
} else {
    return false;
}
  }
  public function deletePrByid($id){
    $sql = "DELETE FROM product WHERE product_id = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(
      [
        $id
      ]
    );
    if ($stmt->affected_rows  > 0) {
      return true;
  } else {
      return false;
  }
  }
  // (screen_size, id_system, display_technology, screen_resolution, refresh_rate,
//    front_camera, rear_camera, chipset, battery, usage_need, ram) 
  public function getspBydanhmuc($slug)
  {
    $sql = "SELECT * FROM sanpham JOIN danhmuc ON sanpham.iddanhmuc = danhmuc.id WHERE slug ='$slug' ORDER BY sanpham.id ASC LIMIT 8 OFFSET 0";
    $kq = $this->_query($sql);
    return $kq;
  }
  public function getProductNameByUrl($url)
  {
    $sql = "SELECT product_name 
            FROM product 
            WHERE LOWER(product_name) LIKE LOWER('%$url%')";
    $kq = $this->_query($sql);
    $kq = mysqli_fetch_assoc($kq);
    return $kq['product_name'];
  }
  public function getProductTypeByName($name_product)
  {
    $sql = "SELECT type_id FROM product WHERE product_name = '$name_product'";
    $kq = $this->_query($sql);
    $kq = mysqli_fetch_assoc($kq);
    return (int) $kq['type_id'];
  }

  public function getProductIdByName($name_product)
  {
    $sql = "SELECT product_id FROM product WHERE product_name = '$name_product'";
    $kq = $this->_query($sql);
    $kq = mysqli_fetch_assoc($kq);
    return (int) $kq['product_id'];
  }

  public function getPhoneDefaultOptionlByProductId($product_id)
  {
    $sql = "SELECT * 
            FROM phoneoptions
            LEFT JOIN detailproduct ON phoneoptions.specificphone_id = detailproduct.specificphone_id
            WHERE phoneoptions.product_id = $product_id LIMIT 1";
    $kq = $this->_query($sql);
    return $kq;
  }

  public function getPhoneDefaultOptionlByPhoneColorID($id)
  {
    $sql = "SELECT * 
            FROM phoneoptions
            LEFT JOIN detailproduct ON phoneoptions.specificphone_id = detailproduct.specificphone_id
            WHERE detailproduct.id = $id";
    $kq = $this->_query($sql);
    return $kq;
  }

  public function getPhoneDefaultOptionlByProductIdAndCapacity($product_id, $capacity)
  {
    $sql = " SELECT * 
            FROM phoneoptions
            LEFT JOIN detailproduct ON phoneoptions.specificphone_id = detailproduct.specificphone_id
            WHERE phoneoptions.product_id = $product_id AND phoneoptions.internal_storage = '$capacity' LIMIT 1";
    $kq = $this->_query($sql);
    return $kq;
  }

  public function getPhoneImageByProductId($product_id)
  {
    $sql = "SELECT detailproduct.image
            FROM phoneoptions
            LEFT JOIN detailproduct ON phoneoptions.specificphone_id = detailproduct.specificphone_id
            WHERE phoneoptions.product_id = $product_id
            GROUP BY detailproduct.image";
    $kq = $this->_query($sql);
    return $kq;
  }

  public function getPhoneColorByProductId($product_id)
  {
    $sql = "SELECT detailproduct.color
            FROM phoneoptions
            LEFT JOIN detailproduct ON phoneoptions.specificphone_id = detailproduct.specificphone_id
            WHERE phoneoptions.product_id = $product_id
            GROUP BY detailproduct.color";
    $kq = $this->_query($sql);
    return $kq;
  }


  public function getPhoneInternalStorageByProductId($product_id)
  {
    $sql = "SELECT internal_storage
            FROM phoneoptions 
            WHERE product_id = $product_id";
    $kq = $this->_query($sql);
    return $kq;
  }
  public function getPhoneColorIdByProductId($product_id)
  {
    $sql = "SELECT detailproduct.id, product.product_name, phoneoptions.internal_storage, detailproduct.color FROM product 
            LEFT JOIN phoneoptions ON product.product_id = phoneoptions.product_id
            LEFT JOIN detailproduct ON phoneoptions.specificphone_id =detailproduct.specificphone_id
            WHERE product.product_id= $product_id ";
    $kq = $this->_query($sql);
    $PhoneColor_Id = [];
    while ($row = mysqli_fetch_assoc($kq)) {
      $PhoneColor_Id[$row['product_name']][$row['internal_storage']][$row['color']] = $row['id'];
    }
    return $PhoneColor_Id;
  }

  public function getProductVariantsByProductId($product_id)
  {
    $available_variants = [];
    $sql = "SELECT detailproduct.color, product.product_name, phoneoptions.internal_storage 
            FROM product 
            LEFT JOIN phoneoptions ON product.product_id = phoneoptions.product_id
            LEFT JOIN detailproduct ON phoneoptions.specificphone_id =detailproduct.specificphone_id
            WHERE product.product_id = $product_id";
    $kq = $this->_query($sql);
    while ($row = mysqli_fetch_assoc($kq)) {
      $available_variants[] = [
        'product_name' => $row['product_name'],
        'color' => $row['color'],
        'storage' => $row['internal_storage']
      ];
    }
    return $available_variants;
  }

  public function getPhoneGeneralByProductId($product_id)
  {
    $sql = "SELECT *,operatingsystem.name
            FROM generalphone 
            LEFT JOIN operatingsystem ON generalphone.id_system = operatingsystem.id_system
            WHERE product_id = $product_id";
    $kq = $this->_query($sql);
    return $kq;
  }

  public function getHighlightFeatureByProductId($product_id)
  {
    $sql = "SELECT HighlightFeature FROM product WHERE product_id = $product_id";
    $kq = $this->_query($sql);
    return $kq;
  }

  public function getPhoneSpecific_IdByProductIdAndPhoneInternalStorage($product_id, $internal_storage)
  {
    $sql = "SELECT specificphone_id FROM phoneoptions WHERE product_id = $product_id AND internal_storage = '$internal_storage'";
    $kq = $this->_query($sql);
    $kq = mysqli_fetch_assoc($kq);
    return (int) $kq['specificphone_id'];
  }


  
 

  
  

  public function show($id)
  {
    echo '<br> đã gọi đến hàm này';
    $this->find(self::TABLE, $id);
  }
  public function create($data = [])
  {
    $this->insert(self::TABLE, $data);
  }
  public function edit($data = [], $id)
  {
    $this->update(self::TABLE, $data, $id);
  }
  public function deleteById($id)
  {
    $this->delete(self::TABLE, $id);
  }





  public function ajaxUpdateProduct($ProductColor_id){
    $sql = "SELECT phoneoptions.discounted_price, 
               phoneoptions.original_price,
               phoneoptions.internal_storage, 
               detailproduct.amout, 
               detailproduct.image, 
               detailproduct.color, 
               detailproduct.id,
               product.product_name,
               product.product_id
            FROM phoneoptions
            LEFT JOIN detailproduct ON phoneoptions.specificphone_id = detailproduct.specificphone_id
            LEFT JOIN product ON phoneoptions.product_id = product.product_id
            WHERE detailproduct.id = $ProductColor_id";

    $result = $this->_query($sql);

    // Kiểm tra kết quả truy vấn
    if ($result) {
        $kq = mysqli_fetch_assoc($result);
        $colorselected = $kq['color'];
        $Product_id= $kq['product_id'];
        $internal_storage_selected = $kq['internal_storage'];
        // Truy vấn dung lượng khả dụng dựa trên màu
        $sql2 = "SELECT phoneoptions.internal_storage, detailproduct.id
                FROM product
                LEFT JOIN phoneoptions ON product.product_id = phoneoptions.product_id
                LEFT JOIN detailproduct ON phoneoptions.specificphone_id = detailproduct.specificphone_id
                WHERE product.product_id = $Product_id AND detailproduct.color = '$colorselected'";

        $result2 = $this->_query($sql2);

        $sql3 = "SELECT detailproduct.color, detailproduct.id
                  FROM product 
                LEFT JOIN phoneoptions ON product.product_id = phoneoptions.product_id
                LEFT JOIN detailproduct ON phoneoptions.specificphone_id =detailproduct.specificphone_id
                WHERE product.product_id= $Product_id AND phoneoptions.internal_storage='$internal_storage_selected'";
        $result3 = $this->_query($sql3);
        // Xử lý kết quả dung lượng
        $internal_storage = [];
        $color = [];
        $productColorIdsByInternal_Storage = [];
        $productColorIdsByColor = [];
        if ($result2) {
            while ($kq2 = mysqli_fetch_assoc($result2)) {
                $internal_storage[] = $kq2['internal_storage'];
                $productColorIdsByInternal_Storage[] = $kq2['id'];
            }
        }
        if ($result3) {
            while ($kq3 = mysqli_fetch_assoc($result3)) {
                $color[] = $kq3['color'];
                $productColorIdsByColor[] = $kq3['id'];
            }
        }
      }
      return [
        'discounted_price' => number_format($kq['discounted_price'], 0, ',', '.') . 'đ',
        'original_price' => number_format($kq['original_price'], 0, ',', '.') . 'đ',
        'quantity' => $kq['amout'] . ' sản phẩm có sẵn',
        'url_image' => $kq['image'],
        'id' => $kq['id'],
        'product_name' => $kq['product_name'],
        'internal_storage_selected' => $kq['internal_storage'],
        'internal_storage' => $internal_storage,
        'color' => $color,
        'productColorIdsByInternal_Storage' => $productColorIdsByInternal_Storage,
        'productColorIdsByColor' => $productColorIdsByColor
    ];  
  }

  public function getAllReviewsByProductId($product_id) {
    $sql = "SELECT *, user.username
            FROM reviews
            LEFT JOIN user ON reviews.user_id = user.id
            WHERE product_id = $product_id
            ORDER BY reviews.updated_at DESC";
    $kq = $this->_query($sql);
    return $kq;
  }

  public function getRatingByProductId($product_id) {
    $sql = "SELECT average_rating, rating_count
            FROM product
            WHERE product_id = $product_id";
    $kq = $this->_query($sql);
    return $kq;
  }

  public function getNumberOfRewiewsByProductId($product_id) {
    $sql = "SELECT COUNT(*) as total_reviews
            FROM reviews
            WHERE product_id = $product_id";
    $kq = $this->_query($sql);
    $kq = mysqli_fetch_assoc($kq);
    return (int)$kq['total_reviews'];
  }

  public function getStarRatingCounts($product_id) {
    $sql = "SELECT star_rating, COUNT(*) as total_star_rating
            FROM reviews
            WHERE product_id = $product_id
            GROUP BY star_rating";
    $kq = $this->_query($sql);
    $starRatingCounts = [];
    while ($row = mysqli_fetch_assoc($kq)) {
        $starRatingCounts[$row['star_rating']] = $row['total_star_rating'];
    }
    return $starRatingCounts;
  }
  ///
 
  // public function getsp($select=['*'], $orderbys=['id' => 'asc'], $limit = 15)
  // {
  //   $kq = $this->all($select, self::TABLE, $orderbys, $limit);
  //   return $kq;
  // }
  public function getsp()
  {
    $sql = "SELECT * FROM product 
LEFT JOIN 
    generalphone ON product.product_id = generalphone.product_id
LEFT JOIN 
   phoneoptions ON product.product_id = phoneoptions.product_id
LEFT JOIN 
  detailproduct ON phoneoptions.specificphone_id =detailproduct.specificphone_id
WHERE type_id =2 LIMIT 0 , 20";
    // GROUP BY product.product_id;
    $kq = $this->_query($sql);
    return $kq;
  }

}
?>
