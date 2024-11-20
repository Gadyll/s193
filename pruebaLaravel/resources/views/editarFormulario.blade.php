@extends('layouts.plantilla')
@section('titulo','Editar Cliente')

@section('contenido')

<div class="container mt-5 col-md-6">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card font-monospace">
        <div class="card-header fs-5 text-primary">
            Editar Cliente
        </div>

        <div class="card-body text-justify">
            <form action="{{ route('cliente.update', $cliente->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre', $cliente->nombre) }}">
                </div>

                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido:</label>
                    <input type="text" class="form-control" name="txtapellido" value="{{ old('txtapellido', $cliente->apellido) }}">
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">Correo:</label>
                    <input type="text" class="form-control" name="txtcorreo" value="{{ old('txtcorreo', $cliente->correo) }}">
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="text" class="form-control" name="txttelefono" value="{{ old('txttelefono', $cliente->telefono) }}">
                </div>
        </div>

        <div class="card-footer text-muted">
            <div class="d-grid gap-2 mt-2 mb-1">
                <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('¿Deseas actualizar este cliente?');">Actualizar Cliente</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection
