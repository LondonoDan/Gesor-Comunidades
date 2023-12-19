@extends('layaut/plantillas')

@section('tituloPagina', 'Proyecto')

@section('contenido')
<div class="row">
    <h1>Bienvenido!</h1>
    @csrf
    <div class="row">
        <div class="col-sm-12">
            @if ($mensaje = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{$mensaje}}
            </div>
            @endif

        </div>
    </div>
    
        <a href="{{route('personas.create')}}">Agregar un nuevo registro de usuario</a>
        <a href="{{route('personas.show')}}">Mostrar registros de usuarios</a>
        <a href="{{route('comunidades.created')}}">Agregar una comunidad</a>
        <a href="{{route('comunidades.see')}}">Mostrar registro de las comunidades</a>
        


    
</div>





@endsection
