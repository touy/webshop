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
    $('#titleproductdetails').text('Product details');
    $('#itemname').text('ຊື່ສິນຄ້າ  ');
    $('#price').text('ລາຄາ');
    $('#score').text('ລາຄາ');

    $("#uploadphoto").html('<input type="file" name="file_up" id="file_up" hidden>');
    $("#uploadphoto").append('<i class="fas fa-cloud-upload-alt"></i>');
    $('#uploadphoto').append(' ອັບໂຫລດຮູບພາບ');

    $("#save").html('<input type="submit" name="submit" id="submit" hidden>');
    $("#save").append('<i class="far fa-save"></i>');
    $('#save').append(' ບັນທຶກ');

    $("#save2").html('<input type="submit" name="submit" id="submit" hidden>');
    $('#save2').append('ບັນທຶກ ');
    $("#save2").append('<i class="far fa-save ml-1"> </i>');

    $("#cancle2").html('<input type="submit" name="submit" id="submit" hidden>');
    $('#cancle2').append('ຍົກເລີກ ');
    $("#cancle2").append(' <i class="far fa-times-circle ml-1"></i>');
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
    $('#titleproductdetails').text('Product details');
    $('#itemname').text('Itemname');
    $('#price').text('Price');
    $('#score').text('Score');

    $("#uploadphoto").html('<input type="file" name="file_up" id="file_up" hidden>');
    $("#uploadphoto").append('<i class="fas fa-cloud-upload-alt"></i>');
    $('#uploadphoto').append(' Upload photo');

    $("#save").html('<input type="submit" name="submit" id="submit" hidden>');
    $("#save").append('<i class="far fa-save"></i>');
    $('#save').append(' Save');

    $("#save2").html('<input type="submit" name="submit" id="submit" hidden>');
    $('#save2').append(' Save');
    $("#save2").append(' <i class="far fa-save ml-1"></i>');

    $("#cancle2").html('<input type="submit" name="submit" id="submit" hidden>');
    $('#cancle2').append('Cancle ');
    $("#cancle2").append(' <i class="far fa-times-circle ml-1"></i>');
    //.........*******........  
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