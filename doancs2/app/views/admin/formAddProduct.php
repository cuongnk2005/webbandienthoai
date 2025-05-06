<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Thêm sản phẩm</title>

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
            <a href="<?php echo _WEB_ROOT_ ?>/admin/Dashboard/adminUser"
              class="list-group-item list-group-item-action ">
              Thông tin người dùng<i class="menu-icon fas fa-users font-list"></i></a>
          </li>
          <li>
            <a href="<?php echo _WEB_ROOT_ ?>/admin/AdminProduct/adminProduct"
              class="list-group-item list-group-item-action active"> Thông tin sản phẩm
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
          <div class="modal fade" id="log-out" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
          </div>
        </div>
      </nav>
      <div class="container-fluid">
        <div class="container mt-4 ">
          <h2 style="text-align: center;">Thêm sản phẩm</h2>
          <form>
            <div class="row">
              <div class="col-6 space-top">
                <h5 class="spacing_form">Tên sản phẩm</h5>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                  </div>
                  <input type="text" id="inputname" class="form-control py-4" value="" placeholder="Nhập tên sản phẩm">
                </div>
              </div>
              <div class="col-6 space-top">
                <h5 class="spacing_form">Tên Thương hiệu</h5>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                  </div>
                  <select class="form-control w" id="brands">
                    <?php while ($row = mysqli_fetch_array($brands)) {
                      echo '<option value="' . $row['brand_id'] . '"> ' . $row['brand_name'] . '</option>';
                    } ?>

                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 space-top">
                <h5 class="spacing_form">Loại sản phẩm</h5>
                <select class="form-control w" id="typeproduct">
                  <option value="2">Điện thoại</option>
                  <option value="1">Laptop</option>
                </select>
              </div>
              <!-- <div class="col-sm-6 space-top">
                <h5 class="spacing_form ">Trình trạng</h5>
                <select class="form-control w" id="status">
                  <option>Còn hàng</option>
                  <option>Hết hàng</option>
                </select>
              </div> -->
            </div>




            <!-- add color -->




            <div class="form-group space-top" style="margin-top: 70px;">
              <h5 class="spacing_form">Giới thiệu sản phẩm</h5>
              <form action="" method="post">

                <!-- (2): textarea sẽ được thay thế bởi CKEditor -->
                <textarea id="edit" name="edit" cols="200" rows="80">
                    </textarea>
                <!-- (3): Code Javascript thay thế textarea có id='editor1' bởi CKEditor -->
                <script>
                  CKEDITOR.replace('edit');
                </script>
              </form>
            </div>

            <hr>
            <!-- thong so ki thuat -->
            <h3 class="text-center">Thông số kĩ thuật</h3>
            <div class="row">
              <div class="col-6 space-top">
                <h5 class="spacing_form">Kích thước màn hình</h5>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                  </div>
                  <input type="text" id="screen_size" class="form-control py-4" value=""
                    placeholder="Nhập kích thước màn hình">
                </div>
              </div>
              <div class="col-6 space-top">
                <h5 class="spacing_form">Hệ điều hành</h5>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-cogs"></i></div>
                  </div>
                  <select class="form-control w" id="id_system">
                    <option value="1">IOS</option>
                    <option value="2">Adroid</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-6 space-top">
                <h5 class="spacing_form">Camera sau</h5>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-camera"></i></div>
                  </div>
                  <input type="text" id="rear_camera" class="form-control py-4" value=""
                    placeholder="Nhập thông số camera sau">
                </div>
              </div>
              <div class="col-6 space-top">
                <h5 class="spacing_form">Camera trước</h5>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-camera"></i></div>
                  </div>
                  <input type="text" id="front_camera" class="form-control py-4" value=""
                    placeholder="Nhập thông số camera trước">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-6 space-top">
                <h5 class="spacing_form">công nghệ màn hình</h5>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-hdd"></i></div>
                  </div>
                  <input type="text" id="display_technology" class="form-control py-4" value=""
                    placeholder="Nhập công nghệ">
                </div>
              </div>
              <div class="col-6 space-top">
                <h5 class="spacing_form">Ram</h5>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-sd-card"></i></div>
                  </div>
                  <input type="number" id="ram" class="form-control py-4" value="" placeholder="Nhập thông số bộ nhớ">
                </div>
              </div>
              <div class="col-6 space-top">
                <h5 class="spacing_form">Độ phân giải màn hình</h5>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-hdd"></i></div>
                  </div>
                  <input type="text" id="screen_resolution" class="form-control py-4" value=""
                    placeholder="Nhập thông số phân giải">
                </div>
              </div>
              <div class="col-6 space-top">
                <h5 class="spacing_form">Tần số quét</h5>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-camera"></i></div>
                  </div>
                  <input type="number" id="refresh_rate" class="form-control py-4" value="" placeholder="Tần số quét">
                </div>
              </div>
              <div class="col-6 space-top">
                <h5 class="spacing_form">Chíp xử lý</h5>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa-solid fa-microchip"></i></div>
                  </div>
                  <input type="text" id="chipset" class="form-control py-4" value="" placeholder="Chíp xử lý">
                </div>
              </div>
              <div class="col-6 space-top">
                <h5 class="spacing_form">Dung lượng pin</h5>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa-solid fa-battery-full"></i></div>
                  </div>
                  <input id="battery" type="number" min="1" class="form-control py-4" value=""
                    placeholder="Dung lượng pin">
                </div>
              </div>

            </div>
            <div class="space-top">
              <h5 class="spacing_form">Nhu cầu sử dụng</h5>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa-solid fa-person"></i></div>
                </div>
                <input type="text" id="usage_need" class="form-control py-4" value="" placeholder="Nhu cầu sử dụng">
              </div>
            </div>

            <div id="thongSoMoi">

              <div id="" class="boder-color top-s phoneoptions">
                <h3 class=" mt-3 text-center">Dòng sản phẩm</h3>

                <div class="mr-2 ml-2 row mb-2 ">
                  <div class="col-12">
                    <h5 class="spacing_form">Dung lượng bộ nhớ</h5>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"></i></div>
                      </div>
                      <input type="number" id="internal_storage" min="1" class="form-control py-4" value=""
                        placeholder="Nhập nội dung">
                    </div>
                  </div>
                  <div class=" col-6 space-top">
                    <h5 class="spacing_form">Giá bán(VND)</h5>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                      </div>
                      <input type="text" id="original_price" class="VND form-control py-4" value=""
                        placeholder="20.000.000">
                    </div>
                  </div>
                  <div class=" col-6 space-top">
                    <h5 class="spacing_form">Giá bán Khuyến mãi(VND)</h5>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                      </div>
                      <input id="discounted_price" type="text" class="VND form-control py-4" value=""
                        placeholder="20.000.000">
                    </div>
                  </div>
                </div>
                <!-- color -->
                <div id="color" data-numberofform="1">
                  <div class="boder-color1" id="addColorForm">
                    <div class="row boder-color1 coloradd" id="color_1">
                      <div class="col-3 space-top">
                        <h5 class="spacing_form">Màu sắc</h5>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-tag "></i></div>
                          </div>
                          <input type="text" id="selectColor" class="form-control py-4" value=""
                            placeholder="Nhập màu sắc">
                        </div>
                      </div>

                      <div class="col-4 space-top">
                        <h5 class="spacing_form ">hình ảnh</h5>
                        <input id="image" class="mt-2" type="file" accept=".jpg,.png,.jpge">
                      </div>
                      <div class="col-3 space-top">
                        <h5 class="spacing_form">Số lượng</h5>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-tag "></i></div>
                          </div>
                          <input type="number" id="amoutOfPr" class="form-control py-4" value=""
                            placeholder="Nhập số lượng">
                        </div>
                      </div>

                    </div>
                  </div>

                </div>
                <a data-toggle="modal" data-target="#themMau" data-id='color' style="float: right;" name="1"
                  class="btn icon-btn btn-success addcolor1" id="addcolor" href="#">
                  <span><i style="font-size: 1.2em;" class="fa fa-plus-circle" aria-hidden="true"></i></span>
                  Thêm màu
                </a>
              </div>

            </div>


            <a id='btnadd' style="float: right; color: white;" name="1" class="btn icon-btn btn-success">
              <span><i style="font-size: 1.2em;" class="fa fa-plus-circle" aria-hidden="true"></i></span>
              Thêm thông số kĩ thuật
            </a>


            <div class="row" style="margin-top: 60px;">
              <input id="themsanpham" header="<?php echo _WEB_ROOT_ ?>"
                class="btn btn-primary col-sm-3 row space-top space-bottom " type="submit" value="Thêm sản phẩm">
            </div>

          </form>
        </div>
      </div>
    </div>

    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->
  <!-- Modal -->
  <div class="modal fade" id="modal_inf" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Thông báo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Bạn đã thêm thành công
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>

        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo _WEB_ROOT_ ?>/public/asset/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo _WEB_ROOT_ ?>/public/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/js_admin/divide-page.js?v = 1.22342"></script>
  <!-- Menu Toggle Script -->
  <script>

  </script>


  <!-- chkeditor -->
  <script src="<?php echo _WEB_ROOT_ ?>/public/asset/ckeditor/ckeditor.js"></script>

  <!-- /chkeditor -->

  <!-- add color -->

</body>

</html>