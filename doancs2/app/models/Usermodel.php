<?php 
class Usermodel extends BaseModel
{
    public function getUserById($userId)
    {
        $sql = "SELECT * FROM user WHERE id = $userId";
        $kq = $this->_query($sql);
        return $kq;
    }
    public function UpdateUserProfileById($userId, $email, $phone, $address, $fullname, $delivery_address)
    {
        if ($this->_checkDuplicateForUpdate('sdt', $phone, $userId)) {
            return ['success' => false, 'message' => "'Số điện thoại' của bạn đã được sử dụng cho tài khoản khác!. Vui lòng sử dụng 'Số điện thoại' khác!"];
        }
        if ($this->_checkDuplicateForUpdate('email', $email, $userId)) {
            return ['success' => false, 'message' => "'Email' của bạn đã được sử dụng cho tài khoản khác!. Vui lòng sử dụng 'Email' khác!"];
        }
        $sql = "UPDATE user SET 
                email = '$email', sdt = '$phone', diachi = '$address', fullname = '$fullname', delivery_address = '$delivery_address'
                WHERE id = $userId";
        $kq = $this->_query($sql);
        if ($kq) {
            return ['success' => true];
        } else {
            return ['success' => false, 'message' => 'Cập nhật thất bại, vui lòng thử lại!'];
        }
    }
    public function changePassword($userId, $oldPassword, $newPassword)
    {
        $sql = "SELECT password FROM user WHERE id = $userId";
        $kq = $this->_query($sql);
        $row = mysqli_fetch_assoc($kq);
        if ($row['password'] != $oldPassword) {
            return ['success' => false, 'message' => 'Mật khẩu hiện tại của bạn không chính xác! Vui lòng kiểm tra lại!'];
        }
        $sql1 = "UPDATE user SET password = '$newPassword' WHERE id = $userId";
        $kq1 = $this->_query($sql1);
        if ($kq1) {
            return ['success' => true];
        } else {
            return ['success' => false, 'message' => 'Cập nhật mật khẩu thất bại, vui lòng thử lại!'];
        }
    }
}
?>