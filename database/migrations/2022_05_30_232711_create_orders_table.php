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
            $table->string('order_name')->nullable();
            $table->string('order_phone')->nullable();
            $table->string('order_email')->nullable();
            $table->string('order_forfait_name')->nullable();
            $table->string('order_periode')->nullable();
            $table->string('order_city')->nullable();
            $table->string('order_status');
            //id mifi
            $table->string('id_mifi_attributed')->default(0)->nullable();
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
