<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formularioController extends Controller
{
    public function showFormulario(){
        return view('form.formulario');
    }
}
