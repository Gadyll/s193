<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(["resources/js/app.js"])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.css"/>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/themes/default.min.css"/>
   <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script> -->

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
                        <a class="nav-link {{ request()->routeIs('rutaprincipal') ? 'text-primary' : '' }}" href="{{ route('rutaprincipal') }}">{{ __('Principal')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutaregistro') ? 'text-primary' : '' }}" href="{{ route('rutaregistro') }}">{{ __('Registro')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    


    <main class="container my-4">
        @yield('contenido')
    </main>


    <footer class="bg-secondary text-white text-center py-3">
        <p class="mb-0">{{ __('Biblioteca El Ton@ ©')}} {{ now()->format('d F Y') }}</p>
    </footer>

</body>
</html>
