<?php include 'type.php'; ?>
<div class="icon_language float-right">
      <a href="#" onclick='loadLA()'><img src="images/Flag of Laos.png" alt="" style="width:30px; height:30px;"></a>
      <a href="#" onclick='loadEN()'><img src="images/flag-button-round-250.png" alt="" style="width:24px; height:24px;margin-top:2px;"></a>
</div>
<style media="screen">
  .font-size-icon{font-size: 13pt; color:#474747;}
</style>
    <script src="js/changelang_register.js">
      loadDetails();
      loadList();
      reload();
      loadLA();
      loadEN();
    </script>
<div class="container">
  <div class="col-xl-4 col-lg-4 col-md-2 col-sm-3 col-sx-2 col-2 JBA"></div>
    <form class="form-horizontal"  role="form" method="POST" action="">
        <div class="row" >
            <div class="col-md-3"></div>
            <div class="col-md-6" style="margin-top:140px; color:#474747;">
                <h2 id='titleregisterEN' class="langlao">ສະໝັກສະມາຊິກ</h2>  
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 field-label-responsive">
                <label id='nameEN' class="langlao" for="name">ຊື່:</label>
            </div>
            <div class="col-md-8 font-size-icon">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fas fa-user"></i></div>
                        <input type="text" name="name" class="form-control langlao" id="name"
                               placeholder="Username" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 field-label-responsive">
                <label id='phonecontactEN' class="langlao" for="phone">ເບີໂທລະສັບ:</label>
            </div>
            <div class="col-md-8 font-size-icon" >
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fas fa-mobile"></i></div>
                        <input type="" name="phone" class="form-control langlao" id="phone"
                               placeholder="Phonenumber" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 field-label-responsive">
                <label id='passwordEN' class="langlao" for="password">ລະຫັດຜ່ານ:</label>
            </div>
            <div class="col-md-8 font-size-icon">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0" id="show_hide_password">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fas fa-key"></i></div>
                        <input type="password" name="password" class="form-control langlao" id="password"
                               placeholder="Password" required>
                                <div class="input-group-addon">
                                    <a href="" class="btn btn-warning border-0" style="background-color:#fff; border:1px solid !important; border-color:#ced4da !important;"><i class="fas fa-eye" aria-hidden="true"></i></a>
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 field-label-responsive">
                <label id='confirmpasswordEN' class="langlao" for="password">ຢັ້ງຢືນລະຫັດຜ່ານ:</label>
            </div>
            <div class="col-md-8 font-size-icon">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0" id="show_hide_password">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fas fa-redo"></i>
                        </div>
                        <input type="password" name="password-confirmation" class="form-control langlao"
                               id="password_confirm" placeholder="Confirm Password" required>
                        <div class="input-group-addon">
                            <a href="" class="btn btn-warning border-0" style="background-color:#fff; border:1px solid !important; border-color:#ced4da !important;"><i class="fas fa-eye" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <button id='submitEN' type="submit" class="btn btn-success buttonhover langlao" style="background-color:#34219f;"><i class="fa fa-user-plus"></i> ສຳເລັດ</button>
            </div>
        </div>
    </form>

    <script src="js/superplaceholder.js"></script>
    <script src="js/superplace_register.js"></script>  
