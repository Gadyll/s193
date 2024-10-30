<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\validadorFormulario;

class BiblioController extends Controller
{
    public function home()
    {
        return view('principal');
    }

    public function Registro()
    {
        return view('Registro');
        
    }

    public function procesarFormulario(validadorFormulario $peticion)
    {
        $validacion= $peticion->validate([

            'txtISBN'=> 'required|digits:13|numeric',
            'txttitulo'=> 'required|min:4|max:150',
            'txtautor'=> 'required |min:4 | max:20 ',
            'txtpaginas'=> 'required|min:4|max:150',
            'txtaño'=>  'required|integer|digits:4|min:1000|max:' . date('Y'),
            'txteditorial'=> 'required |min:4 | max:20 ',
            'txtcorreo'=> 'email:rfc:dns ',
            
            
            
        ]);

    $libro= $peticion->input('txttitulo');

    session()->flash('exito','Se guardo el Libro: '.$libro);
    return to_route('rutaregistro');



    }

}
