<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['nombre', 'puesto']; // Especifica los campos que se pueden asignar masivamente

    // Define las reglas de validación para la creación de empleados
    public static function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'puesto' => 'required|string|max:255',
        ];
    }

    // Define los mensajes de error personalizados para las reglas de validación
    public static function customMessages()
    {
        return [
            'nombre.required' => 'El nombre del empleado es obligatorio.',
            'puesto.required' => 'El puesto del empleado es obligatorio.',
        ];
    }
}
