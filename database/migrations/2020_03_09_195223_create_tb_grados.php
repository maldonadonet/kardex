<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbGrados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_grados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('periodo_id');
            $table->string('grado');
            $table->string('grupo')->nullable();
            $table->string('estado')->nullable();
            $table->integer('max_registros');
            $table->timestamps();

            $table->foreign('periodo_id')->references('id')->on('tb_periodos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_grados');
    }
}
