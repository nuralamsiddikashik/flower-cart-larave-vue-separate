@extends('frontend')
@section('content')

<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="font-weight-bold">Shopping Cart</h2>

                <nav class="woocommerce-breadcrumb">
                    <a href="#">Home</a>
                    <span class="breadcrumb-separator"> / </span>Cart
                </nav>
            </div>
        </div>
    </div>
</section>

    <main class="site-main" id="proceed-to-checkout">
        <section class="space-3">
            <div class="container">
                <div class="row">
                    <section id="primary" class="content-area col-lg-12">
                        <main id="main" class="site-main" role="main">
                            <article id="post-8" class="post-8 page type-page status-publish hentry">
                                <!--<header class="entry-header">-->
                                    <!--<h1 class="entry-title">Checkout</h1>	-->
                                <!--</header>-->
                                <div class="entry-content">
                                    <div class="woocommerce">
                                        <div class="woocommerce-notices-wrapper"></div>
                                        <div class="woocommerce-form-coupon-toggle">
                                        <div class="woocommerce-info">
                                            Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a>
                                        </div>
                                    </div>

                                        <form class="checkout_coupon woocommerce-form-coupon" method="post">

                                            <p>If you have a coupon code, please apply it below.</p>

                                            <p class="form-row form-row-first">
                                                <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="">
                                            </p>

                                            <p class="form-row form-row-last">
                                                <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                                            </p>

                                            <div class="clear"></div>
                                        </form>
                                        <div class="woocommerce-notices-wrapper"></div>

                                        <div class="row checkout woocommerce-checkout">
                                            <div class="col-md-7">
                                                <div class="col2-set" id="customer_details">
                                                    <div class="col-12">
                                                        <div class="woocommerce-billing-fields">
                                                            <h3>Billing details</h3>

                                                            <div class="woocommerce-billing-fields__field-wrapper">
                                                                <p class="form-row form-row-first form-group validate-required" id="billing_first_name_field" data-priority="10">
                                                                    <label for="billing_first_name" class="control-label">First name&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                                    <span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="input-text form-control input-lg" v-model="firstName">
                                                                </span>
                                                                </p>
                                                                <p class="form-row form-row-last form-group validate-required" id="billing_last_name_field" data-priority="20">
                                                                    <label for="billing_last_name" class="control-label">
                                                                        Last name&nbsp;<abbr class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="input-text form-control input-lg" v-model="lastName" placeholder="Last Name" >
                                                                </span>
                                                                </p>
                                                                <p class="form-row form-row-wide form-group" id="billing_company_field" data-priority="30">
                                                                    <label for="billing_company" class="control-label">Company name&nbsp;<span class="optional">(optional)</span></label>
                                                                    <span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="input-text form-control input-lg" v-model="company">
                                                                </span>
                                                                </p>

                                                                <p class="form-row form-row-wide address-field form-group validate-required" id="billing_address_1_field" data-priority="50">
                                                                    <label for="billing_address_1" class="control-label">Street address&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                                    <span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="input-text form-control input-lg" v-model="address1">
                                                                </span>
                                                                </p>
                                                                <p class="form-row form-row-wide address-field form-group" id="billing_address_2_field" data-priority="60">
                                                                    <label for="billing_address_2" class="control-label">Apartment,
                                                                        suite, unit etc. (optional)&nbsp;<span class="optional">(optional)</span></label>
                                                                    <span class="woocommerce-input-wrapper">
                                                                    <input type="text" class="input-text form-control input-lg" v-model="address2" placeholder="Apartment, suite, unit etc. (optional)" ></span>
                                                                </p>
                                                                <p class="form-row form-row-wide address-field form-group validate-required" id="billing_city_field" data-priority="70" data-o_class="form-row form-row-wide address-field form-group validate-required">
                                                                    <label for="billing_city" class="control-label">Town / City&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                                    <span class="woocommerce-input-wrapper"><input type="text" class="input-text form-control input-lg" v-model="city"></span>
                                                                </p>

                                                                <p class="form-row form-row-wide address-field form-group validate-postcode" id="billing_postcode_field" data-priority="90" data-o_class="form-row form-row-wide address-field form-group validate-postcode">
                                                                    <label for="billing_postcode" class="control-label">Postcode
                                                                        / ZIP&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper">
                                                                <input type="text" class="input-text form-control input-lg" v-model="postcode"></span>
                                                                </p>
                                                                <p class="form-row form-row-wide form-group validate-required validate-phone" id="billing_phone_field" data-priority="100">
                                                                    <label for="billing_phone" class="control-label">Phone&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                                    <span class="woocommerce-input-wrapper"><input type="tel" class="input-text form-control input-lg" v-model="phone"></span>
                                                                </p>
                                                                <p class="form-row form-row-wide form-group validate-required validate-email" id="billing_email_field" data-priority="110">
                                                                    <label for="billing_email" class="control-label">Email address&nbsp;<abbr class="required" title="required">*</abbr></label>
                                                                    <span class="woocommerce-input-wrapper"><input type="email" class="input-text form-control input-lg" v-model="email"></span></p>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-12">
                                                        <div class="woocommerce-shipping-fields">
                                                        </div>
                                                        <div class="woocommerce-additional-fields">
                                                            <h3>Additional information</h3>
                                                            <div class="woocommerce-additional-fields__field-wrapper">
                                                                <p class="form-row notes" id="order_comments_field" data-priority=""><label for="order_comments" class="control-label">Order notes&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><textarea name="order_comments" class="input-text form-control input-lg" id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea></span></p>					</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <h3 id="order_review_heading">Your order</h3>
                                                <div id="order_review" class="woocommerce-checkout-review-order">
                                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                                        <thead>
                                                        <tr>
                                                            <th class="product-name">Product</th>
                                                            <th class="product-total">Total</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="cart_item" v-for="(product, index) in products" :key="index">
                                                            <td class="product-name">
                                                                @{{ product.product.product_title }}
                                                                <strong class="product-quantity">× @{{ parseInt(product.quantity) }}</strong>													</td>
                                                            <td class="product-total">
                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span>@{{ product.quantity * product.price }}</span>						</td>
                                                        </tr>

                                                        </tbody>
                                                        <tfoot>

                                                        <tr class="cart-subtotal">
                                                            <th>Subtotal</th>
                                                            <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span>@{{ products.reduce((total, item) => total + (parseFloat(item.price) * parseFloat(item.quantity)), 0) }}</span></td>
                                                        </tr>

                                                        <tr class="order-total">
                                                            <th>Total</th>
                                                            <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span>@{{ products.reduce((total, item) => total + (parseFloat(item.price) * parseFloat(item.quantity)), 0) }}</span></strong> </td>
                                                        </tr>
                                                        </tfoot>
                                                    </table>

                                                    <div id="payment" class="woocommerce-checkout-payment">
                                                        <ul class="wc_payment_methods payment_methods methods">
                                                            <li class="wc_payment_method payment_method_cod">
                                                                <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" checked="checked" data-order_button_text="" style="display: none;">

                                                                <label for="payment_method_cod">
                                                                    Cash on delivery 	</label>
                                                                <div class="payment_box payment_method_cod">
                                                                    <p>Pay with cash upon delivery.</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="form-row place-order">
                                                            <noscript>
                                                                Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.			<br/>
                                                                <button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals">Update totals</button>
                                                            </noscript>

                                                            <div class="woocommerce-terms-and-conditions-wrapper">
                                                                <div class="woocommerce-privacy-policy-text"><p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
                                                                </div>
                                                            </div>

                                                            <button type="submit" class="button alt" @click.prevent="placeOrder">Place order
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- .entry-content -->

                            </article><!-- #post-## -->

                        </main><!-- #main -->
                    </section>
                </div>
            </div>
        </section>
    </main>

@endsection

@push('footer-js')
<script>
    let singlePage = new Vue({
        el: '#proceed-to-checkout',
        data: {
            firstName: '',
            lastName: '',
            companyName: '',
            phone: '',
            email: '',
            postcode: '',
            city: '',
            address1: '',
            address2: '',
        },
        computed: {
            products(){
                return headerCart.products;
            }
        },
        methods: {
            placeOrder(){

                if(confirm('Are you sure to place order?')){
                    if(this.email == '' || this.phone == '' || this.firstName == ''){
                        toastr.warning('Email, Phone or Name is missing!')
                    }
                }
            }
        },
        mounted(){
            window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

        }
    })
</script>
@endpush
