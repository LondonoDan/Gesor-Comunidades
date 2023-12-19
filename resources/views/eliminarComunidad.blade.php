@extends('layaut/plantillas')

@section('tituloPagina', 'Eliminar comunidad')

@section('contenido')

<div class="card">
  <h5 class="card-header">Eliminar un registro de comunidad</h5>
    <div class="card-body">
        <p class="card-text">
        <div class="alert alert-danger" role="alert">
        
        Estas seguro que deseas eliminar esta comunidad?!
        <br><br>
        <table class="table table-sm table-hover">
            <thead>
                <th>Pais</th>
                <th>Departamento</th>
                <th>Municipio</th>
                <th>Ubicación geográfica</th>
                <th>Nombre de la comunidad</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{$comunidades->pais}}</td>
                    <td>{{$comunidades->departamento}}</td>
                    <td>{{$comunidades->municipio}}</td>
                    <td>{{$comunidades->ubicacion_geografica}}</td>
                    <td>{{$comunidades->nombre}}</td>
                </tr>
                
            </tbody>
        </table>
        <a href="{{route('comunidades.remove', $comunidades->id)}}">
            <i class="fa-solid fa-circle-xmark fa-lg"></i>Eliminar
        </a>
           
        <a href="{{route('personas.index')}}">
            <i class="fa-solid fa-rotate-left fa-lg"></i>Regresar al inicio</a>
        
        </div>
        </p>
    </div>
</div>

@endsection