<?php
class Basemodel extends DB
{

  public function all($select, $table, $orderbys = ['id' => 'asc'], $limit = 15)
  {
    $select = implode(",", $select);
    $key = key($orderbys);
    $value = current($orderbys);
    $sql = "SELECT $select  FROM $table ORDER BY $key $value  LIMIT $limit ";
    $kq = $this->_query($sql);
    return $kq;
  }

  public function insert($table, $data)
  {

    $column = implode(',', array_keys($data));
    $array = array_map(function ($value) {
      return "'$value'";
    }, array_values($data));

    $value = implode(",", $array);
    $sql = "INSERT INTO $table ($column)  VALUES ($value)";
    $kq = $this->_query($sql);
    return $kq;
  }
  public function delete($table, $id)
  {
    $sql = "DELETE FROM $table WHERE id = $id";
    $kq = $this->_query($sql);

  }
  public function update($table, $data, $id)
  {
    $data = array_map(function ($value) {
      return "'$value'";
    }, $data);
    $s = "";
    foreach ($data as $key => $value) {
      $s .= "$key = $value ,";
    }
    $r = rtrim($s, ",");
    $sql = "UPDATE $table SET $r WHERE id = $id";
    $kq = $this->_query($sql);
    //   die($sql);
  }
  public function find($table, $id)
  {
    $sql = "SELECT * FROM $table WHERE id = $id";
    $kq = $this->_query($sql);
    $row = mysqli_fetch_assoc($kq);
    echo '<pre>';
    print_r($row);
    echo '</pre>';
  }
  public function basePhanTrang($pagecount, $limit, $table)
  {
    $sql1 = "SELECT count(id) as total FROM $table";
    $kq = $this->_query($sql1);
    $d = mysqli_fetch_array($kq);
    $total = $d['total'];
    $sql = "SELECT * FROM $table ORDER BY id asc LIMIT $limit ";
  }
  public function _query($sql)
  {
    $kq = mysqli_query($this->conn, $sql);
    return $kq;
  }
  public function _checkDuplicate($field, $value){
      // Xây dựng câu truy vấn SQL để kiểm tra sự trùng lặp
      $sql = "SELECT COUNT(*) FROM user WHERE $field = '$value'";
      
      // Thực thi câu truy vấn và lấy kết quả
      $result = $this->_query($sql);
      $row = mysqli_fetch_assoc($result);
      
      // Nếu số lượng bản ghi > 0 thì có sự trùng lặp
      return $row['COUNT(*)'] > 0;
  }
  public function _checkDuplicateForUpdate($field, $value, $userId){
      // Kiểm tra xem giá trị cần cập nhật có trùng với giá trị cũ không
      $sql = "SELECT $field FROM user WHERE id = $userId";
      $result = $this->_query($sql);
      $row = mysqli_fetch_assoc($result);
      if ($row[$field] == $value) {// Nếu trùng thì không cần kiểm tra tiếp
          return false;
      }
      // Xây dựng câu truy vấn SQL để kiểm tra sự trùng lặp
      $sql1 = "SELECT COUNT(*) FROM user WHERE $field = '$value'";
      
      // Thực thi câu truy vấn và lấy kết quả
      $result1 = $this->_query($sql1);
      $row1 = mysqli_fetch_assoc($result1);
      
      // Nếu số lượng bản ghi > 1 thì có sự trùng lặp
      return $row1['COUNT(*)'] > 0;
  }


}
?>