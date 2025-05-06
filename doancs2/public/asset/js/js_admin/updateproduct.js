
// let colorid;
let amout = 0;
let amoutofif = 1;
$("#menu-toggle").click(function (e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
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
function getinf() {
  let arr = {};
  arr['generalphone'] = {};
  let phoneoptions = {};
  arr['product_name'] = document.getElementById('inputname').value;
  const idsp = document.getElementById('idsanpham');
  arr['product_id'] = idsp.getAttribute('data-idsanpham');
  // arr['giacu'] = document.getElementById('inputgiacu').value;
  arr['brand_id'] = document.getElementById('brands').value;
  arr['type_id'] = document.getElementById('typeproduct').value;
  arr['HighlightFeature'] = CKEDITOR.instances.edit.getData();
  arr['generalphone']['screen_size'] = document.getElementById('screen_size').value;
  arr['generalphone']['id_system'] = document.getElementById('id_system').value;
  arr['generalphone']['rear_camera'] = document.getElementById('rear_camera').value;
  arr['generalphone']['front_camera'] = document.getElementById('front_camera').value;
  arr['generalphone']['ram'] = document.getElementById('ram').value + 'GB';
  arr['generalphone']['display_technology'] = document.getElementById('display_technology').value;
  arr['generalphone']['screen_resolution'] = document.getElementById('screen_resolution').value;
  arr['generalphone']['refresh_rate'] = document.getElementById('refresh_rate').value + 'HZ';
  arr['generalphone']['chipset'] = document.getElementById('chipset').value;
  arr['generalphone']['battery'] = document.getElementById('battery').value + 'mAh';
  arr['generalphone']['usage_need'] = document.getElementById('usage_need').value;
  const option = document.querySelectorAll('.phoneoptions');
  formdata = new FormData();
  console.log('dữ liệu cập nhật : ');
  console.log(arr);
  formdata.append('productIf', JSON.stringify(arr));
  const btn = document.getElementById('themsanpham');
  let header = btn.getAttribute('header');
  $.ajax({
    method: "POST",
    url: header + '/admin/adminProduct/ajaxUpdateGeneralproduct',
    data: formdata,
    processData: false,
    contentType: false,
  })
    .done(function (data) {
      // history.pushState(null, '', this.url);

      console.log('dữ liệu được trả về' + data);
      showmodal(data);
    })
    .fail(function (data) { });
}

function themsanpham() {
  const btn = document.getElementById('themsanpham');
  btn.addEventListener('click', function () {

    getinf();
  });
}
themsanpham();
function showmodal(string) {
  console.log('chuôi string là: ' + string)
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


function ajaxUpdateListDeltailPr() {

  const btn = document.getElementById('themsanpham');
  let header = btn.getAttribute('header');
  let product_id = btn.getAttribute('data-id');
  $.ajax({
    method: "POST",
    url: header + '/admin/adminProduct/updateListdetailPr/' + product_id,
    data: { 'productid': product_id },
  })
    .done(function (data) {

      $('#content-table').html(data);
    })
    .fail(function (data) { });
}
// deleteDetailProduct();
function updatePhoneoption() {
  const btn = document.getElementById('themsanpham');
  let header = btn.getAttribute('header');
  $('.updatePhoneoption').each(function () {
    $(this).on('click', function () {

      var phoneOptionID = $(this).data("id");
      var $modalelement = $('#modalUpdate');
      $.ajax({
        method: "POST",
        url: header + '/admin/adminProduct/getInfPhoneOption/' + phoneOptionID,

      })
        .done(function (data) {
          console.log('dữ liệu được trả về' + data);
          $('#body-modal').html(data);
          $modalelement.modal('show');

        })
        .fail(function (data) { });

    });
  });
}
let phoneOptionID;
function getphoneOptionID(button) {
   phoneOptionID = $(button).data("id");
}
function acceptdeleteDetailpr(){
  $('#btnAcceptDelete').on('click', function () {
    const btn = document.getElementById('themsanpham');
    let header = btn.getAttribute('header');
    let product_id = btn.getAttribute('data-id');
    $.ajax({
      method: "POST",
      url: header + '/admin/adminProduct/deletePhoneOption/' + phoneOptionID,
      data: { 'productid': product_id },
    })
      .done(function (data) {
        console.log('dữ liệu được trả về' + data);
        // showmodal('');
        $('#content-table').html(data);
      })
      .fail(function (data) { });

  });
}
acceptdeleteDetailpr();
// function deleteDetailProduct() {
//   $(".btn-delete").each(function () {
//     $(this).on("click", function () {
//       var phoneOptionID = $(this).data("id");
//       alert('có nhấn');
//       $('#delete').on('click', function () {
//         const btn = document.getElementById('themsanpham');
//         let header = btn.getAttribute('header');
//         let product_id = btn.getAttribute('data-id');
//         $.ajax({
//           method: "POST",
//           url: header + '/admin/adminProduct/deletePhoneOption/' + phoneOptionID,
//           data: { 'productid': product_id },
//         })
//           .done(function (data) {
//             console.log('dữ liệu được trả về' + data);
//             // showmodal('');
//             $('#content-table').html(data);
//           })
//           .fail(function (data) { });

//       });
//     });
//   });
// }de
updatePhoneoption();
function btnevent() {
  var $modalelement = $('#modalUpdate');
  $('#btnclosemodal').on('click', function () {
    $modalelement.modal('hide');
  });
  $('#btncapnhat').on('click', function (event) {
    const btn = $('#themsanpham');
    let header = btn.attr('header');
    let newcolor = $('#selectColor').val();
    let newamout = $('#amoutOfPr').val();
    let original_price = $('#original_price').val().split('.').join('');
    let discounted_price = $('#discounted_price').val().split('.').join('');
    const image = $('#image');
    let deltaiProductid = image.attr('data-id');
    let value = image[0].files[0];
    const formdata = new FormData();
    formdata.append('file', value);
    formdata.append('color', newcolor);
    formdata.append('amout', newamout);
    formdata.append('id', deltaiProductid);
    formdata.append('original_price', original_price);
    formdata.append('discounted_price', discounted_price);
    $.ajax({
      method: "POST",
      url: header + '/admin/adminProduct/updateDetailPr',
      data: formdata,
      processData: false,
      contentType: false,
    })
      .done(function (data) {
        console.log('dữ liệu được trả về' + data);
        showmodal(data);
        ajaxUpdateListDeltailPr();
      })
      .fail(function (data) { });
  })
}
btnevent();
function addDetailPr(){
  $('#btnAddPhoneOption').on('click', function(){
    const btn = $('#themsanpham');
    let header = btn.attr('header');
    let product_id = btn.attr('data-id');
    let newcolor = $('#selectColor-detailpr').val();
    let newamout = $('#amoutOfPr-detailpr').val();
    const image = $('#image-detailpr');
    let value = image[0].files[0];
    let specificphone_id = $('#id-phoneOption').val();
 
    const formdata = new FormData();
    formdata.append('file', value);
    console.log(value);
    formdata.append('color', newcolor);
    formdata.append('amout', newamout);
    formdata.append('id', product_id);
    formdata.append('specificphone_id', specificphone_id);
    
    $.ajax({
      method: "POST",
      url: header + '/admin/adminProduct/addDetailPr',
      data: formdata,
      processData: false,
      contentType: false,
    })
      .done(function (data) {
        // history.pushState(null, '', this.url);
  
        console.log('dữ liệu được trả về' + data);
        ajaxUpdateListDeltailPr();
      })
      .fail(function (data) { });
  });
  
}
addDetailPr();