<!DOCTYPE html>
<html >
<head>

    <!-- soy la plantiñña para formulario y cliente -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(["resources/js/app.js"])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <title>@yield('titulo')</title>

</head>
<body>
{{-- Iniciar navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand {{ request()->routeIs('rutaInicio')?'':'' }}" href="{{ route('rutaInicio') }}">{{ __('Turista sin Maps')}}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutaform')?'text-warning':'' }}" aria-current="page" href="{{ route('rutaform') }}">{{ __('Registro clientes')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutaClientes')?'text-warning':'' }}"  href="{{ route('rutaClientes') }}">{{ __('Consulta clientes')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Finalizar navbar --}}

    @yield('contenido')

</body>
</html>