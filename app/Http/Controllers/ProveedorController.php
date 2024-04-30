<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function principal(){
        $proveedores = Proveedor::all();
        return view('proveedores', compact('proveedores'));
    }

    public function agregarProveedor(){
        return view('crearProveedor');
    }

    public function guardarProveedor(Request $request){
        $proveedores = Proveedor::all();
        $estado = true;
        foreach ($proveedores as $proveedor) {
            if ($proveedor->IdProveedor == $request->idProveedor) {
                $estado = false;
            }
        }

        if ($estado == true) {
            $nvoProveedor = new Proveedor();
            $nvoProveedor->IdProveedor = $request->idProveedor;
            $nvoProveedor->nombre = $request->nombre;
            $nvoProveedor->fechaRegistro = $request->fechaRegistro;
            $nvoProveedor->telefono = $request->telefono;
            $nvoProveedor->correo = $request->correo;
            $nvoProveedor->save();
            return redirect('/Proveedores');
        }else {
            return redirect('/Proveedores');
        }  
    }
}
