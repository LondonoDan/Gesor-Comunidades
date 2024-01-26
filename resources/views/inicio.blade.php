@extends('layaut/plantillas')

@section('tituloPagina', 'Proyecto')

@section('contenido')
<div class="row">
    <h1>Bienvenido! <i class="fa-solid fa-people-roof"></i></h1>
    
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
    <br><br>

        <a href="{{route('personas.create')}}" style="color: #000000">Agregar un nuevo registro de usuario
        <i class="fa-solid fa-user-plus"></i></a>
        <a href="{{route('personas.show')}}" style="color: #000000">Mostrar registros de usuarios 
        <i class="fa-solid fa-address-book fa-lg"></i></a>
        <a href="{{route('comunidades.see')}}" style="color: #000000">Mostrar registro de las comunidades 
        <i class="fa-solid fa-shop fa-lg"></i></a>
        


    
</div>





@endsection
