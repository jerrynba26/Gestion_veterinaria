@extends('layouts.plantilla')

@section('content')

<!--::breadcrumb part start::-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h1>Productos</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::breadcrumb part start::-->
<!-- Start Sample Area -->

<section class="my-5">
    <div class="container">
        <div class="row">
        
            @foreach ($products as $product)
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-thumb">
                        <img class="img-responsive" src="{{asset('image/'.$product->file)}}" alt="product-img" />
                        <div class="preview-meta">
                            <ul>
                                <li>
                                    <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="tf-ion-android-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><b>{{$product->name}}</b></h4>
                        <p class="price"><b>$ {{$product->price}}.00</b></p>
                        {{-- Botón PayPal --}}
                        <div class="text-center">
                            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="business" value="jerrynba26@gmail.com">
                                <input type="hidden" name="lc" value="AL">
                                <input type="hidden" name="item_name" value="{{$product->name}}">
                                {{-- <input type="hidden" name="item_number" value="BZM001"> --}}
                                <input type="hidden" name="amount" value="{{$product->price}}">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="hidden" name="button_subtype" value="products">
                                <input type="hidden" name="no_note" value="0">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif"
                                    border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"
                                    width="1" height="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Align Area -->

@endsection