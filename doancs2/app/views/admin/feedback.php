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
  <title>Phản hồi khách hàng</title>
  <meta name="description" content="Ela Admin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!---->
  <!--Font Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/admin.css">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/admin1.css">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/admin2.css">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/fonts/fontawesome-free-5.15.4-web/css/all.min.css">

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
            <a href="<?php echo _WEB_ROOT_ ?>/admin/feedback" class="list-group-item list-group-item-action active ">
              Phản hồi
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
        <div class="mb-5 mt-3 ">
          <div class="content">
            <div class="animated fadeIn">
              <div class="row">

                <div class="col-md-12">
                  <div class="card">
                    <div class="card-body">
                      <div class=" mb-2">
                        <h4 class="text-center mt-3 mb-4">Phản hồi của khách hàng</h4>
                        <div class="row">
                          <!-- <div class="show-page mb-3 ml-3">

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

                            Tìm kiếm <span> <input id="myInput" style="padding-left: 15px; border: 0.5px solid grey;"
                                text" placeholder="Search.."></span>
                          </div>

                        </div> -->

                          <table id="bootstrap-data-table" class="table table-hover text-left">
                            <thead class="thead-light">
                              <tr>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Thời gian</th>
                                <th>Vấn đề</th>
                                <th>Lời nhắn</th>
                                <th></th>
                              </tr>
                            </thead>

                            <tbody id="content-table">
                              <?php while ($row = mysqli_fetch_array($getAllFeedback)) { ?>
                                <tr data-id="<?php echo $row['id']; ?>">
                                  <td><?php echo $row['name'] ?></td>
                                  <td><?php echo $row['email'] ?></td>
                                  <td><?php echo $row['phone'] ?></td>
                                  <td><?php echo $row['created_at'] ?></td>
                                  <td><?php echo $row['subject'] ?></td>
                                  <td class="feedback">
                                    <?php echo $row['message'] ?>
                                  </td>
                                  <td class="row" style="border: none;">
                                    <div style="margin: auto;">
                                      <button class="btn btn-danger sizeTh1" data-toggle="modal" data-target="#delete"
                                        data-toggle="tooltip" data-placement="top" title="Xóa">
                                        <i class="txt-center menu-icon fas fa-trash-alt"></i>
                                      </button>
                                    </div>
                                  </td>
                                </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>


                  </div>
                </div><!-- .animated -->
              </div><!-- .content -->

              <!--/Modal add-->

            </div><!-- /#right-panel -->
          </div>
        </div>
        <!-- /#page-content-wrapper -->
      </div>
      <!-- feedback -->
      <!-- delete product -->
      <!-- Modal -->
      <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa phản hồi của khách hàng</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Bạn có muốn xóa phản hồi này.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
              <button type="button" data-dismiss="modal" class="btn btn-primary">Đồng ý</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Panel -->
      <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/toast.js"></script>
      <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/jquery.min.js"></script>
      <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/js_admin/bootstrap.bundle.min.js"></script>
      <script>
        // Sự kiện khi nhấn nút "Đồng ý" trong modal
        $('#delete .btn-primary').click(function () {
          // Lấy thông tin phản hồi cần xóa (ví dụ: ID phản hồi)
          var feedbackRow = $('#delete').data('row'); // Dòng chứa phản hồi cần xóa
          var feedbackId = feedbackRow.data('id');   // Giả sử mỗi dòng chứa data-id là ID phản hồi


          // Gửi yêu cầu AJAX đến máy chủ
          $.ajax({
            url: '<?php echo _WEB_ROOT_ ?>/admin/feedback/deleteFeedback',  // URL xử lý xóa
            type: 'POST',                   // Phương thức POST
            data: { id: feedbackId },       // Dữ liệu gửi đi (ID phản hồi)
            dataType: 'json',               // Định dạng dữ liệu trả về
            success: function (response) {
              if (response.success) {
                // Nếu xóa thành công, xóa dòng trong bảng
                feedbackRow.remove();

                // Hiển thị thông báo thành công (nếu cần)
                alert('Phản hồi đã được xóa thành công!');
              } else {
                // Nếu có lỗi, hiển thị thông báo lỗi
                alert('Xóa phản hồi không thành công: ' + response.error);
              }
            },
            error: function () {
              // Xử lý khi xảy ra lỗi
              alert('Có lỗi xảy ra khi gửi yêu cầu xóa!');
            }
          });
        });

        // Gán dòng được chọn vào modal khi hiển thị modal
        $('.btn-danger').click(function () {
          var row = $(this).closest('tr'); // Lấy dòng chứa nút được nhấn
          $('#delete').data('row', row);  // Lưu trữ dòng này vào modal
        });

      </script>

      <!-- <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script> -->

      <!-- <script type="text/javascript">
      $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
      });
    </script> -->


      <!-- <script>
      $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script> -->

      <!-- search -->
      <!-- <script>
      $(document).ready(function () {
        $("#myInput").on("keyup", function () {
          var value = $(this).val().toLowerCase();
          $("#content-table tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script> -->



</body>

</html>