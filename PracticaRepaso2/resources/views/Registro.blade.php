@extends('layouts.plantilla')
@section('titulo', 'Registro')

@section('contenido')

<div class="container mt-8 col-md-10">
    
    @if(session('exito'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('exito') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @session('exito')
    <script>
        Swal.fire({
            title: "Respuesta Servidor",
            text: '{{ $value }}',
            icon: "success"
        });
    </script>
@endsession

<!-- @if(session('exito'))
    <div id="custom-alert-container" class="alert alert-success alert-dismissible fade show" role="alert">
    
    </div>

    <script>
        let alerta='{{ session('exito') }}';
        alertify.success(alerta);
        document.getElementById('custom-alert-container').innerHTML = alerta,('<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'); 
        
    </script>
@endif -->



    

    <div class="card-header bg-danger text-white text-center">
        <h5 class="mb-0">{{ __('Registro de Nuevo Libro')}}</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('rutaregistro') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="isbn" class="form-label">{{ __('ISBN')}}</label>
                    <input type="text" class="form-control" name="txtISBN" value="{{old('txtISBN')}}"  >
                    <small class="text-danger fts-italic"> {{ $errors->first('txtISBN')}}</small>
                </div>
                <div class="col-md-6">
                    <label for="titulo" class="form-label">{{ __('Titulo')}}</label>
                    <input type="text" class="form-control" name="txttitulo" value="{{old('txttitulo')}}"  >
                    <small class="text-danger fts-italic"> {{ $errors->first('txttitulo')}}</small>
                    
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="autor" class="form-label">{{ __('Autor')}}</label>
                    <input type="text" class="form-control" name="txtautor" value="{{old('txtautor')}}" >
                    <small class="text-danger fts-italic"> {{ $errors->first('txtautor')}}</small>
                </div>
                <div class="col-md-6">
                    <label for="paginas" class="form-label">{{ __('Paginas')}}</label>
                    <input type="number" class="form-control" name="txtpaginas" value="{{old('txtpaginas')}}" >
                    <small class="text-danger fts-italic"> {{ $errors->first('txtpaginas')}}</small>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="año" class="form-label">{{ __('Año')}}</label>
                    <input type="number" name="txtaño"  class="form-control" value="{{old('txtaño')}}" >
                    <small class="text-danger fts-italic"> {{ $errors->first('txtaño')}}</small>
                </div>
                <div class="col-md-6">
                    <label for="editorial" class="form-label">{{ __('Editorial')}}</label>
                    <input type="text" class="form-control" name="txteditorial" value="{{old('txteditorial')}}" > 
                    <small class="text-danger fts-italic"> {{ $errors->first('txteditorial')}}</small>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="correo" class="form-label">{{ __('Correo de Editorial')}}</label>
                    <input type="email" class="form-control"  name="txtcorreo" value="{{old('txtcorreo')}}"  >
                    <small class="text-danger fts-italic"> {{ $errors->first('txtcorreo')}}</small>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-danger mt-3">{{ __('Guardar Libro')}}</button>
            </div>
        </form>
    </div>
</div>


@endsection
