<!doctype html>
<html lang="en">

<!-- 06_01_shop.html  [XR&CO'2014], Tue, 22 Oct 2019 11:56:01 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('template/user') }}/images/favicon.png" />
    <link rel="stylesheet" href="{{ asset('template/user') }}/plugin/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('template/user') }}/plugin/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="{{ asset('template/user') }}/fonts/poppins/poppins.css">
    <link rel="stylesheet" href="{{ asset('template/user') }}/plugin/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('template/user') }}/plugin/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('template/user') }}/plugin/process-bar/tox-progress.css">
    <link rel="stylesheet" href="{{ asset('template/user') }}/plugin/owl-carouse/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('template/user') }}/plugin/owl-carouse/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('template/user') }}/plugin/animsition/css/animate.css">
    <link rel="stylesheet" href="{{ asset('template/user') }}/plugin/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('template/user') }}/plugin/mediaelement/mediaelementplayer.css">
    <link rel="stylesheet" href="{{ asset('template/user') }}/plugin/datetimepicker/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="{{ asset('template/user') }}/plugin/datetimepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="{{ asset('template/user') }}/plugin/lightgallery/lightgallery.css">
    <link rel="stylesheet" href="{{ asset('template/user') }}/css/style.css">
</head>
<body>

<!--load page-->
<div class="load-page">
    <div class="sk-wave">
        <div class="sk-rect sk-rect1"></div>
        <div class="sk-rect sk-rect2"></div>
        <div class="sk-rect sk-rect3"></div>
        <div class="sk-rect sk-rect4"></div>
        <div class="sk-rect sk-rect5"></div>
    </div>
</div>

<!-- Mobile nav -->
{{-- <nav class="visible-sm visible-xs mobile-menu-container mobile-nav">
    <div class="menu-mobile-nav navbar-toggle">
        <span class="icon-bar"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </div>
    <div id="cssmenu" class="animated">
        <div class="uni-icons-close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <ul class="nav navbar-nav animated">
            <li class="has-sub"><a href="{{ route('home') }}">Home</a>
                <ul>
                    <li><a href="index-2.html">Home 1</a></li>
                    <li><a href="01_02_home_2.html">Home 2</a></li>
                    <li><a href="01_03_home_3.html">Home 3</a></li>
                </ul>
            </li>
            <li class="has-sub"><a href='#'>Page</a>
                <ul>
                    <li><a href="02_01_about.html">About</a></li>
                    <li class="has-sub"><a href="#">doctor</a>
                        <ul>
                            <li><a href="02_02_doctor.html">Doctors </a></li>
                            <li><a href="02_03_doctor_details.html">Doctors Details</a></li>
                        </ul>
                    </li>
                    <li><a href="02_04_contact.html">Contact</a></li>
                    <li><a href="02_05_gallery.html">Gallery</a></li>
                </ul>
            </li>
            <li><a href="03_01_services.html">Services</a></li>
            <li class="has-sub"><a href="#">Departments</a>
                <ul>
                    <li><a href="04_01_departments.html">Departments</a></li>
                    <li><a href="04_02_single_department.html">Single Departments</a></li>
                </ul>
            </li>
            <li class="has-sub"><a href='#'>Blog</a>
                <ul>
                    <li><a href="05_01_blog_list.html">Blog list</a></li>
                    <li><a href="05_02_blog_grid.html">Blog Grid</a></li>
                    <li><a href="05_03_single_post.html">Single post</a></li>
                </ul>
            </li>
            <li class="has-sub"><a href='#'>shop</a>
                <ul>
                    <li><a href="06_01_shop.html">Shop</a></li>
                    <li><a href="06_02_single_product.html">Single Product</a></li>
                    <li><a href="06_03_cart.html">Cart</a></li>
                    <li><a href="06_04_checkout.html">Checkout</a></li>
                </ul>
            </li>
            <li class="has-sub"><a href='#'>Element</a>
                <ul>
                    <li class="has-sub"><a href="#">Short Code 1</a>
                        <ul>
                            <li><a href="07_01_buttons.html"><i class="fa fa-plus-square" aria-hidden="true"></i>Buttons</a></li>
                            <li><a href="07_02_icons_box.html"><i class="fa fa-cube" aria-hidden="true"></i>Icon Box</a></li>
                            <li><a href="07_03_progress.html"><i class="fa fa-tasks" aria-hidden="true"></i>Process Bar</a></li>
                            <li><a href="07_04_tabs.html"><i class="fa fa-columns" aria-hidden="true"></i>Tabs</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="#">Short Code 2</a>
                        <ul>
                            <li><a href="07_05_accordion.html"><i class="fa fa-list" aria-hidden="true"></i>Accordion</a></li>
                            <li><a href="07_06_counter.html"><i class="fa fa-tachometer" aria-hidden="true"></i>Counter</a></li>
                            <li><a href="07_07_testimonials.html"><i class="fa fa-comments-o" aria-hidden="true"></i>Testimonials</a></li>
                            <li><a href="07_08_typography.html"><i class="fa fa-text-width" aria-hidden="true"></i>Typography</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="#">Short Code 3</a>
                        <ul>
                            <li><a href="07_09_partner.html"><i class="fa fa-handshake-o" aria-hidden="true"></i> Partner</a></li>
                            <li><a href="07_10_team.html"><i class="fa fa-users" aria-hidden="true"></i> Team</a></li>
                            <li><a href="07_11_item_list.html"><i class="fa fa-list-ol" aria-hidden="true"></i> Item List</a></li>
                            <li><a href="07_12_divider.html"><i class="fa fa-chain-broken" aria-hidden="true"></i>Dividers</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="#">Short Code 4</a>
                        <ul>
                            <li><a href="07_13_columns.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Columns</a></li>
                            <li><a href="07_14_pricing_table.html"><i class="fa fa-address-card-o" aria-hidden="true"></i> Pricing table</a></li>
                            <li><a href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 404 Pages</a></li>
                            <li><a href="#"><i class="fa fa-repeat" aria-hidden="true"></i> Comming soon</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="02_04_contact.html">Contact</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</nav> --}}
<!-- End mobile menu -->

<div class="uni-shop">
    <div id="wrapper-container" class="site-wrapper-container">
        <header>
            <div class="uni-medicare-header sticky-menu">
                <div class="container">
                    <div class="uni-medicare-header-main">
                        <div class="row">
                            <div class="col-md-2">
                                <!--LOGO-->
                                <div class="wrapper-logo">
                                    <a class="logo-default" href="#"><img src="{{ asset('template/user') }}/images/logo.png" alt="" class="img-responsive"></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <!--MENU TEXT-->
                                <div class="uni-main-menu">
                                    <nav class="main-navigation uni-menu-text">
                                        <div class="cssmenu">
                                            <ul>
                                                <li><a href="{{ route('home') }}">Home</a></li>
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Services</a></li>
                                                <li><a href="#">doctor</a></li>
                                                <li class="has-sub"><a href='#'>shop</a>
                                                    <ul>
                                                        <li><a href="{{route('barang.index')}}">Shop</a></li>
                                                        <li><a href="06_03_cart.html">Cart</a></li>
                                                        <li><a href="06_04_checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-sub"><a href='#'>History</a>
                                                    <ul>
                                                        <li><a href="{{route('pemesanan.index')}}">History Pemesanan</a></li>
                                                        <li><a href="06_03_cart.html">History Pembelian</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">Log Out</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>

                                <!--SEARCH AND APPOINTMENT-->
                                <div class="uni-search-appointment">
                                    <ul>
                                        <li class="un-btn-search">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </li>
                                        <li class="uni-btn-appointment">
                                            <a href="{{route('pemesanan.create')}}">Appointment</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--FORM SEARCH-->
                        <div class="uni-form-search-header">
                            <div class="box-search-header collapse" id="box-search-header">
                                <div class="uni-input-group">
                                    <input type="text" name="key" placeholder="Search" class="form-control">
                                    <button class="uni-btn btn-search">
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="main-content" class="site-main-content">
            <div class="site-content-area">

                <div class="uni-banner-default uni-background-1">
                    <div class="container">
                        <!-- Page title -->
                        <div class="page-title">
                            <div class="page-title-inner">
                                <h1>shop</h1>
                            </div>
                        </div>
                        <!-- End page title -->

                    </div>
                </div>

                <main id="main" class="site-main">
                    <div class="uni-shop-body">
                        <div class="container">
                            <div id="content">

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="uni-single-product-left">
                                            <div class="uni-siderbar-left">
                                                {{-- <form action="http://medicare.vikitheme.com/html/action.php" method="post" accept-charset="utf-8">
                                                    <div class="vk-newlist-banner-test-search">
                                                        <input type="text" name="seach" placeholder="Search...">
                                                        <button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                    </div>
                                                </form> --}}

                                                <div class="vk-category">
                                                    <h3>Categories</h3>
                                                    <div class="uni-divider"></div>
                                                    <ul class="list-career">
                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Makanan Anjing</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Makanan Kucing</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Obat</a></li>
                                                        {{-- <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Oil & Filters</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Brakes</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Wheels</a></li> --}}
                                                    </ul>
                                                </div>

                                                {{-- <div class="uni-filter-price">
                                                    <h3>Filter By Price</h3>
                                                    <div class="uni-divider"></div>
                                                    <div id="slider-range"></div>
                                                    <div class="label-filter-price"><input type="text" id="amount" readonly></div>
                                                    <button class="btn-filter-prince">SEARCH</button>

                                                    <div class="clearfix"></div>
                                                </div> --}}


                                                <div class="uni-best-seller">
                                                    {{-- <h3>Best Sellers</h3>
                                                    <div class="uni-divider"></div>
                                                    <div class="vk-newlist-details">
                                                        <div class="vk-newlist-details-newlist1 vk-book-details">
                                                            <div class="vk-best-seller-img">
                                                                <a href=""><img src="{{ asset('template/user') }}/images/shop/img-4.png" alt="review" class="img-responsive"></a>
                                                            </div>
                                                            <div class="vk-best-seller-info">
                                                                <h4><a href="">Redufluxes</a></h4>
                                                                <ul>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                </ul>
                                                                <p>$26.00</p>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>

                                                        <div class="vk-newlist-details-newlist1  vk-book-details">
                                                            <div class="vk-best-seller-img">
                                                                <a href="06_02_single_product.html"><img src="{{ asset('template/user') }}/images/shop/img-3.png" alt="review" class="img-responsive"></a>
                                                            </div>
                                                            <div class="vk-best-seller-info">
                                                                <h4><a href="06_02_single_product.html">Sperm Plus</a></h4>
                                                                <ul>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                </ul>
                                                                <p>$26.00</p>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>

                                                        <div class="vk-newlist-details-newlist1  vk-book-details">
                                                            <div class="vk-best-seller-img">
                                                                <a href="06_02_single_product.html"><img src="{{ asset('template/user') }}/images/shop/img-2.png" alt="review" class="img-responsive"></a>
                                                            </div>
                                                            <div class="vk-best-seller-info">
                                                                <h4><a href="06_02_single_product.html">paracetamol</a></h4>
                                                                <ul>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                </ul>
                                                                <p>$26.00</p>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>

                                                        <div class="vk-newlist-details-newlist1  vk-book-details">
                                                            <div class="vk-best-seller-img">
                                                                <a href=""><img src="{{ asset('template/user') }}/images/shop/img-1.png" alt="review" class="img-responsive"></a>
                                                            </div>
                                                            <div class="vk-best-seller-info">
                                                                <h4><a href="">terley infusion</a></h4>
                                                                <ul>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                </ul>
                                                                <p>$26.00</p>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="uni-shop-siderbar-right">
                                            <div class="product-filter">
                                                {{-- <p class="woocommerce-result-count">Showing <span>1–9</span> of <span>45</span> results</p> --}}

                                                {{-- <form class="woocommerce-ordering" method="get">
                                                    <select name="orderby" class="orderby">
                                                        <option value="menu_order" selected="selected">Default Sorting</option>
                                                        <option value="popularity">Popularity</option>
                                                        <option value="rating">Rating</option>
                                                        <option value="date">Newness</option>
                                                        <option value="price">Price</option>
                                                    </select>
                                                </form> --}}
                                                <div class="clearfix"></div>
                                                <!-- .woocommerce-ordering -->
                                            </div>

                                            <!-- .product item -->
                                            <div class="category-product uni-product-wapper">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-6">
                                                        @foreach ($barang as $brg)
                                                        <div class="product-item">
                                                            <ul class="category-product">
                                                                <li>
                                                                    <div class="wrapper">
                                                                        <div class="feature-image">
                                                                            <a href="{{ route('barang.show',$brg->id) }}"><img class="wp-post-image img-responsive" src="{{asset('storage/'.$brg->image)}}" alt=""></a>
                                                                        </div>
                                                                        <!-- .feature-image -->

                                                                        <div class="stats">
                                                                            <div class="box-title">
                                                                                <h2 class="title-product">
                                                                                    <a href="{{ route('barang.show',$brg->id) }}" class="product_name">{{ $brg->name }}</a>
                                                                                </h2>
                                                                                <!-- .title-product -->
                                                                            </div>
                                                                            <!-- .box-title -->
                                                                            <div class="price-add-cart">
                                                                                <div class="vote-star">
                                                                                    <ul>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="box-price">
                                                                                    <span class="price">
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <span class="woocommerce-Price-currencySymbol">Rp. </span>
                                                                                            {{ $brg->price }}
                                                                                        </span>
                                                                                    </span>
                                                                                </div>

                                                                                <div class="box-add">
                                                                                    <a href="06_03_cart.html">Add to cart</a>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <!-- .box-price -->
                                                                        </div>
                                                                        <!-- .stats -->
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        @endforeach
                                                    </div>

                                                    {{-- <div class="col-md-4 col-sm-6">
                                                        <div class="product-item">
                                                            <ul class="category-product">
                                                                <li>
                                                                    <div class="wrapper">
                                                                        <div class="feature-image">
                                                                            <a href="06_02_single_product.html"><img class="wp-post-image img-responsive" src="{{ asset('template/user') }}/images/shop/img-3.png" alt=""></a>
                                                                            <div class="uni-sale">
                                                                                <span>SALE</span>
                                                                            </div>
                                                                        </div>
                                                                        <!-- .feature-image -->

                                                                        <div class="stats">
                                                                            <div class="box-title">
                                                                                <h2 class="title-product">
                                                                                    <a href="06_02_single_product-2.html" class="product_name">Sperm Plus</a>
                                                                                </h2>
                                                                                <!-- .title-product -->
                                                                            </div>
                                                                            <!-- .box-title -->
                                                                            <div class="price-add-cart">
                                                                                <div class="vote-star">
                                                                                    <ul>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                                    </ul>
                                                                                </div>

                                                                                <div class="box-price">
                                                                                <span class="price">
                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                                                        26.00
                                                                                    </span>
                                                                                </span>
                                                                                </div>

                                                                                <div class="box-add">
                                                                                    <a href="06_03_cart.html">Add to cart</a>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <!-- .box-price -->
                                                                        </div>
                                                                        <!-- .stats -->
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="product-item">
                                                            <ul class="category-product">
                                                                <li>
                                                                    <div class="wrapper">
                                                                        <div class="feature-image">
                                                                            <a href="06_02_single_product.html"><img class="wp-post-image img-responsive" src="{{ asset('template/user') }}/images/shop/img-2.png" alt=""></a>
                                                                            <div class="uni-sale">
                                                                                <span>SALE</span>
                                                                            </div>
                                                                        </div>
                                                                        <!-- .feature-image -->

                                                                        <div class="stats">
                                                                            <div class="box-title">
                                                                                <h2 class="title-product">
                                                                                    <a href="06_02_single_product-2.html" class="product_name">paracetamol</a>
                                                                                </h2>
                                                                                <!-- .title-product -->
                                                                            </div>
                                                                            <!-- .box-title -->
                                                                            <div class="price-add-cart">
                                                                                <div class="vote-star">
                                                                                    <ul>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                                    </ul>
                                                                                </div>

                                                                                <div class="box-price">
                                                                                <span class="price">
                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                                                        26.00
                                                                                    </span>
                                                                                </span>
                                                                                </div>

                                                                                <div class="box-add">
                                                                                    <a href="06_03_cart.html">Add to cart</a>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <!-- .box-price -->
                                                                        </div>
                                                                        <!-- .stats -->
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="product-item">
                                                            <ul class="category-product">
                                                                <li>
                                                                    <div class="wrapper">
                                                                        <div class="feature-image">
                                                                            <a href="06_02_single_product.html"><img class="wp-post-image img-responsive" src="{{ asset('template/user') }}/images/shop/img-1.png" alt=""></a>
                                                                            <div class="uni-sale">
                                                                                <span>SALE</span>
                                                                            </div>
                                                                        </div>
                                                                        <!-- .feature-image -->

                                                                        <div class="stats">
                                                                            <div class="box-title">
                                                                                <h2 class="title-product">
                                                                                    <a href="06_02_single_product-2.html" class="product_name">joint pain</a>
                                                                                </h2>
                                                                                <!-- .title-product -->
                                                                            </div>
                                                                            <!-- .box-title -->
                                                                            <div class="price-add-cart">
                                                                                <div class="vote-star">
                                                                                    <ul>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                                    </ul>
                                                                                </div>

                                                                                <div class="box-price">
                                                                                <span class="price">
                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                                                        26.00
                                                                                    </span>
                                                                                </span>
                                                                                </div>

                                                                                <div class="box-add">
                                                                                    <a href="06_03_cart.html">Add to cart</a>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <!-- .box-price -->
                                                                        </div>
                                                                        <!-- .stats -->
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="product-item">
                                                            <ul class="category-product">
                                                                <li>
                                                                    <div class="wrapper">
                                                                        <div class="feature-image">
                                                                            <a href="06_02_single_product.html"><img class="wp-post-image img-responsive" src="{{ asset('template/user') }}/images/shop/img1.png" alt=""></a>
                                                                        </div>
                                                                        <!-- .feature-image -->

                                                                        <div class="stats">
                                                                            <div class="box-title">
                                                                                <h2 class="title-product">
                                                                                    <a href="06_02_single_product-2.html" class="product_name">kids chest relief</a>
                                                                                </h2>
                                                                                <!-- .title-product -->
                                                                            </div>
                                                                            <!-- .box-title -->
                                                                            <div class="price-add-cart">
                                                                                <div class="vote-star">
                                                                                    <ul>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                                    </ul>
                                                                                </div>

                                                                                <div class="box-price">
                                                                                <span class="price">
                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                                                        26.00
                                                                                    </span>
                                                                                </span>
                                                                                </div>

                                                                                <div class="box-add">
                                                                                    <a href="06_03_cart.html">Add to cart</a>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <!-- .box-price -->
                                                                        </div>
                                                                        <!-- .stats -->
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="product-item">
                                                            <ul class="category-product">
                                                                <li>
                                                                    <div class="wrapper">
                                                                        <div class="feature-image">
                                                                            <a href="06_02_single_product.html"><img class="wp-post-image img-responsive" src="{{ asset('template/user') }}/images/shop/img.png" alt=""></a>
                                                                        </div>
                                                                        <!-- .feature-image -->

                                                                        <div class="stats">
                                                                            <div class="box-title">
                                                                                <h2 class="title-product">
                                                                                    <a href="06_02_single_product-2.html" class="product_name">Sperm Plus</a>
                                                                                </h2>
                                                                                <!-- .title-product -->
                                                                            </div>
                                                                            <!-- .box-title -->
                                                                            <div class="price-add-cart">
                                                                                <div class="vote-star">
                                                                                    <ul>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                                    </ul>
                                                                                </div>

                                                                                <div class="box-price">
                                                                                <span class="price">
                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                                                        26.00
                                                                                    </span>
                                                                                </span>
                                                                                </div>

                                                                                <div class="box-add">
                                                                                    <a href="06_03_cart.html">Add to cart</a>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <!-- .box-price -->
                                                                        </div>
                                                                        <!-- .stats -->
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="product-item">
                                                            <ul class="category-product">
                                                                <li>
                                                                    <div class="wrapper">
                                                                        <div class="feature-image">
                                                                            <a href="06_02_single_product.html"><img class="wp-post-image img-responsive" src="{{ asset('template/user') }}/images/shop/img-4.png" alt=""></a>
                                                                        </div>
                                                                        <!-- .feature-image -->

                                                                        <div class="stats">
                                                                            <div class="box-title">
                                                                                <h2 class="title-product">
                                                                                    <a href="06_02_single_product-2.html" class="product_name">paracetamol</a>
                                                                                </h2>
                                                                                <!-- .title-product -->
                                                                            </div>
                                                                            <!-- .box-title -->
                                                                            <div class="price-add-cart">
                                                                                <div class="vote-star">
                                                                                    <ul>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                                    </ul>
                                                                                </div>

                                                                                <div class="box-price">
                                                                                <span class="price">
                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                                                        26.00
                                                                                    </span>
                                                                                </span>
                                                                                </div>

                                                                                <div class="box-add">
                                                                                    <a href="06_03_cart.html">Add to cart</a>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <!-- .box-price -->
                                                                        </div>
                                                                        <!-- .stats -->
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="product-item">
                                                            <ul class="category-product">
                                                                <li>
                                                                    <div class="wrapper">
                                                                        <div class="feature-image">
                                                                            <a href="06_02_single_product.html"><img class="wp-post-image img-responsive" src="{{ asset('template/user') }}/images/shop/img-3.png" alt=""></a>
                                                                        </div>
                                                                        <!-- .feature-image -->

                                                                        <div class="stats">
                                                                            <div class="box-title">
                                                                                <h2 class="title-product">
                                                                                    <a href="06_02_single_product-2.html" class="product_name">extra slim</a>
                                                                                </h2>
                                                                                <!-- .title-product -->
                                                                            </div>
                                                                            <!-- .box-title -->
                                                                            <div class="price-add-cart">
                                                                                <div class="vote-star">
                                                                                    <ul>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                                    </ul>
                                                                                </div>

                                                                                <div class="box-price">
                                                                                <span class="price">
                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                                                        26.00
                                                                                    </span>
                                                                                </span>
                                                                                </div>

                                                                                <div class="box-add">
                                                                                    <a href="06_03_cart.html">Add to cart</a>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <!-- .box-price -->
                                                                        </div>
                                                                        <!-- .stats -->
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="product-item">
                                                            <ul class="category-product">
                                                                <li>
                                                                    <div class="wrapper">
                                                                        <div class="feature-image">
                                                                            <a href="06_02_single_product.html"><img class="wp-post-image img-responsive" src="{{ asset('template/user') }}/images/shop/img-2.png" alt=""></a>
                                                                        </div>
                                                                        <!-- .feature-image -->

                                                                        <div class="stats">
                                                                            <div class="box-title">
                                                                                <h2 class="title-product">
                                                                                    <a href="06_02_single_product-2.html" class="product_name">paracetamol</a>
                                                                                </h2>
                                                                                <!-- .title-product -->
                                                                            </div>
                                                                            <!-- .box-title -->
                                                                            <div class="price-add-cart">
                                                                                <div class="vote-star">
                                                                                    <ul>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                                                    </ul>
                                                                                </div>

                                                                                <div class="box-price">
                                                                                <span class="price">
                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                                                        26.00
                                                                                    </span>
                                                                                </span>
                                                                                </div>

                                                                                <div class="box-add">
                                                                                    <a href="06_03_cart.html">Add to cart</a>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <!-- .box-price -->
                                                                        </div>
                                                                        <!-- .stats -->
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div> --}}

                                                </div>
                                            </div>


                                            <!--PAGINATION-->
                                            <nav class="woocommerce-pagination">
                                                <ul class="loop-pagination">
                                                    <li><a class="prev page-numbers" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                                    <li><a class="page-numbers current">1</a></li>
                                                    <li><a class="page-numbers" href="#">2</a></li>
                                                    <li><a class="page-numbers" href="#">3</a></li>
                                                    <li><a class="page-numbers" href="#">...</a></li>
                                                    <li><a class="page-numbers" href="#">7</a></li>
                                                    <li><a class="next page-numbers" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                </ul><!-- .pagination -->
                                            </nav>

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
        </div>

        <footer class="site-footer footer-default">
            <div class="footer-main-content">
                <div class="container">
                    <div class="row">
                        <div class="footer-main-content-elements">
                            <div class="footer-main-content-element col-md-3 col-sm-6">
                                <aside class="widget">
                                    <div class="widget-title uni-uppercase"><a href="#"><img src="{{ asset('template/user') }}/images/logowhite.png" alt="" class="img-responsive"></a></div>
                                    <div class="widget-content">
                                        <p>
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fame ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.
                                        </p>
                                        <div class="uni-info-contact">
                                            <ul>
                                                <li> <i class="fa fa-map-marker" aria-hidden="true"></i> 45 Queen's Park Rd, Brighton,  UK</li>
                                                <li><i class="fa fa-phone" aria-hidden="true"></i> (094) 123 4567 - (094) 123 4568</li>
                                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> medicareplus@domain.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="footer-main-content-element col-md-3 col-sm-6">
                                <aside class="widget">
                                    <h3 class="widget-title uni-uppercase">quick links</h3>
                                    <div class="widget-content">
                                        <div class="uni-quick-link">
                                            <ul>
                                                <li><a href="#"><span>+</span> Home</a></li>
                                                <li><a href="#"><span>+</span> about</a></li>
                                                <li><a href="#"><span>+</span> services</a></li>
                                                <li><a href="#"><span>+</span> timetable</a></li>
                                                <li><a href="#"><span>+</span> blog</a></li>
                                                <li><a href="#"><span>+</span> contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="footer-main-content-element col-md-3 col-sm-6">
                                <aside class="widget">
                                    <h3 class="widget-title uni-uppercase">latest posts</h3>
                                    <div class="widget-content">
                                        <div class="uni-footer-latest-post">
                                            <ul>
                                                <li>
                                                    <h4><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></h4>
                                                    <span class="time">june 12, 2017</span>
                                                </li>
                                                <li>
                                                    <h4><a href="#">Aliquam tincidunt mauris eu risus amet</a></h4>
                                                    <span class="time">june 12, 2017</span>
                                                </li>
                                                <li>
                                                    <h4><a href="#">Morbi in sem quis dui placerat ornare column</a></h4>
                                                    <span class="time">june 12, 2017</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="footer-main-content-element col-md-3 col-sm-6">
                                <aside class="widget">
                                    <h3 class="widget-title uni-uppercase">News<span>letter</span></h3>
                                    <div class="widget-content">
                                        <div class="uni-footer-newletter">
                                            <div class="input-group">
                                                <input type="email" class="form-control" placeholder="Enter your email">
                                                <button class="btn btn-sub" type="submit">subscribe</button>
                                            </div>
                                            <div class="uni-social">
                                                <h4>Follow us</h4>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="copyright-content">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="copyright-text"><a href="templateshub.net">Templateshub</a></p>
                            </div>
                            <div class="col-sm-6">
                                <ul class="copyright-menu">
                                    <li><a href="#">Term Of Use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="{{ asset('template/user') }}/plugin/jquery/jquery-2.0.2.min.js"></script>
<script src="{{ asset('template/user') }}/plugin/bootstrap/js/bootstrap.js"></script>
<script src="{{ asset('template/user') }}/plugin/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ asset('template/user') }}/plugin/process-bar/tox-progress.js"></script>
<script src="{{ asset('template/user') }}/plugin/waypoint/jquery.waypoints.min.js"></script>
<script src="{{ asset('template/user') }}/plugin/counterup/jquery.counterup.min.js"></script>
<script src="{{ asset('template/user') }}/plugin/owl-carouse/owl.carousel.min.js"></script>
<script src="{{ asset('template/user') }}/plugin/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ asset('template/user') }}/plugin/mediaelement/mediaelement-and-player.js"></script>
<script src="{{ asset('template/user') }}/plugin/masonry/masonry.pkgd.min.js"></script>
<script src="{{ asset('template/user') }}/plugin/datetimepicker/moment.min.js"></script>
<script src="{{ asset('template/user') }}/plugin/datetimepicker/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('template/user') }}/plugin/datetimepicker/bootstrap-datepicker.tr.min.js"></script>
<script src="{{ asset('template/user') }}/plugin/datetimepicker/bootstrap-datetimepicker.js"></script>
<script src="{{ asset('template/user') }}/plugin/datetimepicker/bootstrap-datetimepicker.fr.js"></script>

<script src="{{ asset('template/user') }}/plugin/lightgallery/picturefill.min.js"></script>
<script src="{{ asset('template/user') }}/plugin/lightgallery/lightgallery.js"></script>
<script src="{{ asset('template/user') }}/plugin/lightgallery/lg-pager.js"></script>
<script src="{{ asset('template/user') }}/plugin/lightgallery/lg-autoplay.js"></script>
<script src="{{ asset('template/user') }}/plugin/lightgallery/lg-fullscreen.js"></script>
<script src="{{ asset('template/user') }}/plugin/lightgallery/lg-zoom.js"></script>
<script src="{{ asset('template/user') }}/plugin/lightgallery/lg-hash.js"></script>
<script src="{{ asset('template/user') }}/plugin/lightgallery/lg-share.js"></script>
<script src="{{ asset('template/user') }}/plugin/sticky/jquery.sticky.js"></script>

<script src="{{ asset('template/user') }}/js/main.js"></script>
</body>

<!-- 06_01_shop.html  [XR&CO'2014], Tue, 22 Oct 2019 11:56:12 GMT -->
</html>