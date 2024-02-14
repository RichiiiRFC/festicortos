@extends('plantilla')
@section('titulo', 'Detalles')
@section('contenido')
<div class="container mt-4">
    <h1 class="mb-4">Libro</h1>

            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title">Libro: {{$libro->titulo}}</h2>
                    <h3 class="card-subtitle mb-2 text-muted">Editorial: {{$libro->editorial}}</h3>
                    <h3 class="card-subtitle mb-2 text-muted">Precio: {{$libro->precio}}</h3>
                    <h3 class="card-subtitle mb-2 text-muted">Autor: {{$libro->autor->nombre}}</h3>

                </div>
            </div>
        

</div>

@endsection
