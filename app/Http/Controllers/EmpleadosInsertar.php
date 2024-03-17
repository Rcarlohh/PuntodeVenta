<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadosInsertar extends Controller
{
    public function crearEmpleado(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'puesto' => 'required|string|max:255',
        ]);
    
        // Crear un nuevo registro de empleado
        $empleado = new Empleado();
        $empleado->nombre = $request->nombre;
        $empleado->puesto = $request->puesto;
        $empleado->save();
    
        // Redireccionar a una ruta después de la inserción
        return redirect('/empleados')->with('success', 'Empleado insertado correctamente.');
    }
}
