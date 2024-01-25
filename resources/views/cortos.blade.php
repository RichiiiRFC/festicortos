@extends('plantilla')
@section('titulo', 'Lista de Cortos')
@section('contenido')

<div class="container mt-4">
    <h1 class="mb-4">Lista de Cortos</h1>

    @foreach($cortos as $corto)
        <div class="card mb-3">
            <div class="card-body">
                <h2 class="card-title">{{ $corto['titulo'] }}</h2>
                <h3 class="card-subtitle mb-2 text-muted">Director: {{ $corto['director'] }}</h3>
                <p class="card-text">Sinopsis: {{ $corto['sinapsis'] }}</p>
                <a href="{{ route('detalles', $corto['id']) }}" class="btn btn-outline-primary float-right">Detalles</a>
            </div>
        </div>
    @endforeach

</div>

@endsection



