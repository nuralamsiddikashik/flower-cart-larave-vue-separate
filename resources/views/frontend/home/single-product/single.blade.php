@extends('frontend')
@section('content')
  
    <main class="site-main">
        <!--shop category start-->
        <section class="space-3">
            <div class="container sm-center">
                <div class="row">
                    <div class="col-md-12">
                        <div id="product-14" class="post-14 product type-product status-publish has-post-thumbnail product_cat-accessories first instock sale shipping-taxable purchasable product-type-simple">
    
                            <span class="onsale">Sale!</span>
                            <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                                <a href="#" class="woocommerce-product-gallery__trigger">
                                    <img draggable="false" class="emoji" alt="🔍" src="https://s.w.org/images/core/emoji/11/svg/1f50d.svg"></a>
                                <figure class="woocommerce-product-gallery__wrapper">
                                    <div data-thumb="assets/img/pc1.jpg" class="woocommerce-product-gallery__image">
                                        <a href="assets/img/pc1.jpg">
                                            <img width="600" height="600" src="assets/img/pc1.jpg" class="wp-post-image" alt="" title="beanie-2.jpg" data-caption="" data-src="assets/img/pc1.jpg" data-large_image="assets/img/pc1.jpg" data-large_image_width="801" data-large_image_height="801" srcset="assets/img/pc1.jpg 600w, assets/img/pc1.jpg 150w, assets/img/pc1.jpg 300w, assets/img/pc1.jpg 768w, assets/img/pc1.jpg 100w, assets/img/pc1.jpg 801w" sizes="(max-width: 600px) 100vw, 600px">
                                        </a>
                                        <!--<img role="presentation" alt="" src="assets/img/pc1.jpg" class="zoomImg" style="position: absolute; top: -53.5876px; left: -76.8026px; opacity: 0; width: 801px; height: 801px; border: none; max-width: none; max-height: none;">-->
                                    </div>
                                </figure>
                            </div>
    
                            <div class="summary entry-summary">
                                <h1 class="product_title entry-title">{{$product->product_title}}</h1>
                                <p class="price"><del>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">৳&nbsp;</span>20.00</span></del>
                                    <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span>18.00</span></ins>
                                </p>
                                <div class="woocommerce-product-details__short-description">
                                    <p>This is a simple product.</p>
                                </div>
    
                                <form class="cart" action="#" method="post" enctype="multipart/form-data">
                                    <div class="quantity">
                                        <label class="screen-reader-text" for="quantity_5cb6f2a5624d1">Quantity</label>
                                        <input type="number" id="quantity_5cb6f2a5624d1" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="Beanie quantity">
                                    </div>
                                    <button type="submit" name="add-to-cart" value="14" class="single_add_to_cart_button button alt">Add to cart</button>
                                </form>
    
                                <div class="product_meta">
                                    <span class="sku_wrapper">SKU: <span class="sku">woo-beanie</span></span>
                                    <span class="posted_in">Category: <a href="#" rel="tag">Accessories</a></span>
                                </div>
                            </div>
    
    
                            <div class="woocommerce-tabs wc-tabs-wrapper">
                                <ul class="tabs wc-tabs" role="tablist">
                                    <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                                        <a href="#tab-description">Description</a>
                                    </li>
                                    <li class="additional_information_tab" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
                                        <a href="#tab-additional_information">Additional information</a>
                                    </li>
                                    <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                        <a href="#tab-reviews">Reviews (0)</a>
                                    </li>
                                </ul>
                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description" style="display: block;">
    
                                    <h2>Description</h2>
    
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                </div>
                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information" style="display: none;">
    
                                    <h2>Additional information</h2>
    
                                    <table class="shop_attributes">
    
                                        <tbody><tr>
                                            <th>Dimensions</th>
                                            <td class="product_dimensions">4 × 5 × 0.5 in</td>
                                        </tr>
    
                                        <tr>
                                            <th>Color</th>
                                            <td><p>Red</p>
                                            </td>
                                        </tr>
                                        </tbody></table>
                                </div>
                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews" style="display: none;">
                                    <div id="reviews" class="woocommerce-Reviews">
                                        <div id="comments">
                                            <h2 class="woocommerce-Reviews-title">Reviews</h2>
                                            <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                        </div>
    
                                        <div id="review_form_wrapper">
                                            <div id="review_form">
                                                <div id="respond" class="comment-respond">
                                                    <span id="reply-title" class="comment-reply-title">Be the first to review “Beanie” <small><a rel="nofollow" id="cancel-comment-reply-link" href="/product/beanie/#respond" style="display:none;">Cancel reply</a></small></span>			<form action="http://Simple Shoplocal/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
                                                    <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><div class="comment-form-rating"><label for="rating">Your rating</label><p class="stars"><span><a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a></span></p><select name="rating" id="rating" required="" style="display: none;">
                                                    <option value="">Rate…</option>
                                                    <option value="5">Perfect</option>
                                                    <option value="4">Good</option>
                                                    <option value="3">Average</option>
                                                    <option value="2">Not that bad</option>
                                                    <option value="1">Very poor</option>
                                                </select></div><p class="comment-form-comment"><label for="comment">Your review&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea></p><p class="comment-form-author"><label for="author">Name&nbsp;<span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" required=""></p>
                                                    <p class="comment-form-email"><label for="email">Email&nbsp;<span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" required=""></p>
                                                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit"> <input type="hidden" name="comment_post_ID" value="14" id="comment_post_ID">
                                                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                                    </p>
                                                </form>
                                                </div><!-- #respond -->
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
    
                            <section class="related products">
    
                                <h2>Related products</h2>
    
                                <ul class="products columns-3">
                                    <li class="product">
                                        <div class="product-wrap">
                                            <a href="#" class="">
                                                <img src="assets/img/p10.jpg" alt="">
                                            </a>
                                            <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                                                <i class="fa fa-shopping-basket"></i>
                                            </a>
                                        </div>
                                        <div class="woocommerce-product-title-wrap">
                                            <h2 class="woocommerce-loop-product__title">
                                                <a href="#">Stitched leather sports shoe</a>
                                            </h2>
                                            <a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                        <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span> 18.00
                                        </span>
                                    </span>
                                    </li>
                                    <li class="product">
                                        <div class="product-wrap">
                                            <a href="#" class="">
                                                <img src="assets/img/p11.jpg" alt="">
                                            </a>
                                            <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                                                <i class="fa fa-shopping-basket"></i>
                                            </a>
                                        </div>
                                        <div class="woocommerce-product-title-wrap">
                                            <h2 class="woocommerce-loop-product__title">
                                                <a href="#">Stitched leather sports shoe</a>
                                            </h2>
                                            <a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                        <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span> 18.00
                                        </span>
                                    </span>
                                    </li>
                                    <li class="product last">
                                        <div class="product-wrap">
                                            <a href="#" class="">
                                                <img src="assets/img/p12.jpg" alt="">
                                            </a>
                                            <a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                                                <i class="fa fa-shopping-basket"></i>
                                            </a>
                                        </div>
                                        <div class="woocommerce-product-title-wrap">
                                            <h2 class="woocommerce-loop-product__title">
                                                <a href="#">Stitched leather sports shoe</a>
                                            </h2>
                                            <a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                        <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span> 18.00
                                        </span>
                                    </span>
                                    </li>
                                </ul>
    
                            </section>
    
                        </div>
                    </div>
    
                </div>
            </div>
        </section>
        <!--shop category end-->
    </main>

@endsection