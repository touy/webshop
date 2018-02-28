<?php include 'type.php'; ?>
<?php include 'header.php'; ?>
<link href="https://rawgithub.com/hayageek/jquery-upload-file/master/css/uploadfile.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>


<script type="text/javascript">
var _arrObj=[];
var _obj={};
const host='http://nonav.net:4000';
  function profileform1(){
    var arr=[];
    arr.push({
      image:'https://socialmediaweek.org/london/files/2017/06/london2017.jpg',
      username:'Predetor',
      ownername:'Acer nitro5',
      contactdetails:'Webpost',
      phone:0123456789,
      gps:'vientiane capital',
      description:'it is coming',
      score:10,
      otherlink:'www.google.com',
      website:'webpost.com'
    });
    $("#username").val(arr[0].username);
    $("#ownername").val(arr[0].ownername);
    $("#contactdetails").val(arr[0].contactdetails);
    $("#phone").val(arr[0].phone);
    $("#gps").val(arr[0].gps);
    $("#description").val(arr[0].description);
    $("#score").val(arr[0].score);
    $("#otherlink").val(arr[0].otherlink);
    $("#website").val(arr[0].website);

  }
function clickprofile(){
  profileform1();
}
$( document ).ready(function(){

  profileform1();

  $("#formupload").submit(function(e){
        e.preventDefault();
        $('#photoprofile').hide();
        $('#loading').fadeIn(1000);

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
  .row {margin-top:20px;}
</style>
<div class="container-fluid">
  <div class="container">
    <div class="col-xl-12">
      <h1 align="center" style="margin-top:30px;">Client Store</h1>
        <div class="row">
          <div id="formstore" class="col-xl-12 col-12 ">
             <div class="row">
              <div class="col-xl-6" style="margin-top:20px;">
                <img class="img-responsive" id='photoprofile' src="images/2.png" alt="" style="width:100%;">
                <img class='progressOff' id='loading' src='images/Loading_icon.gif' />
                <form class="form-group" id="formupload" class="uploadImage" enctype="multipart/form-data" action="http://nonav.net:4000/upload_img" method="POST">
                  <label class="btn btn-info border-top-0 border-left-0 border-right-0 buttonhover" style="background-color:#34219f; border:2px solid; border-color:#fb3c00; margin-top:5px;">Upload photo 
                    <input type="file" name="file_up" id="file_up" hidden>
                  </label>
                  <label class="btn btn-info border-top-0 border-left-0 border-right-0 buttonhover" style="background-color:#34219f; border:2px solid; border-color:#fb3c00; margin-top:5px;">Save 
                    <input type="submit" name="submit" hidden>
                  </label>                              
                </form>
              </div>
              <div class=" col-xl-6" style=" margin-top:40px;">
                <form class="" id="profileform" action="#" method="post">
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="username">Username:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input id="username" type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="ownername">Ownername:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input id="ownername" type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="contactdetails">contactdetails:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input id="contactdetails" type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="phone">Phone:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input id="phone" type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="gps">GPS Location:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input id="gps" type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="description">Description:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input id="description" type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="score">Score:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input id="score" type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="otherlink">Other link:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input id="otherlink" type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="website">Website:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input id="website" type="text" name="" value="">
                    </div>
                  </div>
                </form>
                <p style="margin-top:30px;"><i align="left"><input type="checkbox" name="" value="">Active</i></p>
              </div>
            </div>
             <div class="row">
              <div class="col-xl-6">
                <textarea name="editor3" id="editor3" rows="10" cols="80" style="width:100%;">
                </textarea>
                <script>
                    CKEDITOR.replace( 'editor3' );
                </script>
              </div>
              <div class="col-xl-6">
                <a href="#" class="button_profile2"> <span class="btn-go-to-store langlao">ບັນທຶກ</span> </a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
