@extends('layouts.app')

@section('title', 'Home')

@section('content')

@if(session('ad.create.success'))
<div class="alert alert-success">{{session('ad.create.success')}}</div>
@endif

<div class="container my-5">
    <div class="row"> 
            <h1>Bienvenidos a Rápido.es</h1>
            @include('ad._ad') 
    </div>
</div>

@endsection
