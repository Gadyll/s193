@extends('layouts.plantilla')


@section('contenido')
    
<div class="card shadow-lg">
    <div class="card-header bg-primary text-white text-center">
        <h5 class="mb-0">Registro de Nuevo Libro</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('rutaregistro') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" required placeholder="Ingrese el ISBN (13 dígitos)">
                </div>
                <div class="col-md-6">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" class="form-control" id="title" name="title" required maxlength="150" placeholder="Ingrese el título del libro">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="author" class="form-label">Autor</label>
                    <input type="text" class="form-control" id="author" name="author" required placeholder="Ingrese el autor del libro">
                </div>
                <div class="col-md-6">
                    <label for="pages" class="form-label">Páginas</label>
                    <input type="number" class="form-control" id="pages" name="pages" required min="1" placeholder="Ingrese el número de páginas">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="year" class="form-label">Año</label>
                    <input type="number" class="form-control" id="year" name="year" required min="1000" max="{{ date('Y') }}" placeholder="Ingrese el año de publicación">
                </div>
                <div class="col-md-6">
                    <label for="publisher" class="form-label">Editorial</label>
                    <input type="text" class="form-control" id="publisher" name="publisher" required placeholder="Ingrese la editorial del libro">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email de Editorial</label>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="Ingrese el correo electrónico de la editorial">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-3">Guardar Libro</button>
            </div>
        </form>
    </div>
</div>


@endsection
