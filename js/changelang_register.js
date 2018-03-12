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
    $('#titleregisterEN').text('ສະໝັກສະມາຊິກ:');
    $('#nameEN').text('ຊື່:');
    $('#phonecontactEN').text('ເບີໂທລະສັບ:');
    $('#passwordEN').text('ລະຫັດຜ່ານ:');
    $('#confirmpasswordEN').text('ຢັ້ງຢືນລະຫັດຜ່ານ:');
    $("#submitEN").html('<i class="fa fa-user-plus"></i>');
    $('#submitEN').append(' ຕົກລົງ');
    // $('#submitEN').text('ຕົກລົງ');
    // $('#btntostore').text('ໄປທີ່ຮ້ານຄ້າ');
    //alert($('title1').text());
}

function loadEN() {
    lang = 'en';
    $('#titleregisterEN').text('Register:');
    $('#nameEN').text('Name:');
    $('#phonecontactEN').text('Phone:');
    $('#passwordEN').text('Password:');
    $('#confirmpasswordEN').text('Confirm password:');
    $("#submitEN").html('<i class="fa fa-user-plus"></i>');
    $('#submitEN').append(' Submit');

    //alert($('title1').text());
    $('#home').text('Home');
    $('#store').text('Store');
    $('#product').text('Product');
    $('#about').text('About');
    $('#pleaseLogin').text('Please Login');
    $('#login').text('Login');
    $('#register').text('Register');
}