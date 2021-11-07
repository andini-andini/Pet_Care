<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="template/user/images/favicon.png" />
    <link rel="stylesheet" href="template/user/plugin/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="template/user/plugin/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="template/user/fonts/poppins/poppins.css">
    <link rel="stylesheet" href="template/user/plugin/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="template/user/plugin/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="template/user/plugin/process-bar/tox-progress.css">
    <link rel="stylesheet" href="template/user/plugin/owl-carouse/owl.carousel.min.css">
    <link rel="stylesheet" href="template/user/plugin/owl-carouse/owl.theme.default.min.css">
    <link rel="stylesheet" href="template/user/plugin/animsition/css/animate.css">
    <link rel="stylesheet" href="template/user/plugin/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="template/user/plugin/mediaelement/mediaelementplayer.css">
    <link rel="stylesheet" href="template/user/plugin/datetimepicker/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="template/user/plugin/datetimepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="template/user/plugin/lightgallery/lightgallery.css">
    <link rel="stylesheet" href="template/user/css/style.css">
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
                {{-- <ul>
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
            <li class="has-sub">
                <a class="btn d-grid btn-danger text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Log Out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            {{-- <li class="has-sub"><a href='#'>Element</a>
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
</nav>
<!-- End mobile menu --> --}}

<div class="uni-home-1">
    <div id="wrapper-container" class="site-wrapper-container">
        <header>
            <div class="uni-medicare-header sticky-menu">
                <div class="container">
                    <div class="uni-medicare-header-main">
                        <div class="row">
                            <div class="col-md-2">
                                <!--LOGO-->
                                <div class="wrapper-logo">
                                    <a class="logo-default" href="{{ route('home') }}"><img src="template/user/images/logo.png" alt="" class="img-responsive"></a>
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
                                                        <li><a href="06_01_shop.html">Shop</a></li>
                                                        <li><a href="06_03_cart.html">Cart</a></li>
                                                        <li><a href="06_04_checkout.html">Checkout</a></li>
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
                                            <a href="#">Appointment</a>
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
            <section class="site-content-area">

                <!--BANNER-->
                <div class="uni-banner">
                    <div class="uni-owl-one-item owl-carousel owl-theme">
                        <div class="item">
                            <div class="uni-banner-img uni-background-5"></div>
                            <div class="content animated" data-animation="flipInX" data-delay="0.9s">
                                <div class="container">
                                    <div class="caption">
                                        <h1>Let's protect your pet's health</h1>
                                        <p>
                                            Pet health has an important role in increasing production
                                            <br>
                                            and productivity as well as protecting you
                                        </p>
                                        <a href="#">APPOINTMENT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="uni-banner-img uni-background-6"></div>
                            <div class="content animated" data-animation="flipInX" data-delay="0.9s">
                                <div class="container">
                                    <div class="caption">
                                        <h1>Let's protect your pet's health</h1>
                                        <p>
                                            Pet health has an important role in increasing production
                                            <br>
                                            and productivity as well as protecting you
                                        </p>
                                        <a href="#">APPOINTMENT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="uni-banner-img uni-background-7"></div>
                            <div class="content animated" data-animation="flipInX" data-delay="0.9s">
                                <div class="container">
                                    <div class="caption">
                                        <h1>Let's protect your pet's health</h1>
                                        <p>
                                            Pet health has an important role in increasing production
                                            <br>
                                            and productivity as well as protecting you
                                        </p>
                                        <a href="#">APPOINTMENT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <!--OPENING HOURS AND BOOK APPOINTMENT-->
                <div class="uni-home-opening-book">
                    <div class="container">
                        <div class="uni-home-opening-book-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="uni-services-opinging-hours">
                                        <div class="uni-services-opinging-hours-title">
                                            <div class="icon">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            </div>
                                            <h4>opening hours</h4>
                                        </div>
                                        <div class="uni-services-opinging-hours-content">
                                            <table class="table">
                                                <tr>
                                                    <td>monday</td>
                                                    <td>8:00 - 17:00</td>
                                                </tr>
                                                <tr>
                                                    <td>tuesday</td>
                                                    <td>8:00 - 17:00</td>
                                                </tr>
                                                <tr>
                                                    <td>wednesday</td>
                                                    <td>8:00 - 17:00</td>
                                                </tr>
                                                <tr>
                                                    <td>thursday</td>
                                                    <td>8:00 - 17:00</td>
                                                </tr>
                                                <tr>
                                                    <td>friday</td>
                                                    <td>8:00 - 17:00</td>
                                                </tr>
                                                <tr>
                                                    <td>sunday</td>
                                                    <td>8:00 - 17:00</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="uni-single-department-appointment-form">

                                        <div class="uni-home-title">
                                            <h3>Book appoitment</h3>
                                            <div class="uni-underline"></div>
                                        </div>

                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="input-group form-group">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="name" value="" placeholder="your name">
                                                    </div>
                                                    <div class="input-group form-group">
                                                        <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                        <input type="tel" class="form-control" name="phone" value="" placeholder="phone number">
                                                    </div>
                                                    <div class="input-group form-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                        <input type="email" class="form-control" name="email" value="" placeholder="email">
                                                    </div>
                                                    <div class="input-group form-group">
                                                        <div class="input-group date date-check-in" data-date="12-02-2017" data-date-format="mm-dd-yyyy">
                                                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                            <input name="date1" class="form-control" type="text" value="12-02-2017">
                                                            <span class="input-group-addon btn"><i class="fa fa-calendar" id="ti-calendar1" aria-hidden="true"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="input-group form-group">
                                                        <textarea id="message" name="phone" class="form-control" placeholder="note"></textarea>
                                                    </div>
                                                    <button class="vk-btn vk-btn-send">send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

               <!--OUR DOCTOR-->
               <div class="uni-home-1-our-doctor">
                <div class="uni-shortcode-team-2 uni-background-2">
                    <div class="container">

                            <div class="uni-home-title">
                                <h3>About</h3>
                                <div class="uni-underline"></div>
                            </div>

                        {{-- <div class="uni-owl-four-item owl-carousel owl-theme">
                            @foreach ($doctor as $doctor)
                            <div class="item">
                                <div class="uni-team-default">
                                    <div class="item-img">
                                        <img src="{{asset('storage/'.$doctor->image)}}" alt="" class="img-responsive">
                                    </div>
                                    <div class="item-caption">
                                        <div class="col-md-3 col-sm-3 col-xs-3 uni-clear-padding">
                                            <div class="item-icons">
                                                <img src="template/user/images/icons_box/icon_4/icon-5.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 uni-clear-padding">
                                            <div class="item-title">
                                                <h4>{{ $doctor->name }}</h4>
                                                <span>SIP: {{ $doctor->sip }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div> --}}
                    </div>
                </div>
            </div>


                <!--DEPARTMENT-->
                <div class="uni-hơm-1-department">
                    <div class="container">
                        <div class="uni-home-title">
                            <h3>Service</h3>
                            <div class="uni-underline"></div>
                        </div>
                        <div class="uni-shortcode-icon-box-1">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="uni-shortcode-icon-box-1-default">
                                        <div class="item-icons">
                                            <img src="template/user/images/icons_box/icon_1/icon-5.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="item-caption">
                                            <h4>cardiology</h4>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                fames ac turpis egestas adipisicing.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="uni-shortcode-icon-box-1-default">
                                        <div class="item-icons">
                                            <img src="template/user/images/icons_box/icon_1/icon-4.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="item-caption">
                                            <h4>Neurology</h4>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                fames ac turpis egestas adipisicing.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="uni-shortcode-icon-box-1-default">
                                        <div class="item-icons">
                                            <img src="template/user/images/icons_box/icon_1/icon-3.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="item-caption">
                                            <h4>Orthopedics</h4>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                fames ac turpis egestas adipisicing.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="uni-shortcode-icon-box-1-default">
                                        <div class="item-icons">
                                            <img src="template/user/images/icons_box/icon_1/icon-2.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="item-caption">
                                            <h4>cancer department</h4>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                fames ac turpis egestas adipisicing.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="uni-shortcode-icon-box-1-default">
                                        <div class="item-icons">
                                            <img src="template/user/images/icons_box/icon_1/icon-1.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="item-caption">
                                            <h4>Ophthalmology</h4>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                fames ac turpis egestas adipisicing.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="uni-shortcode-icon-box-1-default">
                                        <div class="item-icons">
                                            <img src="template/user/images/icons_box/icon_1/icon.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="item-caption">
                                            <h4>Respiratory</h4>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                fames ac turpis egestas adipisicing.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--OUR DOCTOR-->
                <div class="uni-home-1-our-doctor">
                    <div class="uni-shortcode-team-2 uni-background-2">
                        <div class="container">

                                <div class="uni-home-title">
                                    <h3>Our Doctor</h3>
                                    <div class="uni-underline"></div>
                                </div>


                            <div class="uni-owl-four-item owl-carousel owl-theme">
                                @foreach ($doctor as $doctor)
                                <div class="item">
                                    <div class="uni-team-default">
                                        <div class="item-img">
                                            <img src="{{asset('storage/'.$doctor->image)}}" alt="" class="img-responsive">
                                        </div>
                                        <div class="item-caption">
                                            <div class="col-md-3 col-sm-3 col-xs-3 uni-clear-padding">
                                                <div class="item-icons">
                                                    <img src="template/user/images/icons_box/icon_4/icon-4.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-sm-9 col-xs-9 uni-clear-padding">
                                                <div class="item-title">
                                                    <h4>{{ $doctor->name }}</h4>
                                                    <span>SIP: {{ $doctor->sip }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <!--OUR SERVICES-->
                <div class="uni-home-our-services">
                    <div class="uni-shortcode-icons-box-5">
                        <div class="container">

                            <div class="uni-home-title">
                                <h3>Our Services</h3>
                                <div class="uni-underline"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="uni-shortcode-icons-box-5-default">
                                        <div class="item-icons-title">
                                            <div class="col-md-4 uni-clear-padding">
                                                <div class="item-icons">
                                                    <img src="template/user/images/icons_box/icon_4/icon-5.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-8 uni-clear-padding">
                                                <div class="item-title">
                                                    <h4>Corneal transplant surgery</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-caption">
                                            <p>
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                                ultricies eget...
                                            </p>
                                            <a href="#" class="readmore">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="uni-shortcode-icons-box-5-default">
                                        <div class="item-icons-title">
                                            <div class="col-md-4 uni-clear-padding">
                                                <div class="item-icons">
                                                    <img src="template/user/images/icons_box/icon_4/icon-4.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-8 uni-clear-padding">
                                                <div class="item-title">
                                                    <h4>Cardiothoracic Surgery</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-caption">
                                            <p>
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                                ultricies eget...
                                            </p>
                                            <a href="#" class="readmore">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="uni-shortcode-icons-box-5-default">
                                        <div class="item-icons-title">
                                            <div class="col-md-4 uni-clear-padding">
                                                <div class="item-icons">
                                                    <img src="template/user/images/icons_box/icon_4/icon-3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-8 uni-clear-padding">
                                                <div class="item-title">
                                                    <h4>General health check</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-caption">
                                            <p>
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                                ultricies eget...
                                            </p>
                                            <a href="#" class="readmore">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="uni-shortcode-icons-box-5-default">
                                        <div class="item-icons-title">
                                            <div class="col-md-4 uni-clear-padding">
                                                <div class="item-icons">
                                                    <img src="template/user/images/icons_box/icon_4/icon-2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-8 uni-clear-padding">
                                                <div class="item-title">
                                                    <h4>Diagnosis &amp; <br> treatment of cancer</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-caption">
                                            <p>
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                                ultricies eget...
                                            </p>
                                            <a href="#" class="readmore">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="uni-shortcode-icons-box-5-default">
                                        <div class="item-icons-title">
                                            <div class="col-md-4 uni-clear-padding">
                                                <div class="item-icons">
                                                    <img src="images/icons_box/icon_4/icon-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-8 uni-clear-padding">
                                                <div class="item-title">
                                                    <h4>treatment of <br> pneumonia</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-caption">
                                            <p>
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                                ultricies eget...
                                            </p>
                                            <a href="#" class="readmore">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="uni-shortcode-icons-box-5-default">
                                        <div class="item-icons-title">
                                            <div class="col-md-4 uni-clear-padding">
                                                <div class="item-icons">
                                                    <img src="images/icons_box/icon_4/icon.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-8 uni-clear-padding">
                                                <div class="item-title">
                                                    <h4>Treatment of <br> dermatitis</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-caption">
                                            <p>
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                                ultricies eget...
                                            </p>
                                            <a href="#" class="readmore">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-all-services">
                                <a href="#">All services +</a>
                            </div>

                        </div>
                    </div>
                </div> --}}

                {{-- <!--CUSTOMERS SAY-->
                <div class="uni-home-customers-says">
                    <div class="uni-shortcode-testimonials-2 uni-background-3">
                        <div class="container">

                            <div class="uni-home-title">
                                <h3>Customers say</h3>
                                <div class="uni-underline"></div>
                            </div>

                            <div class="uni-owl-two-item owl-carousel owl-theme">
                                <div class="item">
                                    <div class="uni-shortcode-testimonials-default">
                                        <div class="item-info">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-4">
                                                    <div class="item-info-img">
                                                        <img src="images/testimonial/img.png" alt="" class="img-responsive">
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-sm-8">
                                                    <div class="item-info-title">
                                                        <h4>amanda smith</h4>
                                                        <p class="testimonial_subtitle">myopia patients</p>
                                                    </div>
                                                    <div class="uni-divider"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-caption">
                                            <p>
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                                turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="uni-shortcode-testimonials-default">
                                        <div class="item-info">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-4">
                                                    <div class="item-info-img">
                                                        <img src="images/testimonial/img1.png" alt="" class="img-responsive">
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-sm-8">
                                                    <div class="item-info-title">
                                                        <h4>amanda jonson</h4>
                                                        <p class="testimonial_subtitle">Broken bone</p>
                                                    </div>
                                                    <div class="uni-divider"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-caption">
                                            <p>
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                                turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="uni-shortcode-testimonials-default">
                                        <div class="item-info">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-4">
                                                    <div class="item-info-img">
                                                        <img src="images/testimonial/img.png" alt="" class="img-responsive">
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-sm-8">
                                                    <div class="item-info-title">
                                                        <h4>amanda smith</h4>
                                                        <p class="testimonial_subtitle">myopia patients</p>
                                                    </div>
                                                    <div class="uni-divider"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-caption">
                                            <p>
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                                turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="uni-shortcode-testimonials-default">
                                        <div class="item-info">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-4">
                                                    <div class="item-info-img">
                                                        <img src="images/testimonial/img1.png" alt="" class="img-responsive">
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-sm-8">
                                                    <div class="item-info-title">
                                                        <h4>amanda jonson</h4>
                                                        <p class="testimonial_subtitle">Broken bone</p>
                                                    </div>
                                                    <div class="uni-divider"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-caption">
                                            <p>
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                                turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <!--FAQ'S  and LASTEST POST-->
                <div class="uni-home-faq-latest-post">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="uni-home-faq">
                                    <div class="uni-home-title">
                                        <h3>Faq's</h3>
                                        <div class="uni-line"></div>
                                    </div>
                                    <div class="accordion-default">
                                        <div class="accordion-min-plus">
                                            <div class="accordion">
                                                <div class="accordion-item">
                                                    <h4 class="accordion-toggle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit?</h4>
                                                    <div class="accordion-content">
                                                        <p>
                                                            Pellentesque habitant morbi tristique senectus et netus et
                                                            malesuada fames ac turpis egestas. Vestibulum tortor quam,
                                                            feugiat vitae, ultricies eget, tempor sit amet, ante. Donec
                                                            eu libero sit amet quam egestas semper. Aenean ultricies
                                                            mi vitae est. Mauris placerat eleifend leo
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h4 class="accordion-toggle">Aliquam tincidunt mauris eu risus?</h4>
                                                    <div class="accordion-content">
                                                        <p>
                                                            Pellentesque habitant morbi tristique senectus et netus et
                                                            malesuada fames ac turpis egestas. Vestibulum tortor quam,
                                                            feugiat vitae, ultricies eget, tempor sit amet, ante. Donec
                                                            eu libero sit amet quam egestas semper. Aenean ultricies
                                                            mi vitae est. Mauris placerat eleifend leo
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h4 class="accordion-toggle">Vestibulum auctor dapibus neque?</h4>
                                                    <div class="accordion-content">
                                                        <p>
                                                            Pellentesque habitant morbi tristique senectus et netus et
                                                            malesuada fames ac turpis egestas. Vestibulum tortor quam,
                                                            feugiat vitae, ultricies eget, tempor sit amet, ante. Donec
                                                            eu libero sit amet quam egestas semper. Aenean ultricies
                                                            mi vitae est. Mauris placerat eleifend leo
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h4 class="accordion-toggle">cancer department</h4>
                                                    <div class="accordion-content">
                                                        <p>
                                                            Pellentesque habitant morbi tristique senectus et netus et
                                                            malesuada fames ac turpis egestas. Vestibulum tortor quam,
                                                            feugiat vitae, ultricies eget, tempor sit amet, ante. Donec
                                                            eu libero sit amet quam egestas semper. Aenean ultricies
                                                            mi vitae est. Mauris placerat eleifend leo
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h4 class="accordion-toggle">Morbi in sem quis dui placerat ornare?</h4>
                                                    <div class="accordion-content">
                                                        <p>
                                                            Pellentesque habitant morbi tristique senectus et netus et
                                                            malesuada fames ac turpis egestas. Vestibulum tortor quam,
                                                            feugiat vitae, ultricies eget, tempor sit amet, ante. Donec
                                                            eu libero sit amet quam egestas semper. Aenean ultricies
                                                            mi vitae est. Mauris placerat eleifend leo
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h4 class="accordion-toggle">Phasellus ultrices nulla quis nibh, Quisque a lectus?</h4>
                                                    <div class="accordion-content">
                                                        <p>
                                                            Pellentesque habitant morbi tristique senectus et netus et
                                                            malesuada fames ac turpis egestas. Vestibulum tortor quam,
                                                            feugiat vitae, ultricies eget, tempor sit amet, ante. Donec
                                                            eu libero sit amet quam egestas semper. Aenean ultricies
                                                            mi vitae est. Mauris placerat eleifend leo
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="uni-home-latest-post">
                                    <div class="uni-home-title">
                                        <h3>latest posts</h3>
                                        <div class="uni-line"></div>
                                    </div>
                                    <div class="uni-home-latest-post-body">
                                        <div class="item">
                                            <div class="item-img">
                                                <a href="#"><img src="images/home1/lastestpost/img2.png" alt="" class="img-responsive"></a>
                                            </div>
                                            <div class="item-caption">
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit?</a></h4>
                                                <span class="time">June 12, 2017</span>
                                            </div>
                                        </div>
                                        <div class="uni-divider"></div>
                                        <div class="item">
                                            <div class="item-img">
                                                <a href="#"><img src="images/home1/lastestpost/img3.png" alt="" class="img-responsive"></a>
                                            </div>
                                            <div class="item-caption">
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit?</a></h4>
                                                <span class="time">June 12, 2017</span>
                                            </div>
                                        </div>
                                        <div class="uni-divider"></div>
                                        <div class="item">
                                            <div class="item-img">
                                                <a href="#"><img src="images/home1/lastestpost/img4.png" alt="" class="img-responsive"></a>
                                            </div>
                                            <div class="item-caption">
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit?</a></h4>
                                                <span class="time">June 12, 2017</span>
                                            </div>
                                        </div>
                                        <div class="uni-divider"></div>
                                        <div class="item">
                                            <div class="item-img">
                                                <a href="#"><img src="images/home1/lastestpost/img5.png" alt="" class="img-responsive"></a>
                                            </div>
                                            <div class="item-caption">
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit?</a></h4>
                                                <span class="time">June 12, 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <!--MAP-->
                <div class="uni-home-map">
                    <div class="uni-about-map">
                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.355677596112!2d-0.13052618407551403!3d50.82457546821709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875859878db2cc7%3A0xff129250121f260d!2s45+Queen's+Park+Rd%2C+Brighton+BN2+0GJ%2C+V%C6%B0%C6%A1ng+Qu%E1%BB%91c+Anh!5e0!3m2!1svi!2s!4v1514436176997"  height="700" style="border:0" ></iframe>
                        {{-- https://www.google.com/maps/d/u/4/embed?mid=13TlrWxQ3LaSxQqXM_cI-tigs4-nPn64h --}}
                    </div>
                </div>


            </section>
        </div>

        <footer class="site-footer footer-default">
            <div class="footer-main-content">
                <div class="container">
                    <div class="row">
                        <div class="footer-main-content-elements">
                            <div class="footer-main-content-element col-md-3 col-sm-6">
                                <aside class="widget">
                                    <div class="widget-title uni-uppercase"><a href="#"><img src="images/logowhite.png" alt="" class="img-responsive"></a></div>
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
                                                <li><a href="#"><span>+</span> About</a></li>
                                                <li><a href="#"><span>+</span> Services</a></li>
                                                <li><a href="#"><span>+</span> Doctor</a></li>
                                                <li><a href="#"><span>+</span> Shop</a></li>
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
                                <p class="copyright-text"> <a href="templateshub.net">Templateshub</a></p>
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
<script src="template/user/plugin/jquery/jquery-2.0.2.min.js"></script>
<script src="template/user/plugin/jquery-ui/jquery-ui.min.js"></script>
<script src="template/user/plugin/bootstrap/js/bootstrap.js"></script>
<script src="template/user/plugin/process-bar/tox-progress.js"></script>
<script src="template/user/plugin/waypoint/jquery.waypoints.min.js"></script>
<script src="template/user/plugin/counterup/jquery.counterup.min.js"></script>
<script src="template/user/plugin/owl-carouse/owl.carousel.min.js"></script>
<script src="template/user/plugin/jquery-ui/jquery-ui.min.js"></script>
<script src="template/user/plugin/mediaelement/mediaelement-and-player.js"></script>
<script src="template/user/plugin/masonry/masonry.pkgd.min.js"></script>
<script src="template/user/plugin/datetimepicker/moment.min.js"></script>
<script src="template/user/plugin/datetimepicker/bootstrap-datepicker.min.js"></script>
<script src="template/user/plugin/datetimepicker/bootstrap-datepicker.tr.min.js"></script>
<script src="template/user/plugin/datetimepicker/bootstrap-datetimepicker.js"></script>
<script src="template/user/plugin/datetimepicker/bootstrap-datetimepicker.fr.js"></script>

<script src="template/user/plugin/lightgallery/picturefill.min.js"></script>
<script src="template/user/plugin/lightgallery/lightgallery.js"></script>
<script src="template/user/plugin/lightgallery/lg-pager.js"></script>
<script src="template/user/plugin/lightgallery/lg-autoplay.js"></script>
<script src="template/user/plugin/lightgallery/lg-fullscreen.js"></script>
<script src="template/user/plugin/lightgallery/lg-zoom.js"></script>
<script src="template/user/plugin/lightgallery/lg-hash.js"></script>
<script src="template/user/plugin/lightgallery/lg-share.js"></script>
<script src="template/user/plugin/sticky/jquery.sticky.js"></script>

<script src="template/user/js/main.js"></script>
</body>

</html>

