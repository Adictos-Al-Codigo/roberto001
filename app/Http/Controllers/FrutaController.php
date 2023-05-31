<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrutaController extends Controller
{
    public function saveData(Request $request)
    {
        $nombreFruta = $request->input('nombre_fruta');
        $cantidad = $request->input('cantidad');
        $proveedor = $request->input('proveedor');

        // Aquí puedes hacer lo que necesites con los datos, como agregarlos a una lista de arrays
        $fruta = [
            'nombre_fruta' => $nombreFruta,
            'cantidad' => $cantidad,
            'proveedor' => $proveedor
        ];

        // Ejemplo de almacenamiento en una lista de arrays
        $listaFrutas = []; // Inicializar la lista de frutas si no existe previamente
        $listaFrutas[] = $fruta;


        // Puedes hacer más operaciones con los datos aquí, como almacenarlos en una base de datos
        return view('form.formulario')->with('frutas', $listaFrutas);
    }
}
