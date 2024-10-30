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

   
    <nav class="navbar navbar-expand-lg navbar-secondary  bg-secondary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutaprincipal') ? 'text-primary' : '' }}" href="{{ route('rutaprincipal') }}">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutaregistro') ? 'text-primary' : '' }}" href="{{ route('rutaregistro') }}">Registro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    


    <main class="container my-4">
        @yield('contenido')
    </main>


    <footer class="bg-secondary text-white text-center py-3">
        <p class="mb-0">Biblioteca El Ton@ © {{ now()->format('d F Y') }}</p>
    </footer>

</body>
</html>
