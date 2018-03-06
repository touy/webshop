
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://rawgithub.com/hayageek/jquery-upload-file/master/css/uploadfile.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/newbootstrap.css">
    <!-- <link rel="stylesheet" href="css/bootstrapnew.css"> -->
    <link rel="stylesheet" href="lightbox/css/lightbox.css">
    <link rel="stylesheet" href="css/styleslide.css">  
    <!-- <script>
        var host='http://nonav.net:6698';
        var get_item_details_url='/get_item_details';
        test();
        function test(){
            data={
                username:'',
                logintoken:'',
                logintime:'',
                loginip:'',
                data:{
                    item:{itemid:'NO ID',itemname:'',description:'',price:'',qtty:0},
                    user:{userid:''}
                },
            }
            $.post(host+get_item_details_url,data, function(client, status){

                html="<div>"+client.data.item.itemid+"</div>";
                html="<div>"+client.data.item.itemname+"</div>";
                html+="<div>"+client.data.item.price+"</div>";
                alert(html);
            });
        }
        function ajaxLoadItemDetails(path,id){
            data={
                username:'',
                logintoken:'',
                logintime:'',
                loginip:'',
                data:{
                    item:{itemid:id,itemname:'',description:'',price:'',qtty:0},
                    user:{userid:''}
                },
            }
            $.post("http://nonav.net:6698/get_item_details",data, function(client, status){

                html="<div>"+client.data.item.itemname+"</div>";
                html+="<div>"+client.data.item.price+"</div>";
                $(path).append(html);
            });
        }

        function loadItemDetails(id){
            elementPath="#lightboxOverlay";
            window.setTimeout(function(){
            if($(elementPath).length){
                ajaxLoadItemDetails(elementPath,id);
            }else{
                loadItemDetaisl(id);
            }
        },1000);
        }
    </script>   -->
</head>
<style> 
        @media (min-width: 1200px) { .refrigerator{ height:300px !important; }}
        @media (min-width: 992px) and (max-width: 1199px) {
        .refrigerator{ height:260px !important; } }
        @media (min-width: 768px) and (max-width: 991px) {
        .refrigerator{ height:340px !important;} }    
        @media (max-width: 767px) {.refrigerator{ height:300px !important; } }

        @media (min-width: 1200px) { .TV{ height:240px!important; }}
        @media (min-width: 992px) and (max-width: 1199px) {
        .TV{ height:130px !important; } }
        @media (min-width: 768px) and (max-width: 991px) {
        .TV{ height:130px !important;} }

        .photo ,img{height:100%; width:100%;}
    /* .ferniture{ height:120px;} */
         /* @media (min-width: 992px) and (max-width: 1199px) {
        .TV{ height:160 !important; } } */
        @media (min-width: 1200px) { .ferniture{ height:290px !important; }}
        @media (min-width: 992px) and (max-width: 1199px) {
        .ferniture{ height:260px !important; } }
        @media (min-width: 768px) and (max-width: 991px) {
        .ferniture{ height:160px !important;} }   
        
        
</style>

<body>

<div class="container-fluid pb-5 hidden-xs" style="background-color:#e1dfdf;">
    <div class="container hidden-xs">
        <div class="slide-image1">
            <div class="row">
                <div class="col-md-9 hidden-xs mt-5 mb-5">
                    <h3>
                        Carousel Product Cart Slider</h3>
                </div>
                <div class="col-md-3">
                    <!-- Controls -->
                    <div class="controls float-right hidden-xs mt-5">
                        <a href="#carousel-example" data-slide="prev"><button class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-chevron-circle-left"></i></button></a>
                        <a href="#carousel-example" data-slide="next"><button class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-chevron-circle-right"></i></button></a>
                    </div>
                </div>
            </div>
            <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                                        <div class="photo pt-3 TV">
                                            <a href="../Webpost/images/t1.png" data-lightbox="image-2" data-title="My caption"><img src="../Webpost/images/t1.png" class="img-responsive" alt="a" /></a>
                                            
                                        </div>
                                        <div class="info">
                                                 <div class="row">
                                                    <div class="price col-xl-6 col-lg-6 col-md-12 mt-4">
                                                        <h5>
                                                            Sample Product</h5>
                                                        <h5 class="price-text-color mt-3 mb-3">
                                                            333.333 kip</h5>
                                                    </div>
                                                    <div class="rating col-xl-6 col-lg-6 col-md-12 mt-4 d-md-none d-lg-block">
                                                        <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="separator clear-left d-md-none d-lg-block">
                                                    <p class="btn-add mt-3">
                                                    <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                                    
                                                    <p class="btn-details mt-3">
                                                    <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                                                </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                                        <div class="photo pt-3 TV">
                                            <a href="../Webpost/images/t2.png" data-lightbox="image-2" data-title="My caption"><img src="../Webpost/images/t2.png" class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="info">
                                                 <div class="row">
                                                    <div class="price col-xl-6 col-lg-6 col-md-12 mt-4">
                                                        <h5>
                                                            Sample Product</h5>
                                                        <h5 class="price-text-color mt-3 mb-3">
                                                            333.333 kip</h5>
                                                    </div>
                                                    <div class="rating col-xl-6 col-lg-6 col-md-12 mt-4 d-md-none d-lg-block">
                                                        <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="separator clear-left d-md-none d-lg-block">
                                                    <p class="btn-add mt-3">
                                                    <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                                    
                                                    <p class="btn-details mt-3">
                                                    <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                                                </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                                        <div class="photo pt-3 TV">
                                            <a href="../Webpost/images/t3.png" data-lightbox="image-2" data-title="My caption"><img src="../Webpost/images/t3.png" class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="info">
                                                 <div class="row">
                                                    <div class="price col-xl-6 col-lg-6 col-md-12 mt-4">
                                                        <h5>
                                                            Sample Product</h5>
                                                        <h5 class="price-text-color mt-3 mb-3">
                                                            333.333 kip</h5>
                                                    </div>
                                                    <div class="rating col-xl-6 col-lg-6 col-md-12 mt-4 d-md-none d-lg-block">
                                                        <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="separator clear-left d-md-none d-lg-block">
                                                    <p class="btn-add mt-3">
                                                    <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                                    
                                                    <p class="btn-details mt-3">
                                                    <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                                                </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                                        <div class="photo pt-3 TV">
                                            <a href="../Webpost/images/t4.jpg" data-lightbox="image-2" data-title="My caption"><img src="../Webpost/images/t4.jpg" class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="info">
                                                 <div class="row">
                                                    <div class="price col-xl-6 col-lg-6 col-md-12 mt-4">
                                                        <h5>
                                                            Sample Product</h5>
                                                        <h5 class="price-text-color mt-3 mb-3">
                                                            333.333 kip</h5>
                                                    </div>
                                                    <div class="rating col-xl-6 col-lg-6 col-md-12 mt-4 d-md-none d-lg-block">
                                                        <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="separator clear-left d-md-none d-lg-block">
                                                    <p class="btn-add mt-3">
                                                    <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                                    
                                                    <p class="btn-details mt-3">
                                                    <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                                                </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                                        <div class="photo pt-3 TV">
                                            <a href="../Webpost/images/t5.png" data-lightbox="image-2" data-title="My caption"><img src="../Webpost/images/t5.png" class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="info">
                                                 <div class="row">
                                                    <div class="price col-xl-6 col-lg-6 col-md-12 mt-4">
                                                        <h5>
                                                            Sample Product</h5>
                                                        <h5 class="price-text-color mt-3 mb-3">
                                                            333.333 kip</h5>
                                                    </div>
                                                    <div class="rating col-xl-6 col-lg-6 col-md-12 mt-4 d-md-none d-lg-block">
                                                        <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="separator clear-left d-md-none d-lg-block">
                                                    <p class="btn-add mt-3">
                                                    <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                                    
                                                    <p class="btn-details mt-3">
                                                    <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                                                </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                                        <div class="photo pt-3 TV">
                                            <a href="../Webpost/images/t6.png" data-lightbox="image-2" data-title="My caption"><img src="../Webpost/images/t6.png" class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="info">
                                                 <div class="row">
                                                    <div class="price col-xl-6 col-lg-6 col-md-12 mt-4">
                                                        <h5>
                                                            Sample Product</h5>
                                                        <h5 class="price-text-color mt-3 mb-3">
                                                            333.333 kip</h5>
                                                    </div>
                                                    <div class="rating col-xl-6 col-lg-6 col-md-12 mt-4 d-md-none d-lg-block">
                                                        <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="separator clear-left d-md-none d-lg-block">
                                                    <p class="btn-add mt-3">
                                                    <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                                    
                                                    <p class="btn-details mt-3">
                                                    <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                                                </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                                        <div class="photo pt-3 TV">
                                            <a href="../Webpost/images/t7.png" data-lightbox="image-2" data-title="My caption"><img src="../Webpost/images/t7.png" class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="info">
                                                 <div class="row">
                                                    <div class="price col-xl-6 col-lg-6 col-md-12 mt-4">
                                                        <h5>
                                                            Sample Product</h5>
                                                        <h5 class="price-text-color mt-3 mb-3">
                                                            333.333 kip</h5>
                                                    </div>
                                                    <div class="rating col-xl-6 col-lg-6 col-md-12 mt-4 d-md-none d-lg-block">
                                                        <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="separator clear-left d-md-none d-lg-block">
                                                    <p class="btn-add mt-3">
                                                    <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                                    
                                                    <p class="btn-details mt-3">
                                                    <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                                                </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                                        <div class="photo pt-3 TV">
                                            <a href="../Webpost/images/t8.jpg" data-lightbox="image-2" data-title="My caption"><img src="../Webpost/images/t8.jpg" class="img-responsive" alt="a" /></a>
                                        
                                        </div>
                                        <div class="info">
                                                 <div class="row">
                                                    <div class="price col-xl-6 col-lg-6 col-md-12 mt-4">
                                                        <h5>
                                                            Sample Product</h5>
                                                        <h5 class="price-text-color mt-3 mb-3">
                                                            333.333 kip</h5>
                                                    </div>
                                                    <div class="rating col-xl-6 col-lg-6 col-md-12 mt-4 d-md-none d-lg-block">
                                                        <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                        </i><i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="separator clear-left d-md-none d-lg-block">
                                                    <p class="btn-add mt-3">
                                                    <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                                    
                                                    <p class="btn-details mt-3">
                                                    <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                                                </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mr-0 pd-0 pb-5 hidden-xs" style="background-color:rgba(48, 41, 41, 0.062);">
    <div class="container">
        <div class="slide-image-big mt-4">
            <div class="row">
                <div class="col-md-9 hidden-xs mt-5 mb-5">
                    <h3>
                        Carousel Product Cart Slider</h3>
                </div>
                <div class="col-md-3">
                    <!-- Controls -->
                    <div class="controls float-right hidden-xs mt-5 mb-5">
                        <a href="#carousel-example-generic" data-slide="prev"><button class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-chevron-circle-left"></i></button></a>
                        <a href="#carousel-example-generic" data-slide="next"><button class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-chevron-circle-right"></i></button></a>
                    </div>
                    </div>
                </div>
            </div>
            <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0 pt-3" style="background-color:#eaeaea;">
                                        <div class="photo ferniture">
                                            <a href="../Webpost/images/b1.jpg" data-lightbox="image-1" data-title="My caption"><img src="../Webpost/images/b1.jpg" class="img-responsive" alt="a" /> </a> 
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-xl-6 col-lg-6 col-md-12 col-12 mt-3">
                                                    <h5>
                                                        Sample Product22</h5>
                                                    <h5 class="price-text-color mt-3 mb-3">
                                                        333.333 kip</h5>
                                                </div>
                                                <div class="rating col-xl-6 col-lg-6 col-md-12 col-12 mt-3 ">
                                                    <i class="price-text-color fa fa-star mr-0"></i><i class="price-text-color fa fa-star mr-0">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                                <p class="btn-add mt-3">
                                                <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                                
                                                <p class="btn-details mt-3">
                                                    <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0 pt-3" style="background-color:#eaeaea;">
                                    <div class="photo ferniture">
                                        <a href="../Webpost/images/b2.jpg" data-lightbox="image-1" data-title="My sss caption">                                        
                                        <img src="../Webpost/images/b2.jpg" class="img-responsive" alt="a" onClick='loadItemDetails("abc")' /> </a>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-xl-6 col-lg-6 col-md-12 col-12 mt-3">
                                                <h5>
                                                    Sample Product22</h5>
                                                <h5 class="price-text-color mt-3 mb-3">
                                                    333.333 kip</h5>
                                            </div>
                                            <div class="rating col-xl-6 col-lg-6 col-md-12 col-12 mt-3 ">
                                                <i class="price-text-color fa fa-star mr-0"></i><i class="price-text-color fa fa-star mr-0">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add mt-3">
                                            <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                            
                                            <p class="btn-details mt-3">
                                                <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0 pt-3" style="background-color:#eaeaea;">
                                    <div class="photo ferniture">
                                        <a href="../Webpost/images/b3.jpg" data-lightbox="image-1" data-title="My caption"><img src="../Webpost/images/b3.jpg" class="img-responsive" alt="a" /> </a>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-xl-6 col-lg-6 col-md-12 col-12 mt-3">
                                                <h5>
                                                    Sample Product22</h5>
                                                <h5 class="price-text-color mt-3 mb-3">
                                                    333.333 kip</h5>
                                            </div>
                                            <div class="rating col-xl-6 col-lg-6 col-md-12 col-12 mt-3 ">
                                                <i class="price-text-color fa fa-star mr-0"></i><i class="price-text-color fa fa-star mr-0">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add mt-3">
                                            <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                            
                                            <p class="btn-details mt-3">
                                                <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0 pt-3" style="background-color:#eaeaea;">
                                    <div class="photo ferniture">
                                        <a href="../Webpost/images/b4.jpg" data-lightbox="image-1" data-title="My caption"><img src="../Webpost/images/b4.jpg" class="img-responsive" alt="a" /> </a>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-xl-6 col-lg-6 col-md-12 col-12 mt-3">
                                                <h5>
                                                    Sample Product22</h5>
                                                <h5 class="price-text-color mt-3 mb-3">
                                                    333.333 kip</h5>
                                            </div>
                                            <div class="rating col-xl-6 col-lg-6 col-md-12 col-12 mt-3 ">
                                                <i class="price-text-color fa fa-star mr-0"></i><i class="price-text-color fa fa-star mr-0">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add mt-3">
                                            <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                            
                                            <p class="btn-details mt-3">
                                                <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0 pt-3" style="background-color:#eaeaea;">
                                    <div class="photo ferniture">
                                        <a href="../Webpost/images/b3.jpg" data-lightbox="image-1" data-title="My caption"><img src="../Webpost/images/b3.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-xl-6 col-lg-6 col-md-12 col-12 mt-3">
                                                <h5>
                                                    Sample Product22</h5>
                                                <h5 class="price-text-color mt-3 mb-3">
                                                    333.333 kip</h5>
                                            </div>
                                            <div class="rating col-xl-6 col-lg-6 col-md-12 col-12 mt-3 ">
                                                <i class="price-text-color fa fa-star mr-0"></i><i class="price-text-color fa fa-star mr-0">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add mt-3">
                                            <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                            
                                            <p class="btn-details mt-3">
                                                <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0 pt-3" style="background-color:#eaeaea;">
                                    <div class="photo ferniture">
                                        <a href="../Webpost/images/b6.jpg" data-lightbox="image-1" data-title="My caption"><img src="../Webpost/images/b6.jpg" class="img-responsive" alt="a" /> </a>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-xl-6 col-lg-6 col-md-12 col-12 mt-3">
                                                <h5>
                                                    Sample Product22</h5>
                                                <h5 class="price-text-color mt-3 mb-3">
                                                    333.333 kip</h5>
                                            </div>
                                            <div class="rating col-xl-6 col-lg-6 col-md-12 col-12 mt-3 ">
                                                <i class="price-text-color fa fa-star mr-0"></i><i class="price-text-color fa fa-star mr-0">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add mt-3">
                                            <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                            
                                            <p class="btn-details mt-3">
                                                <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                <div class="photo pt-3 refrigerator">
                    <a href="../Webpost/images/r1.jpg" data-lightbox="image-3" data-title="My caption"><img src="../Webpost/images/r1.jpg" class="img-responsive" alt="a" /></a>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="price col-xl-6 col-lg-6 col-md-6 mt-4">
                            <h5>Sample Product</h5>
                                <h5 class="price-text-color mt-3 mb-3">333.333 kip</h5>
                        </div>
                        <div class="rating  col-xl-6 col-lg-6 col-md-6  mt-4">
                            <i class="price-text-comor fa fa-star"></i><i class="price-text-color fa fa-star">
                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                            </i><i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="separator clear-left">
                        <p class="btn-add mt-3">
                            <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>  
                            <p class="btn-details mt-3">
                            <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                <div class="photo pt-3 refrigerator">
                    <a href="../Webpost/images/r2.jpg" data-lightbox="image-3" data-title="My caption"><img src="../Webpost/images/r2.jpg" class="img-responsive" alt="a" /></a>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="price col-xl-6 col-lg-6 col-md-6 mt-4">
                            <h5>Sample Product</h5>
                                <h5 class="price-text-color mt-3 mb-3">333.333 kip</h5>
                        </div>
                        <div class="rating  col-xl-6 col-lg-6 col-md-6  mt-4">
                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                            </i><i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="separator clear-left">
                        <p class="btn-add mt-3">
                            <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>  
                            <p class="btn-details mt-3">
                            <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                <div class="photo pt-3 refrigerator">
                    <a href="../Webpost/images/r3.jpg" data-lightbox="image-3" data-title="My caption"><img src="../Webpost/images/r3.jpg" class="img-responsive" alt="a" /></a>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="price col-xl-6 col-lg-6 col-md-6 mt-4">
                            <h5>Sample Product</h5>
                                <h5 class="price-text-color mt-3 mb-3">333.333 kip</h5>
                        </div>
                        <div class="rating  col-xl-6 col-lg-6 col-md-6  mt-4">
                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                            </i><i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="separator clear-left">
                        <p class="btn-add mt-3">
                            <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>  
                            <p class="btn-details mt-3">
                            <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                <div class="photo pt-3 refrigerator">
                    <a href="../Webpost/images/r4.jpg" data-lightbox="image-3" data-title="My caption"><img src="../Webpost/images/r4.jpg" class="img-responsive" alt="a" /></a>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="price col-xl-6 col-lg-6 col-md-6 mt-4">
                            <h5>Sample Product</h5>
                                <h5 class="price-text-color mt-3 mb-3">333.333 kip</h5>
                        </div>
                        <div class="rating  col-xl-6 col-lg-6 col-md-6  mt-4">
                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                            </i><i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="separator clear-left">
                        <p class="btn-add mt-3">
                            <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-shopping-cart"></i> Add</a></p>  
                            <p class="btn-details mt-3">
                            <a href="#" class="btn backgroun-icon-shopping border-left-0 border-right-0 border-top-0"><i class="fas fa-list-ul"></i> Detail</a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<script src="js/slideimages.js"></script>
<script src="js/bootstrapslide.js"></script>
<script src="lightbox/js/lightbox.min.js"></script>
</html>