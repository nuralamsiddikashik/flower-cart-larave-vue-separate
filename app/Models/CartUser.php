<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartUser extends Model
{
    use HasFactory;
    protected $table = 'cart_users';
    protected $guarded = [];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }


}
