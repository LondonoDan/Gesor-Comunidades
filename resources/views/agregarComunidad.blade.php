@extends('layaut/plantillas')

@section('tituloPagina', 'agregar una comunidad')

@section('contenido')
<div class="card">
  <h5 class="card-header">Agregar comunidad</h5>
  <div class="card-body">
    <p class="card-text">
        <form action="{{route('comunidades.stored')}}" method="POST">
          @csrf

          <label for="">Pais</label>
            <select name="pais" class="form-control" required>
                <option value="Colombia">Colombia</option>
              </select>
              <br>

            <label for="">Departamento</label>
              <select name="departamento" class="form-control" required>
                <option value="Putumayo">Putumayo</option>
                <option value="Amazonas"> Amazonas</option>
                <option value="Antioquia"> Antioquia</option>
            </select>
            <br>

            <label for="">Municipio</label>
              <select name= "municipio" class="form-control" required>
                <option value="Mocoa">Mocoa</option>
                <option value="Leticia ">Leticia </option>
                <option value="Medellin">Medellín</option>
              </select>
              <br>

            <label for="">Ubicación geográfica</label>
              <input type="text" name= "ubicacion_geografica" class="form-control" required>
            <br>

            <label for="">Nombre de la comunidad</label>
              <select name="nombre" id="nombre" class="form-control" required>
                <option value="Indigena">Indígena</option>
                <option value="Afro">Afro</option>
                <option value="Maku">Maku</option>
              </select>
            <br>

            <button class="btn btn-primary">
              <i class="fa-solid fa-user-plus fa-lg"></i>Agregar comunidad</button>
            <a href="{{route('personas.index')}}">
              <i class="fa-solid fa-rotate-left fa-lg"></i>Regresar al inicio</a>
        </form>
    </p>
  </div>
</div>



@endsection