@extends('layouts.app')

@section('title', 'Home')

@section('content')

<h1>HOME</h1>

@if(session('ad.create.success'))
    <div class="alert alert-success">{{session('ad.create.success')}}</div>
@endif

@endsection