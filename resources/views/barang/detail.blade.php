@extends('layouts.user')

@section('content')

    <div id="main-content" class="site-main-content">
        <div class="site-content-area">

            <div class="uni-banner-default uni-background-1">
                <div class="container">
                    <!-- Page title -->
                    <div class="page-title">
                        @foreach ($barang as $brg)
                            <div class="page-title-inner">
                                <h1>{{ $brg->name }}</h1>
                            </div>
                        @endforeach
                    </div>
                    <!-- End page title -->
                </div>
            </div>
        </div>
        <br><br>
        <main id="main" class="site-main">
            <div class="uni-single-product-body">
                <div class="container">
                    <div id="content">
                        <div class="row">
                            <div class="col-md-3">


                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="uni-single-product-right">
                            @foreach ($barang as $brg)
                                <div id="product">
                                    <div class="product-info">
                                        <div class="row">
                                            <div class="col-sm-6 left image-panel">
                                                <div id="carousel" class="flexslider thumbnail_product">
                                                    <div id="slider" class="flexslider">
                                                        <div class="product-slide">
                                                            <div class="img-slide">
                                                                <img src="{{ asset('storage/' . $brg->image) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 right">
                                                <h1 class="product_title entry-title">{{ $brg->name }}</h1>

                                                <br>
                                                <p class="price">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">Rp</span>
                                                        {{ $brg->price }}
                                                    </span>
                                                </p>
                                                <div class="description">
                                                    <p>{!! $brg->deskripsi !!}</p>
                                                </div>
                                                <!-- .description -->

                                                <form class="cart" method="post"
                                                    action="{{ route('cart.store') }}">
                                                    @csrf
                                                    <input type="hidden" value="{{ $brg->id }}" name="barang_id">
                                                    <div class="quantity">
                                                        <div class="form-group">
                                                            <label>Quantity:</label>
                                                            <input type="number" class="form-control qty" id="pwd" min="0"
                                                                name="qty" value="1">
                                                        </div>
                                                    </div>
                                                    <button type="submit" name="add-to-cart"
                                                        class="single_add_to_cart_button button alt">Add
                                                        to cart</button>
                                                    <div class="clearfix"></div>
                                                </form>

                                                <div class="product_meta">
                                                    <span class="posted_in">Category :
                                                        <a>{{ $brg->categori->name }}</a>
                                                    </span>
                                                    <br><br>
                                                    <span class="posted_in">Stok :
                                                        <a>{{ $brg->stok }}</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- .summary -->
                                        </div>
                                    </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div>
        <br><br>
    </div>

@endsection
