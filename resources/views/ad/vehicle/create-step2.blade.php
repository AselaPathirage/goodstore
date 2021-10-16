<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Basic page needs
	============================================ -->
    <title>Preview</title>
    <meta charset="utf-8" />
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech" />
    <meta name="robots" content="index, follow" />

    <!-- Mobile specific metas
	============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Favicon
	============================================ -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="../../ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="ico/favicon.png" />

    <!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.min.css" />
    <link href="../../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../../js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="../../js/owl-carousel/owl.carousel.css" rel="stylesheet" />
    <link href="../../css/themecss/lib.css" rel="stylesheet" />
    <link href="../../js/jquery-ui/jquery-ui.min.css" rel="stylesheet" />

    <!-- Theme CSS
	============================================ -->
    <link href="../../css/themecss/so_megamenu.css" rel="stylesheet" />
    <link href="../../css/themecss/so-categories.css" rel="stylesheet" />
    <link href="../../css/themecss/so-listing-tabs.css" rel="stylesheet" />
    <link href="../../css/footer1.css" rel="stylesheet">
    <link href="../../css/header1.css" rel="stylesheet">
    <link id="color_scheme" href="../../css/theme.css" rel="stylesheet" />
    <link href="../../css/responsive.css" rel="stylesheet" />




</head>

<body class="res layout-subpage">
    <div id="wrapper" class="wrapper-full ">
        <!-- Main Container  -->
        <div class="main-container container">
            <form action="/advertisement/vehicleprev" method="post">
                @csrf
                <div class="row">
                    <!--Middle Part Start-->
                    <div id="content" class="col-md-12 col-sm-12">

                        <div class="product-view row">
                            <div class="left-content-product col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="content-product-left  col-sm-6 col-xs-12 ">
                                        <div class="large-image  ">
                                            <img itemprop="image" class="product-image-zoom" src="{{asset('storage/temp/'.$vehicle->productimg1)}}" data-zoom-image="{{asset('storage/temp/'.$vehicle->productimg1)}}" alt="Image1" />
                                        </div>

                                        <div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider">
                                            <a data-index="0" class="img thumbnail " data-image="{{asset('storage/temp/'.$vehicle->productimg1)}}" title="Bint Beef">
                                                <img src="{{asset('storage/temp/'.$vehicle->productimg1)}}" title="Bint Beef" alt="Bint Beef" />
                                            </a>
                                            <a data-index="1" class="img thumbnail" data-image="{{asset('storage/temp/'.$vehicle->productimg1)}}" title="Bint Beef">
                                                <img src="{{asset('storage/temp/'.$vehicle->productimg2)}}" title="Bint Beef" alt="Bint Beef" />
                                            </a>
                                            <a data-index="2" class="img thumbnail" data-image="{{asset('storage/temp/'.$vehicle->productimg1)}}" title="Bint Beef">
                                                <img src="{{asset('storage/temp/'.$vehicle->productimg3)}}" title="Bint Beef" alt="Bint Beef" />
                                            </a>
                                            <a data-index="3" class="img thumbnail" data-image="{{asset('storage/temp/'.$vehicle->productimg1)}}" title="Bint Beef">
                                                <img src="{{asset('storage/temp/'.$vehicle->productimg4)}}" title="Bint Beef" alt="Bint Beef" />
                                            </a>
                                            <a data-index="4" class="img thumbnail" data-image="{{asset('storage/temp/'.$vehicle->productimg1)}}" title="Bint Beef">
                                                <img src="{{asset('storage/temp/'.$vehicle->productimg5)}}" title="Bint Beef" alt="Bint Beef" />
                                            </a>
                                        </div>

                                    </div>

                                    <div class="content-product-right col-sm-6 col-xs-12">
                                        <div class="title-product">
                                            <h1>{{$vehicle->title}} </h1>
                                        </div>
                                        <!-- Review ---->
                                        <!-- <div class="box-review form-group">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                </div>
                                            </div>
                                            <a class="reviews_button" href="quickview.php.html" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews </a>
                                        </div> -->

                                        <div class="product-label form-group">
                                            <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                                <span class="price-new" itemprop="price">Rs {{$vehicle->price}} </span>

                                            </div>

                                        </div>

                                        @if ($vehicle->negotiable=='1')
                                        <div class="stock"><span>Negotiable: </span> <span class="status-stock">Negotiable </span></div>

                                        @endif
                                    </div>

                                    <div class="product-box-desc">
                                        <div class="inner-box-desc">
                                            <div class="price-tax"><span>Brand: </span> {{$vehicle->brand}} </div>
                                            <div class="reward"><span>Model: </span> {{$vehicle->model}} </div>
                                            <div class="reward"><span>Location: </span> {{$vehicle->location}} </div>
                                            <div class="model"><span>Model year: </span> {{$vehicle->modelyear}} </div>
                                            @if(!$vehicle->edition==NULL){
                                            <div class="brand"><span>Edition: </span>{{$vehicle->edition}} </div>
                                            }
                                            @endif
                                            <div class="reward"><span>Mileage: </span> {{$vehicle->mileage}}km </div>
                                            <div class="reward"><span>Engine Capacity: </span> {{$vehicle->engcapacity}}CC </div>
                                            <div class="reward"><span>Condition: </span> {{$vehicle->condition}} </div>
                                            <div class="reward"><span>Vehicle Type: </span> {{$vehicle->vehicletype}} </div>

                                            <div class="reward"><span>Body Type: </span> {{$vehicle->bodytype}} </div>

                                            <div class="reward"><span>Transmition: </span> {{$vehicle->transmition}} </div>

                                            <div class="reward"><span>Fuel Type: </span> {{$vehicle->fueltype}} </div>

                                            <div class="reward"><span>Description: </span> {{$vehicle->description}} </div>

                                            <div id="product">
                                                <h4>Contact Options </h4>
                                                <div class="">
                                                    <div class="model"><span>Name: </span> {{$vehicle->name}} </div>
                                                    <div class="reward"><span>Email: </span> {{$vehicle->email}} </div>
                                                    <div class="reward"><span>Tel No: </span> {{$vehicle->phonenumber}}</div>
                                                </div>


                                                <div class="form-group box-info-product">

                                                    <div class="cart">

                                                        <a type="button" href="/advertisement/vehicle" class="btn btn-primary">Edit </a>
                                                        <a type="button" href="/advertisement/category" class="btn btn-primary">Cancel </a>
                                                        <!-- <a type="button" href="/advertisement/vehicle" class="btn btn-primary">Cancel</a> -->
                                                        <button type="submit" class="btn btn-primary">Store</button>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- end box info product -->

                            </div>
                        </div>
                    </div>


                </div>

                <!-- <script type="text/javascript">
                            // Cart add remove functions
                            var cart = {
                                'add': function(product_id, quantity) {
                                    parent.addProductNotice('Product added to Cart', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3><a href="#">Apple Cinema 30"</a> added to <a href="#">shopping cart</a>!</h3>', 'success');
                                }
                            }

                            var wishlist = {
                                'add': function(product_id) {
                                    parent.addProductNotice('Product added to Wishlist', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3>You must <a href="#">login</a>  to save <a href="#">Apple Cinema 30"</a> to your <a href="#">wish list</a>!</h3>', 'success');
                                }
                            }
                            var compare = {
                                'add': function(product_id) {
                                    parent.addProductNotice('Product added to compare', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3>Success: You have added <a href="#">Apple Cinema 30"</a> to your <a href="#">product comparison</a>!</h3>', 'success');
                                }
                            }
                        </script> -->


        </div>


    </div>
    <!--Middle Part End-->
    </form>
    </div>
    <!-- //Main Container -->

    <style type="text/css">
        #wrapper {
            box-shadow: none;
        }

        #wrapper>*:not(.main-container) {
            display: none;
        }

        #content {
            margin: 0
        }

        .container {
            width: 100%;
        }

        .product-info .product-view,
        .left-content-product,
        .box-info-product {
            margin: 0;
        }

        .left-content-product .content-product-right .box-info-product .cart input {
            padding: 12px 16px;
        }

        .left-content-product .content-product-right .box-info-product .add-to-links {
            width: auto;
            float: none;
            margin-top: 0px;
            clear: none;
        }

        .add-to-links ul li {
            margin: 0;
        }
    </style>
    </div>

    <!-- Include Libs & Plugins
	============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="../../js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../../js/themejs/libs.js"></script>
    <script type="text/javascript" src="../../js/unveil/jquery.unveil.js"></script>
    <script type="text/javascript" src="../../js/countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="../../js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
    <script type="text/javascript" src="../../js/datetimepicker/moment.js"></script>
    <script type="text/javascript" src="../../js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="../../js/jquery-ui/jquery-ui.min.js"></script>


    <!-- Theme files
============================================ -->


    <script type="text/javascript" src="../../js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="../../js/themejs/addtocart.js"></script>
    <script type="text/javascript" src="../../js/themejs/application.js"></script>

</body>

</html>