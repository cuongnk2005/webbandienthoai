
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
    <a href="<?php echo _WEB_ROOT_ ?>/admin/AdminUser/navigationAddUser"><button data-toggle="tooltip"
            data-placement="top" title="Thêm User" class="btn btn-success btn-add"><i
                class="fas fa-plus-square"></i></button></a>
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

                            <a href="<?php echo _WEB_ROOT_ . '/admin/AdminUser/navigationUpdateUser/' . $row['id'] ?>"><button
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
            <li><a href="#"><span id="previous" data-page="1" aria-label="previous"><i class="fa fa-angle-left"
                            style="font-size: 16px;"></i></a>
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
            <li><a href="#"> <span id="next"><i class="fa fa-angle-right" style="font-size: 16px;"></i></a> </li>
        </ul>



    </div>

