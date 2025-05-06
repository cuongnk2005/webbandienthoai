<?php
class AdminUser extends Controller
{
    private $data = [];
    private $AuthModel;
    function __construct()
    {
        $this->data['kq'] = "";
        $this->AuthModel = $this->Model("authmodel");
    }
    public function loadUser($start = 1)
    {
        $limit = 10;
        $this->data['pagecurrent'] = $start - 1;
        $this->data['pagenumber'] = $this->AuthModel->totalpage($limit);
        $this->data['dssp'] = $this->AuthModel->phantrang($limit, $start);
        $this->render('admin/dataUser', $this->data);
    }
    public function phantrang($start = 1)
    {
        $limit = 10;
        $this->data['pagecurrent'] = $start - 1;
        $this->data['pagenumber'] = $this->AuthModel->totalpage($limit);
        $this->data['dssp'] = $this->AuthModel->phantrang($limit, $start);
        $this->render('admin/ajax/ajaxUser', $this->data);
    }
    public function navigationAddUser()
    {
        $this->render('admin/formAddUser', $this->data);
    }
    public function addUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sdt = $_POST['sdt'];
            $email = $_POST['email'];
            $diachi = $_POST['diachi'];
            $kq = $this->AuthModel->addUser($username, $password, $sdt, $email, $diachi);
            if ($kq) {
                echo 'đã thêm thành công';
            } else {
                echo 'đã thêm thất bại';
            }
        }
    }
    public function navigationUpdateUser($id)
    {

        $this->data['user'] = $this->AuthModel->getUserByid($id);
        $this->render('admin/formEditUser', $this->data);


    }
    public function editUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['iduser'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sdt = $_POST['sdt'];
            $email = $_POST['email'];
            $diachi = $_POST['diachi'];
            $trangthai = $_POST['trangthai'];
            $kq = $this->AuthModel->editUser($id, $username, $password, $sdt, $email, $diachi, $trangthai);
            if ($kq) {
                echo 'đã cập nhật thành công';
            } else {
                echo 'đã cập nhật thất bại';
            }
        }
    }
    public function deleteUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['iduser'];
           $kq = $this->AuthModel->deleteByid($id);
           if ($kq) {
            echo 'bạn đã xóa thành công';
        } else {
            echo "bạn đã xóa thất bại";
        }
        } else {
            echo 'cập nhật thất bại';
        }

    }
}

?>