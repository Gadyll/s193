@extends('layouts.plantilla')

@section('titulo', 'Principal')

@section('contenido')
<div class="container mt-5">
    <div class="text-center">
        <h1 class="display-4 fw-bold mb-4">Bienvenido a EL TON@</h1>
    </div>
    
    <div class="card shadow-lg mx-auto" style="max-width: 600px;">
        <div class="card-body text-center">
            <div class="mb-4">
                
                <img src="IMG/PORTADA EL PAÍS.jpg" alt="Imagen de Bienvenida" class="img-fluid rounded" >
            </div>
            
            <div>
                
                <p class="lead text-muted">"La lectura es el viaje de quienes no pueden tomar el tren" - Francis de Croisset.</p>
                <p class="text-muted">Explora mundos infinitos y conoce historias que dejarán huella en cada página. Bienvenido a nuestra biblioteca, un espacio donde cada libro es una nueva aventura esperando ser descubierta.</p>
            </div>
        </div>
    </div>
</div>

@endsection

