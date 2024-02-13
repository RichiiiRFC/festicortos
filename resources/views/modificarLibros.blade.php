@extends('plantilla')
@section('titulo', 'Modificar libro')
@section('contenido')
<h1>Modificar Libro</h1>
<form action="{{ route('libros.update', $id)  }}" method="POST">
    @csrf
    @method("PUT")
    <div class="row mb-3">
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" name="titulo" id="titulo" value="{{$libro->titulo}}">
        </div>
        <div class="form-group">
            <label for="editorial">Editorial:</label>
            <input type="text" class="form-control" name="editorial" id="
editorial" value="{{$libro->editorial}}">
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="text" class="form-control" name="precio" id="precio" value="{{$libro->precio}}">
        </div>
       
        </div>
        <input type="submit" name="enviar" value="Modificar" class="btn btn-dark
btn-block">

</form>
@endsection