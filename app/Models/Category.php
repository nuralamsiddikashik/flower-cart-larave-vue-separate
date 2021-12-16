<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    use HasFactory;
    protected $guarded = [];
    protected $table   = "categories";

    public static function getFileUrl( $value ) {
        return config( 'image_settings.base_url' ) . config( 'image_settings.folder' ) . '/' . $value;
    }
}
