  <script src="js/changelang_header.js">
    loadDetails();
    loadList();
    reload();
    loadLA();
    loadEN();
  </script>
  <div class="container-fluid fixed-top" style="background-color:#34219f; !important; border-bottom:2px solid; border-color:#fb3c00 !important; border-top:30px solid; border-left:none; border-right:none;">
    <div class="icon_language float-right">
      <a href="#" onclick='loadLA()'><img src="images/Flag of Laos.png" alt="" style="width:30px; height:30px;"></a>
      <a href="#" onclick='loadEN()'><img src="images/flag-button-round-250.png" alt="" style="width:24px; height:24px;margin-top:2px;"></a>
    </div>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#34219f !important;">
        <a class="navbar-brand" href="#"> <h1 style="font-weight:100;"> <strong>Webpost</strong></h1> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse header_drop" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a id='home' class="nav-link langlao" href="showads.php" >ໜ້າທຳອິດ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"><a id='store' class="nav-link langlao" href="store.php">ຮ້ານຄ້າ</a></li>
            <li class="nav-item"><a id='product' class="nav-link langlao" href="productdetails.php">ສິນຄ້າ</a></li>
            <li class="nav-item"><a id='about' class="nav-link langlao" href="#">ກ່ຽວກັບພວກເຮົາ</a></li>
          </ul>
          <form class="lol" action="#" method="post">
            <input class="langlao" type="text" name="" id="searchBar-header" placeholder="ຄົ້ນຫາ" value="" maxlength="100" autocomplete="off" onmousedown="" onblur=""/><input type="submit" id="searchBtn-header" name="" value="Go!" />
          </form>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a id='pleaseLogin' class="nav-link dropdown-toggle langlao" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user ml-1" style="margin-right:3px;"></i>ບັນຊີ</a>
              <div class="dropdown-menu " aria-labelledby="navbarDropdown" style="border:none;">
                <a id='login' class="dropdown-item langlao" href="login_frm.php"><i class="fa fa-key mr-2" aria-hidden="true"></i>ລ໋ອກອິນ</a>
                <a id='register' class="dropdown-item langlao" href="register.php"><i class="fas fa-user-plus mr-2"></i>ລົງທະບຽນ</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- <div class="social_media"><?php include 'social_leftside.php'; ?></div>     -->
  </div>

  <div class="class-fixed-top" style="height:121px;"></div>
