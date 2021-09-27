@extends('layouts.app')

@section('title', 'Home')

@section('content')

@if(session('ad.create.success'))
<div class="alert alert-success top-empty-space ">{{session('ad.create.success')}}</div>
@endif

<!-- H1 -->
<header class="container containerhome-text-h1 d-none  d-sm-none d-md-block">
    <div class="row  text-secondary text-center ">
        <span clas="text-home-h1 "> Rapido.es, {{__('ui.titulo1')}} <h1 class="text-family-h1 d-inline ">{{__('ui.titulo2')}}</h1> | {{__('ui.titulo3')}}</span>
    </div>
</header>

<div class="container text-center home-title">
    <h2>{{__('ui.compra')}}</h2>
</div>

<!-- MOSTRAR 6 últimas categorias - FIN -->

<div class="container my-5">
    <div class="row">
        @include('ad._ad')
    </div>
</div>
<!-- MOSTRAR 6 últimas categorias - FIN -->

@endsection
