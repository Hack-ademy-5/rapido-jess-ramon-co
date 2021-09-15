@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container my-5">
<div class="row">
        <h1>Anuncios por categoría: {{$category->name}}</h1>
        @include('ad._ad')
</div>
<div class="row my-3">
    <div class="col-12 col-md-6 offset-md-3">
    {{ $ads->links() }}
    </div>
</div>
</div>

@endsection