<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function procesarCliente(Request $peticion)
    {
        /* return 'Si llego la info del cliente :) '; */
        
        //mostramos todo lo que trae la peticion
     /*    return $peticion->all(); */
     
     //ruta donde se realizo la peticion
     /* return $peticion->path(); */

     //url del origen de la peticion
     /* return $peticion->url(); */

     /* return $peticion->ip(); */
     


     //respuestas de redireccion

     //redireccion usando la ruta
      //return redirect('/');

     //Redireciones usnado el nombre de la ruta
      //return redirect()->route('rutaClientes');

      //Redirecion al origen de la peticion
      //return back();

      //redireccionamiento con varible adjunta
      //$id=[['usuario'=>1],['usuario'=>2]];

      //return view('formulario',compact('id'));

      //redireccion con un mensaje flash en session
      $usuario= $peticion->input('txtnombre');

      session()->flash('exito','Se guardo el usuario: '.$usuario);
      return to_route('rutaform');
 




    }
}
