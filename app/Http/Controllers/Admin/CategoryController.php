<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\CategoryRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller {

    private $request;
    public function __construct( Request $request ) {
        $this->request = $request;
    }

    public function index() {
        return view( 'category.index' );
    }

    public function store( CategoryRepositoryInterface $categoryRepository ) {
        try {
            $data = $this->validate( $this->request, [
                'name' => 'required|string|min:3|max:255',
            ] );
            $categoryRepository->store( $data );
            return response()->json( ['message' => 'Category add done'], 201 );
        } catch ( ValidationException $exception ) {
            return response()->json( ['message' => $exception->getMessage()] );
        }
    }
}
