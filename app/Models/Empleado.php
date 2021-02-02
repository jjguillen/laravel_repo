<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Incidencia;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';

    public function incidencias() {
        return $this->hasMany(Incidencia::class);
    }


}


