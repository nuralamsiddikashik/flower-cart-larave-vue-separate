<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_uid');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->unique();
            $table->decimal('amount', 14, 2);
            $table->string('transaction_id')->nullable();
            $table->string('currency')->nullable();
            $table->date('date')->index();
            $table->integer('year');
            $table->tinyInteger('month');
            $table->text('address');
            $table->tinyInteger('status');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
