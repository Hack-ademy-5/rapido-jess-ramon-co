@extends('layouts.app')

@section('title', 'Login')

@section('content')

<h1>Login</h1>

<form method="POST" action="{{route('login')}}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">e-mail</label>
        <input type="email" class="form-control" id="exampleInputPassword1" name="email">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>

@endsection