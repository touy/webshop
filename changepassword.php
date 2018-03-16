<?php include 'type.php'; ?>
<div class="icon_language float-right">
      <a href="#" onclick='loadLA()'><img src="images/Flag of Laos.png" alt="" style="width:30px; height:30px;"></a>
      <a href="#" onclick='loadEN()'><img src="images/flag-button-round-250.png" alt="" style="width:24px; height:24px;margin-top:2px;"></a>
</div>
    <script src="js/changelang_changepassword.js">
        loadDetails();
        loadList();
        reload();
        loadLA();
        loadEN(); 
    </script>
<style media="screen">
  .font-size-icon{font-size: 13pt; color:#474747;}
</style>
<div class="container">
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-2 col-sx-2 col-2 JBA"></div>
    <form class="form-horizontal"  role="form" method="POST" action="">
        <div class="row" >
            <div class="col-md-3"></div>
            <div class="col-md-6" style="margin-top:140px; color:#474747;">
                <h2 id='titlechagepasswordEN' class="langlao">ປ່ຽນລະຫັດຜ່ານ</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 field-label-responsive">
                <label id='oldpasswordEN' class="langlao" for="oldpassword">ລະຫັດຜ່ານເດີມ:</label>
            </div>
            <div class="col-md-8 font-size-icon">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0" id="show_hide_password">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fas fa-key"></i></div>
                        <input type="password" name="password" class="form-control langlao" id="oldpassword"
                               placeholder="Old Password" required autofocus>
                        <div class="input-group-addon">
                            <a href="" class="btn btn-warning border-0" style="background-color:#fff; border:1px solid !important; border-color:#ced4da !important;"><i class="fas fa-eye" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 field-label-responsive">
                <label id='newpasswordEN' class="langlao" for="newpassword">ລະຫັດຜ່ານໃໝ່:</label>
            </div>
            <div class="col-md-8 font-size-icon" id="show_hide_password">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fas fa-key"></i></div>
                        <input type="password" name="newpassword" class="form-control langlao" id="newpassword"
                               placeholder="New Password" required autofocus>
                        <div class="input-group-addon">
                            <a href="" class="btn btn-warning border-0" style="background-color:#fff; border:1px solid !important; border-color:#ced4da !important;"><i class="fas fa-eye" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 field-label-responsive">
                <label id='phoneEN' class="langlao" for="phone">ເບີໂທລະສັບ:</label>
            </div>
            <div class="col-md-8 font-size-icon">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem;"><i id="sizeicon" class="fas fa-mobile"></i></div>
                        <input type="text" name="phone" class="form-control langlao" id="phone"
                               placeholder="Username" required autofocus>
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
                               id="password_confirm" placeholder="Password" required>
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
                <button id='done' type="submit" class="btn btn-success buttonhover langlao" style="background-color:#34219f;"><i class="fas fa-check-circle"></i> ສຳເລັດ</button>
            </div>
        </div>
    </form>

<script src="js/superplaceholder.js"></script>
<script src="js/superplace_changepassword.js"></script>   

