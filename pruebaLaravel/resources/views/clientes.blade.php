
@extends('layouts.plantilla')
@section('titulo','clientes')

@section('contenido')

    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">


    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

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
            <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-warning btn-sm">Actualizar</a>
            <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Estas seguro de eliminar este cliente?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </form>
        </div>
    </div>
        @endforeach
    </div>
    {{-- Finalizar tarjetaCliente --}}

@endsection