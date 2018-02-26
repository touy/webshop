<?php include 'type.php'; ?>
<?php include 'header.php'; ?>
<style media="screen">
  .row {margin-top:20px;}
</style>
<div class="container-fluid">
  <div class="container">
    <div class="col-xl-12">
      <h1 align="center" style="margin-top:30px;">Client Store</h1>
        <div class="row">
          <div class="col-xl-12 col-12">
            <div class="row">
              <div class="col-xl-6" style="margin-top:20px; float:left;">
                <img class="responsive" src="images/2.png" alt="" style="width:100%;">
                <form class="form-group" id="formupload" class="uploadImage" enctype="multipart/form-data" action="http://nonav.net:4000/upload_img" method="POST">
                  <label class="btn btn-info border-top-0 border-left-0 border-right-0" style="background-color:#34219f; border:2px solid; border-color:#fb3c00; margin-top:5px;">Browse 
                    <input type="file" name="file_up" id="file_up" hidden>
                  </label>
                  <label class="btn btn-info border-top-0 border-left-0 border-right-0" style="background-color:#34219f; border:2px solid; border-color:#fb3c00; margin-top:5px;">Save 
                    <input type="submit" name="submit" hidden>
                  </label>                              
                </form>
              </div>
              <div class=" col-xl-6" style="float:right; margin-top:40px; align:center;">
                <form class="" id="profileform" action="#" method="post">
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="Storename">Username:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="Storename">Ownername:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="Storename">contactdetails:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="Storename">Phone:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="Storename">GPS Location:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="Storename">Description:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="Storename">Score:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="Storename">Other link:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label for="Storename">Website:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                </form>
                <p style="margin-top:30px;"><i align="left"><input type="checkbox" name="" value="">Active</i></p>
            </div>
            <div class="col-xl-6" style="float:right;">
              <textarea name="editor3" id="editor3" rows="10" cols="80" style="width:100%;">
              </textarea>
              <script>
                  CKEDITOR.replace( 'editor3' );
              </script>
            </div>
            <div class="col-xl-6" style="float:left; margin-top:15px;">
              <a href="#" class="button_profile2"> <span class="btn-go-to-store langlao">ບັນທຶກ</span> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
