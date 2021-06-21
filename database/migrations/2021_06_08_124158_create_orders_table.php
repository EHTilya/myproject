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
            $table->integer('product_id');
            $table->integer('persons_id');
            $table->integer('phone');
            $table->string('address');
            $table->string('payment_method');
            $table->string('description');
            $table->string('tumbo/kiuno');
            $table->string('hipsi');
            $table->string('paja');
            $table->string('goti');
            $table->string('upana/chini');
            $table->string('fly');
            $table->string('order_status');
            

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
