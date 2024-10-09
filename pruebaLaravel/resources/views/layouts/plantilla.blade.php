<!DOCTYPE html>
<html >
<head>

    <!-- soy la plantiñña para formulario y cliente -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(["resources/js/app.js"])
    <title>@yield('titulo')</title>

</head>
<body>
{{-- Iniciar navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('rutaInicio') }}">Turista sin Maps</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('rutaform') }}">Registro clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rutaClientes') }}">Consulta clientes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Finalizar navbar --}}

    @yield('contenido')

</body>
</html>