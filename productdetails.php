<?php include 'header.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
    <script src="ckeditor/ckeditor.js"></script>
    <style media="screen">
      .button{
        display: block;
        width: 180px;
        height: 60px;
        position: relative;
        border: 2px solid #e73d3d;
        border-radius: 10px;
      }
      .button .btn-go-to-store{
        display: block;
        position: absolute;
        bottom: 6px;
        width: 100%;
        height: 100%;
        line-height: 54px;
        background-color: #1024d7;
        text-align:center;
        color:#fff;
        box-shadow: 0 6px 0 #34219f;
        border-radius: 8px;
        transition: all 0.01s linear;
      }
      .button:active .btn-go-to-store {
        bottom:0;
        box-shadow: 0 0 0 #f64e30;
      }
    </style>
  </head>
  <body>

    <div class="container-fluid">
      <div class="container"> <br>
        <h2 class="text-center">Product details</h2>
        <div class="row">
          <div class="go-t0-store">
            <a href="index.php" class="button"> <span class="btn-go-to-store">Go to Store</span> </a>
          </div>
          <div class="col-xl-12" style="margin-top:30px;">
            <div class="row">
              <div class="col-xl-9 col-lg-9">
                <div class="col-xl-7 col-lg-7" style="float:left;">
                  <a href="#"> <img src="images/2.png" alt="" style="width:100%;"> </a>
                  <p> <b>Price:	$1,499.00 & FREE Shipping</b></p>
                </div>
                <div class="col-xl-5 col-lg-5" style="float:right;">
                  <span> <p> <b>ASUS ROG STRIX GL502VT-DS74 15.6" FHD Gaming Laptop, NVIDIA GTX970M 6GB VRAM, 16 GB DDR4, 1 TB HDD, 128 GB M.2 SSD</b></p> </span>
                  <span> <p style="color:green;"><b> Available from these sellers</b> <a href="#">these sellers.</a> </p> </span>
                  <span>Style: 1TB+128GB SSD | Nvidia GTX 970M with 6GB VRAM</span>
                  <span></span>
                    <li>ROG Strix GL502 packs the latest 6th gen Intel® processor in a compact and lightweight design, 16GB RAM, 1TB 7200RPM Storage.</li>
                    <li>NVIDIA GeForce GTX 970M graphics with full Microsoft DirectX 12 support gives you efficient, powerful performance for heavy gaming or productive multitasking such as live streaming and video editing.</li>
                    <li>Ultra-portable design that fits snugly in a messenger bag or backpack. Whether you're waiting for your flight, kicking back at a café, or at a LAN tournament.</li>
                    <li>The Hyper Cool Duo-Copper cooling system uses heat pipes and a dual fan system to cool the CPU and GPU independently.</li>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3" style="height:600px; background-color:#34219f;"></div>
            </div>
          </div>
        </div>
        <div class="formeditor" style="margin-top:30px;">
          <div class="row">
            <div class="col-xl-12">
              <div class="col-xl-9 col-lg-9">
                <form class="" action="#" method="post" style="float:left; width:100%;">
                  <h3 class="langlao">ຟອມສະແດງຄວາມຄິດເຫັນຂອງລູກຄ້າ</h3>
                  <textarea name="editor1" id="editor1" rows="10" cols="80">
                  </textarea>
                  <script>
                      CKEDITOR.replace( 'editor1' );
                  </script>
                  <div class="go-t0-store" style="margin-top:30px;margin-bottom:10px;">
                    <a href="" class="button"> <span class="btn-go-to-store langlao">ອັບໂຫລດ</span> </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
