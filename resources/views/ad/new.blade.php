@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- inicio diseño bootstrap -->

<section class="section-new-ad">
<div class="container px-5 py-3">
    <div class="row g-5">
        <div class="col-8 bg-white col-new-ad">
            <h1 class="main-tile-new-ad">{{__('ui.crearAnuncio') }}</h1>

            <!-- Inicio Form -->
            <form method="POST" action='{{route("ad.create")}}'>
                @csrf
                
                <div class="card-header" >
                    Nuevo anuncio (Secret: {{$uniqueSecret}})
                </div>    
                <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}">

                <!-- Producto -->
                <div class="form-group empty-bottom">
                    <label for="adName">{{__('ui.producto')}}</label>
                    <input type="text" class="form-control" id="adName" name="title" value="{{old('title')}}">
                </div>

                @error('title')
                <small id="emailHelp" class="form-text" style="color:red;">
                    {{ $message }}
                </small>
                @enderror

                <!-- Subir imagenes -->
                <div class="mb-3">
                <label for="adImages" class="form-label">Imagenes</label>
                <div class="dropzone" id="drophere"></div>
                @error('images')
                    <small class="alert alert-danger">{{ $message }}</small>
                @enderror
                </div>

                <!-- Descripción del producto -->
                <div class="form-group empty-bottom">
                    <label for="adBody">{{__('ui.descripcionAnuncio')}}</label>
                    <textarea class="form-control" name="body" id="adBody" cols="30"
                        rows="10">{{old("body")}}</textarea>
                </div>

                @error('body')
                <small id="emailHelp" class="form-text" style="color:red;">
                    {{ $message }}
                </small>
                @enderror

                <!-- Precio -->
                <div class="form-group empty-bottom">
                    <label for="adPrice">{{__('ui.precio')}}</label>
                    <input type="number" step="0.01" class="form-control" id="adPrice" aria-describedby="priceHelp"
                        name="price" value="{{old("price")}}">
                    @error('price')
                    <small id="priceHelp" class="form-text" style="color:red;">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Escoger categorías -->
                <div class="form-group text-bold me-5  ms-5 empty-bottom">
                    <label for="form-label" class="my-2"> {{__('ui.categorias')}}</label>
                    <select class="form-control" id="categories" name="category">
                        @foreach($categories ?? '' as $category)
                        <option value="{{$category->id}}" {{old('category') == $category->id ? 'selected' : ''}}>
                            {{$category->name}}
                        </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-dark empty-top text-white">Subir producto</button>
            </form>
            <!-- Fin  Form -->
        </div>
    </div>
</div>
</section>

@endsection
