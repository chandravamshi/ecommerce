<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_attributes', function (Blueprint $table) {
            $table->increments('id', true);
            $table->integer('quantity')->unsigned();
            $table->decimal('price')->nullable();
            $table->integer('product_id')->unsigned();
            $table->timestamps(); 
        });
        
        Schema::table('product_attributes', function($table) {
            // $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('product_attributes');
    }
}
