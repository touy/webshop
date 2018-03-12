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
    $('#loginYourname').text('ກະລຸນາປ້ອນຊື່ແລະລະຫັດບັນຊີຂອງທ່ານ');
    $('#remembermeEN').text('ຈື່ຊື່ຂ້ອຍໄວ້');
    $("#loginEN").html('<i class="fas fa-sign-in-alt"></i>');
    $('#loginEN').append(' ເຂົ້າສູ່ລະບົບ');
    $("#backtoindexEN").html('<i class="fas fa-hand-point-left"></i>');
    $('#backtoindexEN').append(' ກັບໜ້າທຳອິດ');
}

function loadEN() {
    lang = 'en';
    $('#loginYourname').text('Please Login');
    $('#remembermeEN').text('Rememberme');
    $("#loginEN").html('<i class="fas fa-sign-in-alt"></i>');
    $('#loginEN').append(' Login');
    $("#backtoindexEN").html('<i class="fas fa-hand-point-left"></i>');
    $('#backtoindexEN').append(' Back to index');
}