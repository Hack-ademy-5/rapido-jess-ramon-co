@extends('layouts.app')

@section('title', $ad->title)

@section('content')


@if(session('ad.create.success'))
<div class="alert alert-success">{{session('ad.create.success')}}</div>
@endif

<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12 col-md-4 offset-md-2 my-img-detail">
            <h1 class="text-center my-card-title">{{$ad->title}}</h1>  

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($ad->images as $image)
                <div class="carousel-item @if($loop->first)active @endif">
                <img src="{{$image->getUrl(300,150)}}" class="d-block w-100" alt="...">
                </div>
                @endforeach

            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>

            <strong class="footer-dcho">{{__('ui.categorias')}}:<a href="{{route('category.ads',['name'=>$ad->category->name,'id'=>$ad->category->id])}}"> {{$ad->category->name}}</a></strong>
        </div>
        <div class="col-12 col-md-4 offset-md-2 my-detail">
            <p>{{$ad->body}}</p>
            <div>
                <strong class="card-subtitle mb-2">{{__('Precio')}}: {{$ad->price}} €</strong>  
                <p>{{__('ui.creadoPor')}}: {{$ad->user->name }}</p>
                <p>{{$ad->created_at->format('d/m/Y')}}</p>
            </div>
        </div>
    </div>
</div>

@endsection