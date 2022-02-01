<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CartUser;
use App\Models\Product;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CartController extends Controller {
    public function __construct() {

    }
    public function currentCartList( Request $request ) {

        return response()->json( [], Response::HTTP_OK );

    }

    public function addItemToCart( Request $request ) {
        // create or fetch a cart session id
        if ( $request->session()->has( 'cartItem' ) ) {
            $cart_instance_id = $request->session()->get( 'cartItem' );
        } else {
            $cart_instance_id = $request->session()->put( ['cartItem' => uniqid( 'cart.', true )] );
        }

        // store product to cart items

        try {
            $validate_data = $this->validate( $request, [
                'product_id' => 'required|integer|exists:products,id',
            ] );
            $product = Product::where( 'id', $validate_data['product_id'] )->first( 'selling_price' );
            CartUser::create( [
                'cart_session_id' => $cart_instance_id,
                'product_id'      => $validate_data['product_id'],
                'quantity'        => 1,
                'price'           => $product->selling_price,

            ] );
            return response()->json( [
                'message' => 'Cart Item Added',
            ], Response::HTTP_CREATED );
        } catch ( ValidationException $e ) {
            return response()->json( $e->errors(), Response::HTTP_UNPROCESSABLE_ENTITY );
        } catch ( Exception $e ) {
            return response()->json( [
                'message' => 'something failed',
            ], Response::HTTP_CONFLICT );
        }
    }
}
