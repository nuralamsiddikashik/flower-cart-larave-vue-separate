<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\CategoryRepositoryInterface;
use App\Contracts\ProductRepositoryInterface;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller {

    private $request;
    private $productRepository;

    public function __construct( Request $request, ProductRepositoryInterface $productRepository ) {
        $this->request           = $request;
        $this->productRepository = $productRepository;
    }

    public function index( ProductRepositoryInterface $productRepository ) {
        $data['products'] = $productRepository->get()->transform( function ( $product ) {
            $product->product_image = Product::getFileProductImage( $product->product_image );
            return $product;
        } );

        return view( 'admin.product.index', $data );
    }

    public function create( CategoryRepositoryInterface $categoryRepository ) {
        $data['categories'] = $categoryRepository->get();
        $data['categories'] = $data['categories']->pluck( 'name', 'id' )->toArray();
        return view( 'admin.product.create', $data );
    }

    public function add_to_product( ProductRepositoryInterface $productRepository ) {
        try {
            $data = $this->validate( $this->request, [
                'product_title'       => 'required|string|max:255',
                'category_id'         => 'required|integer|min:1|exists:categories,id',
                'product_sku'         => 'required|string|unique:products,product_sku',
                'product_description' => 'nullable|string',
                'status'              => 'required|numeric|min:1|max:3',
                'product_image'       => ['required', 'mimes:jpg,jpeg,pdf,docs,png', 'max:2048'],
                'cost_price'          => 'required|numeric',
                'selling_price'       => 'required|numeric|gt:cost_price',
                'quantity'            => 'required|numeric',
            ] );
            $data['published_by'] = auth()->user()->id;
            $data['upload']       = [
                'file_name'    => null,
                'full_path'    => null,
                'resized_path' => null,
                'upload_dir'   => null,
            ];
            if ( $this->request->hasFile( 'product_image' ) ) {
                $data['upload'] = Helper::uploadFile( $data['product_image'], config( 'image_settings.product_image_folder' ), config( 'image_settings.thumbnail' ), 'public', 'true', 100 );

            }
            $productRepository->store( $data );
            $notification = array(
                'message'    => 'Category Create Succsfully.',
                'alert-type' => 'success',
            );
            return redirect()->route( 'admin.product' )->with( $notification );
        } catch ( ValidationException $exception ) {
            $notification = array(
                'message'    => 'Something went wrong.',
                'alert-type' => 'warning',
            );
            // return $exception->getMessage();
            return redirect()->back()->with( $notification );
        }
    }

    public function editProductItem( $id, CategoryRepositoryInterface $categoryRepository ) {

        $data['categories'] = $categoryRepository->get();
        $data['categories'] = $data['categories']->pluck( 'name', 'id' )->toArray();
        $data['product']    = $this->productRepository->find( $id );
        if ( !$data['product'] ) {
            return abort( 404 );
        }
        $data['product']->product_image = Product::getFileProductImage( $data['product']->product_image );
        return view( 'admin.product.edit', $data );
    }

    public function update( $id, ProductRepositoryInterface $productRepository ) {
        $data['product'] = $this->productRepository->find( $id );
        if ( !$data['product'] ) {
            return abort( 404 );
        }

        try {
            $data = $this->validate( $this->request, [
                'product_title'       => 'required|string|max:255',
                'category_id'         => 'required|integer|min:1|exists:categories,id',
                'product_sku'         => 'required|string|unique:products,product_sku,' . $id,
                'product_description' => 'nullable|string',
                'status'              => 'nullable|numeric|min:1|max:3',
                'product_image'       => ['sometimes', 'mimes:jpg,jpeg,pdf,docs,png', 'max:2048'],
                'cost_price'          => 'nullable|numeric',
                'selling_price'       => 'nullable|numeric|gt:cost_price',
                'quantity'            => 'nullable|numeric',
            ] );
            $data['published_by'] = auth()->user()->id;
            $data['upload']       = [
                'file_name'    => null,
                'full_path'    => null,
                'resized_path' => null,
                'upload_dir'   => null,
            ];
            if ( $this->request->hasFile( 'product_image' ) ) {
                $data['upload'] = Helper::uploadFile( $data['product_image'], config( 'image_settings.product_image_folder' ), config( 'image_settings.thumbnail' ), 'public', 'true', 100 );

            }
            $productRepository->update( $id, $data );
            $notification = array(
                'message'    => 'Update Succsfully.',
                'alert-type' => 'success',
            );
            return redirect()->route( 'admin.product' )->with( $notification );
        } catch ( ValidationException $exception ) {
            // $notification = array(
            //     'message'    => 'Something went wrong.',
            //     'alert-type' => 'warning',
            // );
            return $exception->getMessage();
            // return redirect()->back()->with( $notification );
        }
    }
}
