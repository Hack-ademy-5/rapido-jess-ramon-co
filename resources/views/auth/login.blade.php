@extends('layouts.app')

@section('title', 'Login')

@section('content')


<section class="section-login-page">
    <div class="container px-5 py-3">
        <div class="row g-5">
            <div class="col-8 bg-white col-new-ad">
                <h1 class="mt-4">Sing in </h1>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label" class="mt-2">e-mail</label>
                        <input type="email" class="form-control" id="exampleInputPassword1" name="email"
                            {{old('email')}}>
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

                    <button type="submit" class="btn btn-dark" class="mt-2">Login</button>

                    <p class="text-dark mt-1">Crear tu cuenta en rapido.com <a class="text-reset text-decoration-none ms-2" href="{{route('register')}}"><u>CLICA AQUÍ</u></a></p>

                    <!-- <div class="div form-link d-flex mt-4 ms-5 ps-5 ">
                        <p class="text-dark">¿You dont have an account?
                            <a class="text-reset text-decoration-none ms-2" href="{{route('register')}}"> Register
                                hear</a></p>
                    </div> -->

                </form>
            </div>
        </div>
    </div>
</section>



@endsection
