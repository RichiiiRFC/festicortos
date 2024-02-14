@extends('plantilla')
@section('titulo', 'Busqueda de libro')
@section('contenido')
<h1>Busqueda de libro</h1>
<form action="{{ route('libros.listadofiltro') }}" method="POST">
    @csrf
    <div class="row mb-3">
        

        <div class="form-group">
            <label for="autores">Autor:</label>
            <select class="form-control" name="autor" id="autores">

            @foreach($autores as $autor)

            <option value="{{$autor->id}}"> {{$autor->nombre}}</option>

            @endforeach

            </select>
        </div>
       
        </div>
        <input type="submit" value="Enviar" class="btn btn-dark
btn-block">
</form>
@endsection