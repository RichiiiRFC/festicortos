
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="{{ route('libros.create') }}">Añadir Libro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('autores.create') }}">Añadir Autor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('libros.index') }}">Mantenimiento de libros</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{ route('autores.index') }}">Mantenimiento de autores</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('cortos') }}">Lista de cortos</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="{{ route('libros.listado') }}">Lista de libros</a>
        </li>
        

        
      </ul>
    </div>
  </div>
</nav>