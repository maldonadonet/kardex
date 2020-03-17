<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'tb_materias';

    public function calificaciones() {
        return $this->hasMany(Calificacion::class,'materia_id');
    }

    public function matriculas() {
        return $this->hasMany(Matricula::class,'materia_id');
    }

}
