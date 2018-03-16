<?php include 'type.php'; ?>
<?php include 'header.php'; ?>
<style>
  label, input {margin-top:14px;}
</style>
    <script src="js/changelang_client_store.js">
      loadDetails();
      loadList();
      reload();
      loadLA();
      loadEN();  
    </script>
<div class="container-fluid mt-6">
  <div class="container">
    <div class="col-xl-12">
      <h1 id='titleStore' class="langlao" align="center" style="margin-top:30px;">ຮ້ານຂອງລູກຄ້າ</h1>
        <div class="row">
          <div class="col-xl-12 col-12">
            <div class="row">
              <div class="col-xl-6" style="margin-top:20px; float:left;">
                <img class="responsive" src="images/2.png" alt="" style="width:100%;">
                <form class="form-group" id="formupload" class="uploadImage" enctype="multipart/form-data" action="http://nonav.net:4000/upload_img" method="POST">
                  <label id='uploadphoto' class="btn btn-info border-top-0 border-left-0 border-right-0 buttonhover langlao" style="background-color:#34219f; border:2px solid; border-color:#fb3c00; margin-top:5px;"><i class="fas fa-cloud-upload-alt"></i> ອັບໂຫລດຮູບພາບ
                    <input type="file" name="file_up" id="file_up" hidden>
                  </label>
                  <label id='save' class="btn btn-info border-top-0 border-left-0 border-right-0 buttonhover langlao" style="background-color:#34219f; border:2px solid; border-color:#fb3c00; margin-top:5px;"><i class="far fa-save"></i> ບັນທຶກ
                    <input type="submit" name="submit" hidden>
                  </label>                              
                </form>
              </div>
              <div class=" col-xl-6" style="float:right; margin-top:40px; align:center;">
                <form class="" id="profileform" action="#" method="post">
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label id='name' class="langlao" for="Storename">ຊື່ສິນຄ້າ:</label>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label id='ownername' class="langlao" for="ownername">ລະຫັດສິນຄ້າ:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label id='contactdetails' class="langlao" for="contactdetails">ຂໍ້ມູນຕິດຕໍ່:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label id='phonecontact' class="langlao" for="phone">ເບີໂທລະສັບ:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label id='gpslocation' class="langlao" for="gps">ສະຖານທີ່ຕັ້ງ:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label id='description' class="langlao" for="description">ເນື້ອໃນສິນຄ້າ:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label id='score' class="langlao" for="score">ຄະແນນ:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label id='otherlink' class="langlao" for="otherlink">ຂໍ້ມູນອື່ນໆ:</label><br>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                      <input type="text" name="" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                      <label id='website' class="langlao" for="website">ເວັບໄຊທ໌:</label><br>
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
              <label id='' class="btn btn-info border-top-0 border-left-0 border-right-0 buttonhover langlao" style="background-color:#34219f; border:2px solid; border-color:#fb3c00; margin-top:5px;">ບັນທຶກ <i class="far fa-save"></i>
                <input type="submit" name="submit" hidden>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
