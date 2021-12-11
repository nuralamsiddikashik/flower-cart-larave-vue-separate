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

    }
    public function find( $id ) {

    }
    public function store( $data ) {
        return $this->model->create( [
            'name' => $data['name'],
        ] );
    }
    public function update( $id ) {

    }
}