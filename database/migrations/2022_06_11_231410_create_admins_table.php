<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');//tchoufa joel
            $table->string('email')->unique(); //joelnkouatchet@gmail.com
            $table->string('city')->nullable(); //douala
            $table->string('phone')->nullable();//+237 675985291
            $table->string('gender')->nullable();//Mr
            $table->string('password'); //123456789
            $table->string('status'); //1 
            $table->string('type');
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
        Schema::dropIfExists('admins');
    }
}
