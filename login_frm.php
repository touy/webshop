
<?php include 'type.php' ?>
<!-- <script type="text/javascript">
  function getDataLogin(){
    var userInfo={
      username:'';
      password:'',
      capta:'',
    };
    $.get( "/login.php",)
    userInfo
    ,function(data ) {
    alert( data );
  }).fail(function(err) {
    alert( alert );
  })
    // .done(function() {
    //   alert( "second success" );
    // })

    // .always(function() {
    //   alert( "finished" );
    // })
    ;
  }
  function loginSubmit(){
    getDataLogin();
  }
</script> -->
<div class="container">
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-sx-2 col-2 JBA"></div>
  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-sx-10 col-10" style=" float:right; margin-top:100px;">
    <form class="form-horizontal" role="form" method="POST" action="client_product_detail.php">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <h4 class="langlao">ກະລຸນາປ້ອນຊື່ແລະລະຫັດບັນຊີຂອງທ່ານ</h4>
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
                                <input type="text" name="email" class="form-control" id="email"
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
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                                <input type="password" name="password" class="form-control" id="password"
                                       placeholder="Password" required>
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
                                <span style="padding-bottom: .15rem">Remember me</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 1rem">
                    <div class="col-md-4 col-sm-2 col-2"></div>
                    <div class="col-md-8 col-sm-10 col-10">
                        <button type="submit" class="btn btn-success" style="background-color:#34219f;"><i class="fas fa-sign-in-alt"></i> Login</button>
                    </div>
                </div>
                <div class="row" style="padding-top: 1rem">
                    <div class="col-md-4 col-sm-2 col-xs-2 col-2"></div>
                    <div class="col-md-8 col-sm-10 col-xs-10 col-10">
                      <a href="index.php"><button2 type="" class="btn btn-success" style="background-color:#34219f;"><i class=""></i> back to index </button2></a>
                    </div>
                </div>
            </form>
  </div>
</div>
