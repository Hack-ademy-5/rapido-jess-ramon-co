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
        <span clas="text-home-h1 "> Rapido.es, plataforma de <h1 class="text-family-h1 d-inline ">compra-venta de
                productos de segunda mano </h1>. Te ayudamos a ganar dinero y dejar un impacto postivo al
            planeta.</span>
    </div>
</header>

<div class="container text-center home-title">
        <h2>Compra o Vende ¿Qué quieres hacer hoy?</h2>
    </div>



<!-- Inicio Carrousel de categorias -->




<!-- Fin Carrousel de categorias -->



<!--  sección: mostrar último anuncio por categoria -->

<section class="main-section-home">

<div class="container px-4 ">

<div class="row g-4">

<!-- caja 1 (cat1 - elec)-->
@foreach($categories as $category)
@if ($category->ads()->latest()->first())
<div class="col-md-6 col-lg-4">
<!-- p-2_ 2 de padding alrededor -->
<div class="p-1 border box-measure "> {{$category->ads()->latest()->first()->title }} </div>
</div>
@endif
@if ($loop->iteration == 1)
<!-- caja 2 (mensaje: Recicla)-->
<div class="col-md-6 col-lg-4">
<div class="p-4 box-measure d-none d-sm-none d-md-block text-end box-with-text-one">
<h2 class="text-uppercase ">Gana dinero y ayuda al planeta</h2>
<p>Recicla · Reutiliza · Reduce</p>
</div>
</div>
@endif

@if ($loop->iteration == 4)
<!-- caja 6 (Mensaje Reutiliza) -->
<div class="col-md-6 col-lg-4">
<div class="p-4 box-measure d-none d-sm-none d-md-block text-end box-with-text-two">
<h2 class="text-uppercase">Reutiliza</h2>
<p>Vende las cosas que tienes almacenadas hace meses, ayuda a que otros disfruten de ellas.</p>
</div>
</div>
@endif

@if ($loop->iteration == 6)
<!-- caja 6 (Mensaje Reutiliza) -->
<div class="col-md-6 col-lg-4">
<div class="p-4 box-measure d-none d-sm-none d-md-block text-end box-with-text-two">
<h2 class="text-uppercase">Reduce</h2>
<p>Rapido.es te ayuda a reducir las emisiones de CO2 desde la comodidad de tu casa.</p>
</div>
</div>
@endif
@endforeach

</section>

@endsection
