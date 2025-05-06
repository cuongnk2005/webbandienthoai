<?php
class Sanphammodel extends Basemodel
{
  const TABLE = 'sanpham';
  function getsp($select, $orderbys, $limit)
  {
    $kq = $this->all($select, self::TABLE, $orderbys, $limit);
    return $kq;
  }
  public function phantrang($limit,$start){
    $start = ($start - 1) * $limit;
  $sql = "SELECT * FROM sanpham LIMIT $start , $limit";
  $kq = $this->_query($sql);
  return $kq;
  }
  public function totalpage($limit){
    $sql = "SELECT count(id) as total FROM sanpham";
    $count = $this->_query($sql);
    $row = mysqli_fetch_array($count);
    $total = $row['total'];
    $pagenumber = ceil($total/$limit);
    return $pagenumber;
  }
 public function getspBydanhmuc($slug){
  $sql = "SELECT * FROM sanpham JOIN danhmuc ON sanpham.iddanhmuc = danhmuc.id WHERE slug ='$slug' ORDER BY sanpham.id ASC LIMIT 8 OFFSET 0";
  $kq = $this->_query( $sql);
  return $kq;
 }
  public function show($id)
  {
    echo '<br> đã gọi đến hàm này';
    $this->find(self::TABLE, $id);
  }
  public function create($data =[]){
    $this->insert(self::TABLE,$data);
  }
  public function edit($data=[], $id){
    $this->update(self::TABLE, $data, $id);
  }
  public function deleteById( $id){
    $this->delete(self::TABLE, $id);
  }
}
?>