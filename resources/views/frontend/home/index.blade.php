@extends('frontend')
@section('content')
<main class="site-main">
  
    @include('frontend.home.category.category')
    @include('frontend.home.product.product')
    @include('frontend.home.promo.promo')
    @include('frontend.home.popular-product.popular')

    <!--offer section start-->
    <section class="space-3 space-adjust">
        <div class="container ">
            <div class="row no-gutters text-center">
                <div class="col-md-4">
                    <div class="offer-box border p-5">
                        <i class="bi bi-delivery-van"></i>
                        <h5 class="font-weight-bold mt-3 mb-0">Free Shipping</h5>
                        <p class="mb-0">On all order over $39.00</p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="offer-box border p-5 border-adjust">
                        <i class="bi bi-delivery-van"></i>
                        <h5 class="font-weight-bold mt-3 mb-0">30 Days Return</h5>
                        <p class="mb-0">Money back Guarantee</p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="offer-box border p-5">
                        <i class="bi bi-delivery-van"></i>
                        <h5 class="font-weight-bold mt-3 mb-0">Secure Checkout</h5>
                        <p class="mb-0">100% Protected by paypal</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--offer section end-->

    <!--flickr section start-->
    <section class="">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="section-title text-center">
                        <h2 class="title ">Simple Shop on Flickr</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="flickr-list">
            <a href="#" style="background-image: url('assets/img/s1.jpg')"></a>
            <a href="#" style="background-image: url('assets/img/sb.jpg')"></a>
            <a href="#" style="background-image: url('assets/img/s2.jpg')"></a>
            <a href="#" style="background-image: url('assets/img/s3.jpg')"></a>
            <a href="#" style="background-image: url('assets/img/s4.jpg')"></a>
            <a href="#" style="background-image: url('assets/img/s5.jpg')"></a>
        </div>
    </section>
    <!-- flickr section end-->
</main>

@endsection