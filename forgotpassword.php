<?php include 'type.php'; ?>
<style media="screen">
.font-size-icon{font-size: 13pt; color:#474747;}
</style>
<div class="container">
    <div class="col-xl-4 col-lg-4 col-md-3 col-2 JBA"></div>
        <form class="form-horizontal" role="form" method="POST" action="#">
            <div class="row" >
                <div class="col-md-3 col-sm-3"></div>
                <div class="col-md-6 col-sm-9" style="margin-top:140px; color:#474747;">
                    <h2>For got password</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-5 field-label-responsive">
                    <label for="phone">Your phone number</label>
                </div>
                <div class="col-md-8 col-sm-7 font-size-icon">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem;"><i class="fas fa-mobile"></i></div>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Phone number" required autofocus>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-5 field-label-responsive">
                    <label for="password">Confirm password</label>
                </div>
                <div class="col-md-8 col-sm-7 ">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0" id="show_hide_password">
                            <div class="input-group-addon font-size-icon" style="width: 2.6rem"><i class="fas fa-lock-open"></i></div>
                            <input type="password" name="email" class="form-control" id="email"
                                placeholder="confirm code" required autofocus>
                            <div class="input-group-addon">
                                <a href="" class="btn btn-warning border-0" style="background-color:#fff; border:1px solid !important; border-color:#ced4da !important;"><i class="fas fa-eye" aria-hidden="true"></i></a>
                            </div>                
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success buttonhover" style="background-color:#34219f;"><i class="fas fa-check-circle"> </i> OK</button>
                </div>
            </div>
        </form>
