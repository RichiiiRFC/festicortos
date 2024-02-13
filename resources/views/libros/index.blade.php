@extends('plantilla')
@section('titulo', 'Mantenimiento de Libros')
@section('contenido')
<h1>Mantenimiento de libros</h1>
<table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Título</th>
                <th>Editorial</th>
                <th>Precio</th>
            
                <th>Acciones</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->editorial }}</td>
                    <td>{{ $libro->precio }}</td>
                    
                    <td>
                    <a class="btn btn-primary" href="{{ route('libros.edit', $libro['id']) }}">Modificar</a>

                   
                

                        
                        <form action="{{ route('libros.destroy', $libro) }}" method="POST">
                             @csrf
                             @method('DELETE')
                             <button class="btn btn-danger" type="submit">Borrar</button>
                        </form>

                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
