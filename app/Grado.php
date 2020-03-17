<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    protected $table = 'tb_grados';

    public function materias() {
        return $this->hasMany(Materia::class,'grado_id');
    }

    public function calificaciones() {
        return $this->hasMany(Calificacion::class,'grado_id');
    }

    public function matriculas() {
        return $this->hasMany(Matricula::class,'grado_id');
    }

}
