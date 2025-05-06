<?php
class authModel extends Basemodel {
const TABLE = "user";
public function checkdangnhap($username,$password){
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' AND trangthai != '1'";
    
    $kq = $this->_query($sql);
    if($kq->num_rows == 1){
        return $kq = mysqli_fetch_assoc($kq);
    } else {
        return false;
    }
}
public function registerUser($username, $password, $email, $phone, $address, $fullname) {
    // Kiểm tra trùng lặp cho từng trường
    if ($this->_checkDuplicate('username', $username)) {
        return ['success' => false, 'message' => "'Tên đăng nhập' của bạn đã tồn tại!. Vui lòng nhập 'Tên đăng nhập' khác!"];
    }
    if ($this->_checkDuplicate('sdt', $phone)) {
        return ['success' => false, 'message' => "'Số điện thoại' của bạn đã được sử dụng cho tài khoản khác!. Vui lòng sử dụng 'Số điện thoại' khác!"];
    }
    if ($this->_checkDuplicate('email', $email)) {
        return ['success' => false, 'message' => "'Email' của bạn đã được sử dụng cho tài khoản khác!. Vui lòng sử dụng 'Email' khác!"];
    }

    // Chèn dữ liệu vào cơ sở dữ liệu nếu không có trùng lặp
    $delivery_address = $address;
    $sql = "INSERT INTO user (username, password, email, sdt, diachi, fullname, delivery_address) 
            VALUES ('$username', '$password', '$email', '$phone', '$address', '$fullname', '$delivery_address')";
    $kq = $this->_query($sql);

    if ($kq) {
        return ['success' => true];
    } else {
        return ['success' => false, 'message' => 'Đăng ký thất bại, vui lòng thử lại!'];
    }
}

public function phantrang($limit, $start, $ss = "")
    {
        $start = (int) $start;
        $start = ($start - 1) * $limit;
        $sql = "SELECT * FROM user LIMIT $start , $limit ";
        $kq = $this->_query($sql);
        return $kq;
    }
    public function totalpage($limit, $ss = "")
    {
        $sql = "SELECT * FROM user";
        $count = $this->_query($sql);
        $total = $count->num_rows;
        $pagenumber = ceil($total / $limit);
        return $pagenumber;
    }
    public function addUser($username, $password, $sdt, $email, $diachi)
    {
        $sql = 'INSERT INTO user
            (username, password, email, sdt, diachi) 
            VALUES (?, ?, ?, ?,?)';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            $username,
            $password,
            $email,
            $sdt,
            $diachi
        ]);
        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function editUser($id,$username, $password, $sdt, $email, $diachi,$trangthai)
    {
        $sql = 'UPDATE user SET username = ? , password = ? , email = ?,
        sdt = ? , diachi = ?, trangthai = ? WHERE id = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            $username,
            $password,
            $email,
            $sdt,
            $diachi,
            $trangthai,
            $id
        ]);
        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function getUserByid($id){
        $sql = "SELECT * FROM user WHERE id = $id";
        $kq = $this->_query($sql);
        return $kq;
    }
    public function deleteByid($id){
        $sql = "DELETE FROM user WHERE id = $id";
        $this->_query($sql);
        // $stmt = $this->conn->prepare($sql);
        // $stmt->execute([
        //     $id
        // ]);
        // if ($stmt->affected_rows > 0) {
        //     return true;
        // } else {
        //     return false;
        // }
        return true;
    }

}
?>