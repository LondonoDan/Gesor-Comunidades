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
        <br><br>
        <a href="{{route('user.showLoginForm')}}">Iniciar sesion</a>
        


    
</div>





@endsection
