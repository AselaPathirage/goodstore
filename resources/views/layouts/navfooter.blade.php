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


            <!-- Header Bottom -->
            <div class="header-bottom ">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="navbar-logo col-md-3 col-sm-4 col-xs-12">
                            <a href="index.html"><img src="{{asset('image/demo/logos/jarabara.png')}}" title="Your Store" alt="Your Store" width="150px" /></a>
                        </div>
                        <!-- //end Logo -->


                        <!-- Search -->
                        <div class="col-md-6 col-xs-5 search-pro collapsed-block">
                            <h5 class="tabBlockTitle visible-xs">Search <a class="expander " href="#sosearchpro"><i class="fa fa-angle-down"></i></a></h5>
                            <div id="sosearchpro" class="col-xs-12 search-pro tabBlock">
                                <form method="GET" action="index.html">
                                    <div id="search0" class="search input-group">
                                        <div class="select_category filter_type icon-select">
                                            <select class="no-border" name="category_id" style="width:100%;">
                                                <option value="0">All Categories</option>
                                                <option value="78">Vehicle </option>
                                                <option value="77">Property</option>
                                                <option value="82">Market Place</option>
                                                <option value="80">Jobs</option>
                                                <option value="81">Other</option>
                                            </select>
                                        </div>
                                        <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
                                        <span class="input-group-btn">
                                            <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                    <input type="hidden" name="route" value="product/search" />
                                </form>
                            </div>
                        </div>

                        <!-- //end Search -->
                        <div class="col-md-3 col-xs-7 navreg ">

                            @guest
                            <a href="/login">
                                <button type="button" class="btn btn-primary " style="background-color: rgb(2, 127, 185);">Login</button>
                            </a>
                            @if (Route::has('register'))
                            <a href="/register"><button type="button" class="btn btn-primary " style="background-color:Red; ">Register</button>
                            </a>
                            @endif
                            @else

                            <a class="dropdown-item" href="{{ route('logout') }}">
                                <button type="button" class="btn btn-primary " style="background-color:Red; ">Logout</button>
                            </a>

                            @endguest
                        </div>



                    </div>
                </div>

            </div>
            <!-- Header Bottom -->
            <div class="header-bottom">
                <div class="container ">
                    <div class="row ">



                        <!-- Main menu -->
                        <div class="megamenu-hori col-md-9 col-sm-6 col-6 ">
                            <div class="responsive so-megamenu ">
                                <nav class="navbar-default">
                                    <div class=" container-megamenu  horizontal">
                                        <div class="navbar-header">
                                            <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            Category
                                        </div>

                                        <div class="megamenu-wrapper">
                                            <span id="remove-megamenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container justify-content-center">
                                                    <ul class="megamenu " data-transition="slide" data-animationtime="250">

                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="/vehicle" class="clearfix">
                                                                <strong>Vehicle</strong>
                                                                <!-- <img class="label-hot"
																	src="image/theme/icons/hot-icon.png"
																	alt="icon items"> -->
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style=" width:30%;right: auto;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <div class="column">
                                                                                <!-- <a href="#" class="title-submenu">Listing
                                                                                    pages</a> -->
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="category.html">Car </a></li>
                                                                                        <li><a href="category-v2.html">Suv</a></li>
                                                                                        <li><a href="category-v3.html">Van</a></li>
                                                                                        <li><a href="category-v3.html">Bus</a></li>
                                                                                        <li><a href="category-v3.html">Truck</a></li>
                                                                                        <li><a href="category-v3.html">Motorbike</a></li>
                                                                                        <li><a href="category-v3.html">Three Wheeler</a></li>
                                                                                    </ul>

                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="/property" class="clearfix">
                                                                <strong>Property</strong>
                                                                <!-- <img class="label-hot"
																	src="image/theme/icons/hot-icon.png"
																	alt="icon items"> -->
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 30%; ">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <ul class="row-list">
                                                                                <li><a class="subcategory_item" href="faq.html">Land</a></li>

                                                                                <li><a class="subcategory_item" href="sitemap.html">Houses</a>
                                                                                </li>
                                                                                <li><a class="subcategory_item" href="contact.html">Rooms & Annexes</a></li>
                                                                                <li><a class="subcategory_item" href="banner-effect.html">Apartments</a></li>
                                                                                <li><a class="subcategory_item" href="banner-effect.html">Commercial Buildings </a></li>
                                                                                <li><a class="subcategory_item" href="banner-effect.html">Featured Projects</a></li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Market Place</strong>
                                                                <!-- <span class="label"></span> -->
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 30%; ">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <ul class="row-list">
                                                                                <li><a class="subcategory_item" href="faq.html">Made in Sri Lanka</a></li>

                                                                                <li><a class="subcategory_item" href="sitemap.html">Electronics</a>
                                                                                <li><a class="subcategory_item" href="sitemap.html">Home & Living</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Jobs</strong>
                                                                <!-- <span class="label"></span> -->
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 30%; ">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <ul class="row-list">
                                                                                <li><a class="subcategory_item" href="faq.html">Accounting, Auditing & Finance</a></li>

                                                                                <li><a class="subcategory_item" href="sitemap.html">Apparel & Clothing</a></li>
                                                                                <li><a class="subcategory_item" href="sitemap.html">Cashiers, Waiters & Cooks</a></li>
                                                                                <li><a class="subcategory_item" href="sitemap.html">Clerical</a></li>
                                                                                <li><a class="subcategory_item" href="sitemap.html">Construction & Manufacturing</a></li>
                                                                                <li><a class="subcategory_item" href="sitemap.html">Foreign Employment</a></li>
                                                                                <li><a class="subcategory_item" href="sitemap.html">Hospital Lab & Medical </a></li>
                                                                                <li><a class="subcategory_item" href="sitemap.html">Hospitality & Tourism</a></li>
                                                                                <li><a class="subcategory_item" href="sitemap.html">HR & Training</a></li>
                                                                                <li><a class="subcategory_item" href="sitemap.html">Logistics Warehouse & Transport</a></li>
                                                                                <li><a class="subcategory_item" href="sitemap.html">Sales & Marketing</a></li>
                                                                                <li><a class="subcategory_item" href="sitemap.html">Security</a></li>
                                                                                <li><a class="subcategory_item" href="sitemap.html">Other</a></li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Other</strong>
                                                                <!-- <span class="label"></span> -->
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 30%; ">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <ul class="row-list">
                                                                                <li><a class="subcategory_item" href="faq.html">Leisure</a></li>

                                                                                <li><a class="subcategory_item" href="sitemap.html">Education</a></li>
                                                                                <li><a class="subcategory_item" href="sitemap.html">Animals</a></li>
                                                                                <li><a class="subcategory_item" href="sitemap.html">Agriculture</a></li>
                                                                                <li><a class="subcategory_item" href="sitemap.html">Fashion & Beauty</a></li>
                                                                                <li><a class="subcategory_item" href="sitemap.html">Hobby, Sports and Kids</a></li>
                                                                                <li><a class="subcategory_item" href="sitemap.html">Services</a></li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>


                                                        <!-- <li class="pull-right hidden-md"><a href="#"
																title="Special Offer!"><strong>Special
																	Offer!</strong></a></li>
														<li class="pull-right hidden-md"><a href="#"
																title="Buy This Theme!"><strong>Buy This
																	Theme!</strong></a></li> -->
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <!-- //end Main menu -->

                        <!--cart-->
                        <div class="col-md-3 col-sm-4 col-6  ">
                            <!--cart-->
                            <div id="cart" class=" btn-group btn-shopping-cart navpost">
                                <a href="/advertisement/category">
                                    <button type="button" class="btn btn-primary " style="background-color: #f4a137; color:black;">Post your ad free</button>
                                </a>

                            </div>
                            <!--//cart-->

                        </div>
                        <!--//cart-->

                    </div>
                </div>

            </div>

            <!-- Navbar switcher -->
            <!-- //end Navbar switcher -->
        </header>
        @yield('content')

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

                        <div class="col-sm-6 col-md-6 box-service">
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

                        {{-- <div class="col-sm-6 col-md-3 box-account">
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
                        </div> --}}

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
                            <div class="block-payment text-right"><img src="{{asset('image/demo/logos/jarabara.png')}}" alt="payment" title="payment " width="80px"></div>
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
    <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/themejs/libs.js"></script>
    <script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
    <script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
    <script type="text/javascript" src="js/datetimepicker/moment.js"></script>
    <script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/modernizr/modernizr-2.6.2.min.js"></script>


    <!-- Theme files
============================================ -->
    <script type="text/javascript" src="js/themejs/application.js"></script>
    <script type="text/javascript" src="js/themejs/homepage.js"></script>
    <script type="text/javascript" src="js/themejs/toppanel.js"></script>
    <script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="js/themejs/addtocart.js"></script>
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