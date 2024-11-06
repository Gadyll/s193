<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormulario;

class PrendaController extends Controller
{
    public function Registro()
    {
        return view('Registro');
        
    }

    public function procesarCliente(validadorCliente $peticion)
    {
        $validacion= $peticion->validate([

            'txtPrenda'=> 'required|min:4|max:150',
            'txtColor'=> 'required|min:4|max:150',
            'txtCantidad'=> 'required|digits:13|numeric',


            
            
            
            
        ]);



     /*  redireccion con un mensaje flash en session
      $usuario= $peticion->input('txtnombre');

      session()->flash('exito','Se guardo el usuario: '.$usuario);
      return to_route('rutaform'); */
    }
}
