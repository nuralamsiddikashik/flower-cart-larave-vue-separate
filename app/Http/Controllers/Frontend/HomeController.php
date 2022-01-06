<?php

namespace App\Http\Controllers\Frontend;

use App\Contracts\ProductRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller {

    private $request;
    private $productRepository;

    public function __construct( Request $request, ProductRepositoryInterface $productRepository ) {
        $this->request           = $request;
        $this->productRepository = $productRepository;
    }

    public function index() {
        $data['products'] = $this->productRepository->get();

        return view( 'frontend.home.index', $data );
    }
}
