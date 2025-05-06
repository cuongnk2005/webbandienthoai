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
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/admin2.css?v=12.21243">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/admin1.css?v=1.2">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/updateform.css?v=1.2">
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
            <a href="<?php echo _WEB_ROOT_ ?>/admin/AdminUser/loadUser" class="list-group-item list-group-item-action">
              Thông tin người dùng<i class="menu-icon fas fa-users font-list"></i></a>
          </li>
          <li>
            <a href="<?php echo _WEB_ROOT_ ?>/admin/AdminProduct/adminProduct"
              class="list-group-item list-group-item-action active"> Thông tin sản phẩm
              <i class="menu-icon fas fa-mobile-alt font-list"></i></a>
          </li>
          <li>
            <a href="<?php echo _WEB_ROOT_ ?>/admin/AdminBrand" class="list-group-item list-group-item-action  "> Thông
              tin
              thương hiệu <i class="menu-icon fas fa-archway"></i></a>
          </li>
          <li>
            <a href="<?php echo _WEB_ROOT_ ?>/admin/Dashboard/adminbrand"
              class="list-group-item list-group-item-action  "> Thông
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
      <div class="container-fluid setcontent">
        <div class="container-fluid mt-4 ">
          <h2 style="text-align: center;">Cập nhật sản phẩm</h2>

          <?php $product = mysqli_fetch_array($dssp1); ?>
          <div id="idsanpham" data-idsanpham="<?php echo $product['product_id'] ?>" class="row">
            <div class="col-6 space-top">
              <h5 class="spacing_form">Tên sản phẩm</h5>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                </div>
                <input type="text" id="inputname" class="form-control py-4"
                  value="<?php echo $product['product_name'] ?>" placeholder="Nhập tên sản phẩm">
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
          </div>
          <div class="form-group space-top " style="margin-top: 70px;">
            <h5 class="spacing_form">Giới thiệu sản phẩm</h5>
            <!-- (2): textarea sẽ được thay thế bởi CKEditor -->
            <textarea id="edit" class="size" name="edit" cols="200" rows="280">
                    </textarea>
            <!-- (3): Code Javascript thay thế textarea có id='editor1' bởi CKEditor -->
            <script>
              const editor = CKEDITOR.replace('edit', {
                width: '100%',  // Đặt chiều rộng
                height: '400px', // Đặt chiều cao
              });
              // let highlightFeature = htmlspecialchars_decode($product['HighlightFeature'], ENT_QUOTES);
              editor.setData(`<?php echo addslashes($product['HighlightFeature']); ?>`);

            </script>
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
                <input type="text" value="<?php echo $product['screen_size'] ?>" id="screen_size"
                  class="form-control py-4" value="" placeholder="Nhập kích thước màn hình">
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
                <input type="text" value="<?php echo $product['rear_camera'] ?>" id="rear_camera"
                  class="form-control py-4" value="" placeholder="Nhập thông số camera sau">
              </div>
            </div>
            <div class="col-6 space-top">
              <h5 class="spacing_form">Camera trước</h5>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-camera"></i></div>
                </div>
                <input type="text" id="front_camera" class="form-control py-4"
                  value="<?php echo $product['front_camera'] ?>" placeholder="Nhập thông số camera trước">
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
                <input type="text" value="<?php echo $product['display_technology'] ?>" id="display_technology"
                  class="form-control py-4" value="" placeholder="Nhập công nghệ">
              </div>
            </div>
            <div class="col-6 space-top">
              <h5 class="spacing_form">Ram</h5>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-sd-card"></i></div>
                </div>
                <input type="number" value="<?php echo preg_replace('/\D/', '', $product['ram']); ?>" id="ram"
                  class="form-control py-4" value="" placeholder="Nhập thông số bộ nhớ">
              </div>
            </div>
            <div class="col-6 space-top">
              <h5 class="spacing_form">Độ phân giải màn hình</h5>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-hdd"></i></div>
                </div>
                <input type="text" value="<?php echo $product['screen_resolution'] ?>" id="screen_resolution"
                  class="form-control py-4" value="" placeholder="Nhập thông số phân giải">
              </div>
            </div>
            <div class="col-6 space-top">
              <h5 class="spacing_form">Tần số quét</h5>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-camera"></i></div>
                </div>
                <input type="number" value="<?php echo floatval($product['refresh_rate']) ?>" id="refresh_rate"
                  class="form-control py-4" value="" placeholder="Tần số quét">
              </div>
            </div>
            <div class="col-6 space-top">
              <h5 class="spacing_form">Chíp xử lý</h5>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa-solid fa-microchip"></i></div>
                </div>
                <input type="text" value="<?php echo $product['chipset'] ?>" id="chipset" class="form-control py-4"
                  value="" placeholder="Chíp xử lý">
              </div>
            </div>
            <div class="col-6 space-top">
              <h5 class="spacing_form">Dung lượng pin</h5>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa-solid fa-battery-full"></i></div>
                </div>
                <input id="battery" value="<?php echo filter_var($product['battery'], FILTER_SANITIZE_NUMBER_INT) ?>"
                  type="number" min="1" class="form-control py-4" value="" placeholder="Dung lượng pin">
              </div>
            </div>

          </div>
          <div class="space-top">
            <h5 class="spacing_form">Nhu cầu sử dụng</h5>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-solid fa-person"></i></div>
              </div>
              <input type="text" value="<?php echo $product['usage_need'] ?>" id="usage_need" class="form-control py-4"
                value="" placeholder="Nhu cầu sử dụng">
            </div>
          </div>

          <div id="thongSoMoi" class="mt-4">

            <h3 class="text-center">Các dòng sản phẩm</h3>
            <button data-toggle="modal" data-target="#myModal" title="Thêm sản phẩm" class="btn btn-success btn-add"><i
                class="fas fa-plus-square"></i></button>
            <table id="bootstrap-data-table" class="table table-hover table-text-center">
              <thead class="thead-light">
                <tr>
                  <th>Hình ảnh</th>
                  <th>Tên</th>
                  <th>Dung lượng</th>
                  <th>màu sắc</th>
                  <th data-toggle="tooltip" data-placement="top" title="Số lượng còn lại">SL còn lại</th>
                  <th data-toggle="tooltip" data-placement="top" title="Số lượng đã bán">SL đã bán</th>
                  <th>Giá bán</th>
                  <th></th>

                </tr>
              </thead>

              <tbody id="content-table">
                <?php
                if ($dssp->num_rows > 0) {



                  while ($row = mysqli_fetch_array($dssp)) {

                    ?>
                    <tr>
                      <td style="max-width: 140px;"><img
                          src="<?php echo _WEB_ROOT_ . '/public/asset/images/product1/' . $row['image'] ?>?v=13.12452332"
                          width="100px" height="100px" alt=""></td>
                      <td><?php echo $row['product_name'] ?></td>
                      <td><?php echo $row['internal_storage'] ?></td>
                      <td><?php echo $row['color'] ?></td>
                      <td><?php echo $row['amout'] ?></td>
                      <td><?php echo $row['sold'] ?></td>
                      <td> <span class="color-price"><?php echo number_format($row['discounted_price'], 0, ',', '.'); ?>
                        </span> đ</td>
                      <td class="row" style="border: none;">
                        <div style="margin: auto;">
                          <button class="m-wTD btn btn-primary updatePhoneoption" data-id="<?php echo $row['id'] ?>"> <i
                              class="txt-center fas fa-edit"></i>
                          </button>
                          <button data-id=<?php echo $row['id'] ?> class="btn btn-danger btn-delete sizeTh1"
                            data-toggle="modal" data-target="#delete" data-toggle="tooltip" data-placement="top"
                            onclick="getphoneOptionID(this)" title="Xóa"><i
                              class="txt-center menu-icon fas fa-trash-alt"></i></button>
                        </div>

                      </td>
                    </tr>
                  <?php }
                } ?>

              </tbody>
            </table>

          </div>
          <div class="row" style="margin-top: 60px;">
            <input data-id="<?php echo $product['product_id'] ?>" id="themsanpham" header="<?php echo _WEB_ROOT_ ?> "
              class="btn btn-primary col-sm-3 row space-top space-bottom " type="submit" value="Cập nhật sản phẩm">
          </div>


        </div>
      </div>
    </div>

    <!-- /#page-content-wrapper -->
  </div>

  <!-- modal add -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Thêm sản phẩm</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">

          <div id="color" data-numberofform="1">
            <div class="boder-color1" id="addColorForm">
              <div class="row boder-color1 coloradd" id="color-detailpr">
                <div class="col-4 space-top">
                  <h5 class="spacing_form">Màu sắc</h5>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-tag "></i></div>
                    </div>
                    <input type="text" id="selectColor-detailpr" class="form-control py-4" value=""
                      placeholder="Nhập màu sắc">
                  </div>
                </div>

                <div class="col-4 space-top">
                  <h5 class="spacing_form ">hình ảnh</h5>
                  <input id="image-detailpr" class="mt-2" type="file" accept=".jpg,.png,.jpge">
                </div>
                <div class="col-4 space-top">
                  <h5 class="spacing_form">Số lượng</h5>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-tag "></i></div>
                    </div>
                    <input type="number" id="amoutOfPr-detailpr" class="form-control py-4" value=""
                      placeholder="Nhập số lượng">
                  </div>
                </div>
                <div class="col-12 space-top">
                  <h5 class="spacing_form">Dòng sản phẩm</h5>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-cogs"></i></div>
                    </div>
                    <select class="form-control w" id="id-phoneOption">
                      <?php while ($row = mysqli_fetch_array($phoneOption)) { ?>
                        <option value="<?php echo $row['specificphone_id'] ?>"><?php echo $row['internal_storage'] ?>
                        </option>

                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="button" data-dismiss="modal" id="btnAddPhoneOption" class="btn btn-primary">Đồng ý</button>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- modal add -->

  <!-- modal update -->
  <div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-update">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bảng chỉnh sửa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="body-modal">

        </div>
        <div class="modal-footer">
          <button type="button" id="btnclosemodal" class="btn btn-secondary" aria-label="Close"
            data-bs-dismiss="modal">Đóng</button>
          <button type="button" id="btncapnhat" data-id="" class="btn btn-primary">Cập nhật</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa sản phẩm</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Bạn có muốn xóa sản phẩm này.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
          <button type="button" data-dismiss="modal" id="btnAcceptDelete" class="btn btn-primary">Đồng ý</button>
        </div>
      </div>
    </div>
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
  <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/js_admin/updateproduct.js?v = 1342.342"></script>
  <!-- Menu Toggle Script -->
  <script>
    document.getElementById('brands').value = '<?php echo $product['brand_id'] ?>';
    document.getElementById('id_system').value = '<?php echo $product['id_system'] ?>';

  </script>
  <!-- chkeditor -->
  <script src="<?php echo _WEB_ROOT_ ?>/public/asset/ckeditor/ckeditor.js"></script>
  <script>

  </script>
  <!-- /chkeditor -->

  <!-- add color -->

</body>

</html>