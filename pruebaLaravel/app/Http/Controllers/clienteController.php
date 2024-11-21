<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;

class clienteController extends Controller
{
    /**
     * Aqui va la consulta de todo el CRUD
     */
    public function index()
    {
        $consultaclientes=DB::table('clientes')->get();
        return view('clientes',compact('consultaclientes'));
    }

    /**
     * Lo usamos para 
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Aqui me aviento el insert
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            "nombre" => $request->input('txtnombre'),
            "apellido" => $request->input('txtapellido'),
            "correo" => $request->input('txtcorreo'),
            "telefono" => $request->input('txttelefono'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
        ]);

        $usuario=$request->input('txtnombre');

        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaform');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Mostrar formulario para editar cliente
     */
    public function edit( $id)
    {
        $cliente = DB::table('clientes')->where('id', $id)->first();

        if (!$cliente) {
            return redirect()->route('rutaClientes')->with('error', 'Cliente no encontrado.');
        }

        return view('editarFormulario', compact('cliente'));
    }

    /**
     * Actualizar cliente existente
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'txtnombre' => 'required|max:20',
            'txtapellido' => 'required|max:20',
            'txtcorreo' => 'required|email',
            'txttelefono' => 'required|numeric',
        ]);

        DB::table('clientes')
            ->where('id', $id)
            ->update([
                'nombre' => $request->input('txtnombre'),
                'apellido' => $request->input('txtapellido'),
                'correo' => $request->input('txtcorreo'),
                'telefono' => $request->input('txttelefono'),
                'updated_at' => Carbon::now(),
            ]);

        return redirect()->route('rutaClientes')->with('success', 'Cliente actualizado correctamente.');
    }


    /**
     * Eliminar cliente
     */
    public function destroy($id)
    {
        DB::table('clientes')->where('id', $id)->delete();

        return redirect()->route('rutaClientes')->with('success', 'Cliente eliminado correctamente.');
    }
}
