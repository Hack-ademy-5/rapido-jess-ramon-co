@extends('layouts.app')

@section('title', $ad->title)

@section('content')

@if(session('ad.create.success'))
<div class="alert alert-success">{{session('ad.create.success')}}</div>
@endif

<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12 offset-md-3">
            <div class="card mb-5 my-card" style="width: 50%;">
                <h1 class="text-center my-card-title">{{$ad->title}}</h1>    
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                <strong class="text-center my-cardDetail">{{__('ui.categorias')}}: <a href="{{route('category.ads',['name'=>$ad->category->name,'id'=>$ad->category->id])}}">{{$ad->category->name}}</a></strong>
                <div class="card-body">
                    <p class="card-text"> {{$ad->body}}</p>
                    <h6 class="card-subtitle mb-2">{{__('Precio')}}: {{$ad->price}} €</h6>  
                    <i> - Creado por: {{$ad->user->name }} el {{$ad->created_at->format('d/m/Y')}}</i></h6>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection