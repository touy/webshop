<?php include 'header.php'; ?>
<?php include 'type.php'; ?>

<html lang="en">
  <head>
    <link href="https://rawgithub.com/hayageek/jquery-upload-file/master/css/uploadfile.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <!-- Required meta tags
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>  -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <script src="ckeditor/ckeditor.js"></script>


    <script type="text/javascript">
    var _arrObj=[];
    var _obj={};
    const host='http://nonav.net:4000';
      function profileform1(){
        var arr=[];
        arr.push({
          itemname:'Iphone X',
          price:50000,
          score:2000,
          itemcode:'abc123'
        });
        $("#itemname").val(arr[0].itemname);
        $("#price").val(arr[0].price);
        $("#score").val(arr[0].score);
        $("#itemcode").val(arr[0].itemcode);
        $('#photoprofile').attr('src',host+arr[0].photoprofile).show();

      }
    function clickprofile(){
      profileform1();
    }
    $( document ).ready(function(){

      profileform1();

      $("#formupload").submit(function(e){
            e.preventDefault();
            $('#photoprofile').hide();
            //alert($('#loading'));
            $('#loading').show(1000);

            $(this).ajaxSubmit({
              contentType: 'application/json',
              success: function(response){
                c=response;
                _obj.photoprofile=c.data.file;
                $('#loading').fadeOut(1000);
                $('#photoprofile').attr('src',host+c.data.file).show();
              },
              error:function(err){
                console.log(err);
                alert(err);
              }
          });

        return false;
      });
      });
    </script>

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
                    <img class="img-responsive" id='photoprofile' src="images/2.png" alt="" style="width:100%;">
                    <img class='progressOff' id='loading' src='images/Loading_icon.gif' />
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
                      <form id="#" class="form-inline">
                        <div class="col-xl-4" style="margin-top:20px;">
                          <div class="form-group">
                            <label for="itemname" >Itemname:</label>
                          </div>
                        </div>
                        <div class="col-xl-8 col-md-12" style="margin-top:20px;">
                          <input type="text" id="itemname" class="form-control">
                        </div>

                        <div class="col-xl-4" style="margin-top:20px;">
                          <div class="form-group" style="padding:0; margin:0;">
                            <label for="price">Price</label>
                          </div>
                        </div>
                        <div class="col-xl-8" style="margin-top:20px;">
                          <input type="text" id="price" class="form-control">
                        </div>

                        <div class="col-xl-4" style="margin-top:20px;">
                          <div class="form-group" style="padding:0; margin:0;">
                            <label for="Score">Score</label>
                          </div>
                        </div>
                        <div class="col-xl-8" style="margin-top:20px;">
                          <input type="text" id="score" class="form-control">
                        </div>
                        <div class="col-xl-12" style="margin-top:20px;">
                          <input type="text" id="itemcode" class="form-control" placeholder="Item code" style="width:100%;">
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
