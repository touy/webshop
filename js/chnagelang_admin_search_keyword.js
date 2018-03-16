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
    $('#title_admin').text('ໜ້າຄວບຄຸມ   ');
    $('#key_product').text('ລະຫັດສິນຄ້າ:');
    $('#st_date').text('ເລີ່ມວັນທີ:');
    $('#end_date').text('ສິ້ນສຸດວັນທີ:');
    $('#name_product').text('ຊື່ສິນຄ້າ:');
    $('#old_name').text('ຊື່ເດີມ:');
    $('#score').text('ຄະແນນ:');
    // $('#btntostore').text('ໄປທີ່ຮ້ານຄ້າ');
    //alert($('title1').text());
}

function loadEN() {
    lang = 'en';
    $('#title_admin').text('Search Admin Keyword ads');
    $('#key_product').text('Name:');
    $('#st_date').text('Start:');
    $('#end_date').text('End:');
    $('#name_product').text('Name:');
    $('#old_name').text('OldName:');
    $('#score').text('Score:');
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