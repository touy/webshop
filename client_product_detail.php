<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
    <script src="ckeditor/ckeditor.js"></script>
    <style media="screen">
      .button{
        display: block;
        width: 180px;
        height: 60px;
        position: relative;
        border: 2px solid #e73d3d;
        border-radius: 10px;
      }
      .button .btn-go-to-store{
        display: block;
        position: absolute;
        bottom: 6px;
        width: 100%;
        height: 100%;
        line-height: 54px;
        background-color: #1024d7;
        text-align:center;
        color:#fff;
        box-shadow: 0 6px 0 #34219f;
        border-radius: 8px;
        transition: all 0.01s linear;
      }
      .button:active .btn-go-to-store {
        bottom:0;
        box-shadow: 0 0 0 #f64e30;
      }

      .button2{
        display: block;
        width: 100px;
        height: 40px;
        position: relative;
        border: 2px solid #e73d3d;
        border-radius: 10px;
      }
      .button2 .btn-go-to-store2{
        display: block;
        position: absolute;
        bottom: 6px;
        width: 100%;
        height: 100%;
        line-height: 40px;
        background-color: #1024d7;
        text-align:center;
        color:#fff;
        box-shadow: 0 6px 0 #34219f;
        border-radius: 8px;
        transition: all 0.01s linear;
      }
      .button2:active .btn-go-to-store2{
        bottom:0;
        box-shadow: 0 0 0 #f64e30;
      }
    </style>
  </head>
  <body>

    <div class="container-fluid">
      <div class="container"> <br>
        <h2 class="text-center">Client Product Detail</h2>
        <div class="row">
          <div class="go-t0-store">
            <a href="index.php" class="button"> <span class="btn-go-to-store">Go to Store</span> </a>
          </div>
          <div class="col-xl-12" style="margin-top:30px;">
            <div class="row">
              <div class="col-xl-9">
                <div class="col-xl-7" style="float:left;">
                  <a href="#"> <img src="images/2.png" alt="" style="width:100%;"> </a>
                </div>
                <div class="col-xl-5" style="float:right;">
                    <form class="form-inline">
                      <div class="col-xl-4" style="margin-top:20px;">
                        <div class="form-group" style="padding:0; margin:0;">
                          <label for="item_price">Item name</label>
                        </div>
                      </div>
                      <div class="col-xl-8" style="margin-top:20px;">
                        <input type="text" id="#" class="form-control">
                      </div>

                      <div class="col-xl-4" style="margin-top:20px;">
                        <div class="form-group" style="padding:0; margin:0;">
                          <label for="item_price">Price</label>
                        </div>
                      </div>
                      <div class="col-xl-8" style="margin-top:20px;">
                        <input type="text" id="#" class="form-control">
                      </div>

                      <div class="col-xl-4" style="margin-top:20px;">
                        <div class="form-group" style="padding:0; margin:0;">
                          <label for="item_price">Score</label>
                        </div>
                      </div>
                      <div class="col-xl-8" style="margin-top:20px;">
                        <input type="text" id="#" class="form-control">
                      </div>
                      <div class="col-xl-12" style="margin-top:20px;">
                        <input type="text" id="#" class="form-control" placeholder="Item code" style="width:100%;">
                      </div>

                      <div class="go-t0-store2" style="margin-top:20px; margin-left:40px;">
                        <a href="#" class="button2"> <span class="btn-go-to-store2">Save</span> </a>
                      </div>
                      <div class="go-t0-store2" style="margin-top:20px; margin-left:30px;">
                        <a href="login_frm.php" class="button2"> <span class="btn-go-to-store2">Cancel</span> </a>
                      </div>
                    </form>
                </div>
              </div>
              <div class="col-xl-3" style="height:350px; background-color:#34219f;"></div>
            </div>
          </div>

        </div>
        <div class="formeditor" style="margin-top:30px;">
          <div class="row">
            <div class="col-xl-12">
              <div class="col-xl-12">
                <form class="" action="#" method="post" style="float:left; width:100%; height:100%;">
                  <h3 class="langlao">Description:</h3>
                  <textarea name="editor1" id="editor1" rows="20" cols="80">
                  </textarea>
                  <script>
                      CKEDITOR.replace( 'editor1' );
                  </script>
                  <div class="go-t0-store" style="margin-top:30px;margin-bottom:10px;">
                    <a href="" class="button"> <span class="btn-go-to-store langlao">ອັບໂຫລດ</span> </a>
                  </div>
                </form>
              </div>

              <div class="col-xl-12">
                <form class="" action="#" method="post" style="float:left; width:100%;">
                  <h3 class="langlao">Short Description:</h3>
                  <textarea name="editor2" id="editor2" rows="5" cols="80">
                  </textarea>
                  <script>
                      CKEDITOR.replace( 'editor2' );
                  </script>
                  <div class="go-t0-store" style="margin-top:30px;margin-bottom:10px;">
                    <a href="" class="button"> <span class="btn-go-to-store langlao">ອັບໂຫລດ</span> </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
