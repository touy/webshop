<?php include 'header.php'; ?>
<?php include 'type.php'; ?>
<style>
  label, input {margin-top:14px;}
</style>
    <script src="js/changelang_store.js">
        loadDetails();
        loadList();
        reload();
        loadLA();
        loadEN();
    </script>
<div class="container-fluid mt-6">
  <div class="container">
    <div class="col-xl-12">
      <h1 id='titleStore' class="langlao" align="center" style="margin-top:30px;">ຮ້ານຄ້າ</h1>
        <div class="row">
          <div class="col-xl-12 col-12">
            <div class="col-xl-6 col-12" style="margin-top:20px; float:left;">
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
            <div class="input_store col-xl-6  col-12" style="float:right;align:center;">
              <form class="" action="#" method="post">
                <div class="row">
                  <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                    <label id='name' class="langlao" for="Storename">ຊື່ສິນຄ້າ:</label>
                  </div>
                  <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                    <input type="text" name="" id="storename" value="">
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
                    <input type="text" name=""  value="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                    <label id="phonecontact" class="langlao" for="phone">ເບີໂທລະສັບ:</label><br>
                  </div>
                  <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                    <input type="text" name=""  value="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                    <label id="gpslocation" class="langlao" for="gps">ສະຖານທີ່ຕັ້ງ:</label><br>
                  </div>
                  <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                    <input type="text" name=""  value="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                    <label id="description" class="langlao" for="description">ເນື້ອໃນສິນຄ້າ:</label><br>
                  </div>
                  <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                    <input type="text" name=""  value="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                    <label id="score" class="langlao" for="score">ຄະແນນ:</label><br>
                  </div>
                  <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                    <input type="text" name="" value="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                    <label id="otherlink" class="langlao" for="otherlink">ຂໍ້ມູນອື່ນໆ:</label><br>
                  </div>
                  <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                    <input type="text" name="" value="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                    <label id="website" class="langlao" for="website">ເວັບໄຊທ໌:</label><br>
                  </div>
                  <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                    <input type="text" name="" value="">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-12">
          <div class="row">
            <div class="col-xl-6 col-12" style="margin-top:30px;">
              <form class="lol" action="#" method="post">
                <input type="text" name="" id="searchBar" placeholder="Search" value="" maxlength="25" autocomplete="off" onmousedown="" onblur=""/><input type="submit" id="searchBtn" name="" value="Go!" />
              </form>
            </div>
          </div>
        </div>
        <!-- end search -->

        <div class="row">
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-sx-6 col-6" style="margin-top:40px;">
            <div class="row">
              <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                <img class="responsive" src="images/2.png" alt="" style="width:100%; ">
              </div>
              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 text-font">
                <span>ASUS 7250</span> <br>
                <span>ລາຄາ:7ລ້ານກີບ</span> <br>
                <span>ອອກໃໝ່ລ່າສຸດ</span> <br>
                <span>ມີເຄື່ອງພ້ອມສົ່ງ</span> <br>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-sx-6 col-6" style="margin-top:40px;">
            <div class="row">
              <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                <img class="responsive" src="images/2.png" alt="" style="width:100%; ">
              </div>
              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 text-font">
                <span>ASUS 7250</span> <br>
                <span>ລາຄາ:7ລ້ານກີບ</span> <br>
                <span>ອອກໃໝ່ລ່າສຸດ</span> <br>
                <span>ມີເຄື່ອງພ້ອມສົ່ງ</span> <br>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-sx-6 col-6" style="margin-top:40px;">
            <div class="row">
              <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                <img class="responsive" src="images/2.png" alt="" style="width:100%; ">
              </div>
              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 text-font">
                <span>ASUS 7250</span> <br>
                <span>ລາຄາ:7ລ້ານກີບ</span> <br>
                <span>ອອກໃໝ່ລ່າສຸດ</span> <br>
                <span>ມີເຄື່ອງພ້ອມສົ່ງ</span> <br>
              </div>
            </div>
          </div>
        </div>

  </div>
</div>

<?php include 'footer.php'; ?>
