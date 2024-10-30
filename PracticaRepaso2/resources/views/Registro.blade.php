@extends('layouts.plantilla')
@section('titulo', 'Registro')

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
                    <input type="text" class="form-control" name="txtISBN" value="{{old('txtISBN')}}"  >
                    <small class="text-danger fts-italic"> {{ $errors->first('txtISBN')}}</small>
                </div>
                <div class="col-md-6">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="txttitulo" value="{{old('txttitulo')}}"  >
                    <small class="text-danger fts-italic"> {{ $errors->first('txttitulo')}}</small>
                    
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="autor" class="form-label">Autor</label>
                    <input type="text" class="form-control" name="txtautor" value="{{old('txtautor')}}" >
                    <small class="text-danger fts-italic"> {{ $errors->first('txtautor')}}</small>
                </div>
                <div class="col-md-6">
                    <label for="paginas" class="form-label">Paginas</label>
                    <input type="number" class="form-control" name="txtpaginas" value="{{old('txtpaginas')}}" >
                    <small class="text-danger fts-italic"> {{ $errors->first('txtpaginas')}}</small>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="año" class="form-label">Año</label>
                    <input type="number" name="txtaño"  class="form-control" value="{{old('txtaño')}}" >
                    <small class="text-danger fts-italic"> {{ $errors->first('txtaño')}}</small>
                </div>
                <div class="col-md-6">
                    <label for="editorial" class="form-label">Editorial</label>
                    <input type="text" class="form-control" name="txteditorial" value="{{old('txteditorial')}}" > 
                    <small class="text-danger fts-italic"> {{ $errors->first('txteditorial')}}</small>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="correo" class="form-label">Correo de Editorial</label>
                    <input type="email" class="form-control"  name="txtcorreo" value="{{old('txtcorreo')}}"  >
                    <small class="text-danger fts-italic"> {{ $errors->first('txtcorreo')}}</small>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-3">Guardar Libro</button>
            </div>
        </form>
    </div>
</div>


@endsection
