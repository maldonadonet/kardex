<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPeriodos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_periodos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('clave_periodo')->nullable();
            $table->string('nombre');
            $table->string('seccion')->nullable();
            $table->date('f-inicio')->nullable();
            $table->date('f-final')->nullable();
            $table->string('estado')->nullable();
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
        Schema::dropIfExists('tb_periodos');
    }
}
