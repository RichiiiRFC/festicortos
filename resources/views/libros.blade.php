@extends('plantilla')
@section('titulo', 'Lista de Cortos')
@section('contenido')
<h1>Listado de libros</h1>
    
    @forelse ($libros as $libro)
        <table>
            <tr>
                <td>{{ $libro["titulo"] }}</td>
                <td>{{ $libro["autor"] }}</td>
            </tr>
        </table>
    @empty
        <p>No se encontraron libros</p>
    @endforelse

@endsection