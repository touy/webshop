<?php include 'type.php'; ?>

<div class="container-fluid">
  <div class="container">
    <div class="col-xl-12">
      <h1 class="text-center" style="margin-top:30px;">Profile</h1>
      <div class="row">
        <div class="col-xl-12 col-12">
          <div class="col-xl-6" style="margin-top:20px; float:left;">
            <img class="responsive" src="images/2.png" alt="" style="width:100%; ">
          </div>
          <div class="col-xl-6" style="float:right; margin-top:40px; align:center;">
            <label for="Username">Username&nbsp;&nbsp;</label>
            <input type="text" name="" value="" style="width:80%; border-top:none; border-left:none; border-right:none; border-color:#34219f; border-radius:7px;">
            <div class="clearfix" style="margin-top:15px;"></div>
            <label for="Username">Total Score</label>
            <input type="text" name="" value="" style="width:80%; border-top:none; border-left:none; border-right:none; border-color:#34219f; border-radius:7px;">
            <div class="clearfix" style="margin-top:15px;"></div>
            <label for="Username">Description</label>
            <input type="text" name="" value="" style="width:80%; border-top:none; border-left:none; border-right:none; border-color:#34219f; border-radius:7px;">
          </div>
        </div>
      </div>

      <div class="" >
        <div class="icon_edit">
          <div class="col-xl-12" style="height:100px; margin-top:40px;">
            <p class="text-center">
                <a class="" href="#"><i class="text-center fas fa-plus-circle"></i></a>
                <a class="" href="#"><i class="text-center far fa-edit" style=" margin-left:30px;"></i></a>
                <a class="" href="#"><i class="text-center far fa-trash-alt" style=" margin-left:30px;"></i></a>
                <a class="" href="#"><i class="text-center far fa-save" style=" margin-left:30px;"></i></a>
              </p>
          </div>
        </div>
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
