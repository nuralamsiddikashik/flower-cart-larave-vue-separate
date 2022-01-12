   <!--product section start-->
   <section class="space-3 space-adjust">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="section-title text-center">
                    <h2 class="title ">New Arrival</h2>
                    <div class="sub-title">37 New fashion products arrived recently in our showroom for this
                        winter
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <ul class="products columns-3">
                    @foreach ($products as $product_item)
                        <li class="product">
                            <div class="product-wrap">
                                <a href="{{route('single-product', $product_item->product_slug)}}" class="">
                                    <img src="{{asset($product_item->product_image)}}" alt="">
                                </a>
                                <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                                    <i class="fa fa-shopping-basket"></i>
                                </a>
                            </div>
                            <div class="woocommerce-product-title-wrap">
                                <h2 class="woocommerce-loop-product__title">
                                    <a href="#">{{$product_item->product_title}}</a>
                                </h2>
                                <a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <span class="onsale">Sale!</span>
                            <span class="price">
                                <del>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                        {{$product_item->cost_price}}
                                    </span>
                                </del>
                                <ins>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                        {{$product_item->selling_price}}
                                    </span>
                                </ins>

                            </span>
                        </li>
                    @endforeach
                  
                   
                    <!--default woocommerce markup-->
                    <!--<li class="product">
                        <a href="#" class="#">
                            <img src="assets/img/p12.jpg" alt="">
                            <h2 class="woocommerce-loop-product__title">Vneck Tshirt</h2>

                            <span class="price">
                                <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>18.00</span>
                            </span>
                        </a>
                        <a href="#" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="38" data-product_sku=""
                               aria-label="Add “Vneck Tshirt” to your cart" rel="nofollow">
                            Add to cart
                        </a>
                    </li>-->
                </ul>
                <a href="#" class="view-all-product mt-md-5">View All Products</a>
            </div>

        </div>
    </div>
</section>
<!-- product section end-->