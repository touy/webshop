<?php include 'type.php'; ?>

<div class="container-fluid">
  <div class="container">
    <h1 class="text-center" style="margin:30px;">Admin search keyword list for ads</h1>
    <div class="row" style="margin-top:-40px;">
      <div class=" col-xl-6" style="float:right; margin-top:40px; align:center;">
        <div class="col-xl-4" style=" float:left;">
          <label for="Storename">Store name:</label> <br>
          <label for="Owner_name">Owner name:</label> <br>
          <label for="Storename">Contact details:</label> <br>
          <label for="Storename">Phone:</label> <br>
          <label for="Storename">GPS Location:</label>
          <label for="Storename">Contact details:</label>
        </div>
        <div class="input_store col-xl-8" style="float:right">
          <input type="text" name="" value="">
          <input type="text" name="" value="">
          <input type="text" name="" value="">
          <input type="text" name="" value="">
          <input type="text" name="" value="">
          <input type="text" name="" value="">
        </div>
      </div>
      <div class="col-xl-6" style="height:200px; background-color:red; margin-top:30px;"></div>
    </div>

    <div class="row" style="margin-top:50px;">
      <div class="col-xl-3">
        <form action="" class="search-form">
            <div class="form-group has-feedback">
              <label for="search" class="sr-only">Sear</label>
              <input type="text" class="form-control" name="search" id="search" placeholder="&nbsp;&nbsp;search" style="border-radius:10px;">
              <i class="fas fa-search" style="position:absolute; margin-top:-26px; margin-left:3px; float:right;"></i>
            </div>
        </form>
      </div>
      <div class="col-xl-9" style="margin-top:-30px;">
        <div class="icon_edit">
            <p class="text-center">
                <a class="" href="#"><i class="text-center fas fa-plus-circle"></i></a>
                <a class="" href="#"><i class="text-center far fa-save" style=" margin-left:30px;"></i></a>
                <a class="" href="#"><i class="text-center far fa-trash-alt" style=" margin-left:30px;"></i></a>
              </p>
        </div>
      </div>
    </div>

    <div class="row">
          <div class="col-xl-12">
            <form method="POST" action="multiDelete.php">
              <table class="table">
                <thead class="thead-dark aprove">
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
