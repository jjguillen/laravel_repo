<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Incidencia;

class Asistente extends Model
{
    use HasFactory;

    public function incidencias_resueltas() {
        return $this->belongsToMany(Incidencia::class, 'incidencia_asistente');
    }
}
