<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditCardDBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_card_d_b_s', function (Blueprint $table) {
            $table->increments('payment_id');
            $table->string('name');
            $table->string('email');
            $table->string('paid_amount');
            $table->string('card_number');
            $table->string('card_cvc');
            $table->string('card_exp_month');
            $table->string('card_exp_year');
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
        Schema::dropIfExists('credit_card_d_b_s');
    }
}
