<?php
if ($dssp->num_rows > 0) {

  while ($row = mysqli_fetch_array($dssp)) {

    ?>
    <tr>
      <td style="max-width: 140px;"><img
          src="<?php echo _WEB_ROOT_ . '/public/asset/images/product1/' . $row['image'] ?>?v=13423.242" width="100px"
          height="100px" alt=""></td>
      <td><?php echo $row['product_name'] ?></td>
      <td><?php echo $row['color'] ?></td>
      <td><?php echo $row['amout'] ?></td>
      <td><?php echo $row['sold'] ?></td>
      <td> <span class="color-price"><?php echo number_format($row['discounted_price'], 0, ',', '.'); ?> </span> đ</td>
      <td class="row" style="border: none;">
        <div style="margin: auto;">
          <a href="<?php echo _WEB_ROOT_ ?>/admin/adminProduct/uppdateProduct/<?php echo $row['product_id'] ?>"><button
              class="m-wTD btn btn-primary" data-toggle="tooltip" data-placement="top" title="Chỉnh sửa" data-toggle="modal"
              data-target="#editUser"> <i class="txt-center fas fa-edit"></i></button></a>
          <button data-id=<?php echo $row['id'] ?> class="btn btn-danger btn-delete sizeTh1" data-toggle="modal"
            data-target="#delete" data-toggle="tooltip" data-placement="top" onclick="getphoneOptionID(this)" title="Xóa"><i
              class="txt-center menu-icon fas fa-trash-alt"></i></button>
        </div>

      </td>
    </tr>
    <?php
  }
} ?>