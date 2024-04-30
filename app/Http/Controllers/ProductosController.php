<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function principal(){
        $productos = Producto::all();
        return view('productos', compact('productos'));
    }

    public function agregarProducto(){
        return view('crearProducto');
    }

    public function guardarProducto(Request $request){
        $productos = Producto::all();
        $estado = true;
        foreach ($productos as $producto) {
            if ($producto->Id == $request->id) {
                $estado = false;
            }
        }

        if ($estado == true) {
        $nvoProducto = new Producto();
        $nvoProducto->Id = $request->id;
        $nvoProducto->descripcion = $request->descripcion;
        $nvoProducto->precio = $request->precio;
        $nvoProducto->stock = $request->stock;
        $nvoProducto->pagaIsv = $request->pagaIsv;
        $nvoProducto->save();
        return redirect('/Productos');
        }else {
            return redirect('/Productos');
        }  
    }
}
