<?php include 'type.php'; ?>
<?php include 'header.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
function adminkeywordform(){
  var arr=[];
    arr.push({
        keyword:'002934',
        startdate:'12.2.2018',
        enddate:'12.2.2019',
        itemname:'Nubia',
        ownername:'Nokia',
        store:'China'
    });

    $("#keyword").val(arr[0].keyword);
    $("#price").val(arr[0].price);
    $("#startdate").val(arr[0].startdate);
    $("#enddate").val(arr[0].enddate);
    $("#itemname").val(arr[0].itemname);
    $("#ownername").val(arr[0].ownername);
    $("#store").val(arr[0].store);

    // alert(html);
  // $( "#adminkeyword" ).append(html);

}
function clickLoad(){
adminkeywordform();
}
$( document ).ready(function() {
    adminkeywordform();
});
</script>
<style media="screen">
  .row {margin-top:20px;}
</style>
<div class="container-fluid">
  <div class="container">
    <h1 class="text-center" style="margin:30px;">Admin search keyword list for ads</h1>
    <div class="row" style="margin-top:-40px;">
      <div class=" col-xl-6 col-12" style="float:right; margin-top:40px; align:center;">
        <form id="adminkeyword" class="" action="#" method="post">
          <div class="row">
            <div class="col-xl-3 col-lg-2 col-md-3 col-12">
              <label for="keyword">Keyword:</label><br>
            </div>
            <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
              <input id="keyword" type="text" name="" value="">
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-2 col-md-3 col-12">
              <label for="startdate">Start date:</label><br>
            </div>
            <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
              <input id="startdate" type="text" name="" value="">
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-2 col-md-3 col-12">
              <label for="enddate">End date:</label><br>
            </div>
            <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
              <input id="enddate" type="text" name="" value="">
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-2 col-md-3 col-12">
              <label for="itemname">Itemname:</label><br>
            </div>
            <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
              <input id="itemname" type="text" name="" value="">
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-2 col-md-3 col-12">
              <label for="owner">owner:</label><br>
            </div>
            <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
              <input id="ownername" type="text" name="" value="">
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-2 col-md-3 col-12">
              <label for="store">Store:</label><br>
            </div>
            <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
              <input id="store" type="text" name="" value="">
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

<?php include 'footer.php'; ?>
