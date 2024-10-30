<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiblioController extends Controller
{
    public function home()
    {
        return view('principal');
    }

    public function formulario()
    {
        return view('Registro');
        
    }

}
