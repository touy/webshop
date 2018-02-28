
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/newbootstrap.css">
    <!-- <link rel="stylesheet" href="css/bootstrapnew.css"> -->
    <link rel="stylesheet" href="css/styleslide.css">    
    <style media="screen">
            .font-size-icon{font-size: 13pt; color:white;}
            .backgroun-icon-shopping{background-color:#34219f; color:white;}
            .backgroun-icon-shopping:hover{background-color:#fb3c00; border:3px solid; border-color:#34219f; border-left:none; border-right:none; border-top:none;}
            .btn-add a:hover{color:#ffffff; font-size:13pt; transition:0.2s;}
            .btn-details a:hover{color:#ffffff; font-size:13pt; transition:0.2s;}
            .button{ display: block; width: 128px; height: 40px; position: relative; border: 2px solid #e73d3d; border-radius: 10px;}
            .button .btn-go-to-store{ display: block; position: absolute; bottom: 6px; width: 100%;
            height: 100%;
            line-height: 40px;
            background-color: #1024d7;
            text-align:center;
            color:#fff;
            box-shadow: 0 6px 0 #34219f;
            border-radius: 8px;
            transition: all 0.01s linear;
            }
            .button:active .btn-go-to-store{
            bottom:0;
            box-shadow: 0 0 0 #f64e30;
            }
    </style>
</head>
<body>
<div class="container">
    <div class="slide-image1">
        <div class="row">
            <div class="col-md-9 hidden-xs mt-5 mb-5">
                <h3>
                    Carousel Product Cart Slider</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls float-right hidden-xs mt-5">
                    <a href="#carousel-example" data-slide="prev"><button class="btn backgroun-icon-shopping"><i class="fas fa-chevron-circle-left"></i></button></a>
                    <a href="#carousel-example" data-slide="next"><button class="btn backgroun-icon-shopping"><i class="fas fa-chevron-circle-right"></i></button></a>
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                                    <div class="photo pt-3">
                                        <img src="images/2.png" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                            <div class="row">
                                                <div class="price col-xl-6 col-lg-6 col-md-6 mt-4">
                                                    <h5>
                                                        Sample Product</h5>
                                                    <h5 class="price-text-color mt-3 mb-3">
                                                        $199.99</h5>
                                                </div>
                                                <div class="rating  col-xl-6 col-lg-6 col-md-6  mt-4">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                        <p class="btn-add mt-3">
                                        <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                          
                                        <p class="btn-details mt-3">
                                            <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-list-ul"></i> Detail</a></p>
                                    </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                                    <div class="photo pt-3">
                                        <img src="images/2.png" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                            <div class="row">
                                                <div class="price col-xl-6 col-lg-6 col-md-6 mt-4">
                                                    <h5>
                                                        Sample Product</h5>
                                                    <h5 class="price-text-color mt-3 mb-3">
                                                        $199.99</h5>
                                                </div>
                                                <div class="rating  col-xl-6 col-lg-6 col-md-6  mt-4">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                        <p class="btn-add mt-3">
                                        <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                          
                                        <p class="btn-details mt-3">
                                            <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-list-ul"></i> Detail</a></p>
                                    </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                                    <div class="photo pt-3">
                                        <img src="images/2.png" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                            <div class="row">
                                                <div class="price col-xl-6 col-lg-6 col-md-6 mt-4">
                                                    <h5>
                                                        Sample Product</h5>
                                                    <h5 class="price-text-color mt-3 mb-3">
                                                        $199.99</h5>
                                                </div>
                                                <div class="rating  col-xl-6 col-lg-6 col-md-6  mt-4">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                        <p class="btn-add mt-3">
                                        <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                          
                                        <p class="btn-details mt-3">
                                            <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-list-ul"></i> Detail</a></p>
                                    </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                                    <div class="photo pt-3">
                                        <img src="images/2.png" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                            <div class="row">
                                                <div class="price col-xl-6 col-lg-6 col-md-6 mt-4">
                                                    <h5>
                                                        Sample Product</h5>
                                                    <h5 class="price-text-color mt-3 mb-3">
                                                        $199.99</h5>
                                                </div>
                                                <div class="rating  col-xl-6 col-lg-6 col-md-6  mt-4">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                        <p class="btn-add mt-3">
                                        <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                          
                                        <p class="btn-details mt-3">
                                            <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-list-ul"></i> Detail</a></p>
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
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                                    <div class="photo pt-3">
                                        <img src="images/2.png" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                            <div class="row">
                                                <div class="price col-xl-6 col-lg-6 col-md-6 mt-4">
                                                    <h5>
                                                        Sample Product</h5>
                                                    <h5 class="price-text-color mt-3 mb-3">
                                                        $199.99</h5>
                                                </div>
                                                <div class="rating  col-xl-6 col-lg-6 col-md-6  mt-4">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                        <p class="btn-add mt-3">
                                        <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                          
                                        <p class="btn-details mt-3">
                                            <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-list-ul"></i> Detail</a></p>
                                    </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                                    <div class="photo pt-3">
                                        <img src="images/2.png" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                            <div class="row">
                                                <div class="price col-xl-6 col-lg-6 col-md-6 mt-4">
                                                    <h5>
                                                        Sample Product</h5>
                                                    <h5 class="price-text-color mt-3 mb-3">
                                                        $199.99</h5>
                                                </div>
                                                <div class="rating  col-xl-6 col-lg-6 col-md-6  mt-4">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                        <p class="btn-add mt-3">
                                        <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                          
                                        <p class="btn-details mt-3">
                                            <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-list-ul"></i> Detail</a></p>
                                    </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                                    <div class="photo pt-3">
                                        <img src="images/2.png" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                            <div class="row">
                                                <div class="price col-xl-6 col-lg-6 col-md-6 mt-4">
                                                    <h5>
                                                        Sample Product</h5>
                                                    <h5 class="price-text-color mt-3 mb-3">
                                                        $199.99</h5>
                                                </div>
                                                <div class="rating  col-xl-6 col-lg-6 col-md-6  mt-4">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                        <p class="btn-add mt-3">
                                        <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                          
                                        <p class="btn-details mt-3">
                                            <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-list-ul"></i> Detail</a></p>
                                    </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0" style="background-color:#eaeaea;">
                                    <div class="photo pt-3">
                                        <img src="images/2.png" class="img-responsive" alt="a"/>
                                    </div>
                                    <div class="info">
                                            <div class="row">
                                                <div class="price col-xl-6 col-lg-6 col-md-6 mt-4">
                                                    <h5>
                                                        Sample Product</h5>
                                                    <h5 class="price-text-color mt-3 mb-3">
                                                        $199.99</h5>
                                                </div>
                                                <div class="rating  col-xl-6 col-lg-6 col-md-6  mt-4">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                        <p class="btn-add mt-3">
                                        <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                          
                                        <p class="btn-details mt-3">
                                            <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-list-ul"></i> Detail</a></p>
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
    <div class="slide-image-big mt-3">
        <div class="row">
            <div class="col-md-9 hidden-xs mb-5">
                <h3>
                    Carousel Product Cart Slider</h3>
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls float-right hidden-xs mt-5 mb-5">
                    <a href="#carousel-example-generic" data-slide="prev"><button class="btn backgroun-icon-shopping"><i class="fas fa-chevron-circle-left"></i></button></a>
                    <a href="#carousel-example-generic" data-slide="next"><button class="btn backgroun-icon-shopping"><i class="fas fa-chevron-circle-right"></i></button></a>
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
                                <div class="photo">
                                    <img src="images/2.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xl-6 col-lg-6 col-md-12 col-12 mt-3">
                                            <h5>
                                                Sample Product22</h5>
                                            <h5 class="price-text-color mt-3 mb-3">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating col-xl-6 col-lg-6 col-md-12 col-12 mt-3 ">
                                            <i class="price-text-color fa fa-star mr-0"></i><i class="price-text-color fa fa-star mr-0">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add mt-3">
                                        <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                          
                                        <p class="btn-details mt-3">
                                            <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-list-ul"></i> Detail</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0 pt-3" style="background-color:#eaeaea;">
                                <div class="photo">
                                    <img src="images/2.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xl-6 col-lg-6 col-md-12 col-12 mt-3">
                                            <h5>
                                                Sample Product22</h5>
                                            <h5 class="price-text-color mt-3 mb-3">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating col-xl-6 col-lg-6 col-md-12 col-12 mt-3 ">
                                            <i class="price-text-color fa fa-star mr-0"></i><i class="price-text-color fa fa-star mr-0">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add mt-3">
                                        <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                          
                                        <p class="btn-details mt-3">
                                            <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-list-ul"></i> Detail</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0 pt-3" style="background-color:#eaeaea;">
                                <div class="photo">
                                    <img src="images/2.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xl-6 col-lg-6 col-md-12 col-12 mt-3">
                                            <h5>
                                                Sample Product22</h5>
                                            <h5 class="price-text-color mt-3 mb-3">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating col-xl-6 col-lg-6 col-md-12 col-12 mt-3 ">
                                            <i class="price-text-color fa fa-star mr-0"></i><i class="price-text-color fa fa-star mr-0">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add mt-3">
                                        <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                          
                                        <p class="btn-details mt-3">
                                            <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-list-ul"></i> Detail</a></p>
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
                                <div class="photo">
                                    <img src="images/2.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xl-6 col-lg-6 col-md-12 col-12 mt-3">
                                            <h5>
                                                Sample Product22</h5>
                                            <h5 class="price-text-color mt-3 mb-3">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating col-xl-6 col-lg-6 col-md-12 col-12 mt-3 ">
                                            <i class="price-text-color fa fa-star mr-0"></i><i class="price-text-color fa fa-star mr-0">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add mt-3">
                                        <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                          
                                        <p class="btn-details mt-3">
                                            <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-list-ul"></i> Detail</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0 pt-3" style="background-color:#eaeaea;">
                                <div class="photo">
                                    <img src="images/2.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xl-6 col-lg-6 col-md-12 col-12 mt-3">
                                            <h5>
                                                Sample Product22</h5>
                                            <h5 class="price-text-color mt-3 mb-3">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating col-xl-6 col-lg-6 col-md-12 col-12 mt-3 ">
                                            <i class="price-text-color fa fa-star mr-0"></i><i class="price-text-color fa fa-star mr-0">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add mt-3">
                                        <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                          
                                        <p class="btn-details mt-3">
                                            <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-list-ul"></i> Detail</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="col-item border-top-0 border-left-0 border-right-0 border-bottom-0 pt-3" style="background-color:#eaeaea;">
                                <div class="photo">
                                    <img src="images/2.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-xl-6 col-lg-6 col-md-12 col-12 mt-3">
                                            <h5>
                                                Sample Product22</h5>
                                            <h5 class="price-text-color mt-3 mb-3">
                                                $199.99</h5>
                                        </div>
                                        <div class="rating col-xl-6 col-lg-6 col-md-12 col-12 mt-3 ">
                                            <i class="price-text-color fa fa-star mr-0"></i><i class="price-text-color fa fa-star mr-0">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add mt-3">
                                        <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-shopping-cart"></i> Add</a></p>
                                          
                                        <p class="btn-details mt-3">
                                            <a href="#" class="hidden-sm btn backgroun-icon-shopping"><i class="fas fa-list-ul"></i> Detail</a></p>
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
</body>
<script src="js/slideimages.js"></script>
<script src="js/bootstrapslide.js"></script>
</html>