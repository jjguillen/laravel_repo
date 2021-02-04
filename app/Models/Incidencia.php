<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empleado;
use App\Models\Asistente;

class Incidencia extends Model
{
    use HasFactory;

    protected $table = 'incidencias';

    public function empleado() {
        return $this->belongsTo(Empleado::class);
    }

    public function asistentes() {
        return $this->belongsToMany(Asistente::class, 'incidencia_asistente');
    }

}
