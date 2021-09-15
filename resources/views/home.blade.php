@extends('layouts.app')

@section('title', 'Home')

@section('content')

<h1>HOME</h1>

@if(session('ad.create.success'))
    <div class="alert alert-success">{{session('ad.create.success')}}</div>
@endif


<div class="container my-5">
<div class="row">
    <div class="col-12 col-md-6 offset-md-3">
        <h1>Bienvenidos a Rápido.es</h1>
        @foreach($ads as $ad)
        <div class="card mb-5" style="width: 18rem;">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> {{$ad->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$ad->price}}</h6>
              <p class="card-text"> {{$ad->body}}</p>
              <h6 class="card-subtitle mb-2">
                <strong>Categoria: <a href="#">{{$ad->category->name}}</a></strong>
                               <i>{{$ad->created_at->format('d/m/Y')}} - {{$ad->user->name }}</i></h6>
              <a href="#" class="card-link">Link</a>
            </div>
          </div>
          @endforeach
    </div>
</div>
</div>

@endsection