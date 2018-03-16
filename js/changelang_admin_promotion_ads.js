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
    $('#house').text('Home');
    // $('#btntostore').text('ໄປທີ່ຮ້ານຄ້າ');
    //alert($('title1').text());
}

function loadEN() {
    lang = 'en';
    $('#titlePromotionEN').text('Promotion');
    $('#nameproductEN').text('Name:');
    $('#priceEN').text('Price:');
    $('#scoreEN').text('Score:');
    $('#descriptionEN').text('Description:');
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