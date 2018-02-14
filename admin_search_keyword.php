<?php include 'type.php'; ?>

<div class="container-fluid">
  <div class="container">
    <h1 class="text-center" style="margin:30px;">Admin search keyword list for ads</h1>
    <div class="row" style="margin-top:-40px;">
      <div class=" col-xl-6 col-12" style="float:right; margin-top:40px; align:center;">
        <form class="" action="#" method="post">
          <div class="col-xl-4 col-6" style=" float:left;">
            <label for="Storename">Store name:</label> <br>
            <label for="Owner_name">Owner name:</label> <br>
            <label for="Storename">Contact details:</label> <br>
            <label for="Storename">Phone:</label> <br>
            <label for="Storename">GPS Location:</label>
            <label for="Storename">Contact details:</label>
          </div>
          <div class="input_store col-xl-8 col-6" style="float:right">
            <input type="text" name="" value="">
            <input type="text" name="" value="">
            <input type="text" name="" value="">
            <input type="text" name="" value="">
            <input type="text" name="" value="">
            <input type="text" name="" value="">
          </div> 
        </form>
      </div>
      <div class="col-xl-6" style="margin-top:30px;">
        <form class="lol" action="#" method="post">
          <input type="text" name="" id="searchBar" placeholder="Search" value="" maxlength="25" autocomplete="off" onmousedown="" onblur=""/><input type="submit" id="searchBtn" name="" value="Go!" />
        </form>
        <div class="" style="margin-top:10px;">
          <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Item1</a>
          <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Item2</a>
          <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Item3</a>
          <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Item4</a>
        </div>
      </div>
    </div>

    <div class="row" style="margin-top:50px;">
      <div class="col-xl-4">
        <form class="lol" action="#" method="post">
          <input type="text" name="" id="searchBar" placeholder="Search" value="" maxlength="25" autocomplete="off" onmousedown="" onblur=""/><input type="submit" id="searchBtn" name="" value="Go!" />
        </form>
      </div>
      <div class="col-xl-8" style="margin-top:-5px;">
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
