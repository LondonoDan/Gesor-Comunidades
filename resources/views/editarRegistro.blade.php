@extends('layaut/plantillas')

@section('tituloPagina', 'Editar usuario')

@section('contenido')

<div class="card">
  <h5 class="card-header">Editar registro</h5>
  <div class="card-body">
    <p class="card-text">
        <form action="{{route('personas.update', $personas->id)}}" method="POST">
          @csrf
          @method("GET") 
            <label for="">Nombre</label>
              <input type="text" name= "nombre" class="form-control" required value="{{$personas->nombre}}">
            <br>

            <label for="">Apellido</label>
              <input type="text" name= "apellido" class="form-control" required value="{{$personas->apellido}}">
            <br>

            <label for="">Genero</label>
            <br>
              <select name="genero" id="genero" class="form-control" required value="{{$personas->genero}}">
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
              </select>
            <br>
            
            <label for="">Edad</label>
              <input type="number" name= "edad" class="form-control" required value="{{$personas->edad}}">
            <br>

            <label for="">Telefono</label>
              <input type="number" name= "telefono" class="form-control" required value="{{$personas->telefono}}">
            <br>

            <label for="">Documento de identidad</label>
              <input type="text" name= "documento" class="form-control" required value="{{$personas->documento}}">
            <br>

            <label for="comunidades">Comunidad:</label>
            <select name="comunidad_id" id="comunidades">
            @foreach ($comunidades as $comunidad)
            <option value="{{$comunidad->id}}">{{ $comunidad->nombre }}</option>
            @endforeach
            </select>
            <br><br>

            <label for="">Correo electronico</label>
              <input type="text" name= "correo_electronico" class="form-control" required value="{{$personas->correo_electronico}}">
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