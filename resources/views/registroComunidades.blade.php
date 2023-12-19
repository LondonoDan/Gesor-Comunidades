@extends('layaut/plantillas')

@section('tituloPagina', 'Mostrar registros de las comunidades')

@section('contenido')


<div class="card">
  <h5 class="card-header">Registros comunidades</h5>
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
                    <th>Editar</th>
                    <th>Agregar usuario a la comunidad</th>
                    <th>Eliminar</th>
                    <th>ver comunidades</th>
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
                                    <i class="fa-solid fa-person-circle-plus fa-xl"></i>
                                </button>
                            </form>
                        </td>
                        
                        <td>
                            <form action="{{route('personas.create', $item->id)}}"  method="GET">
                                
                                <button class="btn bttn-danger btn-sm">
                                    <i class="fa-solid fa-person-circle-plus fa-xl" style="color: #0000FF;"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('comunidades.deleted', $item->id)}}" method="GET">
                                
                                <button class="btn bttn-danger btn-sm">
                                    <i class="fa-solid fa-circle-xmark fa-xl" style="color: #aa2727;"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <a href="{{route('personas.showInfo', $item ->id)}}"> Ver personas en la comundad</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{route('personas.index')}}">
            <i class="fa-solid fa-rotate-left fa-lg"></i>Regresar al inicio</a>
        
    </p>
    </div>
</div>
@endsection