<?php
namespace App\Repositories;

use App\Contracts\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface {

    private $model;

    public function __construct( Category $model ) {
        $this->model = $model;
    }

    public function get() {
        $categories = $this->model->select( 'id', 'name', 'image' );
        return $categories->get();
    }
    public function find( $id ) {
        return $this->model->find( $id );
    }
    public function store( $data ) {

        return $this->model->create( [
            'name'  => $data['name'],
            'image' => $data['upload']['file_name'] ?? null,

        ] );
    }
    public function update( $id, $data ) {
        $category = $this->model->find( $id );
        $category->update( [
            'name'  => $data['name'],
            'image' => $data['upload']['file_name'] ?? $category->image,
        ] );
    }
    public function destroy( $id ) {
        return $this->model->destroy( $id );
    }
}