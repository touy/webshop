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
    //.........*******........
    $('#home').text('Home');
    $('#store').text('Store');
    $('#product').text('Product');
    $('#about').text('About');
    $('#pleaseLogin').text('Please Login');
    $('#login').text('Login');
    $('#register').text('Register');
    //alert($('title1').text());


}