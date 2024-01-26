@extends('layaut/plantillas')

@section('tituloPagina', 'Reporte de datos')

@section('contenido')


<div class="card">
  <h5 class="card-header">Personas registradas en la comunidad</h5>
  <br>
  
  
  @csrf
    <div class="card-body">
    <p class="card-text">
        <div class="table table-responsive">
            <table class="table table-s table-bordered">
            @csrf

        <label for="comunidades">Filtrar Comunidad : </label>
            <select name="comunidad_id" id="comunidades">
            @foreach ($comunidades as $comunidad)
            <option value="{{$comunidad->id}}">{{ $comunidad->nombre }}</option>
            @endforeach
            </select>
            <div class="">
                <a href=""><input type="submit" class="btn btn-primary" value="Buscar"></a>
            </div>
            <br><br>

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
                        
                        
                    
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <h6>Cantidad de personas registradas en la comunidad : {{$datos ->count()}}</h6>
            <br>
        </div>
        <a href="{{route('personas.index')}}">
            <i class="fa-solid fa-rotate-left fa-lg"></i>Regresar al inicio</a>
        
    </p>
   </div>
</div>                     



@endsection