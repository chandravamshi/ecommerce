<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id',true);

            // $table->bigInteger('product_id')->unsigned()->index();
            // $table->foreign('product_id')->references('id')->on('products');

            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->unsignedInteger('quantity');
            $table->decimal('price', 20, 6);

            

            $table->timestamps();
        });

        Schema::table('order_items', function($table) {
            // $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}