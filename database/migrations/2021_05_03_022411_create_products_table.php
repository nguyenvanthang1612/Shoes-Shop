<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('name', 100);
            $table->mediumText('desc');
            $table->string('SKU', 100);
            $table->integer('size');
            $table->string('brand', 100);
            $table->json('img');
            $table->integer('category_id')->unsigned();
            $table->integer('inventory_id')->unsigned();
            $table->bigInteger('price');
            $table->timestamps();

            $table->foreign('category_id')->references('id')
            ->on('categories');
            $table->foreign('inventory_id')->references('id')
            ->on('inventories');

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
