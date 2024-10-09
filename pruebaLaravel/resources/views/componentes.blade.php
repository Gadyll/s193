@extends('layouts.plantilla')

@section('titulo','Coponentes Blade')

@section('contenido')

<x-Card encabezado="Componente" titulo="Dinamico" textoBoton="Guardar"> 
    soy el contenido del primero
</x-Card>

<x-Card encabezado="Componente 2" titulo="Dinamico 2" textoBoton=" no Guardar">
   otro gato!!!!!!!!!!
</x-Card>

@endsection