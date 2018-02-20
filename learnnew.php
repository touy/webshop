<?php include 'type.php'; ?>
<?php include 'header.php'; ?>
<link href="https://rawgithub.com/hayageek/jquery-upload-file/master/css/uploadfile.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>

<script type="text/javascript">
var _arrObj=[];
var _obj={};
const host='http://nonav.net:4000';
function getDataLogin(){
  ;
}
function loginSubmit(){
  getDataLogin();
}
  function profileform(){
    var arr=[];
    arr.push({
      username:'Mr.ABC',
      totalscore:2000000,
      description:'New client'
    });
    $("#username").val(arr[0].username);
    $("#totalscore").val(arr[0].totalscore);
    $("#description").val(arr[0].description);
    $('#photoprofile').attr('src',host+arr[0].photoprofile).show();
  }
function clickprofile(){
  profileform();
}
$( document ).ready(function(){

  profileform();

  $("#formupload").submit(function(e){
        e.preventDefault();
        $('#photoprofile').hide();
        $('#loading').fadeIn(1000);

        $(this).ajaxSubmit({
          contentType: 'application/json',
          success: function(response){
            //console.log('image uploaded and form submitted');
            c=response;
            //console.log(c.data.file);
            //alert(c.data.file);
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

<div class="container-fluid">
  <div class="container">
    <div class="col-xl-12">
      <h1 class="text-center" style="margin-top:30px;">Profile</h1>
      <div class="row">
        <div class="col-xl-12 col-12">
          <div class="col-xl-6" style="margin-top:20px; float:left;">
            <img class="responsive" id='photoprofile' src="images/2.png" alt="" style="width:100%; ">
            <img class='progressOff' id='loading' src='images/Loading_icon.gif' />
            <form id="formupload" class="uploadImage" enctype="multipart/form-data" action="http://nonav.net:4000/upload_img" method="POST">
              <input type="file" name="file_up" id="file_up" value="">
              <input type="submit" name="submit"  value="Submit">
            </form>
          </div>
          <div class="col-xl-6" style="float:right; margin-top:40px; align:center;">
            <form class="" id="profileform" action="#" method="post">
              <div class="row">
                <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                  <label for="Storename">Username:</label><br>
                </div>
                <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                  <input type="text" name="" id="username" value="">
                </div>
              </div>
              <div class="row">
                <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                  <label for="Storename">Total Score:</label><br>
                </div>
                <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                  <input type="text" name="" id="totalscore" value="">
                </div>
              </div>
              <div class="row">
                <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                  <label for="Storename">Description:</label><br>
                </div>
                <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                  <input type="text" name="" id="description" value="">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="" >
        <div class="icon_edit">
          <div class="col-xl-12" style="margin-top:40px;">
            <p class="text-center">
                <a class="" href="#"><i class="text-center fas fa-plus-circle"></i></a>
                <a class="" href="#"><i class="text-center far fa-edit" style=" margin-left:30px;"></i></a>
                <a class="" href="#"><i class="text-center far fa-trash-alt" style=" margin-left:30px;"></i></a>
                <a class="" href="#"><i class="text-center far fa-save" style=" margin-left:30px;"></i></a>
              </p>

          </div>
        </div>
        </div>
        <div class="clearfix">

        </div>
        <div class="row">
              <div class="col-xl-12">
                <form method="POST" action="multiDelete.php">
                  <table class="table">
                    <thead class="thead-inverse">
                      <tr>
                        <th>#</th>
                        <th>ປະເພດສິນຄ້າ</th>
                        <th>ຊື່ສິນຄ້າ</th>
                        <th>ຮູບສິນຄ້າ</th>
                        <th>ລົບສິນຄ້າ</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><input type="checkbox" name="" value=""></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td><input type="checkbox" name="" value=""></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td ><input type="checkbox" name="" value=""></td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
              <div class="col-xl-4"></div>
              <div class="col-xl-4">
                <nav aria-label="Page_number_profile" >
                  <ul class="pagination">
                    <li class="page-item" ><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
                </nav>
              </div>
              <div class="col-xl-4"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
