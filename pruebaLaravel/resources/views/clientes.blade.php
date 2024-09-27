
@extends('layouts.plantilla')

@section('contenido1')

    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">
        <div class="card text-justify font-monospace">
            <div class="card-header fs-5 text-primary">
                Ivan Isay Guerra
            </div>

            <div class="card-body">
                <h5 class="fw-bold">ivan.guerra@outlook.com</h5>
                <h5 class="fw-medium">7202988384</h5>
                <p class="card-text fw-lighter"></p>
            </div>

            <div class="card-footer text-muted">
                <button type="button" class="btn btn-warning btn-sm">Actualizar</button>
                <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
            </div>
        </div>
    </div>
    {{-- Finalizar tarjetaCliente --}}

@endsection