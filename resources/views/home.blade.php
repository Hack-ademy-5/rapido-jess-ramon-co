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

<div class="container text-secondary fw-light wrapper">
    <button class="row arrow-horizontal-scroll">
        <img src="public/images/left-arrow.png" alt="" class="img-arrow">
    </button>

    <div class="item-cat">Todas las categorias</div>

    <div class="item-cat">
        <i class="far fa-eye"></i>
        <small>Electrodomésticos</small>
    </div>
    
    <div class="item-cat">Mobiliario</div>
    <div class="item-cat">Deporte</div>
    <div class="item-cat">Móviles</div>
    <div class="item-cat">Libros</div>
    <div class="item-cat">Juegos</div>
    <div class="item-cat">Imobiles</div>
    <div class="item-cat">Motores</div>
    <div class="item-cat">Autos</div>

    <button class="arrow-horizontal-scroll">
        <img src="/public/images/right-arrow.png" alt="" class="img-arrow">
    </button>

</div>


<!-- Fin Carrousel de categorias -->



<!--  sección: mostrar último anuncio por categoria -->
<section class="main-section-home">

    <div class="container px-4 ">

        <div class="row g-4">

            <!-- caja 1 (cat1 - elec)-->
            <div class="col-md-6 col-lg-4">
                <!-- p-2_ 2 de padding alrededor -->
                <div class="p-1 border box-measure ">Electrodomésticos </div>
            </div>

            <!-- caja 2 (mensaje: Recicla)-->
            <div class="col-md-6 col-lg-4">
                <div class="p-4 box-measure d-none  d-sm-none d-md-block text-end box-with-text-one">
                    <h2 class="text-uppercase ">Gana dinero y ayuda al planeta</h2>
                    <p>Recicla · Reutiliza · Reduce</p>
                </div>
            </div>

            <!-- caja 3 (cat 2- mobiliario)-->
            <div class="col-md-6 col-lg-4">
                <div class="p-1 border box-measure">Mobiliario</div>
            </div>

            <!-- caja 4 (cat3 - deporte)-->
            <div class="col-md-6 col-lg-4">
                <div class="p-1 border box-measure">Deporte</div>
            </div>

            <!-- caja 5 (cat4 - moviles)-->
            <div class="col-md-6 col-lg-4">
                <div class="p-1 border box-measure">Mobiles</div>
            </div>

            <!-- caja 6 (Mensaje Reutiliza)-->
            <div class="col-md-6 col-lg-4">
                <div class="p-4 box-measure d-none  d-sm-none d-md-block text-end box-with-text-two">
                    <h2 class="text-uppercase">Reutiliza</h2>
                    <p>Vende las cosas que tienes almacenadas hace meses, ayuda a que otros disfruten de ellas.</p>
                </div>
            </div>

            <!-- caja 7(Cat5- Libros)-->
            <div class="col-md-6 col-lg-4">
                <div class="p-1 border box-measure">Libros</div>
            </div>

            <!-- caja 8 (Cat6-Juegos)-->
            <div class="col-md-6 col-lg-4">
                <div class="p-1 border box-measure">Juegos</div>
            </div>

            <!-- caja 9 (Mensaje: Reduce)-->
            <div class="col-md-6 col-lg-4">
                <div class="p-4 box-measure d-none  d-sm-none d-md-block text-end box-with-text-two">
                    <h2 class="text-uppercase">Reduce</h2>
                    <p>Rapido.es te ayuda a reducir las emisiones de CO2 desde la comodidad de tu casa.</p>



                </div>
            </div>
</section>





@endsection
