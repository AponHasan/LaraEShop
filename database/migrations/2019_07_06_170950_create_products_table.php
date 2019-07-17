<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->biginteger('category_id')->nullable();
            $table->biginteger('brand_id')->nullable();
            $table->string('description')->nullable();
            $table->string('price')->nullable();
            $table->string('slug')->nullable();
            $table->integer('quantity')->default(1);
            $table->tinyInteger('status')->default(0);
            $table->integer('offer_price')->nullable();
            $table->biginteger('admin_id')->nullable();
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
        Schema::dropIfExists('products');
    }
}
