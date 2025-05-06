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
            src="<?php echo _WEB_ROOT_ . '/public/asset/images/product1/' . $row['image']; ?>?v=12.21312" width="100px"
            height="100px" alt=""></td>
        <td><?php echo $row['product_id'] ?></td>
        <td><?php echo $row['product_name'] ?></td>
        <td><?php echo $brands[$row['brand_id']]; ?></td>
        <td><?php echo $hdh[$row['id_system']]; ?></td>
        <td><?php echo $row['amout'] ?></td>
        <td><?php echo $row['sold'] ?></td>
        <td> <span class="color-price"><?php echo number_format($row['discounted_price'], 0, ',', '.'); ?> </span> đ</td>
        <td class="row" style="border: none;">
          <div style="margin: auto;">
            <a href="<?php echo _WEB_ROOT_ ?>/admin/adminProduct/uppdateProduct/<?php echo $row[0] ?>"><button
                class="m-wTD btn btn-primary" data-toggle="tooltip" data-placement="top" title="Chỉnh sửa"
                data-toggle="modal" data-target="#editUser"> <i class="txt-center fas fa-edit"></i></button></a>
            <button class="btn btn-danger btndelete sizeTh1" onclick="giveIdPr(this)" data-toggle="modal"
              data-id="<?php echo $row[0] ?>" data-target="#delete" data-toggle="tooltip" data-placement="top"
              title="Xóa"><i class="txt-center menu-icon fas fa-trash-alt"></i></button>
          </div>

        </td>
      </tr>
    <?php } ?>

  </tbody>
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