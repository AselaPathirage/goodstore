<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>

    <!-- Basic page needs
	============================================ -->
    <title>Jarabara.lk</title>
    <meta charset="utf-8">
    <meta name="keywords" content="jarabara, business, sales, sri lanka, jarabara.lk" />


    <!-- Mobile specific metas
	============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
	============================================ -->
    <link rel="shortcut icon" href="ico/favicon.png">

    <!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>



    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="{{ url('/css/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ url('/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('/js/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ url('/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ url('/css/themecss/lib.css') }}" rel="stylesheet">
    <link href="{{ url('/js/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">

    <!-- Theme CSS
	============================================ -->
    <link href="{{ url('/css/themecss/so_megamenu.css') }}" rel="stylesheet">
    <link href="{{ url('/css/themecss/so-categories.css') }}" rel="stylesheet">
    <link href="{{ url('/css/themecss/so-listing-tabs.css') }}" rel="stylesheet">
    <link href="{{ url('/css/footer1.css') }}" rel="stylesheet">
    <link href="{{ url('/css/header4.css') }}" rel="stylesheet">
    <link id="color_scheme" href="{{ url('/css/home4.css') }}" rel="stylesheet">
    <link id="color_scheme" href="{{ url('/css/theme.css') }}" rel="stylesheet">
    <link href="{{ url('/css/responsive.css') }}" rel="stylesheet">

</head>

<body class="common-home res layout-home4">

    <div id="wrapper" class="wrapper-full banners-effect-11">

        <!-- Header Container  -->
        <header id="header" class=" variantleft type_4">
            <!-- Header Top -->



            <!-- Main Container  -->
            <div class="main-container container">

                @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                <div class="row">
                    <div id="content" class="col-sm-12">





                        <!-- Filters -->
                        <div class="product-filter filters-panel">
                            <div class="row">
                                <div class="col-md-2 visible-lg">
                                    <div class="view-mode">
                                        <div class="list-view">
                                            <button class="btn btn-default grid " data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th"></i></button>
                                            <button class="btn btn-default list active" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="short-by-show form-inline text-right col-md-7 col-sm-8 col-xs-12">
                                    <div class="form-group short-by">
                                        <label class="control-label" for="input-sort">Sort By:</label>
                                        <select id="input-sort" class="form-control" onchange="location = this.value;">
                                            <option value="" selected="selected">Default</option>
                                            <option value="">Name (A - Z)</option>
                                            <option value="">Name (Z - A)</option>
                                            <option value="">Price (Low &gt; High)</option>
                                            <option value="">Price (High &gt; Low)</option>
                                            <option value="">Rating (Highest)</option>
                                            <option value="">Rating (Lowest)</option>
                                            <option value="">Model (A - Z)</option>
                                            <option value="">Model (Z - A)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-limit">Show:</label>
                                        <select id="input-limit" class="form-control" onchange="location = this.value;">
                                            <option value="" selected="selected">9</option>
                                            <option value="">25</option>
                                            <option value="">50</option>
                                            <option value="">75</option>
                                            <option value="">100</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
                                    <ul class="pagination">
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="">&gt;</a></li>
                                        <li><a href="#">&gt;|</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- //end Filters -->

                        <!--changed listings-->
                        <div class="products-list row list">
                            <table border="1" cellpadding="3">
                                @foreach($properties as $property)
                                <tr>
                                    <td>
                                        <div class="product-layout col-md-3 col-sm-4 col-xs-12 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container lazy second_img ">
                                                        <img data-src="{{asset('storage/propertyimg/'.$property->productimg1)}}" src="{{asset('storage/propertyimg/'.$property->productimg1)}}" alt="Apple Cinema 30&quot;" class="img-responsive" />
                                                        <img data-src="{{asset('storage/propertyimg/'.$property->productimg2)}}" src="{{asset('storage/propertyimg/'.$property->productimg2)}}" alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->

                                                    <!--full quick view block-->
                                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="/property/propertyquickview/{{$property->id}}"> Quickview</a>
                                                    <!--end full quick view block-->
                                                </div>


                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4><a href="/property/propertyquickview/{{$property->id}}">{{$property->title}}&quot;</a></h4>
                                                        <div class="ratings">
                                                            <p>Created at: {{$property->created_at}}</p>
                                                        </div>

                                                        <div class="price">
                                                            <span class="price-new">Rs. {{$property->price}}</span>
                                                            <span class="price-new">{{$property->pricetype}}</span>
                                                            @if ($property->negotiable==true){
                                                            <div class="stock"><span>Negotiable: </span> <span class="label label-percent">Negotiable</span></div>
                                                            }
                                                            @endif

                                                        </div>
                                                        <div class="description item-desc hidden">
                                                           
                                                            <div class="reward"><span>Category: </span> {{$property->category}} </div>
                                                            <div class="model"><span>Type: </span> {{$property->type}} </div>
                                                            <div class="reward"><span>Location: </span> {{$property->location}} </div>
                                                        </div>
                                                    </div>

                                                    <!-- <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add to
                                                Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                    </div> -->
                                                </div><!-- right block -->

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="reward"><span>ClientId: </span> {{$property->userid}} </div>
                                        <div class="reward"><span>Client name: </span> {{$property->name}} </div>
                                        <div class="reward"><span>Client email: </span> {{$property->email}} </div>

                                    </td>
                                    <td>

                                        <a href="propertyapp/{{$property->id}}">Approve</a>
                                    </td>
                                    <td>

                                        <a href="propertydel/{{$property->id}}">Delete</a>
                                    </td>
                                <tr>
                                    @endforeach
                            </table>
                        </div>
                        <!--// End Changed listings-->
                        <!-- Filters -->
                        <div class="product-filter product-filter-bottom filters-panel">
                            <div class="row">
                                <div class="col-md-2 hidden-sm hidden-xs">

                                </div>
                                <div class="short-by-show text-center col-md-7 col-sm-8 col-xs-12">
                                    <div class="form-group" style="margin: 7px 10px">Showing 1 to 9 of 10 (2 Pages)
                                    </div>
                                </div>
                                <div class="box-pagination col-md-3 col-sm-4 text-right">
                                    <ul class="pagination">
                                        <li class="active"><span>1</span></li>
                                        <li><a href="http://localhost/ytc_templates/opencart/so_market/index.html?route=product/category&amp;path=33&amp;page=2">2</a>
                                        </li>
                                        <li><a href="http://localhost/ytc_templates/opencart/so_market/index.html?route=product/category&amp;path=33&amp;page=2">&gt;</a>
                                        </li>
                                        <li><a href="http://localhost/ytc_templates/opencart/so_market/index.html?route=product/category&amp;path=33&amp;page=2">&gt;|</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <!-- //end Filters -->



                    </div>
                </div>
            </div>
            <!-- //Main Container -->
            <!-- Block Spotlight3  -->

            <!-- //Block Spotlight3  -->

            <script type="text/javascript">
                var $typeheader = 'header-home4';
                //-->
            </script>

            <!-- Footer Container -->
            <footer class="footer-container type_footer1">
                <!-- Footer Top Container -->
                <section class="footer-top">
                    <div class="container content">
                        <div class="row">
                            <div class="col-sm-6 col-md-3 box-information">
                                <div class="module clearfix">
                                    <h3 class="modtitle">Overview</h3>
                                    <div class="modcontent">
                                        <ul class="menu">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="about-us.html">Contact Us</a></li>
                                            <li><a href="order-history.html">Terms of Use</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="order-information.html">Privacy Policy & Cookies</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 box-service">
                                <div class="module clearfix">
                                    <h3 class="modtitle">Customer Service</h3>
                                    <div class="modcontent">
                                        <ul class="menu">
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="return.html">Returns</a></li>
                                            <li><a href="sitemap.html">Site Map</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 box-account">
                                <div class="module clearfix">
                                    <h3 class="modtitle">My Account</h3>
                                    <div class="modcontent">
                                        <ul class="menu">
                                            <li><a href="#">Brands</a></li>
                                            <li><a href="gift-voucher.html">Gift Vouchers</a></li>
                                            <li><a href="#">Affiliates</a></li>
                                            <li><a href="#">Specials</a></li>
                                            <li><a href="#" target="_blank">Our Blog</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 collapsed-block ">
                                <div class="module clearfix">
                                    <h3 class="modtitle">Contact Us </h3>
                                    <div class="modcontent">
                                        <ul class="contact-address">
                                            <li><span class="fa fa-map-marker"></span> My Company, 42 avenue des Champs
                                                Elysées 75000 Paris France</li>
                                            <li><span class="fa fa-envelope-o"></span> Email: <a href="#">
                                                    sales@yourcompany.com</a></li>
                                            <li><span class="fa fa-phone">&nbsp;</span> Phone 1: 0123456789 <br>Phone 2:
                                                (123) 4567890</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <!-- Footer Bottom Container -->
                <div class="footer-bottom-block ">
                    <div class=" container">
                        <div class="row">
                            <div class="col-sm-5 copyright-text"> © 2021. All Rights Reserved. </div>
                            <div class="col-sm-7">
                                <div class="block-payment text-right"><img src="image/demo/content/payment.png" alt="payment" title="payment"></div>
                            </div>
                            <!--Back To Top-->
                            <div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>

                        </div>
                    </div>
                </div>
                <!-- /Footer Bottom Container -->


            </footer>


            <!-- //end Footer Container -->

    </div>
    <!-- Social widgets -->
    <section class="social-widgets visible-lg">
        <ul class="items">
            <li class="item item-01 facebook"> <a href="php/facebook.php?account=envato" class="tab-icon"><span class="fa fa-facebook"></span></a>
                <div class="tab-content">
                    <div class="title">
                        <h5>FACEBOOK</h5>
                    </div>
                    <div class="loading">
                        <img src="image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
                    </div>
                </div>
            </li>
            <li class="item item-02 twitter"> <a href="php/twitter.php?account_twitter=envato" class="tab-icon"><span class="fa fa-twitter"></span></a>
                <div class="tab-content">
                    <div class="title">
                        <h5>TWITTER FEEDS</h5>
                    </div>
                    <div class="loading">
                        <img src="image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
                    </div>
                </div>
            </li>
            <li class="item item-03 youtube"> <a href="php/youtubevideo.php?account_video=PY2RLgTmiZY" class="tab-icon"><span class="fa fa-youtube"></span></a>
                <div class="tab-content">
                    <div class="title">
                        <h5>YouTube</h5>
                    </div>
                    <div class="loading"> <img src="image/theme/lazy-loader.gif" class="ajaxloader" alt="loader"></div>
                </div>
            </li>
        </ul>
    </section> <!-- End Social widgets -->


    </div>


    <!-- Include Libs & Plugins
============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{ url('js/jquery-2.2.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/themejs/libs.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/unveil/jquery.unveil.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/countdown/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/datetimepicker/moment.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/modernizr/modernizr-2.6.2.min.js') }}"></script>


    <!-- Theme files
============================================ -->
    <script type="text/javascript" src="{{ url('js/themejs/application.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/themejs/homepage.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/themejs/toppanel.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/themejs/so_megamenu.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/themejs/addtocart.js') }}"></script>
    <script type="text/javascript">
        // Check if Cookie exists
        if ($.cookie('display')) {
            view = $.cookie('display');
        } else {
            view = 'list';
        }
        if (view) display(view);
        //-->
    </script>


</body>

</html>