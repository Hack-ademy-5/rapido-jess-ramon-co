@extends('layouts.app')

@section('title', 'Home')

@section('content')

<h1>{{__('ui.crearAnuncio') }}</h1>

<form method="POST" action='{{route("ad.create")}}'>
    @csrf
    <div class="form-group">
        <label for="adName">{{__('ui.producto')}}</label>
        <input type="text" class="form-control" id="adName" name="title" value="{{old('title')}}">
    </div>
    @error('title')
    <small id="emailHelp" class="form-text" style="color:red;">
        {{ $message }}
    </small>
    @enderror

    <div class="form-group">
        <label for="adBody">{{__('ui.descripcionAnuncio')}}</label>
        <textarea class="form-control" name="body" id="adBody" cols="30" rows="10">{{old("body")}}</textarea>
    </div>
    @error('body')
    <small id="emailHelp" class="form-text" style="color:red;">
        {{ $message }}
    </small>
    @enderror

    <div class="form-group">
        <label for="adPrice">{{__('ui.precio')}}</label>
        <input type="number" step="0.01" class="form-control" id="adPrice" aria-describedby="priceHelp" name="price"
            value="{{old("price")}}">
    @error('price')
        <small id="priceHelp" class="form-text" style="color:red;">{{ $message }}</small>
    @enderror
    </div>

    <div class="form-group text-bold me-5  ms-5">
        <label for="form-label" class="my-2"> {{__('ui.categorias')}}</label>
        <select class="form-control" id="categories" name="category">
            @foreach($categories ?? '' as $category)
            <option value="{{$category->id}}" {{old('category') == $category->id ? 'selected' : ''}}>{{$category->name}}
            </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
