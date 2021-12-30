<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\ProductRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller {

    private $request;

    public function __construct( Request $request ) {
        $this->request = $request;
    }
    public function add_to_product( ProductRepositoryInterface $productRepository ) {
        try {
            //code...
        } catch ( \Throwable $th ) {
            //throw $th;
        }
    }
}
