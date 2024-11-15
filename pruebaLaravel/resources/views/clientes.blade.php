
@extends('layouts.plantilla')
@section('titulo','clientes')

@section('contenido')

    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">
        @foreach($consultaclientes as $cliente)


        <div class="card text-justify font-monospace mt-4">
            <div class="card-header fs-5 text-primary">
                {{ $cliente->nombre }}
            </div>

            <div class="card-body">
                <h5 class="fw-bold">{{ $cliente->correo }}</h5>
                <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
                <p class="card-text fw-lighter"></p>
            </div>

            <div class="card-footer text-muted">
                <button type="button" class="btn btn-warning btn-sm">Actualizar</button>
                <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
            </div>
        </div>
        @endforeach
    </div>
    {{-- Finalizar tarjetaCliente --}}

@endsection