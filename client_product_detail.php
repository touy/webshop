<?php include 'header.php'; ?>
<?php include 'type.php'; ?>
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
          <div class="" style="margin-top:30px;">
            <div class="row">
              <div class="col-xl-9">
                <div class="row">
                  <div class="col-xl-7">
                    <a href="#"> <img src="images/2.png" alt="" style="width:100%;"> </a>
                    <form class="form-group" id="formupload" class="uploadImage" enctype="multipart/form-data" action="http://nonav.net:4000/upload_img" method="POST">
                      <label class="btn btn-info border-top-0 border-left-0 border-right-0" style="background-color:#34219f; border:2px solid; border-color:#fb3c00; margin-top:5px;">Browse 
                        <input type="file" name="file_up" id="file_up" hidden>
                      </label>
                      <label class="btn btn-info border-top-0 border-left-0 border-right-0" style="background-color:#34219f; border:2px solid; border-color:#fb3c00; margin-top:5px;">Save 
                        <input type="submit" name="submit" hidden>
                      </label>                              
                    </form>
                  </div>
                  <div class="col-xl-5">
                      <form class="form-inline">
                        <div class="col-xl-4" style="margin-top:20px;">
                            <label for="item_price" >Itemname:</label>
                        </div>
                        <div class="col-xl-8 col-md-12">
                          <input type="text" id="#" class="border-top-0 border-right-0 border-left-0 form-control">
                        </div>

                        <div class="col-xl-4" style="margin-top:20px;">
                          <div class="form-group" style="padding:0; margin:0;">
                            <label for="item_price">Price:</label>
                          </div>
                        </div>
                        <div class="col-xl-8">
                          <input type="text" id="#" class="form-control">
                        </div>

                        <div class="col-xl-4" style="margin-top:20px;">
                          <div class="form-group" style="padding:0; margin:0;">
                            <label for="item_price">Score:</label>
                          </div>
                        </div>
                        <div class="col-xl-8">
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
              </div>
              <div class="col-xl-3" style="height:350px; background-color:#34219f;"></div>
            </div>
          </div>

        </div>
        <div class="formeditor" style="margin-top:30px;">
          <div class="row">
            <div class="col-xl-12">
              <div class="col-xl-12">
                <form class="" action="#" method="post" style="float:left; width:100%;">
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

                <form class="" action="#" method="post" style="float:left; width:100%;">
                  <h3 class="langlao">Description:</h3>
                  <textarea name="editor2" id="editor2" rows="20" cols="80">
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
  </body>
</html>

<?php include 'footer.php'; ?>
