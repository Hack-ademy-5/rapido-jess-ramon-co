@extends('layouts.app')

@section('title', 'Login')

@section('content')

<h1>Login</h1>

<form method="POST" action="{{route('login')}}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">e-mail</label>
        <input type="email" class="form-control" id="exampleInputPassword1" name="email" {{old('email')}}>
    </div>
    @error('email')
    <small id="emailHelp" class="form-text" style="color:red;">
        {{ $message }}
    </small>
    @enderror

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            name="password">
    </div>
    @error('password')
    <small id="emailHelp" class="form-text" style="color:red;">
        {{ $message }}
    </small>
    @enderror

    <button type="submit" class="btn btn-primary">Login</button>
    <div class="div form-link d-flex mt-4 ms-5 ps-5 ">
        <p class="text-white">¿You dont have an account? </p>
        <a class="text-reset text-decoration-none ms-2" href="{{route('register')}}"><u> Register here</u></a>
    </div>
</form>
@endsection
