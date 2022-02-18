<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CartUser;
use App\Models\Product;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class CartController extends Controller
{
    /**
     *
     */
    public function __construct()
    {

    }

    /**
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function currentCartList(Request $request)
    {
        if ($request->session()->has('cartItem')){
            $cart_instance_id = $request->session()->get('cartItem');
        }else{
            $cart_instance_id = $request->session()->put([ 'cartItem' => uniqid('cart.', true)]);
        }
        $cartItemProducts = CartUser::where('cart_session_id', $cart_instance_id)
            ->with(['product:id,product_image,product_title,product_sku,product_slug'])
            ->get()->transform(function ($item){
                $item->product->product_image = config('image_settings.base_url') . config('image_settings.product_image_folder') . '/' . $item->product->product_image;
                return $item;
            });
        return response()->json($cartItemProducts, Response::HTTP_OK);
    }

    /**
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addItemToCart(Request $request)
    {
        // create or fetch a cart session id
        if ($request->session()->has('cartItem')){
            $cart_instance_id = $request->session()->get('cartItem');
        }else{
            $cart_instance_id = $request->session()->put([ 'cartItem' => uniqid('cart.', true)]);
        }



        // store product to cart items
        try {
            $validated_data = $this->validate($request, [
                'product_id' => 'required|integer|exists:products,id'
            ]);
            $product = Product::where('id', $validated_data['product_id'])->first('selling_price');
            $exit_cart_user_product = CartUser::where(function ($q) use($cart_instance_id, $validated_data){
               $q->where('cart_session_id', $cart_instance_id);
               $q->where('product_id', $validated_data['product_id']);
            })->first();
            if (!$exit_cart_user_product){
                CartUser::create([
                    'cart_session_id' => $cart_instance_id,
                    'product_id' => $validated_data['product_id'],
                    'quantity' => 1,
                    'price' => $product->selling_price,
                ]);
            }else{
                $exit_cart_user_product->update([
                   'quantity' => $exit_cart_user_product->quantity + 1
                ]);
            }

            return response()->json([
                'message' => 'Cart item added'
            ], Response::HTTP_CREATED);

        }catch (ValidationException $e){
            return response()->json($e->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }catch (\Exception $e){
            return response()->json([
                'message' => 'Something failed'
            ], Response::HTTP_CONFLICT);
        }



    }

    public function updateItemToCart($product_id, Request $request)
    {
        if (!$request->session()->has('cartItem')){
            return response()->json(['message' => 'No item found!'], Response::HTTP_NOT_FOUND);
        }
        $cart_instance_id = $request->session()->get('cartItem');
        $cart_item = CartUser::where('cart_session_id', $cart_instance_id)->where('product_id', $product_id)->first();
        if (!$cart_item) {
            return response()->json(['message' => 'No item found!'], Response::HTTP_NOT_FOUND);
        }

        try {
            $validated_data = $this->validate($request, [
               'quantity' => 'required|integer|min:1'
            ]);
            $cart_item->update([
                'quantity' => $validated_data['quantity']
            ]);
            return response()->json(['message' => 'Item Updated'], Response::HTTP_OK);
        }catch (ValidationException $e){
            return response()->json($e->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        catch (QueryException|\Exception $e){
            return response()->json(['message' => 'Failed to remove!'], Response::HTTP_CONFLICT);
        }
    }

    /**
     * @param $product_id
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function removeItemToCart($product_id, Request $request)
    {
        if (!$request->session()->has('cartItem')){
            return response()->json(['message' => 'No item found!'], Response::HTTP_NOT_FOUND);
        }
        $cart_instance_id = $request->session()->get('cartItem');
        $cart_item = CartUser::where('cart_session_id', $cart_instance_id)->where('product_id', $product_id)->first();
        if (!$cart_item) {
            return response()->json(['message' => 'No item found!'], Response::HTTP_NOT_FOUND);
        }

        try {
            CartUser::destroy($cart_item->id);
            return response()->json(['message' => 'Item removed'], Response::HTTP_OK);
        }catch (QueryException|\Exception $e){
            return response()->json(['message' => 'Failed to remove!'], Response::HTTP_CONFLICT);
        }


    }
}
