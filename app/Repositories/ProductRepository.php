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

    public function get() {}
    public function find( $id ) {}

    public function store( array $data ) {
        return $this->model->create( [
            'product_title'       => $data['product_title'],
            'product_slug'        => Str::slug( $data['product_title'] ),
            'product_description' => $data['product_description'],
            'product_sku'         => $data['product_sku'],
            'product_image'       => $data['upload']['file_name'] ?? null,
            'status'              => $data['status'],
            'published_by'        => $data['published_by'],
        ] );
    }

    public function update( $id, $data ) {}

    public function destroy( $id ) {}
}