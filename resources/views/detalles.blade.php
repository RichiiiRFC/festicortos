@extends('plantilla')
@section('titulo', 'Home')
@section('contenido')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Cortos</h1>

    @foreach($cortos as $corto)
        @if($corto['id'] == $id)
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title">{{ $corto['titulo'] }}</h2>
                    <h3 class="card-subtitle mb-2 text-muted">Director: {{ $corto['director'] }}</h3>
                    <p class="card-text">Sinopsis: {{ $corto['sinapsis'] }}</p>
                    <a href="{{ route('cortos')}}" class="btn btn-outline-primary float-right">Volver</a>

                </div>
            </div>
        @endif
    @endforeach

</div>

@endsection

