<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Incidencia;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';

    public function incidencias_cerradas() {
        return $this->hasMany(Incidencia::class)->where('estado','cerrada');
    }

    public function incidencias_abiertas() {
        return $this->hasMany(Incidencia::class)->where('estado','abierta');
    }

}


