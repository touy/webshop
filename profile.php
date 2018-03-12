<?php include 'type.php'; ?>
<?php include 'header.php'; ?>
<style>
  label, input {margin-top:14px;}
</style>
  <script src="js/changelang_profile.js">
        loadDetails();
        loadList();
        reload();
        loadLA();
        loadEN();
    </script>
<div class="container-fluid mt-5">
  <div class="container">
    <div class="col-xl-12">
      <h1 id='titleprofile' class="text-center langlao" style="margin-top:30px;">ຂໍ້ມູນສ່ວນຕົວ</h1>
      <div class="row">
        <div class="">
          <div class="col-xl-6" style="margin-top:20px;">
            <img class="responsive" src="images/2.png" alt="" style="width:100%; ">
            <form class="form-group" id="formupload" class="uploadImage" enctype="multipart/form-data" action="http://nonav.net:4000/upload_img" method="POST">
              <label id='uploadphoto' class="btn btn-info border-top-0 border-left-0 border-right-0 buttonhover langlao" style="background-color:#34219f; border:2px solid; border-color:#fb3c00; margin-top:5px;"><i class="fas fa-cloud-upload-alt"></i> ອັບໂຫລດ ຮູບພາບ 
                <input type="file" name="file_up" id="file_up" hidden>
              </label>
              <label id='save' class="btn btn-info border-top-0 border-left-0 border-right-0 buttonhover langlao" style="background-color:#34219f; border:2px solid; border-color:#fb3c00; margin-top:5px;"><i class="far fa-save"></i> ບັນທຶກ 
                <input type="submit" name="submit" hidden>
              </label>                              
            </form>
          </div>
          <div class="col-xl-6" style="margin-top:40px;">
            <div class="row">
              <div class="col-xl-4 col-lg-2 col-md-3 col-12">
                <label id='nameproduct' class="langlao" for="username">ຊື່ສິນຄ້າ:</label><br>
              </div>
              <div class="col-xl-8 col-lg-10 col-md-9 col-12 input_store">
                <input type="text" name="" value="">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-4 col-lg-2 col-md-3 col-12">
                <label id='priceproduct' class="langlao" for="totalscore">ລາຄາສິນຄ້າ</label><br>
              </div>
              <div class="col-xl-8 col-lg-10 col-md-9 col-12 input_store">
                <input type="text" name="" value="">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-4 col-lg-2 col-md-3 col-12">
                <label id='description' class="langlao" for="description">ເນື້ອໃນສິນຄ້າ:</label><br>
              </div>
              <div class="col-xl-8 col-lg-10 col-md-9 col-12 input_store">
                <input type="text" name="" value="" style="width:100%;  ">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
            <div class="col-xl-12 col-12">
              <form method="POST" action="multiDelete.php">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </form>
            </div>
      </div>

      <div class="row" >
        <div class="col-xl-12 col-xl-offset-0">
          <div class="icon_edit">
            <div class="" style="margin-top:40px;">
              <p class="text-center">
                  <a class="" href="#"><i class="fas fa-plus-circle"></i></a>
                  <a class="" href="#"><i class="far fa-edit" style=" margin-left:30px;"></i></a>
                  <a class="" href="#"><i class="far fa-trash-alt" style=" margin-left:30px;"></i></a>
                  <a class="" href="#"><i class="far fa-save" style=" margin-left:30px;"></i></a>
              </p>
            </div>
          </div>
        </div>
      </div>

        <div class="row">
              <div class="col-xl-12 col-xl-offset-0">
                <nav class="d-flex justify-content-center" aria-label="Page_number_profile">
                  <ul class="pagination">
                    <li class="page-item"><a id='prev' class="page-link langlao" href="#">ກັບຄືນ</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a id='next' class="page-link langlao" href="#">ຕໍ່ໄປ</a></li>
                  </ul>
                </nav>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
