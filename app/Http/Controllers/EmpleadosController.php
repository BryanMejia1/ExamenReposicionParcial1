<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function principal(){
        $empleados = Empleado::all();
        return view('empleados', compact('empleados'));
    }

    public function agregarEmpleado(){
        return view('crearEmpleado');
    }

    public function guardarEmpleado(Request $request){
        $empleados = Empleado::all();
        $estado = true;
        foreach ($empleados as $empleado) {
            if ($empleado->IdPrestamo == $request->idPrestamo) {
                $estado = false;
            }
        }

        if ($estado == true) {
        $nvoEmpleado = new Empleado();
        $nvoEmpleado->IdPrestamo = $request->idPrestamo;
        $nvoEmpleado->nombre = $request->nombre;
        $nvoEmpleado->apelldio = $request->apellido;
        $nvoEmpleado->fechaIngreso = $request->fechaIngreso;
        $nvoEmpleado->salario = $request->salario;
        $nvoEmpleado->save();
        return redirect('/Empleados');
        }else {
            return redirect('/Empleados');
        }  
    }
}
