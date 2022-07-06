<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMifisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mifis', function (Blueprint $table) {
            $table->id();
            $table->string('mifi_name')->nullable();
            $table->string('mifi_name_search')->nullable();
            $table->string('mifi_serial_number')->nullable();
            $table->string('mifi_marque')->nullable();
            $table->string('mifi_password')->nullable();
            $table->string('mifi_image')->nullable();
            $table->string('mifi_puce_number')->nullable();
            $table->string('mifi_status')->nullable();
            $table->string('mifi_date_begin_use')->nullable();
            
            //attributed
            $table->string('id_user_attributed_mifi')->default(0)->nullable();
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
        Schema::dropIfExists('mifis');
    }
}
