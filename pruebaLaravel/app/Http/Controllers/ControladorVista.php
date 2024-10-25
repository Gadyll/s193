<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class ControladorVista extends Controller

// usamos este controlador para administrar la logica de las vistas
{
    public function home()
    {
        return view('inicio');
    }

    public function formulario()
    {
        return view('formulario');
        
    }

    public function consulta()
    {
        return view('clientes');
    }

    public function procesarCliente(validadorCliente $peticion)
    {
        $validacion= $peticion->validate([
            'txtnombre'=> 'required |min:4 | max:20 ',
            'txtapellido'=> 'required |min:4 | max:20 ',
            'txtcorreo'=> 'email:rfc:dns ',
            'txttelefono'=> 'required|numeric',
        ]);



      //redireccion con un mensaje flash en session
      $usuario= $peticion->input('txtnombre');

      session()->flash('exito','Se guardo el usuario: '.$usuario);
      return to_route('rutaform');
 




    }
}
