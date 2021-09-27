@extends('layouts.app')

@section('title', 'Home')

@section('content')

@if(session('ad.create.success'))
<div class="alert alert-success">{{session('ad.create.success')}}</div>
@endif

<!-- <div class="container my-5">
    <div class="row"> 
            <h1>{{__('ui.welcome')}}</h1>
            @include('ad._ad') 
    </div>
</div> -->

<!-- TEXT(h1) -->

<header class="container containerhome-text-h1 d-none  d-sm-none d-md-block">
    <div class="row  text-secondary text-center ">
        <span clas="text-home-h1 "> Rapido.es, {{__('ui.titulo1')}} <h1 class="text-family-h1 d-inline ">{{__('ui.titulo2')}}</h1> | {{__('ui.titulo3')}}</span>
    </div>
</header>

<div class="container text-center home-title">
    <h2>{{__('ui.compra')}}</h2>
</div>

<!-- CARROUSEL 2  INICIO-->





<!-- CARROUSEL 2  FIN-->


<!--  sección: mostrar último anuncio por categoria -->

<section class="main-section-home">

<div class="container px-4 ">

<div class="row g-4">

<!-- caja 1 (cat1 - elec)-->
@foreach ($categories as $category )
@if ($category->ads()->latest()->first())
<div class="col-md-6 col-lg-4">
<!-- p-2_ 2 de padding alrededor -->

<div class="p-1 border box-measure ">  
@if ($category->ads()->latest()->first()->images()->first())
<img class="img-fluid" src="{{Storage::url($category->ads()->latest()->first()->images()->first()->file)}}" alt="">
@endif
{{$category->ads()->latest()->first()->title}}    
</div>
</div>
@endif
@if ($loop->iteration == 1)

<!-- caja 2 (mensaje: Recicla)-->
<div class="col-md-6 col-lg-4">
<div class="p-4 box-measure d-none d-sm-none d-md-block text-end box-with-text-one">
<h2 class="text-uppercase ">{{__('ui.card1')}}</h2>
<p>Recicla · Reutiliza · Reduce</p>
</div>
</div>
@endif

@if ($loop->iteration == 4)
<!-- caja 6 (Mensaje Reutiliza) -->
<div class="col-md-6 col-lg-4">
<div class="p-4 box-measure d-none d-sm-none d-md-block text-end box-with-text-two">
<h2 class="text-uppercase">Reutiliza</h2>
<p>{{__('ui.card2')}}</p>
</div>
</div>
@endif

@if ($loop->iteration == 6)
<!-- caja 6 (Mensaje Reutiliza) -->
<div class="col-md-6 col-lg-4">
<div class="p-4 box-measure d-none d-sm-none d-md-block text-end box-with-text-two">
<h2 class="text-uppercase">Reduce</h2>
<p>Rapido.es {{__('ui.card3')}}.</p>
</div>
</div>
@endif
@endforeach


</section>


@endsection
