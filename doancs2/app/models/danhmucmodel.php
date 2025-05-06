<?php
class danhmucmodel extends Basemodel
{
  const TABLE = 'danhmuc';
  function getdanhmuc($select, $orderbys, $limit)
  {
        $kq = $this->all($select, self::TABLE, $orderbys, $limit);
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
  public function phantrang($pagecount){
    
  }
}
?>