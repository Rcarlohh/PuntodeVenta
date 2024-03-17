<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use Illuminate\Http\Request;
use App\Models\EmpleadoVer;
use Illuminate\Support\Facades\DB;

class EmpleadosController extends Controller
{
    public function mostrarEmpleados()
    {
        $empleados = EmpleadoVer::all();
        return response()->json($empleados);
    }

   
}

