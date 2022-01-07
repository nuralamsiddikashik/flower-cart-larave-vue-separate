<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {

    }
    public function currentCartList(Request $request)
    {
        $request->session()->all();

    }

    public function addItemToCart(Request $request)
    {


    }
}
