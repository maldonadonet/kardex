<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbCalificaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_calificaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('matricula_id'); // id_alumno
            $table->integer('usuario_id'); // id_profesor
            $table->integer('periodo_id');
            $table->integer('grado_id');
            $table->integer('materia_id');
            $table->decimal('parcial1',8,2)->nullable();
            $table->decimal('parcial2',8,2)->nullable();
            $table->decimal('supletorio',8,2)->nullable();
            $table->decimal('promedio',8,2)->nullable();
            $table->string('status')->nullable();
            $table->timestamps();

            $table->foreign('matricula_id')->references('id')->on('tb_matriculas');
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('periodo_id')->references('id')->on('tb_periodos');
            $table->foreign('grado_id')->references('id')->on('tb_grados');
            $table->foreign('materia_id')->references('id')->on('tb_materias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_calificaciones');
    }
}
