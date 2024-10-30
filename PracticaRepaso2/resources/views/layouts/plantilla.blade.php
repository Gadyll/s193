<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(["resources/js/app.js"])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('titulo')</title>
</head>
<body>

    {{-- Barra de navegación --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand {{ request()->routeIs('rutaprincipal') ? 'text-warning' : '' }}" href="{{ route('rutaprincipal') }}">Biblioteca</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutaprincipal') ? 'text-warning' : '' }}" href="{{ route('rutaprincipal') }}">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutaregistro') ? 'text-warning' : '' }}" href="{{ route('rutaregistro') }}">Registro de Libro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Fin de la barra de navegación --}}

    {{-- Contenido principal --}}
    <main class="container my-4">
        @yield('contenido')
    </main>

    {{-- Pie de página --}}
    <footer class="bg-dark text-light text-center py-3">
        <p class="mb-0">Biblioteca © {{ now()->format('d F Y') }}</p>
    </footer>

</body>
</html>
