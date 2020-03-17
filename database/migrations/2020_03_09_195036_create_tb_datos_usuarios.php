<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbDatosUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_datos_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('usuario_id');
            $table->string('nombre');
            $table->string('apellido')->nullable();
            $table->string('cedula');
            $table->date('fnacimiento')->nullable();
            $table->string('direccion')->nullable();
            $table->string('cuidad')->nullable();
            $table->string('genero')->nullable();
            $table->string('titulo')->nullable();
            $table->string('telefono')->nullable();
            $table->string('foto')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('matriculado')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('tb_datos_usuarios');
    }
}
