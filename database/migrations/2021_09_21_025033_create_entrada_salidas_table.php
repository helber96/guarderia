<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaSalidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada_salidas', function (Blueprint $table) {
            $table->id();
            $table->string('hora_entrada_niño');
            $table->string('hora_entrada_personal');
            $table->string('hora_salida_niño');
            $table->string('hora_salida_personal');
            $table->unsignedBigInteger('niño_id');
            $table->foreign('niño_id')->references('id')->on('niños');
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
        Schema::dropIfExists('entrada_salidas');
    }
}
