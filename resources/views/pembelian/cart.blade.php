@extends('layouts.user')

@section('container', 'uni-cart')

@section('content')

    <div class="uni-banner-default uni-background-1">
        <div class="container">
            <!-- Page title -->
            <div class="page-title">
                <div class="page-title-inner">
                    <h1>your cart</h1>
                </div>
            </div>
            <!-- End page title -->
        </div>
    </div>


    <main id="main" class="site-main">
        <div class="uni-cart-body">
            <div id="post" class="container">
                <div class="entry-content">
                    <div class="woocommerce">
                        <table class="woocommerce-cart-form__contents table shop_table_responsive">
                            <thead>
                                <tr>
                                    <th class="product-remove"></th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($cart as $cr)
                                    <tr class="woocommerce-cart-form__cart-item cart_item">
                                        <td class="product-remove">
                                            <form action="{{ route('cart.destroy', $cr->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="remove"><i class="fa fa-times-circle"
                                                        aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                        <td class="product-name">
                                            <span class="product-thumbnail">
                                                <a href="#">
                                                    <img src="{{ asset('storage/' . $cr->barang->image) }}" alt=""
                                                        class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image img-responsive">
                                                </a>
                                            </span>
                                            <a>{{ $cr->barang->name }}</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span
                                                    class="woocommerce-Price-currencySymbol">Rp</span>{{ $cr->barang->price }}
                                            </span>
                                        </td>
                                        <td class="product-quantity">
                                            <span class="woocommerce-Price-amount amount">{{ $cr->qty }}
                                            </span>
                                        </td>
                                        <td class="product-subtotal">
                                            <div class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">Rp</span>
                                                {{ $cr->total }}
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                        <div class="cart-collaterals">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="cart_totals">
                                        <h2>Cart totals</h2>
                                        <table class="shop_table shop_table_responsive">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Biaya Pengiriman</th>
                                                    <td><span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol">Rp</span>0</span>
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td><strong><span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">Rp
                                                                </span>{{ $total }}</span></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <form action="{{ route('pembelian.store') }}" method="POST">
                                            @csrf
                                            <div class="wc-proceed-to-checkout">
                                                <button type="submit" class="btn btn-primary">checkout</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
