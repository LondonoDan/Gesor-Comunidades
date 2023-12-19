@extends('layaut/plantillas')

@section('tituloPagina', 'Mostrar registros de usuarios')

@section('contenido')


<div class="card">
  <h5 class="card-header">Registro de usuarios</h5>
  @csrf
    <div class="card-body">
    
    <p class="card-text">
        <div class="table table-responsive">
            <table class="table table-s table-bordered">
            @csrf
                <thead>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Genero</th>
                    <th>Edad</th>
                    <th>Documento</th>
                    <th>Telefono</th>
                    <th>Comunidad</th>
                    <th>Correo electronico</th>
                    <th>Editar</th>
                    <th>Agregar una comunidad al usuario</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    @foreach ($datos as $item)
                    <tr>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->apellido}}</td>
                        <td>{{$item->genero}}</td>
                        <td>{{$item->edad}}</td>
                        <td>{{$item->documento}}</td>
                        <td>{{$item->telefono}}</td>
                        <td>{{$item->comunidad->nombre}}</td>
                        <td>{{$item->correo_electronico}}</td>
                        <td>
                            <form action="{{route('personas.edit', $item->id)}}" method="GET">
                                <button class="btn bttn-warning btn-sm" >
                                    <i class="fa-solid fa-person-circle-plus fa-xl"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('personas.edit', $item->id)}}" method="GET">
                                
                                <button class="btn bttn-danger btn-sm">
                                    <i class="fa-solid fa-person-circle-plus fa-xl" style="color: #0000FF;"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('personas.destroy', $item->id)}}" method="GET">
                                
                                <button class="btn bttn-danger btn-sm">
                                    <i class="fa-solid fa-circle-xmark fa-xl" style="color: #aa2727;"></i>
                                </button>
                            </form>
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