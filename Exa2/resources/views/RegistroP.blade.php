<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>registro</title>
</head>
<body>
    <h1>Registro de Prendas</h1>

    @if(session('exito'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('exito') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @session('exito')
        
         <script>Swal.fire({
        title: "Respuesta Servidor",
        text: '{{ $value }}',
        icon: "success"
        }); </script> 
 
        @endsession
  

    <form action="/register" method="POST">

        @csrf

    
        <label for="name">Prenda:</label>
        <input type="text" class="form-control" name="txtPrenda" value="{{old('txtPrenda')}}"  >
        <small class="text-danger fts-italic"> {{ $errors->first('txtPrenda')}}</small>

        <label for="email"> Color:</label>
        <input type="text" class="form-control" name="txtColor" value="{{old('txtColor')}}"  >
        <small class="text-danger fts-italic"> {{ $errors->first('txtColor')}}</small>
    
        <label for="password">Cantidad:</label>
        <input type="text" class="form-control" name="txtCantidad" value="{{old('txtCantidad')}}"  >
        <small class="text-danger fts-italic"> {{ $errors->first('txtCantidad')}}</small>

        
        <button type="submit" class="btn btn-danger mt-3">Guardar Prenda</button>

    </form>
</body>
</body>
</html>