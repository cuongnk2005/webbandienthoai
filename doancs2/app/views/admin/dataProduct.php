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
  <title>Thông tin sản phẩm</title>
  <meta name="description" content="Ela Admin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!---->
  <!--Font Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/admin.css?v = 1.2">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/admin1.css">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/admin2.css?v=1.2342">
  <!-- <link rel="stylesheet" href="../css/css_admin/admin1.css">
  <link rel="stylesheet" href="../css/css_admin/admin.css">
  <link rel="stylesheet" href="assets/css/admin.css"> -->


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
          <li>
            <a href="<?php echo _WEB_ROOT_ ?>/admin/AdminUser/loadUser"
              class="list-group-item list-group-item-action  ">
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
        <div class="mb-5 mt-3 ">
          <div class="content">
            <div class="animated fadeIn">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-body">
                      <div class=" mb-2">
                        <h4 class="text-center mt-3 mb-4">Danh sách sản phẩm</h4>
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
                                type="text" placeholder="Search.."></span>
                          </div>

                        </div> -->
                        <a href="<?php echo _WEB_ROOT_ ?>/admin/adminProduct/addProduct"><button data-toggle="tooltip"
                            data-placement="top" title="Thêm sản phẩm" class="btn btn-success btn-add"><i
                              class="fas fa-plus-square"></i></button></a>
                        <section id="ajax">
                          <table id="bootstrap-data-table" class="table table-hover table-text-center">
                            <thead class="thead-light">
                              <tr>
                                <th>Hình ảnh</th>
                                <th>Mã sản phẩm</th>
                                <th>Tên</th>
                                <th data-toggle="tooltip" data-placement="top" title="Hãng sản xuất">Hãng SX</th>
                                <th>Hệ điều hành</th>
                                <th data-toggle="tooltip" data-placement="top" title="Số lượng còn lại">SL còn lại</th>
                                <th data-toggle="tooltip" data-placement="top" title="Số lượng đã bán">SL đã bán</th>
                                <th>Giá bán</th>
                                <th></th>

                              </tr>
                            </thead>

                            <tbody id="content-table">
                              <?php while ($row = mysqli_fetch_array($dssp)) {

                                ?>
                                <tr>
                                  <td style="max-width: 140px;"><img
                                      src="<?php echo _WEB_ROOT_ . '/public/asset/images/product1/' . $row['image'] ?>"
                                      width="100px" height="100px" alt=""></td>
                                  <td><?php echo $row[0] ?></td>
                                  <td><?php echo $row['product_name'] ?></td>
                                  <td><?php echo $brands[$row['brand_id']]; ?></td>
                                  <td><?php echo $hdh[$row['id_system']]; ?></td>
                                  <td><?php echo $row['amout'] ?></td>
                                  <td><?php echo $row['sold'] ?></td>
                                  <td> <span
                                      class="color-price"><?php echo number_format($row['discounted_price'], 0, ',', '.'); ?>
                                    </span> đ</td>
                                  <td class="row" style="border: none;">
                                    <div style="margin: auto;">
                                      <a
                                        href="<?php echo _WEB_ROOT_ ?>/admin/adminProduct/uppdateProduct/<?php echo $row[0] ?>"><button
                                          class="m-wTD btn btn-primary" data-toggle="tooltip" data-placement="top"
                                          title="Chỉnh sửa" data-toggle="modal" data-target="#editUser"> <i
                                            class="txt-center fas fa-edit"></i></button></a>
                                      <button class="btn btn-danger btndelete sizeTh1" onclick="giveIdPr(this)"
                                        data-toggle="modal" data-id="<?php echo $row[0] ?>" data-target="#delete"
                                        data-toggle="tooltip" data-placement="top" title="Xóa"><i
                                          class="txt-center menu-icon fas fa-trash-alt"></i></button>
                                    </div>

                                  </td>
                                </tr>
                              <?php } ?>

                            </tbody>
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
                        </section>
                      </div>
                    </div>
                  </div>


                </div>
              </div><!-- .animated -->
            </div><!-- .content -->


          </div><!-- /#right-panel -->
        </div>
      </div>
      <!-- /#page-content-wrapper -->

    </div>
    <!-- delete product -->
    <!-- Modal -->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
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

  </div>
  <!-- Right Panel -->
  <script src="<?php echo _WEB_ROOT_ ?>/public/asset/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo _WEB_ROOT_ ?>/public/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    let idproduct;
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
    $(document).ready(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });
    $(document).ready(function () {
      $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#content-table tr").filter(function () {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    function giveIdPr(button) {
      idproduct = $(button).data("id");

    }
    function acceptDelete() {
      $('#btnAcceptDelete').on('click', function () {

        $.ajax({

          method: "POST",
          url: '<?php echo _WEB_ROOT_ ?>' + '/admin/adminProduct/ajaxDeletePr/' + idproduct,
        })
          .done(function (data) {
            // history.pushState(null, '', this.url);

            console.log('dữ liệu được trả về' + data);
            let pagecurrent = <?php echo $pagecurrent ?> + 1;

            $.ajax({
              method: "post",
              url: '<?php echo _WEB_ROOT_ ?>/admin/AdminProduct/ajaxAdmin/' + pagecurrent,

            })
              .done(function (data) {
                // history.pushState(null, '', this.url);

                $('#ajax').html(data);
              })
              .fail(function (data) { });
          })

      });
    }
    acceptDelete();


  </script>

  <!-- pagination -->
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
        url: '<?php echo _WEB_ROOT_ ?>/admin/AdminProduct/ajaxAdmin/' + page,

      })
        .done(function (data) {
          // history.pushState(null, '', this.url);

          $('#ajax').html(data);
        })
        .fail(function (data) { });


      var newUrl = '<?php echo _WEB_ROOT_; ?>/admin/AdminProduct/adminProduct/' + page;
      // Sử dụng history.pushState để thay đổi URL mà không tải lại trang
      window.history.pushState(null, null, newUrl);

    });

  </script>
</body>

</html>