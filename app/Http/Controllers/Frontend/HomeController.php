<?php

namespace App\Http\Controllers\Frontend;

use App\Contracts\ProductRepositoryInterface;
use App\Http\Controllers\Controller;
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

    public function single_product( $product_slug, ProductRepositoryInterface $productRepository ) {
        $product = $this->productRepository->findBySlug( $product_slug );

        // $data['product'] = $this->productRepository->findBySlug( $product_slug )->transform( function ( $product ) {
        //     $product->product_image = Product::singleProductImage( $product->product_image );
        //     return $product;
        // } );

        return view( 'frontend.home.single-product.single', compact( 'product' ) );
    }
}
