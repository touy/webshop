<?php include 'header.php' ?>
<?php include 'type.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
function adminproadsform(){
  var arr=[];
    arr.push({
        itemname:'Mobilephoe',
        price:'3.000.000',
        score:2000,
        description:'New Mobile',
    });

    $("#itemname").val(arr[0].itemname);
    $("#price").val(arr[0].price);
    $("#score").val(arr[0].score);
    $("#description").val(arr[0].description);
    // alert(html);
  // $( "#adminproform" ).append(html);

}
function clickme(){
adminproadsform();
}
$( document ).ready(function() {
    adminproadsform();
});
</script>

<script>
function loadMe(){
  var arr=[];
    arr.push({
      productname:'laptop1',
        image:'https://img.purch.com/o/aHR0cHM6Ly9pbWcucHVyY2guY29tL3JjLzY3M3g0MzMvYUhSMGNEb3ZMM2QzZHk1c1lYQjBiM0J0WVdjdVkyOXRMMmx0WVdkbGN5OTNjQzlzWVhCMGIzQXRjMnhwWkdWemFHOTNMek14TnpnMk1pNXFjR2M9',
        price:80000,
        soldout:"yes"
    })
    arr.push({
      productname:'laptop2',
        image:'https://static.techspot.com/images2/news/bigimage/2017/09/2017-09-06-image-24.jpg',
        price:10000,
        soldout:"yes"
    });
    var itemx={
      productname:'laptop3',
        image:'https://souqcms.s3.amazonaws.com/spring/images/2017/hp/omen-15-gaming-laptop-core-i7-6700hq-15.6-inch-black/1-omen-15-gaming-laptop-core-i7-6700hq-15.6-inch-black.jpg',
        price:90000,
        soldout:"no"
    };
    arr.push(itemx);
    html="";
    for (i = 0; i < arr.length; i++) {
            item=arr[i];
            html+='<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-sx-6 col-6" style="margin-top:40px;">'
             html+='<div class="row">'
               html+='<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">'
                 html+='<img class="responsive" src="'+item.image+'" alt="" style="width:100%; height:180px; ">'
               html+='</div>'
               html+='<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 text-font">'
                 html+='<span>'+item.productname+'</span> <br>'
                 html+='<span>ລາຄາ:'+item.price+'ລ້ານກີບ</span> <br>'
                 html+='<span>ອອກໃໝ່ລ່າສຸດ</span> <br>'
                 html+='<span>ມີເຄື່ອງພ້ອມສົ່ງ</span> <br>'
               html+='</div>'
             html+='</div>'
           html+='</div>'
    }
    //alert(html);
  $( "#items" ).append(html);

}
function clickLoad(){
loadMe();
}
$( document ).ready(function() {
    loadMe();
});
</script>

<div class="container-fluid">
  <div class="container">
    <h1 class="text-center" style="margin-top:30px;">Admin promotion ads</h1>
    <div class="row">
      <div id="adminproform" class="col-xl-6 offset-xl-3" style=" margin-top:20px;">
        <div class="row">
          <div class="col-xl-3 col-lg-2 col-md-3 col-12">
            <label for="itemname">Itemname:</label><br>
          </div>
          <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
            <input id="itemname" type="text" name="" value="">
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-2 col-md-3 col-12 mt-2">
            <label for="price">Price:</label><br>
          </div>
          <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store mt-2">
            <input id="price" type="text" name="" value="">
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-2 col-md-3 col-12 mt-2">
            <label for="score">Score:</label><br>
          </div>
          <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store mt-2">
            <input id="score" type="text" name="" value="">
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-2 col-md-3 col-12 mt-2">
            <label for="description">Description:</label><br>
          </div>
          <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store mt-2">
            <input id="description" type="text" name="" value="">
          </div>
        </div>
        <div class="row" style="margin-top:30px;">
          <div class="col-xl-4 col-lg-2 col-md-2  col-6">
            <a href="#" class="button_profile2"> <span class="btn-go-to-store langlao">Save</span> </a>
          </div>
          <div class="col-xl-4 col-lg-2 col-md-2  col-6">
            <a href="#" class="button_profile2"> <span class="btn-go-to-store langlao">Cancle</span> </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row" style="margin-top:20px;">
      <div class="col-xl-12">
        <div class="icon_edit">
          <div class="">
            <p class="text-center">
                <a class="" href="#"><i class="text-center fas fa-plus-circle"></i></a>
                <a class="" href="#"><i class="text-center far fa-edit" style=" margin-left:30px;"></i></a>
                <a class="" href="#"><i class="text-center far fa-trash-alt" style=" margin-left:30px;"></i></a>
                <a class="" href="#"><i class="text-center far fa-save" style=" margin-left:30px;"></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xl-12" style="margin-top:10px;">
        <form class="lol" action="#" method="post">
          <input type="text" name="" id="searchBar" placeholder="Search" value="" maxlength="25" autocomplete="off" onmousedown="" onblur=""/><input type="submit" id="searchBtn" name="" value="Go!" />
        </form>
      </div>

      <div id="items" class="row">
        <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-sx-6 col-6" style="margin-top:40px;">
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
      </div> -->

      <div class="col-xl-8 offset-xl-4" style="margin-top:20px;">
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
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
