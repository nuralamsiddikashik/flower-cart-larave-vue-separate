<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'products', function ( Blueprint $table ) {
            $table->id();
            $table->foreignId( 'category_id' );
            $table->string( 'product_title' );
            $table->string( 'product_slug' );
            $table->text( 'product_description' );
            $table->string( 'product_sku' );
            $table->string( 'product_image' )->nullable();
            $table->tinyInteger( 'status' )->default( 1 )->comment( '
            1 = active,
            2 = inactive,
            3 = pending
            ' );
            $table->unsignedBigInteger( 'published_by' )->index();
            $table->timestamps();
            $table->foreign( 'category_id' )->references( 'id' )->on( 'categories' )->onDelete( 'cascade' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'products' );
    }
}
