<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History Pemesanan</title>
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
                                    {{-- <div class="caption">
                                        <h1>Let's protect your pet's health</h1>
                                        <p>
                                            Pet health has an important role in increasing production
                                            <br>
                                            and productivity as well as protecting you
                                        </p>
                                        <a href="#">APPOINTMENT</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="uni-banner-img uni-background-6"></div>
                            <div class="content animated" data-animation="flipInX" data-delay="0.9s">
                                <div class="container">
                                    {{-- <div class="caption">
                                        <h1>Let's protect your pet's health</h1>
                                        <p>
                                            Pet health has an important role in increasing production
                                            <br>
                                            and productivity as well as protecting you
                                        </p>
                                        <a href="#">APPOINTMENT</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="uni-banner-img uni-background-7"></div>
                            <div class="content animated" data-animation="flipInX" data-delay="0.9s">
                                <div class="container">
                                    {{-- <div class="caption">
                                        <h1>Let's protect your pet's health</h1>
                                        <p>
                                            Pet health has an important role in increasing production
                                            <br>
                                            and productivity as well as protecting you
                                        </p>
                                        <a href="#">APPOINTMENT</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--OPENING HOURS AND BOOK APPOINTMENT-->
                <div class="uni-home-opening-book">
                    <div class="container">
                        <div class="uni-home-opening-book-content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card shadow">
                                        <div class="card-header">
                                            Riwayat Pemesanan
                                        </div>
                                        <div class="container-fluid">
                                            <div class="row mb-4">
                                                <div class="col-12">
                                                    {{-- <a href="{{route('service.create')}}" class="btn btn-success">Input</a> --}}
                                                </div>
                                            </div>
                                        <div class="card-body">
                                            <table id="table-users" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>Kode Pemesanan</th>
                                                        <th>Nama User</th>
                                                        <th>Hewan</th>
                                                        <th>Service</th>
                                                        <th>Harga</th>
                                                        <th>Booking</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>


                                            @foreach ($pemesanan as $pemesanan)
                                                <tr class="text-center">

                                                    <td>{{ $pemesanan->code }}</td>
                                                    <td>{{ $pemesanan->user->name }}</td>
                                                    <td>{{ $pemesanan->hewan }}</td>
                                                    <td>{{ $pemesanan->service->name }}</td>
                                                    <td>Rp. {{ $pemesanan->service->price }}</td>
                                                    <td>{{ $pemesanan->booking }}</td>
                                                    <td>
                                                        <?php
                                                            if ($pemesanan->status == 1) {
                                                                echo "verified";
                                                            }else if($pemesanan->status == 0){
                                                                echo "unverified";
                                                            }
                                                        ?>

                                                    </td>
                                                    {{-- <td>{{ $pemesanan->Status }}</td> --}}

                                                    {{-- <td>
                                                        <form action="/wildan" method="POST">
                                                            @csrf
                                                            <input type="hidden" value="{{$pemesanan->id}}" id="id" name="id">
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td> --}}
                                                    <td>
                                                        <a class="btn btn-primary" href="{{ route('pemesanan.edit',$pemesanan->id) }}">Edit</a>
                                                        {{-- <form action="{{ route('doctor.destroy',$pemesanan->id) }}" method="POST">
                                                            @csrf @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form> --}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

