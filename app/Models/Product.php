<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;
    protected $table   = 'products';
    protected $guarded = [];

    public function category() {
        return $this->belongsTo( Category::class );
    }

    public static function getFileProductImage( $value ) {
        return config( 'image_settings.base_url' ) . config( 'image_settings.product_image_folder' ) . '/' . $value;
    }

    public function cartItems()
    {
        return $this->hasMany(CartUser::class);
    }

}
