
@extends('layaut/plantillas')


<br><br>
<form action="{{route('user.login')}}" method="POST">
@csrf
  <div>
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" name= "email" required>
  </div>

  <div>
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name= "password" required>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Ingresar</button>

  <a href="{{route('personas.index')}}">
            <i class="fa-solid fa-rotate-left fa-lg"></i>Regresar al inicio</a>
</form>

