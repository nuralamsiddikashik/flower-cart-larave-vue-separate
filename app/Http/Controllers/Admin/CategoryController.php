<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\CategoryRepositoryInterface;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller {

    private $request;
    private $categoryRepository;
    public function __construct( Request $request, CategoryRepositoryInterface $categoryRepository ) {
        $this->request            = $request;
        $this->categoryRepository = $categoryRepository;
    }

    public function index( CategoryRepositoryInterface $categoryRepository ) {
        $data['categories'] = $categoryRepository->get()->transform( function ( $category ) {
            $category->image = Category::getFileUrl( $category->image );
            return $category;
        } );

        return view( 'category.index', $data );
    }

    public function store( CategoryRepositoryInterface $categoryRepository ) {
        try {
            $data = $this->validate( $this->request, [
                'name'  => 'required|string|min:3|max:255',
                'image' => ['required', 'mimes:jpg,jepg,pdf,docs,png', 'max:2048'],
            ] );
            $data['upload'] = [
                'file_name'    => null,
                'full_path'    => null,
                'resized_path' => null,
                'upload_dir'   => null,
            ];
            if ( $this->request->hasFile( 'image' ) ) {
                $data['upload'] = Helper::uploadFile( $data['image'], config( 'image_settings.folder' ), config( 'image_settings.thumbnail' ), 'public', 'true', 100 );

            }
            $categoryRepository->store( $data );

            $notification = array(
                'message'    => 'Category Create Succsfully.',
                'alert-type' => 'success',
            );
            return redirect()->back()->with( $notification );
        } catch ( ValidationException $exception ) {
            $notification = array(
                'message'    => 'Something went wrong.',
                'alert-type' => 'warning',
            );
            return redirect()->back()->with( $notification );
        }
    }

    public function editCategoryItem( $id ) {
        $data['category'] = $this->categoryRepository->find( $id );
        if ( !$data['category'] ) {
            return abort( 404 );
        }

        $data['category']->image = Category::getFileUrl( $data['category']->image );

        return view( 'category.edit', $data );
    }

    public function update( $id, CategoryRepositoryInterface $categoryRepository ) {
        $data['category'] = $this->categoryRepository->find( $id );
        if ( !$data['category'] ) {
            return abort( 404 );
        }

        try {
            $data = $this->validate( $this->request, [
                'name'  => 'required|string|min:3|max:255',
                'image' => ['sometimes', 'mimes:jpg,jepg,pdf,docs,png', 'max:2048'],
            ] );
            $data['upload'] = [
                'file_name'    => null,
                'full_path'    => null,
                'resized_path' => null,
                'upload_dir'   => null,
            ];
            if ( $this->request->hasFile( 'image' ) ) {
                $data['upload'] = Helper::uploadFile( $data['image'], config( 'image_settings.folder' ), config( 'image_settings.thumbnail' ), 'public', 'true', 100 );

            }
            // dd( $data );
            $categoryRepository->update( $id, $data );

            $notification = array(
                'message'    => 'Category Create Succsfully.',
                'alert-type' => 'success',
            );
            return redirect()->back()->with( $notification );
        } catch ( ValidationException $exception ) {
            $notification = array(
                'message'    => 'Something went wrong.',
                'alert-type' => 'warning',
            );
            return redirect( 'category.index' );

        }
    }

}
