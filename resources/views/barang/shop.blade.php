@extends('layouts.user')

@section('content')

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
                                                    <li><a href="{{ route('barang.index') }}"><i class="fa fa-angle-right"
                                                                aria-hidden="true"></i>ALL</a></li>
                                                    @foreach ($categori as $categori)
                                                        <li><a href="{{ route('categori.show', $categori->id) }}"><i
                                                                    class="fa fa-angle-right"
                                                                    aria-hidden="true"></i>{{ $categori->name }}</a>
                                                        </li>
                                                    @endforeach
                                                    {{-- <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Makanan Anjing</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Makanan Kucing</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Obat</a></li> --}}
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
                                                @foreach ($barang as $brg)
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="product-item">
                                                            <ul class="category-product">
                                                                <li>
                                                                    <div class="wrapper">
                                                                        <div class="feature-image">
                                                                            <a
                                                                                href="{{ route('barang.show', $brg->id) }}"><img
                                                                                    class="wp-post-image img-responsive"
                                                                                    src="{{ asset('storage/' . $brg->image) }}"
                                                                                    alt=""></a>
                                                                        </div>
                                                                        <!-- .feature-image -->

                                                                        <div class="stats">
                                                                            <div class="box-title">
                                                                                <h2 class="title-product">
                                                                                    <a href="{{ route('barang.show', $brg->id) }}"
                                                                                        class="product_name">{{ $brg->name }}</a>
                                                                                </h2>
                                                                                <!-- .title-product -->
                                                                            </div>
                                                                            <!-- .box-title -->
                                                                            <div class="price-add-cart">
                                                                                {{-- <div class="vote-star">
                                                                                            <ul>
                                                                                                <li><i class="fa fa-star"
                                                                                                        aria-hidden="true"></i>
                                                                                                </li>
                                                                                                <li><i class="fa fa-star"
                                                                                                        aria-hidden="true"></i>
                                                                                                </li>
                                                                                                <li><i class="fa fa-star"
                                                                                                        aria-hidden="true"></i>
                                                                                                </li>
                                                                                                <li><i class="fa fa-star"
                                                                                                        aria-hidden="true"></i>
                                                                                                </li>
                                                                                                <li><i class="fa fa-star-o"
                                                                                                        aria-hidden="true"></i>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div> --}}
                                                                                <div class="box-price">
                                                                                    <span class="price">
                                                                                        <span
                                                                                            class="woocommerce-Price-amount amount">
                                                                                            <span
                                                                                                class="woocommerce-Price-currencySymbol">Rp.
                                                                                            </span>
                                                                                            {{ $brg->price }}
                                                                                        </span>
                                                                                    </span>
                                                                                </div>

                                                                                {{-- <div class="box-add">
                                                                                            <a href="06_03_cart.html">Add
                                                                                                to cart</a>
                                                                                        </div> --}}
                                                                                <div class="clearfix">
                                                                                </div>
                                                                            </div>
                                                                            <!-- .box-price -->
                                                                        </div>
                                                                        <!-- .stats -->
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                @endforeach

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
                                                <li><a class="prev page-numbers" href="#"><i class="fa fa-angle-left"
                                                            aria-hidden="true"></i></a>
                                                </li>
                                                <li><a class="page-numbers current">1</a></li>
                                                <li><a class="page-numbers" href="#">2</a></li>
                                                <li><a class="page-numbers" href="#">3</a></li>
                                                <li><a class="page-numbers" href="#">...</a></li>
                                                <li><a class="page-numbers" href="#">7</a></li>
                                                <li><a class="next page-numbers" href="#"><i class="fa fa-angle-right"
                                                            aria-hidden="true"></i></a></li>
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
    <div>
        <br><br>
    </div>

@endsection
