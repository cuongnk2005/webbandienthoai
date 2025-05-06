<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Quản lí đơn hàng</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/vendor/bootstrap/css/bootstrap.min.css">
  <!-- css allmin -->
  <link href="<?php echo _WEB_ROOT_ ?>/public/asset/css/all.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
  </link><!-- Custom styles for this template -->
  <!-- /css/css_admin/admin.css ~ admin2 -->
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/admin2.css">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/toast.css?v=1.7">
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
              class="list-group-item list-group-item-action  ">
              Thông tin người dùng<i class="menu-icon fas fa-users font-list"></i></a>
          </li>
          <li>
            <a href="<?php echo _WEB_ROOT_ ?>/admin/AdminProduct/adminProduct"
              class="list-group-item list-group-item-action "> Thông tin sản phẩm
              <i class="menu-icon fas fa-mobile-alt font-list"></i></a>
          </li>
          <li>
            <a href="<?php echo _WEB_ROOT_ ?>/admin/ManagerOrders"
              class="list-group-item list-group-item-action active  ">
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
        <div class="border mt-3">
          <h4 class="text-center mt-3 mb-4">Quản lí đơn hàng</h4>
          <!-- <div class="row">
            <div class="show-page " style="margin-left: 50px;">

              Tìm kiếm <span> <input id="myInput" style="padding-left: 15px; border: 0.5px solid grey;" type="text"
                  placeholder="Search.."></span>
            </div>
          </div> -->
          <table class="table table-hover table-text-center" id="receipt-table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Mã khách hàng</th>
                <th scope="col">Phương thức nhận hàng</th>

                <th scope="col">Tổng giá trị</th>
                <th scope="col">Ngày lập</th>
                <th scope="col">Trạng thái đơn hàng</th>

                <th scope="col">Chi tiết đơn hàng</th>
                <th scope="col">Xác nhận đơn hàng</th>

              </tr>
            </thead>
            <tbody id="content-table">
              <?php while ($row = mysqli_fetch_array($getAllOrders)) { ?>
                <tr>
                  <td><?php echo $row['order_id'] ?></td>
                  <td><?php echo $row['user_id'] ?></td>
                  <td><?php echo $row['delivery_method'] ?></td>
                  <td>
                    <?php
                    $total_payment = $row['total_payment'];
                    echo number_format($total_payment, 0, ',', '.') . 'đ';
                    ?>
                  </td>
                  <td>
                    <?php
                    $date = date_create($row['created_at']);
                    echo date_format($date, 'd/m/Y');
                    ?>
                  </td>
                  <td id="status-<?php echo $row['order_id'] ?>"><?php echo $row['status'] ?></td>
                  <input type="hidden" name="order_id" value="<?php echo $row['order_id'] ?>">
                  <td class="detail"><a data-toggle="modal" data-target="#exampleModal"
                      href='<?php echo _WEB_ROOT_ ?>/admin/ManagerOrders/getOrderDetailByOrderId?order_id=<?php echo $row['order_id'] ?>'>
                      Chi tiết <i class="fa fa-external-link-alt"></i></a>


                    <!-- Modal -->

                  </td>
                  <td class="confirm">
                    <!-- Xác nhận đơn hàng -->
                    <span>
                      <label title="Xác nhận đơn hàng" class="label-check active" data-toggle="modal"
                        data-target="#confirmOrderModal<?php echo $row['order_id'] ?>"
                        data-order-id="<?php echo $row['order_id'] ?>">
                        <i class="fas fa-check-square"></i>
                      </label>
                      <!-- Modal xác nhận đơn hàng -->
                      <div class="modal fade" id="confirmOrderModal<?php echo $row['order_id'] ?>" tabindex="-1"
                        aria-labelledby="confirmOrderModalLabel<?php echo $row['order_id'] ?>" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="confirmOrderModalLabel<?php echo $row['order_id'] ?>">Xác nhận
                                đơn hàng</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true">&times;</i>
                              </button>
                            </div>
                            <div class="modal-body">
                              Bạn có muốn xác nhận đơn hàng này không?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"
                                onclick="updateOrderStatus('Đã xác nhận', this, <?php echo $row['order_id'] ?>)">Xác
                                nhận</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>

                    <!-- Xác nhận vận chuyển -->
                    <span>
                      <label title="Xác nhận vận chuyển thành công" class="label-delivered disable" data-toggle="modal"
                        data-target="#confirmDeliveredModal<?php echo $row['order_id'] ?>"
                        data-order-id="<?php echo $row['order_id'] ?>">
                        <i class="fas fa-truck"></i>
                      </label>
                      <!-- Modal xác nhận vận chuyển -->
                      <div class="modal fade" id="confirmDeliveredModal<?php echo $row['order_id'] ?>" tabindex="-1"
                        aria-labelledby="confirmDeliveredModalLabel<?php echo $row['order_id'] ?>" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="confirmDeliveredModalLabel<?php echo $row['order_id'] ?>">Xác
                                nhận vận chuyển</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true">&times;</i>
                              </button>
                            </div>
                            <div class="modal-body">
                              Bạn có muốn xác nhận vận chuyển thành công?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"
                                onclick="updateOrderStatus('Đã giao', this,<?php echo $row['order_id'] ?>)">Xác
                                nhận</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>

                    <!-- Hủy đơn hàng -->
                    <span>
                      <label title="Hủy đơn hàng" class="label-cancel warning" data-toggle="modal"
                        data-target="#cancelOrderModal<?php echo $row['order_id'] ?>"
                        data-order-id="<?php echo $row['order_id'] ?>">
                        <i class="fas fa-trash"></i>
                      </label>
                      <!-- Modal hủy đơn hàng -->
                      <div class="modal fade" id="cancelOrderModal<?php echo $row['order_id'] ?>" tabindex="-1"
                        aria-labelledby="cancelOrderModalLabel<?php echo $row['order_id'] ?>" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="cancelOrderModalLabel<?php echo $row['order_id'] ?>">Xác nhận
                                hủy đơn</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true">&times;</i>
                              </button>
                            </div>
                            <div class="modal-body">
                              Bạn có muốn xác nhận hủy đơn hàng này không?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                              <button type="button" class="btn btn-primary" data-dismiss="modal"
                                onclick="updateOrderStatus('Đã hủy', this, <?php echo $row['order_id'] ?>)">Xác
                                nhận</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </span>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
          <div id="toast"></div>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog  detail-modal">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h5>Đơn hàng: <?php
                  ?></h5>
                  <table width="100%" class="text-center  table content-detail  table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th>Mã khách hàng</th>
                        <th>Tên khách hàng</th>
                        <th><span title="Số điện thoại"> Số điện thoại</span></th>
                        <th>Hình thức thanh toán</th>
                        <th style="min-width: 300px;"> Địa chỉ</th>

                      </tr>
                    </thead>
                    <tr>


                      <td>KH01</td>
                      <td>Trần Thanh Bảo</td>
                      <td><span title="Số điện thoại"> 09128374822</span></td>
                      <td>Thanh toán khi nhận hàng</td>
                      <td style="min-width: 300px;"> Khu phố 6, phường Linh Trung, quận Thủ Đức,TP Hồ Chí Minh</th>

                    </tr>
                  </table>
                  <table width="100%" class="text-center  table content-detail  table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th>Hình ảnh</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Màu sắc</th>
                        <th>Số lượng</th>
                        <th> Giá</th>

                      </tr>
                    </thead>
                    <tr>
                      <td style="max-width: 140px;"><img src="../images/Product/i12black.png" width="100px"
                          height="100px" alt=""></td>
                      <td>SP01</td>
                      <td>IPhone X 64GB</td>
                      <td><span title="Số điện thoại"> Đen</span></td>
                      <td style="min-width: 300px;">1</th>
                      <td style="min-width: 300px;">17.000.000<span style="text-decoration: underline;">đ</span></th>
                    </tr>
                    <tr>
                      <td style="max-width: 140px;"><img src="../images/Product/samsung.png" width="100px"
                          height="100px" alt=""></td>
                      <td>SP02</td>
                      <td>Samsung Galaxy S10</td>
                      <td><span title="Số điện thoại">Trắng</span></td>
                      <td style="min-width: 300px;">1</th>
                      <td style="min-width: 300px;">23.000.000<span style="text-decoration: underline;">đ</span></th>
                    </tr>
                  </table>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-navigation">
          <div class="beta"> <button onclick="previous_page()"> Trước</button>
            <span id="page-number">
              <button class="active">1</button>
            </span>
            <button onclick="next_page()"> Sau</button>
          </div>
        </div>


      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/toast.js"></script>
  <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/jquery.min.js"></script>
  <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/js_admin/bootstrap.bundle.min.js"></script>
  <!-- <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/js_admin/divide-page.js"></script>
  <script src= "<?php echo _WEB_ROOT_ ?>/public/asset/js/js_admin/confirmed.js"></script> -->

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
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
    $('.detail a').click(function (event) {
      event.preventDefault(); // Ngăn chặn hành vi mặc định của thẻ <a>

      var url = $(this).attr('href'); // Lấy URL từ href của liên kết

      // Gửi yêu cầu AJAX
      $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
      })
        .done(function (response) { // Khi yêu cầu thành công
          if (response && response.orderDetail && response.orderItems) {
            console.log(response.orderItems);
            // Tạo nội dung động cho modal
            var modalContent = `
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <h5>Đơn hàng: ${response.orderDetail.order_id}</h5>
                          <table width="100%" class="text-center table content-detail table-hover">
                              <thead class="thead-light">
                                  <tr>
                                      <th>Mã khách hàng</th>
                                      <th>Tên khách hàng</th>
                                      <th><span title="Số điện thoại">Số điện thoại</span></th>
                                      <th>Hình thức thanh toán</th>
                                      <th>Trạng thái thanh toán</th>
                                      <th style="min-width: 300px;">Địa chỉ</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>${response.orderDetail.user_id}</td>
                                      <td>${response.orderDetail.receiver_name}</td>
                                      <td>${response.orderDetail.receiver_phone}</td>
                                      <td>${response.orderDetail.payment_method}</td>
                                      <td>${response.orderDetail.payment_status}</td>
                                      <td style="min-width: 300px;">${response.orderDetail.shipping_address}</td>
                                  </tr>
                              </tbody>
                          </table>
                          <table width="100%" class="text-center table content-detail table-hover">
                              <thead class="thead-light">
                                  <tr>
                                      <th>Hình ảnh</th>
                                      <th>Mã sản phẩm</th>
                                      <th>Tên sản phẩm</th>
                                      <th>Màu sắc</th>
                                      <th>Số lượng</th>
                                      <th>Giá</th>
                                      <th>Thành tiền</th>
                                  </tr>
                              </thead>
                            <tbody>
                                ${response.orderItems.map(item => {
              let imgUrl = "<?php echo _WEB_ROOT_; ?>/public/asset/images/product1/" + item.image;
              return `
                                        <tr>
                                            <td style="max-width: 140px;">
                                                <img src="${imgUrl}" width="100px" height="100px" alt="">
                                            </td>
                                            <td>${item.product_id}</td>
                                            <td>${item.product_name}</td>
                                            <td>${item.color}</td>
                                            <td>${item.quantity}</td>
                                           <td>${Number(item.discounted_price).toLocaleString('vi-VN')}<span style="text-decoration: underline;">đ</span></td>
                                            <td>${Number(item.discounted_price * item.quantity).toLocaleString('vi-VN')}<span style="text-decoration: underline;">đ</span></td>
                                        </tr>
                                    `;
            }).join('')}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6" style="text-align: right;">Tổng tiền:</td>
                                    <td>${Number(response.orderDetail.total_before_shipping_fee).toLocaleString('vi-VN')}<span style="text-decoration: underline;">đ</span></td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: right;">Phí vận chuyển:</td>
                                    <td>${Number(response.orderDetail.shipping_fee).toLocaleString('vi-VN')}<span style="text-decoration: underline;">đ</span></td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: right;">Giảm giá:</td>
                                    <td>${Number(response.orderDetail.discount_value).toLocaleString('vi-VN')}<span style="text-decoration: underline;">đ</span></td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: right;">Tổng thanh toán:</td>
                                    <td>${Number(response.orderDetail.total_payment).toLocaleString('vi-VN')}<span style="text-decoration: underline;">đ</span></td>
                                </tr>
                            </tfoot>
                          </table>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                      </div>
                  </div>
              `;

            // Gắn nội dung vào modal
            $('#exampleModal .modal-dialog').html(modalContent);

            // Hiển thị modal
            $('#exampleModal').modal('show');
          } else {
            toast({
              title: "Thất bại!",
              message: "Không thể tải chi tiết đơn hàng.",
              type: "error",
              duration: 5000
            });
          }
        })
        .fail(function (xhr, status, error) { // Khi có lỗi xảy ra
          console.error("Status:", status);
          console.error("Error:", error);
          console.error("Response:", xhr.responseText);
          toast({
            title: "Lỗi hệ thống",
            message: "Có lỗi xảy ra khi xử lý yêu cầu. Vui lòng thử lại.",
            type: "error",
            duration: 5000
          });
        });
    });

  </script>
  <Script></Script>
  <script>
    // Hàm gửi yêu cầu AJAX để cập nhật trạng thái đơn hàng
    function updateOrderStatus(status, element, order_id) {
      // Lấy thông tin đơn hàng từ dữ liệu trang hoặc từ modal
      var orderId = order_id// Lấy order_id từ label mà bạn nhấn vào
      console.log(orderId);
      console.log(status);
      // Gửi dữ liệu qua AJAX
      $.ajax({
        url: '<?php echo _WEB_ROOT_; ?>/admin/ManagerOrders/updateOrderStatus', // Đường dẫn URL để xử lý cập nhật trạng thái
        method: 'POST',
        data: {
          order_id: orderId,  // ID đơn hàng cần cập nhật
          status: status,
          // Trạng thái mới
        },
        dataType: 'json',
        success: function (response) {
          // Kiểm tra xem có trả về thành công không
          if (response.success) {
            toast({
              title: "Thành công!",
              message: "Cập nhật trạng thái đơn hàng thành công.",
              type: "success",
              duration: 5000
            });
            // Cập nhật lại giao diện trên trang chính với trạng thái mới
            updateOrderStatusOnPage(orderId, status);
          } else {
            alert('Cập nhật trạng thái thất bại!');
          }
        },
        error: function (xhr, status, error) {
          console.error("Status:", status);
          console.error("Error:", error);
          console.error("Response:", xhr.responseText);
          alert('Có lỗi xảy ra khi cập nhật trạng thái!');
        }
      });
    }

    // Hàm cập nhật trạng thái đơn hàng trên giao diện trang chính
    function updateOrderStatusOnPage(orderId, status) {

      // Tìm đơn hàng trên trang và cập nhật trạng thái
      var statusText = '';
      if (status === 'Đã xác nhận') {
        statusText = 'Đã xác nhận';
      } else if (status === 'Đã giao') {
        statusText = 'Đã giao';
      } else if (status === 'Đã hủy') {
        statusText = 'Đã hủy';
      }

      // Cập nhật trạng thái tương ứng cho đơn hàng với ID orderId
      // Cập nhật nội dung của thẻ <td id="status">
      // Cập nhật nội dung của ô trạng thái
      document.getElementById('status-' + orderId).innerText = statusText;
    }

  </script>

</body>

</html>