<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $table = 'tb_periodos';

    // un periodo puede estar relacionado con muchos grados
    public function grados() {
        return $this->hasMany(Grado::class,'periodo_id');
    }

    public function materias() {
        return $this->hasMany(Materia::class,'periodo_id');
    }

    public function calificaciones() {
        return $this->hasMany(Calificacion::class,'periodo_id');
    }

    public function matriculas() {
        return $this->hasMany(Matricula::class,'periodo_id');
    }

}
