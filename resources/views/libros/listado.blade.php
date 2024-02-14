@extends('plantilla')
@section('titulo', 'Lista de Libros')
@section('contenido')
<h1>Listado de libros</h1>

<ul>
@foreach($libros as $libro)

<li><a href="{{ route('libros.show', $libro) }}">{{$libro->titulo}} ({{$libro->autor->nombre}})</a></li>





@endforeach

</ul>

{{ $libros->links() }}







@endsection
