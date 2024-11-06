<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormulario;

class PrendaController extends Controller
{
    public function Registro()
    {
        return view('RegistroP');
        
    }

    public function procesarRegistro(validadorFormulario $peticion)
    {
        $validacion= $peticion->validate([

            'txtPrenda'=> 'required|min:4|max:150',
            'txtColor'=> 'required|min:4|max:150',
            'txtCantidad'=> 'required|digits:1|numeric',

            
        ]);


      $prenda= $peticion->input('txtPrenda');

      session()->flash('exito','Se guardo: '.$prenda);
      return to_route('rutaregister'); 
    }
}
