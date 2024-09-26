<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite(["resources/js/app.js"])
    <link rel="stylesheet" href="{{ asset('css/fondo.css') }}">

    <title>Consultar clientes</title>
</head>
<body>
    {{-- Iniciar navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('rutainicio') }}">Turista sin Maps</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('rutaformulario') }}">Registro clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Consulta clientes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Finalizar navbar --}}

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
</body>
</html>
