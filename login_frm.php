
<?php include 'type.php' ?>
    <div class="icon_language float-right">
      <a href="#" onclick='loadLA()'><img src="images/Flag of Laos.png" alt="" style="width:30px; height:30px;"></a>
      <a href="#" onclick='loadEN()'><img src="images/flag-button-round-250.png" alt="" style="width:24px; height:24px;margin-top:2px;"></a>
    </div>
    <script src="js/changelanglogin_frm.js">
        loadDetails();
        loadList();
        reload();
        loadLA();
        loadEN();
    </script>
<div class="container">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-sx-2 col-2 JBA"></div>
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-sx-10 col-10" style=" float:right; margin-top:100px;">
        <form class="form-horizontal" role="form" method="POST" action="client_product_detail.php">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <h4 id='loginYourname' class="langlao">ກະລຸນາປ້ອນຊື່ແລະລະຫັດບັນຊີຂອງທ່ານ</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <div class="form-group has-danger">
                            <label class="sr-only" for="email">E-Mail Address</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                                <input type="text" name="email" class="form-control langlao" id="email"
                                       placeholder="you@example.com" required autofocus>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label class="sr-only" for="password">Password</label>
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0" id="show_hide_password">
                                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                                            <input type="password" name="password" class="form-control langlao" id="password" placeholder="ລະຫັດຜ່ານ" required>
                                            <div class="input-group-addon">
                                                <a href="" class="btn btn-warning border-0" style="background-color:#fff; border:1px solid !important; border-color:#ced4da !important;"><i class="fas fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                    </div>
                            </div>
                        </div>
                </div>
                <div class="row" style="margin-left:40px;">
                    <div class="col-md-3 col-sm-12 col-12"></div>
                    <div class="col-md-9 col-sm-12 col-12" style="padding-top: .35rem">
                        <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                            <label class="form-check-label">
                                <input class="form-check-input" name="remember"
                                       type="checkbox" >
                                <span id='remembermeEN' class="langlao" style="padding-bottom: .15rem">ຈື່ຊື່ຂ້ອຍໄວ້</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 1rem">
                    <div class="col-md-4 col-sm-2 col-2"></div>
                    <div class="col-md-8 col-sm-10 col-10">
                        <button id='loginEN' type="submit" class="btn btn-success buttonhover langlao" style="background-color:#34219f;"><i class="fas fa-sign-in-alt"></i> ເຂົ້າສູລະບົບ</button>
                    </div>
                </div>
                <div class="row" style="padding-top: 1rem">
                    <div class="col-md-4 col-sm-2 col-xs-2 col-2"></div>
                    <div class="col-md-8 col-sm-10 col-xs-10 col-10">
                      <a href="index.php"><button2 id='backtoindexEN' type="" class="btn btn-success buttonhover langlao" style="background-color:#34219f;"><i class="fas fa-hand-point-left"></i> ກັບໜ້າທຳອິດ </button2></a>
                    </div>
                </div>
        </form>
    </div>   
</div>
<script src="js/superplaceholder.js"></script>
<script src="js/superplace_formlogin.js"></script>   
