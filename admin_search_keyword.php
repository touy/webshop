<?php include 'type.php'; ?>
<?php include 'header.php'; ?>
<style>
  label, input {margin-top:14px;}
</style>
<script src="js/chnagelang_admin_search_keyword.js">
  loadDetails();
  loadList();
  reload();
  loadLA();
  loadEN(); 
</script>
<div class="container-fluid">
  <div class="container">
    <h1 id='title_admin' class="text-center langlao" style="margin:30px;">ໜ້າຄວບຄຸມ</h1>
    <div class="row" style="margin-top:-40px;">
      <div class=" col-xl-6 col-12" style="float:right; margin-top:40px; align:center;">
        <form class="" action="#" method="post">
          <div class="row">
            <div class="col-xl-3 col-lg-2 col-md-3 col-12">
              <label id='key_product' class="langlao" for="Storename">ລະຫັດສິນຄ້າ:</label><br>
            </div>
            <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
              <input type="text" name="" value="">
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-2 col-md-3 col-12">
              <label id='st_date' class="langlao" for="Storename">ເລີ່ມວັນທີ:</label><br>
            </div>
            <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
              <input type="text" name="" value="">
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-2 col-md-3 col-12">
              <label id='end_date' class="langlao" for="Storename">ສິ້ນສຸດວັນທີ:</label><br>
            </div>
            <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
              <input type="text" name="" value="">
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-2 col-md-3 col-12">
              <label id='name_product' class="langlao" for="Storename">ຊື່ສິນຄ້າ:</label><br>
            </div>
            <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
              <input type="text" name="" value="">
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-2 col-md-3 col-12">
              <label id='old_name' class="langlao" for="Storename">ຊື່ເດີມ:</label><br>
            </div>
            <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
              <input type="text" name="" value="">
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-2 col-md-3 col-12">
              <label id='score' class="langlao" for="Storename">ຄະແນນ:</label><br>
            </div>
            <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
              <input type="text" name="" value="">
            </div>
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

    <div class="row" style="margin-top:30px;">
      <div class="col-xl-4">
        <form class="lol" action="#" method="post">
          <input type="text" name="" id="searchBar" placeholder="Search" value="" maxlength="25" autocomplete="off" onmousedown="" onblur=""/><input type="submit" id="searchBtn" name="" value="Go!" />
        </form>
      </div>
      <div class="col-xl-8" style="margin-top:10px;">
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
                <li class="page-item langlao"><a class="page-link" href="#">ກັບຄືນ</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item langlao"><a class="page-link" href="#">ຕໍ່ໄປ</a></li>
              </ul>
            </nav>
          </div>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>
