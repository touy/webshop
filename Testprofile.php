<?php include 'type.php'; ?>
<?php include 'header.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript">
function getDataLogin(){
//   var userInfo={
//     username:'';
//     password:'',
//     capta:'',
//   };
//   $.get( "/login.php",
//   userInfo
//   ,function(data ) {
//   alert( data );
// }).fail(function(err) {
//   alert( alert );
// })
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

    // alert(html);
  //$("#profileform").append(html);
  }
function clickprofile(){
  profileform();
}
$( document ).ready(function(){
  profileform();

});
</script>


<div class="container-fluid">
  <div class="container">
    <div class="col-xl-12">
      <h1 class="text-center" style="margin-top:30px;">Profile</h1>
      <div class="row">
        <div class="col-xl-12 col-12">
          <div class="col-xl-6" style="margin-top:20px; float:left;">
            <img class="responsive" src="images/2.png" alt="" style="width:100%; ">
            <form id="formupload" class="uploadImage" enctype="=multipart/form-data" action="upload_img" method="POST">
              
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
