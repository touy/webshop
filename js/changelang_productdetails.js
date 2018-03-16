var lang = 'la'; //en
function loadDetails() {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "loadDetails.php", //Relative or absolute path to response.php file
        data: { data: userInfo },
        success: function(data) {
            alert(JSON.stringify(data));
        },
        error: function(err) {
            alert(JSON.stringify(err));
        }
    });
}

function loadList() {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "loadList.php", //Relative or absolute path to response.php file
        data: { data: userInfo, lang: lang },
        success: function(data) {
            alert(JSON.stringify(data));
        },
        error: function(err) {
            alert(JSON.stringify(err));
        }
    });
}

function reload() {
    loadDetails();
    loadList();
}

function loadLA() {
    lang = 'la';
    $('#title1').text('ລາຍລະອຽດສິນຄ້າ');
    // $('#btntostore').text('ໄປທີ່ຮ້ານຄ້າ');
    //alert($('title1').text());
    $('#home').text('ຫນ້າທຳອິດ');
    $('#store').text('ຮ້ານຄ້າ');
    $('#product').text('ສຶນຄ້າ');
    $('#about').text('ກ່ຽວກັບພວກເຮົາ');
    $("#pleaseLogin").html('<i class="fas fa-sign-in-alt"></i>');
    $('#pleaseLogin').append(' ເຂົ້າສູ່ລະບົບ');
    $('#login').text('ລ໋ອກອິນ');
    $('#register').text('ລົງທະບຽນ');
}

function loadEN() {
    lang = 'en';
    $('#title1').text('Product details');

    //alert($('title1').text());
    $('#home').text('Home');
    $('#store').text('Store');
    $('#product').text('Product');
    $('#about').text('About');
    $("#pleaseLogin").html('<i class="fas fa-sign-in-alt"></i>');
    $('#pleaseLogin').append(' Please Login');
    $('#login').text('Login');
    $('#register').text('Register');
}