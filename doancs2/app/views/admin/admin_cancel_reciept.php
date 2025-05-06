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
    <title>Đơn hàng bị hủy</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!---->
    <!--Font Awesome-->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/admin.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/admin1.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/css/admin/admin2.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT_ ?>/public/asset/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="<?php echo _WEB_ROOT_ ?>/public/asset/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <style>
        #exampleModal {
            display: none;
        }

        .table {
            width: 100%;
            /* Bảng chiếm toàn bộ chiều ngang */
            table-layout: fixed;
            /* Các cột được phân chia đều */
            word-wrap: break-word;
            /* Văn bản tự động xuống dòng nếu quá dài */
        }

        .table th,
        .table td {
            text-align: center;
            /* Canh giữa nội dung */
            vertical-align: middle;
            /* Căn giữa theo chiều dọc */
        }
    </style>

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
                            class="list-group-item list-group-item-action  ">
                            Quản lí đơn
                            hàng <i class="menu-icon fas fa-shopping-cart font-list"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo _WEB_ROOT_ ?>/admin/AdminBrand"
                            class="list-group-item list-group-item-action  "> Thông
                            tin
                            thương hiệu <i class="menu-icon fas fa-archway"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo _WEB_ROOT_ ?>/admin/ManagerOrders/getOrdersCancle"
                            class="list-group-item list-group-item-action active"> Đơn
                            hàng bị hủy <i class="menu-icon fas fa-phone-slash"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo _WEB_ROOT_ ?>/admin/feedback" class="list-group-item list-group-item-action "> Phản hồi khách hàng <i
                                class="menu-icon far fa-paper-plane"></i></a>
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
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                    <div class="modal fade" id="log-out" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <h4 class="text-center mt-3 mb-4">Danh sách đơn hàng bị hủy</h4>
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
                                                                                                <div class="show-page " style="margin-left: 50px;">

                                                                                                    Tìm kiếm <span> <input id="myInput"
                                                                                                            style="padding-left: 15px; border: 0.5px solid grey;"
                                                                                                            type="text" placeholder="Search.."></span>
                                                                                                </div> -->
                                            </div>
                                            <table id="bootstrap-data-table"
                                                class="table table-hover table-text-center">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Mã đơn hàng</th>
                                                        <th>Mã khách hàng</th>
                                                        <th>Ngày lập</th>
                                                        <th>Chi tiết đơn hàng</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="content-table">
                                                    <?php while ($row = mysqli_fetch_array($getOrdersCancle)) { ?>
                                                        <tr>
                                                            <td><?php echo $row['order_id'] ?></td>
                                                            <td><?php echo $row['user_id'] ?></td>
                                                            <td>
                                                                <?php
                                                                $date = date_create($row['created_at']);
                                                                echo date_format($date, 'd/m/Y H:i:s');
                                                                ?>
                                                            </td>
                                                            <td class="detail">
                                                                <a href="#" class="view-details"
                                                                    data-order-id="<?php echo $row['order_id'] ?>">Chi tiết
                                                                    <i class="fa fa-external-link-alt"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>

                                            <!-- Modal duy nhất, chỉ hiển thị khi cần -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog detail-modal">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn
                                                                hàng</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" id="modal-detail-body">
                                                            <!-- Nội dung chi tiết sẽ được cập nhật qua AJAX -->
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Đóng</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div><!-- .animated -->
                    </div><!-- .content -->


                    <!-- Add -->
                    <div class="modal fade" id="add" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Thêm User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    <button type="button" class="btn btn-primary">Lưu</button>
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
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/toast.js"></script>
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/jquery.min.js"></script>
    <script src="<?php echo _WEB_ROOT_ ?>/public/asset/js/js_admin/bootstrap.bundle.min.js"></script>
    <!-- Menu Toggle Script -->
    <!-- <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#bootstrap-data-table-export').DataTable();
            });
        </script> -->
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
        // Khi nhấn vào liên kết "Chi tiết"
        $('.view-details').click(function (event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ <a>

            var orderId = $(this).data('order-id'); // Lấy mã đơn hàng từ thuộc tính data

            // Gửi yêu cầu AJAX để lấy chi tiết đơn hàng
            $.ajax({
                url: '<?php echo _WEB_ROOT_; ?>/admin/ManagerOrders/getOrderDetailByOrderId',
                type: 'GET',
                data: { order_id: orderId },
                dataType: 'json',
                success: function (response) {
                    if (response && response.orderDetail && response.orderItems) {
                        // Cập nhật nội dung modal
                        var modalContent = `
                    <h5>Đơn hàng: ${response.orderDetail.order_id}</h5>
                    <table class="table table-hover table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Mã khách hàng</th>
                                <th>Tên khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Sản phẩm & Số lượng</th>
                                <th>Giá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>${response.orderDetail.user_id}</td>
                                <td>Phan Thanh Tâm</td>
                                <td>${response.orderDetail.receiver_phone}</td>
                                <td>${response.orderDetail.shipping_address}</td>
                                <td>
                                    ${response.orderItems.map(item => `
                                        <p>${item.product_name} x ${item.quantity}</p>
                                    `).join('')}
                                </td>
                                <td>
                                    ${response.orderItems.map(item => `
                                        <p>${Number(item.discounted_price).toLocaleString('vi-VN')}<span style="text-decoration: underline;">đ</span></p>
                                    `).join('')}
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                                <tr>
                                    <td colspan="5" style="text-align: right;">Tổng tiền:</td>
                                    <td>${Number(response.orderDetail.total_before_shipping_fee).toLocaleString('vi-VN')}<span style="text-decoration: underline;">đ</span></td>
                                </tr>
                                <tr>
                                    <td colspan="5" style="text-align: right;">Phí vận chuyển:</td>
                                    <td>${Number(response.orderDetail.shipping_fee).toLocaleString('vi-VN')}<span style="text-decoration: underline;">đ</span></td>
                                </tr>
                                <tr>
                                    <td colspan="5" style="text-align: right;">Giảm giá:</td>
                                    <td>${Number(response.orderDetail.discount_value).toLocaleString('vi-VN')}<span style="text-decoration: underline;">đ</span></td>
                                </tr>
                                <tr>
                                    <td colspan="5" style="text-align: right;">Tổng thanh toán:</td>
                                    <td>${Number(response.orderDetail.total_payment).toLocaleString('vi-VN')}<span style="text-decoration: underline;">đ</span></td>
                                </tr>
                        </tfoot>
                    </table>
                `;

                        // Cập nhật nội dung modal với dữ liệu mới
                        $('#modal-detail-body').html(modalContent);

                        // Hiển thị modal
                        $('#exampleModal').modal('show');
                    } else {
                        alert("Không thể tải chi tiết đơn hàng.");
                    }
                },
                error: function (xhr, status, error) {
                    alert("Lỗi: " + error);
                }
            });
        });


    </script>

</body>

</html>