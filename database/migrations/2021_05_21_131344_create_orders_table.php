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
            $table->increments('id');
            $table->string('product_name', 100);
            $table->string('SKU', 100);
            $table->bigInteger('quantity');
            $table->bigInteger('price');
            $table->string('client_name', 100);
            $table->string('email')->unique();
            $table->bigInteger('telephone');
            $table->string('address');
            $table->string('city');
            $table->string('payment_type');
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
