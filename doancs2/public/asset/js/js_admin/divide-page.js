
// let colorid;
let amout = 0;
let amoutofif = 1;
function themMau(colorid) {
  /// lấy số lượng form hiện tại
  var current = document.getElementById(colorid).dataset.numberofform;
  let n = parseInt(current) + 1;
  console.log('gia tri cua n: ' + n)
  let id = colorid + "_" + n;
  console.log(id);
  $('#' + colorid).append(' <div  class="row boder-color1 coloradd" id="' + id + '">'
    + '<div class="col-3 space-top">'
   + '<h5 h5 class= "spacing_form" > Màu sắc</h5>'
   +'<div class="input-group mb-2">'
   +'<div class="input-group-prepend">'
   + '<div class="input-group-text"><i class="fas fa-tag "></i></div>'
   + '</div>'
   + '<input type="text" id="selectColor" class="form-control py-4" value=""'
   +  'placeholder="Nhập màu sắc">'
   +  '</div>'
   +  ' </div>'
    + '<div class="col-4 space-top">'
    + '<h5 class="spacing_form "> hình ảnh</h5>'
    + '<input class="mt-2" type="file" accept=".jpg,.png,.jpge">'
    + '</div>'

    + '<div class="col-3 space-top">'
    + '<h5 class="spacing_form">Số lượng</h5>'
    + '<div class="input-group mb-2">'
    + '  <div class="input-group-prepend">'
    + '    <div class="input-group-text"><i class="fas fa-tag "></i></div>'
    + '  </div>'
    + '  <input type="number"  id="amoutOfPr"  class="form-control py-4" value="" placeholder="Nhập số lượng">'
    + '</div>'
    + '</div>'
    + '<div class="col-2 space-top divdelete">'
    + '<a href="#" class="cssdelete" data-id="' + id + '">'
    + '<h5 class="">Xóa</h5>'
    + '</a>'
    + '</div>'
    + '</div>');
  deletecolor();
}
function addBtn() {
  $('.addcolor1').off('click');
  $('.addcolor1').on('click', function () {
    const colorid = $(this).data('id');
   
    themMau(colorid);
  });
}
function deletecolor() {
  $('.cssdelete').off('click');
  $('.cssdelete').on('click', function (e) {
    e.preventDefault();
    const colorid = $(this).data('id');
    $('#' + colorid).remove();
  });
}
deletecolor();
addBtn();
$("#menu-toggle").click(function (e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

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
function converSize_creen() {
  let elements = document.getElementsByClassName('screen_size');
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
converSize_creen();

// Gọi hàm định dạng
converVND();

function addDongsanpham() {

  const area = document.getElementById("thongSoMoi");
  const btn = document.getElementById('btnadd');
  btn.addEventListener('click', function () {
    amout += 1;
    // amoutofif += 1;
    // btn.setAttribute('name', amoutofif);
    // console.log(amout);
    let htmlContent = `
       <div id="" class="boder-color mttop phoneoptions">
            <h3 class=" mt-3 text-center">Dòng sản phẩm</h3>

            <div class="mr-2 ml-2 row mb-2 ">
              <div class="col-12">
                <h5 class="spacing_form">Dung lượng bộ nhớ</h5>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"></i></div>
                  </div>
                  <input type="number" id="internal_storage" class="form-control py-4" value="" placeholder="Nhập nội dung">
                </div>
              </div>
              <div class=" col-6 space-top">
                <h5 class="spacing_form">Giá bán(VND)</h5>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                  </div>
                  <input type="text" id="original_price" class="VND form-control py-4" value="" placeholder="20.000.000">
                </div>
              </div>
              <div class=" col-6 space-top">
                <h5 class="spacing_form">Giá bán Khuyến mãi(VND)</h5>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                  </div>
                  <input type="text" id="discounted_price" class="VND form-control py-4" value="" placeholder="20.000.000">
                </div>
              </div>
            </div>
            <!-- color -->
            <div id="color${amout}" data-numberofform="1">
              <div class="boder-color1">
                <div class="row boder-color1 coloradd">
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
                    <input class="mt-2" type="file" accept=".jpg,.png,.jpge">
                  </div>



                  <div class="col-3 space-top">
                    <h5 class="spacing_form">Số lượng</h5>
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-tag "></i></div>
                      </div>
                      <input type="number" id="amoutOfPr" class="form-control py-4" value="" placeholder="Nhập số lượng">
                    </div>
                  </div>
                  
                </div>
              </div>

            </div>
            <a data-toggle="modal" data-target="#themMau" data-id ="color${amout}" style="float: right;" name="1" 
              class="btn icon-btn btn-success addcolor1" id="addcolor" href="#">
              <span><i style="font-size: 1.2em;" class="fa fa-plus-circle" aria-hidden="true"></i></span>
              Thêm màu
            </a>
          </div>

`;
    area.insertAdjacentHTML('beforeend', htmlContent);
    addBtn();
    converVND();
    possibleInput();
  });

}
addDongsanpham();

function getinf() {
  let arr = {};
  arr['generalphone'] = {};
  let phoneoptions = {};
  arr['product_name'] = document.getElementById('inputname').value;
  // arr['giacu'] = document.getElementById('inputgiacu').value;
  arr['brand_id'] = document.getElementById('brands').value;
  arr['type_id'] = document.getElementById('typeproduct').value;
  arr['HighlightFeature'] = CKEDITOR.instances.edit.getData();
  arr['generalphone']['screen_size'] = document.getElementById('screen_size').value;
  arr['generalphone']['id_system'] = document.getElementById('id_system').value;
  arr['generalphone']['rear_camera'] = document.getElementById('rear_camera').value;
  arr['generalphone']['front_camera'] = document.getElementById('front_camera').value;
  arr['generalphone']['ram'] = document.getElementById('ram').value  + 'GB';
  arr['generalphone']['display_technology'] = document.getElementById('display_technology').value;
  arr['generalphone']['screen_resolution'] = document.getElementById('screen_resolution').value;
  arr['generalphone']['refresh_rate'] = document.getElementById('refresh_rate').value + 'HZ';
  arr['generalphone']['chipset'] = document.getElementById('chipset').value;
  arr['generalphone']['battery'] = document.getElementById('battery').value + 'mAh';
  arr['generalphone']['usage_need'] = document.getElementById('usage_need').value;
  const option = document.querySelectorAll('.phoneoptions');
  
  console.log('so luong option' + option.length);
  for (let i = 0; i < option.length; i++) {
    phoneoptions['' + i + ''] = getIfInPhoneoption(option[i]);
  }
  let formdata = getformdata();
  formdata.append('productIf', JSON.stringify(arr));
  formdata.append('phoneoptions',JSON.stringify(phoneoptions));
  console.log(phoneoptions);
  console.log(arr);
  const btn = document.getElementById('themsanpham');
  let header = btn.getAttribute('header');
  $.ajax({
    method: "POST",
    url: header + '/admin/adminProduct/ajaxAddproduct',
    data : formdata,
    processData : false,
    contentType : false,
  })
    .done(function (data) {
      // history.pushState(null, '', this.url);

      console.log('dữ liệu được trả về'+data);
      showmodal(data);
    })
    .fail(function (data) { });
}
function getformdata(){
  const formdata = new FormData();
  const files = document.querySelectorAll('input[type ="file"]');
  console.log(files);
  files.forEach(function(item){
    let value = item.files[0];
    formdata.append('files[]', value);
  });
  return formdata;
}
function getIfInPhoneoption(option) {
  let arr = {};
  arr['color'] = {};
  arr['internal_storage'] = option.querySelector('#internal_storage').value + 'GB';
  let giacu = option.querySelector('#original_price').value;
  arr['original_price'] = giacu.split('.').join('');
  let giamoi = option.querySelector('#discounted_price').value;
  arr['discounted_price'] = giamoi.split('.').join('');
  const color = option.querySelectorAll('.coloradd');
  for (let i = 0; i < color.length; i++) {
    arr['color']['' + i + ''] = getInforColor(color[i]);
  }
  return arr;
}
function getInforColor(color) {
  let arr = {};

  arr['color'] = color.querySelector('#selectColor').value;
  arr['amout'] = color.querySelector('#amoutOfPr').value;
  return arr;
}

function themsanpham() {
  const btn = document.getElementById('themsanpham');
  btn.addEventListener('click', function () {
   
    getinf();
  });
}
themsanpham();
function showmodal(string){
  console.log('chuôi string là: ' +  string)
var modalElement = document.getElementById('modal_inf');
// Sử dụng Bootstrap Modal API để mở
var modal = new bootstrap.Modal(modalElement);
const content = modalElement.querySelector('.modal-body');
content.innerHTML = string;
modal.show(); 
}
function possibleInput() {
  $('input[type="number"]').off('input').on('input', function () {
    let value = $(this).val();
    if (value < 0) {
      $(this).val(0);
    }
  });
}

possibleInput();