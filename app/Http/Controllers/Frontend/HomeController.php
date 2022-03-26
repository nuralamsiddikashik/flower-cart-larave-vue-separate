<?php

namespace App\Http\Controllers\Frontend;

use App\Contracts\ProductRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Models\CartUser;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller {

    private $request;
    private $productRepository;

    public function __construct( Request $request, ProductRepositoryInterface $productRepository ) {
        $this->request           = $request;
        $this->productRepository = $productRepository;
    }

    public function index() {
        $data['products'] = $this->productRepository->get()->transform( function ( $product ) {
            $product->product_image = Product::getFileProductImage( $product->product_image );
            return $product;
        } );

        return view( 'frontend.home.index', $data );
    }

    public function singleProduct( $product_slug, ProductRepositoryInterface $productRepository ) {
        $product = $this->productRepository->findBySlug( $product_slug );

        // $data['product'] = $this->productRepository->findBySlug( $product_slug )->transform( function ( $product ) {
        //     $product->product_image = Product::singleProductImage( $product->product_image );
        //     return $product;
        // } );

        return view( 'frontend.home.single-product.single', compact( 'product' ) );
    }

    public function cartPage() {
        return view( 'frontend.home.cart.cart' );
    }

    public function proceedToCheckout(Request $request) {
        // check cart products
        if (!$request->session()->has('cartItem')){
            return redirect()->route('home');
        }

        $cartItemProducts = CartUser::where('cart_session_id', session('cartItem'))->first();
        if (!$cartItemProducts){
            return redirect()->route('home');
        }
        return view( 'frontend.home.checkout.checkout' );
    }
}
