@extends('layouts.app')

@section('title', 'Home')

@section('content')

<h1>Crear Anuncio</h1>

<form method="POST" action='{{route("ad.create")}}'>
    @csrf
    <div class="form-group">
        <label for="adName">Titulo</label>
        <input type="text" class="form-control" id="adName" name="title" value="{{old('title')}}">
    </div>
    @error('title')
    <small id="emailHelp" class="form-text" style="color:red;">
        {{ $message }}
    </small>
    @enderror

    <div class="form-group">
        <label for="adBody">Anuncio</label>
        <textarea class="form-control" name="body" id="adBody" cols="30" rows="10">{{old("body")}}</textarea>
    </div>

    @error('body')
    <small id="emailHelp" class="form-text" style="color:red;">
        {{ $message }}
    </small>
    @enderror

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
