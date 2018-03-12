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
    $('#titleforgetpasswordEN').text('ລືມລະຫັດຜ່ານ:');
    $('#phoneEN').text('ເບີໂທລະສັບ:');
    $('#confirmpasswordEN').text('ຢັ້ງຢືນລະຫັດຜ່ານ:');

    $("#done").html('<i class="fas fa-check-circle"></i>');
    $('#done').append(' ຕົກລົງ');
    // $('#btntostore').text('ໄປທີ່ຮ້ານຄ້າ');
    //alert($('title1').text());
}

function loadEN() {
    lang = 'en';
    $('#titleforgetpasswordEN').text('Forget password:');
    $('#phoneEN').text('Phone number:');
    $('#confirmpasswordEN').text('Confirm password:');
    $("#done").html('<i class="fas fa-check-circle"></i>');
    $('#done').append(' DONE');

    //alert($('title1').text());
    $('#home').text('Home');
    $('#store').text('Store');
    $('#product').text('Product');
    $('#about').text('About');
    $('#pleaseLogin').text('Please Login');
    $('#login').text('Login');
    $('#register').text('Register');
}