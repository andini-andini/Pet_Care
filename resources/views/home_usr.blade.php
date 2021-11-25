@extends('layouts.user')

@section('container', 'uni-home-1')

@section('content')

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

    <!--ABOUT-->
    <div class="uni-home-1-our-doctor" id="about">
        <div class="uni-shortcode-team-2 uni-background-2">
            <div class="container">

                <div class="uni-home-title">
                    <h3>About</h3>
                    <div class="uni-underline"></div>
                    <br><br><br>
                    <div class="text-center">
                        <p style="color: white">Sejak 2021, PetCare hadir untuk melayani setiap
                            customer
                            secara online.
                            PetCare
                            selalu berusaha untuk melayani segala kebutuhan hewan peliharaan anda.
                            Kami akan selalu memberikan informasi secara maksimal serta selalu
                            menyediakan
                            produk-produk terbaik dengan aneka macam pilihan varian.
                        </p>
                        <br>
                        <p style="color: white">
                            Visi dan misi kami adalah menjadikan PetCare pilihan utama anda dalam
                            memenuhi
                            segala kebutuhan hewan peliharaan anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--DEPARTMENT-->
    <div class="uni-hơm-1-department" id="service">
        <div class="container">
            <div class="uni-home-title">
                <h3>Service</h3>
                <div class="uni-underline"></div>
            </div>
            <div class="uni-shortcode-icon-box-1">
                <div class="row">
                    @foreach ($service as $service)
                        <div class="col-md-4 col-sm-6">
                            <div class="uni-shortcode-icon-box-1-default">
                                <div class="item-icons">
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="" class="img-responsive">
                                </div>
                                <div class="item-caption">
                                    <h4>{{ $service->name }}</h4>
                                    <p>Rp. {{ $service->price }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <!--OUR DOCTOR-->
    <div class="uni-home-1-our-doctor" id="doctor">
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
                                    <img src="{{ asset('storage/' . $doctor->image) }}" alt="" class="img-responsive">
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


    <!--MAP-->
    <div class="uni-home-map">
        <div class="uni-about-map">
            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5043929586145!2d112.6134797145312!3d-7.946713594276082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827687d272e7%3A0x789ce9a636cd3aa2!2sState%20Polytechnic%20of%20Malang!5e0!3m2!1sen!2sid!4v1636339902985!5m2!1sen!2sid"
                height="700" style="border:0"></iframe>
            {{-- https://www.google.com/maps/d/u/4/embed?mid=13TlrWxQ3LaSxQqXM_cI-tigs4-nPn64h --}}
        </div>
    </div>

@endsection
