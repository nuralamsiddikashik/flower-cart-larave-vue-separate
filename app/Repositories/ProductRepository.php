<?php
namespace App\Repositories;

use App\Contracts\ProductRepositoryInterface;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductRepository implements ProductRepositoryInterface {
    private $model;

    public function __construct( Product $model ) {
        $this->model = $model;
    }

    public function get() {
        $products = $this->model->select( 'id', 'product_title', 'product_sku', 'cost_price', 'selling_price', 'quantity', 'product_image' );
        return $products->get();
    }
    public function find( $id ) {
        return $this->model->find( $id );
    }

    public function store( array $data ) {
        return $this->model->create( [
            'product_title'       => $data['product_title'],
            'product_slug'        => Str::slug( $data['product_title'] ),
            'product_sku'         => $data['product_sku'],
            'category_id'         => $data['category_id'],
            'product_description' => $data['product_description'],
            'product_image'       => $data['upload']['file_name'] ?? null,
            'cost_price'          => $data['cost_price'],
            'selling_price'       => $data['selling_price'],
            'quantity'            => $data['quantity'],
            'status'              => $data['status'],
            'published_by'        => $data['published_by'],
        ] );
    }

    public function update( $id, $data ) {
        $product = $this->model->find( $id );
        $product->update( [
            'product_title'       => $data['product_title'],
            'product_slug'        => Str::slug( $data['product_title'] ),
            'product_sku'         => $data['product_sku'],
            'category_id'         => $data['category_id'],
            'product_description' => $data['product_description'],
            'product_image'       => $data['upload']['file_name'] ?? $product->product_image,
            'cost_price'          => $data['cost_price'],
            'selling_price'       => $data['selling_price'],
            'quantity'            => $data['quantity'],
            'status'              => $data['status'],
            'published_by'        => $data['published_by'],
        ] );
    }

    public function destroy( $id ) {}
}