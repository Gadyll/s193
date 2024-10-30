@extends('layouts.plantilla')

@section('titulo', 'Registro')

@section('contenido')
    <section class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Registro de Nuevo Libro</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store.book') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="isbn" class="form-label">ISBN</label>
                                <input type="text" class="form-control" id="isbn" name="isbn" required placeholder="Ingrese el ISBN (13 dígitos)">
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Título</label>
                                <input type="text" class="form-control" id="title" name="title" required maxlength="150" placeholder="Ingrese el título del libro">
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">Autor</label>
                                <input type="text" class="form-control" id="author" name="author" required placeholder="Ingrese el autor del libro">
                            </div>
                            <div class="mb-3">
                                <label for="pages" class="form-label">Páginas</label>
                                <input type="number" class="form-control" id="pages" name="pages" required min="1" placeholder="Ingrese el número de páginas">
                            </div>
                            <div class="mb-3">
                                <label for="year" class="form-label">Año</label>
                                <input type="number" class="form-control" id="year" name="year" required min="1000" max="{{ date('Y') }}" placeholder="Ingrese el año de publicación">
                            </div>
                            <div class="mb-3">
                                <label for="publisher" class="form-label">Editorial</label>
                                <input type="text" class="form-control" id="publisher" name="publisher" required placeholder="Ingrese la editorial del libro">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email de Editorial</label>
                                <input type="email" class="form-control" id="email" name="email" required placeholder="Ingrese el correo electrónico de la editorial">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar Libro</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
