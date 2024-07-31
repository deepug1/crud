<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('product_price');
            $table->string('product_image');
            $table->string('product_description');
            $table->string('product_category');
            $table->string('product_brand');
            $table->string('product_quantity');
            $table->string('product_status');
            $table->string('product_rating');
            $table->string('product_discount');
            $table->string('product_discount_price');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}