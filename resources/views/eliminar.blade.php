@extends('layaut/plantillas')

@section('tituloPagina', 'Eliminar usuario')

@section('contenido')

<div class="card">
  <h5 class="card-header">Eliminar un registro de usuario</h5>
  <div class="card-body">
    <p class="card-text">
        <div class="alert alert-danger" role="alert">
        
        Estas seguro que deseas eliminar este registro?!
        <br><br>
        <table class="table table-sm table-hover">
            <thead>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Genero</th>
                <th>Edad</th>
                <th>Documento</th>
                <th>Telefono</th>
                <th>Comunidad</th>
                <th>Correo electronico</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{$personas->nombre}}</td>
                    <td>{{$personas->apellido}}</td>
                    <td>{{$personas->genero}}</td>
                    <td>{{$personas->edad}}</td>
                    <td>{{$personas->documento}}</td>
                    <td>{{$personas->telefono}}</td>
                    <td>{{$personas->comunidad_id}}</td>
                    <td>{{$personas->correo_electronico}}</td>
                </tr>
                
            </tbody>
        </table>
        <a href="{{route('personas.delete', $personas->id)}}">
            <i class="fa-solid fa-circle-xmark fa-lg"></i>Eliminar
        </a>
        
        <a href="{{route('personas.index')}}">
            <i class="fa-solid fa-rotate-left fa-lg"></i>Regresar al inicio
        </a>
        
        </div>
     </p>
  </div>
</div>

@endsection