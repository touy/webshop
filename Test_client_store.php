<?php include 'type.php'; ?>
<?php include 'header.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
function storeform(){
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

    // $("#imageclient").text(arr[0].image);
    $("#username").val(arr[0].username);
    $("#ownername").val(arr[0].ownername);
    $("#contactdetails").val(arr[0].contactdetails);
    $("#phone").val(arr[0].phone);
    $("#gps").val(arr[0].gps);
    $("#description").val(arr[0].description);
    $("#score").val(arr[0].score);
    $("#otherlink").val(arr[0].otherlink);
    $("#website").val(arr[0].website);

    // html="";
    // html+='<div class="row">'
    //   html+='<div class="col-xl-6" style="margin-top:20px;">'
    //     html+='<img class="responsive" src="'+arr[1].image+'" alt="" style="width:100%;">'
    //   html+='</div>'
    //   html+='<div class=" col-xl-6" margin-top:40px; align:center;">'
    //     html+='<form class="" id="profileform" action="#" method="post">'
    //       html+='<div class="row">'
    //         html+='<div class="col-xl-3 col-lg-2 col-md-3 col-12">'
    //           html+='<label for="Storename">Username:</label><br>'
    //         html+='</div>'
    //         html+='<div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">'
    //           html+='<input type="text" name="" value="'+arr[1].storename+'">'
    //         html+='</div>'
    //       html+='</div>'
    //       html+='<div class="row">'
    //         html+='<div class="col-xl-3 col-lg-2 col-md-3 col-12">'
    //           html+='<label for="Storename">Ownername:</label><br>'
    //         html+='</div>'
    //         html+='<div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">'
    //           html+='<input type="text" name="" value="'+arr[1].ownername+'">'
    //         html+='</div>'
    //       html+='</div>'
    //       html+='<div class="row">'
    //         html+='<div class="col-xl-3 col-lg-2 col-md-3 col-12">'
    //           html+='<label for="Storename">contactdetails:</label><br>'
    //         html+='</div>'
    //         html+='<div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">'
    //           html+='<input type="text" name="" value="'+arr[1].contactdetails+'">'
    //         html+='</div>'
    //       html+='</div>'
    //       html+='<div class="row">'
    //         html+='<div class="col-xl-3 col-lg-2 col-md-3 col-12">'
    //           html+='<label for="Storename">Phone:</label><br>'
    //       html+='</div>'
    //         html+='<div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">'
    //           html+='<input type="text" name="" value="'+arr[1].phone+'">'
    //         html+='</div>'
    //       html+='</div>'
    //       html+='<div class="row">'
    //         html+='<div class="col-xl-3 col-lg-2 col-md-3 col-12">'
    //           html+='<label for="Storename">GPS Location:</label><br>'
    //         html+='</div>'
    //         html+='<div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">'
    //           html+='<input type="text" name="" value="'+arr[1].gps+'">'
    //         html+='</div>'
    //       html+='</div>'
    //       html+='<div class="row">'
    //         html+='<div class="col-xl-3 col-lg-2 col-md-3 col-12">'
    //           html+='<label for="Storename">Description:</label><br>'
    //         html+='</div>'
    //         html+='<div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">'
    //           html+='<input type="text" name="" value="'+arr[1].description+'">'
    //         html+='</div>'
    //       html+='</div>'
    //       html+='<div class="row">'
    //         html+='<div class="col-xl-3 col-lg-2 col-md-3 col-12">'
    //           html+='<label for="Storename">Score:</label><br>'
    //         html+='</div>'
    //         html+='<div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">'
    //           html+='<input type="text" name="" value="'+arr[1].score+'">'
    //         html+='</div>'
    //       html+='</div>'
    //       html+='<div class="row">'
    //         html+='<div class="col-xl-3 col-lg-2 col-md-3 col-12">'
    //           html+='<label for="Storename">Other link:</label><br>'
    //         html+='</div>'
    //         html+='<div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">'
    //           html+='<input type="text" name="" value="'+arr[1].otherlink+'">'
    //         html+='</div>'
    //       html+='</div>'
    //       html+='<div class="row">'
    //         html+='<div class="col-xl-3 col-lg-2 col-md-3 col-12">'
    //           html+='<label for="Storename">Website:</label><br>'
    //         html+='</div>'
    //         html+='<div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">'
    //           html+='<input type="text" name="" value="'+arr[1].website+'">'
    //         html+='</div>'
    //       html+='</div>'
    //     html+='</form>'
    //     html+='<p style="margin-top:30px;"><i align="left"><input type="checkbox" name="" value="">Active</i></p>'
    //   html+='</div>'
    // html+='</div>'
    // html+='<div class="clearfix">'
    // html+='</div>'


    // alert(html);
  // $( "#formstore" ).append(html);

}
function clickLoad(){
storeform();
}
$( document ).ready(function() {
    storeform();
});
</script>
<div class="container-fluid">
  <div class="container">
    <div class="col-xl-12">
      <h1 align="center" style="margin-top:30px;">Client Store</h1>
        <div class="row">
          <div id="formstore" class="col-xl-12 col-12 ">
             <div class="row">
              <div class="col-xl-6" style="margin-top:20px; ">
                <img  class="responsive" src="images/2.png" alt="" style="width:100%;">
              </div>
              <div class=" col-xl-6" style=" margin-top:40px; align:center;">
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
            </div> -->
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

<?php include 'footer.php'; ?>
