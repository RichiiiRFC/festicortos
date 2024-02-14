@extends('plantilla')
@section('titulo', 'Modificar autor')
@section('contenido')
<h1>Modificar Autor</h1>
<form action="{{ route('autores.update', $id)  }}" method="POST">
    @csrf
    @method("PUT")
    <div class="row mb-3">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{$autor->nombre}}">
        </div>
        <div class="form-group">
            <label for="nacimiento">Nacimiento:</label>
            <input type="text" class="form-control" name="nacimiento" id="
nacimiento" value="{{$autor->nacimiento}}">
        </div>
        
       
        </div>
        <input type="submit" name="enviar" value="Modificar" class="btn btn-dark
btn-block">

</form>
@endsection