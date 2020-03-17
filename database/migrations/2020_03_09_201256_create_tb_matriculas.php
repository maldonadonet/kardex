<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbMatriculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_matriculas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('materia_id');
            $table->integer('grado_id');
            $table->integer('periodo_id');
            $table->integer('usuario_id');
            $table->timestamps();

            $table->foreign('materia_id')->references('id')->on('tb_materias');
            $table->foreign('grado_id')->references('id')->on('tb_grados');
            $table->foreign('periodo_id')->references('id')->on('tb_periodos');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_matriculas');
    }
}
