<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemesanan</title>
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
                                    <a class="logo-default" href="{{ route('home') }}"><img src="{{ asset('template/user') }}/images/logo.png" alt="" class="img-responsive"></a>
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
                </div>
            </div>
        </header>

        <div id="main-content" class="site-main-content">
            <section class="site-content-area">
                <div class="uni-banner-default uni-background-1">
                    <div class="container">
                        <!-- Page title -->
                        <div class="page-title">
                            <div class="page-title-inner">
                                {{-- <h1>shop</h1> --}}
                            </div>
                        </div>
                        <!-- End page title -->

                    </div>
                </div>
            </section>
        </div>

        <div>
            <br><br><br><br><br><br><br><br>
        </div>

        <div id="main-content" class="site-main-content">
            <section class="site-content-area">
                <!--OPENING HOURS AND BOOK APPOINTMENT-->
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

                                        <form action="{{route('pemesanan.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-5">
                                                    {{-- <div class="input-group form-group">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name')}}" placeholder="Enter name">

                                                        @error('name')
                                                        <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                    </div> --}}
                                                    <div class="input-group form-group">
                                                        <span class="input-group-addon"><i class="fa fa-paw" aria-hidden="true"></i></span>
                                                        <select name="hewan" id="hewan" class="form-control @error('hewan') is-invalid @enderror"
                                                            name="hewan" value="{{ old('hewan') }}" autocomplete="hewan">
                                                            <option value="" disabled selected>choose your pet</option>
                                                            <option value="Cat">Cat</option>
                                                            <option value="Dog">Dog</option>
                                                        </select>
                                                        <i class="zmdi zmdi-caret-down"></i>
                                                    </div>
                                                    <div class="input-group form-group">
                                                        <span class="input-group-addon"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                                                        <select name="service" id="service" class="form-control @error('service') is-invalid @enderror"
                                                            name="service" value="{{ old('service') }}" autocomplete="service">
                                                            @foreach ($service as $service)
                                                            <option value="" disabled selected>choose your Service</option>
                                                            <option value="{{$service->id}}">{{$service->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <i class="zmdi zmdi-caret-down"></i>
                                                    </div>
                                                    {{-- <div class="input-group form-group">
                                                        <div class="input-group date date-check-in" data-date="12-02-2017" data-date-format="mm-dd-yyyy">
                                                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                            <input name="date1" class="form-control" type="text" value="12-02-2017">
                                                            <span class="input-group-addon btn"><i class="fa fa-calendar" id="ti-calendar1" aria-hidden="true"></i></span>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="input-group form-group">
                                                        {{-- <div class="input-group date date-check-in" data-date="today" data-date-format="dd-mm-yyyy">
                                                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                            <input name="date1" class="form-control" type="text" value="12-02-2017">
                                                            <span class="input-group-addon btn"><i class="fa fa-calendar" id="ti-calendar1" aria-hidden="true"></i></span>

                                                            @error('booking')
                                                            <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div> --}}
                                                        <div class="input-group form-group">
                                                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                            <input type="date" name="booking" id="booking" placeholder="dd-mm-yyyy"
                                                                pattern="(?:30))|(?:(?:0[13578]|1[02])-31))/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])"
                                                                class="form-control">
                                                            {{-- <input type="date" placeholder="booking" id="booking" class="form-control"> --}}
                                                            {{-- <i class="zmdi zmdi-calendar"></i> --}}
                                                        </div>
                                                        @error('booking')
                                                            <small style="color: red">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="vk-btn vk-btn-send">send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div>
            <br><br>
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
<script src="{{ asset('template/user') }}/plugin/jquery/jquery-2.0.2.min.js"></script>
<script src="{{ asset('template/user') }}/plugin/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ asset('template/user') }}/plugin/bootstrap/js/bootstrap.js"></script>
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

</html>

