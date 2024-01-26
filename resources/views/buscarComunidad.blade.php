@extends('layaut/plantillas')

@section('tituloPagina', 'Buscar comunidad')

@section('contenido')

<div class="card">
  <h5 class="card-header">Información de la comunidad </h5>
  <br>
  
  
  @csrf
    <div class="card-body">
    <p class="card-text">
        <div class="table table-responsive">
            <table class="table table-s table-bordered">
            @csrf

       
            <p>Ubicada en: </p>
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
            <br>
        </div>
        <a href="{{route('personas.index')}}">
            <i class="fa-solid fa-rotate-left fa-lg"></i>Regresar al inicio</a>
        
    </p>
   </div>
</div>               

@endsection