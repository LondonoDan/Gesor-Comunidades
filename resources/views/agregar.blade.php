@extends('layaut/plantillas')

@section('tituloPagina', 'agregar un usuario')

@section('contenido')

<div class="card">
  <h5 class="card-header">Agregar nuevo usuario</h5>
  <div class="card-body">
    <p class="card-text">
        <form action="{{route('personas.store')}}" method="POST">
          @csrf
            <label for="">Nombre</label>
              <input type="text" name= "nombre" class="form-control" required>
            <br>

            <label for="">Apellido</label>
              <input type="text" name= "apellido" class="form-control" required>
            <br>

            <label for="">Genero</label>
              <select name="genero" id="genero" class="form-control" required>
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
              </select>
            <br>

            <label for="">Edad</label>
              <input type="number" name= "edad" class="form-control" required>
            <br>

            <label for="">Telefono</label>
              <input type="text" name= "telefono" class="form-control" required>
            <br>

            <label for="">Documento de identidad</label>
              <input type="text" name= "documento" class="form-control" required>
            <br>

            <label for="comunidades">Comunidad:</label>
            <select name="comunidad_id" id="comunidades">
            @foreach ($comunidades as $comunidad)
            <option value="{{$comunidad->id}}">{{ $comunidad->nombre }}</option>
            @endforeach
            </select>
            <br><br>
            

            <label for="">Correo electronico</label>
              <input type="text" name= "correo_electronico" class="form-control" required>
            <br>

            <button class="btn btn-primary">
              <i class="fa-solid fa-user-plus fa-lg"></i>Agregar registro</button>
            <a href="{{route('personas.index')}}">
              <i class="fa-solid fa-rotate-left fa-lg"></i>Regresar al inicio</a>
        </form>
    </p>
  </div>
</div>

@endsection