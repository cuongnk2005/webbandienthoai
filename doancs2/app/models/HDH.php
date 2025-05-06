<?php
class HDH extends Basemodel{
    public function getHDH(){
        $sql = "SELECT * FROM operatingsystem";
        $kq = $this->_query($sql);
        return $kq;
    }
}
?>