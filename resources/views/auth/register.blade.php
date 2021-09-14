@extends('layouts.app')

@section('title', 'Registro')

@section('content')

<h1>Registro</h1>

<form method="POST" action="{{route('register')}}">
   @csrf 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">e-mail</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirmar Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
  </div>
  <button type="submit" class="btn btn-primary">Registrarse</button>
</form>

@endsection