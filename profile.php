<?php include 'type.php'; ?>
<?php include 'header.php'; ?>
<style media="screen">
  .row {margin-top:20px;}
</style>
<div class="container-fluid">
  <div class="container">
    <div class="col-xl-12">
      <h1 class="text-center" style="margin-top:30px;">Profile</h1>
      <div class="row">
        <div class="">
          <div class="col-xl-6" style="margin-top:20px;">
            <img class="responsive" src="images/2.png" alt="" style="width:100%; ">
            <form class="form-group" id="formupload" class="uploadImage" enctype="multipart/form-data" action="http://nonav.net:4000/upload_img" method="POST">
              <label class="btn btn-info border-top-0 border-left-0 border-right-0" style="background-color:#34219f; border:2px solid; border-color:#fb3c00; margin-top:5px;">Browse 
                <input type="file" name="file_up" id="file_up" hidden>
              </label>
              <label class="btn btn-info border-top-0 border-left-0 border-right-0" style="background-color:#34219f; border:2px solid; border-color:#fb3c00; margin-top:5px;">Save 
                <input type="submit" name="submit" hidden>
              </label>                              
            </form>
          </div>
          <div class="col-xl-6" style="margin-top:40px;">
            <div class="row">
              <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                <label for="username">Username:</label><br>
              </div>
              <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                <input type="text" name="" value="">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                <label for="totalscore">Total score:</label><br>
              </div>
              <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                <input type="text" name="" value="">
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                <label for="description">Description:</label><br>
              </div>
              <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                <input type="text" name="" value="">
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
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
                </nav>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
