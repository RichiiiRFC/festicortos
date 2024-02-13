@extends('plantilla')
@section('titulo', 'Lista de Autores')
@section('contenido')
<h1>Listado de autores</h1>
<table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Autor</th>
                <th>Editorial</th>

                <th>Acciones</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($autores as $autor)
                <tr>
                    
                    <td>{{ $autor->nombre }}</td>
                    <td>{{ $autor->nacimiento }}</td>
                   
            
                    <td>

                        <a class="btn btn-primary" href="{{ route('autores.edit', $autor['id']) }}">Modificar</a>

                   
                

                        
                        <form action="{{ route('autores.destroy', $autor) }}" method="POST">
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
