<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_address', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('address_id')->references('id')->on('address');
        });

        Schema::table('comments', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::table('products', function ($table) {
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('sales_id')->references('id')->on('sales');
        });

        Schema::table('images', function ($table) {
            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::table('orders', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('orders_item', function ($table) {
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::table('district', function ($table) {
            $table->foreign('code_city')->references('id')->on('city');
        });

        Schema::table('wards', function ($table) {
            $table->foreign('code_district')->references('id')->on('district');
        });

    }
}
