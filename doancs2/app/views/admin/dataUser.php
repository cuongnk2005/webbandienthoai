<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dữ liệu khách hàng</title>
  <meta name="description" content="Ela Admin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!---->
  <!--Font Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/admin.css">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/admin1.css">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/admin2.css">
</head>

<body>
  <!-- Left Panel -->

  <!-- /#left-panel -->

  <!-- Left Panel -->

  <!-- Right Panel -->

  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <!--Nav-->
    <div class="side-bar bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-center"><b>Mobile Shop</b></div>
      <div class="profile">
        <div class="profile-pic">
          <img src="<?php echo _WEB_ROOT_ ?>/public/asset/images/admin.jpg" alt="">
        </div>
        <div class="profile-info">
          <span>Welcome</span>
          <h5>Administrator</h5>
        </div>
      </div>
      <div class="list-group list-group-flush">
        <ul class="list">
          <!-- <li id="test">
            <a href="/admin/Dashboard/index" class="list-group-item list-group-item-action   ">
              Trang chủ <i class="menu-icon fa fa-laptop"></i></a>
          </li> -->
          <li>
            <a href="<?php echo _WEB_ROOT_ ?>/admin/AdminUser/loadUser"
              class="list-group-item list-group-item-action active ">
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

    <!-- <script>

      const list = document.querySelectorAll('.list-group .list li');
      let page = "";
      list[page].classList.add('active');
      console.log(page);
      <?php
      //  echo $page; ?>
    </script> -->

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
            <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li> -->
          </ul>
          <!-- <div class="modal fade" id="log-out" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Xác nhận đăng xuất</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
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
          </div> -->
        </div>
      </nav>


      <div class="container-fluid">
        <div class="mb-5 mt-3 ">
          <div class="content">
            <div class="animated fadeIn">
              <div class="row">

                <div class="col-md-12">
                  <div class="card">
                    <div class="card-body">
                      <div id="ajax" class=" mb-2">
                        <h4 class="text-center mt-3 mb-4">Danh sách khách hàng</h4>
                        <!-- <div class="row">
                          <div class="show-page mb-3 ml-3">

                            Hiển thị <span> <select id="show" onclick="select_page()">
                                <option value="10">
                                  10
                                </option>
                                <option value="20">
                                  20
                                </option>
                                <option value="50">
                                  50
                                </option>
                              </select></span> cột
                          </div>

                          <div class="show-page  arrange">

                            Sắp xếp <span> <select id="show" onclick="select_page()">
                                <option value="10">
                                  A-Z
                                </option>
                                <option value="20">
                                  Z-A
                                </option>
                              </select></span>
                          </div>
                          <div class="show-page  arrange">

                            Tìm kiếm <span> <input id="myInput" style="padding-left: 15px; border: 0.5px solid grey;"
                                placeholder="Search.."></span>
                          </div>
                        </div> -->
                        <a href="<?php echo _WEB_ROOT_ ?>/admin/AdminUser/navigationAddUser"><button
                            data-toggle="tooltip" data-placement="top" title="Thêm User"
                            class="btn btn-success btn-add"><i class="fas fa-plus-square"></i></button></a>
                        <table s id="bootstrap-data-table" class="table table-hover table-text-center">
                          <thead class="thead-light">
                            <tr>
                              <th><span data-toggle="tooltip" data-placement="top" title="Mã khách hàng">Mã KH</span>
                              </th>
                              <th>Tên tài khoản</th>
                              <th>Mật khẩu</th>
                              <th>Số điện thoại</th>
                              <th>Địa chỉ mặc định</th>
                              <th>Trạng thái</th>
                              <th>Email</th>
                              <th></th>
                            </tr>
                          </thead>
                          <?php
                          while ($row = mysqli_fetch_array($dssp)) {
                            ?>
                            <tbody id="content-table">
                              <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['username'] ?></td>
                                <td><?php echo $row['password'] ?></td>
                                <td><?php echo $row['sdt'] ?></td>
                                <td><?php echo $row['diachi'] ?></td>
                                <td>Mở</td>
                                <td><?php echo $row['email'] ?></td>

                                <td class="row" style="border: none;">
                                  <div style="margin: auto;">

                                    <a
                                      href="<?php echo _WEB_ROOT_ . '/admin/AdminUser/navigationUpdateUser/' . $row['id'] ?>"><button
                                        class="m-wTD btn btn-primary" data-toggle="tooltip" data-placement="top"
                                        title="Chỉnh sửa" data-toggle="modal" data-target="#editUser"> <i
                                          class="txt-center fas fa-edit"></i></button></a>
                                    <button class="btn btn-danger btndelete sizeTh1" data-toggle="modal"
                                      data-iduser="<?php echo $row['id'] ?>" data-target="#delete" data-placement="top"
                                      title="Xóa"><i class="txt-center menu-icon fas fa-trash-alt"></i></button>

                                  </div>

                                </td>
                              </tr>
                            </tbody>
                          <?php } ?>
                        </table>
                        <div class="pagination-container">

                          <ul class="pagination1" id="pagination1">
                            <li><a href="#"><span id="previous" data-page="1" aria-label="previous"><i
                                    class="fa fa-angle-left" style="font-size: 16px;"></i></a>
                              </span>
                            </li>
                            <!-- <li><a href="#"><span page="1" class="active pagination-item">1</span></a> </li> -->
                            <?php

                            for ($i = 1; $i <= $pagenumber; $i++) {

                              if ($i == $pagecurrent + 1) {

                                echo '<li><a href="#"><span page="' . $i . '" class="active pagination-item">' . $i . '</span></a> </li>';

                              } else {
                                echo '<li><a href="#"><span href="#" class="pagination-item"
                                 page="' . $i . '">' . $i . '</span></a> </li>';
                              }
                            }
                            ?>
                            <li><a href="#"> <span id="next"><i class="fa fa-angle-right"
                                    style="font-size: 16px;"></i></a> </li>
                          </ul>



                        </div>

                      </div>
                    </div>
                  </div>


                </div>
              </div><!-- .animated -->
            </div><!-- .content -->

            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Bạn có muốn xóa tài khoản này.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                    <button type="button" data-dismiss="modal" id="btnAcceptDelete" class="btn btn-primary">Đồng
                      ý</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Add -->
            <!-- modal thông báo -->
            <div class="modal fade" id="modalthongbao">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Thông báo</h4>
                    <button type="button" class="close" data-dismiss="modal"></button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    xóa thành công
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div>


          </div><!-- /#right-panel -->
        </div>
      </div>
      <!-- /#page-content-wrapper -->
    </div>

    <!-- Right Panel -->
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>


    <!-- tooltip -->
    <script>

    </script>
    <!-- block -->
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/js_admin/user-confirmed.js"></script>

    <!-- search -->
    <script>
      $(document).ready(function () {
        $("#myInput").on("keyup", function () {
          var value = $(this).val().toLowerCase();
          $("#content-table tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>


    <script>
      $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>
    <script>
      function previous() {
        const previous = document.getElementById('previous');
        const next = document.getElementById('next');
        const paginationItems = document.querySelectorAll('.pagination-item');
        previous.addEventListener('click', function () {

          var data = <?php echo $pagecurrent ?>;
          // data = parseInt(data);
          if (data == 0) {
            data = 0
          } else {
            data -= 1;
          }
          paginationItems[data].click();
        })
        next.addEventListener('click', function () {
          var data = <?php echo $pagecurrent ?>;
          data = parseInt(data);
          var max = <?php echo $pagenumber ?>;
          if (data == max) {
            data = max;
          } else {
            data += 1;
          }
          paginationItems[data].click();
        })
      }
      previous();
      $(document).on('click', '.pagination-item', function () {

        var page = $(this).attr('page');
        page = page.trim();
        $.ajax({
          method: "post",
          url: '<?php echo _WEB_ROOT_ ?>/admin/AdminUser/phantrang/' + page,

        })
          .done(function (data) {
            // history.pushState(null, '', this.url);

            $('#ajax').html(data);
          })
          .fail(function (data) { });


        var newUrl = '<?php echo _WEB_ROOT_; ?>/admin/AdminUser/loaduser/' + page;
        // Sử dụng history.pushState để thay đổi URL mà không tải lại trang
        window.history.pushState(null, null, newUrl);

      });


      let iduser;
      function giveIdPr() {
        $(".btndelete").each(function () {
          $(this).on('click', function () {
            iduser = $(this).attr('data-iduser');
          });
        });
      }
      giveIdPr();
      function acceptDelete() {
        $('#btnAcceptDelete').on('click', function () {

          $.ajax({

            method: "POST",
            url: '<?php echo _WEB_ROOT_ ?>' + '/admin/AdminUser/deleteUser',
            data: { 'iduser': iduser },
          })
            .done(function (data) {
              console.log('dữ liệu được trả về' + data);
              let pagecurrent = <?php echo $pagecurrent ?> + 1;


              $.ajax({
                method: "post",
                url: '<?php echo _WEB_ROOT_ ?>/admin/AdminUser/phantrang/' + pagecurrent,

              })
                .done(function (data) {
                  // history.pushState(null, '', this.url);
                  $('#modalthongbao').modal('show');
                  $('#ajax').html(data);
                  var newUrl = '<?php echo _WEB_ROOT_; ?>/admin/AdminUser/loaduser/' + pagecurrent;
                  // Sử dụng history.pushState để thay đổi URL mà không tải lại trang
                  window.history.pushState(null, null, newUrl);
                })
                .fail(function (data) { });
            })
        })
      }
      acceptDelete();
    </script>
</body>

</html>