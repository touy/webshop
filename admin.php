<?php include 'type.php'; ?>
<?php include 'header.php'; ?>

<div class="container-fluid">
  <div class="container">
    <h1 class="text-center">Admin aprove list</h1>
    <div class="col-xl-12">
      <div class="row">
          <div class="col-xl-4"></div>
          <div class="col-xl-4" style="float:left; margin-top:30px;">
            <form class="lol" action="#" method="post">
              <input type="text" name="" id="searchBar" placeholder="Search" value="" maxlength="25" autocomplete="off" onmousedown="" onblur=""/><input type="submit" id="searchBtn" name="" value="Go!" />
            </form>
          </div>
          <div class="col-xl-4"></div>
      </div>
      <div class="row">
        <div class="col-xl-4"></div>
        <div class="col-xl-4">
          <div class="icon_edit">
            <div class="" style="height:100px; margin-top:40px;">
              <p class="text-center">
                  <a class="" href="#"><i class="text-center fas fa-check-circle" style=" margin-left:30px;"></i></a>
                  <a class="" href="#"><i class="text-center far fa-trash-alt" style=" margin-left:30px;"></i></a>
                </p>
            </div>
          </div>
        </div>
        <div class="col-xl-4"></div>
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
</div>

<?php include 'footer.php'; ?>
