<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Mosaddek">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!--favicon and touch icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" href="{{asset('/home/assets/img/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/home/assets/img/favicon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/home/assets/img/favicon-114x114.png')}}">

    <!--site title-->
    <title>Simple Shop</title>
    <!--web font-->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">

    <!--bootstrap-->
    <link href="{{asset('home/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--icon font-->
    <link href="{{asset('home/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('home/assets/vendor/bicon/css/bicon.css')}}" rel="stylesheet">

    <!--woocommerce css-->
    <!--<link rel="stylesheet" href="assets/css/woocommerce-prev.css">-->

    <link rel="stylesheet" href="{{asset('home/assets/css/woocommerce-layouts.css')}}">
    <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='{{asset('/home/assets/css/woocommerce-small-screen.css')}}' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel="stylesheet" href="{{asset('home/assets/css/woocommerce.css')}}">

    <!--custom css-->
    <link href="{{asset('home/assets/css/main.css')}}" rel="stylesheet">
    @stack('header-js')
</head>
<body class="archive  woocommerce">

<<!--header start-->
<header class="app-header" id="cart-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg mainmenu">
                    <!--logo-->
                    <a class="navbar-brand mr-5 text-dark float-left" href="{{route('home')}}">
                        <img class="" src="{{asset('/home/assets/img/logo.png')}}" srcset="assets/img/logo@2x.png 2x" alt=""/>
                    </a>
                    <!--logo-->

                    <!--responsive toggle icon-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fa fa-bars"> </i>
                            </span>
                    </button>
                    <!--responsive toggle icon-->

                    <!--search start-->
                    <div id="form-search" class="form-search">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button id="form-search-close-btn" class="btn" type="button">
                                    <span class="svg svg--cross">
                                        <svg class="svg__icon" width="32px" height="32px" viewBox="0 0 32 32">
                                            <path d="M16.7,16L31.9,0.9c0.2-0.2,0.2-0.5,0-0.7s-0.5-0.2-0.7,0L16,15.3L0.9,0.1C0.7,0,0.3,0,0.1,0.1S0,0.7,0.1,0.9L15.3,16
                                            L0.1,31.1c-0.2,0.2-0.2,0.5,0,0.7C0.2,32,0.4,32,0.5,32s0.3,0,0.4-0.1L16,16.7l15.1,15.1c0.1,0.1,0.2,0.1,0.4,0.1s0.3,0,0.4-0.1
                                            c0.2-0.2,0.2-0.5,0-0.7L16.7,16z"/>
                                        </svg>
                                    </span>
                                </button>
                            </span>
                        </div>
                    </div>
                    <!--search end-->
                    <!--nav link-->
                    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <ul id="menu" class="navbar-nav ml-auto">
                            <li class=""><a href="{{route('home')}}" class="" >Home</a></li>
                            <li class=""><a href="product-list-filter.html" class="" >Shop List</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product Single Layouts</a>
                                        <ul class="dropdown-menu" >
                                            <li><a href="product-single-on-sale.html">Product Single - On Sale </a></li>
                                            <li><a href="product-single-group.html">Product Single - Group</a></li>
                                            <li><assets/css/woocommerce-layouts.css="dropdown-menu" >
                                            <li><a href="cart.html">Cart </a></li>
                                            <li><a href="checkout.html">Checkout </a></li>
                                            <li><a href="order-process.html">Order Process </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                                        <ul class="dropdown-menu" >
                                            <li><a href="my-account-dashbord.html">My Account - Dashboard </a></li>
                                            <li><a href="my-account-order.html">My Account - Order </a></li>
                                            <li><a href="my-account-downloads.html">My Account - Downloads </a></li>
                                            <li><a href="my-account-ac-details.html">My Account - Account Details </a></li>
                                            <li><a href="login-registration.html">Login / Registration </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="error.html">404 Error</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="#" class="" id="search-icon"><i class="fa fa-search"></i></a></li>
                            <li><a href="#" class="" ><i class="fa fa-user"></i></a></li>
                            <!--<li><a href="#" class="" ><i class="fa fa-shopping-basket"></i></a></li>-->
                            <li class="dropdown mini-cart">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-basket"></i><span class="cart-quantity-highlighter">2</span></a>
                                <ul class="dropdown-menu dropdown-menu-right widget_shopping_cart_content woocommerce-mini-cart cart_list product_list_widget ">
                                    <li class="woocommerce-mini-cart-item mini_cart_item" v-for="(product, index) in products" :key="index">
                                        <a href="#" class="remove remove_from_cart_button" aria-label="Remove this item" @click="removeCartProduct(product.product_id)">×</a>													<a class="mini_cart_item-image" href="#">
                                        <img :src="product.product.product_image" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">							</a>
                                        <div class="mini_cart_item-desc">
                                            <a class="font-titles" href="#">@{{ product.product.product_title }}</a>


                                            <span class="quantity">1 × <span class="woocs_special_price_code"><span class="woocommerce-Price-amount amount">@{{ product.price }}<span class="woocommerce-Price-currencySymbol">$</span></span></span></span>
                                        </div>
                                    </li>

                                    <li class="woocommerce-mini-cart-item mini_cart_item">
                                        <div class="woocomerce-mini-cart__container">
                                            <p class="woocommerce-mini-cart__total total"><strong>Subtotal:</strong> <span class="woocs_special_price_code"><span class="woocommerce-Price-amount amount">@{{ products.reduce((total, item) => total + parseFloat(item.price), 0) }}<span class="woocommerce-Price-currencySymbol">$</span></span></span></p>
                                            <p class="woocommerce-mini-cart__buttons buttons">
                                                <a href="#" class="button wc-forward">View cart</a>
                                                <a href="#" class="button checkout wc-forward">Checkout</a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>

                            </li>
                        </ul>

                    </div>
                    <!--nav link-->


                </nav>



            </div>
        </div>
    </div>

</header>
<!--header end-->

@yield('content')

<footer class="space-2 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-md-0 mb-4">
                <img class="footer-logo" src="{{asset('/home/assets/img/logo.png')}}" srcset="assets/img/logo@2x.png 2x" alt="">
            </div>
            <div class="col-md-4  mb-md-0 mb-4">
                <div class="social-links">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <p class="mb-0">Built with Simple Shop & WooCommerce</p>
                <p class="mb-0">© YourCompany 2019</p>
            </div>
        </div>
    </div>
</footer>

<!--scripts-->
<script src="{{asset('home/assets/vendor/jquery.min.js')}}"></script>
<script src="{{asset('home/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{'home/assets/vendor/popper.min.js'}}"></script>

<!--init scripts-->
<script src="{{asset('home/assets/js/scripts.js')}}"></script>
<script src="{{asset('qbadminui/js/vue.js')}}"></script>
<script src="{{asset('qbadminui/js/axios.min.js')}}"></script>
<script src="{{asset('qbadminui/js/toastr.min.js')}}"></script>



<script>
    let headerCart = new Vue({
        el: '#cart-header',
        name: 'CartHeader',
        data(){
           return {
               products: []
           }
        } ,

        methods: {
            getCartProducts(){
                let cartProductUrl = '/api/v1/cart';
                axios.get(cartProductUrl).then(response => {
                    if(response.status === 200){
                        console.log(response.data);
                        this.products = response.data;
                    }
                })
            },
            removeCartProduct(product_id){
                let productRemoveUrl = '/api/v1/cart/' + product_id;
                axios.delete(productRemoveUrl).then(response => {
                    if(response.status === 200){
                        console.log(response.data);
                        this.getCartProducts();
                    }
                })
            }
        },
        mounted(){
            window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
            this.getCartProducts();
            console.log('called');
        }
    })
</script>
@stack('footer-js')

</body>
</html>
