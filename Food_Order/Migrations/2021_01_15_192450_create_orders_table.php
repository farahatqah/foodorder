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
            $table->increments('order_id');
            $table->unsignedInteger('cust_id');
            $table->unsignedInteger('food_id');
            $table->string('food_name');
            $table->float('food_price');
            $table->integer('quantity')->unsigned();
            $table->timestamps();

            $table->foreign('cust_id')->references('cust_id')->on('customers');
            $table->foreign('food_id')->references('food_id')->on('menus');

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
