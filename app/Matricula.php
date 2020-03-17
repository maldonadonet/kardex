<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'tb_matriculas';

    public function calificaciones() {
        return $this->hasMany(Calificacion::class,'matricula_id');
    }
}
