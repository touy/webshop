function loadLA() {
    lang = 'la';
    $('#home').text('ໜ້າທຳອິດ');
    $('#store').text('ຮ້ານຄ້າ');
    $('#product').text('ສິນຄ້າ');
    $('#about').text('ກ່ຽວກັບພວກເຮົາ');
    $("#pleaseLogin").html('<i class="fas fa-sign-in-alt"></i>');
    $('#pleaseLogin').append(' ເຂົ້າສູ່ລະບົບ');
    $('#login').text('ລ໋ອກອິນ');
    $('#register').text('ລົງທະບຽນ');
    // $('#btntostore').text('ໄປທີ່ຮ້ານຄ້າ');
    //alert($('title1').text());
}

function loadEN() {
    lang = 'en';
    $('#home').text('Home');
    $('#store').text('Store');
    $('#product').text('Product');
    $('#about').text('About');
    $('#about').text('About');
    $("#pleaseLogin").html('<i class="fas fa-sign-in-alt"></i>');
    $('#pleaseLogin').append(' Please Login');
    $('#login').text('Login');
    $('#register').text('Register');
    //alert($('title1').text());
}