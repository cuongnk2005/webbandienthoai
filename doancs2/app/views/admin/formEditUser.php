<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Chỉnh sửa User</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/vendor/bootstrap/css/bootstrap.min.css">
  <link href="<?php echo _WEB_ROOT_ ?>/public/asset/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/admin2.css?v=1.1">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/admin1.css?v=1.2">
  <!-- (1): Khai báo sử dụng thư viện CKEditor -->
  <script src="<?php echo _WEB_ROOT_ ?>/public/asset/ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <!--Nav-->
    <div class="side-bar bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-center"><b>Mobile Shop</b></div>
      <div class="profile">
        <div class="profile-pic">
          <img src="images/admin.jpg" alt="">
        </div>
        <div class="profile-info">
          <span>Welcome</span>
          <h5>Administrator</h5>
        </div>
      </div>
      <div class="list-group list-group-flush">
        <ul class="list">
          <li>
            <a href="<?php echo _WEB_ROOT_ ?>/admin/AdminUser/loadUser"
              class="list-group-item list-group-item-action active  ">
              Thông tin người dùng<i class="menu-icon fas fa-users font-list"></i></a>
          </li>
          <li>
            <a href="<?php echo _WEB_ROOT_ ?>/admin/AdminProduct/adminProduct"
              class="list-group-item list-group-item-action "> Thông tin sản phẩm
              <i class="menu-icon fas fa-mobile-alt font-list"></i></a>
          </li>
          <li>
            <a href="<?php echo _WEB_ROOT_ ?>/admin/ManagerOrders" class="list-group-item list-group-item-action  ">
              Quản lí đơn
              hàng <i class="menu-icon fas fa-shopping-cart font-list"></i></a>
          </li>
          <li>
            <a href="<?php echo _WEB_ROOT_ ?>/admin/AdminBrand" class="list-group-item list-group-item-action  "> Thông
              tin
              thương hiệu <i class="menu-icon fas fa-archway"></i></a>
          </li>
          <li>
            <a href="<?php echo _WEB_ROOT_ ?>/admin/ManagerOrders/getOrdersCancle"
              class="list-group-item list-group-item-action "> Đơn
              hàng bị hủy <i class="menu-icon fas fa-phone-slash"></i></a>
          </li>
          <li>
            <a href="<?php echo _WEB_ROOT_ ?>/admin/feedback" class="list-group-item list-group-item-action "> Phản hồi
              khách hàng <i class="menu-icon far fa-paper-plane"></i></a>
          </li>


          <!-- <li>
                        <a href="admin-filter.html" class="list-group-item list-group-item-action "> Dữ liệu lọc <i
                                class="menu-icon fas fa-filter"></i></a>
                    </li> -->
        </ul>
      </div>
    </div>
    <!--/Nav-->
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">
          <i class="fas fa-bars"></i>
        </button>
        <div class="">

        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo _WEB_ROOT_ ?>">Thoát <span class="log-out"><i
                    class="fas fa-arrow-right"></i></span></a>
            </li>

          </ul>
          <div class="modal fade" id="log-out" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Xác nhận đăng xuất</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                  </button>
                </div>
                <div class="modal-body">
                  Bạn có muốn đăng xuất?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                  <button type="button" class="btn btn-primary">Đăng xuất</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <?php $row = mysqli_fetch_array($user);

      ?>
      <div class="container-fluid">
        <div class="container mt-4 ">
          <h2 style="text-align: center; margin-right: 30px;">Cập nhật User</h2>
          <div class="row">
            <div class="col-6 space-top">
              <h5 class="spacing_form">Tên tài khoản</h5>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                </div>
                <input type="text" id="inputname" class="form-control py-4" value="<?php echo $row['username'] ?>"
                  placeholder="Nhập tên tài khoản">
              </div>
            </div>
            <div class="col-6 space-top">
              <h5 class="spacing_form">Mật khẩu</h5>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                </div>
                <input type="text" id="inputmk" class="form-control py-4" value="<?php echo $row['password'] ?>"
                  placeholder="Nhập mật khẩu">
              </div>
            </div>
            <div class="col-6 space-top">
              <h5 class="spacing_form">Số điện thoại</h5>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                </div>
                <input type="number" id="inputsdt" class="form-control py-4" value="<?php echo $row['sdt'] ?>"
                  placeholder="Nhập số điện thoại">

              </div>
            </div>
            <div class="col-6 space-top">
              <h5 class="spacing_form">Email</h5>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                </div>
                <input type="text" id="inputEmail" class="form-control py-4" value="<?php echo $row['email'] ?>"
                  placeholder="Nhập email">
              </div>
            </div>
            <div class="col-6 space-top">
              <h5 class="spacing_form">Địa chỉ</h5>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                </div>
                <input type="text" id="inputDiachi" class="form-control py-4" value="<?php echo $row['diachi'] ?>"
                  placeholder="Nhập địa chỉ">
              </div>
            </div>
            <div class="col-sm-6 space-top">
              <h5 class="spacing_form">Trạng thái</h5>
              <select class="form-control w" id="trangthai">
                <option value="0">Mở</option>
                <option value="1">Chặn</option>
              </select>
            </div>
          </div>
          <div class="row" style="margin-top: 60px;">
            <input id="btnaddUser" header="<?php echo _WEB_ROOT_ ?>"
              class="btn btn-primary col-sm-3 row space-top space-bottom " value="Cập nhật user">
          </div>

        </div>
      </div>
    </div>

    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->
  <!-- Modal -->
  <div class="modal fade" id='model-error' tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 style="color:red;" class="modal-title" id="exampleModalLabel">Lỗi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          </button>
        </div>
        <div style="text-align: center" class="modal-body" id="modalMessage">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Xác
            nhận</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id='model-announce' tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          </button>
        </div>
        <div style="text-align: center" class="modal-body" id="modalMessage-ann">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Xác
            nhận</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id='modal-adduser' tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          </button>
        </div>
        <div class="modal-body">
          Bạn có muốn cập nhật user này không?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
          <button type="button" id="btnacceptAdd" class="btn btn-primary" data-dismiss="modal">Xác
            nhận</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo _WEB_ROOT_ ?>/public/asset/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo _WEB_ROOT_ ?>/public/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Menu Toggle Script -->
  <script>
    document.getElementById('trangthai').value = '<?php echo $row['trangthai'] ?>';
    function addUser() {
      $('#btnaddUser').on('click', function () {
        // Lấy giá trị từ các input
        const $inputName = $('#inputname').val().trim();
        const $inputPassword = $('#inputmk').val().trim();
        const $inputSDT = $('#inputsdt').val().trim();
        const $inputEmail = $('#inputEmail').val().trim();
        const $inputDiachi = $('#inputDiachi').val().trim();
        const $trangthai = $('#trangthai').val().trim();
        const $modalElement = $('#model-error');
        const $modalMessage = $('#modalMessage');
        const $ModalAdduser = $('#modal-adduser');
        const $modalann = $('#model-announce');
        let errors = [];

        // Kiểm tra tên tài khoản
        if (!$inputName) {
          errors.push('Tên tài khoản không được để trống.');

        } else if (!$inputPassword) {
          errors.push('Mật khẩu phải có ít nhất 6 ký tự.');
        } else if (!$inputSDT || !/^\d{10}$/.test($inputSDT)) {
          errors.push('Số điện thoại phải có đúng 10 chữ số.');
        } else if (!$inputEmail || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test($inputEmail)) {
          errors.push('Email không hợp lệ.');
        } else if (!$inputDiachi) {
          errors.push('Địa chỉ không được để trống.');
        }
        if (errors.length > 0) {
          $modalMessage.html(errors.join('<br>'));
          $modalElement.modal('show');
          return;
        } else {
          $ModalAdduser.modal('show');
          $('#btnacceptAdd').on('click', function () {
            let iduser = <?php echo $row['id'] ?>;
            var formdata = new FormData();
            formdata.append('iduser', iduser);
            formdata.append('username', $inputName);
            formdata.append('password', $inputPassword);
            formdata.append('sdt', $inputSDT);
            formdata.append('email', $inputEmail);
            formdata.append('diachi', $inputDiachi);
            formdata.append('trangthai', $trangthai);
            $.ajax({

              method: "POST",
              url: '<?php echo _WEB_ROOT_ ?>' + '/admin/AdminUser/editUser',
              data: formdata,
              processData: false,
              contentType: false,
            })
              .done(function (data) {
                // history.pushState(null, '', this.url);
                console.log('dữ liệu được trả về' + data);
                $('#modalMessage-ann').html(data);
                $modalann.modal('show');
              })
              .fail(function (data) { });
          });
        }
      });
    }

    addUser();

  </script>

</body>

</html>