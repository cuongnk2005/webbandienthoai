let sqlhdh;
let sqlbrand;
let sqlgiaban;
let sqlmanhinh;
let sqlbonhotrong;
let mainsql = "";
let order = 'ORDER BY discounted_price  ASC';
(function ($) {
    $(document).ready(function () {
        $('#cssmenu ul ul li:odd').addClass('odd');
        $('#cssmenu ul ul li:even').addClass('even');
        $('#cssmenu > ul > li > a').click(function () {
            $('#cssmenu li').removeClass('active');
            $(this).closest('li').addClass('active');
            var checkElement = $(this).next();
            if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                $(this).closest('li').removeClass('active');
                checkElement.slideUp('normal');
            }
            if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                $('#cssmenu ul ul:visible').slideUp('normal');
                checkElement.slideDown('normal');
            }
            if ($(this).closest('li').find('ul').children().length == 0) {
                return true;
            } else {
                return false;
            }
        });
    });
})(jQuery);

function getcheckbox(id, callback) {
    let request = '#' + id + ' .checkbox-filter';
    const checkboxs = document.querySelectorAll(request);
    checkboxs[0].addEventListener('click', function () {
        for (let i = 1; i < checkboxs.length; i++) {
            checkboxs[i].checked = false;
        }
    });
    for (let i = 1; i < checkboxs.length; i++) {
        checkboxs[i].addEventListener('click', function () {

            checkboxs[0].checked = false;

        });
    }
    checkboxs.forEach(item => {
        item.addEventListener('click', function (event) {
            let sql = "";
            // const checkboxs =document.querySelectorAll('.checkbox-filter');
            checkboxs.forEach((checkbox, index) => {

                if (checkbox.checked) {
                    if (checkbox.value) {
                        sql += ';' + checkbox.value;
                    }
                }
            }
            );



            callback(sql);
            ajaxfilter();
        });
    })
}
function updatesqlhdh(sql) {
    if (sql) {
        sqlhdh = "?id_system";
        sqlhdh += sql;
    } else {
        sqlhdh = "";
    }


}
function updatesqlbrand(sql) {
    if (sql) {
        sqlbrand = "?brand_id";
        sqlbrand += sql;
    } else {
        sqlbrand = "";
    }


}
function updatesqlgiaban(sql) {
    if (sql) {

        sqlgiaban = "?discounted_price";
        sqlgiaban += sql;
    } else {
        sqlgiaban = "";
    }
}
function updatesqlmanhinh(sql) {
    if (sql) {
        sqlmanhinh = "?screen_size";
        sqlmanhinh += sql;
    } else {
        sqlmanhinh = "";
    }


}
function updatesqlbonhotrong(sql) {
    if (sql) {
        sqlbonhotrong = "?internal_storage";
        sqlbonhotrong += sql;
    } else {
        sqlbonhotrong = "";
    }



}
getcheckbox('id_system', updatesqlhdh);
        getcheckbox('brand_id', updatesqlbrand);
        getcheckbox('discounted_price', updatesqlgiaban);
        getcheckbox('screen_size', updatesqlmanhinh);
        getcheckbox('internal_storage', updatesqlbonhotrong);
        function xulyarr(arr) {
            if (arr[1] == "all") {
                return;
            }
            let sql = "";
            if (arr[0] == 'discounted_price') {
                sql = arr[0];
                let firstcash = arr[1].split('-');
                if (arr.length >= 3) {
                    let lastcash = arr[arr.length - 1].split("-");
                    sql += " BETWEEN " + firstcash[0] + " AND " + lastcash[1];
                } else {
                    sql += " BETWEEN " + firstcash[0] + " AND " + firstcash[1];
                }
            } else if (arr[0] == 'screen_size') {
                sql = arr[0];
                let firstcash = arr[1].split('-');
                if (arr.length >= 3) {
                    let lastcash = arr[arr.length - 1].split("-");
                    sql += " BETWEEN " + firstcash[0] + " AND " + lastcash[1];
                } else {
                    sql += " BETWEEN " + firstcash[0] + " AND " + firstcash[1];
                }

            } else if (arr[0] == 'brand_id') {
                sql = arr[0] + ' = ' + arr[1];
                for (let i = 2; i < arr.length; i++) {
                    sql += ' OR ' + arr[0] + ' = ' + arr[i];
                }

            } else if (arr[0] == 'internal_storage') {
                sql += arr[1];
            }
            else {
                sql = arr[0] + ' LIKE ' + "'" + arr[1] + "'";
                for (let i = 2; i < arr.length; i++) {
                    sql += ' OR ' + arr[0] + ' LIKE ' + "'" + arr[i] + "'";
                }
            }
            return sql;
        }
        

        function selected() {
            const selectElement = document.getElementById('select');

            selectElement.addEventListener('change', function () {
               
                const selectedValue = selectElement.value;
                order = selectedValue;
                // Lấy giá trị của option được chọn
                ajaxfilter();
            });
        }
        selected();
