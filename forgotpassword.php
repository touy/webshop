<?php include 'type.php'; ?>
<style media="screen">
.font-size-icon{font-size: 13pt; color:#474747;}
</style>
<div class="container">
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-sx-2 col-2 JBA"></div>
    <form class="form-horizontal" role="form" method="POST" action="/register">
        <div class="row" >
            <div class="col-md-3"></div>
            <div class="col-md-6" style="margin-top:140px; color:#474747;">
                <h2>For got password</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="phone">Your phone number</label>
            </div>
            <div class="col-md-6 font-size-icon">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem;"><i class="fas fa-mobile"></i></div>
                        <input type="text" name="name" class="form-control" id="name"
                               placeholder="Username" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Confirm password</label>
            </div>
            <div class="col-md-6 ">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon font-size-icon" style="width: 2.6rem"><i class="fas fa-lock-open"></i></div>
                        <input type="password" name="email" class="form-control" id="email"
                               placeholder="confirm code" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
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