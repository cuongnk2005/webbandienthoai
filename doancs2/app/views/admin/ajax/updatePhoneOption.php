<?php $row = mysqli_fetch_array($detailProduct);
$phoneoption = mysqli_fetch_array($phoneOption);
?>

<div id="color" data-numberofform="1">
  <div class="boder-color1" id="addColorForm">
    <div class="row boder-color1 coloradd" id="color_1">
      <div class="col-4 space-top">
        <h5 class="spacing_form">Màu sắc</h5>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-tag "></i></div>
          </div>
          <input type="text" id="selectColor" value="<?php echo $row['color'] ?>" class="form-control py-4"
            placeholder="Nhập màu sắc">
        </div>
      </div>

      <div class="col-4 space-top">
        <h5 class="spacing_form ">hình ảnh</h5>
        <input id="image" data-id="<?php echo $row['id']; ?>" class="mt-2" type="file" accept=".jpg,.png,.jpge">
      </div>
      <div class="col-4 space-top">
        <h5 class="spacing_form">Số lượng</h5>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-tag "></i></div>
          </div>
          <input type="number" id="amoutOfPr" class="form-control py-4" value="<?php echo $row['amout'] ?>"
            placeholder="Nhập số lượng">
        </div>
      </div>
      <div class=" col-6 space-top">
        <h5 class="spacing_form">Giá bán(VND)</h5>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
          </div>
          <input type="text" id="original_price" class="VND form-control py-4"
            value="<?php echo $phoneoption['original_price'] ?>" placeholder="20.000.000">
        </div>
      </div>
      <div class=" col-6 space-top">
        <h5 class="spacing_form">Giá bán Khuyến mãi(VND)</h5>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
          </div>
          <input id="discounted_price" type="text" class="VND form-control py-4"
            value="<?php echo $phoneoption['discounted_price'] ?>" placeholder="20.000.000">
        </div>
      </div>

    </div>
  </div>

</div>
<script>
  function converVND() {
    let elements = document.getElementsByClassName('VND');
    $('.VND').off('input');
    for (let element of elements) {
      element.addEventListener('input', function (event) {
        // Loại bỏ tất cả dấu không phải là số và dấu phẩy
        let value = event.target.value.replace(/[^\d]/g, ''); // Loại bỏ dấu không phải là số

        // Định dạng lại giá trị với dấu chấm
        const formattedValue = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

        // Gán lại giá trị vào ô input
        event.target.value = formattedValue;
      });
    }
  }
  converVND()
</script>