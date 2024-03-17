<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpleadoVer extends Model
{
    protected $table = 'empleados'; // Nombre de la tabla en la base de datos

    protected $fillable = ['nombre', 'puesto']; // Campos que se pueden asignar masivamente
}
