<?php include 'header.php'; ?>
<?php include 'type.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test store</title>
    <link href="https://rawgithub.com/hayageek/jquery-upload-file/master/css/uploadfile.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>


    <script type="text/javascript">
    var _arrObj=[];
    var _obj={};
    const host='http://nonav.net:4000';
    function getDataLogin(){
      ;
    }
    function loginSubmit(){
      getDataLogin();
    }
      function profileform1(){
        var arr=[];
        arr.push({
          storename:'Mobilephone',
          ownername:'Iphone',
          contactdetails:'Webpost',
          phone:0123456789,
          gps:'vientiane capital',
          description:'New product',
          score:300000,
          otherlink:'Kouifillwer.com',
          website:'www.google.la'
        });
        $("#storename").val(arr[0].storename);
        $("#ownername").val(arr[0].ownername);
        $("#contactdetails").val(arr[0].contactdetails);
        $("#phone").val(arr[0].phone);
        $("#gpslocation").val(arr[0].gps);
        $("#description").val(arr[0].description);
        $("#score").val(arr[0].score);
        $("#otherlink").val(arr[0].otherlink);
        $("#website").val(arr[0].website);
        $('#photoprofile').attr('src',host+arr[0].photoprofile).show();

      }
    function clickprofile(){
      profileform1();
    }
    $( document ).ready(function(){

      profileform1();

      $("#formupload").submit(function(e){
            e.preventDefault();
            $('#photoprofile').hide();
            $('#loading').fadeIn(1000);

            $(this).ajaxSubmit({
              contentType: 'application/json',
              success: function(response){
                c=response;
                _obj.photoprofile=c.data.file;
                $('#loading').fadeOut(1000);
                $('#photoprofile').attr('src',host+c.data.file).show();
              },
              error:function(err){
                console.log(err);
                alert(err);
              }
          });

        return false;
      });
    });




    </script>

    <script>
    function loadMe(){
    	var arr=[];
        arr.push({
        	productname:'laptop1',
            image:'data:image/png;base64,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',
            price:5000,
            soldout:"yes"
        })
        arr.push({
        	productname:'laptop2',
            image:'data:image/jpeg;base64,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',
            price:5000,
            soldout:"yes"
        });
    		var itemx={
        	productname:'laptop3',
            image:'data:image/jpeg;base64,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',
            price:5000,
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

  </head>
  <body>
    <div class="container-fluid">
      <div class="container">
        <div class="col-xl-12">
          <h1 align="center" style="margin-top:30px;">Store</h1>
            <div class="row">
              <div class="col-xl-12 col-12">
                <div class="col-xl-6" style="margin-top:20px; float:left; border:none;">
                  <img class="img-responsive" id='photoprofile' src="images/2.png" alt="" style="width:100%;">
                  <img class='progressOff' id='loading' src='images/Loading_icon.gif' />
                  <form id="formupload" class="uploadImage" enctype="multipart/form-data" action="http://nonav.net:4000/upload_img" method="POST">
                    <input type="file" name="file_up" id="file_up" value="">
                    <input type="submit" name="submit"  value="Submit">
                  </form>
                </div>
                <div class="input_store col-xl-6  col-12" style="float:right; margin-top:30px; align:center;">
                  <form class="" action="#" method="post">
                    <div class="row">
                      <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                        <label for="Storename">Store name:</label><br>
                      </div>
                      <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                        <input type="text" name="" id="storename" value="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                        <label for="ownername">Ownername:</label><br>
                      </div>
                      <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                        <input type="text" name="" id="ownername" value="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                        <label for="contactdetails">contactdetails:</label><br>
                      </div>
                      <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                        <input type="text" name="" id="contactdetails" value="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                        <label for="phone">phone:</label><br>
                      </div>
                      <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                        <input type="text" name="" id="phone" value="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                        <label for="gps">GPS Location:</label><br>
                      </div>
                      <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                        <input type="text" name="" id="gpslocation" value="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                        <label for="description">description:</label><br>
                      </div>
                      <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                        <input type="text" name="" id="description" value="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                        <label for="score">score:</label><br>
                      </div>
                      <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                        <input type="text" name="" id="score" value="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                        <label for="otherlink">other link:</label><br>
                      </div>
                      <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                        <input type="text" name="" id="otherlink" value="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                        <label for="website">Website:</label><br>
                      </div>
                      <div class="col-xl-9 col-lg-10 col-md-9 col-12 input_store">
                        <input type="text" name="" id="website" value="">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-12 ">
              <div class="row">
                <div class="col-xl-12 col-12" style="margin-top:30px; margin-left:40px;">
                  <form class="lol" action="#" method="post">
                    <input type="text" name="" id="searchBar" placeholder="Search" value="" maxlength="25" autocomplete="off" onmousedown="" onblur=""/><input type="submit" id="searchBtn" name="" value="Go!" />
                  </form>
                </div>
              </div>
            </div>
            <!-- end search -->

            <link rel="stylesheet" href="css/style.css">
          	  <div class="container">
          	      <div class="row" id="items">
                  </div>
              </div>

      </div>
    </div>
  </body>
</html>

<?php include 'footer.php'; ?>
