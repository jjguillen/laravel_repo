<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empleado;

class Incidencia extends Model
{
    use HasFactory;

    protected $table = 'incidencias';

    public function empleado() {
        return $this->belongsTo(Empleado::class);
    }

}
