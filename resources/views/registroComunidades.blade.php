@extends('layaut/plantillas')

@section('tituloPagina', 'Mostrar registros de las comunidades')

@section('contenido')


<div class="card">
  <h5 class="card-header">Registros comunidades <i class="fa-solid fa-house"></i></h5>
  @csrf
    <div class="card-body">
    
    <p class="card-text">
        <div class="table table-responsive">
            <table class="table table-s table-bordered">
            @csrf
                <thead>
                    <th>Pais</th>
                    <th>Departamento</th>
                    <th>Municipio</th>
                    <th>Ubicación geográfica</th>
                    <th>Nombre de la comunidad</th>
                    <th>Editar registro</th>
                    <th>Agregar usuario a la comunidad</th>
                    <th>Eliminar registro</th>
                    <th>Ver personas dentro de la comunidad</th>
                </thead>
                <tbody>
                    @foreach ($dato as $item)
                    <tr>
                        <td>{{$item->pais}}</td>
                        <td>{{$item->departamento}}</td>
                        <td>{{$item->municipio}}</td>
                        <td>{{$item->ubicacion_geografica}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>
                            <form action="{{route('comunidades.edited', $item->id)}}" method="GET">
                                <button class="btn bttn-warning btn-sm" >
                                    <i class="fa-solid fa-pen fa-xl" ></i>
                                </button>
                            </form>
                        </td>
                        
                        <td>
                            <center>
                                <form action="{{route('personas.create', $item->id)}}"  method="GET">
                                <button class="btn bttn-danger btn-sm">
                                    <i class="fa-solid fa-person-circle-plus fa-xl" style="color: #0000FF;"></i>
                                </button>
                            </form></center>
                            
                        </td>
                        <td>
                            <center>
                            <form action="{{route('comunidades.deleted', $item->id)}}" method="GET">
                                <button class="btn bttn-danger btn-sm">
                                    <i class="fa-solid fa-circle-xmark fa-xl" style="color: #aa2727;"></i>
                                </button>
                            </form>
                            </center>
                        </td>
                        <td>
                        <center>
                            <a href="{{route('personas.showInfo', $item ->id)}}"> 
                                <i class="fa-solid fa-house-user fa-xl"></i>
                            </a>
                        </center>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('comunidades.created')}}">
                <i class="fa-solid fa-plus fa-lg"></i>Agregar una comunidad
            </a>
        </div>
        <a href="{{route('personas.index')}}">
            <i class="fa-solid fa-rotate-left fa-lg"></i>Regresar al inicio
        </a>
        
    </p>
    </div>
</div>
@endsection