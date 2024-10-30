@extends('layouts.plantilla')

@section('titulo', 'Principal')

@section('contenido')
<div class="container mt-5">
    <div class="text-center">
        <h1 class="display-4 fw-bold mb-4">Bienvenido</h1>
    </div>
    
    <div class="card shadow-lg mx-auto" style="max-width: 600px;">
        <div class="card-body text-center">
            <div class="mb-4">
                <!-- Espacio para insertar la imagen -->
                <img src="URL_DE_LA_IMAGEN" alt="Imagen de Bienvenida" class="img-fluid rounded" style="max-height: 300px; object-fit: cover;">
            </div>
            
            <div>
                <!-- Texto literario -->
                <p class="lead text-muted">"La lectura es el viaje de quienes no pueden tomar el tren" - Francis de Croisset.</p>
                <p class="text-muted">Explora mundos infinitos y conoce historias que dejarán huella en cada página. Bienvenido a nuestra biblioteca, un espacio donde cada libro es una nueva aventura esperando ser descubierta.</p>
            </div>
        </div>
    </div>
</div>

@endsection

