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
            $table->integer('produit_id')->unsigned()->index();
            $table->string('payment_intent_id');
            $table->integer('quantity');
            $table->string('price');
            $table->datetime('payment_created_at');

            
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
            $table->foreign('payment_intent_id')->references('payment_intent_id')->on('payments')->onDelete('cascade');

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
