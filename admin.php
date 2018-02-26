<?php include 'type.php'; ?>
<?php include 'header.php'; ?>

<div class="container-fluid">
  <div class="container">
    <h1 class="text-center">Admin aprove list</h1>
    <div class="col-xl-12">
      <div class="row">
          <div class="col-xl-12 col-xl-offset-0" style="margin-top:30px;">
            <form class="d-flex justify-content-center" action="#" method="post">
              <input type="text" name="" id="searchBar" placeholder="Search" value="" maxlength="25" autocomplete="off" onmousedown="" onblur=""/><input type="submit" id="searchBtn" name="" value="Go!" />
            </form>
          </div>
      </div>
      <div class="row">

        <div class="col-xl-12 col-xl-offset-0">
          <div class="icon_edit">
            <div class="" style="margin-top:10px;">
              <p class="text-center">
                  <a class="" href="#"><i class="text-center fas fa-check-circle" style=" margin-left:30px;"></i></a>
                  <a class="" href="#"><i class="text-center far fa-trash-alt" style=" margin-left:30px;"></i></a>
                </p>
            </div>
          </div>
        </div>

      </div>

        <div class="row">
              <div class="col-xl-12">
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

<?php include 'footer.php'; ?>
