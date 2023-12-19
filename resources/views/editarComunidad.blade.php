@extends('layaut/plantillas')

@section('tituloPagina', 'Editar comunidad')

@section('contenido')

<div class="card">
  <h5 class="card-header">Editar registro de una comunidad</h5>
  <div class="card-body">
    <p class="card-text">
        <form action="{{route('comunidades.updated', $comunidades->id)}}" method="POST">
          @csrf
          @method("GET") 
            <label for="">Pais</label>
              <input type="text" name= "pais" class="form-control" required value="{{$comunidades->pais}}">
            <br>

            <label for="">Departamento</label>
              <input type="text" name= "departamento" class="form-control" required value="{{$comunidades->departamento}}">
            <br>

            <label for="">Municipio</label>
              <input type="text" name= "municipio" class="form-control" required value="{{$comunidades->municipio}}">
            <br>

            <label for="">Ubicación geográfica</label>
              <input type="text" name= "ubicacion_geografica" class="form-control" required value="{{$comunidades->ubicacion_geografica}}">
            <br>

            <label for="">Nombre de la comunidad</label>
              <input type="text" name="nombre" id="nombre " class="form-control" required value="{{$comunidades->nombre}}">
            <br>

            <button class="btn btn-warning">
              <i class="fa-solid fa-user-pen fa-lg"></i>Editar</button>
            <a href="{{route('personas.index')}}">
              <i class="fa-solid fa-rotate-left fa-lg"></i>Regresar al inicio</a>
        </form>
    </p>
  </div>
</div>

@endsection