@extends('plantilla')
@section('titulo', 'Lista de Libros Filtrados')
@section('contenido')
<h1>Listado de libros del Autor: {{$autor->nombre}}</h1>

<ul>
@foreach($autor->libros as $libro)

<li><a href="{{ route('libros.show', $libro->id) }}">{{$libro->titulo}}</a></li>





@endforeach

</ul>








@endsection
